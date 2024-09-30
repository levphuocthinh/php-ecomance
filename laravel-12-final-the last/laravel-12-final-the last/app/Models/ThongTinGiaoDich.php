<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongTinGiaoDich extends Model
{
    use HasFactory;

    protected $table = 'thong_tin_giao_diches';

    protected $fillable = [
        'Reference',
        'Description',
        'Content',
        'Amount',
    ];
}
