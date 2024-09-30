@extends('user.share.master')
@section('content')
<!-- Start breadcrumb section -->
<section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a href="/">Home</a></li>
                        <li class="breadcrumb__content--menu__items"><span>My Account</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb section -->

<!-- my account section start -->
<section class="my__account--section section--padding">
    <div class="container">
        <div class="my__account--section__inner border-radius-10 d-flex">
            <div class="account__left--sidebar">
                <h2 class="account__content--title mb-20">My Profile</h2>
                <ul class="account__menu">
                    <li class="account__menu--list  {{ Route::is('viewCustomerDashboard') ? 'active' : '' }}"><a href="{{ Route('viewCustomerDashboard') }}">Thông Tin Chung</a></li>
                    <li class="account__menu--list {{ Route::is('viewCustomerProfile') ? 'active' : '' }}"><a href="{{ Route('viewCustomerProfile') }}">Cá Nhân</a></li>
                    <li class="account__menu--list {{ Route::is('viewCustomerAddress') ? 'active' : '' }}"><a href="{{ Route('viewCustomerAddress') }}">Địa Chỉ</a></li>
                    <li class="account__menu--list {{ Route::is('viewCustomerOrder') ? 'active' : '' }}"><a href="{{ Route('viewCustomerOrder') }}">Đơn Hàng</a></li>
                    <li class="account__menu--list {{ Route::is('viewCustomerChangepass') ? 'active' : '' }}"><a href="{{ Route('viewCustomerChangepass') }}">Đổi Mật Khẩu</a></li>
                    <li class="account__menu--list"><a href="{{ Route('customerLogOut') }}">Log Out</a></li>
                </ul>
            </div>
            <div class="account__wrapper">
                <div class="account__content">
                    @yield('content_profile')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account section end -->

@include('user.share.shipping')
@endsection
@section('js')
    @yield('js_profile')
@endsection
