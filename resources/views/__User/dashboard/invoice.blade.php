@extends('__User.layout.butler')

@section('css')
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/style_loading.css')}}">
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12 d-flex justify-content-center mt-5">
    <div class="contact-form text-center">
      <h3>Your items being processed</h3>
      <h5>id order - 185768541244</h5>
      <div class="group mt-5"> 
        <div class="bigSqr">
          <div class="square first"></div>
          <div class="square second"></div>
          <div class="square third"></div>
          <div class="square fourth"></div>
        </div>
        <div class="text">loading</div>
      </div>
      <p>
        Thank you for your order <br>
        I hope you enjoy shopping on our website.
      </p>      
    </div>
  </div>
</div>  
<!-- ...::: Strat Product Section :::... -->
<div class="product-item-section  section-fluid-270 section-top-gap-100">
    <div class="box-wrapper">
        <div class="section-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center flex-warp section-content-gap-60">
                    <div class="col-xxl-4 col-lg-5 col-md-6 col-sm-8 col-auto me-5">
                        <div class="section-content">
                            <h2 class="section-title">Related Products</h2>
                            <p>This is for related product</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="top-slider-buttons">
                            <!-- If we need navigation buttons -->
                            <div class="slider-buttons">
                                <div class="slider-button button-prev"><span
                                        class="material-icons">arrow_left</span></div>
                                <div class="slider-button button-next"><span
                                        class="material-icons">arrow_right</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-item-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Slider main container -->
                        <div class="product-slider-3grids-1row">
                            <div class="swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: Strat Product Section :::... -->
@endsection

@push('JScript')
    <!-- Minify Version -->
    <script src="{{ asset('assets/Martup/js/vendor/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/Martup/js/plugins/plugins.min.js') }}"></script>

    <script src="{{asset('assets/Martup/js/main.js')}}"></script>    
@endpush