<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createduserRequest extends FormRequest
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
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'status' => 'required|max:1',
                'password' => 'required',
                'phone' => 'required|unique:users,phone|max:10',
                'id_roles' => 'required|exists'
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'name.required' => 'Chưa có tên tài khoản',  
    //         'email.required' => 'chưa có email',
    //         'email.unique' => 'Tên email đã có trong database',
    //         'email.email' => 'Không đúng định dạng email',
    //         'password.required' => 'Vui lòng điền mật khẩu',
    //         'phone.required' => 'Vui lòng điền số điện thoại',
    //         'phone.max' => 'Vui lòng điền số có 10 chữ số',
    //         'phone.unique' => 'Số đã có trong database',
    //         'id_roles.required' => 'The role field is required.',
    //         'id_roles.exists' => 'The selected role is invalid.',
    //         'status.required' => 'Vui lòng điền status id',
    //         'status.max' => 'Vui lòng điền 1 chữ số'
    //     ];
    // }
}
