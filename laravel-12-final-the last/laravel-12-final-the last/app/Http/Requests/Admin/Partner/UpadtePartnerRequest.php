<?php

namespace App\Http\Requests\Admin\Partner;

use Illuminate\Foundation\Http\FormRequest;

class UpadtePartnerRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'id'                => 'exists:partners,id',
            'ho_lot'            => "required|min:2|max:30",
            'ten'               => "required|min:2|max:30",
            'ngay_sinh'         => "required|",
            'so_dien_thoai'     => "required|max:10",
            'dia_chi'           => "required|min:5",
            'email'             => "required|email|unique:partners,email," . $this->id,
            'password'          => "required|min:5",
            'tinh_trang'        => "required|",
        ];
    }

    public function messages()
    {
        return [
            'id.*'                => 'Parner không tồn tại!',
            'ho_lot.*'            => "Họ lọt phải từ 2 đến 30 ký tự!",
            'ten.*'               => "Tên phải từ 2 đến 30 ký tự!",
            'ngay_sinh.*'         => "Ngày sinh chưa nhập!",
            'so_dien_thoai.*'     => "Số điện thoại phải là 10 số!",
            'dia_chi.*'           => "Địa chỉ phải từ 5 ký tự trở lên!",
            'email.required'      => "Email không được để trống!",
            'email.email'         => "Email không đúng định dạng!",
            'email.unique'        => "Email đã tồn tại!",
            'password.*'          => "Mật khẩu phải từ 5 ký tự trở lên!",
            'tinh_trang.*'        => "Tình trạng chưa nhập!",
        ];

    }
}
