<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = 'san_phams';

    protected $fillable = [
        'ten_san_pham',
        'slug_san_pham',
        'so_luong_nhap',
        'so_luong_ban',
        'id_partner',
        'hinh_anh',
        'tinh_trang',
        'mo_ta_ngan',
        'mo_ta_chi_tiet',
        'gia_ban',
        'gia_khuyen_mai',
        'id_chuyen_muc',
    ];
}
