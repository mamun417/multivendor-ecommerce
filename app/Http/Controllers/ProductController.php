<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\ProductHelper;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Auth;
use Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return view('frontend.pages.products.show', compact('product'));
    }

    public function byCategory(Category $category)
    {
        $sortBy = request('sortBy', 'name');

        $products = $category->products()->active();
        $products = ProductHelper::search($products);
        $products = $products->orderBy($sortBy)->paginate(21);

        return view('pages.products.index', compact('products'));
    }

    public function byBrand(Brand $brand)
    {
        $sortBy = request('sortBy', 'name');

        $products = $brand->products()->active();
        $products = ProductHelper::search($products);
        $products = $products->orderBy($sortBy)->paginate(21);

        return view('pages.products.index', compact('products'));
    }

    public function sizeWisePrice(Request $request)
    {
        $product = ProductPrice::where([
            'product_id' => $request->product_id,
            'size' => $request->size,
        ])->first();
        return $product;
    }

}
