@extends('__User.layout.master')
@section('title', 'User Profile')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photoswipe.css')}}">
@endsection

{{-- @section('style')
@endsection

@section('breadcrumb-title')
	<h2>User<span>Profile</span></h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item">User</li>
	<li class="breadcrumb-item active">User Profile</li>
@endsection --}}

@section('content')
<div class="container-fluid">
   <div class="user-profile">
      <div class="row">
         <!-- user profile first-style start-->
         <div class="col-sm-12">
            <div class="card hovercard text-center">
               <div class="cardheader"></div>
               <div class="user-image">
                  <div class="avatar"><img alt="" src="{{asset('assets/images/user/7.jpg')}}"></div>
                  <div class="icon-wrapper"><a href="{{url('user/profile/update')}}"><i class="icofont icofont-pencil-alt-5"></i></a></div>
               </div>
               <div class="info">
                  <div class="row">
                     <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="ttl-info text-left">
                                 <h6><i class="fa fa-envelope"></i>   Email</h6>
                                 <span>{{$customer->email}}</span>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="ttl-info text-left">
                                 <h6><i class="fa fa-location-arrow"></i>Address</h6>
                                 <span>{{$customer->address}}</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                        <div class="user-designation">
                           <div class="title"><a target="_blank" href="">Full Name</a></div>
                           <div class="desc mt-2">{{$customer->firstname . " " . $customer->lastname}}</div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="ttl-info text-left">
                                 <h6><i class="fa fa-barcode"></i>Zip Code</h6>
                                 <span>{{$customer->kodeZip}}</span>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="ttl-info text-left">
                                 <h6><i class="fa fa-location-pin"></i> Location</h6>
                                 <span>{{$customer->kota}}</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <hr>
               </div>
            </div>
         </div>

      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
 <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
 <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
 <script src="{{asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
 <script src="{{asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
 <script src="{{asset('assets/js/photoswipe/photoswipe.js')}}"></script>
@endsection
