@extends('layouts.simple.master')
@section('title', 'Product Page')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/rating.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Product<span>Page</span></h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item">Ecommerce</li>
	<li class="breadcrumb-item active">Product Page</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="card">
      <div class="row product-page-main">
         <div class="col-xl-4">
            <div class="product-slider owl-carousel owl-theme" id="sync1">
               <div class="item"><img src="{{asset('assets/images/ecommerce/01.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/02.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/04.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/05.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/06.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/07.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/08.jpg')}}" alt=""></div>
            </div>
            <div class="owl-carousel owl-theme" id="sync2">
               <div class="item"><img src="{{asset('assets/images/ecommerce/01.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/02.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/03.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/04.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/05.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/06.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/07.jpg')}}" alt=""></div>
               <div class="item"><img src="{{asset('assets/images/ecommerce/08.jpg')}}" alt=""></div>
            </div>
         </div>
         <div class="col-xl-8">
            <div class="product-page-details">
               <h5>Fusion white & blue printed regular fit asymmetric</h5>
               <div class="d-flex">
                  <select id="u-rating-fontawesome" name="rating" autocomplete="off">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                  </select>
                  <span>(250 review)</span>
               </div>
            </div>
            <hr>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
            <div class="product-price digits">
               <del>$350.00    </del>$26.00
            </div>
            <hr>
            <div>
               <table class="product-page-width">
                  <tbody>
                     <tr>
                        <td>Brand :</td>
                        <td>shopcart_fashion</td>
                     </tr>
                     <tr>
                        <td>Availability :</td>
                        <td class="in-stock">In stock</td>
                        <td class="out-of-stock" style="display: none;">Out Of stock</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <hr>
            <ul class="product-color m-t-15">
               <li class="bg-primary"></li>
               <li class="bg-secondary"></li>
               <li class="bg-success"></li>
               <li class="bg-info"></li>
               <li class="bg-warning"></li>
            </ul>
            <div class="m-t-15">
               <button class="btn btn-primary-gradien m-r-10" type="button" data-original-title="btn btn-info-gradien" title="">Add To Cart</button>
               <button class="btn btn-secondary-gradien m-r-10" type="button" data-original-title="btn btn-info-gradien" title="">Quick View</button>
               <button class="btn btn-success-gradien" type="button" data-original-title="btn btn-info-gradien" title="">Buy Now</button>
            </div>
         </div>
      </div>
   </div>
   <div class="card">
      <div class="row product-page-main">
         <div class="col-sm-12">
            <ul class="nav nav-tabs nav-material mb-0" id="top-tab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false">Febric</a>
                  <div class="material-border"></div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Video</a>
                  <div class="material-border"></div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="true">Details</a>
                  <div class="material-border"></div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="brand-top-tab" data-toggle="tab" href="#top-brand" role="tab" aria-controls="top-brand" aria-selected="true">Brand</a>
                  <div class="material-border"></div>
               </li>
            </ul>
            <div class="tab-content" id="top-tabContent">
               <div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                  <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                  <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
               </div>
               <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                  <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
               </div>
               <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                  <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
               </div>
               <div class="tab-pane fade" id="top-brand" role="tabpanel" aria-labelledby="brand-top-tab">
                  <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/rating/jquery.barrating.js')}}"></script>
<script src="{{asset('assets/js/rating/rating-script.js')}}"></script>
<script src="{{asset('assets/js/ecommerce.js')}}"></script>
@endsection
