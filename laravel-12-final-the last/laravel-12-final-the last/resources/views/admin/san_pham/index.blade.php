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
                        <h5 class="modal-title" id="exampleModalLabel"> Thêm Mới Sản Phẩm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-2">
                                    <label>Tên Sản Phẩm</label>
                                    <input v-on:keyup="nameToSlugCreate()" v-model="add.ten_san_pham" type="text"
                                        class="form-control" placeholder="Nhập vào tên sản phẩm">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-2">
                                    <label>Slug Sản Phẩm</label>
                                    <input disabled v-model="slug" type="text" class="form-control"
                                        placeholder="Nhập vào slug sản phẩm">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-2">
                                    <label>Chuyên Mục</label>
                                    <select v-model="add.id_chuyen_muc" class="form-control">
                                        <template v-for="(va, ke) in ds_chuyen_muc">
                                            <option v-bind:value="va.id">@{{ va.ten_chuyen_muc }}</option>
                                        </template>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="mb-2">
                                    <label>Hình Ảnh</label>
                                    <input v-model="add.hinh_anh" type="text" class="form-control"
                                        placeholder="Nhập vào tên hình ảnh">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-2">
                                    <label>Tình Trạng</label>
                                    <select v-model="add.tinh_trang" class="form-control">
                                        <option value="0">Tạm Tắt</option>
                                        <option value="1">Hiển Thị</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-2">
                                    <label>Giá Bán</label>
                                    <input v-model="add.gia_ban" type="number" class="form-control"
                                        placeholder="Nhập vào tên giá bán">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-2">
                                    <label>Giá Khuyến Mãi</label>
                                    <input v-model="add.gia_khuyen_mai" type="number" class="form-control"
                                        placeholder="Nhập vào tên giá khuyến mãi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <label>Mô Tả Ngắn</label>
                                    <textarea v-model="add.mo_ta_ngan" class="form-control" cols="30" rows="10" placeholder="Nhập vào mô tả ngắn"></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label>Mô Tả Chi Tiết</label>
                                    <textarea v-model="add.mo_ta_chi_tiet" class="form-control" cols="30" rows="10"
                                        placeholder="Nhập vào mô tả chi tiết"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button v-on:click="themMoi()" class="btn btn-primary" data-bs-dismiss="modal">Thêm Mới Sản
                            Phẩm</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Danh Sách Sản Phẩm
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-12">
                            <div class="input-group">
                                <button class="btn btn-outline-primary waves-effect" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                                <input v-model="key_search" v-on:blur="timKiem()" v-on:keyup.enter="timKiem()" type="text"
                                    class="form-control" placeholder="Nhập vào thông tin cần tìm" aria-label="Amount">
                                <button v-on:click="timKiem()" class="btn btn-outline-primary waves-effect"
                                    type="button">Search !</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle text-nowrap">#</th>
                                    <th class="text-center align-middle text-nowrap">Tên Sản Phẩm</th>
                                    <th class="text-center align-middle text-nowrap">Hình Ảnh</th>
                                    <th class="text-center align-middle text-nowrap">Mô Tả Ngắn</th>
                                    <th class="text-center align-middle text-nowrap">Mô Tả Chi Tiết</th>
                                    <th class="text-center align-middle text-nowrap">Tình Trạng</th>
                                    <th class="text-center align-middle text-nowrap">Giá Bán</th>
                                    <th class="text-center align-middle text-nowrap">Chuyên Mục</th>
                                    <th class="text-center align-middle text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value, key) in list">
                                    <tr>
                                        <th class="text-center align-middle text-nowrap">@{{ key + 1 }}</th>
                                        <td class="align-middle text-nowrap">
                                            <p>@{{ value.ten_san_pham }} </p>
                                            <p>@{{ value.slug_san_pham }}</p>
                                        </td>
                                        <td class="text-center align-middle text-nowrap">
                                            <img style="width: 150px;" class="img-thumbnail" v-bind:src="value.hinh_anh">
                                        </td>
                                        <td class="align-middle text-nowrap text-center">
                                            <i v-on:click="chi_tiet = value.mo_ta_ngan" data-bs-toggle="modal" data-bs-target="#chiTietModal" class="fa-2x fa-solid fa-circle-info text-info" ></i>
                                        </td>
                                        <td class="align-middle text-nowrap text-center">
                                            <i v-on:click="chi_tiet = value.mo_ta_chi_tiet" data-bs-toggle="modal" data-bs-target="#chiTietModal" class="fa-2x fa-solid fa-circle-info text-info" ></i>
                                        </td>
                                        <td class="text-center align-middle text-nowrap">
                                            <button v-on:click="changeStatus(value)" v-if="value.tinh_trang == 0"
                                                class="btn btn-warning">Tạm Tắt</button>
                                            <button v-on:click="changeStatus(value)" v-else class="btn btn-success">Hiển
                                                Thị</button>
                                        </td>
                                        <td class="align-middle text-nowrap">
                                            <p>Giá Bán:  <b>@{{ numberFormat(value.gia_ban) }}</b></p>
                                            <p>Giá Khuyến Mãi:  <b>@{{ numberFormat(value.gia_khuyen_mai) }}</b></p>
                                        </td>
                                        <td class="align-middle text-nowrap">@{{ value.ten_chuyen_muc }}</td>
                                        <td class="text-center align-middle text-nowrap">
                                            <i data-bs-toggle="modal" data-bs-target="#editModal"
                                                v-on:click="edit = Object.assign({}, value); slug_edit = edit.slug_san_pham"
                                                class="fa-solid fa-pen-to-square fa-2x text-info"style="margin-right: 10px"></i>
                                            <i data-bs-toggle="modal"
                                                data-bs-target="#delModal"v-on:click="del = Object.assign({}, value)"
                                                class="fa-solid fa-trash fa-2x text-danger"></i>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                        <div class="modal fade" id="chiTietModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Chi Tiết Sản Phẩm</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    @{{ chi_tiet }}
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa Sản Phẩm</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn chắc chắn muốn xóa <b class="text-danger">@{{ del.ten_san_pham }}</b> khỏi danh
                                        sách?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Đóng</button>
                                        <button v-on:click="xoaSanPham()" type="button" class="btn btn-danger"
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
                                            <div class="col-4">
                                                <div class="mb-2">
                                                    <label>Tên Sản Phẩm</label>
                                                    <input v-on:keyup="nameToSlugUpdate()" v-model="edit.ten_san_pham"
                                                        type="text" class="form-control"
                                                        placeholder="Nhập vào tên sản phẩm">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-2">
                                                    <label>Slug Sản Phẩm</label>
                                                    <input disabled v-model="slug_edit" type="text"
                                                        class="form-control" placeholder="Nhập vào slug sản phẩm">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-2">
                                                    <label>Chuyên Mục</label>
                                                    <select v-model="edit.id_chuyen_muc" class="form-control">
                                                        <template v-for="(va, ke) in ds_chuyen_muc">
                                                            <option v-bind:value="va.id">@{{ va.ten_chuyen_muc }}</option>
                                                        </template>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-2">
                                                    <label>Hình Ảnh</label>
                                                    <input v-model="edit.hinh_anh" type="text" class="form-control"
                                                        placeholder="Nhập vào tên hình ảnh">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-2">
                                                    <label>Tình Trạng</label>
                                                    <select v-model="edit.tinh_trang" class="form-control">
                                                        <option value="0">Tạm Tắt</option>
                                                        <option value="1">Hiển Thị</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-2">
                                                    <label>Giá Bán</label>
                                                    <input v-model="edit.gia_ban" type="number" class="form-control"
                                                        placeholder="Nhập vào tên giá bán">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-2">
                                                    <label>Giá Khuyến Mãi</label>
                                                    <input v-model="edit.gia_khuyen_mai" type="number"
                                                        class="form-control" placeholder="Nhập vào tên giá khuyến mãi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <label>Mô Tả Ngắn</label>
                                                    <textarea v-model="edit.mo_ta_ngan" class="form-control" cols="30" rows="10"
                                                        placeholder="Nhập vào mô tả ngắn"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <label>Mô Tả Chi Tiết</label>
                                                    <textarea v-model="edit.mo_ta_chi_tiet" class="form-control" cols="30" rows="10"
                                                        placeholder="Nhập vào mô tả chi tiết"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Đóng</button>
                                        <button v-on:click="updateSanPham()" type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal">Cập Nhật</button>
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
        new Vue({
            el: '#app',
            data: {
                add             : {},
                list            : [],
                edit            : {},
                del             : {},
                slug            : '',
                slug_edit       : '',
                key_search      : '',
                chi_tiet        : 'xyz',
                ds_chuyen_muc   :   [],
            },
            created() {
                this.loadData();
                this.loadChuyeMuc();
            },
            methods: {
                loadChuyeMuc() {
                    axios
                        .get('{{ Route("dataChuyenMuc") }}')
                        .then((res) => {
                            this.ds_chuyen_muc  = res.data.data;
                        });
                },
                timKiem() {
                    var payload = {
                        'gia_tri': this.key_search,
                    };
                    axios
                        .post('{{ Route('searchSanPham') }}', payload)
                        .then((res) => {
                            this.list = res.data.data;
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },

                updateSanPham() {
                    this.edit.slug_san_pham     = this.slug_edit;

                    axios
                        .post('{{ Route('updateSanPham') }}', this.edit)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success(res.data.message);
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

                xoaSanPham() {
                    axios
                        .post('{{ Route("deleteSanPham") }}', this.del)
                        .then((res) => {
                            if (res.data.status) {
                                this.timKiem();
                                toastr.success(res.data.message);
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },

                changeStatus(value) {
                    axios
                        .post('{{ Route("statusSanPham") }}', value)
                        .then((res) => {
                            if (res.data.status) {
                                this.timKiem();
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

                loadData() {
                    axios
                        .get('{{ Route("dataSanPham") }}')
                        .then((res) => {
                            this.list = res.data.data;
                        });
                },

                themMoi() {
                    this.add.slug_san_pham = this.slug;
                    axios
                        .post('{{ Route("createSanPham") }}', this.add)
                        .then((res) => {
                            if (res.data.status) {
                                this.timKiem();
                                toastr.success(res.data.message);
                                this.add = {};
                                this.slug= '';
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },

                nameToSlugCreate() {
                    this.slug = this.toSlug(this.add.ten_san_pham);
                    // console.log(this.add.slug_san_pham);
                },

                nameToSlugUpdate() {
                    this.slug_edit = this.toSlug(this.edit.ten_san_pham);
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

                numberFormat(number) {
                    return new Intl.NumberFormat('vi-VI', { style: 'currency', currency: 'VND' }).format(number);
                },
            },
        });
    </script>
@endsection
