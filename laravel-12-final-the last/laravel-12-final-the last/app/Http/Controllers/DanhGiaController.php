<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use App\Models\DanhGia;
use App\Models\DonHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DanhGiaController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $user = Auth::guard('user')->user();

        $sanPham = SanPham::find($request->id_san_pham);

        if($sanPham) {
            $chiTietDonHang = ChiTietDonHang::where('chi_tiet_don_hangs.id_customer', $user->id)
                              ->where('chi_tiet_don_hangs.id_san_pham', $request->id_san_pham)
                              ->first();

            if($chiTietDonHang) {

                DanhGia::create([
                    'noi_dung'      => $request->noi_dung,
                    'id_customer'   => $user->id,
                    'id_san_pham'   => $sanPham->id,
                    'sao'           => $request->sao,
                ]);

                return response()->json([
                    'status'    => true,
                    'message'   => 'Đã đánh giá thành công!',
                ]);
            } else {
                return response()->json([
                    'status'    => false,
                    'message'   => 'Bạn chưa từng nhận sản phẩm này, không thể đánh giá!',
                ]);
            }

        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Sản phẩm không tồn tại!',
            ]);
        }

    }

    public function getData(Request $request)
    {
        $data = DanhGia::where('id_san_pham', $request->id_san_pham)
                       ->join('customers', 'customers.id', 'danh_gias.id_customer')
                       ->select(DB::raw('CONCAT(customers.ho, " ", customers.dem, " ", customers.ten) as ho_va_ten'), 'danh_gias.*')
                       ->get();

        $tong_diem_sao = 0;
        foreach($data as $key => $value) {
            $tong_diem_sao += $value->sao;
        }


        $so_luong_danh_gia = count($data);
        $diemSaoTB = ceil($tong_diem_sao / $so_luong_danh_gia);

        return response()->json([
            'data'              => $data,
            'so_luong_danh_gia' => $so_luong_danh_gia,
            'diemSaoTB'         => $diemSaoTB,
        ]);
    }
}
