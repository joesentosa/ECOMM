<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app (Laravel 8)">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>@yield('title','Game Ninja')</title>

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Martup/css/vendor/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Martup/css/vendor/material-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Martup/css/vendor/jquery-ui.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/Martup/css/plugins/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Martup/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Martup/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Martup/css/plugins/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Martup/css/plugins/venobox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/Martup/css/style.css')}}">
    <div id="fb-root"></div>

    <!-- iconify -->
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <!-- end iconify -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{--    @include('__User.layout.css')--}}
    @yield('style')
</head>
<body>

@include('__User.layout.header_general')
@yield('content')
@include('__User.layout.footer_general')

@stack('JScript')
</body>
</html>
