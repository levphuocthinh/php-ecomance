@extends('share_admin.master')
@section('noi_dung')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <label>Ngày Bắt Đầu</label>
                        <input type="date" class="form-control mt-1">
                    </div>
                    <div class="col-3">
                        <label>Ngày Kết Thúc</label>
                        <input type="date" class="form-control mt-1">
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary" style="margin-top: 33px">Thống Kê</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">

            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection
