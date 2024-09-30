<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->delete();

        DB::table('customers')->truncate();

        DB::table('customers')->insert([
            [
                'email'             => 'quoclongdng@gmail.com',
                'so_dien_thoai'     => '0905523543',
                'ho'                => 'Nguyễn',
                'dem'               => 'Quốc',
                'ten'               => 'Long',
                'ngay_sinh'         => '1999-08-07',
                'is_active'         => 1,
                'is_block'          => 0,
                'password'          => bcrypt('123123'),
            ],
            [
                'email'             => 'vodinhquochuy1511@gmail.com',
                'so_dien_thoai'     => '0889470271',
                'ho'                => 'Võ',
                'dem'               => 'Đình Quốc',
                'ten'               => 'Huy',
                'ngay_sinh'         => '2001-11-15',
                'is_active'         => 1,
                'is_block'          => 0,
                'password'          => bcrypt('123123'),
            ],
            [
                'email'             => 'manhsubcheo2@gmail.com',
                'so_dien_thoai'     => '0369368075',
                'ho'                => 'Phùng',
                'dem'               => 'Văn',
                'ten'               => 'Mạnh',
                'ngay_sinh'         => '2003-03-13',
                'is_active'         => 1,
                'is_block'          => 0,
                'password'          => bcrypt('123123'),
            ],
            [
                'email'             => 'Bonpro2701@gmail.com',
                'so_dien_thoai'     => '0905074885',
                'ho'                => 'Phan',
                'dem'               => 'Minh',
                'ten'               => 'Tiến',
                'ngay_sinh'         => '2001-07-08',
                'is_active'         => 1,
                'is_block'          => 0,
                'password'          => bcrypt('123123'),
            ],
            [
                'email'             => 'thanhtruong23111999@gmail.com',
                'so_dien_thoai'     => '0376659652',
                'ho'                => 'Lê',
                'dem'               => 'Thanh',
                'ten'               => 'Trường',
                'ngay_sinh'         => '1999-11-23',
                'is_active'         => 1,
                'is_block'          => 0,
                'password'          => bcrypt('123123'),
            ],
            [
                'email'             => 'duykhanhtran17062003@gmail.com',
                'so_dien_thoai'     => '0905081330',
                'ho'                => 'Trần',
                'dem'               => 'Nguyễn Duy',
                'ten'               => 'Khánh',
                'ngay_sinh'         => '2003-07-16',
                'is_active'         => 1,
                'is_block'          => 0,
                'password'          => bcrypt('123123'),
            ],
        ]);
    }
}
