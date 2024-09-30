<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiCustomerController;
use App\Http\Controllers\ChuyenMucController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DanhGiaController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\KhoHangController;
use App\Http\Controllers\KhuyenMaiController;
use App\Http\Controllers\NhapKhoController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ThongKeController;
use App\Http\Controllers\ThongKePartnerController;
use App\Http\Controllers\TinTucController;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\VCBController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/vcb', [VCBController::class, 'index']);
// Dùng chung  => admin, partner, user
Route::get('/share/chuyen-muc/data', [ChuyenMucController::class, 'data'])->name('dataChuyenMuc');
Route::get('/all-product', [SanPhamController::class, 'showAllProduct'])->name('allProduct');
Route::get('/product-detail/{id}', [SanPhamController::class, 'showProduct']);
Route::get('/product/{id}', [SanPhamController::class, 'showProductCategory']);
Route::get('/tin-tuc', [TinTucController::class, 'showNews'])->name('showNews');
Route::get('/chi-tiet-tin-tuc/{id}', [TinTucController::class, 'showNewsDetail'])->name('shownews');
Route::get('/active/{code}', [CustomerController::class, 'activeAccount']);


Route::get('/test', [TestController::class, 'index']);
Route::get('/test-2/{id_san_pham}/{id_partner}', [NhapKhoController::class, 'tinhTongSoLuong']);
Route::get('/chart', [TestController::class, 'chart']);
Route::get('/data-chart', [TestController::class, 'dataChart'])->name('dataChart');


Route::get('/', [TrangChuController::class, 'index'])->name('HomePageUser');
Route::get('/auth', [CustomerController::class, 'index'])->name('viewCustomerLogin');
Route::post('/register', [ApiCustomerController::class, 'register'])->name('customerRegister');
Route::post('/login', [ApiCustomerController::class, 'login'])->name('customerLogin');
Route::get('/forgot-password', [CustomerController::class, 'viewForgotPassword'])->name('viewForgotPassword');
Route::post('/forgot-password', [CustomerController::class, 'actionForgotPassword'])->name('actionForgotPassword');
Route::get('/update-password/{hash_reset}', [CustomerController::class, 'viewUpdatePassword'])->name('viewUpdatePassword');
Route::post('/update-password', [CustomerController::class, 'actionUpdatePassword'])->name('actionUpdatePassword');


Route::group(['middleware' => 'user'], function() {
    //Profile
    Route::group(['prefix' => '/profile'], function() {
        Route::get('/', [CustomerController::class, 'viewProfile'])->name('viewCustomerProfile');
        Route::post('/data', [ApiCustomerController::class, 'getProfile'])->name('getCustomerProfile');
        Route::post('/update', [ApiCustomerController::class, 'updateProfile'])->name('updateCustomerProfile');
    });
    Route::get('/dashboard', [CustomerController::class, 'viewDashboard'])->name('viewCustomerDashboard');

    Route::get('/logout', [CustomerController::class, 'logOut'])->name('customerLogOut');

    //Doi mat khau
    Route::group(['prefix' => '/doi-mat-khau'], function() {
        Route::get('/', [CustomerController::class, 'viewDoiMatKhau'])->name('viewCustomerChangepass');
        Route::post('/update-password', [ApiCustomerController::class, 'updatePassword'])->name('updateCustomerPassword');
    });

    Route::group(['prefix' => '/wishlist'], function() {
        Route::get('/', [WishlistController::class, 'viewWishlist'])->name('viewCustomerWishlist');
        Route::post('/data', [WishlistController::class, 'dataWishlist'])->name('dataCustomerWishlist');
        Route::post('/create', [WishlistController::class, 'createWishlist'])->name('createCustomerWishlist');
        Route::post('/delete', [WishlistController::class, 'destroyWishlist'])->name('deleteCustomerWishlist');
    });
    Route::get('/dia-chi', [CustomerController::class, 'viewDiaChi'])->name('viewCustomerAddress');
    Route::post('/dia-chi', [CustomerController::class, 'createDiaChi'])->name('createCustomerAddress');
    Route::post('/dia-chi/data', [CustomerController::class, 'dataDiaChi'])->name('dataCustomerAddress');
    Route::get('/don-hang', [CustomerController::class, 'viewDonHang'])->name('viewCustomerOrder');
    Route::post('/don-hang/data-user', [CustomerController::class, 'dataCustomerOrder'])->name('dataCustomerOrder');
    Route::post('/don-hang/data-detail-user', [CustomerController::class, 'dataCustomerOrderDetail'])->name('dataCustomerOrderDetail');

    Route::post('/gio-hang', [GioHangController::class, 'store'])->name('storeGioHang');
    Route::get('/gio-hang/data', [GioHangController::class, 'data'])->name('dataGioHang');
    Route::post('/gio-hang/delete', [GioHangController::class, 'destroy'])->name('deleteGioHang');
    Route::post('/gio-hang/update', [GioHangController::class, 'update'])->name('updateGioHang');
    Route::get('/checkout', [CustomerController::class, 'viewCheckout'])->name('viewCheckout');
    Route::get('/checkout/dia-chi', [CustomerController::class, 'dataDiaChiCheckout'])->name('dataDiaChiCheckOut');


    Route::post('/don-hang', [DonHangController::class, 'store'])->name('createDonHang');

    Route::post('/danh-gia', [DanhGiaController::class, 'store'])->name('createDanhGia');
    Route::post('/danh-gia/data', [DanhGiaController::class, 'getData'])->name('dataDanhGia');

});



