<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;

    protected $table = 'don_hangs';

    protected $fillable = [
        'id_partner',
        'id_customer',
        'tong_tien',
        'tinh_trang',
        'ten_nguoi_nhan',
        'dia_chi',
        'so_dien_thoai',
        'ghi_chu',
        'ma_don_hang',
        'ma_gui_mail',
        'is_thanh_toan',
    ];

    CONST   DON_HANG_HUY_DO_KHACH           =   -1;
    CONST   DON_HANG_HUY_DO_PARTNER         =   -2;
    CONST   CHUA_XAC_NHAN                   =   0;
    CONST   DA_XAC_NHAN                     =   1;
    CONST   DANG_GIAO_HANG                  =   2;
    CONST   DA_NHAN_HANG                    =   3;


    CONST   DA_THANH_TOAN                   =   1;
    CONST   CHUA_THANH_TOAN                 =   0;
}
