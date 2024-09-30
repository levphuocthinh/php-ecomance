@extends('user.share.master')
@section('content')
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span>Account</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start login section  -->
    <div id="app" class="login__section section--padding">
        <div class="container">
            <div class="login__section--inner">
                <div class="row row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="account__login">
                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title mb-10">Login</h2>
                                <p class="account__login--header__desc">Login if you area a returning customer.</p>
                            </div>
                            <div class="account__login--inner">
                                <label>
                                    <input v-model="login.username" class="account__login--input"
                                        placeholder="Email hoặc số điện thoại" type="text">
                                </label>
                                <label>
                                    <input v-model="login.password" class="account__login--input" placeholder="Password"
                                        type="password">
                                </label>
                                <div
                                    class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                    <div class="account__login--remember position__relative">
                                        <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                        <span class="checkout__checkbox--checkmark"></span>
                                        <label class="checkout__checkbox--label login__remember--label" for="check1">
                                            Remember me</label>
                                    </div>
                                    <a href="{{ Route('viewForgotPassword') }}"><button class="account__login--forgot" type="submit">Forgot Your Password?</button></a>
                                </div>
                                <button v-on:click="dangNhap()" class="account__login--btn primary__btn"
                                    type="submit">Login</button>
                                <div class="account__login--divide">
                                    <span class="account__login--divide__text">OR</span>
                                </div>
                                <div class="account__social d-flex justify-content-center mb-15">
                                    <a class="account__social--link facebook" target="_blank"
                                        href="https://www.facebook.com">Facebook</a>
                                    <a class="account__social--link google" target="_blank"
                                        href="https://www.google.com">Google</a>
                                    <a class="account__social--link twitter" target="_blank"
                                        href="https://twitter.com">Twitter</a>
                                </div>
                                <p class="account__login--signup__text">Don,t Have an Account? <button type="submit">Sign
                                        up now</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="account__login register">
                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title mb-10">Create an Account</h2>
                                <p class="account__login--header__desc">Register here if you are a new customer</p>
                            </div>
                            <div class="account__login--inner">
                                <label>
                                    <input v-model="register.ho_va_ten" class="account__login--input"
                                        placeholder="Họ Và Tên" type="text">
                                </label>
                                <label>
                                    <input v-model="register.so_dien_thoai" class="account__login--input"
                                        placeholder="Số Điện Thoại" type="tel">
                                </label>
                                <label>
                                    <input v-model="register.email" class="account__login--input" placeholder="Email Addres"
                                        type="email">
                                </label>
                                <label>
                                    <input v-model="register.ngay_sinh" class="account__login--input"
                                        placeholder="Ngày Sinh" type="date">
                                </label>
                                <label>
                                    <input v-model="register.password" class="account__login--input" placeholder="Password"
                                        type="password">
                                </label>
                                <label>
                                    <input v-model="register.re_password" class="account__login--input"
                                        placeholder="Confirm Password" type="password">
                                </label>
                                <div class="account__login--remember position__relative mb-10">
                                    <input v-model="register.check" class="checkout__checkbox--input" id="check2"
                                        type="checkbox">
                                    <span class="checkout__checkbox--checkmark"></span>
                                    <label class="checkout__checkbox--label login__remember--label" for="check2">
                                        I have read and agree to the terms & conditions</label>
                                </div>
                                <button v-on:click="dangKy()" class="account__login--btn primary__btn mb-20 mt-10"
                                    type="button">Submit & Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End login section  -->

    @include('user.share.shipping')
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            new Vue({
                el: '#app',
                data: {
                    register: {},
                    login: {},
                },
                created() {

                },
                methods: {
                    dangKy() {
                        axios
                            .post(' {{ Route('customerRegister') }} ', this.register)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message);
                                } else {
                                    toastr.error(res.data.message);
                                }
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0]);
                                });
                            });
                    },
                    dangNhap() {
                        axios
                            .post('{{ Route('customerLogin') }}', this.login)
                            .then((res) => {
                                if (res.data.status == 1) {
                                    toastr.success(res.data.message);
                                    setTimeout(() => {
                                        window.location.replace(
                                            '{{ Route('viewCustomerProfile') }}');
                                    }, 500);
                                } else {
                                    toastr.error(res.data.message);
                                }
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                },
            });
        })
    </script>
@endsection
