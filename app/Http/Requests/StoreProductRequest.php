<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name'=>'required|min:6'
        ];
    }
    public function message(): array
    {
        return [
            'name.required'=>'Tên Sản Phẩm không để trống',
            'name.min'=>'Tên Sản Phẩm ít nhất 6 ký tự'

        ];
    }
}
