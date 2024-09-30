<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    use HasFactory;

    protected $table = 'gio_hangs';

    protected $fillable = [
        'id_customer',
        'id_san_pham',
        'id_partner',
        'so_luong',
    ];
}
