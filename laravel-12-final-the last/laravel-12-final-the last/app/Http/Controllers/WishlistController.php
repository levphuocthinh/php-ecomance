<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;

class WishlistController extends Controller
{
    public function viewWishlist()
    {

        return view('user.page.wishlist');
    }

    public function dataWishlist()
    {
        $customer = Auth::guard('user')->user();

        $wishlist = Wishlist::where('id_customer', $customer->id)
                            ->join('san_phams', 'wishlists.id_san_pham', '=', 'san_phams.id')
                            ->select('wishlists.*','san_phams.ten_san_pham', 'san_phams.hinh_anh', 'san_phams.gia_ban')
                            ->get();

        $yeu_thich = count($wishlist);
        return response()->json([
            'status'    =>  1,
            'data'      =>  $wishlist,
            'yeu_thich' =>  $yeu_thich,
        ]);

    }

    public function createWishlist(Request $request)
    {
        // dd($request->all());

        $customer = Auth::guard('user')->user();

        $wishlist = Wishlist::where('id_customer', $customer->id)
                            ->where('id_san_pham', $request->id)
                            ->first();

        if($wishlist){
                $wishlist->delete();
                return response()->json([
                    'trang_thai'    => 0,
                ]);
        }else{
            Wishlist::create([
                'id_customer'   => $customer->id,
                'id_san_pham'   => $request->id,
            ]);
            return response()->json([
                'trang_thai'    => 1,
            ]);
        }


    }

    public function destroyWishlist(Request $request)
    {
        $customer   = Auth::guard('user')->user();
        $data       = Wishlist::where('id', $request->id)
                                ->where('id_customer', $customer->id)
                                ->first();
        if($data) {
            $data->delete();
            return response()->json([
                'status' => true,
                'message' => 'Đã Hủy Yêu Thích Thành Công',
            ]);
        }
    }


}
