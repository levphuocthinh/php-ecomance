@extends('share_admin.master')
@section('noi_dung')
    <div id="app" class="row">
        <div class="col-12 text-end mb-2">
            <button type="button" class="btn btn-outline-primary round waves-effect" data-bs-toggle="modal"
                data-bs-target="#createModal"><i class="fa-solid fa-plus"></i> Thêm Mới</button>
        </div>
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Thêm Mới Khuyến Mãi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-1">
                                <label class="form-label">Mã Khuyến Mãi</label>
                                <input v-on:blur="checkMa()" v-model="add.ma_khuyen_mai" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1">
                                <label class="form-label">Số Tiền Giảm</label>
                                <input v-model="add.so_tien_giam" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1">
                                <label class="form-label">Customer Sử Dụng</label>
                                <input v-model="add.id_customer_su_dung" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1">
                                <label class="form-label">Tình Trạng</label>
                                <select v-model="add.tinh_trang" class="form-control">
                                    <option value="1">Kích Hoạt</option>
                                    <option value="0">Chưa kích hoạt</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id="themMoi" v-on:click="themMoi()" class="btn btn-primary" data-bs-dismiss="modal">Thêm
                            Mới</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Danh Sách Khuyễn Mãi
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
                                <input v-model="key_search" v-on:keyup.enter="timKiem()" type="text" class="form-control"
                                    placeholder="Nhập vào thông tin cần tìm" aria-label="Amount">
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
                                        <th class="text-center text-nowrap">Mã Khuyến Mãi</th>
                                        <th class="text-center text-nowrap">Số Tiền Giảm</th>
                                        <th class="text-center text-nowrap">Customer Sử Dụng</th>
                                        <th class="text-center text-nowrap">Tình Trạng</th>
                                        <th class="text-center text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="(value, key) in list">
                                        <tr>
                                            <th class="text-center text-center align-middle">@{{ key + 1 }}</th>
                                            <td class="text-nowrap text-center align-middle">@{{ value.ma_khuyen_mai }}</td>
                                            <td class="text-nowrap text-center align-middle">@{{ value.so_tien_giam }}</td>
                                            <td class="text-nowrap text-center align-middle">@{{ value.id_customer_su_dung }}</td>
                                            <td class="text-nowrap text-center align-middle">
                                                <template v-if="value.tinh_trang == 0">
                                                    <button v-on:click="doiTrangThai(value)" class="btn btn-warning"
                                                        style="width: 160px">Chưa kích hoạt</button>
                                                </template>
                                                <template v-else>
                                                    <button v-on:click="doiTrangThai(value)" class="btn btn-success"
                                                        style="width: 160px">Kích Hoạt</button>
                                                </template>
                                            <td class="text-nowrap text-center align-middle">
                                                <i v-on:click="edit = Object.assign({}, value)"
                                                class="fa-solid fa-pen-to-square fa-2x text-info"
                                                data-bs-toggle="modal" data-bs-target="#updateModal"
                                                style="margin-right: 10px"></i>
                                            <i v-on:click="del = value" class="fa-solid fa-trash fa-2x text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"></i>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Xóa Khuyến Mãi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Bạn có muốn xóa khuyến mãi <b>@{{ del.ma_khuyen_mai }}</b>
                                        này không?</p>
                                    <p><b>Lưu ý:</b> Thao tác này không thể hoàn tác!!!</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button v-on:click="destroy()" data-bs-dismiss="modal" type="button"
                                        class="btn btn-danger">Xác nhận xóa</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cập nhật Partner</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="mb-1">
                                            <label class="form-label">Mã Khuyến Mãi</label>
                                            <input v-on:blur="checkMaUpdate()" v-model="edit.ma_khuyen_mai" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1">
                                            <label class="form-label">Số Tiền Giảm</label>
                                            <input v-model="edit.so_tien_giam" type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1">
                                            <label class="form-label">Customer Sử Dụng</label>
                                            <input v-model="edit.id_customer_su_dung" type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1">
                                            <label class="form-label">Tình Trạng</label>
                                            <select v-model="edit.tinh_trang" class="form-control">
                                                <option value="1">Kích Hoạt</option>
                                                <option value="0">Chưa kích hoạt</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button id="capNhat" v-on:click="update()" type="button"
                                        class="btn btn-primary" data-bs-dismiss="modal">Cập nhật</button>
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
                    list: [],
                    key_search: '',
                    add: {},
                    del: {},
                    edit: {},
                },
                created() {
                    this.getData();
                },
                methods: {
                    getData() {
                        axios
                            .get('{{ Route('dataKhuyenMai') }}')
                            .then((res) => {
                                this.list = res.data.data;
                            });
                    },
                    timKiem() {
                        var payload = {
                            'gia_tri': this.key_search
                        };
                        axios
                            .post('{{ Route('searchKhuyenMai') }}', payload)
                            .then((res) => {
                                this.list = res.data.data;
                            });
                    },
                    doiTrangThai(payload) {
                        axios
                            .post('{{ Route('statusKhuyenMai') }}', payload)
                            .then((res) => {
                                this.timKiem();
                                toastr.warning("Đã đổi trạng thái", "Thành Công!")
                            });
                    },
                    themMoi() {
                        axios
                            .post('{{ Route('createKhuyenMai') }}', this.add)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success("Đã thêm mới khuyến mãi", "Thành công!");
                                    // this.list.push(this.add);
                                    this.getData();
                                    // this.timKiem();
                                    this.add = {};
                                }
                            })
                            .catch((res) => {
                                var errrors = res.response.data.errors;
                                $.each(errrors, function(k, v) {
                                    toastr.error(v[0], "Có lỗi!");
                                })
                            });
                    },
                    doiTrangThai(value) {
                        axios
                            .post('{{ Route('statusKhuyenMai') }}', value)
                            .then((res) => {
                                if (res.data.status) {
                                    // this.timKiem();
                                    this.getData();
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
                    destroy() {
                        axios
                            .post('{{ Route('deleteKhuyenMai') }}', this.del)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success("Đã xóa khuyến", "Thành công!");
                                    // this.list.push(this.add);
                                    // this.timKiem();
                                    this.getData();
                                }
                            })
                            .catch((res) => {
                                var errrors = res.response.data.errors;
                                $.each(errrors, function(k, v) {
                                    toastr.error(v[0], "Có lỗi!");
                                })
                            });
                    },
                    update() {
                        axios
                            .post('{{ Route('updateKhuyenMai') }}', this.edit)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success("Đã cập nhật khuyến mãi", "Thành công!");
                                    // this.list.push(this.add);
                                    // this.timKiem();
                                    this.getData();
                                }
                            })
                            .catch((res) => {
                                var errrors = res.response.data.errors;
                                $.each(errrors, function(k, v) {
                                    toastr.error(v[0], "Có lỗi!");
                                })
                            });
                    },
                    checkMa() {
                        axios
                            .post('{{ Route('checkMailKhuyenMai') }}', this.add)
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
                    checkMaUpdate() {
                        axios
                            .post('{{ Route('checkMailUpdateKhuyenMai') }}', this.edit)
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
        })
    </script>
@endsection