Route::get('/admin/demo', [ChuyenMucController::class, 'demo']);

Route::group(['middleware' => 'admin', 'prefix' => '/admin'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('viewAdmin');
    Route::get('/data', [AdminController::class, 'data'])->name('dataAdmin');
    Route::post('/status', [AdminController::class, 'status'])->name('statusAdmin');
    Route::post('/create', [AdminController::class, 'store'])->name('createAdmin');
    Route::post('/delete', [AdminController::class, 'destroy'])->name('deleteAdmin');
    Route::post('/edit', [AdminController::class, 'edit'])->name('editAdmin');
    Route::post('/update', [AdminController::class, 'update'])->name('updateAdmin');
    Route::post('/check-mail', [AdminController::class, 'checkMail'])->name('checkMailAdmin');
    Route::post('/check-mail-update', [AdminController::class, 'checkMailUpdate'])->name('checkMailUpdateAdmin');
    Route::post('/search', [AdminController::class, 'search'])->name('searchAdmin');

    Route::get('/logout', [AdminController::class, 'logOut'])->name('adminLogOut');

    Route::group(['prefix' => '/khuyen-mai'], function() {
        Route::get('/', [KhuyenMaiController::class, 'index'])->name('viewKhuyenMai');
        Route::get('/data', [KhuyenMaiController::class, 'data'])->name('dataKhuyenMai');
        Route::post('/status', [KhuyenMaiController::class, 'status'])->name('statusKhuyenMai');
        Route::post('/create', [KhuyenMaiController::class, 'store'])->name('createKhuyenMai');
        Route::post('/delete', [KhuyenMaiController::class, 'destroy'])->name('deleteKhuyenMai');
        Route::post('/update', [KhuyenMaiController::class, 'update'])->name('updateKhuyenMai');
        Route::post('/search', [KhuyenMaiController::class, 'search'])->name('searchKhuyenMai');
        Route::post('/check-ma', [KhuyenMaiController::class, 'checkMa'])->name('checkMailKhuyenMai');
        Route::post('/check-ma-update', [KhuyenMaiController::class, 'checkMaUpdate'])->name('checkMailUpdateKhuyenMai');
    });

    Route::group(['prefix' => '/thong-ke'], function() {
        Route::get('/', [TestController::class, 'index'])->name('viewThongKe');
        Route::get('/loai-1', [ThongKeController::class, 'viewLoai1'])->name('viewThongKe1');
        Route::post('/loai-1', [ThongKeController::class, 'dataLoai1'])->name('dataThongKe1');
        Route::post('/loai-1/chi-tiet', [ThongKeController::class, 'dataChiTietLoai1'])->name('dataChiTietThongKe1');

        Route::get('/loai-2', [ThongKeController::class, 'viewLoai2'])->name('viewThongKe2');
        Route::post('/loai-2', [ThongKeController::class, 'dataLoai2'])->name('dataThongKe2');
        Route::post('/loai-2/chi-tiet', [ThongKeController::class, 'dataChiTietLoai2'])->name('dataChiTietThongKe2');

        Route::get('/loai-3', [ThongKeController::class, 'viewLoai3'])->name('viewThongKe3');
        Route::post('/loai-3', [ThongKeController::class, 'dataLoai3'])->name('dataThongKe3');
        Route::post('/loai-3/chi-tiet', [ThongKeController::class, 'dataChiTietLoai3'])->name('dataChiTietThongKe3');

        Route::get('/loai-4', [ThongKeController::class, 'viewLoai4'])->name('viewThongKe4');
        Route::post('/loai-4', [ThongKeController::class, 'dataLoai4'])->name('dataThongKe4');
        Route::post('/loai-4/chi-tiet', [ThongKeController::class, 'dataChiTietLoai4'])->name('dataChiTietThongKe4');

        Route::get('/loai-5', [ThongKeController::class, 'viewLoai5'])->name('viewThongKe5');
        Route::post('/loai-5', [ThongKeController::class, 'dataLoai5'])->name('dataThongKe5');
        Route::post('/loai-5/chi-tiet', [ThongKeController::class, 'dataChiTietLoai5'])->name('dataChiTietThongKe5');

        Route::get('/loai-6', [ThongKeController::class, 'viewLoai6'])->name('viewThongKe6');
        Route::post('/loai-6', [ThongKeController::class, 'dataLoai6'])->name('dataThongKe6');
        Route::post('/loai-6/chi-tiet', [ThongKeController::class, 'dataChiTietLoai6'])->name('dataChiTietThongKe6');
    });

    Route::group(['prefix' => '/tin-tuc'], function() {
        Route::get('/', [TinTucController::class, 'index'])->name('viewTinTucAdmin');
        Route::get('/data', [TinTucController::class, 'getData'])->name('dataTinTuc');
        Route::post('/create', [TinTucController::class, 'store'])->name('createTinTuc');
        Route::post('/status', [TinTucController::class, 'status'])->name('statusTinTuc');
        Route::post('/delete', [TinTucController::class, 'destroy'])->name('deleteTinTuc');
        Route::post('/update', [TinTucController::class, 'update'])->name('updateTinTuc');
        Route::post('/search', [TinTucController::class, 'search'])->name('searchTinTuc');
        Route::post('/check-slug', [TinTucController::class, 'checkSlug'])->name('checkSlugTinTuc');
        Route::post('/check-slug-update', [TinTucController::class, 'checkSlugUpdate'])->name('checkSlugUpdateTinTuc');
    });

    Route::group(['prefix' => '/profile'], function() {
        // Lấy thông tin của profile đang login
        Route::get('/', [AdminController::class, 'index_profile'])->name('viewProfileAdmin');
        Route::post('/data', [AdminController::class, 'getProfile'])->name('getProfileAdmin');
        Route::post('/update', [AdminController::class, 'updateProfile'])->name('updateProfileAdmin');
        Route::post('/update-password', [AdminController::class, 'updatePassword'])->name('updatePasswordAdmin');
    });
    //Group Admin Quản Lý Chuyên Mục
    Route::group(['prefix' => '/chuyen-muc'], function() {
        Route::get('', [ChuyenMucController::class, 'index'])->name('viewChuyenMuc');
        Route::get('/vue', [ChuyenMucController::class, 'indexNew'])->name('viewChuyenMucVue');
        Route::post('/status', [ChuyenMucController::class, 'status'])->name('statusChuyenMuc');
        Route::post('/create', [ChuyenMucController::class, 'store'])->name('createChuyenMuc');
        Route::post('/delete', [ChuyenMucController::class, 'destroy'])->name('deleteChuyenMuc');
        Route::post('/edit', [ChuyenMucController::class, 'edit'])->name('editChuyenMuc');
        Route::post('/update', [ChuyenMucController::class, 'update'])->name('updateChuyenMuc');
        Route::post('/check-slug', [ChuyenMucController::class, 'checkSlug'])->name('checkSlugChuyenMuc');
        Route::post('/check-slug-update', [ChuyenMucController::class, 'checkSlugUpdate'])->name('checkSlugUpdateChuyen');
        Route::post('/search', [ChuyenMucController::class, 'search'])->name('searchChuyenMuc');
    });

    //Group Admin Quản Lý Đại Lý
    Route::group(['prefix' => '/partner'], function() {
        Route::get('/', [PartnerController::class, 'index'])->name('viewPartner');
        Route::get('/vue', [PartnerController::class, 'index_vue'])->name('viewPartnerVue');
        Route::get('/data', [PartnerController::class, 'data'])->name('dataPartner');
        Route::post('/status', [PartnerController::class, 'status'])->name('statusPartner');
        Route::post('/create', [PartnerController::class, 'store'])->name('createPartner');
        Route::post('/delete', [PartnerController::class, 'destroy'])->name('deletePartner');
        Route::post('/edit', [PartnerController::class, 'edit'])->name('editPartner');
        Route::post('/update', [PartnerController::class, 'update'])->name('updatePartner');
        Route::post('/check-mail', [PartnerController::class, 'checkMail'])->name('checkMailPartner');
        Route::post('/check-mail-update', [PartnerController::class, 'checkMailUpdate'])->name('checkMailUpdatePartner');
        Route::post('/search', [PartnerController::class, 'search'])->name('searchPartner');
    });
});

