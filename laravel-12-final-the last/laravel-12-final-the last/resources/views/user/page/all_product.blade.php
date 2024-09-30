@extends('user.share.master')
@section('content')
    <div id="app">
        <div class="offcanvas__filter--sidebar widget__area">
            <button type="button" class="offcanvas__filter--close" data-offcanvas>
                <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
                </svg> <span class="offcanvas__filter--close__text">Close</span>
            </button>
            <div class="offcanvas__filter--sidebar__inner">
                <div class="single__widget widget__bg">
                    <h2 class="widget__title h3">Categories</h2>
                    <ul class="widget__categories--menu">
                        <li class="widget__categories--menu__list">
                            <label class="widget__categories--menu__label d-flex align-items-center">
                                <img class="widget__categories--menu__img"
                                    src="/assets_user/img/product/small-product/product1.webp" alt="categories-img">
                                <span class="widget__categories--menu__text">Smart Devices</span>
                                <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                    width="12.355" height="8.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                        transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </label>
                            <ul class="widget__categories--sub__menu">
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product2.webp" alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Discount Weekly</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product3.webp" alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Green dhaniya</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product4.webp" alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">resh Nuts</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product5.webp" alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Millk Cream</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="widget__categories--menu__list">
                            <label class="widget__categories--menu__label d-flex align-items-center">
                                <img class="widget__categories--menu__img"
                                    src="/assets_user/img/product/small-product/product2.webp" alt="categories-img">
                                <span class="widget__categories--menu__text">Break disc Parts</span>
                                <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                    width="12.355" height="8.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                        transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </label>
                            <ul class="widget__categories--sub__menu">
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product2.webp" alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Discount Weekly</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product3.webp" alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Green dhaniya</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product4.webp" alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">resh Nuts</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product5.webp"
                                            alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Millk Cream</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="widget__categories--menu__list">
                            <label class="widget__categories--menu__label d-flex align-items-center">
                                <img class="widget__categories--menu__img"
                                    src="/assets_user/img/product/small-product/product3.webp" alt="categories-img">
                                <span class="widget__categories--menu__text">Service Kits</span>
                                <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                    width="12.355" height="8.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                        transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </label>
                            <ul class="widget__categories--sub__menu">
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product2.webp"
                                            alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Discount Weekly</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product3.webp"
                                            alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Green dhaniya</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product4.webp"
                                            alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">resh Nuts</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product5.webp"
                                            alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Millk Cream</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="widget__categories--menu__list">
                            <label class="widget__categories--menu__label d-flex align-items-center">
                                <img class="widget__categories--menu__img"
                                    src="/assets_user/img/product/small-product/product4.webp" alt="categories-img">
                                <span class="widget__categories--menu__text">Engine Parts</span>
                                <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                    width="12.355" height="8.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                        transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </label>
                            <ul class="widget__categories--sub__menu">
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product2.webp"
                                            alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Discount Weekly</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product3.webp"
                                            alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Green dhaniya</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product4.webp"
                                            alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">resh Nuts</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product5.webp"
                                            alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Millk Cream</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="widget__categories--menu__list">
                            <label class="widget__categories--menu__label d-flex align-items-center">
                                <img class="widget__categories--menu__img"
                                    src="/assets_user/img/product/small-product/product5.webp" alt="categories-img">
                                <span class="widget__categories--menu__text">Oil & Lubricants</span>
                                <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                    width="12.355" height="8.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                        transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </label>
                            <ul class="widget__categories--sub__menu">
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product2.webp"
                                            alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Discount Weekly</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product3.webp"
                                            alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Green dhaniya</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product4.webp"
                                            alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">resh Nuts</span>
                                    </a>
                                </li>
                                <li class="widget__categories--sub__menu--list">
                                    <a class="widget__categories--sub__menu--link d-flex align-items-center"
                                        href="shop.html">
                                        <img class="widget__categories--sub__menu--img"
                                            src="/assets_user/img/product/small-product/product5.webp"
                                            alt="categories-img">
                                        <span class="widget__categories--sub__menu--text">Millk Cream</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="single__widget widget__bg">
                    <h2 class="widget__title h3">Dietary Needs</h2>
                    <ul class="widget__form--check">
                        <li class="widget__form--check__list">
                            <label class="widget__form--check__label" for="check6">Body Parts</label>
                            <input class="widget__form--check__input" id="check6" type="checkbox">
                            <span class="widget__form--checkmark"></span>
                        </li>
                        <li class="widget__form--check__list">
                            <label class="widget__form--check__label" for="check7">Oiles Fluids</label>
                            <input class="widget__form--check__input" id="check7" type="checkbox">
                            <span class="widget__form--checkmark"></span>
                        </li>
                        <li class="widget__form--check__list">
                            <label class="widget__form--check__label" for="check8">Car care kits</label>
                            <input class="widget__form--check__input" id="check8" type="checkbox">
                            <span class="widget__form--checkmark"></span>
                        </li>
                        <li class="widget__form--check__list">
                            <label class="widget__form--check__label" for="check9">Brake disks</label>
                            <input class="widget__form--check__input" id="check9" type="checkbox">
                            <span class="widget__form--checkmark"></span>
                        </li>
                        <li class="widget__form--check__list">
                            <label class="widget__form--check__label" for="check10">Repair Parts</label>
                            <input class="widget__form--check__input" id="check10" type="checkbox">
                            <span class="widget__form--checkmark"></span>
                        </li>
                    </ul>
                </div>
                <div class="single__widget price__filter widget__bg">
                    <h2 class="widget__title h3">Filter By Price</h2>
                    <form class="price__filter--form" action="#">
                        <div class="price__filter--form__inner mb-15 d-flex align-items-center">
                            <div class="price__filter--group">
                                <label class="price__filter--label" for="Filter-Price-GTE">From</label>
                                <div class="price__filter--input">
                                    <span class="price__filter--currency">$</span>
                                    <input class="price__filter--input__field border-0" name="filter.v.price.gte"
                                        id="Filter-Price-GTE" type="number" placeholder="0" min="0"
                                        max="250.00">
                                </div>
                            </div>
                            <div class="price__divider">
                                <span>-</span>
                            </div>
                            <div class="price__filter--group">
                                <label class="price__filter--label" for="Filter-Price-LTE">To</label>
                                <div class="price__filter--input">
                                    <span class="price__filter--currency">$</span>
                                    <input class="price__filter--input__field border-0" name="filter.v.price.lte"
                                        id="Filter-Price-LTE" type="number" min="0" placeholder="250.00"
                                        max="250.00">
                                </div>
                            </div>
                        </div>
                        <button class="primary__btn price__filter--btn" type="submit">Filter</button>
                    </form>
                </div>
                <div class="single__widget widget__bg">
                    <h2 class="widget__title h3">Top Rated Product</h2>
                    <div class="shop__sidebar--product">
                        <div class="small__product--card d-flex">
                            <div class="small__product--thumbnail">
                                <a class="display-block" href="product-details.html"><img
                                        src="/assets_user/img/product/small-product/product6.webp" alt="product-img"></a>
                            </div>
                            <div class="small__product--content">
                                <h3 class="small__product--card__title"><a href="product-details.html">Black Air Pods </a>
                                </h3>
                                <div class="small__product--card__price">
                                    <span class="current__price">$239.52</span>
                                </div>
                                <ul class="rating small__product--rating d-flex">
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="small__product--card d-flex">
                            <div class="small__product--thumbnail">
                                <a class="display-block" href="product-details.html"><img
                                        src="/assets_user/img/product/small-product/product7.webp" alt="product-img"></a>
                            </div>
                            <div class="small__product--content">
                                <h3 class="small__product--card__title"><a href="product-details.html">Amazon Cloud </a>
                                </h3>
                                <div class="small__product--card__price">
                                    <span class="current__price">$178.52</span>
                                </div>
                                <ul class="rating small__product--rating d-flex">
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="small__product--card d-flex">
                            <div class="small__product--thumbnail">
                                <a class="display-block" href="product-details.html"><img
                                        src="/assets_user/img/product/small-product/product8.webp" alt="product-img"></a>
                            </div>
                            <div class="small__product--content">
                                <h3 class="small__product--card__title"><a href="product-details.html">Lorem ipsum sit.
                                    </a></h3>
                                <div class="small__product--card__price">
                                    <span class="current__price">$276.52</span>
                                </div>
                                <ul class="rating small__product--rating d-flex">
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single__widget widget__bg">
                    <h2 class="widget__title h3">Brands</h2>
                    <ul class="widget__tagcloud">
                        <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html"> Paintworks
                            </a></li>
                        <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                href="shop.html">Lighting</a></li>
                        <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Gaming</a>
                        </li>
                        <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Bumpers
                            </a></li>
                        <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Hoods </a>
                        </li>
                        <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Air
                                Boxes</a></li>
                        <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Fog
                                Lights</a></li>
                        <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Interior
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title">Product</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>Product</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start shop section -->
        <div class="shop__section section--padding">
            <div class="container">
                <div class="shop__product--wrapper">
                    <div class="shop__header d-flex align-items-center justify-content-between mb-30">
                        <div class="product__view--mode d-flex align-items-center">
                            <button class="widget__filter--btn d-flex align-items-center" data-offcanvas>
                                <svg class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="28"
                                        d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80" />
                                    <circle cx="336" cy="128" r="28" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="28" />
                                    <circle cx="176" cy="256" r="28" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="28" />
                                    <circle cx="336" cy="384" r="28" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="28" />
                                </svg>
                                <span class="widget__filter--btn__text">Filter</span>
                            </button>
                            <div class="product__view--mode__list product__short--by align-items-center d-flex ">
                                <label class="product__view--label">Prev Page :</label>
                                <div class="select shop__header--select">
                                    <select class="product__view--select">
                                        <option selected value="1">65</option>
                                        <option value="2">40</option>
                                        <option value="3">42</option>
                                        <option value="4">57 </option>
                                        <option value="5">60 </option>
                                    </select>
                                </div>
                            </div>
                            <div class="product__view--mode__list product__short--by align-items-center d-flex">
                                <label class="product__view--label">Sort By :</label>
                                <div class="select shop__header--select">
                                    <select class="product__view--select">
                                        <option selected value="1">Sort by latest</option>
                                        <option value="2">Sort by popularity</option>
                                        <option value="3">Sort by newness</option>
                                        <option value="4">Sort by rating </option>
                                    </select>
                                </div>

                            </div>
                            <div class="product__view--mode__list">
                                <div
                                    class="product__tab--one product__grid--column__buttons d-flex justify-content-center">
                                    <button class="product__grid--column__buttons--icons active" aria-label="grid btn"
                                        data-toggle="tab" data-target="#product_grid">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                            viewBox="0 0 9 9">
                                            <g transform="translate(-1360 -479)">
                                                <rect id="Rectangle_5725" data-name="Rectangle 5725" width="4"
                                                    height="4" transform="translate(1360 479)" fill="currentColor" />
                                                <rect id="Rectangle_5727" data-name="Rectangle 5727" width="4"
                                                    height="4" transform="translate(1360 484)" fill="currentColor" />
                                                <rect id="Rectangle_5726" data-name="Rectangle 5726" width="4"
                                                    height="4" transform="translate(1365 479)" fill="currentColor" />
                                                <rect id="Rectangle_5728" data-name="Rectangle 5728" width="4"
                                                    height="4" transform="translate(1365 484)" fill="currentColor" />
                                            </g>
                                        </svg>
                                    </button>
                                    <button class="product__grid--column__buttons--icons" aria-label="list btn"
                                        data-toggle="tab" data-target="#product_list">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                                            viewBox="0 0 13 8">
                                            <g id="Group_14700" data-name="Group 14700"
                                                transform="translate(-1376 -478)">
                                                <g transform="translate(12 -2)">
                                                    <g id="Group_1326" data-name="Group 1326">
                                                        <rect id="Rectangle_5729" data-name="Rectangle 5729"
                                                            width="3" height="2" transform="translate(1364 483)"
                                                            fill="currentColor" />
                                                        <rect id="Rectangle_5730" data-name="Rectangle 5730"
                                                            width="9" height="2" transform="translate(1368 483)"
                                                            fill="currentColor" />
                                                    </g>
                                                    <g id="Group_1328" data-name="Group 1328"
                                                        transform="translate(0 -3)">
                                                        <rect id="Rectangle_5729-2" data-name="Rectangle 5729"
                                                            width="3" height="2" transform="translate(1364 483)"
                                                            fill="currentColor" />
                                                        <rect id="Rectangle_5730-2" data-name="Rectangle 5730"
                                                            width="9" height="2" transform="translate(1368 483)"
                                                            fill="currentColor" />
                                                    </g>
                                                    <g id="Group_1327" data-name="Group 1327"
                                                        transform="translate(0 -1)">
                                                        <rect id="Rectangle_5731" data-name="Rectangle 5731"
                                                            width="3" height="2" transform="translate(1364 487)"
                                                            fill="currentColor" />
                                                        <rect id="Rectangle_5732" data-name="Rectangle 5732"
                                                            width="9" height="2" transform="translate(1368 487)"
                                                            fill="currentColor" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="product__showing--count">Showing 1–9 of 21 results</p>
                    </div>
                    <div class="tab_content">
                        <div id="product_grid" class="tab_pane active show">
                            <div class="product__section--inner">
                                <div class="row mb--n30">
                                    @foreach ($sanPham as $key => $value)
                                        <div
                                            class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30 d-flex align-items-stretch">
                                            <article class="product__card">
                                                <div class="product__card--thumbnail">
                                                    @php
                                                        $danh_sach_hinh = explode(',', $value->hinh_anh);
                                                    @endphp
                                                    <a class="product__card--thumbnail__link display-block"
                                                        href="/product-detail/{{ $value->id }}">
                                                        <img class="product__card--thumbnail__img product__primary--img"
                                                            src="{{ $danh_sach_hinh[0] }}" alt="product-img">
                                                        @if (count($danh_sach_hinh) > 1)
                                                            <img class="product__card--thumbnail__img product__secondary--img"
                                                                src="{{ $danh_sach_hinh[1] }}" alt="product-img">
                                                        @else
                                                            <img class="product__card--thumbnail__img product__secondary--img"
                                                                src="{{ $danh_sach_hinh[0] }}" alt="product-img">
                                                        @endif
                                                    </a>
                                                    <span
                                                        class="product__badge">-{{ ceil((($value->gia_ban - $value->gia_khuyen_mai) * 100) / $value->gia_ban) }}%</span>
                                                    <ul
                                                        class="product__card--action d-flex align-items-center justify-content-center">
                                                        <li class="product__card--action__list">
                                                            <a class="product__card--action__btn" title="Quick View"
                                                                data-open="modal1" href="{{ $danh_sach_hinh[0] }}"
                                                                target="_blank">
                                                                <svg class="product__card--action__btn--svg"
                                                                    width="16" height="16" viewBox="0 0 16 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                                <span class="visually-hidden">Quick View</span>
                                                            </a>
                                                        </li>
                                                        {{-- <li class="product__card--action__list">
                                                            <a class="product__card--action__btn" title="Compare"
                                                                href="compare.html">
                                                                <svg class="product__card--action__btn--svg"
                                                                    width="17" height="17" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.89137 6.09375C6.89137 6.47656 7.16481 6.75 7.54762 6.75H10.1453C10.7195 6.75 11.0203 6.06641 10.5828 5.65625L9.8445 4.89062L12.907 1.82812C13.0437 1.69141 13.0437 1.47266 12.907 1.36328L12.2781 0.734375C12.1687 0.597656 11.95 0.597656 11.8132 0.734375L8.75075 3.79688L7.98512 3.05859C7.57496 2.62109 6.89137 2.92188 6.89137 3.49609V6.09375ZM1.94215 12.793L5.00465 9.73047L5.77028 10.4688C6.18043 10.9062 6.89137 10.6055 6.89137 10.0312V7.40625C6.89137 7.05078 6.59059 6.75 6.23512 6.75H3.61012C3.0359 6.75 2.73512 7.46094 3.17262 7.87109L3.9109 8.63672L0.848402 11.6992C0.711683 11.8359 0.711683 12.0547 0.848402 12.1641L1.47731 12.793C1.58668 12.9297 1.80543 12.9297 1.94215 12.793Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                                <span class="visually-hidden">Compare</span>
                                                            </a>
                                                        </li> --}}
                                                        <li class="product__card--action__list">
                                                            @if (Auth::guard('user')->check())
                                                                @php
                                                                    $user = Auth::guard('user')->user();
                                                                    $check = DB::table('wishlists')
                                                                        ->where('id_customer', $user->id)
                                                                        ->where('id_san_pham', $value->id)
                                                                        ->first();
                                                                @endphp
                                                                @if ($check)
                                                                    <a id="yeuThich_{{ $value->id }}"
                                                                        style="background: var(--secondary-color); color: var(--text-white-color);"
                                                                        class="product__card--action__btn yeuThich"
                                                                        data-id="{{ $value->id }}" title="Wishlist">
                                                                        <svg class="product__card--action__btn--svg"
                                                                            width="18" height="18"
                                                                            viewBox="0 0 16 13" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M13.5379 1.52734C11.9519 0.1875 9.51832 0.378906 8.01442 1.9375C6.48317 0.378906 4.04957 0.1875 2.46364 1.52734C0.412855 3.25 0.713636 6.06641 2.1902 7.57031L6.97536 12.4648C7.24879 12.7383 7.60426 12.9023 8.01442 12.9023C8.39723 12.9023 8.7527 12.7383 9.02614 12.4648L13.8386 7.57031C15.2879 6.06641 15.5886 3.25 13.5379 1.52734ZM12.8816 6.64062L8.09645 11.5352C8.04176 11.5898 7.98707 11.5898 7.90504 11.5352L3.11989 6.64062C2.10817 5.62891 1.91676 3.71484 3.31129 2.53906C4.3777 1.63672 6.01832 1.77344 7.05739 2.8125L8.01442 3.79688L8.97145 2.8125C9.98317 1.77344 11.6238 1.63672 12.6902 2.51172C14.0847 3.71484 13.8933 5.62891 12.8816 6.64062Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                        <span class="visually-hidden">Wishlist</span>
                                                                    </a>
                                                                @else
                                                                    <a id="yeuThich_{{ $value->id }}" style=""
                                                                        class="product__card--action__btn yeuThich"
                                                                        data-id="{{ $value->id }}" title="Wishlist">
                                                                        <svg class="product__card--action__btn--svg"
                                                                            width="18" height="18"
                                                                            viewBox="0 0 16 13" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M13.5379 1.52734C11.9519 0.1875 9.51832 0.378906 8.01442 1.9375C6.48317 0.378906 4.04957 0.1875 2.46364 1.52734C0.412855 3.25 0.713636 6.06641 2.1902 7.57031L6.97536 12.4648C7.24879 12.7383 7.60426 12.9023 8.01442 12.9023C8.39723 12.9023 8.7527 12.7383 9.02614 12.4648L13.8386 7.57031C15.2879 6.06641 15.5886 3.25 13.5379 1.52734ZM12.8816 6.64062L8.09645 11.5352C8.04176 11.5898 7.98707 11.5898 7.90504 11.5352L3.11989 6.64062C2.10817 5.62891 1.91676 3.71484 3.31129 2.53906C4.3777 1.63672 6.01832 1.77344 7.05739 2.8125L8.01442 3.79688L8.97145 2.8125C9.98317 1.77344 11.6238 1.63672 12.6902 2.51172C14.0847 3.71484 13.8933 5.62891 12.8816 6.64062Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                        <span class="visually-hidden">Wishlist</span>
                                                                    </a>
                                                                @endif
                                                            @else
                                                                <a class="product__card--action__btn" data-id=""
                                                                    title="Wishlist" href="/auth">
                                                                    <svg class="product__card--action__btn--svg"
                                                                        width="18" height="18" viewBox="0 0 16 13"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M13.5379 1.52734C11.9519 0.1875 9.51832 0.378906 8.01442 1.9375C6.48317 0.378906 4.04957 0.1875 2.46364 1.52734C0.412855 3.25 0.713636 6.06641 2.1902 7.57031L6.97536 12.4648C7.24879 12.7383 7.60426 12.9023 8.01442 12.9023C8.39723 12.9023 8.7527 12.7383 9.02614 12.4648L13.8386 7.57031C15.2879 6.06641 15.5886 3.25 13.5379 1.52734ZM12.8816 6.64062L8.09645 11.5352C8.04176 11.5898 7.98707 11.5898 7.90504 11.5352L3.11989 6.64062C2.10817 5.62891 1.91676 3.71484 3.31129 2.53906C4.3777 1.63672 6.01832 1.77344 7.05739 2.8125L8.01442 3.79688L8.97145 2.8125C9.98317 1.77344 11.6238 1.63672 12.6902 2.51172C14.0847 3.71484 13.8933 5.62891 12.8816 6.64062Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                    <span class="visually-hidden">Wishlist</span>
                                                                </a>
                                                            @endif
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product__card--content">
                                                    <ul class="rating product__card--rating d-flex">
                                                        <li class="rating__list">
                                                            <span class="rating__icon">
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__icon">
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__icon">
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__icon">
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__icon">
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="rating__review--text">(126) Review</span>
                                                        </li>
                                                    </ul>
                                                    <h3 class="product__card--title"><a
                                                            href="/product-detail/{{ $value->id }}">{{ $value->ten_san_pham }}
                                                        </a></h3>
                                                    <div class="product__card--price">
                                                        <span
                                                            class="current__price">{{ number_format($value->gia_khuyen_mai, 0, ',', '.') }}
                                                            đ</span>
                                                        <span class="old__price">
                                                            {{ number_format($value->gia_ban, 0, ',', '.') }} đ</span>
                                                    </div>
                                                    <div class="product__card--footer">
                                                        @if (Auth::guard('user')->check())
                                                            <a v-on:click="themGioHang({{ $value->id }})"
                                                                class="product__card--btn primary__btn">
                                                                <svg width="14" height="11" viewBox="0 0 14 11"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M13.2371 4H11.5261L8.5027 0.460938C8.29176 0.226562 7.9402 0.203125 7.70582 0.390625C7.47145 0.601562 7.44801 0.953125 7.63551 1.1875L10.0496 4H3.46364L5.8777 1.1875C6.0652 0.953125 6.04176 0.601562 5.80739 0.390625C5.57301 0.203125 5.22145 0.226562 5.01051 0.460938L1.98707 4H0.299574C0.135511 4 0.0183239 4.14062 0.0183239 4.28125V4.84375C0.0183239 5.00781 0.135511 5.125 0.299574 5.125H0.721449L1.3777 9.78906C1.44801 10.3516 1.91676 10.75 2.47926 10.75H11.0339C11.5964 10.75 12.0652 10.3516 12.1355 9.78906L12.7918 5.125H13.2371C13.3777 5.125 13.5183 5.00781 13.5183 4.84375V4.28125C13.5183 4.14062 13.3777 4 13.2371 4ZM11.0339 9.625H2.47926L1.86989 5.125H11.6433L11.0339 9.625ZM7.33082 6.4375C7.33082 6.13281 7.07301 5.875 6.76832 5.875C6.4402 5.875 6.20582 6.13281 6.20582 6.4375V8.3125C6.20582 8.64062 6.4402 8.875 6.76832 8.875C7.07301 8.875 7.33082 8.64062 7.33082 8.3125V6.4375ZM9.95582 6.4375C9.95582 6.13281 9.69801 5.875 9.39332 5.875C9.0652 5.875 8.83082 6.13281 8.83082 6.4375V8.3125C8.83082 8.64062 9.0652 8.875 9.39332 8.875C9.69801 8.875 9.95582 8.64062 9.95582 8.3125V6.4375ZM4.70582 6.4375C4.70582 6.13281 4.44801 5.875 4.14332 5.875C3.8152 5.875 3.58082 6.13281 3.58082 6.4375V8.3125C3.58082 8.64062 3.8152 8.875 4.14332 8.875C4.44801 8.875 4.70582 8.64062 4.70582 8.3125V6.4375Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                                Add to cart
                                                            </a>
                                                        @else
                                                            <a class="product__card--btn primary__btn" href="/auth">
                                                                <svg width="14" height="11" viewBox="0 0 14 11"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M13.2371 4H11.5261L8.5027 0.460938C8.29176 0.226562 7.9402 0.203125 7.70582 0.390625C7.47145 0.601562 7.44801 0.953125 7.63551 1.1875L10.0496 4H3.46364L5.8777 1.1875C6.0652 0.953125 6.04176 0.601562 5.80739 0.390625C5.57301 0.203125 5.22145 0.226562 5.01051 0.460938L1.98707 4H0.299574C0.135511 4 0.0183239 4.14062 0.0183239 4.28125V4.84375C0.0183239 5.00781 0.135511 5.125 0.299574 5.125H0.721449L1.3777 9.78906C1.44801 10.3516 1.91676 10.75 2.47926 10.75H11.0339C11.5964 10.75 12.0652 10.3516 12.1355 9.78906L12.7918 5.125H13.2371C13.3777 5.125 13.5183 5.00781 13.5183 4.84375V4.28125C13.5183 4.14062 13.3777 4 13.2371 4ZM11.0339 9.625H2.47926L1.86989 5.125H11.6433L11.0339 9.625ZM7.33082 6.4375C7.33082 6.13281 7.07301 5.875 6.76832 5.875C6.4402 5.875 6.20582 6.13281 6.20582 6.4375V8.3125C6.20582 8.64062 6.4402 8.875 6.76832 8.875C7.07301 8.875 7.33082 8.64062 7.33082 8.3125V6.4375ZM9.95582 6.4375C9.95582 6.13281 9.69801 5.875 9.39332 5.875C9.0652 5.875 8.83082 6.13281 8.83082 6.4375V8.3125C8.83082 8.64062 9.0652 8.875 9.39332 8.875C9.69801 8.875 9.95582 8.64062 9.95582 8.3125V6.4375ZM4.70582 6.4375C4.70582 6.13281 4.44801 5.875 4.14332 5.875C3.8152 5.875 3.58082 6.13281 3.58082 6.4375V8.3125C3.58082 8.64062 3.8152 8.875 4.14332 8.875C4.44801 8.875 4.70582 8.64062 4.70582 8.3125V6.4375Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                                Add to cart
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="product_list" class="tab_pane">
                            <div class="product__section--inner product__section--style3__inner">
                                <div class="row row-cols-1 mb--n30">
                                    @foreach ($sanPham as $key => $value)
                                        <div class="col mb-30">
                                            <div class="product__card product__list d-flex align-items-center">
                                                <div class="product__card--thumbnail product__list--thumbnail">
                                                    @php
                                                        $danh_sach_hinh = explode(',', $value->hinh_anh);
                                                    @endphp
                                                    <a class="product__card--thumbnail__link display-block"
                                                        href="/product-detail/{{ $value->id }}">
                                                        <img class="product__card--thumbnail__img product__primary--img"
                                                            src="{{ $danh_sach_hinh[0] }}" alt="product-img">
                                                        @if (count($danh_sach_hinh) > 1)
                                                            <img class="product__card--thumbnail__img product__secondary--img"
                                                                src="{{ $danh_sach_hinh[1] }}" alt="product-img">
                                                        @else
                                                            <img class="product__card--thumbnail__img product__secondary--img"
                                                                src="{{ $danh_sach_hinh[0] }}" alt="product-img">
                                                        @endif
                                                    </a>
                                                    <span
                                                        class="product__badge">-{{ ceil((($value->gia_ban - $value->gia_khuyen_mai) * 100) / $value->gia_ban) }}%</span>
                                                    <ul
                                                        class="product__card--action d-flex align-items-center justify-content-center">
                                                        <li class="product__card--action__list">
                                                            <a class="product__card--action__btn" title="Quick View"
                                                                data-open="modal1" href="{{ $danh_sach_hinh[0] }}">
                                                                <svg class="product__card--action__btn--svg"
                                                                    width="16" height="16" viewBox="0 0 16 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                                <span class="visually-hidden">Quick View</span>
                                                            </a>
                                                        </li>
                                                        {{-- <li class="product__card--action__list">
                                                            <a class="product__card--action__btn" title="Compare"
                                                                href="compare.html">
                                                                <svg class="product__card--action__btn--svg"
                                                                    width="17" height="17" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.89137 6.09375C6.89137 6.47656 7.16481 6.75 7.54762 6.75H10.1453C10.7195 6.75 11.0203 6.06641 10.5828 5.65625L9.8445 4.89062L12.907 1.82812C13.0437 1.69141 13.0437 1.47266 12.907 1.36328L12.2781 0.734375C12.1687 0.597656 11.95 0.597656 11.8132 0.734375L8.75075 3.79688L7.98512 3.05859C7.57496 2.62109 6.89137 2.92188 6.89137 3.49609V6.09375ZM1.94215 12.793L5.00465 9.73047L5.77028 10.4688C6.18043 10.9062 6.89137 10.6055 6.89137 10.0312V7.40625C6.89137 7.05078 6.59059 6.75 6.23512 6.75H3.61012C3.0359 6.75 2.73512 7.46094 3.17262 7.87109L3.9109 8.63672L0.848402 11.6992C0.711683 11.8359 0.711683 12.0547 0.848402 12.1641L1.47731 12.793C1.58668 12.9297 1.80543 12.9297 1.94215 12.793Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                                <span class="visually-hidden">Compare</span>
                                                            </a>
                                                        </li> --}}
                                                        <li class="product__card--action__list">
                                                            @if (Auth::guard('user')->check())
                                                                @php
                                                                    $user = Auth::guard('user')->user();
                                                                    $check = DB::table('wishlists')
                                                                        ->where('id_customer', $user->id)
                                                                        ->where('id_san_pham', $value->id)
                                                                        ->first();
                                                                @endphp
                                                                @if ($check)
                                                                    <a v-on:click="loadDataWishlist()"
                                                                        id="yeu_thich_list_{{ $value->id }}"
                                                                        style="background: var(--secondary-color); color: var(--text-white-color);"
                                                                        class="product__card--action__btn yeuThichList"
                                                                        data-id="{{ $value->id }}" title="Wishlist">
                                                                        <svg class="product__card--action__btn--svg"
                                                                            width="18" height="18"
                                                                            viewBox="0 0 16 13" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M13.5379 1.52734C11.9519 0.1875 9.51832 0.378906 8.01442 1.9375C6.48317 0.378906 4.04957 0.1875 2.46364 1.52734C0.412855 3.25 0.713636 6.06641 2.1902 7.57031L6.97536 12.4648C7.24879 12.7383 7.60426 12.9023 8.01442 12.9023C8.39723 12.9023 8.7527 12.7383 9.02614 12.4648L13.8386 7.57031C15.2879 6.06641 15.5886 3.25 13.5379 1.52734ZM12.8816 6.64062L8.09645 11.5352C8.04176 11.5898 7.98707 11.5898 7.90504 11.5352L3.11989 6.64062C2.10817 5.62891 1.91676 3.71484 3.31129 2.53906C4.3777 1.63672 6.01832 1.77344 7.05739 2.8125L8.01442 3.79688L8.97145 2.8125C9.98317 1.77344 11.6238 1.63672 12.6902 2.51172C14.0847 3.71484 13.8933 5.62891 12.8816 6.64062Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                        <span class="visually-hidden">Wishlist</span>
                                                                    </a>
                                                                @else
                                                                    <a v-on:click="loadDataWishlist()"
                                                                        id="yeu_thich_list_{{ $value->id }}"
                                                                        style=""
                                                                        class="product__card--action__btn yeuThichList"
                                                                        data-id="{{ $value->id }}" title="Wishlist">
                                                                        <svg class="product__card--action__btn--svg"
                                                                            width="18" height="18"
                                                                            viewBox="0 0 16 13" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M13.5379 1.52734C11.9519 0.1875 9.51832 0.378906 8.01442 1.9375C6.48317 0.378906 4.04957 0.1875 2.46364 1.52734C0.412855 3.25 0.713636 6.06641 2.1902 7.57031L6.97536 12.4648C7.24879 12.7383 7.60426 12.9023 8.01442 12.9023C8.39723 12.9023 8.7527 12.7383 9.02614 12.4648L13.8386 7.57031C15.2879 6.06641 15.5886 3.25 13.5379 1.52734ZM12.8816 6.64062L8.09645 11.5352C8.04176 11.5898 7.98707 11.5898 7.90504 11.5352L3.11989 6.64062C2.10817 5.62891 1.91676 3.71484 3.31129 2.53906C4.3777 1.63672 6.01832 1.77344 7.05739 2.8125L8.01442 3.79688L8.97145 2.8125C9.98317 1.77344 11.6238 1.63672 12.6902 2.51172C14.0847 3.71484 13.8933 5.62891 12.8816 6.64062Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                        <span class="visually-hidden">Wishlist</span>
                                                                    </a>
                                                                @endif
                                                            @else
                                                                <a class="product__card--action__btn" data-id=""
                                                                    title="Wishlist" href="/auth">
                                                                    <svg class="product__card--action__btn--svg"
                                                                        width="18" height="18" viewBox="0 0 16 13"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M13.5379 1.52734C11.9519 0.1875 9.51832 0.378906 8.01442 1.9375C6.48317 0.378906 4.04957 0.1875 2.46364 1.52734C0.412855 3.25 0.713636 6.06641 2.1902 7.57031L6.97536 12.4648C7.24879 12.7383 7.60426 12.9023 8.01442 12.9023C8.39723 12.9023 8.7527 12.7383 9.02614 12.4648L13.8386 7.57031C15.2879 6.06641 15.5886 3.25 13.5379 1.52734ZM12.8816 6.64062L8.09645 11.5352C8.04176 11.5898 7.98707 11.5898 7.90504 11.5352L3.11989 6.64062C2.10817 5.62891 1.91676 3.71484 3.31129 2.53906C4.3777 1.63672 6.01832 1.77344 7.05739 2.8125L8.01442 3.79688L8.97145 2.8125C9.98317 1.77344 11.6238 1.63672 12.6902 2.51172C14.0847 3.71484 13.8933 5.62891 12.8816 6.64062Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                    <span class="visually-hidden">Wishlist</span>
                                                                </a>
                                                            @endif
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product__card--content product__list--content">
                                                    <h3 class="product__card--title"><a
                                                            href="/product-detail/{{ $value->id }}">{{ $value->ten_san_pham }}
                                                        </a></h3>
                                                    <ul class="rating product__card--rating d-flex">
                                                        <li class="rating__list">
                                                            <span class="rating__icon">
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__icon">
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__icon">
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__icon">
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__icon">
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="rating__review--text">(106) Review</span>
                                                        </li>
                                                    </ul>
                                                    <div class="product__list--price">
                                                        <span
                                                            class="current__price">{{ number_format($value->gia_khuyen_mai, 0, ',', '.') }}
                                                            đ</span>
                                                        <span class="old__price">
                                                            {{ number_format($value->gia_ban, 0, ',', '.') }} đ</span>
                                                    </div>
                                                    <p class="product__card--content__desc mb-20">{{ $value->mo_ta_ngan }}
                                                    </p>
                                                    @if (Auth::guard('user')->check())
                                                        <a v-on:click="themGioHang({{ $value->id }})"
                                                            class="product__card--btn primary__btn">+ Add to cart</a>
                                                    @else
                                                        <a class="product__card--btn primary__btn" href="/auth">+ Add to
                                                            cart</a>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination__area">
                        <nav class="pagination justify-content-center">
                            <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                <li class="pagination__list">
                                    <a href="shop.html" class="pagination__item--arrow  link ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                            viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="48"
                                                d="M244 400L100 256l144-144M120 256h292" />
                                        </svg>
                                        <span class="visually-hidden">page left arrow</span>
                                    </a>
                                <li>
                                <li class="pagination__list"><span
                                        class="pagination__item pagination__item--current">1</span></li>
                                <li class="pagination__list"><a href="shop.html" class="pagination__item link">2</a></li>
                                <li class="pagination__list"><a href="shop.html" class="pagination__item link">3</a></li>
                                <li class="pagination__list"><a href="shop.html" class="pagination__item link">4</a></li>
                                <li class="pagination__list">
                                    <a href="shop.html" class="pagination__item--arrow  link ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                            viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="48"
                                                d="M268 112l144 144-144 144M392 256H100" />
                                        </svg>
                                        <span class="visually-hidden">page right arrow</span>
                                    </a>
                                <li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="modal" id="modal1" data-animation="slideInUp">
            <div class="modal-dialog quickview__main--wrapper">
               <header class="modal-header quickview__header">
                    <button class="close-modal quickview__close--btn" aria-label="close modal" data-close>✕ </button>
                </header>
                <div class="quickview__inner">
                    <div class="row row-cols-lg-2 row-cols-md-2">
                        <div class="col">
                            <div class="quickview__gallery">
                                <div class="product__media--preview  swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="/assets_user/img/product/big-product/product1.webp"><img class="product__media--preview__items--img" src="/assets_user/img/product/big-product/product1.webp" alt="product-media-img"></a>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox" href="/assets_user/img/product/big-product/product1.webp" data-gallery="product-media-preview">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                        <span class="visually-hidden">product view</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="/assets_user/img/product/big-product/product2.webp"><img class="product__media--preview__items--img" src="/assets_user/img/product/big-product/product2.webp" alt="product-media-img"></a>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox" href="/assets_user/img/product/big-product/product2.webp" data-gallery="product-media-preview">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                        <span class="visually-hidden">product view</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="/assets_user/img/product/big-product/product3.webp"><img class="product__media--preview__items--img" src="/assets_user/img/product/big-product/product3.webp" alt="product-media-img"></a>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox" href="/assets_user/img/product/big-product/product3.webp" data-gallery="product-media-preview">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                        <span class="visually-hidden">product view</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="/assets_user/img/product/big-product/product4.webp"><img class="product__media--preview__items--img" src="/assets_user/img/product/big-product/product4.webp" alt="product-media-img"></a>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox" href="/assets_user/img/product/big-product/product4.webp" data-gallery="product-media-preview">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                        <span class="visually-hidden">product view</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__media--nav swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img" src="/assets_user/img/product/small-product/product1.webp" alt="product-nav-img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img" src="/assets_user/img/product/small-product/product2.webp" alt="product-nav-img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img" src="/assets_user/img/product/small-product/product3.webp" alt="product-nav-img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img" src="/assets_user/img/product/small-product/product3.webp" alt="product-nav-img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img" src="/assets_user/img/product/small-product/product4.webp" alt="product-nav-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper__nav--btn swiper-button-next">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <div class="swiper__nav--btn swiper-button-prev">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="quickview__info">
                                <form action="#">
                                    <h2 class="product__details--info__title mb-10">Amazon Cloud Cam Security</h2>
                                    <div class="product__card--price mb-10">
                                        <span class="current__price">$239.52</span>
                                        <span class="old__price"> $362.00</span>
                                    </div>
                                    <ul class="rating product__card--rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"></path>
                                                 </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"></path>
                                                 </svg>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rating__review--text">(106) Review</span>
                                        </li>
                                    </ul>
                                    <p class="product__details--info__desc mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit is. Deserunt totam dolores ea numquam labore!.</p>
                                    <div class="product__variant">
                                        <div class="quickview__variant--list quantity d-flex align-items-center mb-10">
                                            <div class="quantity__box">
                                                <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                                <label>
                                                    <input type="number" class="quantity__number quickview__value--number" value="1" data-counter />
                                                </label>
                                                <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                            </div>
                                            <button class="primary__btn quickview__cart--btn" type="submit">Add To Cart</button>
                                        </div>
                                        <div class="quickview__variant--list variant__wishlist mb-10">
                                            <a class="variant__wishlist--icon" href="wishlist.html" title="Add to wishlist">
                                                <svg class="quickview__variant--wishlist__svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                Add to Wishlist
                                            </a>
                                        </div>
                                    </div>
                                    <div class="quickview__social d-flex align-items-center">
                                        <label class="quickview__social--title">Social Share:</label>
                                        <ul class="quickview__social--wrapper mt-0 d-flex">
                                            <li class="quickview__social--list">
                                                <a class="quickview__social--icon" target="_blank" href="https://www.facebook.com">
                                                    <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                        <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                                    </svg>
                                                    <span class="visually-hidden">Facebook</span>
                                                </a>
                                            </li>
                                            <li class="quickview__social--list">
                                                <a class="quickview__social--icon" target="_blank" href="https://twitter.com">
                                                    <svg  xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                                        <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                                    </svg>
                                                    <span class="visually-hidden">Twitter</span>
                                                </a>
                                            </li>
                                            <li class="quickview__social--list">
                                                <a class="quickview__social--icon" target="_blank" href="https://www.instagram.com">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492" viewBox="0 0 19.497 19.492">
                                                        <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                    </svg>
                                                    <span class="visually-hidden">Instagram</span>
                                                </a>
                                            </li>
                                            <li class="quickview__social--list">
                                                <a class="quickview__social--icon" target="_blank" href="https://www.youtube.com">
                                                    <svg  xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                                        <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                                    </svg>
                                                    <span class="visually-hidden">Youtube</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    @include('user.share.shipping')
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            new Vue({
                el: '#app',
                data: {
                    add: {},
                },
                created() {

                },
                methods: {
                    themGioHang(id) {
                        this.add.so_luong = 1;
                        this.add.id_san_pham = id;
                        // console.log(this.add);
                        axios
                            .post('{{ Route('storeGioHang') }}', this.add)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message, 'Success');
                                    this.loadData();
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
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0], 'Error');
                                });
                            });
                    },
                },
            });

            $(".yeuThich").click(function() {
                var payload = {
                    'id': $(this).data('id'),
                };
                axios
                    .post('{{ Route('createCustomerWishlist') }}', payload)
                    .then((res) => {
                        var id = '#yeuThich_' + $(this).data('id');
                        if (res.data.trang_thai) {
                            $(id).attr('style',
                                'background: var(--secondary-color); color: var(--text-white-color);'
                                );
                        } else {
                            $(id).attr('style',
                                'color: var(--foreground-sub-color); background: var(--body-background-color);'
                                );
                        }
                        loadDataWishlist()

                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            });
            $(".yeuThichList").click(function() {
                var payload = {
                    'id': $(this).data('id'),
                };
                axios
                    .post('{{ Route('createCustomerWishlist') }}', payload)
                    .then((res) => {
                        var id = '#yeu_thich_list_' + $(this).data('id');
                        if (res.data.trang_thai) {
                            $(id).attr('style',
                                'background: var(--secondary-color); color: var(--text-white-color);'
                                );
                        } else {
                            $(id).attr('style',
                                'color: var(--foreground-sub-color); background: var(--body-background-color);'
                                );
                        }
                        loadDataWishlist();
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            });

            function loadDataWishlist() {
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
            }

        });
    </script>
@endsection
