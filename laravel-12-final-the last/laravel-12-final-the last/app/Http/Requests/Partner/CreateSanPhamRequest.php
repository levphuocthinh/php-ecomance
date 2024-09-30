<?php

namespace App\Http\Requests\Partner;

use Illuminate\Foundation\Http\FormRequest;

class CreateSanPhamRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ten_san_pham'      => 'required|min:5',
            'slug_san_pham'     => 'required|unique:san_phams,slug_san_pham',
            'id_chuyen_muc'     => 'required|numeric|exists:chuyen_mucs,id',
            'hinh_anh'          => 'required',
            'tinh_trang'        => 'required|numeric|between:0,1',
            'gia_ban'           => 'required|numeric',
            'gia_khuyen_mai'    => 'numeric',
            'mo_ta_ngan'        => 'required|min:10',
            'mo_ta_chi_tiet'    => 'required|min:20',
        ];
    }

    public function messages()
    {
        return [
            'ten_san_pham.*'            => 'Tên sản phẩm phải nhiều hơn 5 ký tự',
            'slug_san_pham.required'    => 'Slug sản phẩm không được bỏ trống',
            'slug_san_pham.unique'      => 'Sản phẩm đã tồn tại',
            'id_chuyen_muc.required'    => 'Phải chọn chuyên mục cho sản phẩm',
            'id_chuyen_muc.numeric'     => 'Chuyên mục phải chọn đúng yêu cầu',
            'id_chuyen_muc.exists'      => 'Chuyên mục không tồn tại',
            'hinh_anh.*'                => 'Hình ảnh không được bỏ trống',
            'tinh_trang.*'              => 'Tình trạng phải chọn đúng yêu cầu',
            'gia_ban.required'          => 'Giá bán không được bỏ trống',
            'gia_ban.numeric'           => 'Giá bán phải là một số',
            'gia_khuyen_mai.numeric'    => 'Giá khuyến mãi phải là một số',
            'mo_ta_ngan.*'              => 'Mô tả ngắn phải nhiều hơn 10 ký tự',
            'mo_ta_chi_tiet.*'          => 'Mô tả chi tiết phải nhiều hơn 20 ký tự',
        ];
    }
}
