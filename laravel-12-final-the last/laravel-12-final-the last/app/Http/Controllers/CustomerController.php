<?php

namespace App\Http\Controllers;

use App\Http\Requests\Partner\UpdatePasswordRequest;
use App\Http\Requests\UpdatePasswordCustomerRequest;
use App\Http\Requests\User\CreateDiaChiRequest;
use App\Mail\forgotPasswordMail;
use App\Models\ChiTietDonHang;
use App\Models\Customer;
use App\Models\DiaChi;
use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    public function viewForgotPassword()
    {
        return view('user.page.forgotpassword');
    }

    public function dataCustomerOrder()
    {
        $user = Auth::guard('user')->user();

        $data = DonHang::where('id_customer', $user->id)
                       ->get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function dataCustomerOrderDetail(Request $request)
    {
        $user = Auth::guard('user')->user();

        $data = ChiTietDonHang::join('san_phams', 'san_phams.id', 'chi_tiet_don_hangs.id_san_pham')
                              ->where('chi_tiet_don_hangs.id_customer', $user->id)
                              ->where('chi_tiet_don_hangs.id_don_hang', $request->id)
                              ->select('chi_tiet_don_hangs.*', 'san_phams.ten_san_pham', 'san_phams.gia_ban', 'san_phams.gia_khuyen_mai')
                              ->get();

        return response()->json([
            'data'   => $data,
        ]);
    }

    public function actionForgotPassword(Request $request)
    {
        $user = Customer::where('email', $request->email)->first();

        if($user) {
            $user->hash_reset = Str::uuid();
            $user->save();

            $dataMail['email'] = $user->email;
            $dataMail['ho_va_ten'] = $user->ho . ' ' . $user->dem . ' ' . $user->ten;
            $dataMail['hash_reset'] = $user->hash_reset;

            $dataMail['link']          =   env('APP_URL') . '/update-password/' . $dataMail['hash_reset'];

            toastr()->success('Vui lòng kiểm tra email!');

            Mail::to($user->email)->send(new forgotPasswordMail($dataMail));

            return response()->json([
                'status'    => true,
                'message'   => 'Vui lòng kiểm tra email để cập nhật mật khẩu!',
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Tài khoản không tôn tại!',
            ]);
        }
    }

    public function viewUpdatePassword($hash_reset)
    {
        return view('user.page.updatePassword', compact('hash_reset'));
    }

    public function actionUpdatePassword(UpdatePasswordRequest $request)
    {
        $data = $request->all();
        $data['password']   = bcrypt($request->new_password);

        $user = Customer::where('hash_reset', $request->hash_reset)->first();

        if($user) {
            $user->update($data);

            $user->hash_reset = NULL;
            $user->save();

            return response()->json([
                'status'    => true,
                'message'   => 'Đã cập nhật mật khẩu thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Tài khoản không tồn tại!',
            ]);
        }
    }

    public function index()
    {
        return view('user.page.auth');
    }

    public function viewProfile()
    {
        return view('user.page.profile');
    }

    public function viewDashboard()
    {
        return view('user.page.dashboard');
    }

    public function viewDoiMatKhau()
    {
        return view('user.page.changepass');
    }

    public function viewDiaChi()
    {
        $customer   = Auth::guard('user')->user();

        return view('user.page.address', compact('customer'));
    }

    public function viewDonHang()
    {
        return view('user.page.order');
    }

    public function createDiaChi(CreateDiaChiRequest $request)
    {
        $customer               = Auth::guard('user')->user();

        $data                   = $request->all();
        $data['id_customer']    = $customer->id;

        DiaChi::create($data);

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã thêm mới địa chỉ thành công!',
        ]);
    }

    public function dataDiaChi()
    {
        $customer   = Auth::guard('user')->user();
        $data       = DiaChi::where('id_customer', $customer->id)
                            ->get();

        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }



    public function viewCheckout()
    {
        return view('user.page.checkout');
    }

    public function dataDiaChiCheckout()
    {
        $customer   = Auth::guard('user')->user();

        $data       = DiaChi::where('id_customer', $customer->id)
                             ->select('dia_chis.*')
                             ->get();
        return response()->json([
            'status'    => 1,
            'data'   => $data,
        ]);
    }


    public function logOut() {
        Auth::guard('user')->logout();

        return redirect('/');
    }

    public function activeAccount($code)
    {
        $customer   =   Customer::where('hash_active', $code)->first();

        if($customer) {
            $customer->is_active    = 1;
            $customer->hash_active  = NULL;
            $customer->save();

            toastr()->success('Đã kích hoạt tài khoản thành công!');
            return redirect('/');
        } else {
            toastr()->error('Liên kết không tồn tại!');
            return redirect('/');
        }
    }
}
