<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;

    protected $table  = 'chi_tiet_don_hangs';

    protected $fillable = [
        'id_partner',
        'id_customer',
        'id_don_hang',
        'id_san_pham',
        'so_luong_mua',
        'don_gia_mua',
        'thanh_tien_mua',
        'ten_san_pham',
    ];
}
