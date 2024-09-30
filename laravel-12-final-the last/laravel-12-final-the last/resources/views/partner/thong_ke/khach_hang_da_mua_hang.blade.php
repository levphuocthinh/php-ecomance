@extends('share_admin.master')
@section('noi_dung')
    <div class="row" id="app">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <label>Ngày Bắt Đầu</label>
                            <input id="begin" v-model="begin" type="date" class="form-control mt-1">
                        </div>
                        <div class="col-3">
                            <label>Ngày Kết Thúc</label>
                            <input id="end" v-model="end" type="date" class="form-control mt-1">
                        </div>
                        <div class="col-3">
                            <button id="thong_ke" v-on:click="getData()" class="btn btn-primary"
                                style="margin-top: 33px">Thống Kê</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    THỐNG KÊ DỮ LIỆU
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">#</th>
                                <th class="text-center align-middle">Khách Hàng</th>
                                <th class="text-center align-middle">Tổng Số Đơn</th>
                                <th class="text-center align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(value, key) in list">
                                <th class="text-center align-middle">@{{ key + 1 }}</th>
                                <td class="text-center align-middle">@{{ value.ho_va_ten }}</td>
                                <td class="text-center align-middle">@{{ value.so_don_hang }}</td>
                                <td class="text-center align-middle">
                                    <button v-on:click="xemChiTiet(value)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chiTietModal">Xem</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="modal fade" id="chiTietModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Chi Tiết</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle">#</th>
                                                <th class="text-center align-middle">Mã Đơn Hàng</th>
                                                <th class="text-center align-middle">Khách Hàng</th>
                                                <th class="text-center align-middle">Tên Người Nhận</th>
                                                <th class="text-center align-middle">Địa Chỉ</th>
                                                <th class="text-center align-middle">Số Điện Thoại</th>
                                                <th class="text-center align-middle">Ghi Chú</th>
                                                <th class="text-center align-middle">Tổng Tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(value, key) in detail">
                                                <th class="text-center align-middle">@{{ key + 1 }}</th>
                                                <td class="text-center align-middle">@{{ value.ma_don_hang }}</td>
                                                <td class="align-middle">@{{ value.ho_va_ten }}</td>
                                                <td class="align-middle">@{{ value.ten_nguoi_nhan }}</td>
                                                <td class="text-center align-middle">@{{ value.dia_chi }}</td>
                                                <td class="text-center align-middle">@{{ value.so_dien_thoai }}</td>
                                                <td class="align-middle">@{{ value.ghi_chu }}</td>
                                                <td class="text-center align-middle">@{{ numberFormat(value.tong_tien) }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
        <div class="col-7">
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                begin: '',
                end: '',
                list: [],
                detail: [],
            },
            created() {
                this.begin = '2023-06-01';
                this.end = moment().format('YYYY-MM-DD').toString();
            },
            methods: {
                getData() {
                    var payload = {
                        'begin': this.begin,
                        'end': this.end
                    };
                    axios
                        .post('{{ Route('dataKhachHangDaMuaHang') }}', payload)
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
                xemChiTiet(payload) {
                    payload.begin = this.begin;
                    payload.end = this.end;
                    axios
                        .post('{{ Route('dataChiTietKhachHangDaMuaHang') }}', payload)
                        .then((res) => {
                            this.detail = res.data.data;
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0], 'Error');
                            });
                        });
                },
            },
        });

        var ten_du_lieu = [];
        var du_lieu = [];
        const ctx = document.getElementById('myChart');
        var char_13 = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ten_du_lieu,
                datasets: [{
                    label: '# of Votes',
                    data: du_lieu,
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(217, 136, 128)',
                        'rgb(192, 57, 43)',
                        'rgb(195, 155, 211 )',
                        'rgb(136, 78, 160)',
                        'rgb(84, 153, 199)',
                        'rgb(21, 67, 96)',
                        'rgb(46, 204, 113)',
                        'rgb(241, 196, 15)',
                        'rgb(160, 64, 0)',
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        function getChart() {
            var payload = {
                'begin': $("#begin").val(),
                'end': $("#end").val(),
            };
            axios
                .post('{{ Route('dataKhachHangDaMuaHang') }}', payload)
                .then((res) => {
                    ten_du_lieu = res.data.list_ten;
                    du_lieu = res.data.list_data;
                    char_13.data.labels = ten_du_lieu;
                    char_13.data.datasets[0].data = du_lieu;
                    char_13.update();
                })
                .catch((res) => {
                    $.each(res.response.data.errors, function(k, v) {
                        toastr.error(v[0], 'Error');
                    });
                });
        }

        $("#thong_ke").click(function() {
            getChart();
        });
    </script>
@endsection
