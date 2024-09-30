<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaChi extends Model
{
    use HasFactory;

    protected $table = 'dia_chis';

    protected $fillable = [
        'dia_chi',
        'ten_nguoi_nhan',
        'so_dien_thoai',
        'ghi_chu',
        'id_customer',
    ];
}
