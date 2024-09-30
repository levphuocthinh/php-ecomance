@extends('user.share.master')
@section('content')
    <div id="app">
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>Checkout</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="checkout__page--area section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="main checkout__mian">
                            <form>
                                <div class="checkout__content--step section__contact--information">
                                    <div
                                        class="section__header checkout__section--header d-flex align-items-center justify-content-between mb-25">
                                        <h2 class="section__header--title h3">Address</h2>
                                        <button data-bs-toggle="modal" data-bs-target="#addressModal"
                                            data-open="addressModal" class="new__address--btn primary__btn"
                                            type="button">Add a new address</button>
                                    </div>
                                    <div class="customer__information">
                                        <div class="checkout__input--select select">
                                            <select v-on:change="loadThongTin($event)" class="checkout__input--select__field border-radius-5" id="country2">
                                                <option value="0">Chọn địa chỉ</option>
                                                <template v-for="(k,v) in list_diaChi">
                                                    <option v-bind:value="v.id">@{{ v.dia_chi }}</option>
                                                </template>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__content--step section__shipping--address">
                                    <div class="section__header mb-25">
                                        <h2 class="section__header--title h3">Billing Details</h2>
                                    </div>
                                    <div class="section__shipping--address__content">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                                <div class="checkout__input--list ">
                                                    <label class="checkout__input--label mb-5" for="input1">Tên Người Nhận
                                                        <span class="checkout__input--label__star">*</span></label>
                                                    <input v-model="add.ten_nguoi_nhan" class="checkout__input--field border-radius-5"
                                                        placeholder="Tên người nhận" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-5" for="input2">Số Điện Thoại
                                                        <span class="checkout__input--label__star">*</span></label>
                                                    <input v-model="add.so_dien_thoai" class="checkout__input--field border-radius-5"
                                                        placeholder="Số điện thoại" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-20">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-5" for="input3">Địa Chỉ <span
                                                            class="checkout__input--label__star">*</span></label>
                                                    <input v-model="add.dia_chi" class="checkout__input--field border-radius-5"
                                                        placeholder="Địa chỉ" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes mb-20">
                                    <label class="checkout__input--label mb-5" for="order">Ghi Chú <span
                                            class="checkout__input--label__star">*</span></label>
                                    <textarea v-model="add.ghi_chu" class="checkout__notes--textarea__field border-radius-5" placeholder="Ghi chú..." spellcheck="false"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <aside class="checkout__sidebar sidebar border-radius-10">
                            <h2 class="checkout__order--summary__title text-center mb-15">Your Order Summary</h2>
                            <div class="cart__table checkout__product--table">
                                <table class="cart__table--inner">
                                    <tbody class="cart__table--body">
                                        <template v-for="(k, v) in list_checkout">
                                            <tr class="cart__table--body__items">
                                                <td class="cart__table--body__list">
                                                    <div class="product__image two  d-flex align-items-center">
                                                        <div class="product__thumbnail border-radius-5">
                                                            <a class="display-block" href="product-details.html"><img
                                                                    class="display-block border-radius-5"
                                                                    v-bind:src="v.hinh_anh"
                                                                    alt="cart-product"></a>
                                                            <span class="product__thumbnail--quantity">@{{ v.so_luong }}</span>
                                                        </div>
                                                        <div class="product__description">
                                                            <h4 class="product__description--name"><a
                                                                    href="product-details.html">@{{ v.ten_san_pham }}</a></h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cart__table--body__list">
                                                    <span class="cart__price">@{{ numberFormat(v.gia_khuyen_mai) }}</span>
                                                </td>
                                                <td><button v-on:click="destroy(v)" class="minicart__product--remove"
                                                    type="button">Remove</button></td>
                                            </tr>
                                        </template>
                                    </tbody>
                                </table>
                            </div>
                            <div class="checkout__discount--code">
                                <form class="d-flex" action="#">
                                    <label>
                                        <input class="checkout__discount--code__input--field border-radius-5"
                                            placeholder="Gift card or discount code" type="text">
                                    </label>
                                    <button class="checkout__discount--code__btn primary__btn border-radius-5"
                                        type="submit">Apply</button>
                                </form>
                            </div>
                            <div class="checkout__total">
                                <table class="checkout__total--table">
                                    <tfoot class="checkout__total--footer">
                                        <tr class="checkout__total--footer__items">
                                            <td
                                                class="checkout__total--footer__title checkout__total--footer__list text-left">
                                                Total </td>
                                            <td
                                                class="checkout__total--footer__amount checkout__total--footer__list text-right">
                                                @{{ numberFormat(tong_tien) }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment__history mb-30">
                                <h3 class="payment__history--title mb-20">Payment</h3>
                                <ul class="payment__history--inner d-flex">
                                    <li class="payment__history--list"><button class="payment__history--link primary__btn"
                                            type="submit">Credit Card</button></li>
                                    <li class="payment__history--list"><button class="payment__history--link primary__btn"
                                            type="submit">Bank Transfer</button></li>
                                    <li class="payment__history--list"><button class="payment__history--link primary__btn"
                                            type="submit">Paypal</button></li>
                                </ul>
                            </div>
                            <button v-on:click="datHang()" class="checkout__now--btn primary__btn" type="button">ĐẶT HÀNG</button>
                        </aside>
                    </div>
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
                                        <input v-model="addAddress.ten_nguoi_nhan" type="text" class="contact__form--input" placeholder="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Số Điện Thoại</label>
                                        <input v-model="addAddress.so_dien_thoai" type="tel" class="contact__form--input" placeholder="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Địa Chỉ</label>
                                        <input v-model="addAddress.dia_chi" type="text" class="contact__form--input" placeholder="Nhập địa chỉ">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Ghi Chú</label>
                                        <textarea v-model="addAddress.ghi_chu" class="contact__form--textarea" cols="30" rows="10"></textarea>
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
                </div>
            </div>
        </div>
    </div>
    @include('user.share.shipping')
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            new Vue({
                el: '#app',
                data: {
                    list_diaChi     : [],
                    list_checkout   : [],
                    add             : {'ten_nguoi_nhan' : '', 'dia_chi' : '', 'ghi_chu' : '', 'so_dien_thoai' : ''},
                    addAddress      : {},
                    id_dia_chi      : 0,
                    tong_tien       : 0,
                },
                created() {
                    this.loadDataDiaChi();
                    this.loadDataCheckout();
                },
                methods: {
                    numberFormat(number) {
                        return new Intl.NumberFormat('vi-VI', {
                            style: 'currency',
                            currency: 'VND'
                        }).format(number);
                    },
                    addDiaChi() {
                        axios
                            .post('{{ Route("createCustomerAddress") }}', this.addAddress)
                            .then((res) => {
                                if(res.data.status) {
                                    toastr.success(res.data.message, 'Success');
                                    $('#addressModal').modal('hide');
                                } else {
                                    toastr.error(res.data.message, 'Error');
                                }
                                this.loadDataDiaChi();
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                    loadDataCheckout(){
                        axios
                            .get('{{ Route('dataGioHang') }}')
                            .then((res) => {
                                this.list_checkout = res.data.data;
                                this.tong_tien     = res.data.subTotal;
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                    loadDataDiaChi() {
                        axios
                            .get('{{ Route('dataDiaChiCheckOut') }}')
                            .then((res) => {
                                this.list_diaChi = res.data.data;
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                    loadThongTin(e){
                        this.id_dia_chi = e.target.value;
                        if (this.id_dia_chi == 0) {
                            this.add.ten_nguoi_nhan = "";
                            this.add.dia_chi = "";
                            this.add.ghi_chu = "";
                            this.add.so_dien_thoai = "";
                        } else {
                            $.each(this.list_diaChi, function(index, element) {
                                if (this.id_dia_chi == element.id) {
                                    this.add.ten_nguoi_nhan = element.ten_nguoi_nhan;
                                    this.add.dia_chi = element.dia_chi;
                                    this.add.ghi_chu = element.ghi_chu;
                                    this.add.so_dien_thoai = element.so_dien_thoai;
                                }
                            }.bind(this));
                        }
                    },
                    datHang() {
                        axios
                            .post('{{ Route("createDonHang") }}', this.add)
                            .then((res) => {
                                if(res.data.status) {
                                    toastr.success(res.data.message, 'Success');
                                    this.loadDataCheckout();
                                    this.loadCard();
                                } else {
                                    toastr.error(res.data.message, 'Error');
                                }
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                    destroy(value) {
                        axios
                            .post('{{ Route('deleteGioHang') }}', value)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "Success!");
                                    this.loadDataCheckout();
                                    this.loadCard();
                                } else {
                                    toastr.error(res.data.message, "Error!");
                                }
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0]);
                                });
                            });
                    },

                    loadCard() {
                        axios
                            .get('{{ Route('dataGioHang') }}')
                            .then((res) => {
                                // this.list = res.data.data;
                                subTotal = res.data.subTotal;
                                so_luong_cart_1 = res.data.so_luong;
                                so_luong_cart_2 = res.data.so_luong;
                                $("#so_luong_cart_1").html(so_luong_cart_1);
                                $("#so_luong_cart_2").html(so_luong_cart_2);
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                },
            });
        });
    </script>
@endsection
