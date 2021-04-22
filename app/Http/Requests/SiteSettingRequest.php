<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteSettingRequest extends FormRequest
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
        $rules = [
            'phone'   => 'required|numeric|digits:11',
            'email'   => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ];

        if (request()->isMethod('post')) {
            $rules['image'] = 'required|mimes:jpg,jpeg,bmp,png|max:2024';
        }

        if (request()->isMethod('put') || request()->isMethod('patch')) {
            $rules['image'] = 'nullable|mimes:jpg,jpeg,bmp,png|max:2024';
        }

        return $rules;
    }
}
