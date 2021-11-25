@extends('__User.layout.butler')

@section('css')
@endsection

@section('style')
@endsection

@section('content')

    <!-- .....:::::: Start Header Section - Light Header :::::.... -->
    <header
        class="header-section @@pos_absolute pos-relative light-bg sticky-header d-none d-lg-block section-fluid-270">
        <div class="header-wrapper pos-relative">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <!-- Start Header Logo -->
                        <a href="{{ route('page.index.customer') }}" class="header-logo">
                            <img class="img-fluid" src="{{ asset('assets/igw/logo-light-theme.png') }}" alt="">
                        </a>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <div class="header-event">
                            <!-- Start Menu event -->
                            <div class="menu-event dropdown">
                                <button class="main-menu-event dropdown-toggle" data-bs-toggle="dropdown"><img
                                        src="{{ asset('assets/images/icons/icon-open-menu.svg') }}"
                                        alt=""><span>Menu</span><img
                                        src="{{ asset('assets/images/icons/icon-arrow-drop-down.svg') }}" alt="">
                                </button>
                                <ul class="mainmenu-nav dropdown-menu">
                                    <li class="menu-items">
                                        <a href="{{ route('page.index.customer') }}">Home <span class="material-icons">arrow_right</span></a>
                                        <div class="has-dropdown">
                                            <div class="menu-content">
                                                <h6 class="title">Home Page</h6>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('page.index.customer') }}">Home 1</a></li>
                                                    <li><a href="{{ route('page.index.customer') }}">Home 2</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-items">
                                        <a href="shop-grid-sidebar-left.html">Shop <span class="material-icons">arrow_right</span></a>
                                        <div class="has-dropdown megamenu">
                                            <div class="menu-content">
                                                <h6 class="title">Shop Page</h6>
                                                <ul class="submenu">
                                                    <li><a href="shop-grid-sidebar-left.html">Left Sidebar</a></li>
                                                    <li><a href="shop-grid-sidebar-right.html">Right Sidebar</a></li>
                                                    <li><a href="shop-grid-sidebar-full-width-3-column.html">Shop Full
                                                            Width</a></li>
                                                </ul>
                                            </div>
                                            <div class="menu-content">
                                                <h6 class="title">Product Details Page</h6>
                                                <ul class="submenu">
                                                    <li><a href="product-details-default.html">Product Default</a></li>
                                                    <li><a href="product-details-group.html">Product Group</a></li>
                                                    <li><a href="product-details-left-sidebar.html">Product Left
                                                            Sidebar</a></li>
                                                    <li><a href="product-details-right-sidebar.html">Product Right
                                                            Sidebar</a></li>
                                                </ul>
                                            </div>
                                            <div class="menu-content">
                                                <h6 class="title">Others Page</h6>
                                                <ul class="submenu">
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="compare.html">Compare</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="my-account.html">MyAccount</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-items">
                                        <a href="blog-list-left-sidebar.html">Blog <span class="material-icons">arrow_right</span></a>
                                        <div class="has-dropdown megamenu">
                                            <div class="menu-content">
                                                <h6 class="title">Blog List Full Width</h6>
                                                <ul class="submenu">
                                                    <li><a href="blog-list-3-grid-full-width.html">Grid 3 Full Width</a>
                                                    </li>
                                                    <li><a href="blog-list-4-grid-full-width.html">Grid 4 Full Width</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="menu-content">
                                                <h6 class="title">Blog List Sidebar</h6>
                                                <ul class="submenu">
                                                    <li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </div>
                                            <div class="menu-content">
                                                <h6 class="title">Blog Details</h6>
                                                <ul class="submenu">
                                                    <li><a href="blog-details-full-width.html">Full Width</a></li>
                                                    <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-items">
                                        <a href="#">Pages <span class="material-icons">arrow_right</span></a>
                                        <div class="has-dropdown">
                                            <div class="menu-content">
                                                <h6 class="title">Inner Pages</h6>
                                                <ul class="submenu">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="error.html">404-Error</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-items"><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>

                            <div class="search-event">
                                <input class="header-search" type="search" placeholder="Search">
                                <button class="header-search-btn" type="submit"><img
                                        src="assets/images/icons/icon-search.svg" alt=""></button>
                            </div>
                            <!-- End Menu event -->
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-action">
                            <button class="header-action-item header-action-wishlist" data-bs-toggle="offcanvas"
                                    data-bs-target="#wishlistOffcanvas"><img
                                    src="assets/images/icons/icon-heart-dark.svg" alt=""><span
                                    class="count-tag">01</span></button>
                            <button class="header-action-item header-action-wishlist" data-bs-toggle="offcanvas"
                                    data-bs-target="#addcartOffcanvas"><img
                                    src="assets/images/icons/icon-shopping-bag-dark.svg" alt=""><span
                                    class="item-count item-count--light">02 ITEMS</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- .....:::::: End Header Section - Light Header :::::.... -->

    <!-- .....:::::: Start Mobile Header Section :::::.... -->
    <div class="mobile-header d-block d-lg-none">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="mobile-logo">
                        <a href="index.html"><img src="assets/images/logo/logo-light-theme.png" alt=""></a>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="mobile-action-link text-end d-flex ">
                        <button data-bs-toggle="offcanvas" data-bs-target="#toggleMenu"><span class="material-icons">menu</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .....:::::: Start MobileHeader Section :::::.... -->

    <!--  .....::::: Start Offcanvas Mobile Menu Section :::::.... -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="toggleMenu">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="d-flex justify-content-center ">
                <a href="wishlist.html" class="header-action-item header-action-wishlist"><img
                        src="assets/images/icons/icon-heart-dark.svg" alt=""><span class="count-tag">01</span></a>
                <a href="cart.html" class="header-action-item header-action-wishlist"><img
                        src="assets/images/icons/icon-shopping-bag-dark.svg" alt=""><span
                        class="item-count item-count--light">02 ITEMS</span></a>
            </div>

            <div class="header-event mobile-search my-5">
                <div class="search-event">
                    <input class="header-search" type="search">
                    <button class="header-search-btn" type="submit"><img src="assets/images/icons/icon-search.svg"
                                                                         alt=""></button>
                </div>
            </div>

            <!-- Start Offcanvas Mobile Menu Wrapper -->
            <div class="offcanvas-mobile-menu-wrapper">
                <!-- Start Mobile Menu  -->
                <div class="mobile-menu-bottom">
                    <!-- Start Mobile Menu Nav -->
                    <div class="offcanvas-menu">
                        <ul>
                            <li>
                                <a href="#"><span>Home</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span>Shop</span></a>
                                <ul class="mobile-sub-menu">
                                    <li>
                                        <a href="#">Shop Page</a>
                                        <ul class="mobile-sub-menu">
                                            <li><a href="shop-grid-sidebar-left.html">Left Sidebar</a></li>
                                            <li><a href="shop-grid-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a href="shop-grid-sidebar-full-width-3-column.html">Shop Full Width</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mobile-sub-menu">
                                    <li>
                                        <a href="#">Product Page</a>
                                        <ul class="mobile-sub-menu">
                                            <li><a href="product-details-default.html">Product Default</a></li>
                                            <li><a href="product-details-group.html">Product Group</a></li>
                                            <li><a href="product-details-left-sidebar.html">Product Left Sidebar</a>
                                            </li>
                                            <li><a href="product-details-right-sidebar.html">Product Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mobile-sub-menu">
                                    <li>
                                        <a href="#">Others Page</a>
                                        <ul class="mobile-sub-menu">
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="my-account.html">MyAccount</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span>Blogs</span></a>
                                <ul class="mobile-sub-menu">
                                    <li>
                                        <a href="#">Blog List</a>
                                        <ul class="mobile-sub-menu">
                                            <li><a href="blog-list-3-grid-full-width.html">Grid 3 Full Width</a></li>
                                            <li><a href="blog-list-4-grid-full-width.html">Grid 4 Full Width</a></li>
                                            <li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mobile-sub-menu">
                                    <li>
                                        <a href="#">Blog Details</a>
                                        <ul class="mobile-sub-menu">
                                            <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span>Pages</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="about.html"><span>About Us</span></a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="error.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html"><span>Contact</span></a>
                            </li>
                        </ul>
                    </div> <!-- End Mobile Menu Nav -->
                </div> <!-- End Mobile Menu -->

                <!-- Start Mobile contact Info -->
                <div class="mobile-contact-info text-center">
                    <ul class="social-link">
                        <li><a href="https://www.facebook.com/" target="_blank" rel="noopener"><img class="icon-svg"
                                                                                                    src="assets/images/icons/icon-facebook-f-dark.svg"
                                                                                                    alt=""></a>
                        </li>
                        <li><a href="https://twitter.com/" target="_blank" rel="noopener"><img class="icon-svg"
                                                                                               src="assets/images/icons/icon-twitter-dark.svg"
                                                                                               alt=""></a>
                        </li>
                        <li><a href="https://www.pinterest.com/" target="_blank" rel="noopener"><img class="icon-svg"
                                                                                                     src="assets/images/icons/icon-pinterest-p-dark.svg"
                                                                                                     alt=""></a></li>
                        <li><a href="https://dribbble.com/" target="_blank" rel="noopener"><img class="icon-svg"
                                                                                                src="assets/images/icons/icon-dribbble-dark.svg"
                                                                                                alt=""></a></li>
                    </ul>
                </div>
                <!-- End Mobile contact Info -->

            </div> <!-- End Offcanvas Mobile Menu Wrapper -->
        </div>
    </div>
    <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!--  .....::::: Start Wishlist Offcanvas Section :::::.... -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="wishlistOffcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Wishlist</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="offcanvas-products-list">
                <li class="single-item">
                    <div class="box">
                        <a href="" class="image">
                            <img src="assets/images/products/small/product-small-1.webp" alt=""
                                 class="offcanvas-wishlist-image">
                        </a>
                        <div class="content">
                            <a href="" class="title">Tops</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-delete text-right">
                        <a href="#"><img src="assets/images/icons/icon-trash.svg" alt=""></a>
                    </div>
                </li>
                <li class="single-item">
                    <div class="box">
                        <a href="" class="image">
                            <img src="assets/images/products/small/product-small-2.webp" alt=""
                                 class="offcanvas-wishlist-image">
                        </a>
                        <div class="content">
                            <a href="" class="title">Leggings</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-delete text-right">
                        <a href="#"><img src="assets/images/icons/icon-trash.svg" alt=""></a>
                    </div>
                </li>
                <li class="single-item">
                    <div class="box">
                        <a href="" class="image">
                            <img src="assets/images/products/small/product-small-3.webp" alt=""
                                 class="offcanvas-wishlist-image">
                        </a>
                        <div class="content">
                            <a href="" class="title">Casual Shirt</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$65.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-delete text-right">
                        <a href="#"><img src="assets/images/icons/icon-trash.svg" alt=""></a>
                    </div>
                </li>
            </ul>
            <div class="offcanvas-action-link">
                <a href="wishlist.html" class="btn">View wishlist</a>
            </div>
        </div>
    </div>
    <!-- ...:::: End Wishlist Offcanvas Section:::... -->

    <!--  .....::::: Start Add Cart Offcanvas Section :::::.... -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="addcartOffcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Add Cart</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="offcanvas-products-list">
                <li class="single-item">
                    <div class="box">
                        <a href="" class="image">
                            <img src="assets/images/products/small/product-small-1.webp" alt=""
                                 class="offcanvas-wishlist-image">
                        </a>
                        <div class="content">
                            <a href="" class="title">Tops</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-delete text-right">
                        <a href="#"><img src="assets/images/icons/icon-trash.svg" alt=""></a>
                    </div>
                </li>
                <li class="single-item">
                    <div class="box">
                        <a href="" class="image">
                            <img src="assets/images/products/small/product-small-2.webp" alt=""
                                 class="offcanvas-wishlist-image">
                        </a>
                        <div class="content">
                            <a href="" class="title">Leggings</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-delete text-right">
                        <a href="#"><img src="assets/images/icons/icon-trash.svg" alt=""></a>
                    </div>
                </li>
                <li class="single-item">
                    <div class="box">
                        <a href="" class="image">
                            <img src="assets/images/products/small/product-small-3.webp" alt=""
                                 class="offcanvas-wishlist-image">
                        </a>
                        <div class="content">
                            <a href="" class="title">Casual Shirt</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$65.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-delete text-right">
                        <a href="#"><img src="assets/images/icons/icon-trash.svg" alt=""></a>
                    </div>
                </li>
            </ul>
            <div class="offcanvas-action-link">
                <a href="cart.html" class="btn">Add Cart</a>
                <a href="checkout.html" class="btn">Checkout</a>
            </div>
        </div>
    </div>
    <!-- ...:::: End Add Cart Offcanvas Section:::... -->

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
                                                <div class="image">
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
                                        <!-- Start Product Single Item - Style 1 -->
                                        <div class="product-single-item-style-1 swiper-slide">
                                            <a href="product-details-default.html" class="image img-responsive">
                                                <img class="img-fluid"
                                                     src="
                                                         @if(!is_null($barang->gambar->first()))
                                                            {{ $barang->gambar->first()->gambar }}
                                                         @endif
                                                         "
                                                     width="435" height="350" loading="lazy" alt="product-image">
{{--                                                <ul class="tooltip-tag-items">--}}
{{--                                                    <li class="color-yellow">15%</li>--}}
{{--                                                </ul>--}}
                                            </a>
                                            <div class="content">
                                                <div class="top">
{{--                                                    <span class="catagory">WOMEN</span>--}}
                                                    <h4 class="title">
                                                        <a href="product-details-default.html">
                                                            {{ $barang->namaBarang }}
                                                        </a>
                                                    </h4>
                                                    <span class="price">{{generateFormatRP($barang->harga)}}
                                                        <del>
                                                            @php
                                                                $div = pow(10, strlen((string)$barang->harga) - 1);
                                                            @endphp
                                                            {{ generateFormatRP(ceil($barang->harga / $div) * $div) }}
                                                        </del>
                                                    </span>
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
        <a href="shop-grid-sidebar-left.html" class="btn btn-md btn-default btn-section-bottom">View
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
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#men" type="button">
                                            Men <img src="assets/images/icons/product-tab-icon-2.svg" alt=""></button>
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
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-1.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">MEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Man's
                                                                            Outdoor Shirt</a></h4>
                                                                    <span class="price">$355.00 <del>$400.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-2.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Summer deal</a></h4>
                                                                    <span class="price">$550.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-3.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Luxury Party</a></h4>
                                                                    <span class="price">$1050.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-5.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-yellow">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Star
                                                                            Women pants</a></h4>
                                                                    <span class="price">$200.00 <del>$300.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-4.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Slightly
                                                                            jackets XL Cool </a></h4>
                                                                    <span class="price">$350.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-6.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">Bag</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Distracted
                                                                            XL bag</a></h4>
                                                                    <span class="price">$1200.00 <del>$1500.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-4.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Slightly
                                                                            jackets XL Cool </a></h4>
                                                                    <span class="price">$350.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-5.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-yellow">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Star
                                                                            Women pants</a></h4>
                                                                    <span class="price">$200.00 <del>$300.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-6.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">Bag</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Distracted
                                                                            XL bag</a></h4>
                                                                    <span class="price">$1200.00 <del>$1500.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-2.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Summer deal</a></h4>
                                                                    <span class="price">$550.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-1.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">MEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Man's
                                                                            Outdoor Shirt</a></h4>
                                                                    <span class="price">$355.00 <del>$400.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-3.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Luxury Party</a></h4>
                                                                    <span class="price">$1050.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
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
                                <!-- Start Tab Content Single Item -->
                                <div class="tab-pane tab-animate" id="men" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="center-slider-nav product-slider-3grids-2rows">
                                                <!-- Slider main container -->
                                                <div class="swiper-container">
                                                    <!-- Additional required wrapper -->
                                                    <div class="swiper-wrapper">
                                                        <!-- Slides -->

                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-7.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-yellow">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Star
                                                                            Women pants</a></h4>
                                                                    <span class="price">$200.00 <del>$300.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-8.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Slightly
                                                                            jackets XL Cool </a></h4>
                                                                    <span class="price">$350.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-9.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">Bag</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Distracted
                                                                            XL bag</a></h4>
                                                                    <span class="price">$1200.00 <del>$1500.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->

                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-10.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">MEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Man's
                                                                            Outdoor Shirt</a></h4>
                                                                    <span class="price">$355.00 <del>$400.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-11.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Summer deal</a></h4>
                                                                    <span class="price">$550.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-12.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Luxury Party</a></h4>
                                                                    <span class="price">$1050.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->

                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-10.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Slightly
                                                                            jackets XL Cool </a></h4>
                                                                    <span class="price">$350.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-11.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-yellow">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Star
                                                                            Women pants</a></h4>
                                                                    <span class="price">$200.00 <del>$300.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-12.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">Bag</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Distracted
                                                                            XL bag</a></h4>
                                                                    <span class="price">$1200.00 <del>$1500.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->

                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-7.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Summer deal</a></h4>
                                                                    <span class="price">$550.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-8.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">MEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Man's
                                                                            Outdoor Shirt</a></h4>
                                                                    <span class="price">$355.00 <del>$400.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-9.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Luxury Party</a></h4>
                                                                    <span class="price">$1050.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
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
                                <!-- Start Tab Content Single Item -->
                                <div class="tab-pane tab-animate" id="women" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="center-slider-nav product-slider-3grids-2rows">
                                                <!-- Slider main container -->
                                                <div class="swiper-container">
                                                    <!-- Additional required wrapper -->
                                                    <div class="swiper-wrapper">
                                                        <!-- Slides -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-13.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">MEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Man's
                                                                            Outdoor Shirt</a></h4>
                                                                    <span class="price">$355.00 <del>$400.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-14.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Summer deal</a></h4>
                                                                    <span class="price">$550.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-15.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Luxury Party</a></h4>
                                                                    <span class="price">$1050.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-16.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-yellow">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Star
                                                                            Women pants</a></h4>
                                                                    <span class="price">$200.00 <del>$300.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-17.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Slightly
                                                                            jackets XL Cool </a></h4>
                                                                    <span class="price">$350.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-18.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">Bag</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Distracted
                                                                            XL bag</a></h4>
                                                                    <span class="price">$1200.00 <del>$1500.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-19.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Slightly
                                                                            jackets XL Cool </a></h4>
                                                                    <span class="price">$350.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-13.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-yellow">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Star
                                                                            Women pants</a></h4>
                                                                    <span class="price">$200.00 <del>$300.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-14.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">Bag</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Distracted
                                                                            XL bag</a></h4>
                                                                    <span class="price">$1200.00 <del>$1500.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-15.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Summer deal</a></h4>
                                                                    <span class="price">$550.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-16.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">MEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Man's
                                                                            Outdoor Shirt</a></h4>
                                                                    <span class="price">$355.00 <del>$400.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-17.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Luxury Party</a></h4>
                                                                    <span class="price">$1050.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
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
                                <!-- Start Tab Content Single Item -->
                                <div class="tab-pane tab-animate" id="kid" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="center-slider-nav product-slider-3grids-2rows">
                                                <!-- Slider main container -->
                                                <div class="swiper-container">
                                                    <!-- Additional required wrapper -->
                                                    <div class="swiper-wrapper">
                                                        <!-- Slides -->

                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-20.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-yellow">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Star
                                                                            Women pants</a></h4>
                                                                    <span class="price">$200.00 <del>$300.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-21.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Slightly
                                                                            jackets XL Cool </a></h4>
                                                                    <span class="price">$350.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-22.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">Bag</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Distracted
                                                                            XL bag</a></h4>
                                                                    <span class="price">$1200.00 <del>$1500.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->

                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-23.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">MEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Man's
                                                                            Outdoor Shirt</a></h4>
                                                                    <span class="price">$355.00 <del>$400.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-24.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Summer deal</a></h4>
                                                                    <span class="price">$550.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-25.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Luxury Party</a></h4>
                                                                    <span class="price">$1050.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->

                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-24.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Slightly
                                                                            jackets XL Cool </a></h4>
                                                                    <span class="price">$350.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-25.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-yellow">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Star
                                                                            Women pants</a></h4>
                                                                    <span class="price">$200.00 <del>$300.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-22.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">Bag</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Distracted
                                                                            XL bag</a></h4>
                                                                    <span class="price">$1200.00 <del>$1500.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->

                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-20.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Summer deal</a></h4>
                                                                    <span class="price">$550.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-21.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">MEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Man's
                                                                            Outdoor Shirt</a></h4>
                                                                    <span class="price">$355.00 <del>$400.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-22.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Luxury Party</a></h4>
                                                                    <span class="price">$1050.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->

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
                                <!-- Start Tab Content Single Item -->
                                <div class="tab-pane tab-animate" id="others" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="center-slider-nav product-slider-3grids-2rows">
                                                <!-- Slider main container -->
                                                <div class="swiper-container">
                                                    <!-- Additional required wrapper -->
                                                    <div class="swiper-wrapper">
                                                        <!-- Slides -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-1.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">MEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Man's
                                                                            Outdoor Shirt</a></h4>
                                                                    <span class="price">$355.00 <del>$400.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-2.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Summer deal</a></h4>
                                                                    <span class="price">$550.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-3.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Luxury Party</a></h4>
                                                                    <span class="price">$1050.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-5.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-yellow">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Star
                                                                            Women pants</a></h4>
                                                                    <span class="price">$200.00 <del>$300.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-4.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Slightly
                                                                            jackets XL Cool </a></h4>
                                                                    <span class="price">$350.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-6.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">Bag</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Distracted
                                                                            XL bag</a></h4>
                                                                    <span class="price">$1200.00 <del>$1500.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-4.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Slightly
                                                                            jackets XL Cool </a></h4>
                                                                    <span class="price">$350.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-5.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-yellow">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Star
                                                                            Women pants</a></h4>
                                                                    <span class="price">$200.00 <del>$300.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-6.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">Bag</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Distracted
                                                                            XL bag</a></h4>
                                                                    <span class="price">$1200.00 <del>$1500.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-2.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Summer deal</a></h4>
                                                                    <span class="price">$550.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-1.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                                <ul class="tooltip-tag-items">
                                                                    <li class="color-green">15%</li>
                                                                </ul>
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">MEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Man's
                                                                            Outdoor Shirt</a></h4>
                                                                    <span class="price">$355.00 <del>$400.00</del></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
                                                        <!-- Start Product Single Item - Style 1 -->
                                                        <div class="product-single-item-style-1 swiper-slide">
                                                            <a href="product-details-default.html"
                                                               class="image img-responsive">
                                                                <img class="img-fluid"
                                                                     src="assets/images/products/default/product-default-style-1-img-3.webp"
                                                                     width="435" height="350" loading="lazy"
                                                                     alt="product-image">
                                                            </a>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">WOMEN</span>
                                                                    <h4 class="title"><a
                                                                            href="product-details-default.html">Women
                                                                            Luxury Party</a></h4>
                                                                    <span class="price">$1050.00</span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <ul class="review-star">
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star</span>
                                                                        </li>
                                                                        <li class="fill"><span class="material-icons">star_half</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-event-items">
                                                                        <a href="cart.html" class="btn cart-btn">Add to
                                                                            cart</a>
                                                                        <a href="wishlist.html"
                                                                           class="btn wishlist-btn"><span
                                                                                class="material-icons">favorite_border</span></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 1 -->
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
                            </div>
                            <!-- End Tab Content Items -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: Strat Product Tab Item Section :::... -->

    <!-- ...::: Strat Banner Card Section Section :::... -->
    <div class="banner-card-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="banner-car-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <a href="shop-grid-sidebar-left.html" class="d-block banner-animate--wave">
                                <img class="img-fluid" src="assets/images/banner/banner-wide-1.webp" width="1355"
                                     height="350" loading="lazy" alt="banner-wide-image-1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Banner Card Section Section :::... -->

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

    <!-- ...::: Strat Footer Section - Footer Light :::... -->
    <footer class="footer-section footer-section-style-1 section-top-gap-120">
        <div class="box-wrapper">
            <div class="footer-wrapper section-fluid-270">
                <div class="container-fluid">

                    <!-- Start Footer Top  -->
                    <div class="footer-top">
                        <div class="footer-top-left">
                            <div class="footer-contact-items">
                                <a class="icon-left" href="tel:+12345678910"><img class="icon-svg"
                                                                                  src="assets/images/icons/icon-ios-call-dark.svg"
                                                                                  alt="">123 4567 8910</a>
                                <a class="icon-left" href="mailto:demo@example.com"><img class="icon-svg"
                                                                                         src="assets/images/icons/icon-mail-open-dark.svg"
                                                                                         alt="">demo@example.com</a>
                            </div>
                        </div>
                        <div class="footer-top-right">
                            <div class="footer-social">
                                <a href="https://www.facebook.com/" target="_blank" rel="noopener"><img class="icon-svg"
                                                                                                        src="assets/images/icons/icon-facebook-f-dark.svg"
                                                                                                        alt=""></a>
                                <a href="https://twitter.com/" target="_blank" rel="noopener"><img class="icon-svg"
                                                                                                   src="assets/images/icons/icon-twitter-dark.svg"
                                                                                                   alt=""></a>
                                <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><img
                                        class="icon-svg" src="assets/images/icons/icon-pinterest-p-dark.svg" alt=""></a>
                                <a href="https://dribbble.com/" target="_blank" rel="noopener"><img class="icon-svg"
                                                                                                    src="assets/images/icons/icon-dribbble-dark.svg"
                                                                                                    alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Top  -->

                    <!-- Start Footer Center  -->
                    <div class="footer-center">
                        <div class="footer-widgets-items">
                            <!-- Start Footer Widget Single Item -->
                            <div class="footer-widgets-single-item footer-widgets-single-item--light">
                                <h5 class="title">Product</h5>
                                <h5 class="collapsed-title collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#dividerId-1">Product</h5>
                                <div id="dividerId-1" class="widget-collapse-body collapse">
                                    <ul class="footer-nav">
                                        <li><a href="contact.html">Shop Vendor</a></li>
                                        <li><a href="contact.html">Product House</a></li>
                                        <li><a href="contact.html">Categories</a></li>
                                        <li><a href="contact.html">Delivery Areas</a></li>
                                        <li><a href="contact.html">Delivery Cost</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Footer Widget Single Item -->
                            <!-- Start Footer Widget Single Item -->
                            <div class="footer-widgets-single-item footer-widgets-single-item--light">
                                <h5 class="title">Offer</h5>
                                <h5 class="collapsed-title collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#dividerId-2">Offer</h5>
                                <div id="dividerId-2" class="widget-collapse-body collapse">
                                    <ul class="footer-nav">
                                        <li><a href="contact.html">Shop Vendor</a></li>
                                        <li><a href="contact.html">Product House</a></li>
                                        <li><a href="contact.html">Categories</a></li>
                                        <li><a href="contact.html">Delivery Areas</a></li>
                                        <li><a href="contact.html">Delivery Cost</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Footer Widget Single Item -->
                            <!-- Start Footer Widget Single Item -->
                            <div class="footer-widgets-single-item footer-widgets-single-item--light">
                                <h5 class="title">Information</h5>
                                <h5 class="collapsed-title collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#dividerId-3">Information</h5>
                                <div id="dividerId-3" class="widget-collapse-body collapse">
                                    <ul class="footer-nav">
                                        <li><a href="contact.html">Shop Vendor</a></li>
                                        <li><a href="contact.html">Product House</a></li>
                                        <li><a href="contact.html">Categories</a></li>
                                        <li><a href="contact.html">Delivery Areas</a></li>
                                        <li><a href="contact.html">Delivery Cost</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Footer Widget Single Item -->
                            <!-- Start Footer Widget Single Item -->
                            <div class="footer-widgets-single-item footer-widgets-single-item--light">
                                <h5 class="title">About</h5>
                                <h5 class="collapsed-title collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#dividerId-4">About</h5>
                                <div id="dividerId-4" class="widget-collapse-body collapse">
                                    <ul class="footer-nav">
                                        <li><a href="contact.html">Shop Vendor</a></li>
                                        <li><a href="contact.html">Product House</a></li>
                                        <li><a href="contact.html">Categories</a></li>
                                        <li><a href="contact.html">Delivery Areas</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Footer Widget Single Item -->
                        </div>
                    </div>
                    <!-- End Footer Center  -->

                    <!-- Start Footer Bottom -->
                    <div class="footer-bottom">
                        <p class="copyright-text copyright-text--light">&copy; 2021 Mart Up. Made with <span
                                class="material-icons">favorite</span> by <a href="https://hasthemes.com/"
                                                                             target="_blank" rel="noopener noreferrer">Codecarnival</a>
                        </p>
                        <a href="#" class="payment-logo"><img class="img-fluid"
                                                              src="assets/images/company-logo/payment-logo.png" alt=""></a>
                    </div>
                    <!-- End Footer Bottom -->
                </div>
            </div>
        </div>
    </footer>
    <!-- ...::: End Footer Section Section - Footer Light :::... -->

    <!-- Scroll To button -->
    <div id="scroll-to-top" class="scroll-to-top"><span class="material-icons-outlined">expand_less</span></div>
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