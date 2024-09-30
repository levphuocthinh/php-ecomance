<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            "ho_va_dem" 		=> "required",
            "ten" 		        => "required",
            "so_dien_thoai" 	=> "required|digits:10",
            "email" 			=> "required|email|unique:customers,email," .$this->id,
            "ngay_sinh" 		=> "required|date",
        ];
    }

    public function messages()
    {
        return [
            "ho_va_dem.required"    => "Họ không được để trống",
            "ten.required"		    => "Họ không được để trống",
            "so_dien_thoai.*" 	    => "Số điện thoại phải là 10 số",
            "email.required" 	    => "Email phải đúng định dạng",
            "email.email" 	        => "Email phải đúng định dạng",
            "email.unique" 	        => "Email này đã đăng ký tài khoản trước đó",
            "ngay_sinh.*" 		    => "Ngày sinh phải đúng định dạng",

        ];
    }
}
