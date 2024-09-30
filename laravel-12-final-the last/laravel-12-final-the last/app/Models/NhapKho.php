<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhapKho extends Model
{
    use HasFactory;

    protected $table = 'nhap_khos';

    protected $fillable = [
        'id_partner',
        'ma_phieu_nhap',
        'ngay_nhap',
        'id_san_pham',
        'ten_san_pham',
        'so_luong_nhap',
        'don_gia_nhap',
        'thanh_tien_nhap',
        'ghi_chu',
    ];
}
