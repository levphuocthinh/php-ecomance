@extends('master_blank.share.master')
@section('content')
<div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
    <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
        <h2 class="card-title fw-bold mb-1">Đăng Ký</h2>
        <form class="auth-register-form mt-2" action="" method="">
            <div class="mb-1">
                <label class="form-label" for="register-username">Họ và tên</label>
                <input class="form-control" type="text" placeholder="Nhập vào họ và tên" autofocus="" tabindex="1">
            </div>
            <div class="mb-1">
                <label class="form-label" for="register-email">Email</label>
                <input class="form-control" type="text" placeholder="Nhập vào địa chỉ email" tabindex="2">
            </div>
            <div class="mb-1">
                <label class="form-label" for="register-password">Mật khẩu</label>
                <div class="input-group input-group-merge form-password-toggle">
                    <input class="form-control form-control-merge" type="password" placeholder="Nhập vào mật khẩu" aria-describedby="register-password" tabindex="3"><span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span>
                </div>
            </div>
            <div class="mb-1">
                <label class="form-label" for="register-password">Mật khẩu xác nhận</label>
                <div class="input-group input-group-merge form-password-toggle">
                    <input class="form-control form-control-merge" type="password" placeholder="Nhập lại mật khẩu" aria-describedby="register-password" tabindex="3"><span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span>
                </div>
            </div>
            <div class="mb-1">
                <div class="form-check">
                    <input class="form-check-input" id="register-privacy-policy" type="checkbox" tabindex="4">
                    <label class="form-check-label" for="register-privacy-policy">Đồng ý với<a href="#">&nbsp;chính sách bảo mật &amp; điều khoản</a></label>
                </div>
            </div>
            <button class="btn btn-primary w-100 waves-effect waves-float waves-light" tabindex="5">Đăng Ký</button>
        </form>
        <p class="text-center mt-2"><span>Đã có tài khoản?</span><a href="{{ Route("viewLoginPartner") }}"><span>&nbsp;Đăng nhập</span></a></p>
        <div class="divider my-2">
            <div class="divider-text">hoặc</div>
        </div>
        <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook waves-effect waves-float waves-light" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a><a class="btn btn-twitter white waves-effect waves-float waves-light" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a><a class="btn btn-google waves-effect waves-float waves-light" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></a><a class="btn btn-github waves-effect waves-float waves-light" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></a></div>
    </div>
</div>
@endsection
