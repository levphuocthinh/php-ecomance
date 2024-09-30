@extends('share_admin.master')
@section('noi_dung')
    <div class="container">
        <canvas id="myChart"></canvas>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var ten_du_lieu = [];
        var du_lieu = [];
        const ctx = document.getElementById('myChart');
        var char_13 = new Chart(ctx, {
            type: 'doughnut',
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

        function getData() {
            axios
                .get('{{ Route('dataChart') }}')
                .then((res) => {
                    ten_du_lieu = res.data.list_ngay;
                    du_lieu = res.data.list_du_lieu;
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
        getData();
    </script>
@endsection
