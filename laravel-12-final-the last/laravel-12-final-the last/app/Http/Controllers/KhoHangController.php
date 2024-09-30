<?php

namespace App\Http\Controllers;

use App\Models\NhapKho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KhoHangController extends Controller
{
    public function index()
    {
        return view('partner.hoa_don_nhap_kho.index');
    }

    public function getData(Request $request)
    {
        $partner = Auth::guard('partner')->user();

        $data    = NhapKho::where('id_partner', $partner->id)
                          ->whereDate('ngay_nhap', '>=', $request->begin)
                          ->whereDate('ngay_nhap', '<=', $request->end)
                          ->select('ma_phieu_nhap', 'ngay_nhap', DB::raw('SUM(thanh_tien_nhap) as tong_tien'))
                          ->groupBy('ma_phieu_nhap', 'ngay_nhap')
                          ->orderByDESC('ngay_nhap')
                          ->get();

        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }

    public function chiTietNhapKho(Request $request)
    {
        $partner = Auth::guard('partner')->user();

        $data    = NhapKho::where('id_partner', $partner->id)
                          ->where('ma_phieu_nhap', $request->ma_phieu_nhap)
                          ->get();

        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }
}
