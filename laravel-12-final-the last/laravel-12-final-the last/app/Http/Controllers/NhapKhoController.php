<?php

namespace App\Http\Controllers;

use App\Http\Requests\Partner\CreateNhapKhoRequest;
use App\Models\ChiTietDonHang;
use App\Models\NhapKho;
use App\Models\SanPham;
use App\Models\TmpNhapKho;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NhapKhoController extends Controller
{
    public function tinhTongSoLuongNhap($id_san_pham, $id_partner)
    {
        $tong   =   NhapKho::where('id_san_pham', $id_san_pham)
                               ->where('id_partner', $id_partner)
                               ->sum('so_luong_nhap');

        return $tong;
    }

    public function index()
    {
        return view('partner.nhap_kho.index');
    }

    public function store(Request $request)
    {
        $partner = Auth::guard('partner')->user();

        $sanPham = SanPham::where('id_partner', $partner->id)->where('id', $request->id)->first();

        if($sanPham) {
            TmpNhapKho::create([
                'id_partner'    =>  $partner->id,
                'id_san_pham'   =>  $request->id
            ]);

            return response()->json([
                'status'    => 1,
                'message'   => 'Đã thêm danh sách nhập kho',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Sản phẩm không tồn tại hoặc không phải của bạn!',
            ]);
        }
    }

    public function getData()
    {
        $partner = Auth::guard('partner')->user();

        // $data   = TmpNhapKho::where('id_partner', $partner->id)->get();
        $data      = TmpNhapKho::where('tmp_nhap_khos.id_partner', $partner->id)
                               ->join('san_phams', 'tmp_nhap_khos.id_san_pham', 'san_phams.id')
                               ->select('tmp_nhap_khos.*', 'san_phams.ten_san_pham')
                               ->get();

        return response()->json([
            'data'  => $data,
        ]);
    }

    public function update(Request $request)
    {
        $partner = Auth::guard('partner')->user();
        $data               = $request->all();
        $data['thanh_tien'] = $request->so_luong * $request->don_gia;

        $tmpNhapKho         = TmpNhapKho::where('id', $request->id)
                                        ->where('id_partner', $partner->id)
                                        ->first();
        if($tmpNhapKho) {
            $tmpNhapKho->update($data);

            return response()->json([
                'status'    => 1,
                'message'   => 'Đã cập nhật dữ liệu!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Dữ liệu không tồn tại!',
            ]);
        }

    }

    public function accpectStore(CreateNhapKhoRequest $request)
    {
        $partner        = Auth::guard('partner')->user();
        $ma_phieu_nhap  = $request->ma_phieu_nhap;
        $ngay_nhap      = Carbon::now();

        $check          = NhapKho::where('id_partner', $partner->id)->where('ma_phieu_nhap', $ma_phieu_nhap)->first();
        if($check) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Mã phiếu nhập đã tồn tại!',
            ]);
        }

        $data      = TmpNhapKho::where('tmp_nhap_khos.id_partner', $partner->id)
                               ->join('san_phams', 'tmp_nhap_khos.id_san_pham', 'san_phams.id')
                               ->select('tmp_nhap_khos.*', 'san_phams.ten_san_pham')
                               ->get();
        foreach($data as $key => $value) {
            NhapKho::create([
                'id_partner'        =>  $partner->id,
                'ma_phieu_nhap'     =>  $ma_phieu_nhap,
                'ngay_nhap'         =>  $ngay_nhap,
                'id_san_pham'       =>  $value->id_san_pham,
                'ten_san_pham'      =>  $value->ten_san_pham,
                'so_luong_nhap'     =>  $value->so_luong,
                'don_gia_nhap'      =>  $value->don_gia,
                'thanh_tien_nhap'   =>  $value->thanh_tien,
                'ghi_chu'           =>  $value->ghi_chu,
            ]);
            $value->delete();

            // 1. Tìm sản phẩm mà đang nhập
            $sanPham                     = SanPham::find($value->id_san_pham);
            $sanPham->so_luong_nhap      = $this->tinhTongSoLuongNhap($value->id_san_pham, $partner->id);
            $sanPham->save();
        }

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã nhập kho thành công!',
        ]);
    }

    public function destroy(Request $request)
    {
        $partner   = Auth::guard('partner')->user(); // lấy thông tin của tài khoản đang đăng nhập
        $tmpNhapKho  = TmpNhapKho::where('id', $request->id)
                           ->where('id_partner', $partner->id)
                           ->first();
        if($tmpNhapKho) {
            $tmpNhapKho->delete();
            return response()->json([
                'status' => true,
                'message' => 'Đã Xóa Nhập Kho Thành Công',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Nhập Kho không tồn tại hoặc không đủ quyền!',
            ]);
        }
    }
}
