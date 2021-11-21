@extends('__User.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
@endsection

@section('style')
@endsection


@section('content')
<!-- login page start-->
<div class="authentication-main">
   <div class="row">
      <div class="col-md-12">
         <div class="auth-innerright">
            <div class="authentication-box">
               <div class="card mt-4">
                  <div class="card-body">
                     <div class="cont text-center">
                        <div>
                           <form class="theme-form">
                              <h4>LOGIN</h4>
                              <h6>Enter your Username and Password</h6>
                              <div class="form-group">
                                 <label class="col-form-label pt-0">Your Name</label>
                                 <input class="form-control" type="text" required="">
                              </div>
                              <div class="form-group">
                                 <label class="col-form-label">Password</label>
                                 <input class="form-control" type="password" required="">
                              </div>
                              <div class="checkbox p-0">
                                 <input id="checkbox1" type="checkbox">
                                 <label for="checkbox1">Remember me</label>
                              </div>
                              <div class="form-group form-row mt-3 mb-0">
                                 <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
                              </div>
                              <div class="login-divider"></div>
                              <div class="social mt-3">
                                 <div class="form-row btn-showcase">
                                    <div class="col-md-4 col-sm-6">
                                       <button class="btn social-btn btn-fb">Facebook</button>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <button class="btn social-btn btn-twitter">Twitter</button>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <button class="btn social-btn btn-google">Google + </button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="social mt-3">
                           <div class="form-row btn-showcase">
                              <div class="col-md-8 col-sm-6">
                                 <form action="/register" method="get">
                                    <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
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
</div>
<!-- login page end-->
@endsection

@section('script')
@endsection