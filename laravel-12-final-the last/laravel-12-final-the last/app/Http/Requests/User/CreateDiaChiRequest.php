<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateDiaChiRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "so_dien_thoai"     => 'required|digits_between:9,15',
            "ten_nguoi_nhan"    => "required|min:5",
            "dia_chi"           => "required|min:6",
            "ghi_chu"           => 'nullable|min:10',
            // Ghi chú được phép null, nhưng nếu đã nhập thì phải nhập ít nhất 10 ký tự
        ];
    }

    public function messages()
    {
        return [
            "so_dien_thoai.*"     => 'Số điện thoại chỉ được 9 đến 15 ký tự',
            "ten_nguoi_nhan.*"    => "Tên người nhận tối thiểu phải 5 ký tự",
            "dia_chi.*"           => "Địa chỉ ít nhất 6 ký tự",
            "ghi_chu.*"           => 'Ghi chú nếu có phải từ 10 ký tự',
            // Ghi chú được phép null, nhưng nếu đã nhập thì phải nhập ít nhất 10 ký tự
        ];
    }

}
