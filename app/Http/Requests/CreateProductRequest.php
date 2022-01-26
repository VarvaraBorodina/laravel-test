<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name' => 'required|min:3|max:20',
            'img' => 'image',
            'price' => 'required|min:1|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'Too long',
            'name.nim' => 'Too short',
            'img.image' => 'Invalid format',
            'price.min' => 'Price should be bigger then 0',
            'price.integer' => 'Should be a number'
        ];
    }
}
