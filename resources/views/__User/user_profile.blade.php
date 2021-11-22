@extends('__User.master')
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
                           <div class="desc mt-2">{{$customer->firstName . " " . $customer->lastName}}</div>
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
                  <div class="social-media">
                     <ul class="list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-rss"></i></a></li>
                     </ul>
                  </div>
                  <div class="follow">
                     <div class="row">
                        <div class="col-6 text-md-right border-right">
                           <div class="follow-num counter">25869</div>
                           <span>Follower</span>
                        </div>
                        <div class="col-6 text-md-left">
                           <div class="follow-num counter">659887</div>
                           <span>Following</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- user profile first-style end-->
         {{-- <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
               <div class="pswp__container">
                  <div class="pswp__item"></div>
                  <div class="pswp__item"></div>
                  <div class="pswp__item"></div>
               </div>
               <div class="pswp__ui pswp__ui--hidden">
                  <div class="pswp__top-bar">
                     <div class="pswp__counter"></div>
                     <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                     <button class="pswp__button pswp__button--share" title="Share"></button>
                     <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                     <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                     <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                           <div class="pswp__preloader__cut">
                              <div class="pswp__preloader__donut"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                     <div class="pswp__share-tooltip"></div>
                  </div>
                  <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                  <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                  <div class="pswp__caption">
                     <div class="pswp__caption__center"></div>
                  </div>
               </div>
            </div>
         </div> --}}
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
