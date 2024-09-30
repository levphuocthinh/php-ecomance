<!-- Start header area -->
<header class="header__section">
    <div id="app_header">
        <div class="main__header header__sticky">
            <div class="container">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                            </svg>
                            <span class="visually-hidden">Offcanvas Menu Open</span>
                        </a>
                    </div>
                    <div class="main__logo">
                        <h1 class="main__logo--title"><a class="main__logo--link" href="/"><img
                                    class="main__logo--img" src="/assets_user/img/logo/nav-log.webp" alt="logo-img"></a>
                        </h1>
                    </div>
                    <div class="header__search--widget d-none d-lg-block header__sticky--none">
                        <form class="d-flex header__search--form border-radius-5" action="#">
                            <div class="header__select--categories select">
                                <select class="header__select--inner">
                                    <option selected value="1"> All categories</option>
                                    <option value="2">Accessories</option>
                                    <option value="3">Accessories & More</option>
                                    <option value="4">Camera & Video </option>
                                    <option value="5">Butters & Eggs </option>
                                </select>
                            </div>
                            <div class="header__search--box">
                                <label>
                                    <input class="header__search--input" placeholder="Search For Products..."
                                        type="text">
                                </label>
                                <button class="header__search--button bg__primary text-white" aria-label="search button"
                                    type="submit">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="header__menu d-none d-lg-block header__sticky--block">
                        <nav class="header__menu--navigation">
                            <ul class="header__menu--wrapper d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{ Route::is('HomePageUser') ? 'active' : '' }}" href="/">Home Page </a>
                                </li>
                                {{-- <li class="header__menu--items">
                                    <a class="header__menu--link text-white active" href="blog.html">Blog
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                            width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="blog.html"
                                                class="header__sub--menu__link">Blog Grid</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-details.html"
                                                class="header__sub--menu__link">Blog Details</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-left-sidebar.html"
                                                class="header__sub--menu__link">Blog Left Sidebar</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-right-sidebar.html"
                                                class="header__sub--menu__link">Blog Right Sidebar</a></li>
                                    </ul>
                                </li> --}}
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{ Route::is('allProduct') ? 'active' : '' }}" href="{{ Route('allProduct') }}">Tất Cả Sản Phẩm </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{ Route::is('showNews') ? 'active' : '' }}" href="{{ Route('showNews') }}">Tin Tức </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    @if (Auth::guard('user')->check())
                        <div class="header__account header__sticky--none">
                            <ul class="header__account--wrapper d-flex align-items-center">
                                <li class="header__account--items d-none d-lg-block">
                                    <a class="header__account--btn" href="{{ Route('viewCustomerProfile') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class=" -user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="visually-hidden">My account</span>
                                    </a>
                                </li>

                                <li
                                    class="header__account--items  header__account--search__items mobile__d--block d-sm-2-none">
                                    <a class="header__account--btn search__open--btn" href="javascript:void(0)"
                                        data-offcanvas>
                                        <svg class="product__items--action__btn--svg"
                                            xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                stroke-width="32" />
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-miterlimit="10" stroke-width="32"
                                                d="M338.29 338.29L448 448" />
                                        </svg>
                                        <span class="visually-hidden">Search</span>
                                    </a>
                                </li>

                                <li class="header__account--items d-none d-lg-block">
                                    <a class="header__account--btn" href="{{ Route('viewCustomerWishlist') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class=" -heart">
                                            <path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                            </path>
                                        </svg>
                                        <span class="items__count" id="yeu_thich_1"></span>
                                    </a>
                                </li>
                                <li class="header__account--items header__minicart--items">
                                    <a v-on:click="loadData()" class="header__account--btn minicart__open--btn"
                                        href="javascript:void(0)" data-offcanvas>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.706" height="22.534"
                                            viewBox="0 0 14.706 13.534">
                                            <g transform="translate(0 0)">
                                                <g>
                                                    <path data-name="Path 16787"
                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                        transform="translate(0 -463.248)" fill="currentColor" />
                                                    <path data-name="Path 16788"
                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                        transform="translate(-1.191 -466.622)" fill="currentColor" />
                                                    <path data-name="Path 16789"
                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                        transform="translate(-2.875 -466.622)" fill="currentColor" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="items__count" id="so_luong_cart_1"></span>
                                        <span class="minicart__btn--text">My Cart <br>
                                        </span>
                                    </a>
                                </li>
                                <li class="header__account--items">
                                    <a class="header__account--btn" href="{{ Route('customerLogOut') }}">
                                        <i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__account header__sticky--block">
                            <ul class="header__account--wrapper d-flex align-items-center">
                                <li class="header__account--items  header__account--search__items d-sm-2-none">
                                    <a class="header__account--btn search__open--btn" href="javascript:void(0)"
                                        data-offcanvas>
                                        <svg class="product__items--action__btn--svg"
                                            xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                stroke-width="32" />
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-miterlimit="10" stroke-width="32"
                                                d="M338.29 338.29L448 448" />
                                        </svg>
                                        <span class="visually-hidden">Search</span>
                                    </a>
                                </li>
                                <li class="header__account--items d-none d-lg-block">
                                    <a class="header__account--btn" href="{{ Route('viewCustomerProfile') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class=" -user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="visually-hidden">My account</span>
                                    </a>
                                </li>
                                <li class="header__account--items d-none d-lg-block">
                                    <a class="header__account--btn" href="{{ Route('viewCustomerWishlist') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class=" -heart">
                                            <path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                            </path>
                                        </svg>
                                        <span class="items__count" id="yeu_thich_2"></span>
                                    </a>
                                </li>
                                <li class="header__account--items header__minicart--items">
                                    <a v-on:click="loadData()" class="header__account--btn minicart__open--btn"
                                        href="javascript:void(0)" data-offcanvas>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.706" height="22.534"
                                            viewBox="0 0 14.706 13.534">
                                            <g transform="translate(0 0)">
                                                <g>
                                                    <path data-name="Path 16787"
                                                        d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                        transform="translate(0 -463.248)" fill="currentColor" />
                                                    <path data-name="Path 16788"
                                                        d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                        transform="translate(-1.191 -466.622)" fill="currentColor" />
                                                    <path data-name="Path 16789"
                                                        d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                        transform="translate(-2.875 -466.622)" fill="currentColor" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="items__count" id="so_luong_cart_2"></span>
                                    </a>
                                </li>
                                <li class="header__account--items header__minicart--items">
                                    <a class="header__account--btn" href="{{ Route('customerLogOut') }}">
                                        <i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="header__account header__sticky--none">
                            <ul class="header__account--wrapper d-flex align-items-center">
                                <li class="header__account--items d-none d-lg-block">
                                    <a class="header__account--btn" href="/auth">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class=" -user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="visually-hidden">My account</span>
                                    </a>
                                </li>

                                <li
                                    class="header__account--items  header__account--search__items mobile__d--block d-sm-2-none">
                                    <a class="header__account--btn search__open--btn" href="javascript:void(0)"
                                        data-offcanvas>
                                        <svg class="product__items--action__btn--svg"
                                            xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                stroke-width="32" />
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-miterlimit="10" stroke-width="32"
                                                d="M338.29 338.29L448 448" />
                                        </svg>
                                        <span class="visually-hidden">Search</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__account header__sticky--block">
                            <ul class="header__account--wrapper d-flex align-items-center">
                                <li class="header__account--items  header__account--search__items d-sm-2-none">
                                    <a class="header__account--btn search__open--btn" href="javascript:void(0)"
                                        data-offcanvas>
                                        <svg class="product__items--action__btn--svg"
                                            xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                stroke-width="32" />
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-miterlimit="10" stroke-width="32"
                                                d="M338.29 338.29L448 448" />
                                        </svg>
                                        <span class="visually-hidden">Search</span>
                                    </a>
                                </li>
                                <li class="header__account--items d-none d-lg-block">
                                    <a class="header__account--btn" href="/auth">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class=" -user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="visually-hidden">My account</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="header__bottom bg__primary">
            <div class="container">
                <div class="header__bottom--inner position__relative d-flex align-items-center">
                    <div class="categories__menu ">
                        <div class="categories__menu--header bg__secondary text-white d-flex align-items-center"
                            data-bs-toggle="collapse" data-bs-target="#categoriesAccordion">
                            <svg class="categories__list--icon" width="18" height="15" viewBox="0 0 18 15"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="13" height="1.5" fill="currentColor" />
                                <rect y="4.44434" width="18" height="1.5" fill="currentColor" />
                                <rect y="8.88892" width="15" height="1.5" fill="currentColor" />
                                <rect y="13.3333" width="17" height="1.5" fill="currentColor" />
                            </svg>

                            <span class="categories__menu--title">Select catagories</span>
                            <svg class="categories__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                    transform="translate(-6 -8.59)" fill="currentColor" />
                            </svg>
                        </div>
                        <div class="dropdown__categories--menu border-radius-5 active collapse {{ Route::is('HomePageUser') ? 'show' : '' }}"
                            id="categoriesAccordion">
                            <ul class="d-none d-lg-block">
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <rect x="2" y="3" width="20" height="14"
                                                rx="2" ry="2"></rect>
                                            <line x1="8" y1="21" x2="16" y2="21">
                                            </line>
                                            <line x1="12" y1="17" x2="12" y2="21">
                                            </line>
                                        </svg>
                                        Lighting
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                            <path
                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <rect x="6" y="14" width="12" height="8">
                                            </rect>
                                        </svg> Smart Devices

                                        <svg class="categories__menu--right__arrow--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831"
                                            viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="48"
                                                d="M184 112l144 144-144 144" />
                                        </svg>
                                    </a>
                                    <ul class="categories__submenu border-radius-10 d-flex justify-content-between">
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text" href="shop.html"><strong>Body
                                                    Parts</strong></a>
                                            <ul class="categories__submenu--child">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Brake Calipers </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Engine Oil </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Motor Oil </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Oil Filters </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text"
                                                href="shop.html"><strong>Interior Parts</strong></a>
                                            <ul class="categories__submenu--child">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Air Boxes </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Tail Lights </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Mobile Electronics </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Car Covers </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text"
                                                href="shop.html"><strong>Engine & Drivetrain</strong></a>
                                            <ul class="categories__submenu--child">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Bumpers </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Hoods </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">care kits </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Fog Lights </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text"
                                                href="shop.html"><strong>Fluids & Chemicals</strong></a>
                                            <ul class="categories__submenu--child">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Cabin Air Filters </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Pistons liners </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Oil & lubricants </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html"> Paintworks
                                                    </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text"
                                                href="shop.html"><strong>Cargo Accessories</strong></a>
                                            <ul class="categories__submenu--child">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Body Parts </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Engine Parts </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Tires & Wheels </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Repair Parts </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items">
                                            <a class="categories__submenu--thumbnail" href="shop.html">
                                                <img src="/assets_user/img/product/main-product/product1.webp"
                                                    alt="categories-img">
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <rect x="2" y="7" width="20" height="15"
                                                rx="2" ry="2"></rect>
                                            <polyline points="17 2 12 7 7 2"></polyline>
                                        </svg> Paintworks
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                            <line x1="6" y1="1" x2="6" y2="4">
                                            </line>
                                            <line x1="10" y1="1" x2="10" y2="4">
                                            </line>
                                            <line x1="14" y1="1" x2="14" y2="4">
                                            </line>
                                        </svg> Replacement Parts
                                        <svg class="categories__menu--right__arrow--icon"
                                            xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831"
                                            viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="48"
                                                d="M184 112l144 144-144 144" />
                                        </svg>
                                    </a>
                                    <ul
                                        class="categories__submenu style2 border-radius-10 d-flex justify-content-between">
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text"
                                                href="shop.html"><strong>Fluids & Chemicals</strong></a>
                                            <ul class="categories__submenu--child">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Cabin Air Filters </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Pistons liners </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Oil & lubricants </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html"> Paintworks
                                                    </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text"
                                                href="shop.html"><strong>Interior Parts</strong></a>
                                            <ul class="categories__submenu--child">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Air Boxes </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Tail Lights </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Mobile Electronics </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Car Covers </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text"
                                                href="shop.html"><strong>Engine & Drivetrain</strong></a>
                                            <ul class="categories__submenu--child">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Bumpers </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Hoods </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Fog Lights </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html"> Engine Partses </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text" href="shop.html"><strong>Body
                                                    Parts</strong></a>
                                            <ul class="categories__submenu--child">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Brake Calipers </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Engine Oil </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Motor Oil </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Oil Filters </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <rect x="4" y="4" width="16" height="16"
                                                rx="2" ry="2"></rect>
                                            <rect x="9" y="9" width="6" height="6">
                                            </rect>
                                            <line x1="9" y1="1" x2="9" y2="4">
                                            </line>
                                            <line x1="15" y1="1" x2="15" y2="4">
                                            </line>
                                            <line x1="9" y1="20" x2="9" y2="23">
                                            </line>
                                            <line x1="15" y1="20" x2="15" y2="23">
                                            </line>
                                            <line x1="20" y1="9" x2="23" y2="9">
                                            </line>
                                            <line x1="20" y1="14" x2="23" y2="14">
                                            </line>
                                            <line x1="1" y1="9" x2="4" y2="9">
                                            </line>
                                            <line x1="1" y1="14" x2="4" y2="14">
                                            </line>
                                        </svg> Car Parts
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <line x1="22" y1="12" x2="2" y2="12">
                                            </line>
                                            <path
                                                d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                            </path>
                                            <line x1="6" y1="16" x2="6.01" y2="16">
                                            </line>
                                            <line x1="10" y1="16" x2="10.01" y2="16">
                                            </line>
                                        </svg>Gaming Toiys
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                            <polyline points="2 17 12 22 22 17"></polyline>
                                            <polyline points="2 12 12 17 22 12"></polyline>
                                        </svg> Oil Fluids
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M4 11a9 9 0 0 1 9 9"></path>
                                            <path d="M4 4a16 16 0 0 1 16 16"></path>
                                            <circle cx="5" cy="19" r="1"></circle>
                                        </svg> Baby Car Seat
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M322 416c0 35.35-20.65 64-56 64H134c-35.35 0-56-28.65-56-64M336 336c17.67 0 32 17.91 32 40h0c0 22.09-14.33 40-32 40H64c-17.67 0-32-17.91-32-40h0c0-22.09 14.33-40 32-40"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-miterlimit="10" stroke-width="32" />
                                            <path
                                                d="M344 336H179.31a8 8 0 00-5.65 2.34l-26.83 26.83a4 4 0 01-5.66 0l-26.83-26.83a8 8 0 00-5.65-2.34H56a24 24 0 01-24-24h0a24 24 0 0124-24h288a24 24 0 0124 24h0a24 24 0 01-24 24zM64 276v-.22c0-55 45-83.78 100-83.78h72c55 0 100 29 100 84v-.22M241 112l7.44 63.97"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-miterlimit="10" stroke-width="32" />
                                            <path d="M256 480h139.31a32 32 0 0031.91-29.61L463 112" fill="none"
                                                stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                                stroke-width="32" />
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="32" d="M368 112l16-64 47-16" />
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-miterlimit="10" stroke-width="32" d="M224 112h256" />
                                        </svg> Bread & Bakery
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <rect x="2" y="7" width="20" height="14"
                                                rx="2" ry="2"></rect>
                                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                        </svg> Engine Parts
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M3 3l7.07 16.97 2.51-7.39 7.39-2.51L3 3z"></path>
                                            <path d="M13 13l6 6"></path>
                                        </svg> Car & Motorbike Care
                                    </a>
                                </li>
                            </ul>
                            <nav class="category__mobile--menu">
                                <ul class="category__mobile--menu_ul">
                                    <li class="categories__menu--items">
                                        <a class="categories__menu--link" href="shop.html">
                                            <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <rect x="2" y="3" width="20" height="14"
                                                    rx="2" ry="2"></rect>
                                                <line x1="8" y1="21" x2="16" y2="21">
                                                </line>
                                                <line x1="12" y1="17" x2="12" y2="21">
                                                </line>
                                            </svg> Lighting
                                        </a>
                                    </li>
                                    <li class="categories__menu--items">
                                        <a class="categories__menu--link" href="shop.html">
                                            <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                <path
                                                    d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                                </path>
                                                <rect x="6" y="14" width="12" height="8">
                                                </rect>
                                            </svg> Smart Devices
                                        </a>
                                        <ul class="category__sub--menu">
                                            <li class="categories__submenu--items"><a
                                                    class="categories__submenu--items__text" href="shop.html">Body
                                                    Parts</a>
                                                <ul class="category__sub--menu">
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Brake Calipers </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Oil and Vinegar </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Engine Oil </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Oil Filters </a></li>
                                                </ul>
                                            </li>
                                            <li class="categories__submenu--items"><a
                                                    class="categories__submenu--items__text" href="shop.html">Interior
                                                    Parts</a>
                                                <ul class="category__sub--menu">
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Air Boxes </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Tail Lights </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Mobile Electronic </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Car Covers </a></li>
                                                </ul>
                                            </li>
                                            <li class="categories__submenu--items"><a
                                                    class="categories__submenu--items__text" href="shop.html">Engine
                                                    & Drivetrain</a>
                                                <ul class="category__sub--menu">
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Cabin Air Filters </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Pistons liners </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Bread and Juice </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Paintworks </a></li>
                                                </ul>
                                            </li>
                                            <li class="categories__submenu--items"><a
                                                    class="categories__submenu--items__text" href="shop.html">Cargo
                                                    Accessories</a>
                                                <ul class="category__sub--menu">
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Body Parts </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Engine Parts</a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Tires & Wheels </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Repair Parts </a></li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </li>
                                    <li class="categories__menu--items">
                                        <a class="categories__menu--link" href="shop.html">
                                            <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <rect x="2" y="7" width="20" height="15"
                                                    rx="2" ry="2"></rect>
                                                <polyline points="17 2 12 7 7 2"></polyline>
                                            </svg> Paintworks
                                        </a>
                                    </li>
                                    <li class="categories__menu--items">
                                        <a class="categories__menu--link" href="shop.html">
                                            <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                                <line x1="6" y1="1" x2="6" y2="4">
                                                </line>
                                                <line x1="10" y1="1" x2="10" y2="4">
                                                </line>
                                                <line x1="14" y1="1" x2="14" y2="4">
                                                </line>
                                            </svg> Replacement Parts
                                        </a>
                                        <ul class="category__sub--menu">
                                            <li class="categories__submenu--items"><a
                                                    class="categories__submenu--items__text" href="shop.html">Body
                                                    Parts</a>
                                                <ul class="category__sub--menu">
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Brake Calipers </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Oil and Vinegar </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Engine Oil </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Oil Filters </a></li>
                                                </ul>
                                            </li>
                                            <li class="categories__submenu--items"><a
                                                    class="categories__submenu--items__text"
                                                    href="shop.html">Interior
                                                    Parts</a>
                                                <ul class="category__sub--menu">
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Air Boxes </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Tail Lights </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Mobile Electronic </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Car Covers </a></li>
                                                </ul>
                                            </li>
                                            <li class="categories__submenu--items"><a
                                                    class="categories__submenu--items__text" href="shop.html">Engine
                                                    & Drivetrain</a>
                                                <ul class="category__sub--menu">
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Cabin Air Filters </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Pistons liners </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Bread and Juice </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Paintworks </a></li>
                                                </ul>
                                            </li>
                                            <li class="categories__submenu--items"><a
                                                    class="categories__submenu--items__text" href="shop.html">Cargo
                                                    Accessories</a>
                                                <ul class="category__sub--menu">
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Body Parts </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Engine Parts</a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Tires & Wheels </a></li>
                                                    <li class="categories__submenu--child__items"><a
                                                            class="categories__submenu--child__items--link"
                                                            href="shop.html">Repair Parts </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="categories__menu--items">
                                        <a class="categories__menu--link" href="shop.html">
                                            <svg class="categories__menu--svgicon"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <circle cx="256" cy="184" r="120"
                                                    fill="none" stroke="currentColor" stroke-linejoin="round"
                                                    stroke-width="32" />
                                                <circle cx="344" cy="328" r="120"
                                                    fill="none" stroke="currentColor" stroke-linejoin="round"
                                                    stroke-width="32" />
                                                <circle cx="168" cy="328" r="120"
                                                    fill="none" stroke="currentColor" stroke-linejoin="round"
                                                    stroke-width="32" />
                                            </svg> Beauty & Care
                                        </a>
                                    </li>
                                    <li class="categories__menu--items">
                                        <a class="categories__menu--link" href="shop.html">
                                            <svg class="categories__menu--svgicon"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="4" y="4" width="16"
                                                    height="16" rx="2" ry="2"></rect>
                                                <rect x="9" y="9" width="6"
                                                    height="6"></rect>
                                                <line x1="9" y1="1" x2="9"
                                                    y2="4"></line>
                                                <line x1="15" y1="1" x2="15"
                                                    y2="4"></line>
                                                <line x1="9" y1="20" x2="9"
                                                    y2="23"></line>
                                                <line x1="15" y1="20" x2="15"
                                                    y2="23"></line>
                                                <line x1="20" y1="9" x2="23"
                                                    y2="9"></line>
                                                <line x1="20" y1="14" x2="23"
                                                    y2="14"></line>
                                                <line x1="1" y1="9" x2="4"
                                                    y2="9"></line>
                                                <line x1="1" y1="14" x2="4"
                                                    y2="14"></line>
                                            </svg> Car Parts
                                        </a>
                                    </li>
                                    <li class="categories__menu--items">
                                        <a class="categories__menu--link" href="shop.html">
                                            <svg class="categories__menu--svgicon"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="22" y1="12" x2="2"
                                                    y2="12"></line>
                                                <path
                                                    d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                                </path>
                                                <line x1="6" y1="16" x2="6.01"
                                                    y2="16"></line>
                                                <line x1="10" y1="16" x2="10.01"
                                                    y2="16"></line>
                                            </svg>Gaming Toiys
                                        </a>
                                    </li>
                                    <li class="categories__menu--items">
                                        <a class="categories__menu--link" href="shop.html">
                                            <svg class="categories__menu--svgicon"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                                <polyline points="2 17 12 22 22 17"></polyline>
                                                <polyline points="2 12 12 17 22 12"></polyline>
                                            </svg> Oil Fluids
                                        </a>
                                    </li>
                                    <li class="categories__menu--items">
                                        <a class="categories__menu--link" href="shop.html">
                                            <svg class="categories__menu--svgicon"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M4 11a9 9 0 0 1 9 9"></path>
                                                <path d="M4 4a16 16 0 0 1 16 16"></path>
                                                <circle cx="5" cy="19" r="1"></circle>
                                            </svg> Baby Car Seat
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header__right--area d-flex justify-content-between align-items-center">
                        <div class="header__menu">
                            <nav class="header__menu--navigation">
                                <ul class="header__menu--wrapper d-flex">
                                    <li class="header__menu--items">
                                        <a class="header__menu--link text-white {{ Route::is('HomePageUser') ? 'active' : '' }}" href="/">Home Page </a>
                                    </li>
                                    {{-- <li class="header__menu--items">
                                        <a class="header__menu--link text-white" href="index.html">Home
                                            <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                                width="12" height="7.41" viewBox="0 0 12 7.41">
                                                <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                    transform="translate(-6 -8.59)" fill="currentColor"
                                                    opacity="0.7" />
                                            </svg>
                                        </a>
                                        <ul class="header__sub--menu">
                                            <li class="header__sub--menu__items"><a href="index.html"
                                                    class="header__sub--menu__link">Home One</a></li>
                                            <li class="header__sub--menu__items"><a href="index-2.html"
                                                    class="header__sub--menu__link">Home Two</a></li>
                                            <li class="header__sub--menu__items"><a href="index-3.html"
                                                    class="header__sub--menu__link">Home Three</a></li>
                                            <li class="header__sub--menu__items"><a href="index-4.html"
                                                    class="header__sub--menu__link">Home Four</a></li>
                                            <li class="header__sub--menu__items"><a href="index-5.html"
                                                    class="header__sub--menu__link">Home Five</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="header__menu--items mega__menu--items">
                                        <a class="header__menu--link text-white" href="shop.html">Shop
                                            <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                                width="12" height="7.41" viewBox="0 0 12 7.41">
                                                <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                    transform="translate(-6 -8.59)" fill="currentColor"
                                                    opacity="0.7" />
                                            </svg>
                                        </a>
                                        <ul class="header__mega--menu d-flex">
                                            <li class="header__mega--menu__li">
                                                <ul class="header__mega--sub__menu">
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="shop.html">Shop Left Sidebar</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="shop-grid.html">Shop Grid</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="shop-grid-list.html">Shop Grid List</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="shop-list.html">Shop List</a></li>
                                                </ul>
                                            </li>
                                            <li class="header__mega--menu__li">
                                                <ul class="header__mega--sub__menu">
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="product-details.html">Product Details</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="product-video.html">Video Product</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="product-details.html">Variable Product</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="product-left-sidebar.html">Product Left Sidebar</a>
                                                    </li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="product-gallery.html">Product Gallery</a></li>
                                                </ul>
                                            </li>
                                            <li class="header__mega--menu__li">
                                                <ul class="header__mega--sub__menu">
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="my-account.html">My Account</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="my-account-2.html">My Account 2</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="404.html">404 Page</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="login.html">Login Page</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="faq.html">Faq Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="header__mega--menu__li">
                                                <ul class="header__mega--sub__menu">
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="about.html">About Us</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="contact.html">Contact Us</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="portfolio.html">Portfolio</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="compare.html">Compare</a></li>
                                                    <li class="header__mega--sub__menu_li"><a
                                                            class="header__mega--sub__menu--title"
                                                            href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="header__mega--menu__li fullscreen__style d-flex">
                                                <a class="header__mega--menu__banner display-block"
                                                    href="shop.html"><img class="header__mega--menu__banner--img"
                                                        src="/assets_user/img/banner/banner1.webp"
                                                        alt="banner-menu">
                                                    <div class="banner__content">
                                                        <span
                                                            class="banner__content--subtitle text__secondary mb-10">20%
                                                            off</span>
                                                        <h2 class="banner__content--title"><span
                                                                class="banner__content--title__inner">New</span>
                                                            COLLECTION</h2>
                                                        <span class="banner__content--price">$22.99</span>
                                                    </div>
                                                </a>
                                                <a class="header__mega--menu__banner display-block"
                                                    href="shop.html"><img class="header__mega--menu__banner--img"
                                                        src="/assets_user/img/banner/banner2.webp"
                                                        alt="banner-menu">
                                                    <div class="banner__content right">
                                                        <span class="banner__badge--style2">20% Off</span>
                                                        <h2 class="banner__content--title"><span
                                                                class="banner__content--title__inner"> ON </span> SALE
                                                            <br> PRODUCT
                                                        </h2>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="header__menu--items">
                                        <a class="header__menu--link text-white active" href="blog.html">Blog
                                            <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                                width="12" height="7.41" viewBox="0 0 12 7.41">
                                                <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                    transform="translate(-6 -8.59)" fill="currentColor"
                                                    opacity="0.7" />
                                            </svg>
                                        </a>
                                        <ul class="header__sub--menu">
                                            <li class="header__sub--menu__items"><a href="blog.html"
                                                    class="header__sub--menu__link">Blog Grid</a></li>
                                            <li class="header__sub--menu__items"><a href="blog-details.html"
                                                    class="header__sub--menu__link">Blog Details</a></li>
                                            <li class="header__sub--menu__items"><a href="blog-left-sidebar.html"
                                                    class="header__sub--menu__link">Blog Left Sidebar</a></li>
                                            <li class="header__sub--menu__items"><a href="blog-right-sidebar.html"
                                                    class="header__sub--menu__link">Blog Right Sidebar</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class="header__menu--items">
                                        <a class="header__menu--link text-white {{ Route::is('allProduct') ? 'active' : '' }}"
                                            href="{{ Route('allProduct') }}">Tất Cả Sản Phẩm </a>
                                    </li>
                                    <li class="header__menu--items">
                                        <a class="header__menu--link text-white {{ Route::is('showNews') ? 'active' : '' }}" href="{{ Route('showNews') }}">Tin Tức </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="predictive__search--box ">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Search Products</h2>
                <form class="predictive__search--form" action="#">
                    <label>
                        <input class="predictive__search--input" placeholder="Search Here" type="text">
                    </label>
                    <button class="predictive__search--button text-white" aria-label="search button"><svg
                            class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                            width="30.51" height="25.443" viewBox="0 0 512 512">
                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                        </svg> </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                    height="30.443" viewBox="0 0 512 512">
                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                </svg>
            </button>
        </div>
        @php
            $checklogin = Auth::guard('user')->check();
        @endphp
        @if ($checklogin)
            <div class="offCanvas__minicart">
                <div class="minicart__header ">
                    <div class="minicart__header--top d-flex justify-content-between align-items-center">
                        <h3 class="minicart__title"> Shopping Cart</h3>
                        <button class="minicart__close--btn" aria-label="minicart close btn" data-offcanvas>
                            <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="32"
                                    d="M368 368L144 144M368 144L144 368" />
                            </svg>
                        </button>
                    </div>
                    <p class="minicart__header--desc">The organic foods products are limited</p>
                </div>
                <div class="minicart__product">
                    <template v-for="(k, v) in list">
                        <div class="minicart__product--items d-flex">
                            <div class="minicart__thumb">
                                <a v-bind:href="'/product-detail/' + v.id_san_pham"><img v-bind:src="v.hinh_anh"
                                        alt="prduct-img"></a>
                            </div>
                            <div class="minicart__text">
                                <h4 class="minicart__subtitle"><a
                                        v-bind:href="'/product-detail/' + v.id_san_pham">@{{ v.ten_san_pham }}</a>
                                </h4>
                                <div class="minicart__price">
                                    <span class="minicart__current--price">@{{ numberFormat(v.gia_khuyen_mai) }}</span>
                                    <span class="minicart__old--price">@{{ numberFormat(v.gia_ban) }}</span>
                                </div>
                                <div class="minicart__text--footer d-flex align-items-center">
                                    <div class="quantity__box minicart__quantity">
                                        <button type="button" v-on:click="tru(v)"
                                            class="quantity__value decrease" aria-label="Giảm số lượng"
                                            value="Giảm giá trị">-</button>
                                        <label>
                                            <input v-model="v.so_luong" v-on:change="update(v)" type="number"
                                                class="quantity__number" data-counter />
                                        </label>
                                        <button type="button" v-on:click="cong(v)"
                                            class="quantity__value increase" aria-label="Tăng số lượng"
                                            value="Tăng giá trị">+</button>
                                    </div>
                                    <button v-on:click="destroy(v)" class="minicart__product--remove"
                                        type="button">Remove</button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <div class="minicart__amount">
                    <div class="minicart__amount_list d-flex justify-content-between">
                        <span>Sub Total:</span>
                        <span id="subTotal"><b></b></span>
                    </div>

                </div>
                <div class="minicart__button d-flex justify-content-center">
                    <a class="primary__btn minicart__button--link" href="{{ Route('viewCheckout') }}">Checkout</a>
                </div>
            </div>
        @endif
    </div>
    <!-- End serch box area -->
    <script>
        $(document).ready(function() {
            new Vue({
                el: '#app_header',
                data: {
                    list: [],
                },
                created() {
                    this.loadData();
                    this.loadDataWishlist();
                },
                methods: {
                    loadData() {
                        axios
                            .get('{{ Route('dataGioHang') }}')
                            .then((res) => {
                                this.list = res.data.data;
                                subTotal = res.data.subTotal;
                                so_luong_cart_1 = res.data.so_luong;
                                so_luong_cart_2 = res.data.so_luong;
                                $("#so_luong_cart_1").html(so_luong_cart_1);
                                $("#so_luong_cart_2").html(so_luong_cart_2);
                                $("#subTotal").html(this.numberFormat(subTotal));
                                // document.getElementById("so_luong_cart").innerHTML = so_luong_cart;
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                    loadDataWishlist() {
                        axios
                            .post('{{ Route('dataCustomerWishlist') }}')
                            .then((res) => {
                                yeu_thich_1 = res.data.yeu_thich;
                                yeu_thich_2 = res.data.yeu_thich;
                                $("#yeu_thich_1").html(yeu_thich_1);
                                $("#yeu_thich_2").html(yeu_thich_2);
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                    numberFormat(number) {
                        return new Intl.NumberFormat('vi-VI', {
                            style: 'currency',
                            currency: 'VND'
                        }).format(number);
                    },
                    destroy(value) {
                        axios
                            .post('{{ Route('deleteGioHang') }}', value)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, "Success!");
                                    this.loadData();
                                } else {
                                    toastr.error(res.data.message, "Error!");
                                    this.loadData();
                                }
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0]);
                                });
                            });
                    },
                    cong(v) {
                        v.so_luong++;
                        this.update(v);
                    },
                    tru(v) {
                        v.so_luong--;
                        this.update(v);
                    },
                    update(v) {
                        axios
                            .post('{{ Route('updateGioHang') }}', v)
                            .then((res) => {
                                if (res.data.status) {
                                    // toastr.success(res.data.message, "Success!");
                                    this.loadData();
                                } else {
                                    toastr.error(res.data.message, "Error!");
                                    this.loadData();
                                }
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0]);
                                });
                            });
                    },
                },
            });
        })
    </script>
</header>
<!-- End header area -->
