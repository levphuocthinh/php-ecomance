<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    use HasFactory;

    protected $table = 'khuyen_mais';

    protected $fillable = [
            'ma_khuyen_mai',
            'tinh_trang',
            'so_tien_giam',
            'id_customer_su_dung',
    ];
}
