<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateBrandRequest extends FormRequest
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
        $id = is_object(($this->brand)? $this->brand->id: $this->brand) ?? null;
        return [
            'name' => [
                'required',
                'min:3',
                'max:150',
            //    'unique:brands,name,'.$id, тоже самое, что и 34
            //    Rule::unique('brand', 'name')->ignore($id)
                ],
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Too short',
            'name.email' => 'Invalid email',
            'name.unique' => 'Такое имя уже занято'
        ];
    }
}
