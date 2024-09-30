<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use App\Models\Customer;
use App\Models\DonHang;
use App\Models\Partner;
use App\Models\SanPham;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongKeController extends Controller
{
    public function viewLoai1()
    {
        return view('admin.thong_ke.loai_1');
    }

    public function dataLoai1(Request $request)
    {
        $begin      = $request->begin;
        $end        = $request->end;
        // select SUM(tong_tien) as 'tien_ban', created_at
        // FROM don_hangs
        // where created_at >= '2023-06-19' and created_at <= '2023-06-25'
        // GROUP BY created_at

        $data       =   DonHang::whereDate('created_at', '>=', $begin)
            ->whereDate('created_at', '<=', $end)
            ->select(
                DB::raw('DATE_FORMAT(created_at, "%d/%m/%Y") as ngay_hoa_don'),
                DB::raw("SUM(tong_tien) as 'tien_ban'")
            )
            ->groupBy('ngay_hoa_don')
            ->get();

        // select san_phams.ten_san_pham, SUM(chi_tiet_don_hangs.thanh_tien_mua) as 'tong_tien', don_hangs.created_at
        // FROM (san_phams JOIN chi_tiet_don_hangs ON san_phams.id = chi_tiet_don_hangs.id_san_pham) join don_hangs on chi_tiet_don_hangs.id_don_hang = don_hangs.id
        // GROUP BY san_phams.ten_san_pham, don_hangs.created_at
        // ORDER BY tong_tien DESC
        // $data           =   SanPham::join('chi_tiet_don_hangs', 'san_phams.id', 'chi_tiet_don_hangs.id_san_pham')
        //                            ->join('don_hangs', 'chi_tiet_don_hangs.id_don_hang', 'don_hangs.id')
        //                            ->whereDate('don_hangs.created_at', '>=', $begin)
        //                            ->whereDate('don_hangs.created_at', '<=', $end)
        //                            ->select('san_phams.ten_san_pham', DB::raw("SUM(chi_tiet_don_hangs.thanh_tien_mua) as 'tong_tien'"), 'don_hangs.created_at')
        //                            ->groupBy('san_phams.ten_san_pham', 'don_hangs.created_at')
        //                            ->orderByDESC('tong_tien')
        //                            ->get();

        $ngay_hoa_don   = [];
        $tien_ban       = [];

        foreach ($data as $key => $value) {
            array_push($ngay_hoa_don, $value->ngay_hoa_don);
            array_push($tien_ban, $value->tien_ban);
        }

        return response()->json([
            'status'            => 1,
            'data'              => $data,
            'ngay_hoa_don'      => $ngay_hoa_don,
            'tien_ban'          => $tien_ban,
        ]);
    }

    public function dataChiTietLoai1(Request $request)
    {
        $ngay   = Carbon::createFromFormat('d/m/Y', $request->ngay_hoa_don)->format('Y-m-d');

        // $data   = DonHang::whereDate('created_at', $ngay)
        //     ->get();
        $data = ChiTietDonHang::join('don_hangs', 'don_hangs.id', 'chi_tiet_don_hangs.id_don_hang')
                                ->whereDate('don_hangs.created_at', $ngay)
                                ->select('don_hangs.ma_don_hang', 'don_hangs.ten_nguoi_nhan', 'don_hangs.so_dien_thoai', 'don_hangs.tong_tien')
                                ->groupBy('don_hangs.ma_don_hang', 'don_hangs.ten_nguoi_nhan', 'don_hangs.so_dien_thoai', 'don_hangs.tong_tien')
                                ->get();
        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }

    public function viewLoai2()
    {
        return view('admin.thong_ke.loai_2');
    }

    // còn lỗi
    public function dataLoai2(Request $request)
    {
        $begin      = $request->begin;
        $end        = $request->end;

        // SELECT don_hangs.created_at as ngay_ban, SUM(chi_tiet_don_hangs.thanh_tien_mua) as tong_tien_ban , COUNT(chi_tiet_don_hangs.id_san_pham) as so_lan, san_phams.ten_san_pham
        // FROM don_hangs JOIN chi_tiet_don_hangs ON chi_tiet_don_hangs.id_don_hang = don_hangs.id
        // JOIN san_phams ON san_phams.id = chi_tiet_don_hangs.id_san_pham
        // WHERE don_hangs.created_at >= '2023-06-17' AND don_hangs.created_at <= '2023-06-19'
        // GROUP BY don_hangs.created_at, san_phams.ten_san_pham
        // ORDER BY tong_tien_ban DESC

        $data = DonHang::join('chi_tiet_don_hangs', 'chi_tiet_don_hangs.id_don_hang', 'don_hangs.id')
            ->join('san_phams', 'san_phams.id', 'chi_tiet_don_hangs.id_san_pham')
            ->whereDate('don_hangs.created_at', '>=', $begin)
            ->whereDate('don_hangs.created_at', '<=', $end)
            ->where('don_hangs.tinh_trang', 3)
            ->select('chi_tiet_don_hangs.id_san_pham', 'don_hangs.created_at', DB::raw('SUM(chi_tiet_don_hangs.thanh_tien_mua) as tong_tien_ban'), DB::raw('COUNT(chi_tiet_don_hangs.id_san_pham) as so_lan'), 'san_phams.ten_san_pham')
            ->groupBy('chi_tiet_don_hangs.id_san_pham', 'don_hangs.created_at', 'san_phams.ten_san_pham')
            ->orderByDESC('tong_tien_ban')
            ->get();

        // dd($data->toArray());
        $ten_san_pham   = [];
        $tong_tien_ban  = [];

        foreach ($data as $key => $value) {
            array_push($ten_san_pham, $value->ten_san_pham);
            array_push($tong_tien_ban, $value->tong_tien_ban);
        }
        // dd($tong_tien_ban);
        return response()->json([
            'status'            => 1,
            'data'              => $data,
            'ten_san_pham'      => $ten_san_pham,
            'tong_tien_ban'     => $tong_tien_ban,
        ]);
    }

    public function dataChiTietLoai2(Request $request)
    {
        $begin      = $request->begin;
        $end        = $request->end;

        $data       = ChiTietDonHang::join('don_hangs', 'don_hangs.id', '=', 'chi_tiet_don_hangs.id_don_hang')
            ->whereDate('don_hangs.created_at', '>=', $begin)
            ->whereDate('don_hangs.created_at', '<=', $end)
            ->where('chi_tiet_don_hangs.id_san_pham', $request->id_san_pham)
            ->where('don_hangs.tinh_trang', 3)
            ->select('chi_tiet_don_hangs.*', 'don_hangs.*')
            ->get();

        // dd($data->toArray());

        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);

        $data       = ChiTietDonHang::join('partners', 'partners.id', 'chi_tiet_don_hangs.id_partner')
            ->join('customers', 'customers.id', 'chi_tiet_don_hangs.id_customer')
            ->join('don_hangs', 'don_hangs.id', 'chi_tiet_don_hangs.id_don_hang')
            ->where('chi_tiet_don_hangs.id_san_pham', $request->id)
            ->where('don_hangs.tinh_trang', 3)
            ->select('partners.ho_lot', 'partners.ten', 'chi_tiet_don_hangs.*', 'don_hangs.ma_don_hang', 'don_hangs.ten_nguoi_nhan', 'don_hangs.so_dien_thoai')
            ->get();

        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }

    public function viewLoai3()
    {
        return view('admin.thong_ke.loai_3');
    }

    public function dataLoai3(Request $request)
    {
        $begin      = $request->begin;
        $end        = $request->end;

        $data           = SanPham::join('chi_tiet_don_hangs', 'san_phams.id', 'chi_tiet_don_hangs.id_san_pham')
            ->join('don_hangs', 'don_hangs.id', 'chi_tiet_don_hangs.id_don_hang')
            ->whereDate('don_hangs.created_at', '>=', $begin)
            ->whereDate('don_hangs.created_at', '<=', $end)
            ->where('don_hangs.tinh_trang', 3)
            ->select('san_phams.id', 'san_phams.ten_san_pham', DB::raw('SUM(chi_tiet_don_hangs.so_luong_mua) as tong_so_luong'))
            ->groupBy('san_phams.id', 'san_phams.ten_san_pham')
            ->orderByDESC('tong_so_luong')
            ->get();

        $ten_san_pham   = [];
        $tong_so_luong  = [];

        foreach ($data as $key => $value) {
            array_push($ten_san_pham, $value->ten_san_pham);
            array_push($tong_so_luong, $value->tong_so_luong);
        }

        return response()->json([
            'status'            => 1,
            'data'              => $data,
            'ten_san_pham'      => $ten_san_pham,
            'tong_so_luong'     => $tong_so_luong,
        ]);
    }

    public function dataChiTietLoai3(Request $request)
    {
        $begin      = $request->begin;
        $end        = $request->end;

        $data       = ChiTietDonHang::join('partners', 'partners.id', 'chi_tiet_don_hangs.id_partner')
            ->join('customers', 'customers.id', 'chi_tiet_don_hangs.id_customer')
            ->join('don_hangs', 'don_hangs.id', 'chi_tiet_don_hangs.id_don_hang')
            ->whereDate('don_hangs.created_at', '>=', $begin)
            ->whereDate('don_hangs.created_at', '<=', $end)
            ->where('chi_tiet_don_hangs.id_san_pham', $request->id)
            ->where('don_hangs.tinh_trang', 3)
            ->select('partners.ho_lot', 'partners.ten', 'chi_tiet_don_hangs.*', 'don_hangs.ma_don_hang', 'don_hangs.ten_nguoi_nhan', 'don_hangs.so_dien_thoai')
            ->get();

        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }

    public function viewLoai4()
    {
        return view('admin.thong_ke.loai_4');
    }

    public function dataLoai4(Request $request)
    {
        $begin      = $request->begin;
        $end        = $request->end;

        $data           = Partner::join('don_hangs', 'don_hangs.id_partner', 'partners.id')
            ->whereDate('don_hangs.created_at', '>=', $begin)
            ->whereDate('don_hangs.created_at', '<=', $end)
            ->where('don_hangs.tinh_trang', 3)
            ->select('partners.id', 'partners.ho_lot', 'partners.ten', DB::raw('SUM(don_hangs.tong_tien) as tong_so_tien'))
            ->groupBy('partners.id', 'partners.ho_lot', 'partners.ten')
            ->orderByDESC('tong_so_tien')
            ->get();

        $ho_va_ten   = [];
        foreach ($data as $item) {
            $ho_va_ten[] = $item->ho_lot . ' ' . $item->ten;
        }
        $tong_so_tien  = [];

        foreach ($data as $key => $value) {
            array_push($ho_va_ten, $value->ho_va_ten);
            array_push($tong_so_tien, $value->tong_so_tien);
        }

        return response()->json([
            'status'        => 1,
            'data'          => $data,
            'ho_va_ten'     => $ho_va_ten,
            'tong_so_tien'  => $tong_so_tien,
        ]);
    }

    public function dataChiTietLoai4(Request $request)
    {
        $begin      = $request->begin;
        $end        = $request->end;

        $data       = DonHang::join('partners', 'partners.id', 'don_hangs.id_partner')
            ->whereDate('don_hangs.created_at', '>=', $begin)
            ->whereDate('don_hangs.created_at', '<=', $end)
            ->where('don_hangs.tinh_trang', 3)
            ->where('partners.id', $request->id)
            ->select('don_hangs.*')
            ->get();

        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }

    public function viewLoai5()
    {
        return view('admin.thong_ke.loai_5');
    }

    public function dataLoai5(Request $request)
    {
        $begin      = $request->begin;
        $end        = $request->end;

        $data           = Partner::join('don_hangs', 'don_hangs.id_partner', 'partners.id')
            ->join('chi_tiet_don_hangs', 'chi_tiet_don_hangs.id_don_hang', 'don_hangs.id')
            ->whereDate('don_hangs.created_at', '>=', $begin)
            ->whereDate('don_hangs.created_at', '<=', $end)
            ->where('don_hangs.tinh_trang', 3)
            ->select('partners.id', 'partners.ho_lot', 'partners.ten', DB::raw('COUNT(chi_tiet_don_hangs.id_san_pham) as tong_so_san_pham'))
            ->groupBy('partners.id', 'partners.ho_lot', 'partners.ten')
            ->orderBy('tong_so_san_pham')
            ->get();

        $ho_va_ten   = [];
        foreach ($data as $item) {
            $ho_va_ten[] = $item->ho_lot . ' ' . $item->ten;
        }
        $tong_so_san_pham  = [];

        foreach ($data as $key => $value) {
            array_push($ho_va_ten, $value->ho_va_ten);
            array_push($tong_so_san_pham, $value->tong_so_san_pham);
        }

        return response()->json([
            'status'                => 1,
            'data'                  => $data,
            'ho_va_ten'             => $ho_va_ten,
            'tong_so_san_pham'      => $tong_so_san_pham,
        ]);
    }

    public function dataChiTietLoai5(Request $request)
    {
        // dd($request->all());
        $begin      = $request->begin;
        $end        = $request->end;

        $data = Partner::join('chi_tiet_don_hangs', 'chi_tiet_don_hangs.id_partner', 'partners.id')
            ->join('don_hangs', 'don_hangs.id', 'chi_tiet_don_hangs.id_don_hang')
            ->where('partners.id', $request->id)
            ->whereDate('don_hangs.created_at', '>=', $begin)
            ->whereDate('don_hangs.created_at', '<=', $end)
            ->where('don_hangs.tinh_trang', 3)
            ->select('chi_tiet_don_hangs.*', 'don_hangs.ten_nguoi_nhan', 'don_hangs.so_dien_thoai', 'don_hangs.ma_don_hang')
            ->get();

        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }

    public function viewLoai6()
    {
        return view('admin.thong_ke.loai_6');
    }

    public function dataLoai6(Request $request)
    {
        // dd($request->all());
        $begin      = $request->begin;
        $end        = $request->end;

        $data           = Customer::join('don_hangs', 'customers.id', 'don_hangs.id_customer')
            ->join('partners', 'don_hangs.id_partner', 'partners.id')
            ->whereDate('don_hangs.created_at', '>=', $begin)
            ->whereDate('don_hangs.created_at', '<=', $end)
            ->where('don_hangs.tinh_trang', 3)
            ->select('customers.id', 'partners.id as id_dai_ly', 'customers.ten', 'customers.dem', 'customers.ho', 'partners.ten as ten_partner', 'partners.ho_lot as ho_partner',  DB::raw('COUNT(don_hangs.id_partner ) as tong_don_hang'))
            ->groupBy('customers.id', 'id_dai_ly', 'customers.ten', 'customers.dem', 'customers.ho', 'ten_partner', 'ho_partner')
            ->orderByDESC('tong_don_hang')
            ->get();

        $ho_va_ten_kh   = [];
        foreach ($data as $item) {
            $ho_va_ten_kh[] = $item->ho . ' ' . $item->dem . ' ' . $item->ten;
        }
        $tong_don_hang  = [];

        foreach ($data as $key => $value) {
            array_push($ho_va_ten_kh, $value->ho_va_ten_kh);
            array_push($tong_don_hang, $value->tong_don_hang);
        }
        // dd($data->toArray());

        return response()->json([
            'status'            => 1,
            'data'              => $data,
            'ho_va_ten_kh'      => $ho_va_ten_kh,
            'tong_don_hang'     => $tong_don_hang,
        ]);
    }

    public function dataChiTietLoai6(Request $request)
    {
        // dd($request->all());
        $begin      = $request->begin;
        $end        = $request->end;

        $data = Customer::join('don_hangs', 'don_hangs.id_customer', 'customers.id')
            ->join('partners', 'partners.id', 'don_hangs.id_partner')
            ->where('partners.id', $request->id_dai_ly)
            ->where('customers.id', $request->id)
            ->whereDate('don_hangs.created_at', '>=', $begin)
            ->whereDate('don_hangs.created_at', '<=', $end)
            ->where('don_hangs.tinh_trang', 3)
            ->select('don_hangs.*')
            ->get();

        // dd($data->toArray());

        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }
}
