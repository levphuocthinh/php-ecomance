<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordCustomerRequest;
use App\Http\Requests\User\RegisterCustomerRequest;
use App\Http\Requests\User\UpdateCustomerRequest;
use App\Mail\ActiveMail;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ApiCustomerController extends Controller
{
    //Doi mat khau
    public function updatePassword(UpdatePasswordCustomerRequest $request)
    {
        $user_login     = Auth::guard('user')->user();

        // $request->old_password, $user_login->email  => kiểm tra email và old_password có đúng không?
        // Vì nó đã bị mã hóa
        // if($user_login->password == $request->old_password) {
        // Ê laravel, mi hãy thử đăng nhập dựa vào $user_login->email và $request->old_password xem thử được không?
        // if($user_login->password == $request->old_password) {
        if(Auth::guard('user')->attempt(['email' => $user_login->email, 'password' => $request->old_password])) {
            $customer               = Customer::find($user_login->id);
            $customer->password     = bcrypt($request->new_password);
            $customer->save();

            return response()->json([
                'status'    => 1,
                'message'   => 'Đã cập nhật mật khẩu thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Mật khẩu cũ không đúng!',
            ]);
        }
    }

    //Profile
    public function getProfile(Request $request)
    {
        $user = Auth::guard('user')->user();
        $user['ho_va_dem'] =  $user->ho . ' ' . $user->dem;

        return response()->json([
            'status'    => 1,
            'data'      => $user,    //res.data.data
        ]);
    }

    public function updateProfile(UpdateCustomerRequest $request)
    {

        $now        = Carbon::now();
        $so_nam    = $now->diffInYears($request->ngay_sinh);
        if($so_nam < 18) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Độ tuổi phải trên 18!',
            ]);
        }
        // Với tài khoản thì phải dùng Auth để xác minh thông tin
        $user_login = Auth::guard('user')->user();
        $user_login['ho_va_dem'] =  $user_login->ho . ' ' . $user_login->dem;

        $ho_va_dem = $request->ho_va_dem;
        $ho_dem_array = explode(' ', $ho_va_dem);
        $ho = $ho_dem_array[0];
        $dem = implode(' ', array_slice($ho_dem_array, 1));

        // Cập nhật thông tin
        Customer::where('id', $user_login->id)
            ->update([
                'ho'            => $ho,
                'dem'           => $dem,
                'ten'           => $request->ten,
                'so_dien_thoai' => $request->so_dien_thoai,
                'ngay_sinh'     => $request->ngay_sinh,

            ]);

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã cập nhật thông tin thành công',
        ]);
    }



    public function tachTen($fullName)
    {
        $fullName  = Str::of($fullName)->trim();
        $space     = substr_count($fullName, ' ');

        $nameParts = explode(" ", $fullName);
        $lastName = $nameParts[0];
        $firstName = $nameParts[count($nameParts) - 1];
        $middleNameParts = array_slice($nameParts, 1, count($nameParts) - 2);
        $middleName = implode(" ", $middleNameParts);

        $res['ho']      = $lastName;
        $res['ten']     = $firstName;
        $res['dem']     = $middleName;
        $res['space']   = $space;
        return $res;
    }

    public function register(RegisterCustomerRequest $request)
    {
        $now        = Carbon::now();
        $so_nam    = $now->diffInYears($request->ngay_sinh);
        if($so_nam < 18) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn chưa đủ tuổi!',
            ]);
        }
        $res    =   $this->tachTen($request->ho_va_ten);
        if(strlen($res['ten']) < 2 || $res['space'] < 1) {
            return response()->json([
                'status'    => 0,
                'message'   => 'Họ và tên không đúng định dạng!',
            ]);
        }

        $data                   = $request->all();
        $data['ho']             = $res['ho'];
        $data['dem']            = $res['dem'];
        $data['ten']            = $res['ten'];
        $data['hash_active']    = Str::uuid();  // random 1 chuỗi string bất quy tắc - không trùng trên toàn vũ trụ
        $data['password']       = bcrypt($request->password);

        Customer::create($data);
        // Gửi mail

        $dataA['link']          =   env('APP_URL') . '/active/' . $data['hash_active'];
        $dataA['fullname']      =   $request->ho_va_ten;

        Mail::to($request->email)->send(new ActiveMail($dataA));

        return response()->json([
            'status'    => 1,
            'message'   => 'Bạn vui lòng kiểm tra email để kích hoạt tài khoản!',
        ]);
    }

    public function login(Request $request)
    {
        $check_1 = Auth::guard('user')->attempt(['email'  => $request->username, 'password' => $request->password]);
        $check_2 = Auth::guard('user')->attempt(['so_dien_thoai'  => $request->username, 'password' => $request->password]);

        if($check_1 || $check_2) {
            $customer   =   Auth::guard('user')->user();
            if($customer->is_active == 0) {
                Auth::guard('user')->logout();  // Ép nó logout

                return response()->json([
                    'status'    => 0,
                    'message'   => 'Vui lòng kích hoạt tài khoản!',
                ]);
            }
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã đăng nhập thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Tài khoản hoặc mật khẩu không đúng',
            ]);
        }
    }
}
