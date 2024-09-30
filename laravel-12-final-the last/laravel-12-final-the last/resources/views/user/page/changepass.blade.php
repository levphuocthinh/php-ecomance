@extends('user.page.profile_master')
@section('content_profile')
    <div id="app">
        <h3 class="contact__form--title mb-30">Đổi Mật Khẩu</h3>
        <form class="contact__form--inner">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="input1">Mật Khẩu Cũ <span
                                class="contact__form--label__star">*</span></label>
                        <input v-model="profile.old_password" class="contact__form--input" placeholder="Current Password" type="text">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="input2">Mật Khẩu Mới <span
                                class="contact__form--label__star">*</span></label>
                        <input v-model="profile.new_password" class="contact__form--input" placeholder="New PassWord"
                            type="text">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="input3">Nhập Lại Mật Khẩu Mới <span
                                class="contact__form--label__star">*</span></label>
                        <input v-model="profile.re_password" class="contact__form--input" placeholder="Re Password"
                            type="text">
                    </div>
                </div>
            </div>
            <button v-on:click="changePassword()" class="contact__form--btn primary__btn" type="button"> <span>Đổi Mật
                    Khẩu</span></button>
        </form>
    </div>
@endsection
@section('js_profile')
    <script>
        $(document).ready(function() {
            new Vue({
                el: '#app',
                data: {
                    profile: {},
                },
                methods: {
                    changePassword() {
                        axios
                            .post('{{ Route('updateCustomerPassword') }}', this.profile)
                            .then((res) => {
                                if (res.data.status == 1) {
                                    toastr.success(res.data.message);
                                } else {
                                    toastr.error(res.data.message);
                                }
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], "Error");
                                });
                            });
                    },
                },
            });
        });
    </script>
@endsection
