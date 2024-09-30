<?php

namespace Database\Seeders;

use App\Models\ChiTietDonHang;
use App\Models\Customer;
use App\Models\DonHang;
use App\Models\SanPham;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DonHangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('don_hangs')->delete();

        DB::table('don_hangs')->truncate();

        DB::table('chi_tiet_don_hangs')->delete();

        DB::table('chi_tiet_don_hangs')->truncate();

        $tong_so_don = 0;
        $tt = [-2, -1, 0, 1, 2, 3];
        $list_customer = Customer::all();

        $ngay_tru = 30;

        while ($tong_so_don < 60) {
            $temp = rand(1, 2);
            $ngay_tru = $ngay_tru - $temp < 0 ? 0 : $ngay_tru - $temp;

            $so_don = rand(1, 7);
            $tong_so_don += $tong_so_don + $so_don > 60 ? 60 - $tong_so_don : $so_don;

            for ($i = 0; $i < $so_don; $i++) {
                DB::table('don_hangs')->insert([
                    [
                        'id_partner'            => rand(1, 4),
                        'id_customer'           => $customer = rand(1, 6),
                        'tong_tien'             => 0,
                        'tinh_trang'            => $tt[rand(0, 5)],
                        'ten_nguoi_nhan'        => $list_customer[$customer - 1]->ho . ' ' . $list_customer[$customer - 1]->dem . ' ' . $list_customer[$customer - 1]->ten,
                        'dia_chi'               => '32 Xuân Diệu, Đà Nẵng',
                        'so_dien_thoai'         => '0905123123',
                        'ma_don_hang'           => $ma_don =  Str::uuid(),
                        'is_thanh_toan'         => rand(0, 1),
                        'created_at'            => $date = Carbon::now()->subDays($ngay_tru)->toDateTimeString(),
                    ],
                ]);

                $don_hang = DonHang::where('ma_don_hang', $ma_don)->first();
                $sanPham = SanPham::where('id_partner', $don_hang->id_partner)->get();

                for ($j = 0; $j < rand(1, 7); $j++) {
                    $rand = rand(1, count($sanPham)) - 1;
                    ChiTietDonHang::create([
                        'id_partner'        =>  $don_hang->id_partner,
                        'id_customer'       =>  $don_hang->id_customer,
                        'id_don_hang'       =>  $don_hang->id,
                        'id_san_pham'       =>  $sanPham[$rand]->id,
                        'so_luong_mua'      =>  $so_luong = rand(1, 5),
                        'don_gia_mua'       =>  $sanPham[$rand]->gia_khuyen_mai > 0 ? $sanPham[$rand]->gia_khuyen_mai : $sanPham[$rand]->gia_ban,
                        'thanh_tien_mua'    =>  $thanh_tien_mua = $sanPham[$rand]->gia_khuyen_mai > 0 ? $so_luong * $sanPham[$rand]->gia_khuyen_mai : $so_luong * $sanPham[$rand]->gia_ban,
                        'ten_san_pham'      =>  $sanPham[$rand]->ten_san_pham,
                        'created_at'        =>  $date,
                    ]);
                    $don_hang->tong_tien += $thanh_tien_mua;
                }

                $don_hang->save();
            }
        }
    }
}
