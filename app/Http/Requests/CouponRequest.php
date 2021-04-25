<?php

namespace App\Http\Requests;

use App\Models\Coupon;
use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $id = $this->coupon->id ?? null;

        return [
            'title'      => 'nullable',
            'code'       => 'required|max:255|unique:coupons,code,' . $id,
            'amount'     => 'required|numeric',
            'apply_type' => 'required|in:' . implode(',', array_keys(Coupon::APPLY_TYPE)),
            'started_at' => 'required|date',
            'expired_at' => 'required|date',
            'status'     => 'nullable'
        ];
    }
}
