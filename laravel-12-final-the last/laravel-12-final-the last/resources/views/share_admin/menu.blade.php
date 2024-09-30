<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl"
        role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        {{-- <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand"
                        href="../../../html/ltr/horizontal-menu-template/index.html"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                        x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill:currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text mb-0">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a>
                </li>
            </ul>
        </div> --}}
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="dropdown nav-item" data-menu="dropdown"><a
                        class="dropdown-toggle nav-link d-flex align-items-center" href="index.html"
                        data-bs-toggle="dropdown"><i data-feather="home"></i><span
                            data-i18n="Dashboards">Dashboards</span></a>
                    <ul class="dropdown-menu" data-bs-popper="none">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                href="dashboard-analytics.html" data-bs-toggle="" data-i18n="Analytics"><i
                                    data-feather="activity"></i><span data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li class="active" data-menu=""><a class="dropdown-item d-flex align-items-center"
                                href="dashboard-ecommerce.html" data-bs-toggle="" data-i18n="eCommerce"><i
                                    data-feather="shopping-cart"></i><span data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul>
                </li>
                @if (Auth::guard('admin')->check() == true)
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="{{ Route('viewAdmin') }}" data-bs-toggle="" data-i18n="Profile"><i
                                data-feather="user"></i><span data-i18n="Profile">Admin</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                        href="{{ Route('viewKhuyenMai') }}" data-bs-toggle="" data-i18n="Profile"><i
                            data-feather="user"></i><span data-i18n="Profile">Mã Khuyến Mãi</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="{{ Route('viewPartnerVue') }}" data-bs-toggle="" data-i18n="Profile"><i
                                class="fa-solid fa-handshake"></i><span data-i18n="Profile">Đại Lý</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="{{ Route('viewChuyenMucVue') }}" data-bs-toggle="" data-i18n="Profile"><i
                                class="fa-solid fa-list"></i><span data-i18n="Profile">Chuyên Mục</span></a>
                    </li>
                    {{-- <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="{{ Route('viewSanPham') }}" data-bs-toggle="" data-i18n="Profile"><i
                                class="fa-brands fa-product-hunt"></i><span data-i18n="Profile">Sản Phẩm</span></a>
                    </li> --}}
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="{{ Route('viewTinTucAdmin') }}" data-bs-toggle="" data-i18n="Profile"><i
                                class="fa-solid fa-newspaper"></i><span data-i18n="Profile">Tin Tức</span></a>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href="#"
                            data-bs-toggle="dropdown"><i data-feather="box"></i><span data-i18n="Misc">Thống
                                Kê</span></a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="{{ Route('viewThongKe1') }}" data-bs-toggle="" data-i18n="Documentation"><span
                                        data-i18n="Documentation">Số Tiền Bán Được Mỗi Ngày</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="{{ Route('viewThongKe2') }}" data-bs-toggle="" data-i18n="Raise Support"><span
                                        data-i18n="Raise Support">Số Tiền Mỗi Mặt Hàng Bán Được</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="{{ Route('viewThongKe3') }}" data-bs-toggle="" data-i18n="Raise Support"><span
                                        data-i18n="Raise Support">Số Lượng Mỗi Mặt Hàng Bán Được</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="{{ Route('viewThongKe4') }}" data-bs-toggle="" data-i18n="Raise Support"><span
                                        data-i18n="Raise Support">Số Tiền Các Đại Lý Bán Được</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="{{ Route('viewThongKe5') }}" data-bs-toggle=""
                                    data-i18n="Raise Support"><span data-i18n="Raise Support">Sản Phẩm Các Đại Lý Bán
                                        Được Nhất</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="{{ Route('viewThongKe6') }}" data-bs-toggle=""
                                    data-i18n="Raise Support"><span data-i18n="Raise Support">Khách Hàng Đã Mua Tại
                                        Đại Lý</span></a>
                            </li>
                        </ul>
                    </li>
                @elseif (Auth::guard('partner')->check() == true)
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="{{ Route('viewSanPham') }}" data-bs-toggle="" data-i18n="Profile"><i
                                class="fa-brands fa-product-hunt"></i><span data-i18n="Profile">Sản Phẩm</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="{{ Route('viewDonHangPartner') }}" data-bs-toggle="" data-i18n="Profile"><i
                                class="fa-solid fa-file-invoice"></i><span data-i18n="Profile">Đơn Hàng</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="{{ Route('viewNhapKho') }}" data-bs-toggle="" data-i18n="Profile"><i
                                class="fa-solid fa-file-import"></i><span data-i18n="Profile">Nhập Kho</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="{{ Route('viewHoaDonNhapKho') }}" data-bs-toggle="" data-i18n="Profile"><i
                                class="fa-solid fa-file-invoice-dollar"></i><span data-i18n="Profile">Đơn Nhập
                                Kho</span></a>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a
                            class="dropdown-toggle nav-link d-flex align-items-center" href="#"
                            data-bs-toggle="dropdown"><i class="fa-solid fa-chart-column"></i><span
                                data-i18n="Misc">Thống
                                Kê</span></a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="{{ Route('viewSoDonMotNgay') }}" data-bs-toggle=""
                                    data-i18n="Documentation"><span data-i18n="Documentation">Số Đơn Trong Một
                                        Ngày</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                    href="{{ Route('viewSanPhamMotNgay') }}" data-bs-toggle=""
                                    data-i18n="Documentation"><span data-i18n="Documentation">Số Sản Phẩm Trong Một
                                        Ngày</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                href="{{ Route('viewSoTienMotNgay') }}" data-bs-toggle=""
                                data-i18n="Documentation"><span data-i18n="Documentation">Số Tiền Thu Được Trong Một
                                    Ngày</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                href="{{ Route('viewkhachHangDaMuaHang') }}" data-bs-toggle=""
                                data-i18n="Raise Support"><span data-i18n="Raise Support">Khách Hàng Đã Mua Tại
                                    Đại Lý</span></a>
                            </li>
                        </ul>
                    </li>
                @endif

                {{-- <li class="dropdown nav-item" data-menu="dropdown"><a
                        class="dropdown-toggle nav-link d-flex align-items-center" href="#"
                        data-bs-toggle="dropdown"><i data-feather="box"></i><span data-i18n="Misc">Misc</span></a>
                    <ul class="dropdown-menu" data-bs-popper="none">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" data-i18n="Menu Levels"><i data-feather="menu"></i><span
                                    data-i18n="Menu Levels">Menu Levels</span></a>
                            <ul class="dropdown-menu" data-bs-popper="none">
                                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="#"
                                        data-bs-toggle="" data-i18n="Second Level"><i data-feather="circle"></i><span
                                            data-i18n="Second Level">Second Level
                                            2.1</span></a>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" data-i18n="Second Level"><i
                                            data-feather="circle"></i><span data-i18n="Second Level">Second Level
                                            2.2</span></a>
                                    <ul class="dropdown-menu" data-bs-popper="none">
                                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="#" data-bs-toggle="" data-i18n="Third Level"><i
                                                    data-feather="circle"></i><span data-i18n="Third Level">Third
                                                    Level 3.1</span></a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="#" data-bs-toggle="" data-i18n="Third Level"><i
                                                    data-feather="circle"></i><span data-i18n="Third Level">Third
                                                    Level 3.2</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="disabled" data-menu=""><a class="dropdown-item d-flex align-items-center"
                                href="" data-bs-toggle="" data-i18n="Disabled Menu"><i
                                    data-feather="eye-off"></i><span data-i18n="Disabled Menu">Disabled
                                    Menu</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"
                                data-bs-toggle="" data-i18n="Documentation" target="_blank"><i
                                    data-feather="folder"></i><span data-i18n="Documentation">Documentation</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                href="https://pixinvent.ticksy.com/" data-bs-toggle="" data-i18n="Raise Support"
                                target="_blank"><i data-feather="life-buoy"></i><span data-i18n="Raise Support">Raise
                                    Support</span></a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
<!-- END: Main Menu-->
