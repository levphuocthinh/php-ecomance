@extends('share_admin.master')
@section('noi_dung')
    <div class="row" id="app">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Danh Sách Sản Phẩm
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <div class="col-12 mb-1">
                                        <div class="input-group">
                                            <button v-on:click="timKiem()" class="btn btn-outline-primary waves-effect" type="button">
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
                                </tr>
                                <tr>
                                    {{-- <th class="text-center text-nowrap">#</th> --}}
                                    <th class="text-center text-nowrap">Tên Sản Phẩm</th>
                                    <th class="text-center text-nowrap">Hình Ảnh</th>
                                    <th class="text-center text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(v, k) in list_sp">
                                    <tr>
                                        {{-- <th class="text-center">@{{ k + 1 }}</th> --}}
                                        <td>@{{ v.ten_san_pham }}</td>
                                        <td>
                                            <img v-bind:src="v.hinh_anh" class="img-fluid">
                                        </td>
                                        <td class="text-center">
                                            <button class="btn-sm btn btn-primary" v-on:click="themPhieu(v)">Thêm</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    Danh Sách Sản Phẩm Nhập Kho
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    {{-- <th class="text-center align-middle">#</th> --}}
                                    <th class="text-center align-middle">Tên Sản Phẩm</th>
                                    <th class="text-center align-middle">Số Lượng</th>
                                    <th class="text-center align-middle">Đơn Giá</th>
                                    <th class="text-center align-middle">Thành Tiền</th>
                                    <th class="text-center align-middle">Ghi Chú</th>
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(v, k) in list_tmp">
                                    {{-- <th class="text-center align-middle">@{{ k + 1 }}</th> --}}
                                    <td class="align-middle">@{{ v.ten_san_pham }}</td>
                                    <td style="width: 20%" class="text-center align-middle">
                                        <input v-on:change="updateNhapKho(v)" v-model="v.so_luong" type="number"
                                            class="form-control">
                                    </td>
                                    <td style="width: 20%" class="text-center align-middle">
                                        <input v-on:change="updateNhapKho(v)" v-model="v.don_gia" type="number"
                                            class="form-control">
                                    </td>
                                    <td class="align-middle">@{{ numberFormat(v.thanh_tien) }}</td>
                                    <td class="text-center align-middle">
                                        <i v-on:click="update = v" class="fa-2x text-info fa-solid fa-pen-to-square"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                    </td>
                                    <td class="text-center align-middle text-nowrap">
                                        <i data-bs-toggle="modal"
                                            data-bs-target="#delModal"v-on:click="del = Object.assign({}, v)"
                                            class="fa-solid fa-trash fa-2x text-danger"></i>
                                    </td>
                                </tr>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ghi Chú Nhập Hàng</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <textarea class="form-control" cols="30" rows="5" v-model="update.ghi_chu"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button data-bs-dismiss="modal" type="button" class="btn btn-primary"
                                                    v-on:click="updateNhapKhoGhiChu()">Cập Nhật</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="4">

                                    </th>
                                    <td colspan="2" class="text-center">
                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#nhapKho">Nhập Kho</button>
                                        <div class="modal fade" id="nhapKho" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Xác Nhận Nhập
                                                            Kho</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input v-model="ma_phieu" type="text" class="form-control"
                                                            placeholder="Mã phiếu nhập kho">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button v-on:click="xacNhanNhapKho()" type="button"
                                                            class="btn btn-primary">Xác Nhận</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa Nhập Kho</h1>
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
                                        <button v-on:click="xoaNhapKho()" type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Xác Nhận Xóa</button>
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
                    list_sp: [],
                    list_tmp: [],
                    ma_phieu: '',
                    update: {},
                    del: {},
                    key_search: '',
                },
                created() {
                    this.getSanPham();
                    this.loadData();
                },
                methods: {
                    getSanPham() {
                        axios
                            .get('{{ Route('dataSanPham') }}')
                            .then((res) => {
                                this.list_sp = res.data.data;
                            });
                    },
                    themPhieu(value) {
                        axios
                            .post('{{ Route('tmpCreateNhapKho') }}', value)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message);
                                    this.loadData();
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
                    loadData() {
                        axios
                            .post('{{ Route('dataTmpNhapKho') }}')
                            .then((res) => {
                                this.list_tmp = res.data.data;
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                    updateNhapKho(value) {
                        axios
                            .post('{{ Route('tmpUpdateNhapKho') }}', value)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "Success!");
                                } else {
                                    toastr.error(res.data.message, "Error!");
                                }
                                this.loadData();
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                    updateNhapKhoGhiChu() {
                        axios
                            .post('{{ Route('tmpUpdateNhapKho') }}', this.update)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "Success!");
                                } else {
                                    toastr.error(res.data.message, "Error!");
                                }
                                this.loadData();
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                    numberFormat(number) {
                        return new Intl.NumberFormat('vi-VI', {
                            style: 'currency',
                            currency: 'VND'
                        }).format(number);
                    },
                    xacNhanNhapKho() {
                        var payload = {
                            'ma_phieu_nhap': this.ma_phieu
                        };
                        axios
                            .post('{{ Route('createNhapKho') }}', payload)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "Success!");
                                    this.loadData();
                                    $('#nhapKho').modal('toggle');
                                } else {
                                    toastr.error(res.data.message, "Error!");
                                }
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                    xoaNhapKho() {
                        axios
                            .post('{{ Route('deleteNhapKho') }}', this.del)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message);
                                    this.loadData();
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
                            .post('{{ Route('searchSanPham') }}', payload)
                            .then((res) => {
                                console.log(res.data.data);
                                this.list_sp = res.data.data;
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0]);
                                });
                            });
                    },
                },
            });
        })
    </script>
@endsection
