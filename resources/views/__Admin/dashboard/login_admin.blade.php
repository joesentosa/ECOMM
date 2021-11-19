<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Admin Login Page">
    <meta name="keywords"
          content="admin login">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>Login Admin</title>
    @include('__Admin.layout.css')
</head>
<body class="@if(url()->current() == route('button-builder'))  button-builder @endif">
<div class="container">
    <!-- login page start-->

    @if($errors->has('status'))

    @endif

    <div class="row d-flex justify-content-center" style="margin-top:18%;">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div>
                            <form class="theme-form" action="{{url("auth/admin")}}" method="POST">
                                @csrf
                                <h4>LOGIN</h4>
                                <h6>Enter your Email and Password</h6>
                                <div class="form-group">
                                    <label class="col-form-label pt-0">Email</label>
                                    <input class="form-control text-center" type="text" name="email" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input class="form-control text-center" type="password" name="password" required="">
                                </div>
                                <div class="form-group form-row mt-3 mb-0">
                                    <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login page end-->
</div>
@include('__Admin.layout.script')
</body>
</html>
<script src="{{asset('assets/js/login.js')}}"></script>
