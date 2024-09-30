<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('partners')->delete();

        DB::table('partners')->truncate();

        DB::table('partners')->insert([
            [
                'ho_lot'            =>  'Nguyễn Quốc',
                'ten'               =>  'Long',
                'ngay_sinh'         =>  '1999-08-07',
                'so_dien_thoai'     =>  '0905523543',
                'dia_chi'           =>  'Đà Nẵng, Việt Nam',
                'ma_so_thue'        =>  '0402147161',
                'ten_cong_ty'       =>  'DZFullStack Company',
                'email'             =>  'quoclongdng@gmail.com',
                'password'          =>  bcrypt(123456),
                'tinh_trang'        =>  1,
            ],
            [
                'ho_lot'            =>  'Lê Thanh',
                'ten'               =>  'Trường',
                'ngay_sinh'         =>  '2005-08-07',
                'so_dien_thoai'     =>  '0905' . random_int(100000, 999999),
                'dia_chi'           =>  'Đà Nẵng, Việt Nam',
                'ma_so_thue'        =>  '',
                'ten_cong_ty'       =>  '',
                'email'             =>  'lethanhtruong@gmail.com',
                'password'          =>  bcrypt(123456),
                'tinh_trang'        =>  2,
            ],
            [
                'ho_lot'            =>  'Võ Đình Quốc',
                'ten'               =>  'Huy',
                'ngay_sinh'         =>  '2006-08-07',
                'so_dien_thoai'     =>  '0905' . random_int(100000, 999999),
                'dia_chi'           =>  'Quảng Nam, Việt Nam',
                'ma_so_thue'        =>  '',
                'ten_cong_ty'       =>  '',
                'email'             =>  'vodinhquochuy@gmail.com',
                'password'          =>  bcrypt(123456),
                'tinh_trang'        =>  0,
            ],
            [
                'ho_lot'            =>  'Nguyễn Văn',
                'ten'               =>  'Phong',
                'ngay_sinh'         =>  '2006-08-07',
                'so_dien_thoai'     =>  '0905' . random_int(100000, 999999),
                'dia_chi'           =>  'Quảng Nam, Việt Nam',
                'ma_so_thue'        =>  '',
                'ten_cong_ty'       =>  '',
                'email'             =>  'nguyenvanphong@gmail.com',
                'password'          =>  bcrypt(123456),
                'tinh_trang'        =>  0,
            ],
            // [
            //     'ho_lot'            =>  'Phùng Văn',
            //     'ten'               =>  'Mạnh',
            //     'ngay_sinh'         =>  '2007-08-07',
            //     'so_dien_thoai'     =>  '0905' . random_int(100000, 999999),
            //     'dia_chi'           =>  'Quảng Trị, Việt Nam',
            //     'ma_so_thue'        =>  '',
            //     'ten_cong_ty'       =>  '',
            //     'email'             =>  'ongmanh@gmail.com',
            //     'password'          =>  bcrypt(123456),
            //     'tinh_trang'        =>  0,
            // ],
            // [
            //     'ho_lot'            =>  'Phan Minh',
            //     'ten'               =>  'Tiến',
            //     'ngay_sinh'         =>  '1999-08-07',
            //     'so_dien_thoai'     =>  '0905' . random_int(100000, 999999),
            //     'dia_chi'           =>  'Quảng Ninh, Việt Nam',
            //     'ma_so_thue'        =>  '',
            //     'ten_cong_ty'       =>  '',
            //     'email'             =>  'muvodich@gmail.com',
            //     'password'          =>  bcrypt(123456),
            //     'tinh_trang'        =>  1,
            // ],
            // [
            //     'ho_lot'            =>  'Trần Nguyễn Duy',
            //     'ten'               =>  'Khánh',
            //     'ngay_sinh'         =>  '2001-08-07',
            //     'so_dien_thoai'     =>  '0905' . random_int(100000, 999999),
            //     'dia_chi'           =>  'Hà Nội, Việt Nam',
            //     'ma_so_thue'        =>  '',
            //     'ten_cong_ty'       =>  '',
            //     'email'             =>  'skycuatoi@gmail.com',
            //     'password'          =>  bcrypt(123456),
            //     'tinh_trang'        =>  2,
            // ],
            // [
            //     'ho_lot'            =>  'Trương Công',
            //     'ten'               =>  'Thạch',
            //     'ngay_sinh'         =>  '2002-08-07',
            //     'so_dien_thoai'     =>  '0905' . random_int(100000, 999999),
            //     'dia_chi'           =>  'Huế City, Việt Nam',
            //     'ma_so_thue'        =>  '',
            //     'ten_cong_ty'       =>  '',
            //     'email'             =>  'mystone@gmail.com',
            //     'password'          =>  bcrypt(123456),
            //     'tinh_trang'        =>  1,
            // ],
            // [
            //     'ho_lot'            =>  'Nguyễn Vũ',
            //     'ten'               =>  'Huy',
            //     'ngay_sinh'         =>  '2002-08-07',
            //     'so_dien_thoai'     =>  '0905' . random_int(100000, 999999),
            //     'dia_chi'           =>  'Cần Thơ City, Việt Nam',
            //     'ma_so_thue'        =>  '',
            //     'ten_cong_ty'       =>  '',
            //     'email'             =>  'emtraingokhong@gmail.com',
            //     'password'          =>  bcrypt(123456),
            //     'tinh_trang'        =>  2,
            // ],
        ]);
    }
}
