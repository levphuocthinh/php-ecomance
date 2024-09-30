<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use App\Models\Customer;
use App\Models\DonHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function tachTen($fullName)
    {
        $nameParts = explode(" ", $fullName);
        $lastName = $nameParts[0];
        $firstName = $nameParts[count($nameParts) - 1];
        $middleNameParts = array_slice($nameParts, 1, count($nameParts) - 2);
        $middleName = implode(" ", $middleNameParts);

        $res['ho']      = $lastName;
        $res['ten']     = $firstName;
        $res['dem']     = $middleName;

        return $res;
    }

    public function index()
    {
        $id_don_hang    = 5;
        ///------------------------------------------
        $donHang    = DonHang::where('don_hangs.id', $id_don_hang)
                             ->join('customers', 'don_hangs.id_customer', 'customers.id')
                             ->select('don_hangs.*', 'customers.email')
                             ->first();

        $chiTiet    = ChiTietDonHang::where('id_don_hang', $id_don_hang)
                                    ->join('san_phams', 'chi_tiet_don_hangs.id_san_pham', 'san_phams.id')
                                    ->select('chi_tiet_don_hangs.*', 'san_phams.hinh_anh')
                                    ->get();

        return view('mail.don_hang', compact('donHang', 'chiTiet'));
    }

    public function chart()
    {
        return view('chart');
    }

    public function dataChart()
    {
        $list_ngay = [
            '20/06/2023',
            '21/06/2023',
            '22/06/2023',
            '23/06/2023',
            '24/06/2023',
            '25/06/2023',
            '26/06/2023',
            '27/06/2023',
        ];

        $list_du_lieu = [
            9,
            21,
            22,
            23,
            24,
            25,
            26,
            27,
        ];

        return response()->json([
            'list_ngay'     => $list_ngay,
            'list_du_lieu'  => $list_du_lieu,
        ]);
    }
}
