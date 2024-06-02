<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name.required'=>'Tên Thương hiệu không để trống',
            'name.min'=>'Tên Thương hiệu ít nhất 6 ký tự'

        ];
    }
}
