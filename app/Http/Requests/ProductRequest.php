<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

/**
 * @property mixed status
 */
class ProductRequest extends FormRequest
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
    public function rules(Request $request)
    {
        $id = $this->product->id ?? null;

        $rules = [
            'category_id' => 'required|numeric',
            'brand_id'    => 'required|numeric',
            'weight'      => 'required',
            'name'        => 'required|string|max:255|unique:products,name,' . $id,
            'code'        => 'nullable|string|max:255',
            'price'       => 'required|numeric',
            'stock'       => 'nullable|numeric',
            'details'     => 'nullable|string',
        ];

        if (request('price')) {
            $rules['discount_price'] = 'nullable|numeric|lt:price';
        }

        if (request()->isMethod('post')) {
            $rules['thumbnail.*'] = 'required|mimes:jpg,jpeg,bmp,png,JPG,JPEG,BMP,PNG|max:5120';
        }

        if (request()->isMethod('put') || request()->isMethod('patch')) {
            $rules['thumbnail.*'] = 'nullable|mimes:jpg,jpeg,bmp,png,JPG,JPEG,BMP,PNG|max:5120';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'thumbnail.*.mimes' => 'Only jpeg, png, jpg, JPG, JPEG, PNG and BMP images are allowed',
            'thumbnail.*.max'   => 'Max file size 5 MB'
        ];
    }
}
