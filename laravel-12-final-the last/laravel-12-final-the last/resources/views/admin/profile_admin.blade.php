@extends('share_admin.master')
@section('noi_dung')
<div id="app">
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Thông Tin Cá Nhân</h4>
        </div>
        <div class="card-body py-2 my-25">
            <!-- header section -->
            <div class="d-flex">
                <a href="#" class="me-25">
                    <img src="/assets_admin/app-assets/images/portrait/small/avatar-s-11.jpg" id="account-upload-img"
                        class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                </a>
                <!-- upload and reset button -->
                <div class="d-flex align-items-end mt-75 ms-1">
                    <div>
                        <label for="account-upload"
                            class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light">Upload</label>
                        <input type="file" id="account-upload" hidden="" accept="image/*">
                        <button type="button" id="account-reset"
                            class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
                        <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                    </div>
                </div>
                <!--/ upload and reset button -->
            </div>
            <!--/ header section -->

            <!-- form -->
            <form class="validate-form mt-2 pt-50" novalidate="novalidate">
                <div class="row">
                    <div class="col-12 col-sm-6 mb-1">
                        <label class="form-label" for="accountFirstName">Họ</label>
                        <input v-model="profile.ho_lot" type="text" class="form-control" placeholder="Nhập vào họ của bạn">
                    </div>
                    <div class="col-12 col-sm-6 mb-1">
                        <label class="form-label" for="accountLastName">Tên</label>
                        <input v-model="profile.ten" type="text" class="form-control" placeholder="Nhập vào tên của bạn">
                    </div>
                    <div class="col-12 col-sm-6 mb-1">
                        <label class="form-label" for="accountEmail">Email</label>
                        <input disabled v-model="profile.email" type="email" class="form-control" placeholder="Nhập vào email">
                    </div>
                    <div class="col-12 col-sm-6 mb-1">
                        <label class="form-label" for="accountPhoneNumber">Số Điện Thoại</label>
                        <input v-model="profile.so_dien_thoai" type="text" class="form-control account-number-mask" placeholder="Nhập vào số điện thoại">
                    </div>
                    <div class="col-12 col-sm-6 mb-1">
                        <label class="form-label" for="accountAddress">Địa Chỉ</label>
                        <input v-model="profile.dia_chi" type="text" class="form-control" placeholder="Nhập vào địa chỉ của bạn">
                    </div>
                    <div class="col-12">
                        <button v-on:click="changeProfile()" type="button" class="btn btn-primary mt-1 me-1 waves-effect waves-float waves-light">Lưu
                            Thông Tin</button>
                    </div>
                </div>
            </form>
            <!--/ form -->
        </div>
    </div>
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Thay Đổi Mật Khẩu</h4>
        </div>
        <div class="card-body py-2 my-25">
            <form id="formAccountDeactivation" class="validate-form" novalidate="novalidate">
                <div class="row">
                    <div class="col-12 col-sm-6 mb-1">
                        <label class="form-label">Mật Khẩu Mới</label>
                        <div class="input-group input-group-merge form-password-toggle mb-2">
                            <input v-model="profile.new_password" type="password" class="form-control" id="basic-default-password1" placeholder="Nhập vào mật khẩu mới" aria-describedby="basic-default-password1">
                            <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-small-4"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mb-1">
                        <label class="form-label">Nhập lại Mật Khẩu Mới</label>
                        <div class="input-group input-group-merge form-password-toggle mb-2">
                            <input v-model="profile.re_password" type="password" class="form-control" id="basic-default-password1" placeholder="Nhập lại mật khẩu mới" aria-describedby="basic-default-password1">
                            <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-small-4"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <button v-on:click="changePassword()" type="button" class="btn btn-primary mt-1 me-1 waves-effect waves-float waves-light">Lưu
                            Mật Khẩu</button>
                    </div>
                </div>
            </form>
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
                profile :   {},
            },
            created()   {
                this.loadProfile();
            },
            methods :   {
                loadProfile() {
                    axios
                        .post('{{ Route("getProfileAdmin") }}')
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
                        .post('{{ Route("updateProfileAdmin") }}', this.profile)
                        .then((res) => {
                            if(res.data.status) {
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
                changePassword() {
                    axios
                        .post('{{ Route("updatePasswordAdmin") }}', this.profile)
                        .then((res) => {
                            if(res.data.status) {
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
                }
            },
        });
    });
</script>
@endsection
