<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInfoUpdateRequest extends FormRequest
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
        $id    = $this->slider->id ?? null;
        $rules = [
            'name'    => 'required|string|max:255',
            'phone'   => 'required|numeric|digits:11|unique:users,phone,' . $id,
            'email'   => 'required|email|max:255',
            'address' => 'required|string|max:255'
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
