<?php

namespace App\Http\Requests;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
class loginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }
    protected function failedValidation(Validator $validator) 
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json([
            'check'=>false,
            'msg' => $errors
        ], 200));
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'email' => 'required|exists:users,email',
                'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Vui lòng điền email tài khoản',
            'email.exists' => 'Tài khoản không có trong hệ thống',
            'rolename.unique' => 'Tên loại bị trùng'
        ];
    }

}
