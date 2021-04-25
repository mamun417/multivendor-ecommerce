<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use App\Models\Coupon;

class CouponHelper extends Controller
{
    public static function getTypeDisplayName($key): string
    {
        return Coupon::APPLY_TYPE[$key];
    }
}
