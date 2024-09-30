<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DeleteChuyenMucRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'required|exists:chuyen_mucs,id',
        ];
    }

    public function messages()
    {
        return [
            'id.*' => 'Chuyên mục không tồn tại',
        ];
    }
}
