<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        $mobile_and_gadgets = Product::with('category')->whereHas('category', function($query){
            $query->where('slug', 'mobile-&-gadgets');
        })->get();
        $fashion_accessories = Product::with('category')->whereHas('category', function($query){
            $query->where('slug', 'fashion-accessories');
        })->get();
        $home_appliances = Product::with('category')->whereHas('category', function($query){
            $query->where('slug', 'home-appliances');
        })->get();
        $health_and_beauty = Product::with('category')->whereHas('category', function($query){
            $query->where('slug', 'health-&-beauty');
        })->get();
        $bikes_and_car = Product::with('category')->whereHas('category', function($query){
            $query->where('slug', 'bikes-&-car');
        })->get();

        $brands = Brand::all();
        return view('home', compact('products',
            'mobile_and_gadgets',
            'fashion_accessories',
            'home_appliances',
            'health_and_beauty',
            'bikes_and_car',
            'brands',
        ));
    }
}
