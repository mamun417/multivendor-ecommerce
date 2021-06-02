<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\FileHandler;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Session;
use Throwable;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->query('perPage') ?? 10;
        $keyword = $request->query('keyword');

        $products = Auth::user()->products()->with('category', 'brand')->latest();

        if ($keyword) {
            $keyword  = '%' . $keyword . '%';
            $products = $products->where('name', 'like', $keyword)
                ->orWhere('price', 'like', $keyword)
                ->orWhere('code', 'like', $keyword)
                ->orWhereHas('brand', function ($query) use ($keyword) {
                    $query->where('name', 'like', $keyword);
                })
                ->orWhereHas('category', function ($query) use ($keyword) {
                    $query->where('name', 'like', $keyword);
                });
        }

        $products = $products->paginate($perPage);

        return view('admin.pages.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::active()->latest()->get();
        $brands     = Auth::user()->brands()->active()->latest()->get();

        return view('admin.pages.products.create', compact('categories', 'brands'));
    }

    /**
     * @throws Throwable
     */
    public function store(ProductRequest $request): \Illuminate\Http\JsonResponse
    {
        DB::beginTransaction();

        try {
            $product = Auth::user()->products()->create($request->validated() +
                ['status' => (bool)$request->status]
            );

            $this->saveImages($request, $product);
            $this->saveAttributes($request, $product);
            $this->seoCreate($request, $product);

            DB::commit();

            Session::flash('Product Created Successfully');

            return response()->json(['success' => true]);
        } catch (\Exception $exception) {
            report($exception);
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage()
            ], 500);
        }
    }

    public function saveImages($request, $product)
    {
        foreach (['thumbnail', 'images'] as $image_input) {
            foreach ($request->file($image_input) as $image) {
                $size_identifier = rand();

                $sizes = $image_input === 'images' ? Product::IMAGE_SIZES : Product::THUMBNAIL_SIZES;

                foreach ($sizes as $size) {
                    $image_path = FileHandler::upload(
                        $image,
                        'products',
                        [
                            'width'  => $size[0],
                            'height' => $size[1]
                        ]
                    );

                    $product->images()->create([
                        'url'             => Storage::url($image_path),
                        'base_path'       => $image_path,
                        'size'            => "$size[0]x$size[1]",
                        'size_identifier' => $size_identifier,
                    ]);
                }
            }
        }
    }

    public function saveAttributes($request, $product)
    {
        $attrs = [
            'color' => $request->input('color'),
            'size'  => $request->input('size')
        ];

        $has_any_attr = collect($attrs)->some(function ($value, $key) {
            return $value;
        });

        if ($has_any_attr) {
            $product->attributes()->updateOrCreate(
                [
                    'color' => @$product->attributes->color,
                    'size'  => @$product->attributes->size
                ],
                $attrs
            );
        }
    }

    public function seoCreate($request, $product)
    {
        $product->seo()->create([
            'meta_title'       => $request->input('meta_title'),
            'meta_keywords'    => $request->input('meta_keywords'),
            'meta_description' => $request->input('meta_description')
        ]);
    }

    public function show(Product $product)
    {
        return view('admin.pages.products.details', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::active()->latest()->get();
        $brands     = Auth::user()->brands()->active()->latest()->get();

        $product['images'] = collect($product->images()->get())
            ->filter(function ($image) {
                return $image['size'] === '720x660';
            });

        return view('admin.pages.products.edit', compact('categories', 'brands', 'product'));
    }

    /**
     * @throws Throwable
     */
    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $product = Auth::user()->products()->where('id', $product->id)->firstOrFail();

            $form_data           = $request->validated();
            $form_data['status'] = (bool)$request->status;

            $product->update($form_data);

            if ($request->file('product_img')) {
                // need to upload product photo
                foreach ($request->file('product_img') as $image) {
                    $image_path = FileHandler::upload($image, 'products', ['width' => Product::PRODUCT_WIDTH, 'height' => Product::PRODUCT_HEIGHT]);
                    $product->images()->create([ // save an image
                        'url'       => Storage::url($image_path),
                        'base_path' => $image_path,
                        'type'      => 'lg',
                    ]);
                }
            }

            $this->saveAttributes($product, $request);

            if ($request->input('meta_title')) {
                $product->seo()->update([
                    'meta_title'       => $request->input('meta_title'),
                    'meta_keywords'    => $request->input('meta_keywords'),
                    'meta_description' => $request->input('meta_description')
                ]);
            }

            DB::commit();

            return redirect()->back()->with('success', 'Product Updated Successfully');
        } catch (\Exception $exception) {
            report($exception);
            DB::rollBack();

            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function destroy(Product $product): RedirectResponse
    {
        // delete all image
        foreach ($product->images as $key => $image) {
            FileHandler::delete($image->base_path);
        }

        $product->images()->delete();
        $product->seo()->delete();

        $product->delete();

        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }

    public function changeStatus(Product $product): \Illuminate\Http\JsonResponse
    {
        $product->update(['status' => !$product->status]);

        return response()->json(['status' => true]);
    }

    public function removeProductImage(Request $request)
    {
        if ($request->ajax()) {
            $image_id = $request->image_id;
            $image    = Image::findOrFail($image_id);

            FileHandler::delete($image->base_path);

            $image->delete();

            return response()->json([
                'success' => true,
                'message' => 'Product Image Successfully deleted'
            ]);
        } else {
            abort(404);
        }

        return false;
    }
}
