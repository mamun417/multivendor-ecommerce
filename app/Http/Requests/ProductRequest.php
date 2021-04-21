<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
    public function rules()
    {
        $id = $this->product->id ?? null;

        $rules = [
            'category' => 'required|numeric',
            'brand' => 'required|numeric',
            'product_weight' => 'required',
            'product_name' => 'required|string|max:255|unique:products,name,' . $id,
            'product_code' => 'nullable|string|max:255',
            'product_colors' => 'nullable|array|max:255',
            'product_price' => 'required|numeric',
            'product_stock' => 'nullable|numeric',
            'product_details' => 'nullable|string',
        ];

        if (request('product_price')) {
            $rules['product_discount_price'] = 'nullable|numeric|lt:product_price';
        }

        if (request()->isMethod('post')) {
            $rules['product_img'] = 'required|array|min:1|max:3';
        }

        if (request()->isMethod('put') || request()->isMethod('patch')) {
            $rules['product_img'] = 'nullable|min:1|max:3';
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'product_size_arr.*' => 'product size',
            'product_price_arr.*' => 'product price',
            'product_stock_arr.*' => 'product stock',
            'discount_price_arr.*' => 'product discount price',
        ];
    }
}
