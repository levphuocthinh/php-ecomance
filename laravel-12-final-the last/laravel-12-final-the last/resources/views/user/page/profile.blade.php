@extends('user.page.profile_master')
@section('content_profile')
    <div id="app">
        <h3 class="contact__form--title mb-30">Profile</h3>
        <form class="contact__form--inner">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="input1">First Name <span
                                class="contact__form--label__star">*</span></label>
                        <input v-model="profile.ho_va_dem" class="contact__form--input" name="firstname" id="input1"
                            placeholder="Your First Name" type="text">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="input2">Last Name <span
                                class="contact__form--label__star">*</span></label>
                        <input v-model="profile.ten" class="contact__form--input" name="lastname" id="input2"
                            placeholder="Your Last Name" type="text">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="input3">Phone Number <span
                                class="contact__form--label__star">*</span></label>
                        <input v-model="profile.so_dien_thoai" class="contact__form--input" name="number" id="input3"
                            placeholder="Phone number" type="number">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="input4">Email <span
                                class="contact__form--label__star">*</span></label>
                        <input disabled v-model="profile.email" class="contact__form--input" name="email" id="input4"
                            placeholder="Email" type="email">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="input4">Date of birth <span
                                class="contact__form--label__star">*</span></label>
                        <input v-model="profile.ngay_sinh" class="contact__form--input" name="ngay_sinh" id="input4"
                            placeholder="Date of birth" type="date">
                    </div>
                </div>

            </div>
            <button v-on:click="changeProfile()" class="contact__form--btn primary__btn" type="button"> <span>Cập Nhật
                    Thông Tin</span></button>
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
                created() {
                    this.loadProfile();
                },
                methods: {
                    loadProfile() {
                        axios
                            .post('{{ Route('getCustomerProfile') }}')
                            .then((res) => {
                                this.profile = res.data.data;
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0]);
                                });
                            });
                    },
                    changeProfile() {
                        axios
                            .post('{{ Route('updateCustomerProfile') }}', this.profile)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message);
                                    location.reload();
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
