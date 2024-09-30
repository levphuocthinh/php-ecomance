<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiaChiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('dia_chis')->delete();

        DB::table('dia_chis')->truncate();

        DB::table('dia_chis')->insert([
            [
                'dia_chi'           =>  '202 Võ Nguyên Giáp, Đà Nẵng',
                'ten_nguoi_nhan'    =>  'Quốc Long',
                'so_dien_thoai'     =>  '0905789123',
                'ghi_chu'           =>  'Giao thẳng thu ngân',
                'id_customer'       =>  1,
            ],
            [
                'dia_chi'           =>  '11 Lương Thế Vinh, Đà Nẵng',
                'ten_nguoi_nhan'    =>  'Quốc Long',
                'so_dien_thoai'     =>  '0905789367',
                'ghi_chu'           =>  'Gọi trước 10 phút',
                'id_customer'       =>  1,
            ],
            [
                'dia_chi'           =>  '11 Nguyễn Trãi, Đà Nẵng',
                'ten_nguoi_nhan'    =>  'Quốc Huy',
                'so_dien_thoai'     =>  '09057894245',
                'ghi_chu'           =>  'Gọi trước 15 phút',
                'id_customer'       =>  2,
            ],
            [
                'dia_chi'           =>  '11 Hàm Nghi, Đà Nẵng',
                'ten_nguoi_nhan'    =>  'Văn Mạnh',
                'so_dien_thoai'     =>  '0905789280',
                'ghi_chu'           =>  'Đặt trước cửa nhà',
                'id_customer'       =>  3,
            ],
            [
                'dia_chi'           =>  '34 Nguyễn Văn Thoại, Đà Nẵng',
                'ten_nguoi_nhan'    =>  'Minh Tiến',
                'so_dien_thoai'     =>  '0905789754',
                'ghi_chu'           =>  'Nhà có người nhận',
                'id_customer'       =>  4,
            ],
            [
                'dia_chi'           =>  '34 Nguyễn Hữu Thọ, Đà Nẵng',
                'ten_nguoi_nhan'    =>  'Thanh Trường',
                'so_dien_thoai'     =>  '0905789648',
                'ghi_chu'           =>  'Gọi trước 10p',
                'id_customer'       =>  5,
            ],
            [
                'dia_chi'           =>  '34 Cổ Mân Cúc 1, Đà Nẵng',
                'ten_nguoi_nhan'    =>  'Duy Khánh',
                'so_dien_thoai'     =>  '0905789967',
                'ghi_chu'           =>  'Có người nhà nhận',
                'id_customer'       =>  6,
            ],
        ]);
    }
}
