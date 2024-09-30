<?php

namespace App\Http\Controllers;

use App\Models\ChuyenMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TrangChuController extends Controller
{
    public function index()
    {
        $sanPham = SanPham::where('tinh_trang', 1)
                          ->orderByDESC('id')
                          ->take(6)
                          ->get();


        $chuyenMuc = ChuyenMuc::where('tinh_trang', 1)->get();
        return view('user.page.homepage', compact('sanPham', 'chuyenMuc'));
    }
}
