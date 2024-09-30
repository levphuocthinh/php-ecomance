$(document).ready(function() {
    new Vue({
        el    :   '#abcxyz',
        data  :   {
            list        :   [], // array, object, string, number
            key_search  :   '',
            add         :   {
                'ten_chuyen_muc'        :   '',
                'slug_chuyen_muc'       :   '',
                'id_chuyen_muc_cha'     :   0,
                'tinh_trang'            :   0,
                'hinh_anh'              :   '',
            },
            del         :   {},
            edit        :   {},
        },
        created()   {
            this.getData();
            this.mau_do();
        },
        methods   : {
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
                    .post('/admin/chuyen-muc/update', this.edit)
                    .then((res) => {
                        if(res.data.status) {
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
                    .post('/admin/chuyen-muc/delete', this.del)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.message);
                            this.timKiem();
                        } else {
                            toastr.error(res.data.message);
                        }
                    });
            },
            getData() {
                axios
                    .get('{{ Route("dataChuyenMuc") }}')
                    .then((res) => {
                        this.list = res.data.data;
                    });
            },
            timKiem() {
                var payload         = {
                    'gia_tri'   :   this.key_search
                };
                axios
                    .post('/admin/chuyen-muc/search', payload)
                    .then((res) => {
                        this.list = res.data.data;
                    });
            },
            doiTrangThai(payload) {
                axios
                    .post('/admin/chuyen-muc/status', payload)
                    .then((res) => {
                        this.timKiem();
                        toastr.warning("Đã đổi trạng thái", "Thành Công!")
                    });
            },
            themMoi() {
                axios
                    .post('/admin/chuyen-muc/create', this.add)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success("Đã thêm mới chuyên mục", "Thành công!");
                            // this.list.push(this.add);
                            // this.getData();
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
            mau_xanh()  {
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
                    .post('/admin/chuyen-muc/check-slug', this.add)
                    .then((res) => {
                        if(res.data.status) {
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
                    .post(' {{ Route("1") }} ', this.edit)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.message, "Thành công!");
                        } else {
                            toastr.error(res.data.message, "Có lỗi!");
                        }
                    });
            },
        },
    });
})
