<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateGioHangRequest;
use App\Models\GioHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GioHangController extends Controller
{
    public function store(CreateGioHangRequest $request)
    {
        $customer   = Auth::guard('user')->user();

        $sanPham    = SanPham::find($request->id_san_pham);

        if($sanPham->tinh_trang) {
            GioHang::create([
                'id_customer'       =>  $customer->id,
                'id_san_pham'       =>  $sanPham->id,
                'id_partner'        =>  $sanPham->id_partner,
                'so_luong'          =>  $request->so_luong,
            ]);

            return response()->json([
                'status'    => 1,
                'message'   => 'Đã thêm vào giỏ hàng',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Sản phẩm đã tạm dừng kinh doanh',
            ]);
        }
    }

    public function data()
    {
        $customer   = Auth::guard('user')->user();

        $data       = GioHang::where('id_customer', $customer->id)
                             ->join('san_phams', 'gio_hangs.id_san_pham', 'san_phams.id')
                             ->select('gio_hangs.*', 'ten_san_pham', 'gia_ban', 'gia_khuyen_mai', 'hinh_anh')
                             ->get();
        $subTotal = 0;
        $so_luong = 0;

        foreach ($data as $key => $value) {
            if($value->gia_khuyen_mai == 0) {
                $subTotal = $subTotal + ($value->gia_ban * $value->so_luong);
            } else {
                $subTotal = $subTotal + ($value->gia_khuyen_mai * $value->so_luong);
            }
            $so_luong = $so_luong + $value->so_luong;
        }

        return response()->json([
            'status'    => 1,
            'data'      => $data,
            'subTotal'  => $subTotal,
            'so_luong'  => $so_luong,
        ]);
    }

    public function destroy(Request $request)
    {
        $customer   = Auth::guard('user')->user();
        $data       = GioHang::where('id', $request->id)
                           ->where('id_customer', $customer->id)
                           ->first();

        if($data) {
            $data->delete();
            return response()->json([
                'status' => true,
                'message' => 'Đã Remove Thành Công',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Sản phẩm không tồn tại hoặc không đủ quyền!',
            ]);
        }
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $customer = Auth::guard('user')->user();

        $gioHang = GioHang::where('id', $request->id)
                            ->where('id_customer', $customer->id)
                            ->first();
        if($gioHang) {
            $gioHang->so_luong = $request->so_luong;
            $gioHang->save();

            return response()->json([
                'status'    => 1,
                'message'   => 'Đã cập nhật số lượng!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Dữ liệu không thể cập nhật!',
            ]);
        }
    }
}
