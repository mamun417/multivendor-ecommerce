<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'vendor_name'   => ['required', 'string', 'max:255'],
            'name'          => ['required', 'string', 'max:255'],
            'nid'           => ['required', 'string', 'max:255'],
            'trade_licence' => ['required', 'string', 'max:255'],
            'mobile'        => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'string', 'min:6', 'confirmed'],
            'logo'          => ['nullable', 'image', 'max:10000'],
            'address'       => ['required', 'string']
        ];
    }
}
