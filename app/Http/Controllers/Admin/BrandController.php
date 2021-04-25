<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Auth;
use Exception;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $perPage = $request->query('perPage') ?: 10;
        $keyword = $request->query('keyword');

        //get all latest brand
        $brands = Auth::user()->brands()->latest();

        if ($keyword) {
            $keyword = '%' . $keyword . '%';
            $brands  = $brands->where('description', 'like', $keyword)->orWhere('name', 'like', $keyword);
        }

        $brands = $brands->paginate($perPage);

        //Show All Brands
        return view('admin.pages.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.pages.brands.create');
    }

    public function store(BrandRequest $request): \Illuminate\Http\RedirectResponse
    {
        try {
            Auth::user()->brands()->create([
                'name'        => $request->input('name'),
                'web_url'     => $request->input('web_url'),
                'description' => $request->input('description'),
                'status'      => (bool)$request->input('status'),
            ]);

            return redirect()->back()->with('success', 'Brand Created Successfully');
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function show(Brand $brand)
    {
        $brand = Auth::user()->brands()->where('id', $brand->id)->firstOrFail();

        return view('admin.pages.brands.show', compact('brand'));
    }

    public function edit(Brand $brand)
    {
        $brand = Auth::user()->brands()->where('id', $brand->id)->firstOrFail();

        return view('admin.pages.brands.edit', compact('brand'));
    }

    public function update(BrandRequest $request, Brand $brand): \Illuminate\Http\RedirectResponse
    {
        try {
            Auth::user()->brands()->where('id', $brand->id)->firstOrFail()->update([
                'name'        => $request->input('name'),
                'web_url'     => $request->input('web_url'),
                'description' => $request->input('description'),
                'status'      => (bool)$request->input('status'),
            ]);

            return redirect()->route('admin.brands.index')->with('success', 'Brand Updated Successfully');
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function destroy(Brand $brand): \Illuminate\Http\RedirectResponse
    {
        Auth::user()->brands()->where('id', $brand->id)->firstOrFail()->delete();

        return redirect()->route('admin.brands.index')->with('success', 'Brand Deleted Successfully');
    }

    public function changeStatus(Brand $brand): \Illuminate\Http\JsonResponse
    {
        $brand = Auth::user()->brands()->where('id', $brand->id)->firstOrFail();
        $brand->update(['status' => !$brand->status]);

        return response()->json(['status' => true]);
    }
}
