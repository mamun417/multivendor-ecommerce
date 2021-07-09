<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;
use App\Models\Coupon;
use Carbon\Carbon;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = auth()->user()->coupons()->latest()->paginate();

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
            $form_data           = $request->validated();
            $form_data['status'] = (bool)$request->status;

            auth()->user()->coupons()->create($form_data);

            return redirect()->route('admin.coupons.index')->with('success', 'Coupon has been created successful.');
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit(Coupon $coupon)
    {
        $this->authorize('coupon-belongs-to-vendor', $coupon);

        $apply_types = Coupon::APPLY_TYPE;

        return view('admin.pages.coupon.edit', compact('coupon', 'apply_types'));
    }

    /**
     * @throws AuthorizationException
     */
    public function update(CouponRequest $request, Coupon $coupon): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('coupon-belongs-to-vendor', $coupon);

        try {
            $form_data           = $request->validated();
            $form_data['status'] = (bool)$request->status;

            $coupon->update($form_data);

            return redirect()->route('admin.coupons.index')->with('success', 'Coupon has been updated successful.');
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function checkValidate($coupon_id): bool
    {
        $coupon = Coupon::where('id', $coupon_id)->active()->first();

        if (!$coupon) {
            return false;
        }

        $is_started = Carbon::instance($coupon->started_at)->isBefore(now());
        $is_expired = Carbon::instance($coupon->expired_at)->isBefore(now());

        return $is_started && !$is_expired;
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(Coupon $coupon): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('coupon-belongs-to-vendor', $coupon);

        $coupon->delete();

        return back()->with('success', 'Coupon has been deleted successful.');
    }

    /**
     * @throws AuthorizationException
     */
    public function changeStatus(Coupon $coupon): \Illuminate\Http\JsonResponse
    {
        $this->authorize('coupon-belongs-to-vendor', $coupon);

        $coupon->update(['status' => !$coupon->status]);

        return response()->json(['status' => true]);
    }
}
