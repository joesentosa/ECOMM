<!doctype html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app (Laravel 8)">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
        <title>@yield('errors', '404')</title>
        @include('__User.layout.css')
    </head>
</head>
<body>
@yield('content')
@include('__User.layout.script')
</body>
</html>
