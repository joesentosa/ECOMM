@extends('__User.layout.butler')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<!-- ...::: Strat Breadcrumb Section :::... -->
<div class="breadcrumb-section">
    <div class="box-wrapper">
        <div class="breadcrumb-content section-fluid-270">
            <div class="breadcrumb-wrapper">
                <div class="content">
                    <h1 class="title"><span class="text-mark">Cart</h1><br>
                </div>
                <div class="product-single-item-style-1 swiper-slide">
                    <a href="product-details-default.html" class="image img-responsive">
                        <img class="img-fluid"
                                src="assets/images/products/default/product-default-style-1-img-5.webp"
                                width="435" height="350" loading="lazy" alt="product-image">
                        <ul class="tooltip-tag-items">
                            <li class="color-yellow">15%</li>
                        </ul>
                    </a>
                    <div class="content">
                        <div class="top">
                            <span class="catagory">WOMEN</span>
                            <h4 class="title"><a href="product-details-default.html">Star Women
                                    pants</a></h4>
                            <span class="price">$200.00 <del>$300.00</del></span>
                        </div>
                        <div class="bottom">
                            <ul class="review-star">
                                <li class="fill"><span class="material-icons">star</span></li>
                                <li class="fill"><span class="material-icons">star</span></li>
                                <li class="fill"><span class="material-icons">star</span></li>
                                <li class="fill"><span class="material-icons">star</span></li>
                                <li class="fill"><span class="material-icons">star_half</span>
                                </li>
                            </ul>
                            <div class="product-event-items">
                                <a href="checkout.html" class="btn cart-btn">Add to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="product-single-item-style-1 swiper-slide">
                    <a href="product-details-default.html" class="image img-responsive">
                        <img class="img-fluid"
                                src="assets/images/products/default/product-default-style-1-img-5.webp"
                                width="435" height="350" loading="lazy" alt="product-image">
                        <ul class="tooltip-tag-items">
                            <li class="color-yellow">15%</li>
                        </ul>
                    </a>
                    <div class="content">
                        <div class="top">
                            <span class="catagory">WOMEN</span>
                            <h4 class="title"><a href="product-details-default.html">Star Women
                                    pants</a></h4>
                            <span class="price">$200.00 <del>$300.00</del></span>
                        </div>
                        <div class="bottom">
                            <ul class="review-star">
                                <li class="fill"><span class="material-icons">star</span></li>
                                <li class="fill"><span class="material-icons">star</span></li>
                                <li class="fill"><span class="material-icons">star</span></li>
                                <li class="fill"><span class="material-icons">star</span></li>
                                <li class="fill"><span class="material-icons">star_half</span>
                                </li>
                            </ul>
                            <div class="product-event-items">
                                <a href="checkout.html" class="btn cart-btn">Add to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Breadcrumb Section :::... -->
@endsection

@push('JScript')
    <!-- Global Vendor -->
    {{--    <script src="{{ asset('assets/Martup/js/vendor/modernizr-3.11.2.min.js') }}"></script>--}}
    {{--    <script src="{{ asset('assets/Martup/js/vendor/jquery-3.6.0.min.js') }}"></script>--}}
    {{--    <script src="{{ asset('assets/Martup/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>--}}
    {{--    <script src="{{ asset('assets/Martup/js/vendor/bootstrap.bundle.min.js') }}"></script>--}}
    {{--    <script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>--}}

    {{--    <script src="{{asset('assets/Martup/js/plugins/jquery.nice-select.js')}}"></script>--}}
    {{--    <script src="{{asset('assets/Martup/js/plugins/swiper-bundle.min.js')}}"></script>--}}
    {{--    <script src="{{asset('assets/Martup/js/plugins/ion.rangeSlider.min.js')}}"></script>--}}
    {{--    <script src="{{asset('assets/Martup/js/plugins/venobox.min.js')}}"></script>--}}
    {{--    <script src="{{asset('assets/Martup/js/plugins/ajax-mail.js')}}"></script>--}}

    <!-- Minify Version -->
    <script src="{{ asset('assets/Martup/js/vendor/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/Martup/js/plugins/plugins.min.js') }}"></script>

    <script src="{{asset('assets/Martup/js/main.js')}}"></script>
@endpush