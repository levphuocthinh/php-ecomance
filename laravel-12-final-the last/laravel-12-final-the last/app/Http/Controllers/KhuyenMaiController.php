<?php

namespace App\Http\Controllers;

use App\Models\KhuyenMai;
use Illuminate\Http\Request;

class KhuyenMaiController extends Controller
{
    public function index()
    {
        return view('admin.khuyen_mais.index');
    }
    public function data()
    {
        $data   = KhuyenMai::get();

        return response()->json([
            'data'     => $data,
        ]);
    }


    public function store(Request $request)
    {
        $data   = $request->all();
        KhuyenMai::create($data);

        return response()->json([
            'status'    => true
        ]);
    }

    public function status(Request $request)
    {

        $khuyen_mai = KhuyenMai::where('id', $request->id)->first();
        if($khuyen_mai) {
            $khuyen_mai->tinh_trang = !$khuyen_mai->tinh_trang;
            $khuyen_mai->save();

            return response()->json([
                'status' => true,
                'message' => 'Đã Đổi Trạng Thái Thành Công',
            ]);
        } else {
            return response()->json([
                'status'  => false,
                'message' => 'Khuyến mãi không tồn tại hoặc không đủ quyền!',
            ]);
        }

    }

    public function destroy(Request $request)
    {
        $khuyen_mai = KhuyenMai::where('id', $request->id)->first();

        if($khuyen_mai) {
            $khuyen_mai->delete();

            return response()->json([
                'status'    => true,
                'message'   => 'Đã xóa khuyến mãi thành công',
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Khuyến mãi không tồn tại',
            ]);
        }
    }

    public function update(Request $request)
    {
        $data       = $request->all();
        $khuyen_mai   = KhuyenMai::where('id', $request->id)->first();
        if($khuyen_mai) {
            $khuyen_mai->update($data);
            return response()->json([
                'status' => true,
                'message' => 'Đã Cập Nhật Thành Công',
            ]);
        } else {
            return response()->json([
                'status'  => 0,
                'message' => 'Khuyến Mãi không tồn tại hoặc không đủ quyền!',
            ]);
        }
    }

    public function search(Request $request)
    {
        $gia_tri    = '%' . $request->gia_tri . '%';

        $data       = KhuyenMai::where('ma_khuyen_mai', 'like', $gia_tri)
                               ->orWhere('so_tien_giam', 'like', $gia_tri)
                               ->orWhere('id_customer_su_dung', 'like', $gia_tri)
                               ->get();
        return response()->json([
            'data'     => $data,
        ]);
    }

    public function checkMa(Request $request)
    {
        $khuyen_mai = KhuyenMai::where('ma_khuyen_mai', $request->ma_khuyen_mai)
                              ->get();
        if(count($khuyen_mai) > 0) {
            return response()->json([
                'status'    => false,
                'message'   => 'Mã đã tồn tại',
            ]);
        } else {
            return response()->json([
                'status'    => true,
                'message'   => 'Có thể sử dụng mã này',
            ]);
        }
    }
    public function checkMaUpdate(Request $request)
    {
        $khuyen_mai = KhuyenMai::where('ma_khuyen_mai', $request->ma_khuyen_mai)
                                ->where('id', '<>', $request->id)
                                ->get();
        if(count($khuyen_mai) > 0) {
            return response()->json([
                'status'    => false,
                'message'   => 'Mã đã tồn tại',
            ]);
        } else {
            return response()->json([
                'status'    => true,
                'message'   => 'Có thể sử dụng mã này',
            ]);
        }
    }
}
