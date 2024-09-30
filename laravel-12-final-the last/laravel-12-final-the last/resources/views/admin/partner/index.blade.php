@extends('share_admin.master')
@section('noi_dung')
<div class="row">
    <div class="col-3">
        <div class="card">
            <div class="card-header">
                Thêm Mới Partner
            </div>
            <div class="card-body">
                <div class="mb-1">
                    <label class="form-label">Họ Lót</label>
                    <input type="text" class="form-control" id="ho_lot" placeholder="Nhập họ lót">
                </div>
                <div class="mb-1">
                    <label class="form-label">Tên</label>
                    <input type="text" class="form-control" id="ten" placeholder="Nhập tên">
                </div>
                <div class="mb-1">
                    <label class="form-label">Ngày Sinh</label>
                    <input class="form-control" id="ngay_sinh" type="date">
                </div>
                <div class="mb-1">
                    <label class="form-label">Số Điện Thoại</label>
                    <input type="text" class="form-control" id="so_dien_thoai">
                </div>
                <div class="mb-1">
                    <label class="form-label">Địa Chỉ</label>
                    <input type="text" class="form-control" id="dia_chi">
                </div>
                <div class="mb-1">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="mb-1">
                    <label class="form-label">Mật Khẩu</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-1">
                    <label class="form-label">Tình Trạng</label>
                    <select id="tinh_trang" class="form-control">
                        <option value="1">Hoạt động</option>
                        <option value="0">Chưa kích hoạt</option>
                        <option value="2">Bị khóa</option>
                    </select>
                </div>
            </div>
            <div class="card-footer text-end">
                <button id="themMoi" class="btn btn-primary">Thêm Mới PartNer</button>
            </div>
        </div>
    </div>
    <div class="col-9">
        <div class="card">
            <div class="card-header">
                Danh Sách Partner
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-12">
                        <div class="input-group">
                            <button class="btn btn-outline-primary waves-effect" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                            </button>
                            <input id="gia_tri_tim" type="text" class="form-control" placeholder="Nhập vào thông tin cần tìm" aria-label="Amount">
                            <button id="search" class="btn btn-outline-primary waves-effect" type="button">Search !</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="danh_sach">
                            <thead>
                                <tr>
                                    <th class="text-center text-nowrap">#</th>
                                    <th class="text-center text-nowrap">Họ Lót</th>
                                    <th class="text-center text-nowrap">Tên</th>
                                    <th class="text-center text-nowrap">Ngày Sinh</th>
                                    <th class="text-center text-nowrap">Số Điện Thoại</th>
                                    <th class="text-center text-nowrap">Địa Chỉ</th>
                                    <th class="text-center text-nowrap">Mã Số Thuế</th>
                                    <th class="text-center text-nowrap">Tên Công Ty</th>
                                    <th class="text-center text-nowrap">Email</th>
                                    <th class="text-center text-nowrap">Tình Trạng</th>
                                    <th class="text-center text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Xóa Partner</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input hidden type="text" id="id_can_xoa">
                                Bạn chắc chắn sẽ xóa Partner này!. Chức năng không thể hoàn tác.
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button id="accpect_del" type="button" class="btn btn-danger" data-bs-dismiss="modal">Xác Nhận Xóa</button>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Partner</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input hidden type="text" class="form-control" id="e_id">
                                    <div class="mb-1">
                                        <label class="form-label">Họ Lót</label>
                                        <input type="text" class="form-control" id="e_ho_lot" placeholder="Nhập họ lót">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Tên</label>
                                        <input type="text" class="form-control" id="e_ten" placeholder="Nhập tên">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Ngày Sinh</label>
                                        <input class="form-control" id="e_ngay_sinh" type="date">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Số Điện Thoại</label>
                                        <input type="text" class="form-control" id="e_so_dien_thoai">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Địa Chỉ</label>
                                        <input type="text" class="form-control" id="e_dia_chi">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" id="e_email">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Tình Trạng</label>
                                        <select id="e_tinh_trang" class="form-control">
                                            <option value="1">Hoạt động</option>
                                            <option value="0">Chưa kích hoạt</option>
                                            <option value="2">Bị khóa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button id="abc" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button id="accpect_update" type="button" class="btn btn-primary" data-bs-dismiss="modal">Cập Nhật</button>
                                </div>
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
    function loadData() {
        axios
            .get('{{ Route("dataPartner") }}')
            .then((res) => {
                var d = res.data.data;
                var noi_dung = '';
                $.each(d, function(k, v) {
                    noi_dung +='<tr>';
                    noi_dung +='<th class="text-center text-nowrap">'+(k + 1)+'</th>';
                    noi_dung +='<td class="text-nowrap">'+ v.ho_lot +'</td>';
                    noi_dung +='<td class="text-nowrap">'+ v.ten +'</td>';
                    noi_dung +='<td class="text-center text-nowrap">'+ v.ngay_sinh +'</td>';
                    noi_dung +='<td class="text-center text-nowrap">'+ v.so_dien_thoai +'</td>';
                    noi_dung +='<td class="text-nowrap">'+ v.dia_chi +'</td>';
                    noi_dung +='<td class="text-center text-nowrap">'+ v.ma_so_thue +'</td>';
                    noi_dung +='<td class="text-center text-nowrap">'+ v.ten_cong_ty +'</td>';
                    noi_dung +='<td class="text-nowrap">'+ v.email +'</td>';
                    noi_dung +='<td class="text-nowrap text-center">';
                        if(v.tinh_trang == 0) {
                            noi_dung +='<button data-id="'+v.id+'" class="stt btn btn-primary" style="width: 160px">Chưa kích hoạt</button>';
                        } else if(v.tinh_trang == 1) {
                            noi_dung +='<button data-id="'+v.id+'" class="stt btn btn-success" style="width: 160px">Hoạt động</button>';
                        } else {
                            noi_dung +='<button data-id="'+v.id+'" class="stt btn btn-danger" style="width: 160px">Bị khóa</button>';
                        }
                    noi_dung +='</td>';
                    noi_dung +='<td class="text-nowrap text-center">';
                    noi_dung +='<i data-id="'+ v.id +'" class="edit fa-solid fa-pen-to-square fa-2x text-info" data-bs-toggle="modal" data-bs-target="#updateModal" style="margin-right: 10px"></i>';
                    noi_dung +='<i data-id="'+ v.id +'" class="del fa-solid fa-trash fa-2x text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"></i>';
                    noi_dung +='</td>';
                    noi_dung +='</tr>';
                })
                $("#danh_sach tbody").html(noi_dung);
            });
    }

    loadData();

    $("body").on('click', '.stt', function() {
        var id          =  $(this).data('id');
        var payload     =  {
            'id'    :   id,
        };
        axios
            .post('{{ Route("statusPartner") }}', payload)
            .then((res) => {
                loadData();
            });
    })
    $("body").on('click', '#themMoi', function() {
        var x1 = $("#ho_lot").val();
        var x2 = $("#ten").val();
        var x3 = $("#ngay_sinh").val();
        var x4 = $("#so_dien_thoai").val();
        var x5 = $("#dia_chi").val();
        var x6 = $("#email").val();
        var x7 = $("#password").val();
        var x8 = $("#tinh_trang").val();


        var payload  = {
            'ho_lot'            : x1,
            'ten'               : x2,
            'ngay_sinh'         : x3,
            'so_dien_thoai'     : x4,
            'dia_chi'           : x5,
            'email'             : x6,
            'password'          : x7,
            'tinh_trang'        : x8,

        };

        axios
            .post('{{ Route("createPartner") }}', payload)
            .then((res) => {
                if(res.data.status) {
                    toastr.success("Đã thêm mới Partner", "Thành công!");
                    loadData();
                }
            })
            .catch((res) => {
                $.each(res.response.data.errors, function(k, v) {
                    toastr.error(v[0]);
                })
            });
    })
    $("body").on('click', '.del', function() {
        var id = $(this).data('id');
        $("#id_can_xoa").val(id);
    })

    $("body").on('click', '#accpect_del', function() {
        var payload = {
            'id'    :   $("#id_can_xoa").val()
        };

        axios
            .post('{{ Route("deletePartner") }}', payload)
            .then((res) => {
                if(res.data.status) {
                    toastr.success(res.data.message);
                    loadData();
                } else {
                    toastr.error(res.data.message);
                }
            });
    })
    $("body").on('click', '.edit', function() {
        var id = $(this).data('id');
        var payload = {
            'id'    :   id
        };

        axios
            .post('{{ Route("editPartner") }}', payload)
            .then((res) => {
                if(res.data.status) {
                    $("#e_id").val(res.data.data.id);
                    $("#e_ho_lot").val(res.data.data.ho_lot);
                    $("#e_ten").val(res.data.data.ten);
                    $("#e_ngay_sinh").val(res.data.data.ngay_sinh);
                    $("#e_so_dien_thoai").val(res.data.data.so_dien_thoai);
                    $("#e_dia_chi").val(res.data.data.dia_chi);
                    $("#e_email").val(res.data.data.email);
                    $("#e_password").val(res.data.data.password);
                    $("#e_tinh_trang").val(res.data.data.tinh_trang);

                } else {
                    setTimeout(() => {
                        toastr.error(res.data.message, "Có Lỗi!");
                        $('#abc').click();
                    }, 1000);
                }
            });
    })
    $("body").on('click', '#accpect_update', function() {
        var x0 = $("#e_id").val();
        var x1 = $("#e_ho_lot").val();
        var x2 = $("#e_ten").val();
        var x3 = $("#e_ngay_sinh").val();
        var x4 = $("#e_so_dien_thoai").val();
        var x5 = $("#e_dia_chi").val();
        var x6 = $("#e_email").val();
        var x7 = $("#e_password").val();
        var x8 = $("#e_tinh_trang").val();


        var payload  = {
            'id'                : x0,
            'ho_lot'            : x1,
            'ten'               : x2,
            'ngay_sinh'         : x3,
            'so_dien_thoai'     : x4,
            'dia_chi'           : x5,
            'email'             : x6,
            'password'          : x7,
            'tinh_trang'        : x8,

        };

        axios
            .post('{{ Route("updatePartner") }}', payload)
            .then((res) => {
                if(res.data.status) {
                    toastr.success(res.data.message, "Thành công!");
                    loadData();
                } else {
                    toastr.error(res.data.message, "Có lỗi!");
                }
            })
            .catch((res) => {
                $.each(res.response.data.errors, function(k, v) {
                    toastr.error(v[0]);
                })
            });
    })
    $("body").on('blur', '#email', function() {
        var email       = $("#email").val();
        var payload     = {
            'email'   :   email
        };

        axios
            .post('{{ Route("checkMailPartner") }}', payload)
            .then((res) => {
                if(res.data.status) {
                    toastr.success(res.data.message, "Thành công!");
                    mau_xanh();
                } else {
                    toastr.error(res.data.message, "Có lỗi!");
                    mau_do();
                }
            });
    })
    mau_do();

    function mau_xanh()
    {
        $("#themMoi").removeClass("btn-danger");
        $("#themMoi").addClass("btn-primary");
        $("#themMoi").removeAttr("disabled");
        $("#themMoi").text("Thêm Mới PartNer")
    }

    function mau_do()
    {
        $("#themMoi").removeClass("btn-primary");
        $("#themMoi").addClass("btn-danger");
        $("#themMoi").attr("disabled", true);
        $("#themMoi").text("Thêm Mới PartNer")
    }
    function runSearch() {
        var gia_tri_tim     = $("#gia_tri_tim").val();
        var payload         = {
            'gia_tri'   :   gia_tri_tim
        };

        axios
            .post('{{ Route("searchPartner") }}', payload)
            .then((res) => {
                var d = res.data.data;
                var noi_dung = '';
                $.each(d, function(k, v) {
                    noi_dung +='<tr>';
                    noi_dung +='<th class="text-center text-nowrap">'+(k + 1)+'</th>';
                    noi_dung +='<td class="text-nowrap">'+ v.ho_lot +'</td>';
                    noi_dung +='<td class="text-nowrap">'+ v.ten +'</td>';
                    noi_dung +='<td class="text-center text-nowrap">'+ v.ngay_sinh +'</td>';
                    noi_dung +='<td class="text-center text-nowrap">'+ v.so_dien_thoai +'</td>';
                    noi_dung +='<td class="text-nowrap">'+ v.dia_chi +'</td>';
                    noi_dung +='<td class="text-center text-nowrap">'+ v.ma_so_thue +'</td>';
                    noi_dung +='<td class="text-center text-nowrap">'+ v.ten_cong_ty +'</td>';
                    noi_dung +='<td class="text-nowrap">'+ v.email +'</td>';
                    noi_dung +='<td class="text-nowrap text-center">';
                        if(v.tinh_trang == 0) {
                            noi_dung +='<button data-id="'+v.id+'" class="stt btn btn-primary" style="width: 160px">Chưa kích hoạt</button>';
                        } else if(v.tinh_trang == 1) {
                            noi_dung +='<button data-id="'+v.id+'" class="stt btn btn-success" style="width: 160px">Hoạt động</button>';
                        } else {
                            noi_dung +='<button data-id="'+v.id+'" class="stt btn btn-danger" style="width: 160px">Bị khóa</button>';
                        }
                    noi_dung +='</td>';
                    noi_dung +='<td class="text-nowrap text-center">';
                    noi_dung +='<i data-id="'+ v.id +'" class="edit fa-solid fa-pen-to-square fa-2x text-info" data-bs-toggle="modal" data-bs-target="#updateModal" style="margin-right: 10px"></i>';
                    noi_dung +='<i data-id="'+ v.id +'" class="del fa-solid fa-trash fa-2x text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"></i>';
                    noi_dung +='</td>';
                    noi_dung +='</tr>';
                })
                $("#danh_sach tbody").html(noi_dung);
            });
    }
    $('#gia_tri_tim').keypress(function (e) {
        var key = e.which;
        if(key == 13)  {
            runSearch();
        }
    });
</script>
@endsection
