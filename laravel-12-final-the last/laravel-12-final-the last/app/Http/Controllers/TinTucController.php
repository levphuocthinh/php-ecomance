<?php

namespace App\Http\Controllers;

use App\Http\Requests\TinTuc\CreateTinTucRequest;
use App\Http\Requests\TinTuc\UpdateTinTucRequest;
use App\Models\TinTuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TinTucController extends Controller
{
    public function index()
    {
        return view('admin.tin_tuc.index');
    }

    public function search(Request $request)
    {
        $gia_tri    = '%' . $request->gia_tri . '%';

        $data       = TinTuc::where('tieu_de', 'like', $gia_tri)
                               ->get();
        return response()->json([
            'data'     => $data,
        ]);
    }

    public function checkSlug(Request $request)
    {
        // dd($request->all());
        $tin_tuc = TinTuc::where('slug_tin_tuc', $request->slug_tin_tuc)
                              ->first();
        if($tin_tuc) {
            return response()->json([
                'status'    => false,
                'message'   => 'Tên tiêu đề không thể sử dụng',
            ]);
        } else {
            return response()->json([
                'status'    => true,
                'message'   => 'Có thể sử dụng tên tiêu đề này',
            ]);
        }
    }

    public function checkSlugUpdate(Request $request)
    {
        $tin_tuc = TinTuc::where('slug_tin_tuc', $request->slug_tin_tuc)
                              ->where('id', '<>', $request->id)
                              ->first();
        if($tin_tuc) {
            return response()->json([
                'status'    => false,
                'message'   => 'Tên tiêu đề không thể sử dụng',
            ]);
        } else {
            return response()->json([
                'status'    => true,
                'message'   => 'Có thể sử dụng tên tiêu đề này',
            ]);
        }
    }

    public function update(UpdateTinTucRequest $request)
    {
        $data = $request->all();
        $tin_tuc  = TinTuc::where('id', $request->id)->first();
        if($tin_tuc) {
            $tin_tuc->update($data);
            return response()->json([
                'status' => true,
                'message' => 'Đã Cập Nhật Thành Công',
            ]);
        } else {
            return response()->json([
                'status'  => 0,
                'message' => 'Bài viết không tồn tại hoặc không đủ quyền!',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $tin_tuc = TinTuc::where('id', $request->id)
                              ->first();

        if($tin_tuc) {
            $tin_tuc->delete();

            return response()->json([
                'status'    => true,
                'message'   => 'Đã xóa bài viết thành công',
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Bài viết không tồn tại',
            ]);
        }
    }

    public function status(Request $request)
    {
        $tin_tuc  = TinTuc::where('id', $request->id)->first();
        if($tin_tuc) {
            $tin_tuc->tinh_trang = !$tin_tuc->tinh_trang;
            $tin_tuc->save();

            return response()->json([
                'status' => true,
                'message' => 'Đã Đổi Trạng Thái Thành Công',
            ]);
        } else {
            return response()->json([
                'status'  => false,
                'message' => 'Bài viết không tồn tại hoặc không đủ quyền!',
            ]);
        }
    }

    public function getData()
    {
        $data      = TinTuc::get();

        return response()->json([
            'data' => $data,
        ]);
    }

    public function store(CreateTinTucRequest $request)
    {
        $data                   = $request->all();
        TinTuc::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Đã Thêm Mới Thành Công',
        ]);
    }

    public function shownews() {
        $news = TinTuc::where('tinh_trang', 1)->get();

        return view('user.page.all_news', compact('news'));
    }

    public function showNewsDetail($id) {
        $news = TinTuc::where('id', $id)
                      ->where('tinh_trang', 1)
                      ->first();

        return view('user.page.news_detail', compact('news'));
    }
}
