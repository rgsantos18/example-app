<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'manufacturer' => ['required'],
            'manufacturer_email' => ['required', 'email'],
            'manufacturer_contact' => 'required',
            'manufacturer_address' => 'sometimes:required',
        ];
    }
}
