@extends('user.share.master')
@section('content')
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span>Forgot Password</span></li>
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
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-5">
                        <div class="account__login">
                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title mb-10">Forgot Password</h2>
                            </div>
                            <div class="account__login--inner">
                                <label>
                                    <input v-model="obj.new_password" class="account__login--input"
                                        placeholder="Nhập vào mật khẩu mới" type="password">
                                    <input v-model="obj.re_password" class="account__login--input"
                                        placeholder="Nhập lại mật khẩu" type="password">
                                </label>
                                <button v-on:click="updatePassword()" class="account__login--btn primary__btn"
                                    type="button">Đổi Mật Khẩu</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            new Vue({
                el      :   '#app',
                data    :   {
                    obj : {
                        'hash_reset' : {!! json_encode($hash_reset) !!},
                        'new_password'   : '',
                        're_password'   : '',
                    },
                },
                created()   {

                },
                methods :   {
                    updatePassword() {
                        axios
                            .post('{{ Route("actionUpdatePassword") }}', this.obj)
                            .then((res) => {
                                if(res.data.status) {
                                    toastr.success(res.data.message, 'Success');
                                    setTimeout(() => {
                                        window.location.replace(
                                            '{{ Route('viewCustomerLogin') }}');
                                    }, 500);
                                } else {
                                    toastr.error(res.data.message, 'Error');
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
        });
    </script>
@endsection
