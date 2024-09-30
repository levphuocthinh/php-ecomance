<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ChangeStatusChuyenMucRequest;
use App\Http\Requests\Admin\ChuyenMuc\CreateChuyenMucRequest;
use App\Http\Requests\Admin\ChuyenMuc\UpdateChuyenMucRequest;
use App\Models\ChuyenMuc;
use Illuminate\Http\Request;

class ChuyenMucController extends Controller
{
    public function demo()
    {
        $x  = ChuyenMuc::where('tinh_trang', 1)->first();
        $y  = ChuyenMuc::where('tinh_trang', 1)->get();
        $z  = 'Hôm nay học VueJS, ahihi';

        return response()->json([
            'bien_1'    => $x,
            'bien_2'    => $y,
            'bien_3'    => $z,
        ]);
    }

    public function indexNew()
    {
        return view('admin.chuyen_mucs.new_index');
    }

    public function search(Request $request)
    {
        $gia_tri    = '%' . $request->gia_tri . '%';

        $data       = ChuyenMuc::where('ten_chuyen_muc', 'like', $gia_tri)
                               ->orWhere('slug_chuyen_muc', 'like', $gia_tri)
                               ->orWhere('id', 'like', $gia_tri)
                               ->orWhere('id_chuyen_muc_cha', 'like', $gia_tri)
                               ->get();
        return response()->json([
            'data'     => $data,
        ]);
    }

    public function checkSlug(Request $request)
    {
        $chuyenMuc = ChuyenMuc::where('slug_chuyen_muc', $request->slug_chuyen_muc)
                              ->get();
        if(count($chuyenMuc) > 0) {
            return response()->json([
                'status'    => false,
                'message'   => 'Tên chuyên mục không thể sử dụng',
            ]);
        } else {
            return response()->json([
                'status'    => true,
                'message'   => 'Có thể sử dụng tên chuyên mục này',
            ]);
        }
    }

    public function checkSlugUpdate(Request $request)
    {
        $chuyenMuc = ChuyenMuc::where('slug_chuyen_muc', $request->slug_chuyen_muc)
                              ->where('id', '<>', $request->id)
                              ->get();
        if(count($chuyenMuc) > 0) {
            return response()->json([
                'status'    => false,
                'message'   => 'Tên chuyên mục không thể sử dụng',
            ]);
        } else {
            return response()->json([
                'status'    => true,
                'message'   => 'Có thể sử dụng tên chuyên mục này',
            ]);
        }
    }

    public function update(UpdateChuyenMucRequest $request)
    {
        $chuyenMuc  = ChuyenMuc::where('id', $request->id)->first();

        $chuyenMuc->update([
            'ten_chuyen_muc'    =>  $request->ten_chuyen_muc,
            'slug_chuyen_muc'   =>  $request->slug_chuyen_muc,
            'id_chuyen_muc_cha' =>  $request->id_chuyen_muc_cha,
            'hinh_anh'          =>  $request->hinh_anh,
            'tinh_trang'        =>  $request->tinh_trang,
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã cập nhật chuyên mục',
        ]);
    }

    public function index()
    {
        return view('admin.chuyen_mucs.index');
    }

    public function data()
    {
        $data   = ChuyenMuc::get();

        return response()->json([
            'data'     => $data,
        ]);
    }

    public function status(ChangeStatusChuyenMucRequest $request)
    {
        //Tìm chuyên mục có id bằng $request->id (id mà ở client gửi lên)
        //Nếu như nó đang là trang_thai = 1 thì ta đổi trang_thai = 0
        //Nếu như nó đang là trang_thai = 0 thì ta đổi trang_thai = 1
        $chuyenMuc  = ChuyenMuc::where('id', $request->id)->first();
        if($chuyenMuc) {
            // if($chuyenMuc->tinh_trang == 1) {
            //     $chuyenMuc->tinh_trang = 0;
            // } else {
            //     $chuyenMuc->tinh_trang = 1;
            // }
            $chuyenMuc->tinh_trang = !$chuyenMuc->tinh_trang;
            $chuyenMuc->save();
        }
    }

    public function store(CreateChuyenMucRequest $request)
    {
        $data   = $request->all();
        ChuyenMuc::create($data);

        return response()->json([
            'status'    => true
        ]);
    }

    public function destroy(Request $request)
    {
        $chuyenMuc = ChuyenMuc::where('id', $request->id)
                              ->first();

        if($chuyenMuc) {
            $chuyenMuc->delete();

            return response()->json([
                'status'    => true,
                'message'   => 'Đã xóa chuyên mục thành công',
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Chuyên mục không tồn tại',
            ]);
        }
    }

    public function edit(Request $request)
    {
        $chuyenMuc = ChuyenMuc::where('id', $request->id)
                              ->first();

        if($chuyenMuc) {
            return response()->json([
                'status'    => true,
                'data'      => $chuyenMuc,
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Dữ liệu không chính xác!',
            ]);
        }
    }
}
