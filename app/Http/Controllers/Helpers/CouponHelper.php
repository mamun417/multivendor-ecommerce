<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Carbon\Carbon;

class CouponHelper extends Controller
{
    public static function getTypeDisplayName($key): string
    {
        return Coupon::APPLY_TYPE[$key];
    }

    public static function validity($coupon_id): bool
    {
        $coupon = Coupon::find($coupon_id);
        if (!$coupon) {
            return false;
        }
        $status     = $coupon->status;
        $is_started = Carbon::instance($coupon->started_at)->isBefore(now());
        $is_expired = Carbon::instance($coupon->expired_at)->isBefore(now());

        return $status && $is_started && !$is_expired;
    }
}
