<?php

namespace App\Http\Requests\Partner;

use Illuminate\Foundation\Http\FormRequest;

class ChangeStatusSanPhamRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id'    => 'required|exists:san_phams,id',
        ];
    }

    public function messages()
    {
        return [
            'id.*' => 'Sản phẩm không tồn tại',
        ];
    }
}
