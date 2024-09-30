<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use HasFactory;
    protected $table = 'tin_tucs';

    protected $fillable = [
        'tieu_de',
        'slug_tin_tuc',
        'hinh_anh',
        'mo_ta_ngan',
        'chi_tiet',
        'tinh_trang',
    ];
}
