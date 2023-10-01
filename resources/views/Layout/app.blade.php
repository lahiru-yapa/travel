<!doctype html>
<html class="no-js" lang="zxx">

@include('Layout.header')

<body>
    @include('Layout.nav')

    @yield('content')

    @include('Layout.footer')

    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
