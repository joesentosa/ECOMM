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
      <h5>id order - {{ $dataOrder->id_order }}</h5>
      @if($dataOrder->statusOrder == 0)
      <div class="group mt-5">
        <div class="bigSqr">
          <div class="square first"></div>
          <div class="square second"></div>
          <div class="square third"></div>
          <div class="square fourth"></div>
        </div>
        <div class="text">loading</div>
      </div>
      @else
      <div class="group">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 26 26"><path d="M12.875 2a1 1 0 0 0-.594.313L5.687 9H1c-.6 0-1 .4-1 1v2c0 .6.4 1 1 1h.094l2.718 9.313c.1.4.5.687 1 .687h16.5c.4 0 .8-.288 1-.688L25 13c.6 0 1-.4 1-1v-2c0-.6-.4-1-1-1h-4.594L13.72 2.281A1 1 0 0 0 12.875 2zM13 4.438L17.594 9H8.5L13 4.437zm4.563 7.343c.2 0 .38.069.53.219l.72.688c.3.3.3.824 0 1.124l-6 6c-.3.3-.825.3-1.126 0l-3.374-3.406c-.3-.3-.3-.793 0-1.093l.687-.72c.3-.3.794-.3 1.094 0l2.219 2.22L17 12a.798.798 0 0 1 .563-.219z" fill="#a0dc7a"/></svg>
          <p class="edit-text-payment">paid successfully</p>
      </div>
      @endif
      <p class="mt-3">
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
                                    <!-- Slides -->
                                    @foreach($related_barang[0] as $barang)
                                        @include('__User.dashboard.single_item')
                                    @endforeach
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
    <script>
        @if($dataOrder->statusOrder == 0)
            setTimeout(() => {
                location.reload(true);
            }, 3000);
        @endif
    </script>
@endpush
