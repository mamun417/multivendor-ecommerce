<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\CartHelper;
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
        // check exist in cart
        $cart_product = '';
        if (request('cart')) { // cart == rowId
            $cart_product = CartHelper::searchProduct('cart', request('cart'), 'rowId');
        }
        return view('frontend.pages.products.show', compact('product', 'cart_product'));
    }

    public function categoryProduct(Category $category)
    {
        $products = $category->products()->active()->get();
        return view('frontend.pages.products.category-wish-products', compact('products', 'category'));
    }

    public function categoriesWithProducts()
    {
        $categories = Category::active()->with('products')->get();
        return view('frontend.pages.products.categories-with-products', compact('categories'));
    }

    public function byBrand(Brand $brand)
    {
        $sortBy = request('sortBy', 'name');

        $products = $brand->products()->active();
        $products = ProductHelper::search($products);
        $products = $products->orderBy($sortBy)->paginate(21);

        return view('pages.products.index', compact('products'));
    }


}
