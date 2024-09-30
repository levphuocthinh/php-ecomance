<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateGioHangRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_san_pham'       =>  'required|exists:san_phams,id',
            'so_luong'          =>  'required|min:1'
        ];
    }

    public function messages()
    {
        return [
            'id_san_pham.*'         =>  'Sản phẩm không tồn tại',
            'so_luong'              =>  'Số phải từ 1 trở lên'
        ];
    }
}
