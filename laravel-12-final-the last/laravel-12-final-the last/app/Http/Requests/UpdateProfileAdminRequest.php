<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileAdminRequest extends FormRequest
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
            'ho_lot'        =>  'required|min:2',
            'ten'           =>  'required|min:2',
            'so_dien_thoai' =>  'required|digits:10',
            'dia_chi'       =>  'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'ho_lot.*'        =>  'Họ lót phải từ 2 ký tự trở lên',
            'ten.*'           =>  'Tên phải từ 2 ký tự trở lên',
            'so_dien_thoai.*' =>  'Số điện thoại phải 10 chữ số',
            'dia_chi.*'       =>  'Địa chỉ phải từ 5 ký tự trở lên'
        ];
    }
}
