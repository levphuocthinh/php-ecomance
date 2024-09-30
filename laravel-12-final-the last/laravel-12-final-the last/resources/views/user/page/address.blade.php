@extends('user.page.profile_master')
@section('content_profile')
<div id="app">
    <h2 class="account__content--title h3 mb-20">Addresses</h2>
    <button data-bs-toggle="modal" data-bs-target="#addressModal" data-open="addressModal" class="new__address--btn primary__btn mb-25"
        type="button">Add a new address</button>
    <!-- Modal -->
    <div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Địa Chỉ</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
                <div class="row">
                    <div class="col-12 mb-3">
                        <label class="form-label">Tên Người Nhận</label>
                        <input v-model="add.ten_nguoi_nhan" type="text" class="contact__form--input" placeholder="{{ $customer->ho }} {{ $customer->dem }} {{ $customer->ten }}">
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label">Số Điện Thoại</label>
                        <input v-model="add.so_dien_thoai" type="tel" class="contact__form--input" placeholder="{{ $customer->so_dien_thoai }}">
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label">Địa Chỉ</label>
                        <input v-model="add.dia_chi" type="text" class="contact__form--input" placeholder="Nhập địa chỉ">
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label">Ghi Chú</label>
                        <textarea v-model="add.ghi_chu" class="contact__form--textarea" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="compare__cart--btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button v-on:click="addDiaChi()" type="button" class="compare__cart--btn primary__btn">Thêm Địa Chỉ</button>
            </div>
          </div>
        </div>
    </div>
    <div class="row mb--n30">
        <template v-for="(k, v) in list">
            <div  class="col-6 mb-30">
                <div class="blog__card">
                    <div class="blog__card--content">
                        <h3 class="blog__card--title text-center" style="color: #ed1d24">ĐỊA CHỈ @{{ k + 1 }}</h3>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>Tên Người Nhận</th>
                            <td>@{{ v.ten_nguoi_nhan }}</td>
                        </tr>
                        <tr>
                            <th>Số Điện Thoại</th>
                            <td>@{{ v.so_dien_thoai }}</td>
                        </tr>
                        <tr>
                            <th>Địa Chỉ</th>
                            <td>@{{ v.dia_chi }}</td>
                        </tr>
                        <tr>
                            <th>Ghi Chú</th>
                            <td>@{{ v.ghi_chu }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </template>
    </div>
</div>
@endsection
@section('js_profile')
<script>
    new Vue({
        el      :   '#app',
        data    :   {
            add     :   {},
            list    :   [],
        },
        created()   {
            this.loadDiaChi();
        },
        methods :   {
            addDiaChi() {
                // Gửi add  => this.add lên server  => Có 1 controller để nhận
                axios
                    .post('{{ Route("createCustomerAddress") }}', this.add)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.message, 'Success');
                            $('#addressModal').modal('hide');
                        } else {
                            toastr.error(res.data.message, 'Error');
                        }
                        this.loadDiaChi();
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
            loadDiaChi() {
                axios
                    .post('{{ Route("dataCustomerAddress") }}')
                    .then((res) => {
                        this.list   = res.data.data;
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
        },
    });
</script>
@endsection
