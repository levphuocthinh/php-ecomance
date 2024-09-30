<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuyenMuc extends Model
{
    use HasFactory;

    protected $table = 'chuyen_mucs';

    protected $fillable = [
        'ten_chuyen_muc',
        'slug_chuyen_muc',
        'id_chuyen_muc_cha',
        'tinh_trang',
        'hinh_anh',
    ];
}
