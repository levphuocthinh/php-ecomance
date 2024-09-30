@extends('share_admin.master')
@section('noi_dung')
    <div id="abcxyz" class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    Thêm Mới Chuyên Mục
                </div>
                <div class="card-body">
                    <div class="mb-1">
                        <label class="form-label">Tên Chuyên Mục</label>
                        <input v-on:blur="checkSlugCreate()" v-model="add.ten_chuyen_muc" v-on:keyup="slug()" type="text"
                            class="form-control" placeholder="Nhập tên chuyên mục">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Slug Chuyên Mục</label>
                        <input disabled v-model="add.slug_chuyen_muc" type="text" class="form-control"
                            placeholder="Nhập slug chuyên mục">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Chuyên Mục Cha</label>
                        <input v-model="add.id_chuyen_muc_cha" type="text" class="form-control">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Tình Trạng</label>
                        <select v-model="add.tinh_trang" class="form-control">
                            <option value="1">Hiển Thị</option>
                            <option value="0">Dừng Hoạt Động</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Hình Ảnh</label>
                        <input v-model="add.hinh_anh" type="text" class="form-control">
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button id="themMoi" v-on:click="themMoi()" class="btn btn-danger">AAA</button>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                                <input v-model="key_search" v-on:keyup.enter="timKiem()" type="text" class="form-control"
                                    placeholder="Nhập vào thông tin cần tìm" aria-label="Amount">
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
                                        <th class="text-center text-nowrap">Tên Chuyên Mục</th>
                                        <th class="text-center text-nowrap">Hình Ảnh</th>
                                        <th class="text-center text-nowrap">Tình Trạng</th>
                                        <th class="text-center text-nowrap">Chuyên Mục Cha</th>
                                        <th class="text-center text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="(value, key) in list">
                                        <tr>
                                            <th class="text-center">@{{ key + 1 }}</th>
                                            <td>@{{ value.ten_chuyen_muc }}</td>
                                            <td class="text-center align-middle">
                                                <img style="width: 150px;" v-bind:src="value.hinh_anh"
                                                    class="img-thumbnail">
                                            </td>
                                            <td class="text-nowrap text-center align-middle">
                                                <template v-if="value.tinh_trang == 1">
                                                    <button v-on:click="doiTrangThai(value)" class="btn btn-primary">Hiển
                                                        Thị</button>
                                                </template>
                                                <template v-else>
                                                    <button v-on:click="doiTrangThai(value)" class="btn btn-warning">Tạm
                                                        Tắt</button>
                                                </template>
                                            </td>
                                            <td>@{{ value.id_chuyen_muc_cha }}</td>
                                            <td class="text-nowrap text-center align-middle">
                                                <i data-bs-toggle="modal" data-bs-target="#updateModal"
                                                    v-on:click="edit = Object.assign({}, value)"
                                                    class="fa-solid fa-pen-to-square fa-2x text-info"style="margin-right: 10px"></i>
                                                <i data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    v-on:click="del = value"
                                                    class="fa-solid fa-trash fa-2x text-danger"></i>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa Chuyên Mục</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Bạn có muốn xóa chuyên mục <b>@{{ del.ten_chuyen_muc }}</b> này không?</p>
                                        <p>
                                            <b>Lưu ý:</b> Điều này không thể hoàn tác!
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button v-on:click="destroy()" type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Xác Nhận Xóa</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Cập Nhật Chuyên Mục</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-1">
                                            <label class="form-label">Tên Chuyên Mục</label>
                                            <input v-on:keyup="slugUpdate()" v-on:blur="checkSlugUpdate()"
                                                v-model="edit.ten_chuyen_muc" type="text" class="form-control"
                                                placeholder="Nhập tên chuyên mục">
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Slug Chuyên Mục</label>
                                            <input disabled v-model="edit.slug_chuyen_muc" type="text"
                                                class="form-control" placeholder="Nhập slug chuyên mục">
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Chuyên Mục Cha</label>
                                            <input v-model="edit.id_chuyen_muc_cha" type="text" class="form-control">
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Tình Trạng</label>
                                            <select v-model="edit.tinh_trang" class="form-control">
                                                <option value="1">Hiển Thị</option>
                                                <option value="0">Dừng Hoạt Động</option>
                                            </select>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Hình Ảnh</label>
                                            <input v-model="edit.hinh_anh" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button v-on:click="update()" type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal">Cập Nhật</button>
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
                el: '#abcxyz',
                data: {
                    list: [], // array, object, string, number
                    key_search: '',
                    add: {
                        'ten_chuyen_muc': '',
                        'slug_chuyen_muc': '',
                        'id_chuyen_muc_cha': 0,
                        'tinh_trang': 0,
                        'hinh_anh': '',
                    },
                    del: {},
                    edit: {},
                    ho_ten: '',
                    link: 'https://google.com',
                },
                created() {
                    this.getData();
                    this.mau_do();
                },
                methods: {
                    slug() {
                        this.add.slug_chuyen_muc = this.toSlug(this.add.ten_chuyen_muc);
                    },
                    slugUpdate() {
                        this.edit.slug_chuyen_muc = this.toSlug(this.edit.ten_chuyen_muc);
                    },
                    toSlug(str) {
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
                    },
                    update() {
                        axios
                            .post('{{ Route('updateChuyenMuc') }}', this.edit)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "Thành công!");
                                } else {
                                    toastr.error(res.data.message, "Có lỗi!");
                                }
                                this.timKiem();
                            })
                            .catch((res) => {
                                var errrors = res.response.data.errors;
                                $.each(errrors, function(k, v) {
                                    toastr.error(v[0], "Có lỗi!");
                                    this.timKiem();
                                })
                            });
                    },
                    destroy() {
                        axios
                            .post('{{ Route('deleteChuyenMuc') }}', this.del)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message);
                                    this.timKiem();
                                } else {
                                    toastr.error(res.data.message);
                                }
                            });
                    },
                    getData() {
                        axios
                            .get('{{ Route('dataChuyenMuc') }}')
                            .then((res) => {
                                this.list = res.data.data;
                                console.log(this.list);
                            });
                    },
                    timKiem() {
                        var payload = {
                            'gia_tri': this.key_search
                        };
                        axios
                            .post('{{ Route('searchChuyenMuc') }}', payload)
                            .then((res) => {
                                this.list = res.data.data;
                            });
                    },
                    doiTrangThai(payload) {
                        axios
                            .post('{{ Route('statusChuyenMuc') }}', payload)
                            .then((res) => {
                                this.timKiem();
                                toastr.warning("Đã đổi trạng thái", "Thành Công!")
                            });
                    },
                    themMoi() {
                        axios
                            .post('{{ Route('createChuyenMuc') }}', this.add)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success("Đã thêm mới chuyên mục", "Thành công!");
                                    // this.list.push(this.add);
                                    this.getData();
                                    // this.timKiem();
                                }
                            })
                            .catch((res) => {
                                var errrors = res.response.data.errors;
                                $.each(errrors, function(k, v) {
                                    toastr.error(v[0], "Có lỗi!");
                                })
                            });
                    },
                    mau_xanh() {
                        $("#themMoi").removeClass("btn-danger");
                        $("#themMoi").addClass("btn-primary");
                        $("#themMoi").removeAttr("disabled");
                        $("#themMoi").text("Thêm Mới Chuyên Mục")
                    },
                    mau_do() {
                        $("#themMoi").removeClass("btn-primary");
                        $("#themMoi").addClass("btn-danger");
                        $("#themMoi").attr("disabled", true);
                        $("#themMoi").text("KHÔNG ĐƯỢC")
                    },
                    checkSlugCreate() {
                        axios
                            .post('{{ Route('checkSlugChuyenMuc') }}', this.add)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "Thành công!");
                                    this.mau_xanh();
                                } else {
                                    toastr.error(res.data.message, "Có lỗi!");
                                    this.mau_do();
                                }
                            });
                    },
                    checkSlugUpdate() {
                        axios
                            .post(' {{ Route('checkSlugUpdateChuyen') }} ', this.edit)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "Thành công!");
                                } else {
                                    toastr.error(res.data.message, "Có lỗi!");
                                }
                            });
                    },
                },
            });
        })
    </script>
@endsection
