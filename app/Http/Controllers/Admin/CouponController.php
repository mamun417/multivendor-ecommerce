<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;
use App\Models\Coupon;
use Exception;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::latest()->paginate();

        return view('admin.pages.coupon.index', compact('coupons'));
    }

    public function create()
    {
        $apply_types = Coupon::APPLY_TYPE;

        return view('admin..pages.coupon.create', compact('apply_types'));
    }

    public function store(CouponRequest $request): \Illuminate\Http\RedirectResponse
    {
        try {
            $extra_field = ['status' => (bool)$request->status];

            $form_data = array_merge($request->validated(), $extra_field);

            auth()->user()->coupons()->create($form_data);

            return redirect()->route('admin.coupons.index')->with('success', 'Coupon has been created successful.');
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function edit(Coupon $coupon)
    {
        $apply_types = Coupon::APPLY_TYPE;

        return view('admin.pages.coupon.edit', compact('coupon', 'apply_types'));
    }

    public function update(CouponRequest $request, Coupon $coupon): \Illuminate\Http\RedirectResponse
    {
        try {
            $extra_field = ['status' => (bool)$request->status];

            $form_data = array_merge($request->validated(), $extra_field);

            $coupon->update($form_data);

            return redirect()->route('admin.coupons.index')->with('success', 'Coupon has been updated successful.');
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function destroy(Coupon $coupon): \Illuminate\Http\RedirectResponse
    {
        $coupon->delete();

        return back()->with('success', 'Coupon has been deleted successful.');
    }

    public function changeStatus(Coupon $coupon): \Illuminate\Http\JsonResponse
    {
        $coupon->update(['status' => !$coupon->status]);

        return response()->json(['status' => true]);
    }
}
