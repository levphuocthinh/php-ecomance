@extends('share_admin.master')
@section('noi_dung')
    <div class="row" id="app">
        <div class="col-12 text-end mb-2">
            <button type="button" class="btn btn-outline-primary round waves-effect" data-bs-toggle="modal"
                data-bs-target="#createModal"><i class="fa-solid fa-plus"></i> Thêm Mới</button>
        </div>
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Thêm Mới Bài Viết</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="mb-1">
                                    <label class="form-label">Tiêu Đề</label>
                                    <input v-on:blur="checkSlugCreate()" v-on:keyup="nameToSlugCreate()" v-model="add.tieu_de" type="text" class="form-control"
                                        placeholder="Nhập tiêu đề">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-1">
                                    <label class="form-label">Slug Tin Tức</label>
                                    <input disabled v-model="slug" type="text" class="form-control"
                                        placeholder="Nhập slug tin tức">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-1">
                                    <label class="form-label">Hình Ảnh</label>
                                    <input v-model="add.hinh_anh" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-1">
                                    <label>Tình Trạng</label>
                                    <select v-model="add.tinh_trang" class="form-control">
                                        <option value="0">Tạm Tắt</option>
                                        <option value="1">Hiển Thị</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-1">
                                    <label>Mô Tả Ngắn</label>
                                    <textarea v-model="add.mo_ta_ngan" class="form-control" cols="30" rows="10" placeholder="Nhập vào mô tả ngắn"></textarea>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-1">
                                    <label>Chi Tiết</label>
                                    <textarea v-model="add.chi_tiet" class="form-control" cols="30" rows="10"
                                        placeholder="Nhập vào mô tả chi tiết"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id="themMoi" v-on:click="themMoi()" class="btn btn-primary">Thêm Mới Bài
                            Viết</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Danh Sách Bài Viết
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-12">
                            <div class="input-group">
                                <button v-on:click="timKiem()" class="btn btn-outline-primary waves-effect" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                                <input v-model="key_search" v-on:keyup.enter="timKiem()" v-on:blur="timKiem()" type="text"
                                    class="form-control" placeholder="Nhập vào thông tin cần tìm" aria-label="Amount">
                                <button v-on:click="timKiem()" class="btn btn-outline-primary waves-effect"
                                    type="button">Search !</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="danh_sach">
                                <thead>
                                    <tr>
                                        <th class="text-center text-nowrap">#</th>
                                        <th class="text-center text-nowrap">Tiêu Đề</th>
                                        <th class="text-center text-nowrap">Slug Tin Tức</th>
                                        <th class="text-center text-nowrap">Hình Ảnh</th>
                                        <th class="text-center text-nowrap">Mô Tả Ngắn</th>
                                        <th class="text-center text-nowrap">Chi Tiết</th>
                                        <th class="text-center text-nowrap">Tình Trạng</th>
                                        <th class="text-center text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="(value, key) in list">
                                        <tr>
                                            <th class="text-center">@{{ key + 1 }}</th>
                                            <td class="text-nowrap">@{{ value.tieu_de }}</td>
                                            <td class="text-nowrap">@{{ value.slug_tin_tuc }}</td>
                                            <td class="text-nowrap">
                                                <img style="width: 150px;" class="img-thumbnail"
                                                    v-bind:src="value.hinh_anh">
                                            </td>
                                            <td class="align-middle text-nowrap text-center">
                                                <i v-on:click="chi_tiet = value.mo_ta_ngan" data-bs-toggle="modal"
                                                    data-bs-target="#chiTietModal"
                                                    class="fa-2x fa-solid fa-circle-info text-info"></i>
                                            </td>
                                            <td class="align-middle text-nowrap text-center">
                                                <i v-on:click="chi_tiet = value.chi_tiet" data-bs-toggle="modal"
                                                    data-bs-target="#chiTietModal"
                                                    class="fa-2x fa-solid fa-circle-info text-info"></i>
                                            </td>
                                            <td class="text-nowrap text-center">
                                                <button v-on:click="changeStatus(value)" v-if="value.tinh_trang == 0"
                                                    class="btn btn-warning">Tạm Tắt</button>
                                                <button v-on:click="changeStatus(value)" v-else
                                                    class="btn btn-success">Hiển
                                                    Thị</button>
                                            </td>
                                            <td class="text-center align-middle text-nowrap">
                                                <i data-bs-toggle="modal" data-bs-target="#editModal"
                                                    v-on:click="edit = Object.assign({}, value); slug_edit = edit.slug_tin_tuc"
                                                    class="fa-solid fa-pen-to-square fa-2x text-info"style="margin-right: 10px"></i>
                                                <i data-bs-toggle="modal"
                                                    data-bs-target="#delModal"v-on:click="del = Object.assign({}, value)"
                                                    class="fa-solid fa-trash fa-2x text-danger"></i>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal fade" id="chiTietModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mô Tả Bài Viết</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @{{ chi_tiet }}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa Bài Viết</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn chắc chắn muốn xóa bài viết <b class="text-danger">@{{ del.tieu_de }}</b> khỏi danh
                                        sách?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Đóng</button>
                                        <button v-on:click="xoaBaiViet()" type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Xác Nhận Xóa</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Cập Nhật Sản Phẩm</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-1">
                                                    <label class="form-label">Tiêu Đề</label>
                                                    <input v-on:blur="checkSlugUpdate()"  v-on:keyup="nameToSlugUpdate()" v-model="edit.tieu_de" type="text" class="form-control"
                                                        placeholder="Nhập tiêu đề">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-1">
                                                    <label class="form-label">Slug Tin Tức</label>
                                                    <input disabled v-model="slug_edit" type="text" class="form-control"
                                                        placeholder="Nhập slug tin tức">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-1">
                                                    <label class="form-label">Hình Ảnh</label>
                                                    <input v-model="edit.hinh_anh" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-1">
                                                    <label>Tình Trạng</label>
                                                    <select v-model="edit.tinh_trang" class="form-control">
                                                        <option value="0">Tạm Tắt</option>
                                                        <option value="1">Hiển Thị</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="mb-1">
                                                    <label>Mô Tả Ngắn</label>
                                                    <textarea v-model="edit.mo_ta_ngan" class="form-control" cols="30" rows="10" placeholder="Nhập vào mô tả ngắn"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="mb-1">
                                                    <label>Chi Tiết</label>
                                                    <textarea v-model="edit.chi_tiet" class="form-control" cols="30" rows="10"
                                                        placeholder="Nhập vào mô tả chi tiết"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Đóng</button>
                                        <button id="capNhat" v-on:click="updateBaiViet()" type="button" class="btn btn-primary">Cập Nhật</button>
                                    </div>
                                </div>
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
                el: '#app',
                data: {
                    list        : [],
                    add         : {},
                    del         : {},
                    edit        : {},
                    chi_tiet    : '',
                    slug        : '',
                    slug_edit   : '',
                    key_search  : '',
                },
                created() {
                    this.getData();
                    this.mau_do();
                },
                methods: {
                    getData() {
                        axios
                            .get('{{ Route('dataTinTuc') }}')
                            .then((res) => {
                                this.list = res.data.data;
                            });
                    },
                    themMoi() {
                        this.add.slug_tin_tuc = this.slug;
                        axios
                            .post('{{ Route('createTinTuc') }}', this.add)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success("Đã thêm mới bài viết", "Thành công!");
                                    this.getData();
                                    $('#createModal').modal('hide');
                                    this.add = {};
                                    this.slug= '';
                                }
                            })
                            .catch((res) => {
                                var errrors = res.response.data.errors;
                                $.each(errrors, function(k, v) {
                                    toastr.error(v[0], "Có lỗi!");
                                })
                            });
                    },
                    changeStatus(payload) {
                        axios
                            .post('{{ Route('statusTinTuc') }}', payload)
                            .then((res) => {
                                this.timKiem();
                                toastr.warning("Đã đổi trạng thái", "Thành Công!")
                            });
                    },
                    xoaBaiViet() {
                        axios
                            .post('{{ Route('deleteTinTuc') }}', this.del)
                            .then((res) => {
                                if (res.data.status) {
                                    this.timKiem();
                                    toastr.success(res.data.message);
                                    $('#delModal').modal('hide');
                                }
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0]);
                                });
                            });
                    },
                    nameToSlugCreate() {
                        this.slug = this.toSlug(this.add.tieu_de);
                    },

                    nameToSlugUpdate() {
                        this.slug_edit = this.toSlug(this.edit.tieu_de);
                    },

                    toSlug(str) {
                        str = str.toLowerCase();
                        str = str
                            .normalize('NFD') // chuyển chuỗi sang unicode tổ hợp
                            .replace(/[\u0300-\u036f]/g, ''); // xóa các ký tự dấu sau khi tách tổ hợp
                        str = str.replace(/[đĐ]/g, 'd');
                        str = str.replace(/([^0-9a-z-\s])/g, '');
                        str = str.replace(/(\s+)/g, '-');
                        str = str.replace(/-+/g, '-');
                        str = str.replace(/^-+|-+$/g, '');
                        return str;
                    },
                    updateBaiViet() {
                    this.edit.slug_tin_tuc     = this.slug_edit;

                        axios
                            .post('{{ Route('updateTinTuc') }}', this.edit)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message);
                                    $('#editModal').modal('hide');
                                    this.timKiem();
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
                    timKiem() {
                        var payload = {
                            'gia_tri': this.key_search,
                        };
                        axios
                            .post('{{ Route('searchTinTuc') }}', payload)
                            .then((res) => {
                                this.list = res.data.data;
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0]);
                                });
                            });
                    },
                     mau_xanh() {
                        $("#themMoi").removeClass("btn-danger");
                        $("#themMoi").addClass("btn-primary");
                        $("#themMoi").removeAttr("disabled");
                        $("#themMoi").text("Thêm Mới")
                    },
                    mau_do() {
                        $("#themMoi").removeClass("btn-primary");
                        $("#themMoi").addClass("btn-danger");
                        $("#themMoi").attr("disabled", true);
                        $("#themMoi").text("Thêm Mới")
                    },
                    mau_xanh_update() {
                        $("#capNhat").removeClass("btn-danger");
                        $("#capNhat").addClass("btn-primary");
                        $("#capNhat").removeAttr("disabled");
                        $("#capNhat").text("Cập nhật")
                    },

                    mau_do_update() {
                        $("#capNhat").removeClass("btn-primary");
                        $("#capNhat").addClass("btn-danger");
                        $("#capNhat").attr("disabled", true);
                        $("#capNhat").text("Cập nhật")
                    },
                    checkSlugCreate() {
                        var payload = {
                            'slug_tin_tuc' : this.slug,
                        };
                        axios
                            .post('{{ Route('checkSlugTinTuc') }}', payload)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "Thành công!");
                                    this.mau_xanh();
                                } else {
                                    toastr.error(res.data.message, "Có lỗi!");
                                    this.mau_do();
                                }
                            });
                    },
                    checkSlugUpdate() {
                        var payload = {
                            'id'            : this.edit.id,
                            'slug_tin_tuc'  : this.slug_edit,
                        };
                        axios
                            .post(' {{ Route('checkSlugUpdateTinTuc') }} ', payload)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "Thành công!");
                                    this.mau_xanh_update();
                                } else {
                                    toastr.error(res.data.message, "Có lỗi!");
                                    this.mau_do_update();

                                }
                            });
                    },
                },
            });
        });
    </script>
@endsection
