<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatedroleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'rolename' => 'required|unique:roles,name'    
        ];
    }
    public function messages()
    {
        return [
            'rolename.required' => 'chưa có tên loại',
            'rolename.unique' => 'Tên loại bị trùng'
        ];
    }
}
