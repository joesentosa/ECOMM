@extends('__User.layout.butler')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<div class="breadcrumb-section">
    <div class="box-wrapper">
        <div class="breadcrumb-content section-fluid-270">
            <div class="breadcrumb-wrapper">
                <!--CART-->
                <div class="content">
                    <h1 class="title"><span class="text-mark">User's Checkout</h1>
                    <h4>Alamat Dikirim</h4><br>
                </div>
                <div class="product-single-item-style-1 swiper-slide">
                    <div class="content">
                        ini alamat
                    </div>
                </div><br>
                <div class="product-single-item-style-1 swiper-slide">
                    <a href="product-details-default.html" class="image img-responsive">
                        <img class="img-fluid"
                                src="assets/images/products/default/product-default-style-1-img-5.webp"
                                width="435" height="350" loading="lazy" alt="product-image">
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
                        </div>
                    </div>
                </div><br>
                <div class="product-single-item-style-1 swiper-slide">
                    <a href="product-details-default.html" class="image img-responsive">
                        <img class="img-fluid"
                                src="assets/images/products/default/product-default-style-1-img-5.webp"
                                width="435" height="350" loading="lazy" alt="product-image">
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
                        </div>
                    </div>
                </div><br>
                <!--END CART-->
                <!-- PROMO -->
                <h3>Promo</h3>
                <select class="prduct-item-filter" name="choice">
                    <option value="first">New Arrival</option>
                    <option value="second">Featured</option>
                    <option value="third">Popular</option>
                </select><br><br><br>
                <!-- END PROMO -->
                <!--kotak pembelian-->
                <div class="col-xl-3 col-lg-3">
                    <div class="siderbar-section">
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title title-border">Ringkasan Belanja</h6>
                            <div class="sidebar-content">
                                <div class="product-single-item-style-1 swiper-slide">
                                    <a href="product-details-default.html" class="image img-responsive"></a>
                                    <div class="content">
                                        <div class="top">
                                            
                                        </div>
                                        <div class="bottom">
                                            <ul class="review-star">
                                                <h6>Total Pembelian: $400.00</h6>
                                                </li>
                                            </ul>
                                            <div class="product-event-items">
                                                <a href="checkout.html" class="btn cart-btn">Beli(2)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <!--END kotak pembelian-->
            </div>
        </div>
    </div>
</div>
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