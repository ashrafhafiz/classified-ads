<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdvertisementRequest extends FormRequest
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
            'feature_image' => 'required|mimes:png,jpg,jpeg',
            'first_image' => 'nullable|mimes:png,jpg,jpeg',
            'second_image' => 'nullable|mimes:png,jpg,jpeg',
            'category_id' => 'required',
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'price_status' => 'required',
            'product_condition' => 'required',
            'country_id' => 'required',
            'phone_number' => 'required',
        ];
    }
}
