@extends('__User.layout.butler')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
    <!-- ...::: Strat Hero Slider Section :::... -->
    <div class="hero-slider-section hero-slider-light section-fluid-270">
        <div class="box-wrapper">
            <div class="hero-slider-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider">
                                <!-- Slider main container -->
                                <div class="swiper-container">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        <!-- Start Hero Slider Single Item -->
                                        <div class="hero-slider-single-item--style-1 swiper-slide hero-bg">
                                            <div class="image">
                                                <img class="img-fluid"
                                                     src="{{ asset('assets/images/hero-slider/hero-slider-style-1-img-1.png') }}"
                                                     width="469" height="760" loading="lazy" alt="hero-image-1">
                                            </div>
                                            <div class="image-shape"></div>
                                            <div class="content-box">
                                                <div class="row">
                                                    <div
                                                        class="col-xl-5 offset-xl-1 col-lg-5 col-md-8 offset-md-1 col-10 ">
                                                        <div class="content">
                                                            <span class="title-tag">BEST DEAL FOREVER</span>
                                                            <h2 class="title">Best Gaming Collection </h2>
                                                            <p>There are many variations of passages of Lorem Ipsum
                                                                available, but the majority.</p>
                                                            <a href="product-details-default.html"
                                                               class="btn btn-lg btn-default">GET IT NOW</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hero-slider-shape hero-slider-top-shape"><img class="img-fluid"
                                                                                                      src="assets/images/icons/hero-slider-top-shape.svg"
                                                                                                      width="113"
                                                                                                      height="107"
                                                                                                      loading="lazy"
                                                                                                      alt="hero-shape-1">
                                            </div>
                                            <div class="hero-slider-shape hero-slider-bottom-shape"><img
                                                    class="img-fluid"
                                                    src="assets/images/icons/hero-slider-bottom-shape.svg" width="221"
                                                    height="234" loading="lazy" alt="hero-shape-1"></div>
                                        </div>
                                        <!-- End Hero Slider Single Item -->
                                        <!-- Start Hero Slider Single Item -->
                                        <div class="hero-slider-single-item--style-1 swiper-slide hero-bg">
                                            <div class="image">
                                                <img class="img-fluid"
                                                     src="assets/images/hero-slider/hero-slider-style-1-img-2.png"
                                                     width="469" height="760" loading="lazy" alt="hero-image-2">
                                            </div>
                                            <div class="image-shape"></div>
                                            <div class="content-box">
                                                <div class="row">
                                                    <div
                                                        class="col-xl-5 offset-xl-1 col-lg-5 col-md-8 offset-md-1 col-10 ">
                                                        <div class="content">
                                                            <span class="title-tag">BEST DEAL FOREVER</span>
                                                            <h2 class="title">Best Unique Collection </h2>
                                                            <p>There are many variations of passages of Lorem Ipsum
                                                                available, but the majority.</p>
                                                            <a href="product-details-default.html"
                                                               class="btn btn-lg btn-default">GET IT NOW</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hero-slider-shape hero-slider-top-shape"><img class="img-fluid"
                                                                                                      src="assets/images/icons/hero-slider-top-shape.svg"
                                                                                                      width="113"
                                                                                                      height="107"
                                                                                                      loading="lazy"
                                                                                                      alt="hero-shape-1">
                                            </div>
                                            <div class="hero-slider-shape hero-slider-bottom-shape"><img
                                                    class="img-fluid"
                                                    src="assets/images/icons/hero-slider-bottom-shape.svg" width="221"
                                                    height="234" loading="lazy" alt="hero-shape-1"></div>
                                        </div>
                                        <!-- End Hero Slider Single Item -->
                                        <!-- Start Hero Slider Single Item -->
                                        <div class="hero-slider-single-item--style-1 swiper-slide hero-bg">
                                            <div class="image">
                                                <img class="img-fluid"
                                                     src="assets/images/hero-slider/hero-slider-style-1-img-3.png"
                                                     width="469" height="760" loading="lazy" alt="hero-image-3">
                                            </div>
                                            <div class="image-shape"></div>
                                            <div class="content-box">
                                                <div class="row">
                                                    <div
                                                        class="col-xl-5 offset-xl-1 col-lg-5 col-md-8 offset-md-1 col-10 ">
                                                        <div class="content">
                                                            <span class="title-tag">BEST DEAL FOREVER</span>
                                                            <h2 class="title">Happiness in shopping. </h2>
                                                            <p>There are many variations of passages of Lorem Ipsum
                                                                available, but the majority.</p>
                                                            <a href="product-details-default.html"
                                                               class="btn btn-lg btn-default">GET IT NOW</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hero-slider-shape hero-slider-top-shape"><img class="img-fluid"
                                                                                                      src="assets/images/icons/hero-slider-top-shape.svg"
                                                                                                      width="113"
                                                                                                      height="107"
                                                                                                      loading="lazy"
                                                                                                      alt="hero-shape-1">
                                            </div>
                                            <div class="hero-slider-shape hero-slider-bottom-shape"><img
                                                    class="img-fluid"
                                                    src="assets/images/icons/hero-slider-bottom-shape.svg" width="221"
                                                    height="234" loading="lazy" alt="hero-shape-1"></div>
                                        </div>
                                        <!-- End Hero Slider Single Item -->
                                    </div>
                                    <!-- If we need pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Hero Slider Section:::... -->

    <!-- ...::: Strat Shipping Section :::... -->
    <div class="shipping-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <!-- Start Shipping Wrapper -->
            <div class="shipping-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="row justify-content-between mb-n40">
                            <div class="col-xl-3 col-md-8 col-12 mb-40">
                                <!-- Start Shipping Single Items -->
                                <div class="shipping-single-item--style-1">
                                    <div class="icon">
                                        <img class="img-fluid"
                                             src="{{ asset('assets/images/icons/hand-thumbs-up.svg') }}" width="46"
                                             height="33" loading="lazy" alt="shipping-icon-1">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Recommended Seller</h4>
                                        <p>These most-wanted best sellers are trending now and never last long!</p>
                                    </div>
                                </div>
                                <!-- Start Shipping Single Items -->
                            </div>
                            <div class="col-xl-3 col-md-8 col-12 mb-40">
                                <!-- Start Shipping Single Items -->
                                <div class="shipping-single-item--style-1">
                                    <div class="icon">
                                        <img class="img-fluid"
                                             src="{{ asset('assets/images/icons/shipping-icon-1.svg') }}" width="46"
                                             height="33" loading="lazy" alt="shipping-icon-1">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Fast Delivary</h4>
                                        <p>Fast delivery. No Problem. Another great purchase from ASAP.</p>
                                    </div>
                                </div>
                                <!-- Start Shipping Single Items -->
                            </div>
                            <div class="col-xl-3 col-md-8 col-12 mb-40">
                                <!-- Start Shipping Single Items -->
                                <div class="shipping-single-item--style-1">
                                    <div class="icon">
                                        <img class="img-fluid" src="{{ asset('assets/images/icons/clock-history.svg') }}" width="46"
                                             height="33" loading="lazy" alt="shipping-icon-2">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">FAST RESPONSE</h4>
                                        <p>We're here, We're ready to help, and We care about YOU.</p>
                                    </div>
                                </div>
                                <!-- Start Shipping Single Items -->
                            </div>
                            <div class="col-xl-3 col-md-8 col-12 mb-40">
                                <!-- Start Shipping Single Items -->
                                <div class="shipping-single-item--style-1">
                                    <div class="icon">
                                        <img class="img-fluid" src="assets/images/icons/shipping-icon-3.svg" width="46"
                                             height="33" loading="lazy" alt="shipping-icon-3">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Premium Quality</h4>
                                        <p>We only provide The Only the best-branded gaming gear</p>
                                    </div>
                                </div>
                                <!-- Start Shipping Single Items -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Shipping Wrapper -->
        </div>
    </div>
    <!-- ...::: End Shipping Section :::... -->

    <!-- ...::: Strat Company Logo Section Section :::... -->
    <div class="company-logo-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="company-logo-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Start Company Slider -->
                            <div class="company-slider company-slider-bg">
                                <!-- Slider main container -->
                                <div class="swiper-container">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        @foreach($brands as $index => $brand)
                                            <!-- Start Company Slider Single Item -->
                                            <a href="#" class="company-slider-single-item swiper-slide">
                                                <div class="image img-brand">
                                                    <img class="img-fluid"
                                                         src="{{ $brand->gambar }}" loading="lazy"
                                                         alt="{{ "company-logo-" . ($index + 1) }}">
                                                </div>
                                            </a>
                                            <!-- End Company Slider Single Item -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- End Company Slider -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: Strat Company Logo Section Section :::... -->

    <!-- ...::: Strat Product Section :::... -->
    <div class="product-item-section  section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="section-wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-between align-items-center flex-warp section-content-gap-60">
                        <div class="col-xxl-4 col-lg-5 col-md-6 col-sm-8 col-auto me-5">
                            <div class="section-content">
                                <h2 class="section-title">Best Seller</h2>
                                <p>Here lies our hopes and dreams to make this project successfull</p>
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
                                        @foreach($barangs as $index => $barang)
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

    <div class="d-flex justify-content-center">
        <a href="{{ url('catalog') }}" class="btn btn-md btn-default btn-section-bottom">View
            All Product</a>
    </div>

    <!-- ...::: Strat Product Tab Item Section :::... -->
    <div class="product-tab-items-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="section-wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-between align-items-center flex-warp">
                        <div class="col-xxl-4 col-lg-5 col-md-6 col-sm-8 col-auto me-5">
                            <div class="section-content section-content-gap-60">
                                <h2 class="section-title">All Category</h2>
                                <p>All the dream and hope for this project to success :')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tab-item-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Start Product Tab Items  -->
                            <ul class="product-tab nav" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all"
                                            type="button">All <img src="assets/images/icons/product-tab-icon-1.svg"
                                                                   alt=""></button>
                                </li>
                                @foreach($kategories as $index => $kategory)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kat-{{$kategory->id_kategori}}" type="button">
                                        {{ $kategory->nama_kategori }}
                                    <img src="assets/images/icons/product-tab-icon-2.svg" alt=""></button>
                                </li>
                                @endforeach
                            </ul>
                            <!-- End Product Tab Items  -->

                            <!-- Start Tab Content Items -->
                            <div class="tab-content">

                                <!-- Start Tab Content Single Item -->
                                <div class="tab-pane tab-animate show active" id="all" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="center-slider-nav product-slider-3grids-2rows">
                                                <!-- Slider main container -->
                                                <div class="swiper-container">
                                                    <!-- Additional required wrapper -->
                                                    <div class="swiper-wrapper">
                                                        <!-- Slides -->
                                                        @foreach($barangs as $barang)
                                                            @include('__User.dashboard.single_item')
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <!-- If we need navigation buttons -->
                                                <div class="center-slider-nav-buttons slider-buttons">
                                                    <div class="slider-button button-prev"><span class="material-icons">arrow_left</span>
                                                    </div>
                                                    <div class="slider-button button-next"><span class="material-icons">arrow_right</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tab Content Single Item -->

                                @foreach($kategories as $index => $kategory)
                                    @include('__User.dashboard.single_kategory')
                                @endforeach
                            </div>
                            <!-- End Tab Content Items -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: Strat Product Tab Item Section :::... -->

    <!-- ...::: Strat Product Section :::... -->
    <div class="product-item-section  section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="section-wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-between align-items-center flex-warp section-content-gap-60">
                        <div class="col-xxl-4 col-lg-5 col-md-6 col-sm-8 col-auto me-5">
                            <div class="section-content">
                                <h2 class="section-title">Exclusive Collection</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
        </div>
    </div>
    <!-- ...::: Strat Product Section :::... -->

    <!-- ...::: Strat Subscribe Section :::... -->
    <div class="newsletter-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="newsletter-wrapper">
                <div class="container-fluid">
                    <div class="col-12">
                        <div class="newsletter-area newsletter-area-style-1">
                            <div class="content content-left">
                                <h4 class="title">Newsletter</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing.
                                    printing and typesetting industry.</p>
                                <div class="newsletter-form">
                                    <input type="email" placeholder="Enter your email" required>
                                    <button type="submit">Subscribe</button>
                                </div>
                                <div class="image-shape image-shape-left"><img class="img-fluid"
                                                                               src="assets/images/icons/newsletter-paper-plane.svg"
                                                                               width="119" height="74" loading="lazy"
                                                                               alt="newsletter-paper-plane"></div>
                            </div>
                            <div class="content content-right">
                                <h4 class="title">Download App</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing.
                                    printing and typesetting industry.</p>

                                <div class="apps-btn">
                                    <a href="#"><img class="img-fluid" src="assets/images/icons/iphone-app-button.png"
                                                     width="128" height="45" loading="lazy" alt="iphone-app-button"></a>
                                    <a href="#"><img class="img-fluid"
                                                     src="assets/images/icons/googleplay-app-button.png" width="135"
                                                     height="4545" loading="lazy" alt="googleplay-app-button"></a>
                                </div>
                                <div class="image-shape image-shape-right"><img class="img-fluid"
                                                                                src="assets/images/icons/newsletter-cloud-computing.svg"
                                                                                width="94" height="81" loading="lazy"
                                                                                alt="newsletter-cloud-computing"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Subscribe Section :::... -->
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
