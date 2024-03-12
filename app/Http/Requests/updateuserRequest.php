<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateuserRequest extends FormRequest
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
                'name' => 'required|exists:users,name',
                'email' => 'required|exists:users,email',
                'phone' => 'required|exists:users_system,phone|max:10',
                'id_roles' => 'required',
                'status' => 'required|max:1',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Chưa có tên tài khoản',
            'name.exists' => 'Tên tài khoản không có trong database',
            'email.required' => 'chưa có email',
            'email.exists' => 'Tên email không có trong database',
            'phone.required' => 'Vui lòng điền số điện thoại',
            'phone.max' => 'Vui lòng điền số có 10 chữ số',
            'phone.exists' => 'Số không có trong database',
            'id_roles.required' => 'Vui lòng điền ID roles',
            'status.required' => 'Vui lòng điền status id',
            'status.max' => 'Vui lòng điền 1 chữ số'
        ];
    }
}
