<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateDiaChiRequest;
use App\Mail\XacNhanDonHangMail;
use App\Models\ChiTietDonHang;
use App\Models\DonHang;
use App\Models\GioHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class DonHangController extends Controller
{
    public function store(CreateDiaChiRequest $request)
    {
        $customer       = Auth::guard('user')->user();
        // 1. Toàn bộ giỏ hàng của user đang login

        $dsPartner     = GioHang::where('id_customer', $customer->id)
                                ->select('gio_hangs.id_partner', DB::raw('SUM(san_phams.gia_khuyen_mai * gio_hangs.so_luong) as thanh_tien'))
                                ->join('san_phams', 'gio_hangs.id_san_pham', 'san_phams.id')
                                ->groupBy('gio_hangs.id_partner')
                                ->get();
        foreach($dsPartner as $k => $v) {
            $donhang = DonHang::create([
                'id_partner'        =>  $v->id_partner,
                'id_customer'       =>  $customer->id,
                'tong_tien'         =>  $v->thanh_tien,  // chưa có, xíu nữa tính nhé
                'tinh_trang'        =>  \App\Models\DonHang::CHUA_XAC_NHAN,  // 0
                'is_thanh_toan'     =>  \App\Models\DonHang::CHUA_THANH_TOAN,  // 0
                'ten_nguoi_nhan'    =>  $request->ten_nguoi_nhan,
                'dia_chi'           =>  $request->dia_chi,
                'so_dien_thoai'     =>  $request->so_dien_thoai,
                'ghi_chu'           =>  $request->ghi_chu,
                'ma_don_hang'       =>  Str::uuid(),
            ]);

            // Xác định đại lý đang duyệt qua $v->id_partner nó đang bán cho $customer này mấy món
            $dsSP       =   GioHang::where('id_customer', $customer->id)
                                   ->where('gio_hangs.id_partner', $v->id_partner)
                                   ->join('san_phams', 'gio_hangs.id_san_pham', 'san_phams.id')
                                   ->select('gio_hangs.*', 'san_phams.gia_khuyen_mai', 'san_phams.ten_san_pham')
                                   ->get(); // trả về 1 mảng

            // Kiểm tra số lượng
            $check = 1;
            $mess  = "Danh Sách Sản Phẩm:<br>";
            foreach($dsSP as $k_1 => $v_1) {
                $sanPham    = SanPham::find($v_1->id_san_pham);
                $a          = $sanPham->so_luong_nhap;
                $b          = $sanPham->so_luong_ban;
                $c          = $v_1->so_luong;
                if($b + $c > $a)    {
                    $mess   = $mess . $sanPham->ten_san_pham . "<br>";
                    $check  = 0;
                }
            }

            if($check == 0) {
                return response()->json([
                    'status'    => 0,
                    'message'   => $mess,
                ]);
            }

            foreach($dsSP as $k_1 => $v_1) {
                ChiTietDonHang::create([
                    'id_partner'        =>  $v_1->id_partner,
                    'id_customer'       =>  $v_1->id_customer,
                    'id_don_hang'       =>  $donhang->id,
                    'id_san_pham'       =>  $v_1->id_san_pham,
                    'so_luong_mua'      =>  $v_1->so_luong,
                    'don_gia_mua'       =>  $v_1->gia_khuyen_mai,
                    'thanh_tien_mua'    =>  $v_1->so_luong * $v_1->gia_khuyen_mai,
                    'ten_san_pham'      =>  $v_1->ten_san_pham,
                ]);

                $v_1->delete();
            }
        }

        $chiTiet    =   ChiTietDonHang::where('id_don_hang', $donhang->id)
                                      ->join('san_phams', 'chi_tiet_don_hangs.id_san_pham', 'san_phams.id')
                                      ->select('chi_tiet_don_hangs.*', 'san_phams.hinh_anh')
                                      ->get();

        $donhang->ma_gui_mail   =   'HDBH' . (128674 + $donhang->id);
        $donhang->save();

        Mail::to($customer->email)->send(new XacNhanDonHangMail($donhang, $chiTiet));

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã tạo đơn hàng thành công!',
        ]);
    }

    public function getDonHangPartner()
    {
        $partner    = Auth::guard('partner')->user();

        $dsDonHang  = DonHang::where('id_partner', $partner->id)
                             ->get();

        dd($dsDonHang->toArray());
    }
}
