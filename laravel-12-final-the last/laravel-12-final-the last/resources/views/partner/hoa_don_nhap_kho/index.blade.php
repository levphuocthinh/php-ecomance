@extends('share_admin.master')
@section('noi_dung')
<div class="row" id="app">
<div class="col-8">
    <div class="card">
        <div class="card-header">
            Danh Sách Phiếu Nhập Kho
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2">
                                <input type="date" class="form-control" v-model="begin" v-on:change="loadData()">
                            </th>
                            <th colspan="3">
                                <input type="date" class="form-control" v-model="end" v-on:change="loadData()">
                            </th>
                        </tr>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Mã Phiếu</th>
                            <th class="text-center">Ngày</th>
                            <th class="text-center">Tổng Tiền</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(value, key) in list">
                            <th class="text-center">@{{ key + 1 }}</th>
                            <td>@{{ value.ma_phieu_nhap }}</td>
                            <td>
                                @{{ formatDate(value.ngay_nhap) }}
                            </td>
                            <td>@{{ numberFormat(value.tong_tien) }}</td>
                            <td class="text-center">
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-sm btn-primary" v-on:click="chiTiet(value)">Xem</button>
                            </td>
                        </tr>
                    </tbody>
                    <!-- Modal -->
                </table>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Chi Tiết Nhập Kho</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Tên Sản Phẩm</th>
                                            <th class="text-center">Số Lượng</th>
                                            <th class="text-center">Đơn Giá</th>
                                            <th class="text-center">Thành Tiền</th>
                                            <th class="text-center">Ghi Chú</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <template v-for="(v, k) in detail">
                                            <template v-if="v.so_luong_nhap > 0">
                                                <tr>
                                                    <th class="text-center">@{{ k + 1 }}</th>
                                                    <td>@{{ v.ten_san_pham }}</td>
                                                    <td>@{{ v.so_luong_nhap }}</td>
                                                    <td>@{{ numberFormat(v.don_gia_nhap) }}</td>
                                                    <td>@{{ numberFormat(v.thanh_tien_nhap) }}</td>
                                                    <td>@{{ v.ghi_chu }}</td>
                                                </tr>
                                            </template>
                                            <template v-else>
                                                <tr class="text-danger">
                                                    <th class="text-center">@{{ k + 1 }}</th>
                                                    <td>@{{ v.ten_san_pham }}</td>
                                                    <td>@{{ v.so_luong_nhap }}</td>
                                                    <td>@{{ numberFormat(v.don_gia_nhap) }}</td>
                                                    <td>@{{ numberFormat(v.thanh_tien_nhap) }}</td>
                                                    <td>@{{ v.ghi_chu }}</td>
                                                </tr>
                                            </template>
                                        </template>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
            el      :   '#app',
            data    :   {
                list    :   [],
                begin   :   moment(new Date()).subtract(10 , 'days').format("YYYY-MM-DD"),
                end     :   moment().format("YYYY-MM-DD"),
                detail  :   [],
            },
            created()   {
                this.loadData();
            },
            methods :   {
                loadData() {
                    var payload = {
                        'begin'     :   this.begin,
                        'end'       :   this.end,
                    };
                    axios
                        .post('{{ Route("getDataHoaDonNhapHang") }}', payload)
                        .then((res) => {
                            this.list   = res.data.data;
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0], 'Error');
                            });
                        });
                },
                chiTiet(value) {
                    axios
                        .post('{{ Route("chiTietNhapKho") }}', value)
                        .then((res) => {
                            this.detail = res.data.data;
                            console.log(this.detail);
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0], 'Error');
                            });
                        });
                },
                numberFormat(number) {
                    return new Intl.NumberFormat('vi-VI', { style: 'currency', currency: 'VND' }).format(number);
                },
                formatDate(date) {
                    return moment(date).format("DD/MM/YYYY");
                },
                formatTime(date) {
                    return moment(date).format("H:m:s");
                },
            },
        });
    })
</script>
@endsection
