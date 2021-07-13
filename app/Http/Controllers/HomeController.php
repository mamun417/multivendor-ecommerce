<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::active()->latest()->get();

        $brands = Brand::all();

        return view('home', compact('products', 'brands',));
    }
}
