<?php

namespace App\Http\Requests\Partner;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ho_lot'        =>  'required|min:2',
            'ten'           =>  'required|min:2',
            'ngay_sinh'     =>  'required|date',
            'so_dien_thoai' =>  'required|digits:10',
            'dia_chi'       =>  'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'ho_lot.*'        =>  'Họ lót phải từ 2 ký tự trở lên',
            'ten.*'           =>  'Tên phải từ 2 ký tự trở lên',
            'ngay_sinh.*'     =>  'Ngày sinh phải là định dạng ngày tháng',
            'so_dien_thoai.*' =>  'Số điện thoại phải 10 chữ số',
            'dia_chi.*'       =>  'Địa chỉ phải từ 5 ký tự trở lên'
        ];
    }
}
