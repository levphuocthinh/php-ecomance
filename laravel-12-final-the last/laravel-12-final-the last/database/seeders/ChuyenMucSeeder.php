<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ChuyenMucSeeder extends Seeder
{
    public function run()
    {
        DB::table('chuyen_mucs')->delete();

        DB::table('chuyen_mucs')->truncate();

        DB::table('chuyen_mucs')->insert([
            [
                'ten_chuyen_muc'            => 'Tủ Lạnh',
                'slug_chuyen_muc'           => Str::slug('Tủ Lạnh'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 0,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1943/100670/tu-lanh-samsung-rf56k9041sg-sv-190x190.png',
            ],
            [
                'ten_chuyen_muc'            => 'Máy Lạnh',
                'slug_chuyen_muc'           => Str::slug('Máy Lạnh'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 0,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/2002/268972/casper-ic-09tl32-1.-550x160.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Máy Giặt',
                'slug_chuyen_muc'           => Str::slug('Máy Giặt'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 0,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1944/239156/toshiba-7-kg-aw-l805av-sg--600x600.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Gia Dụng',
                'slug_chuyen_muc'           => Str::slug('Gia Dụng'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 0,
                'hinh_anh'                  => 'https://codon.vn/help/blogs/kinh-nghiem-kinh-doanh-hang-gia-dung-2.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Quạt',
                'slug_chuyen_muc'           => Str::slug('Quạt'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 0,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1992/268449/quat-ban-senko-b1612-070223-040429-600x600.png',
            ],
            [
                'ten_chuyen_muc'            => 'Điện Thoại',
                'slug_chuyen_muc'           => Str::slug('Điện Thoại'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 0,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-den-thumb-600x600.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Lọc Nước',
                'slug_chuyen_muc'           => Str::slug('Lọc Nước'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 0,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/3385/255987/ro-sunhouse-sha8866k-7-loi-150223-101827-600x600.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Laptop',
                'slug_chuyen_muc'           => Str::slug('Laptop'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 0,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/44/231244/TimerThumb/apple-macbook-air-2020-mgn63saa-(74).jpg',
            ],
            //1
            [
                'ten_chuyen_muc'            => 'Tủ Lạnh Nhiều Cửa',
                'slug_chuyen_muc'           => Str::slug('Tủ Lạnh Nhiều Cửa'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 1,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1943/237927/sharp-sj-fx600v-sl-600x600.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Tủ Lạnh Ngăn Đá Dưới',
                'slug_chuyen_muc'           => Str::slug('Tủ Lạnh Ngăn Đá Dưới'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 1,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1943/200140/aqua-aqr-i298eb-bs-24-300x300.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Tủ Lạnh Ngăn Đá Trên',
                'slug_chuyen_muc'           => Str::slug('Tủ Lạnh Ngăn Đá Trên'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 1,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1943/294558/tu-lanh-lg-gv-b212wb-1-600x600.jpg',
            ],
            //2
            [
                'ten_chuyen_muc'            => 'Điều Hóa Tủ Đứng',
                'slug_chuyen_muc'           => Str::slug('Điều Hóa Tủ Đứng'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 2,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/2002/299812/may-lanh-tu-dung-lg-zpnq30gr5e0-thumb-1-550x160.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Điều Hòa Âm Tường',
                'slug_chuyen_muc'           => Str::slug('Điều Hòa Âm Tường'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 2,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/2002/299818/may-lanh-am-tran-lg-ztnq24gpla0-271222-021541-550x160.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Điều Hòa Treo Tường',
                'slug_chuyen_muc'           => Str::slug('Điều Hòa Treo Tường'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 2,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/2002/220272/gree-gwc07pa-k3d0p4-550x160.jpg',
            ],
            //3
            [
                'ten_chuyen_muc'            => 'Máy Giặt Cửa Ngang',
                'slug_chuyen_muc'           => Str::slug('Máy Giặt Cửa Ngang'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 3,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1944/236160/samsung-inverter-10kg-ww10ta046ae-sv-281221-062735-600x600.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Máy Giặt Cửa Trên',
                'slug_chuyen_muc'           => Str::slug('Máy Giặt Cửa Trên'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 3,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1944/293580/may-giat-toshiba-9-kg-aw-m1000fv-mk-281022-044106-600x600.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Tủ Chăm Sóc Quần Áo',
                'slug_chuyen_muc'           => Str::slug('Tủ Chăm Sóc Quần Áo'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 3,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1944/238066/tu-cham-soc-quan-ao-thong-minh-lg-s5mb-600x600.png',
            ],
            //4
            [
                'ten_chuyen_muc'            => 'Nồi Cơm Điện',
                'slug_chuyen_muc'           => Str::slug('Nồi Cơm Điện'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 4,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1922/197836/midea-mr-cm1823-thumb-fi-300x300.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Máy Xay Sinh Tố',
                'slug_chuyen_muc'           => Str::slug('Máy Xay Sinh Tố'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 4,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1985/174827/174827-600x600.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Bình Đun Siêu Tốc',
                'slug_chuyen_muc'           => Str::slug('Bình Đun Siêu Tốc'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 4,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1989/292705/binh-dun-sieu-toc-crystal-17-lit-k512pn-271222-054218-600x600.jpg',
            ],
             //5
             [
                'ten_chuyen_muc'            => 'Quạt Đứng',
                'slug_chuyen_muc'           => Str::slug('Quạt Đứng'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 5,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1992/268450/dung-senko-dh1600-0-600x600.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Quạt Sạc Điện',
                'slug_chuyen_muc'           => Str::slug('Quạt Sạc Điện'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 5,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1992/244496/244496-600x600.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Quạt Trần',
                'slug_chuyen_muc'           => Str::slug('Quạt Trần'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 5,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/1992/274069/tran-ac-acf01a563-070223-032107-600x600.jpg',
            ],
            //6
            [
               'ten_chuyen_muc'            => 'Chơi Game/Cấu Hình Cao',
               'slug_chuyen_muc'           => Str::slug('Chơi Game/Cấu Hình Cao'),
               'tinh_trang'                => random_int(0, 1),
               'id_chuyen_muc_cha'         => 6,
               'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/42/299034/oppo-find-n2-flip-purple-thumb-1-600x600-1-600x600.jpg',
           ],
           [
               'ten_chuyen_muc'            => 'Chụp Ảnh/ Quay Phim',
               'slug_chuyen_muc'           => Str::slug('Chụp Ảnh/ Quay Phim'),
               'tinh_trang'                => random_int(0, 1),
               'id_chuyen_muc_cha'         => 6,
               'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/42/247508/iphone-14-pro-vang-thumb-600x600.jpg',
           ],
           [
               'ten_chuyen_muc'            => 'Mỏng Nhẹ',
               'slug_chuyen_muc'           => Str::slug('Mỏng Nhẹ'),
               'tinh_trang'                => random_int(0, 1),
               'id_chuyen_muc_cha'         => 6,
               'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/42/302531/xiaomi-13-lite-xanh-thumb-1-600x600.jpg',
           ],
           //7
           [
                'ten_chuyen_muc'            => 'Lọc Nước RO',
                'slug_chuyen_muc'           => Str::slug('Lọc Nước RO'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 7,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/3385/233037/ro-mutosi-mp-290sk-9-loi-140223-054510-600x600-1-600x600.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Máy Lọc Điện Giải Ion Kiềm',
                'slug_chuyen_muc'           => Str::slug('Máy Lọc Điện Giải Ion Kiềm'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 7,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/3385/242533/ion-kiem-panasonic-tk-as45-3-tam-dien-cuc-150223-112002-600x600.jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Lọc Nước Nano,UF,MF',
                'slug_chuyen_muc'           => Str::slug('Lọc Nước Nano,UF,MF'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 7,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/3385/291470/robot-ionprince-37x-0-600x600.jpg',
            ],
            //8
           [
                'ten_chuyen_muc'            => 'Gaming',
                'slug_chuyen_muc'           => Str::slug('Gaming'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 8,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/44/269533/TimerThumb/acer-aspire-7-gaming-a715-42g-r05g-r5-nhqaysv007-(51).jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Học tập, văn phòng',
                'slug_chuyen_muc'           => Str::slug('Học tập, văn phòng'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 8,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/44/301634/TimerThumb/hp-15s-fq2716tu-i3-7c0x3pa-(11).jpg',
            ],
            [
                'ten_chuyen_muc'            => 'Đồ Họa Kỹ Thuật',
                'slug_chuyen_muc'           => Str::slug('Đồ Họa Kỹ Thuật'),
                'tinh_trang'                => random_int(0, 1),
                'id_chuyen_muc_cha'         => 8,
                'hinh_anh'                  => 'https://cdn.tgdd.vn/Products/Images/44/263980/TimerThumb/acer-nitro-5-gaming-an515-45-r6ev-r5-nhqbmsv006-(59).jpg',
            ],


        ]);
    }
}
