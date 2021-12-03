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
                    <h1 class="title"><span class="text-mark">User's Cart</h1><br>
                    <!-- <h4>Alamat Dikirim</h4><br> -->
                </div>
                <!-- <div class="product-single-item-style-1 swiper-slide">
                    <div class="content">
                        ini alamat
                    </div>
                </div><br> -->
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
                </div>
                <!--END CART-->
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
                <!-- PROMO -->
                <div class="product-item-wrapper">
                <div class="section-wrapper">
                    <div class="container-fluid">
                        <div class="row justify-content-between align-items-center flex-warp section-content-gap-60">
                            <div class="col-xxl-4 col-lg-5 col-md-6 col-sm-8 col-auto me-5">
                                <div class="section-content">
                                    <h2 class="section-title">PROMO</h2>
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
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-12">
                                <!-- Slider main container -->
                                <div class="product-slider-3grids-1row">
                                    <div class="swiper-container">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Start Product Single Item - Style 1 -->
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
                                                            <a href="cart.html" class="btn cart-btn">Add to cart</a>
                                                            <a href="wishlist.html" class="btn wishlist-btn"><span
                                                                    class="material-icons">favorite_border</span></a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- End Product Single Item - Style 1 -->
                                            <!-- Start Product Single Item - Style 1 -->
                                            <div class="product-single-item-style-1 swiper-slide">
                                                <a href="product-details-default.html" class="image img-responsive">
                                                    <img class="img-fluid"
                                                        src="assets/images/products/default/product-default-style-1-img-4.webp"
                                                        width="435" height="350" loading="lazy" alt="product-image">
                                                </a>
                                                <div class="content">
                                                    <div class="top">
                                                        <span class="catagory">WOMEN</span>
                                                        <h4 class="title"><a href="product-details-default.html">Slightly
                                                                jackets XL Cool </a></h4>
                                                        <span class="price">$350.00</span>
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
                                                            <a href="cart.html" class="btn cart-btn">Add to cart</a>
                                                            <a href="wishlist.html" class="btn wishlist-btn"><span
                                                                    class="material-icons">favorite_border</span></a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- End Product Single Item - Style 1 -->
                                            <!-- Start Product Single Item - Style 1 -->
                                            <div class="product-single-item-style-1 swiper-slide">
                                                <a href="product-details-default.html" class="image img-responsive">
                                                    <img class="img-fluid"
                                                        src="assets/images/products/default/product-default-style-1-img-6.webp"
                                                        width="435" height="350" loading="lazy" alt="product-image">
                                                    <ul class="tooltip-tag-items">
                                                        <li class="color-green">15%</li>
                                                    </ul>
                                                </a>
                                                <div class="content">
                                                    <div class="top">
                                                        <span class="catagory">Bag</span>
                                                        <h4 class="title"><a href="product-details-default.html">Distracted
                                                                XL bag</a></h4>
                                                        <span class="price">$1200.00 <del>$1500.00</del></span>
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
                                                            <a href="cart.html" class="btn cart-btn">Add to cart</a>
                                                            <a href="wishlist.html" class="btn wishlist-btn"><span
                                                                    class="material-icons">favorite_border</span></a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- End Product Single Item - Style 1 -->
                                            <!-- Start Product Single Item - Style 1 -->
                                            <div class="product-single-item-style-1 swiper-slide">
                                                <a href="product-details-default.html" class="image img-responsive">
                                                    <img class="img-fluid"
                                                        src="assets/images/products/default/product-default-style-1-img-1.webp"
                                                        width="435" height="350" loading="lazy" alt="product-image">
                                                    <ul class="tooltip-tag-items">
                                                        <li class="color-green">15%</li>
                                                    </ul>
                                                </a>
                                                <div class="content">
                                                    <div class="top">
                                                        <span class="catagory">MEN</span>
                                                        <h4 class="title"><a href="product-details-default.html">Man's
                                                                Outdoor Shirt</a></h4>
                                                        <span class="price">$355.00 <del>$400.00</del></span>
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
                                                            <a href="cart.html" class="btn cart-btn">Add to cart</a>
                                                            <a href="wishlist.html" class="btn wishlist-btn"><span
                                                                    class="material-icons">favorite_border</span></a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- End Product Single Item - Style 1 -->
                                            <!-- Start Product Single Item - Style 1 -->
                                            <div class="product-single-item-style-1 swiper-slide">
                                                <a href="product-details-default.html" class="image img-responsive">
                                                    <img class="img-fluid"
                                                        src="assets/images/products/default/product-default-style-1-img-2.webp"
                                                        width="435" height="350" loading="lazy" alt="product-image">
                                                </a>
                                                <div class="content">
                                                    <div class="top">
                                                        <span class="catagory">WOMEN</span>
                                                        <h4 class="title"><a href="product-details-default.html">Women
                                                                Summer deal</a></h4>
                                                        <span class="price">$550.00</span>
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
                                                            <a href="cart.html" class="btn cart-btn">Add to cart</a>
                                                            <a href="wishlist.html" class="btn wishlist-btn"><span
                                                                    class="material-icons">favorite_border</span></a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- End Product Single Item - Style 1 -->
                                            <!-- Start Product Single Item - Style 1 -->
                                            <div class="product-single-item-style-1 swiper-slide">
                                                <a href="product-details-default.html" class="image img-responsive">
                                                    <img class="img-fluid"
                                                        src="assets/images/products/default/product-default-style-1-img-3.webp"
                                                        width="435" height="350" loading="lazy" alt="product-image">
                                                </a>
                                                <div class="content">
                                                    <div class="top">
                                                        <span class="catagory">WOMEN</span>
                                                        <h4 class="title"><a href="product-details-default.html">Women
                                                                Luxury Party</a></h4>
                                                        <span class="price">$1050.00</span>
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
                                                            <a href="cart.html" class="btn cart-btn">Add to cart</a>
                                                            <a href="wishlist.html" class="btn wishlist-btn"><span
                                                                    class="material-icons">favorite_border</span></a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- End Product Single Item - Style 1 -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- END PROMO -->
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