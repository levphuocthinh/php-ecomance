@extends('share_admin.master')
@section('noi_dung')
<div class="row">
    <div class="col-3">
        <div class="card">
            <div class="card-header">
                Thêm Mới Chuyên Mục
            </div>
            <div class="card-body">
                <div class="mb-1">
                    <label class="form-label">Tên Chuyên Mục</label>
                    <input type="text" class="form-control" id="ten_chuyen_muc" placeholder="Nhập tên chuyên mục">
                </div>
                <div class="mb-1">
                    <label class="form-label">Slug Chuyên Mục</label>
                    <input disabled type="text" class="form-control" id="slug_chuyen_muc" placeholder="Nhập slug chuyên mục">
                </div>
                <div class="mb-1">
                    <label class="form-label">Chuyên Mục Cha</label>
                    <input type="text" class="form-control" id="id_chuyen_muc_cha">
                </div>
                <div class="mb-1">
                    <label class="form-label">Tình Trạng</label>
                    <select id="tinh_trang" class="form-control">
                        <option value="1">Hiển Thị</option>
                        <option value="0">Dừng Hoạt Động</option>
                    </select>
                </div>
                <div class="mb-1">
                    <label class="form-label">Hình Ảnh</label>
                    <input type="text" class="form-control" id="hinh_anh">
                </div>
            </div>
            <div class="card-footer text-end">
                <button id="themMoi" class="btn btn-danger">AAA</button>
            </div>
        </div>
    </div>
    <div class="col-9">
        <div class="card">
            <div class="card-header">
                Danh Sách Chuyên Mục
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
                                    <th class="text-center">#</th>
                                    <th class="text-center">Tên Chuyên Mục</th>
                                    <th class="text-center">Hình Ảnh</th>
                                    <th class="text-center">Tình Trạng</th>
                                    <th class="text-center">Chuyên Mục Cha</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Xóa Chuyên Mục</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="id_can_xoa">
                                Bạn chắc chắn sẽ xóa Chuyên mục này!. Chức năng không thể hoàn tác.
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
                                  <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Chuyên Mục</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" class="form-control" id="e_id">
                                    <div class="mb-1">
                                        <label class="form-label">Tên Chuyên Mục</label>
                                        <input type="text" class="form-control" id="e_ten_chuyen_muc" placeholder="Nhập tên chuyên mục">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Slug Chuyên Mục</label>
                                        <input type="text" class="form-control" id="e_slug_chuyen_muc" placeholder="Nhập slug chuyên mục">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Chuyên Mục Cha</label>
                                        <input type="text" class="form-control" id="e_id_chuyen_muc_cha">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Tình Trạng</label>
                                        <select id="e_tinh_trang" class="form-control">
                                            <option value="1">Hiển Thị</option>
                                            <option value="0">Dừng Hoạt Động</option>
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Hình Ảnh</label>
                                        <input type="text" class="form-control" id="e_hinh_anh">
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
    var data   =   [];

    function parserTable(d) {
        var noi_dung = '';
        $.each(d, function(k, v) {
            noi_dung += '<tr>';
            noi_dung += '<th class="text-center">'+ (k + 1) +'</th>';
            noi_dung += '<td>'+ v.ten_chuyen_muc +'</td>';
            noi_dung += '<td class="text-center">';
            noi_dung += '<img style="width: 100px;" src="'+ v.hinh_anh +'" class="img-thumbnail" alt="...">';
            noi_dung += '</td>';
            noi_dung += '<td class="text-nowrap text-center">';
            if(v.tinh_trang) {
                noi_dung += '<button data-id="'+ v.id +'" data-index="'+ k +'" class="stt btn btn-primary">Hiển Thị</button>';
            } else {
                noi_dung += '<button data-id="'+ v.id +'" data-index="'+ k +'" class="stt btn btn-danger">Tạm Tắt</button>';
            }
            noi_dung += '</td>';
            noi_dung += '<td>'+ v.id_chuyen_muc_cha +'</td>';
            noi_dung += '<td class="text-nowrap text-center">';
            noi_dung += '<i data-id="'+ v.id +'" class="edit fa-solid fa-pen-to-square fa-2x text-info" data-bs-toggle="modal" data-bs-target="#updateModal" style="margin-right: 10px"></i>';
            noi_dung += '<i data-id="'+ v.id +'" class="del fa-solid fa-trash fa-2x text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" ></i>';
            noi_dung += '</td>';
            noi_dung += '</tr>';
        })
        $("#danh_sach tbody").html(noi_dung);
    }

    function runSearch() {
        var gia_tri_tim     = $("#gia_tri_tim").val();
        var payload         = {
            'gia_tri'   :   gia_tri_tim
        };

        axios
            .post('{{ Route("searchChuyenMuc") }}', payload)
            .then((res) => {
                data = res.data.data;
                parserTable(data);
            });
    }

    $('#gia_tri_tim').keypress(function (e) {
        var key = e.which;
        if(key == 13)  {
            runSearch();
        }
    });

    $("body").on('click', '#search', function() {
        runSearch();
    })

    $("body").on('keyup', '#ten_chuyen_muc', function() {
        var gia_tri_dang_viet = $('#ten_chuyen_muc').val();
        var slug              = toSlug(gia_tri_dang_viet);
        $("#slug_chuyen_muc").val(slug);
    })

    $("body").on('blur', '#ten_chuyen_muc', function() {
        var slug_chuyen_muc   = $("#slug_chuyen_muc").val();
        var payload           = {
            'slug_chuyen_muc'   :   slug_chuyen_muc
        };

        axios
            .post('{{ Route("checkSlugChuyenMuc") }}', payload)
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

    function toSlug(str)
    {
        str = str.toLowerCase();
        str = str
            .normalize('NFD') // chuyển chuỗi sang unicode tổ hợp
            .replace(/[\u0300-\u036f]/g, ''); // xóa các ký tự dấu sau khi tách tổ hợp
        str = str.replace(/[đĐ]/g, 'd');
        str = str.replace(/([^0-9a-z-\s])/g, '');
        str = str.replace(/(\s+)/g, '-');
        str = str.replace(/-+/g, '-');
        str = str.replace(/^-+|-+$/g, '');
        return str;
    }

    mau_do();

    function mau_xanh()
    {
        $("#themMoi").removeClass("btn-danger");
        $("#themMoi").addClass("btn-primary");
        $("#themMoi").removeAttr("disabled");
        $("#themMoi").text("Thêm Mới Chuyên Mục")
    }

    function mau_do()
    {
        $("#themMoi").removeClass("btn-primary");
        $("#themMoi").addClass("btn-danger");
        $("#themMoi").attr("disabled", true);
        $("#themMoi").text("KHÔNG ĐƯỢC")
    }


    $("body").on('click', '#themMoi', function() {
        var x1 = $("#ten_chuyen_muc").val();
        var x2 = $("#slug_chuyen_muc").val();
        var x3 = $("#id_chuyen_muc_cha").val();
        var x4 = $("#tinh_trang").val();
        var x5 = $("#hinh_anh").val();

        var payload  = {
            'ten_chuyen_muc'        : x1,
            'slug_chuyen_muc'       : x2,
            'id_chuyen_muc_cha'     : x3,
            'tinh_trang'            : x4,
            'hinh_anh'              : x5,
        };

        axios
            .post('{{ Route("createChuyenMuc") }}', payload)
            .then((res) => {
                if(res.data.status) {
                    toastr.success("Đã thêm mới chuyên mục", "Thành công!");
                    loadData();
                }
            })
            .catch((res) => {
                var errrors = res.response.data.errors;
                $.each(errrors, function(k, v) {
                    toastr.error(v[0], "Có lỗi!");
                })
            });
    })

    $("body").on('click', '#accpect_update', function() {
        var x0 = $("#e_id").val();
        var x1 = $("#e_ten_chuyen_muc").val();
        var x2 = $("#e_slug_chuyen_muc").val();
        var x3 = $("#e_id_chuyen_muc_cha").val();
        var x4 = $("#e_tinh_trang").val();
        var x5 = $("#e_hinh_anh").val();

        var payload  = {
            'id'                    : x0,
            'ten_chuyen_muc'        : x1,
            'slug_chuyen_muc'       : x2,
            'id_chuyen_muc_cha'     : x3,
            'tinh_trang'            : x4,
            'hinh_anh'              : x5,
        };

        axios
            .post('{{ Route("updateChuyenMuc") }}', payload)
            .then((res) => {
                if(res.data.status) {
                    toastr.success(res.data.message, "Thành công!");
                    loadData();
                } else {
                    toastr.error(res.data.message, "Có lỗi!");
                }
            })
            .catch((res) => {
                var errrors = res.response.data.errors;
                $.each(errrors, function(k, v) {
                    toastr.error(v[0], "Có lỗi!");
                })
            });
    });

    function loadData() {
        axios
            .get('{{ Route("dataChuyenMuc") }}')
            .then((res) => {
                data = res.data.data;
                parserTable(data);
            });
    }

    loadData();

    $("body").on('click', '.stt', function() {
        var id          =  $(this).data('id');
        var index       =  $(this).data('index');
        var payload     =  {
            'id'    :   id,
            'alo'   :   'xinh cuộc sống đẹp xinh'
        };
        console.log(index);
        axios
            .post('{{ Route("dataChuyenMuc") }}', payload)
            .then((res) => {
                data[index].tinh_trang  = !data[index].tinh_trang;
                parserTable(data);
                toastr.warning("Đã đổi trạng thái", "Thành Công!")
            });
    });

    $("body").on('click', '.edit', function() {
        var id = $(this).data('id');
        var payload = {
            'id'    :   id
        };

        axios
            .post('{{ Route("editChuyenMuc") }}', payload)
            .then((res) => {
                if(res.data.status) {
                    $("#e_id").val(res.data.data.id);
                    $("#e_ten_chuyen_muc").val(res.data.data.ten_chuyen_muc);
                    $("#e_slug_chuyen_muc").val(res.data.data.slug_chuyen_muc);
                    $("#e_tinh_trang").val(res.data.data.tinh_trang);
                    $("#e_id_chuyen_muc_cha").val(res.data.data.id_chuyen_muc_cha);
                    $("#e_hinh_anh").val(res.data.data.hinh_anh);
                } else {
                    setTimeout(() => {
                        toastr.error(res.data.message, "Có Lỗi!");
                        $('#abc').click();
                    }, 1000);
                }
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
            .post('{{ Route("deleteChuyenMuc") }}', payload)
            .then((res) => {
                if(res.data.status) {
                    toastr.success(res.data.message);
                    loadData(); // Gọi server để trả về data
                } else {
                    toastr.error(res.data.message);
                }
            });
    })


</script>
@endsection
