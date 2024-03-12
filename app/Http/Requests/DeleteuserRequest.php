<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteuserRequest extends FormRequest
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
                'id' => 'required|exists:users', 
        ];
    }
    public function messages()
    {
        return [
            'id.required' => 'Chưa có loại id cần update',
            'id.exists' => 'Loại id rolename không tồn tại'
        ];
    }
}
