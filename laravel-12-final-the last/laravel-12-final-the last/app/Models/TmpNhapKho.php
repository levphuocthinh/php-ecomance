<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmpNhapKho extends Model
{
    use HasFactory;

    protected $table = 'tmp_nhap_khos';

    protected $fillable = [
        'id_partner',   // hệ thống tự lấy
        'id_san_pham',  // người dùng gửi lên
        'so_luong',     // mặc định là 1
        'don_gia',      // mặc định là 0
        'thanh_tien',   // mặc định là 0
        'ghi_chu',      // mặc định là null
    ];
}
