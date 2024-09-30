<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordAdminRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'new_password'  =>  'required|min:6',
            're_password'   =>  'required|same:new_password',
        ];
    }

    public function messages()
    {
        return [
            'new_password.*'  =>  'Mật khẩu phải từ 6 ký tự',
            're_password.*'   =>  'Mật khẩu nhập lại không giống',
        ];
    }
}
