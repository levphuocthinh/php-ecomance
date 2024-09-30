<?php

namespace App\Http\Controllers;

use App\Http\Requests\Partner\ChangeStatusSanPhamRequest;
use App\Http\Requests\Partner\CreateSanPhamRequest;
use App\Http\Requests\Partner\UpdateSanPhamRequest;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SanPhamController extends Controller
{
    public function search(Request $request)
    {
        $gia_tri = '%' . $request->gia_tri . '%';
        $partner    = Auth::guard('partner')->user(); // lấy thông tin của tài khoản đang đăng nhập

        $data    =  SanPham::where('id_partner', $partner->id)
                           ->join('chuyen_mucs', 'san_phams.id_chuyen_muc', 'chuyen_mucs.id')
                           ->where('ten_san_pham', 'like', $gia_tri)
                           ->orWhere('slug_san_pham', 'like', $gia_tri)
                           ->orWhere('mo_ta_ngan', 'like', $gia_tri)
                           ->select('san_phams.*', 'chuyen_mucs.ten_chuyen_muc')
                           ->get();

        return response()->json([
            'data' => $data,
        ]);
    }

    public function update(UpdateSanPhamRequest $request)
    {
        $data       = $request->all();
        // dd($data);
        $partner    = Auth::guard('partner')->user(); // lấy thông tin của tài khoản đang đăng nhập
        $san_pham   = SanPham::where('id', $request->id)
                             ->where('id_partner', $partner->id)
                             ->first();
        if($san_pham) {
            $san_pham->update($data);
            return response()->json([
                'status' => true,
                'message' => 'Đã Cập Nhật Thành Công',
            ]);
        } else {
            return response()->json([
                'status'  => 0,
                'message' => 'Sản phẩm không tồn tại hoặc không đủ quyền!',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $partner   = Auth::guard('partner')->user(); // lấy thông tin của tài khoản đang đăng nhập
        $san_pham  = SanPham::where('id', $request->id)
                           ->where('id_partner', $partner->id)
                           ->first();
        if($san_pham) {
            $san_pham->delete();
            return response()->json([
                'status' => true,
                'message' => 'Đã Xóa Sản Phẩm Thành Công',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Sản phẩm không tồn tại hoặc không đủ quyền!',
            ]);
        }
    }

    public function status(ChangeStatusSanPhamRequest $request)
    {
        $partner   = Auth::guard('partner')->user(); // lấy thông tin của tài khoản đang đăng nhập
        $san_pham = SanPham::where('id', $request->id)
                           ->where('id_partner', $partner->id)
                           ->first();
        if($san_pham) {
            $san_pham->tinh_trang = !$san_pham->tinh_trang;
            $san_pham->save();

            return response()->json([
                'status' => true,
                'message' => 'Đã Đổi Trạng Thái Thành Công',
            ]);
        } else {
            return response()->json([
                'status'  => false,
                'message' => 'Sản phẩm không tồn tại hoặc không đủ quyền!',
            ]);
        }

    }

    public function getData()
    {
        $partner   = Auth::guard('partner')->user(); // lấy thông tin của tài khoản đang đăng nhập
        $data      = SanPham::where('id_partner', $partner->id)
                            ->join('chuyen_mucs', 'san_phams.id_chuyen_muc', 'chuyen_mucs.id')
                            ->select('san_phams.*', 'chuyen_mucs.ten_chuyen_muc')
                            ->get();
        // $data      = SanPham::all();

        return response()->json([
            'data' => $data,
        ]);
    }

    public function index()
    {
        return view('admin.san_pham.index');
    }

    public function store(CreateSanPhamRequest $request)
    {
        // dd($request->all());
        $partner   = Auth::guard('partner')->user(); // lấy thông tin của tài khoản đang đăng nhập

        $data                   = $request->all();
        $data['id_partner']     = $partner->id;
        SanPham::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Đã Thêm Mới Thành Công',
        ]);
    }

    public function showProduct($id)
    {
        $sanPham    = SanPham::find($id);
        if($sanPham) {
            return view('user.page.product_detail', compact('sanPham'));
        } else {
            return redirect('/');
        }
    }

    public function showAllProduct()
    {
        $sanPham = SanPham::get();
        return view('user.page.all_product', compact('sanPham'));
    }

    public function showProductCategory($id)
    {
        $sanPham = SanPham::where('tinh_trang', 1)
                           ->where('id_chuyen_muc', $id)
                           ->get();
        // dd($sanPham);
        return view('user.page.product_of_category', compact('sanPham'));
    }
}
