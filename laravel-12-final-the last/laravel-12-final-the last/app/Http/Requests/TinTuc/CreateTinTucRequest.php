<?php

namespace App\Http\Requests\TinTuc;

use Illuminate\Foundation\Http\FormRequest;

class CreateTinTucRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'tieu_de'           => 'required|min:5',
            'slug_tin_tuc'      => 'required|unique:tin_tucs,slug_tin_tuc',
            'hinh_anh'          => 'required',
            'mo_ta_ngan'        => 'required|min:10',
            'chi_tiet'          => 'required|min:20',
            'tinh_trang'        => 'required|numeric|between:0,1',
        ];
    }
    public function messages()
    {
        return [
            'tieu_de.*'                 => 'Tiêu đề phải nhiều hơn 5 ký tự',
            'slug_tin_tuc.required'     => 'Slug tin tức không được bỏ trống',
            'slug_tin_tuc.unique'       => 'Bài viết đã tồn tại',
            'hinh_anh.*'                => 'Hình ảnh không được bỏ trống',
            'mo_ta_ngan.*'              => 'Mô tả ngắn phải nhiều hơn 10 ký tự',
            'chi_tiet.*'                => 'Mô tả chi tiết phải nhiều hơn 20 ký tự',
            'tinh_trang.*'              => 'Tình trạng phải chọn đúng yêu cầu',
        ];
    }
}
