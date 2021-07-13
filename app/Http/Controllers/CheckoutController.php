<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\CartHelper;
use App\Http\Controllers\Helpers\CouponHelper;
use App\Http\Controllers\Helpers\ProductHelper;
use App\Http\Controllers\Helpers\ShippingMethodHelper;
use App\Http\Requests\CartRequest;
use Auth;
use Carbon\Carbon;
use Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart_products = Cart::instance('cart')->content()->reverse();

        return view('frontend.pages.orders.checkout', compact('cart_products'));
    }
}
