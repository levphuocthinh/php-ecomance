<?php

namespace App\Http\Requests\Admin\ChuyenMuc;

use Illuminate\Foundation\Http\FormRequest;

class CreateChuyenMucRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ten_chuyen_muc'        =>  'required|between:5,50',
            'slug_chuyen_muc'       =>  'required|between:4,50|unique:chuyen_mucs,slug_chuyen_muc',
            'id_chuyen_muc_cha'     =>  'required|min:0',
            'tinh_trang'            =>  'required|boolean',
            'hinh_anh'              =>  'required|max:195',
        ];
    }

    public function messages()
    {
        return [
            'ten_chuyen_muc.required'        =>  'Tên chuyên mục yêu cầu phải nhập',
            'ten_chuyen_muc.between'         =>  'Tên chuyên mục phải từ 5 đến 50 ký tự',
            'slug_chuyen_muc.required'       =>  'Slug chuyên mục yêu cầu phải nhập',
            'slug_chuyen_muc.between'        =>  'Slug chuyên mục phải từ 4 đến 50 ký tự',
            'slug_chuyen_muc.unique'         =>  'Slug chuyên mục đã tồn tại',
            'id_chuyen_muc_cha.*'            =>  'Chuyên mục phải là số',
            'tinh_trang.*'                   =>  'Tình trạng chọn không chính xác',
            'hinh_anh.*'                     =>  'Hình ảnh phải nhập và tối đa 195 ký tự',
        ];
    }
}
