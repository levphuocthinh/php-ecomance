<?php

namespace App\Http\Requests\Partner;

use Illuminate\Foundation\Http\FormRequest;

class CreateNhapKhoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ma_phieu_nhap'     =>  'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'ma_phieu_nhap.*'   =>  'Mã phiếu nhập phải từ 5 ký tự!'
        ];
    }
}
