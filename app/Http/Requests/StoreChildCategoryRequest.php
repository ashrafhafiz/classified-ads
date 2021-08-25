<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreChildCategoryRequest extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('child_categories')->ignore($this->child_category),
                'min:2',
                'max:255'
            ],
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'sub_category_id' => 'required',
        ];
    }
}
