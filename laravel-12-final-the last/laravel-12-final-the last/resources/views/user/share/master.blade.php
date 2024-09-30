<!doctype html>
<html lang="en">

<head>
    @include('user.share.css')
</head>

<body>
    @include('user.share.header')

    <div class="main__content_wrapper">
        @yield('content')
    </div>

    @include('user.share.footer')

    {{-- Hiển Thị Popup --}}

    <!-- Scroll top bar -->
    @include('user.share.js')
    @yield('js')


</body>
<script>
    $(document).ready(function() {
        var subTotal = 0;
        var so_luong_cart_1 = 0;
        var so_luong_cart_2 = 0;
        var yeu_thich_1 = 0;
        var yeu_thich_2 = 0;
        function numberFormat(number) {
            return new Intl.NumberFormat('vi-VI', {
                style: 'currency',
                currency: 'VND'
            }).format(number);
        }
    });

</script>

</html>
