<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::latest()->paginate();
        return view('admin.pages.coupon.index', compact('coupons'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Coupon $coupon)
    {
        //
    }

    public function edit(Coupon $coupon)
    {
        //
    }

    public function update(Request $request, Coupon $coupon)
    {
        //
    }

    public function destroy(Coupon $coupon)
    {
        //
    }

    public function changeStatus(Coupon $coupon): \Illuminate\Http\JsonResponse
    {
        $coupon->update(['status' => !$coupon->status]);

        return response()->json(['status' => true]);
    }
}
