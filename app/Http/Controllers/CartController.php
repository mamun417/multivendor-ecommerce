<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\CartHelper;
use App\Http\Controllers\Helpers\CouponHelper;
use App\Http\Controllers\Helpers\ProductHelper;
use App\Http\Controllers\Helpers\ShippingMethodHelper;
use App\Http\Requests\CartRequest;
use App\Http\Requests\ShippingRequest;
use App\Models\Coupon;
use App\Models\Offer;
use App\Models\Product;
use App\Models\ShippingAddress;
use Auth;
use Carbon\Carbon;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart_products = Cart::instance('cart')->content()->reverse();

        return view('frontend.pages.cart.cart', compact('cart_products'));
    }

    public function store(CartRequest $request, $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        $valid_quantity = CartHelper::checkProductStock($product->id, $request->input('qty'));

        if (!$valid_quantity) {
            return redirect()->back()->with('error', 'Quantity is not available.');
        }

        if ($request->exist_cart) {
            Cart::instance('cart')->remove(request('rowId'));
        }

        if (!$product->price) {
            $product_price = $product->discount_price;
        } else {
            $product_price = $product->discount_price ?? $product->price;
        }

        $product_price = (float)$product_price;

        $data = [
            'id'      => $product->id,
            'name'    => $product->name,
            'qty'     => $valid_quantity,
            'price'   => (float)$product_price,
            'weight'  => 0,
            'options' => [
                'slug'  => $product->slug,
                'image' => $product->images()->first()->url,
                'color' => $request->input('color') ?? '',
                'size'  => $request->input('size') ?? '',
            ]
        ];

        $cart_product = Cart::instance('cart')->add($data);

        Cart::setTax($cart_product->rowId, 0);

        return redirect(route('product.details', $slug) . '?cart=' . $cart_product->rowId)
            ->with('success', 'Product add to cart successfully.');
    }

    public function remove($rowId)
    {
        $exits = CartHelper::checkCartExitProduct('cart', $rowId, 'rowId');

        if (!$exits) {
            return back()->with('error', 'Product not found in your cart.');
        }

        Cart::instance('cart')->remove($rowId);

        return back()->with('success', 'Product remove from cart successfully.');
    }

    public function updateQty(Request $request, $rowId)
    {
        $request->validate([
            'qty' => 'required|numeric|min:1'
        ]);

        $exits = CartHelper::checkCartExitProduct('cart', $rowId, 'rowId');

        if (!$exits) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Product not found in your cart.'
                ]);
            }

            return back()->with('error', 'Product not found in your cart.');
        }

        $cart_product = Cart::instance('cart')->content()->get($rowId);

        $valid_quantity = CartHelper::checkProductStock($cart_product->id, $request->input('qty'));

        // stock 0
        if (!$valid_quantity) {
            Cart::instance('cart')->remove($rowId);
        } else {
            Cart::instance('cart')->update($rowId, $valid_quantity);
        }

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cart updated successfully.'
            ]);
        }

        return back()->with('success', 'Cart updated successfully.');
    }

    public function empty()
    {
        Cart::instance('cart')->destroy();

        return back()->with('success', 'Cart empty successful.');
    }

    public function checkout()
    {
        return view('pages.checkout.checkout');
    }

    public function shippingStore(ShippingRequest $request)
    {
        Auth::user()->shippingAddress()->updateOrCreate(['user_id' => auth()->id()], [
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'city'       => $request->city,
            'state'      => $request->state,
            'address'    => $request->address,
        ]);

        return redirect()->route('cart.order.page');
    }

    public function gotToOrderPage()
    {
        $shipping_methods = ShippingMethodHelper::getApplicableShippingMethods();

        $exist_shipping = ShippingAddress::where('user_id', auth()->id())->first();

        if ($exist_shipping) {
            return view('pages.order_submit.order-submit', compact('shipping_methods'));
        } else {
            return redirect()->back()->with('error', 'please fill-up your shipping address');
        }
    }

    public function applyCoupon(Request $request)
    {
        $coupon_code = $request->input('coupon');

        $exist = Coupon::where('code', $coupon_code)->first();

        if (isset($exist) && CouponHelper::validity($exist->id)) {
            \Session::put('coupon', $coupon_code);

            return response()->json([
                'success' => true,
                'message' => 'Coupon successfully applied!'
            ]);
        }
        \Session::forget('coupon');
        return response()->json([
            'success' => false,
            'message' => 'Coupon is not valid!'
        ]);
    }
}
