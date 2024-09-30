@extends('user.page.profile_master')
@section('content_profile')
    <div class="row mb--n30" id="app">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center align-middle">#</th>
                    <th class="text-center align-middle">Mã Đơn</th>
                    <th class="text-center align-middle">Thông Tin Nhận</th>
                    <th class="text-center align-middle">Số Tiền</th>
                    <th class="text-center align-middle">Tình Trạng</th>
                    <th class="text-center align-middle">Chi Tiết</th>
                </tr>
            </thead>
            <tbody>
                <template v-for="(key, value) in list">
                    <tr>
                        <th class="text-center align-middle">@{{ key + 1 }}</th>
                        <td class="text-center align-middle">@{{ value.ma_don_hang }}</td>
                        <td class="align-middle">
                            @{{ value.ten_nguoi_nhan }} <br> @{{ value.so_dien_thoai }}
                        </td>
                        <td class="align-middle">
                            @{{ value.tong_tien }}
                        </td>
                        <td class="text-center text-nowrap align-middle">
                            <button v-bind:class="tinhTrang(value).btn" style="width: 120px">@{{ tinhTrang(value).name }}</button>
                        </td>
                        <td class="text-center text-nowrap align-middle">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button v-on:click="loadDataDetail(value)" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            v-bind:data-bs-target="'#flush-collapseTwo' + value.id" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                            Chi Tiết
                                        </button>
                                    </h2>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <td colspan="6">
                        <div v-bind:id="'flush-collapseTwo' + value.id" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <template v-for="(k, v) in list_detail">
                                    <div class="mb-3 mb-lg-4 bg-light shadow-sm px-4 py-3">
                                        <div class="row align-items-center no-gutters p-md-2">
                                            <div class="col-4">
                                                <div><small class="pre-label text-center align-middle">Tên Sản Phẩm</small></div>
                                                <p class="text-center">@{{ v.ten_san_pham }}</p>
                                            </div>
                                            <div class="col-3">
                                                <div><strong>@{{ v.gia_ban }}</strong></div>
                                                <small class="text-muted">@{{ v.gia_khuyen_mai }}</small>
                                            </div>
                                            <div class="col-2">
                                                <div><small class="pre-label text-center">Số Lượng</small></div>
                                                <p class="text-center">@{{ v.so_luong_mua }}</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <div><small class="pre-label">Tổng Tiền</small></div>
                                                <span>@{{ v.thanh_tien_mua }} đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </td>
                </template>
            </tbody>
        </table>
    </div>
@endsection
@section('js_profile')
    <script>
        $(document).ready(function() {
            new Vue({
                el: '#app',
                data: {
                    list            : [],
                    list_detail     : [],
                },
                created() {
                    this.loadData();
                },
                methods: {
                    loadData() {
                        axios
                            .post('{{ Route('dataCustomerOrder') }}')
                            .then((res) => {
                                this.list = res.data.data;
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },

                    loadDataDetail(v) {
                        axios
                            .post('{{ Route("dataCustomerOrderDetail") }}', v)
                            .then((res) => {
                                this.list_detail = res.data.data;
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
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
                },
            });
        });
    </script>
@endsection
