@extends('share_admin.master')
@section('noi_dung')
    <div class="col-12" id="app">
        <div class="card">
            <div class="card-header">
                Danh Sách Đơn Hàng
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
                            <input v-model="key_search" v-on:keyup.enter="timKiem()" type="text"
                                class="form-control" placeholder="Nhập vào thông tin cần tìm" aria-label="Amount">
                            <button v-on:click="timKiem()" class="btn btn-outline-primary waves-effect"
                                type="button">Search !</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center text-nowrap">#</th>
                                    <th class="text-center text-nowrap">Tên Người Nhận</th>
                                    <th class="text-center text-nowrap">Số Điện Thoại</th>
                                    <th class="text-center text-nowrap">Tổng Tiền</th>
                                    <th class="text-center text-nowrap">Ghi Chú</th>
                                    <th class="text-center text-nowrap">Thanh Toán</th>
                                    <th class="text-center text-nowrap">Tình Trạng</th>
                                    <th class="text-center text-nowrap">Chi Tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(v, k) in list">
                                    <th class="text-center">@{{ k + 1 }}</th>
                                    <td class="text-nowrap">@{{ v.ten_nguoi_nhan }}</td>
                                    <td class="text-nowrap">@{{ v.so_dien_thoai }}</td>
                                    <td class="text-nowrap">@{{ numberFormat(v.tong_tien) }}</td>
                                    <td>
                                        <button v-bind:class="thanhToan(v).btn"
                                            style="width: 230px">@{{ thanhToan(v).name }}</button>
                                    </td>
                                    <td class="text-nowrap text-center">
                                        <i v-on:click="ghi_chu = v.ghi_chu; ma_don = v.ma_don_hang" data-bs-toggle="modal"
                                            data-bs-target="#ghiChuModal"
                                            class="fa-2x fa-solid fa-circle-info text-info"></i>
                                    </td>
                                    <td class="text-nowrap text-center">
                                        <button v-on:click="don_hang = Object.assign({}, v)" data-bs-toggle="modal"
                                            data-bs-target="#tinhTrangModal" v-bind:class="tinhTrang(v).btn"
                                            style="width: 230px">@{{ tinhTrang(v).name }}</button>
                                    </td>
                                    <td class="text-nowrap text-center">
                                        <button v-on:click="chiTietDonHang(v)" data-bs-toggle="modal"
                                            data-bs-target="#chiTietModal" class="btn btn-primary">Chi Tiết</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div div class="modal fade" id="tinhTrangModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tình Trạng</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-check form-check-primary mb-1">
                                            <input v-model="don_hang.tinh_trang" class="form-check-input"
                                                name="inlineRadioOptions" type="radio" value="-2" checked>
                                            <label class="form-check-label">Đơn Hàng Hủy Do Partner</label>
                                        </div>
                                        <div class="form-check form-check-secondary mb-1">
                                            <input v-model="don_hang.tinh_trang" class="form-check-input"
                                                name="inlineRadioOptions" type="radio" value="-1">
                                            <label class="form-check-label">Đơn Hàng Hủy Do Khách</label>
                                        </div>
                                        <div class="form-check form-check-success mb-1">
                                            <input v-model="don_hang.tinh_trang" class="form-check-input"
                                                name="inlineRadioOptions" type="radio" value="0">
                                            <label class="form-check-label">Chưa Xác Nhận</label>
                                        </div>
                                        <div class="form-check form-check-danger mb-1">
                                            <input v-model="don_hang.tinh_trang" class="form-check-input"
                                                name="inlineRadioOptions" type="radio" value="1">
                                            <label class="form-check-label">Đã Xác Nhận</label>
                                        </div>
                                        <div class="form-check form-check-warning mb-1">
                                            <input v-model="don_hang.tinh_trang" class="form-check-input"
                                                name="inlineRadioOptions" type="radio" value="2">
                                            <label class="form-check-label">Đang Giao Hàng</label>
                                        </div>
                                        <div class="form-check form-check-info mb-1">
                                            <input v-model="don_hang.tinh_trang" class="form-check-input"
                                                name="inlineRadioOptions" type="radio" value="3">
                                            <label class="form-check-label">Đã Nhận Hàng</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button v-on:click="doiTrangThaiDonHang()" type="button"
                                            class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div div class="modal fade" id="ghiChuModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ghi Chú</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Mã đơn hàng: <b>@{{ ma_don }}</b></p>
                                        <p>Ghi chú giao: <b>@{{ ghi_chu }}</b></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="chiTietModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Chi Tiết Đơn Hàng</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center text-nowrap">#</th>
                                                        <th class="text-center text-nowrap">Tên Sản Phẩm</th>
                                                        <th class="text-center text-nowrap">Số Lượng</th>
                                                        <th class="text-center text-nowrap">Đơn Giá</th>
                                                        <th class="text-center text-nowrap">Thành Tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="(v, k) in chi_tiet">
                                                        <th class="text-center">@{{ k + 1 }}</th>
                                                        <td class="text-nowrap">@{{ v.ten_san_pham }}</td>
                                                        <td class="text-nowrap text-center">@{{ v.so_luong_mua }}</td>
                                                        <td class="text-nowrap">@{{ numberFormat(v.don_gia_mua) }}</td>
                                                        <td class="text-nowrap">@{{ numberFormat(v.thanh_tien_mua) }}</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th colspan="2" class="text-center">Tổng tiền thanh toán</th>
                                                        <th colspan="3" class="text-center">@{{ numberFormat(xxx) }}
                                                            <i>(@{{ tien_chu }})</i></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
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
    <script src="/n2vi.min.js"></script>
    <script>
        $(document).ready(function() {
            new Vue({
                el: '#app',
                data: {
                    list: [],
                    ghi_chu: 'Tui là ghi chú',
                    ma_don: 'Tui là mã đơn đó',
                    don_hang: {},
                    chi_tiet: [],
                    xxx: '5000',
                    tien_chu: '',
                },
                created() {
                    this.loadDonHang();
                },
                methods: {
                    loadDonHang() {
                        axios
                            .post('{{ Route('dataDonHangPartner') }}')
                            .then((res) => {
                                this.list = res.data.data;
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
                    tinhTrang(v) {
                        var name, btn;
                        if (v.tinh_trang == 0) {
                            name = 'Đơn Hàng Mới Tạo';
                            btn = 'btn btn-secondary';
                        } else if (v.tinh_trang == 1) {
                            name = 'Đơn Hàng Đã Xác Nhận';
                            btn = 'btn btn-warning';
                        } else if (v.tinh_trang == 2) {
                            name = 'Đơn Hàng Đang Giao';
                            btn = 'btn btn-primary';
                        } else if (v.tinh_trang == 3) {
                            name = 'Đơn Hàng Hoàn Thành';
                            btn = 'btn btn-success';
                        } else if (v.tinh_trang == -1) {
                            name = 'Khách Hủy Đơn';
                            btn = 'btn btn-danger';
                        } else if (v.tinh_trang == -2) {
                            name = 'Đại Lý Hủy Đơn';
                            btn = 'btn btn-danger';
                        }

                        return {
                            'name': name,
                            'btn': btn,
                        };
                    },
                    thanhToan(v) {
                        var name, btn;
                        if (v.is_thanh_toan == 1) {
                            name = 'Đã Thanh Toán';
                            btn = 'btn btn-success';
                        } else {
                            name = 'Chưa Thanh Toán';
                            btn = 'btn btn-secondary';
                        }

                        return {
                            'name': name,
                            'btn': btn,
                        };
                    },
                    doiTrangThaiDonHang() {
                        axios
                            .post('{{ Route('doiTrangThaiDonHangPartner') }}', this.don_hang)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, 'Success');
                                    $('#tinhTrangModal').modal('toggle');
                                    this.loadDonHang();
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
                    chiTietDonHang(value) {
                        axios
                            .post('{{ Route('chiTietDonHangPartner') }}', value)
                            .then((res) => {
                                this.chi_tiet = res.data.data;
                                this.xxx = res.data.tong_tien;
                                this.tien_chu = to_vietnamese(res.data.tong_tien);
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                    timKiem() {
                        var payload = {
                            'gia_tri': this.key_search
                        };
                        axios
                            .post('{{ Route('searchDonHang') }}', payload)
                            .then((res) => {
                                this.list = res.data.data;
                            });
                    },
                },
            });
        });
    </script>
@endsection
