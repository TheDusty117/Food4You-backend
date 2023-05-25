<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFoodRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:150|unique:food,name',
            'price' => 'required',
            'ingredients' => 'required',
            'description' => 'required',
            // 'vegan' => '0',
            // 'spicy' => '0',
            // 'availability' => '1',
            // 'visibility' => '1',
        ];
    }
}
