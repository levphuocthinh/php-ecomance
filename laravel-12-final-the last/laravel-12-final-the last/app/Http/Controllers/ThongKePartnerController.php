<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DonHang;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ThongKePartnerController extends Controller
{
    public function soDonMotNgay()
    {
        return view('partner.thong_ke.so_don_mot_ngay');
    }

    public function dataSoDonMotNgay(Request $request)
    {
        $begin = $request->begin;
        $end = $request->end;

        $partner = Auth::guard('partner')->user();

        $data       =   DonHang::where('id_partner', $partner->id)
            ->whereDate('created_at', '>=', $begin)
            ->whereDate('created_at', '<=', $end)
            ->select(
                DB::raw('DATE_FORMAT(created_at, "%d/%m/%Y") as ngay_hoa_don'),
                DB::raw("COUNT(id) as 'so_don'")
            )
            ->groupBy('ngay_hoa_don')
            ->get();

        $list_ten = [];
        $list_data = [];

        foreach ($data as $key => $value) {
            array_push($list_ten, $value->ngay_hoa_don);
            array_push($list_data, $value->so_don);
        }


        return response()->json([
            'data'      => $data,
            'list_ten'    => $list_ten,
            'list_data'   => $list_data,
        ]);
    }

    public function dataChiTietSoDonMotNgay(Request $request)
    {
        $partner = Auth::guard('partner')->user();

        $data       =   DonHang::join('customers', 'customers.id', 'don_hangs.id_customer')
            ->where('id_partner', $partner->id)
            ->whereDate('don_hangs.created_at', Carbon::createFromFormat('d/m/Y', $request->ngay_hoa_don)->format('Y-m-d'))
            ->select('don_hangs.*', 'customers.ho', 'customers.dem', 'customers.ten')
            ->get();

        return response()->json([
            'data'    => $data,
        ]);
    }

    public function sanPhamMotNgay()
    {
        return view('partner.thong_ke.so_san_pham_mot_ngay');
    }

    public function dataSanPhamMotNgay(Request $request)
    {
        $begin = $request->begin;
        $end = $request->end;

        $partner = Auth::guard('partner')->user();

        $data = DonHang::join('chi_tiet_don_hangs', 'don_hangs.id', '=', 'chi_tiet_don_hangs.id_don_hang')
            ->join('san_phams', 'chi_tiet_don_hangs.id_san_pham', '=', 'san_phams.id')
            ->where('don_hangs.id_partner', $partner->id)
            ->where('don_hangs.tinh_trang', 3)
            ->whereDate('don_hangs.created_at', '>=', $begin)
            ->whereDate('don_hangs.created_at', '<=', $end)
            ->select(
                DB::raw('DATE_FORMAT(don_hangs.created_at, "%d/%m/%Y") as ngay_hoa_don'),
                DB::raw('SUM(chi_tiet_don_hangs.so_luong_mua) as so_luong_ban')
            )
            ->groupBy('ngay_hoa_don')
            ->orderByDesc('ngay_hoa_don')
            ->get();

        $list_ten = [];
        $list_data = [];

        foreach ($data as $key => $value) {
            array_push($list_ten, $value->ngay_hoa_don);
            array_push($list_data, $value->so_luong_ban);
        }


        return response()->json([
            'data'      => $data,
            'list_ten'    => $list_ten,
            'list_data'   => $list_data,
        ]);
    }

    public function dataChiTietsanPhamMotNgay(Request $request)
    {
        $partner = Auth::guard('partner')->user();

        $data = DonHang::join('customers', 'customers.id', '=', 'don_hangs.id_customer')
            ->join('chi_tiet_don_hangs', 'don_hangs.id', '=', 'chi_tiet_don_hangs.id_don_hang')
            ->join('san_phams', 'chi_tiet_don_hangs.id_san_pham', '=', 'san_phams.id')
            ->where('don_hangs.id_partner', $partner->id)
            ->whereDate('don_hangs.created_at', Carbon::createFromFormat('d/m/Y', $request->ngay_hoa_don)->format('Y-m-d'))
            ->where('don_hangs.tinh_trang', 3)
            ->select(
                'don_hangs.ma_don_hang',
                'san_phams.ten_san_pham',
                'chi_tiet_don_hangs.so_luong_mua',
                'chi_tiet_don_hangs.thanh_tien_mua'
            )
            ->get();


        return response()->json([
            'data'    => $data,
        ]);
    }

    public function soTienMotNgay()
    {
        return view('partner.thong_ke.so_tien_mot_ngay');
    }

    public function dataSoTienMotNgay(Request $request)
    {
        $begin = $request->begin;
        $end = $request->end;

        $partner = Auth::guard('partner')->user();

        $data = DonHang::where('id_partner', $partner->id)
                        ->whereDate('created_at', '>=', $begin)
                        ->whereDate('created_at', '<=', $end)
                        ->where('don_hangs.tinh_trang', 3)
                        ->select(
                            DB::raw('DATE_FORMAT(created_at, "%d/%m/%Y") as ngay_hoa_don'),
                            DB::raw('SUM(tong_tien) as tong_tien_ban')
                        )
                        ->groupBy('ngay_hoa_don')
                        ->orderByDesc('ngay_hoa_don')
                        ->get();


        $list_ten = [];
        $list_data = [];

        foreach ($data as $key => $value) {
            array_push($list_ten, $value->ngay_hoa_don);
            array_push($list_data, $value->tong_tien_ban);
        }


        return response()->json([
            'data'      => $data,
            'list_ten'    => $list_ten,
            'list_data'   => $list_data,
        ]);
    }

    public function dataChiTietSoTienMotNgay(Request $request)
    {
        $partner = Auth::guard('partner')->user();

        $data = DonHang::join('customers', 'customers.id', '=', 'don_hangs.id_customer')
                        ->join('chi_tiet_don_hangs', 'don_hangs.id', '=', 'chi_tiet_don_hangs.id_don_hang')
                        ->join('san_phams', 'chi_tiet_don_hangs.id_san_pham', '=', 'san_phams.id')
                        ->where('don_hangs.id_partner', $partner->id)
                        ->whereDate('don_hangs.created_at', Carbon::createFromFormat('d/m/Y', $request->ngay_hoa_don)->format('Y-m-d'))
                        ->where('don_hangs.tinh_trang', 3)
                        ->select(
                            'don_hangs.ma_don_hang',
                            'san_phams.ten_san_pham',
                            'chi_tiet_don_hangs.so_luong_mua',
                            'chi_tiet_don_hangs.thanh_tien_mua'
                        )
                        ->get();


        return response()->json([
            'data'    => $data,
        ]);
    }

    public function khachHangDaMuaHang()
    {
        return view('partner.thong_ke.khach_hang_da_mua_hang');
    }

    public function dataKhachHangDaMuaHang(Request $request)
    {
        $begin = $request->begin;
        $end = $request->end;

        $partner = Auth::guard('partner')->user();

        $data = Customer::join('don_hangs', 'don_hangs.id_customer', 'customers.id')
                        ->where('don_hangs.id_partner', $partner->id)
                        ->whereDate('don_hangs.created_at', '>=', $begin)
                        ->whereDate('don_hangs.created_at', '<=', $end)
                        ->select('customers.id', DB::raw('CONCAT(customers.ho," ", customers.dem," ", customers.ten) as ho_va_ten'), DB::raw('COUNT(don_hangs.id) as so_don_hang'))
                        ->groupBy('customers.id', 'ho_va_ten')
                        ->orderByDESC('so_don_hang')
                        ->get();

        $list_ten = [];
        $list_data = [];

        foreach($data as $key => $value) {
            array_push($list_ten, $value->ho_va_ten);
            array_push($list_data, $value->so_don_hang);
        }

        return response()->json([
            'data'      => $data,
            'list_ten'    => $list_ten,
            'list_data'   => $list_data,
        ]);
    }

    public function dataChiTietKhachHangDaMuaHang(Request $request) {
        // dd($request->all());
        $begin  = $request->begin;
        $end    = $request->end;

        $partner = Auth::guard('partner')->user();


        $data = DonHang::join('customers', 'customers.id', 'don_hangs.id_customer')
                       ->where('id_customer', $request->id)
                       ->where('id_partner', $partner->id)
                       ->whereDate('don_hangs.created_at', '>=', $begin)
                       ->whereDate('don_hangs.created_at', '<=', $end)
                       ->select(DB::raw('CONCAT(customers.ho," ", customers.dem," ", customers.ten) as ho_va_ten'), 'don_hangs.*')
                       ->get();

        return response()->json([
            'data' => $data,
        ]);
    }
}
