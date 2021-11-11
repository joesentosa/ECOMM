@extends('__User.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
@endsection

@section('style')
@endsection

@section('content')
<div class="card" style="margin: auto;">
    {{-- <div class="card-header">
       <h5>Auto Height Example</h5>
    </div> --}}
    <div class="container">
        <div class="card-body">
            <div class="owl-carousel owl-theme" id="owl-carousel-14">
               <div class="item"><img src="{{asset('assets/images/slider/1.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/slider/2.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/slider/3.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/slider/4.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/slider/5.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/slider/6.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/slider/7.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/slider/8.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/slider/9.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/slider/10.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/slider/11.jpg')}}" alt=""></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 xl-50 box-col-6" style="">
                <div class="card gradient-primary o-hidden monthly-overview">
                   <div class="card-header no-border bg-transparent pb-0">
                      <h5>Smart-Watch</h5>
                      <h6 class="mb-2">60% OFF</h6>
                      <span class="pull-right right-badge"><span class="badge badge-pill">$301</span></span>
                   </div>
                   <div class="card-body pt-0">
                      <ul class="rounds-decore">
                         <li></li>
                         <li></li>
                         <li></li>
                         <li>                                       </li>
                      </ul>
                      <span class="overview-dots full-lg-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                      <div class="p-watch"><img class="img-fluid" src="{{asset('assets/images/dashboard-ecommerce/watch.png')}}" alt=""></div>
                   </div>
                </div>
            </div>
            <div class="col-xl-4 xl-50 box-col-6" style="">
                <div class="card gradient-secondary o-hidden monthly-overview">
                   <div class="card-header no-border bg-transparent pb-0">
                      <h5>Smart-Watch</h5>
                      <h6 class="mb-2">60% OFF</h6>
                      <span class="pull-right right-badge"><span class="badge badge-pill">$301</span></span>
                   </div>
                   <div class="card-body pt-0">
                      <ul class="rounds-decore">
                         <li></li>
                         <li></li>
                         <li></li>
                         <li>                                       </li>
                      </ul>
                      <span class="overview-dots full-lg-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                      <div class="p-watch"><img class="img-fluid" src="{{asset('assets/images/dashboard-ecommerce/watch.png')}}" alt=""></div>
                   </div>
                </div>
            </div>
            <div class="col-xl-4 xl-50 box-col-6" style="">
                <div class="card gradient-warning o-hidden monthly-overview">
                   <div class="card-header no-border bg-transparent pb-0">
                      <h5>Smart-Watch</h5>
                      <h6 class="mb-2">60% OFF</h6>
                      <span class="pull-right right-badge"><span class="badge badge-pill">$301</span></span>
                   </div>
                   <div class="card-body pt-0">
                      <ul class="rounds-decore">
                         <li></li>
                         <li></li>
                         <li></li>
                         <li>                                       </li>
                      </ul>
                      <span class="overview-dots full-lg-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                      <div class="p-watch"><img class="img-fluid" src="{{asset('assets/images/dashboard-ecommerce/watch.png')}}" alt=""></div>
                   </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card height-equal">
                   <div class="card-body">
                      <ul class="nav nav-dark" id="pills-darktab" role="tablist" style="margin-left: 40%;">
                         <li class="nav-item"><a class="nav-link active" id="pills-darkhome-tab" data-toggle="pill" href="#pills-darkhome" role="tab" aria-controls="pills-darkhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Featured</a></li>
                         <li class="nav-item"><a class="nav-link" id="pills-darkprofile-tab" data-toggle="pill" href="#pills-darkprofile" role="tab" aria-controls="pills-darkprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>On Sale</a></li>
                         <li class="nav-item"><a class="nav-link" id="pills-darkcontact-tab" data-toggle="pill" href="#pills-darkcontact" role="tab" aria-controls="pills-darkcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Top Rated</a></li>
                      </ul>
                      <div class="tab-content" id="pills-darktabContent">
                         <div class="tab-pane fade show active" id="pills-darkhome" role="tabpanel" aria-labelledby="pills-darkhome-tab">
                            <div class="row" style="margin-top: 5%;">
                                <div class="col-xl-4 xl-20 box-col-6" style="">
                                    <div class="card gradient-primary o-hidden monthly-overview">
                                       <div class="card-header no-border bg-transparent pb-0">
                                          <h5>Smart-Watch</h5>
                                          <h6 class="mb-2">60% OFF</h6>
                                          <span class="pull-right right-badge"><span class="badge badge-pill">$301</span></span>
                                       </div>
                                       <div class="card-body pt-0">
                                          <ul class="rounds-decore">
                                             <li></li>
                                             <li></li>
                                             <li></li>
                                             <li>                                       </li>
                                          </ul>
                                          <span class="overview-dots full-lg-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                                          <div class="p-watch"><img class="img-fluid" src="{{asset('assets/images/dashboard-ecommerce/watch.png')}}" alt=""></div>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 xl-50 box-col-6" style="">
                                    <div class="card gradient-primary o-hidden monthly-overview">
                                       <div class="card-header no-border bg-transparent pb-0">
                                          <h5>Smart-Watch</h5>
                                          <h6 class="mb-2">60% OFF</h6>
                                          <span class="pull-right right-badge"><span class="badge badge-pill">$301</span></span>
                                       </div>
                                       <div class="card-body pt-0">
                                          <ul class="rounds-decore">
                                             <li></li>
                                             <li></li>
                                             <li></li>
                                             <li>                                       </li>
                                          </ul>
                                          <span class="overview-dots full-lg-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                                          <div class="p-watch"><img class="img-fluid" src="{{asset('assets/images/dashboard-ecommerce/watch.png')}}" alt=""></div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="pills-darkprofile" role="tabpanel" aria-labelledby="pills-darkprofile-tab">
                            <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                         </div>
                         <div class="tab-pane fade" id="pills-darkcontact" role="tabpanel" aria-labelledby="pills-darkcontact-tab">
                            <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
        </div>
        <h1>Best Seller</h1>

    </div>

 </div>
@endsection

@section('script')
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl-custom.js')}}"></script>
@endsection
