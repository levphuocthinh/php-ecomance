@extends('share_admin.master')
@section('noi_dung')
    <div id="app" class="row">
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
                                <th>Ngày Hóa Đơn</th>
                                <th>Tổng Tiền Bán</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(v, k) in list">
                                <td class="text-center">@{{ v.ngay_hoa_don }}</td>
                                <td>@{{ numberFormat(v.tien_ban) }}</td>
                                <td class="text-center">
                                    <button v-on:click="xemChiTiet(v)" data-bs-toggle="modal" data-bs-target="#chiTietModal"
                                        class="btn btn-sm btn-primary">Chi Tiết</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal fade" id="chiTietModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Chi Tiết</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Mã Đơn Hàng</th>
                                            <th>Người Nhận</th>
                                            <th>Số Điện Thoại</th>
                                            <th>Tổng Tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(v, k) in detail">
                                            <td>@{{ k + 1 }}</td>
                                            <td>@{{ v.ma_don_hang }}</td>
                                            <td>@{{ v.ten_nguoi_nhan }}</td>
                                            <td>@{{ v.so_dien_thoai }}</td>
                                            <td>@{{ numberFormat(v.tong_tien) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
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
                this.begin = '2023-06-20';
                this.end = moment().format('YYYY-MM-DD').toString();
            },
            methods: {
                getData() {
                    var payload = {
                        'begin': this.begin,
                        'end': this.end
                    };
                    axios
                        .post('{{ Route('dataThongKe1') }}', payload)
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
                    axios
                        .post('{{ Route('dataChiTietThongKe1') }}', payload)
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
                },
                onClick: function(e) {
                    var activePoints = char_13.getElementsAtEventForMode(e, 'nearest', {
                        intersect: true
                    }, true);
                    if (activePoints.length > 0) {
                        var firstPoint = activePoints[0];
                        var label = char_13.data.labels[firstPoint.index];
                        var value = char_13.data.datasets[firstPoint.datasetIndex].data[firstPoint.index];

                        // Xóa dữ liệu và màu sắc của ten_du_lieu đã chọn
                        var index = ten_du_lieu.indexOf(label);
                        if (index > -1) {
                            ten_du_lieu.splice(index, 1);
                            char_13.data.datasets[0].backgroundColor.splice(index, 1);
                        }

                        // Cập nhật biểu đồ
                        char_13.update();
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
                .post('{{ Route('dataThongKe1') }}', payload)
                .then((res) => {
                    ten_du_lieu = res.data.ngay_hoa_don;
                    du_lieu = res.data.tien_ban;
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
