<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Partner extends Authenticatable
{
    use HasFactory;

    protected $table = 'partners';

    protected $fillable = [
        'ho_lot',
        'ten',
        'ngay_sinh',
        'so_dien_thoai',
        'dia_chi',
        'ma_so_thue',
        'ten_cong_ty',
        'anh_minh_chung',
        'email',
        'password',
        'tinh_trang',
        'tong_tien_da_ban',
        'tong_don_hang_da_ban',
        'tong_don_hang_doi_tra',
        'hash_reset',
        'hash_active',
    ];
}
