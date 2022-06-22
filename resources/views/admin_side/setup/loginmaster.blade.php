<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('public/assets/images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{ asset('public/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    @yield('content')
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="{{ asset('public/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('public/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/jquery.slicknav.min.js')}}"></script>
    
    <!-- others plugins -->
    <script src="{{ asset('public/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('public/assets/js/scripts.js')}}"></script>
</body>

</html>