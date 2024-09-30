<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id'                => 'exists:admins,id',
            'ho_lot'            => "required|min:2|max:30",
            'ten'               => "required|min:2|max:30",
            'id_rule'           => "required",
            'so_dien_thoai'     => "required|max:10",
            'dia_chi'           => "required|min:5",
            'email'             => "required|email|unique:admins,email," . $this->id,
            'password'          => "required|min:5",
            'is_active'         => "required|",
        ];
    }

    public function messages()
    {
        return [
            'id.*'                => 'Admin không tồn tại!',
            'ho_lot.*'            => "Họ lọt phải từ 2 đến 30 ký tự!",
            'ten.*'               => "Tên phải từ 2 đến 30 ký tự!",
            'id_rule'             => "Rule không được để trống",
            'so_dien_thoai.*'     => "Số điện thoại phải là 10 số!",
            'dia_chi.*'           => "Địa chỉ phải từ 5 ký tự trở lên!",
            'email.required'      => "Email không được để trống!",
            'email.email'         => "Email không đúng định dạng!",
            'email.unique'        => "Email đã tồn tại!",
            'password.*'          => "Mật khẩu phải từ 5 ký tự trở lên!",
            'is_active.*'         => "Tình trạng chưa nhập!",
        ];

    }
}