Route::group(['middleware' => 'partner', 'prefix' => '/partner'], function() {

    Route::get('/logout', [PartnerController::class, 'logOut'])->name('partnerLogOut');

    // Route của đơn hàng
    Route::group(['prefix' => '/don-hang'], function() {
        Route::get('/', [PartnerController::class, 'viewDonHangPartner'])->name('viewDonHangPartner');
        Route::post('/', [PartnerController::class, 'dataDonHangPartner'])->name('dataDonHangPartner');
        Route::post('/doi-trang-thai', [PartnerController::class, 'doiTrangThaiDonHangPartner'])->name('doiTrangThaiDonHangPartner');
        Route::post('/chi-tiet-don-hang', [PartnerController::class, 'chiTietDonHangPartner'])->name('chiTietDonHangPartner');
        Route::post('/search', [PartnerController::class, 'searchDonHang'])->name('searchDonHang');

    });
    // Route của Sản Phẩm
    Route::group(['prefix' => '/san-pham'], function() {
        Route::get('/', [SanPhamController::class, 'index'])->name('viewSanPham');
        Route::get('/data', [SanPhamController::class, 'getData'])->name('dataSanPham');
        Route::post('/create', [SanPhamController::class, 'store'])->name('createSanPham');
        Route::post('/status', [SanPhamController::class, 'status'])->name('statusSanPham');
        Route::post('/delete', [SanPhamController::class, 'destroy'])->name('deleteSanPham');
        Route::post('/update', [SanPhamController::class, 'update'])->name('updateSanPham');
        Route::post('/search', [SanPhamController::class, 'search'])->name('searchSanPham');
    });

    Route::group(['prefix' => '/profile'], function() {
        // Lấy thông tin của profile đang    login
        Route::get('/', [PartnerController::class, 'index_profile'])->name('viewProfilePartner');
        Route::post('/data', [PartnerController::class, 'getProfile'])->name('getProfile');
        Route::post('/update', [PartnerController::class, 'updateProfile'])->name('updateProfile');
        Route::post('/update-password', [PartnerController::class, 'updatePassword'])->name('updatePassword');
    });

    Route::group(['prefix' => '/nhap-kho'], function() {
        Route::get('/', [NhapKhoController::class, 'index'])->name('viewNhapKho');
        Route::post('/data', [NhapKhoController::class, 'getData'])->name('dataTmpNhapKho');
        Route::post('/create', [NhapKhoController::class, 'store'])->name('tmpCreateNhapKho');
        Route::post('/update', [NhapKhoController::class, 'update'])->name('tmpUpdateNhapKho');
        Route::post('/store', [NhapKhoController::class, 'accpectStore'])->name('createNhapKho');
        Route::post('/delete', [NhapKhoController::class, 'destroy'])->name('deleteNhapKho');
    });

    Route::group(['prefix' => '/hoa-don-nhap-kho'], function() {
        Route::get('/', [KhoHangController::class, 'index'])->name('viewHoaDonNhapKho');
        Route::post('/data', [KhoHangController::class, 'getData'])->name('getDataHoaDonNhapHang');
        Route::post('/chi-tiet-nhap-kho', [KhoHangController::class, 'chiTietNhapKho'])->name('chiTietNhapKho');
    });

    Route::group(['prefix' => '/thong-ke'], function() {
        Route::get('/so-don-mot-ngay', [ThongKePartnerController::class, 'soDonMotNgay'])->name('viewSoDonMotNgay');
        Route::post('/so-don-mot-ngay', [ThongKePartnerController::class, 'dataSoDonMotNgay'])->name('dataSoDonMotNgay');
        Route::post('/so-don-mot-ngay/chi-tiet', [ThongKePartnerController::class, 'dataChiTietSoDonMotNgay'])->name('dataChiTietSoDonMotNgay');
        Route::get('/san-pham-ban-duoc', [ThongKePartnerController::class, 'sanPhamMotNgay'])->name('viewSanPhamMotNgay');
        Route::post('/san-pham-ban-duoc', [ThongKePartnerController::class, 'dataSanPhamMotNgay'])->name('dataSanPhamMotNgay');
        Route::post('/san-pham-ban-duoc/chi-tiet', [ThongKePartnerController::class, 'dataChiTietsanPhamMotNgay'])->name('dataChiTietsanPhamMotNgay');
        Route::get('/so-tien-mot-ngay', [ThongKePartnerController::class, 'soTienMotNgay'])->name('viewSoTienMotNgay');
        Route::post('/so-tien-mot-ngay', [ThongKePartnerController::class, 'dataSoTienMotNgay'])->name('dataSoTienMotNgay');
        Route::post('/so-tien-mot-ngay/chi-tiet', [ThongKePartnerController::class, 'dataChiTietSoTienMotNgay'])->name('dataChiTietSoTienMotNgay');
        Route::get('/khach-hang-da-mua-hang', [ThongKePartnerController::class, 'khachHangDaMuaHang'])->name('viewkhachHangDaMuaHang');
        Route::post('/khach-hang-da-mua-hang', [ThongKePartnerController::class, 'dataKhachHangDaMuaHang'])->name('dataKhachHangDaMuaHang');
        Route::post('/khach-hang-da-mua-hang/chi-tiet', [ThongKePartnerController::class, 'dataChiTietKhachHangDaMuaHang'])->name('dataChiTietKhachHangDaMuaHang');
    });
});


Route::get('/partner', [PartnerController::class, 'index_dashboards'])->name('viewDashboardsPartner');
Route::get('/partner/login', [PartnerController::class, 'viewLogin'])->name('viewLoginPartner');
Route::post('/partner/login', [PartnerController::class, 'actionLogin'])->name('actionLoginPartner');

Route::get('/admin/login', [AdminController::class, 'viewLogin'])->name('viewLoginAdmin');

