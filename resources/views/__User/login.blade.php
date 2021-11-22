@extends('__User.master')
@section('title', 'Login')

@section('css')
@endsection

@section('style')
    <style>
        .cont, .sub-cont {
            background: rgb(0, 77, 122);
            background: -moz-linear-gradient(176deg, rgba(0, 77, 122, 1) 0%, rgba(1, 18, 39, 1) 100%);
            background: -webkit-linear-gradient(176deg, rgba(0, 77, 122, 1) 0%, rgba(1, 18, 39, 1) 100%);
            background: linear-gradient(176deg, rgba(0, 77, 122, 1) 0%, rgba(1, 18, 39, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#004d7a", endColorstr="#011227", GradientType=1);
            color: white;
        }
    </style>
@endsection

@section('content')
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="authentication-main">
            <div class="row">
                <div class="col-md-12">
                    <div class="auth-innerright">
                        <div class="authentication-box">
                            <div class="card-body p-0">
                                @if(session()->has('status'))
                                <div class="form-group text-center d-flex justify-content-center" id="success-alert">
                                    <div class="alert alert-success w-25" role="alert">
                                        {{ session('status') }}
                                    </div>
                                </div>
                                @endif
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div class="form-group text-center d-flex justify-content-center" id="error-alert">
                                            <div class="alert alert-danger w-25" role="alert">
                                                {{ $error }}
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="cont text-center">
                                    <div>
                                        <form class="theme-form" action="{{ url('auth/customer') }}" method="post">
                                            @csrf
                                            <h4>LOGIN</h4>
                                            <h6>Enter your Username and Password</h6>
                                            <div class="form-group">
                                                <label class="col-form-label pt-0">Username/Email</label>
                                                <input class="form-control text-center" type="text" required=""
                                                       placeholder="Username or Email" name="username">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Password</label>
                                                <input class="form-control text-center" type="password" required=""
                                                       placeholder="Password" name="password">
                                            </div>
                                            <div class="checkbox p-0">
                                                <div class="checkbox checkbox-dark m-squar">
                                                    <input id="checkbox1" type="checkbox" name="remember_me">
                                                    <label class="mt-0" for="checkbox1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-row mt-3 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
                                            </div>
                                            <div class="login-divider"></div>
                                            <div class="social mt-3">
                                                <div class="form-row btn-showcase">
                                                    <div class="col-md-4 col-sm-6">
                                                        <button type="button" class="btn social-btn btn-google">Google +</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="sub-cont">
                                        <div class="img">
                                            <div class="img__text m--up">
                                                <h2>New here?</h2>
                                                <p>Sign up and discover great amount of new opportunities!</p>
                                            </div>
                                            <div class="img__text m--in">
                                                <h2>One of us?</h2>
                                                <p>If you already has an account, just sign in. We've missed you!</p>
                                            </div>
                                            <div class="img__btn"><span class="m--up">Sign up</span><span class="m--in">Sign in</span>
                                            </div>
                                        </div>
                                        <div>
                                            <form class="theme-form" action="{{ url('auth/customer/register') }}" method="post">
                                                @csrf
                                                <h4 class="text-center">NEW USER</h4>
                                                <h6 class="text-center">Enter your Username and Password For Signup</h6>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control text-center" type="text"
                                                                   placeholder="First Name" name="firstname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control text-center" type="text"
                                                                   placeholder="Last Name" name="lastname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control text-center" type="text"
                                                           placeholder="User Name" name="username">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control text-center" type="email"
                                                           placeholder="Email" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control text-center" type="password"
                                                           placeholder="Password" name="password">
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-sm-4">
                                                        <button class="btn btn-primary" type="submit">Sign Up</button>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="text-left mt-2 m-l-20">Are you already user?  <a
                                                                class="btn-link text-capitalize"
                                                                href="{{ url('login') }}">Login</a></div>
                                                    </div>
                                                </div>
                                                <div class="form-divider"></div>
                                                <div class="social mt-3">
                                                    <div class="form-row btn-showcase">
{{--                                                        <div class="col-sm-4">--}}
{{--                                                            <button class="btn social-btn btn-fb">Facebook</button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-4">--}}
{{--                                                            <button class="btn social-btn btn-twitter">Twitter</button>--}}
{{--                                                        </div>--}}
                                                        <div class="col-sm-4">
                                                            <button type="button" class="btn social-btn btn-google">Google +</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login page end-->
@endsection

@section('script')
    <script src="{{asset('assets/js/login.js')}}"></script>
    <script>
        $(document).ready(function(){

            // region Hide Alert
            const success_alert = $("#success-alert");
            const error_alert = $("#error-alert");

            if (success_alert.length) {
                success_alert.delay(3000).slideUp('slow', function(){
                    $(this).remove();
                })
            }

            if (error_alert.length) {
                error_alert.delay(3000).slideUp('slow', function(){
                    $(this).remove();
                })
            }
            // endregion

            // add code here
        });
    </script>
@endsection
