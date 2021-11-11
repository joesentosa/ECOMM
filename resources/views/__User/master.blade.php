<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app (Laravel 8)">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>Poco - @yield('title')</title>
    @include('__User.css')
    @yield('style')

  </head>
  <body class="@if(url()->current() == route('button-builder'))  button-builder @endif">
    <!-- Loader starts-->
    {{-- <div class="loader-wrapper">
      <div class="typewriter">
        <h1>New Era Admin Loading..</h1>
      </div>
    </div> --}}
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <!-- Page Header Start-->
      @include('__User.header')
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      {{-- <div class="page-body-wrapper"> --}}
        <!-- Page Sidebar Start-->
        {{-- @include('layouts.simple.sidebar') --}}
        <!-- Page Sidebar Ends-->
        <!-- Right sidebar Start-->
        {{-- @include('layouts.simple.chat_sidebar') --}}
        <!-- Right sidebar Ends-->
        <div class="page-body">
            {{-- <div class="container-fluid">
              <div class="page-header">
                 <div class="row">
                    <div class="col-lg-6 main-header">
                        @yield('breadcrumb-title')
                        <h6 class="mb-0">admin panel</h6>
                    </div>
                    <div class="col-lg-6 breadcrumb-right">
                       <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="pe-7s-home"></i></a></li>
                          @yield('breadcrumb-items')
                       </ol>
                    </div>
                 </div>
              </div>
            </div> --}}
            @yield('content')
        </div>
        <!-- footer start-->
        @include('__User.footer')
      {{-- </div> --}}
    </div>
    @include('__User.script')
  </body>
</html>
