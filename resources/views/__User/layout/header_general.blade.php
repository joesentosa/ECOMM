<!-- .....:::::: Start Header Section - Light Header :::::.... -->
<header
    class="header-section @@pos_absolute pos-relative light-bg sticky-header d-none d-lg-block section-fluid-270">
    <div class="header-wrapper pos-relative">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <!-- Start Header Logo -->
                    <a href="{{ route('page.index.customer') }}" class="header-logo">
                        <img class="img-fluid" src="{{ asset('assets/igw/logo_gaming_store.png') }}" style="width:100ox; height:45px;" alt="">
                    </a>
                    <!-- End Header Logo -->
                </div>
                <div class="col-auto d-flex align-items-center">
                    <div class="header-event">
                        <!-- Start Menu event -->
                        <div class="menu-event dropdown">
                            <button class="main-menu-event dropdown-toggle" data-bs-toggle="dropdown"><img
                                    src="{{ asset('assets/Martup/images/icons/icon-open-menu.svg') }}"
                                    alt=""><span>Menu</span><img
                                    src="{{ asset('assets/Martup/images/icons/icon-arrow-drop-down.svg') }}" alt="">
                            </button>
                            <ul class="mainmenu-nav dropdown-menu">
                                <li class="menu-items">
                                    <a href="{{ route('page.index.customer') }}">Home</a>
                                </li>
                                <li class="menu-items">
                                    <a href="{{ route('page.catalog.customer') }}">Shop <span class="material-icons">arrow_right</span></a>
                                    <div class="has-dropdown">
                                        <div class="menu-content">
                                            <h6 class="title">Shop Page</h6>
                                            <ul class="submenu">
                                                <li><a href="{{ route('page.catalog.customer') }}">Catalog</a></li>
                                                <li><a href="{{ route('page.cart.customer') }}">Cart</a></li>
                                                <li><a href="{{ route('page.wishlist.customer') }}">Wishlist</a></li>
                                            </ul>
                                        </div>
{{--                                        <div class="menu-content">--}}
{{--                                            <h6 class="title">Product Details Page</h6>--}}
{{--                                            <ul class="submenu">--}}
{{--                                                <li><a href="product-details-default.html">Product Default</a></li>--}}
{{--                                                <li><a href="product-details-group.html">Product Group</a></li>--}}
{{--                                                <li><a href="product-details-left-sidebar.html">Product Left--}}
{{--                                                        Sidebar</a></li>--}}
{{--                                                <li><a href="product-details-right-sidebar.html">Product Right--}}
{{--                                                        Sidebar</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="menu-content">--}}
{{--                                            <h6 class="title">Others Page</h6>--}}
{{--                                            <ul class="submenu">--}}
{{--                                                <li><a href="cart.html">Cart</a></li>--}}
{{--                                                <li><a href="wishlist.html">Wishlist</a></li>--}}
{{--                                                <li><a href="compare.html">Compare</a></li>--}}
{{--                                                <li><a href="checkout.html">Checkout</a></li>--}}
{{--                                                <li><a href="login.html">Login</a></li>--}}
{{--                                                <li><a href="my-account.html">MyAccount</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
                                    </div>
                                </li>
{{--                                <li class="menu-items">--}}
{{--                                    <a href="blog-list-left-sidebar.html">Blog <span class="material-icons">arrow_right</span></a>--}}
{{--                                    <div class="has-dropdown megamenu">--}}
{{--                                        <div class="menu-content">--}}
{{--                                            <h6 class="title">Blog List Full Width</h6>--}}
{{--                                            <ul class="submenu">--}}
{{--                                                <li><a href="blog-list-3-grid-full-width.html">Grid 3 Full Width</a>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="blog-list-4-grid-full-width.html">Grid 4 Full Width</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="menu-content">--}}
{{--                                            <h6 class="title">Blog List Sidebar</h6>--}}
{{--                                            <ul class="submenu">--}}
{{--                                                <li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>--}}
{{--                                                <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="menu-content">--}}
{{--                                            <h6 class="title">Blog Details</h6>--}}
{{--                                            <ul class="submenu">--}}
{{--                                                <li><a href="blog-details-full-width.html">Full Width</a></li>--}}
{{--                                                <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>--}}
{{--                                                <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="menu-items">--}}
{{--                                    <a href="#">Pages <span class="material-icons">arrow_right</span></a>--}}
{{--                                    <div class="has-dropdown">--}}
{{--                                        <div class="menu-content">--}}
{{--                                            <h6 class="title">Inner Pages</h6>--}}
{{--                                            <ul class="submenu">--}}
{{--                                                <li><a href="about.html">About Us</a></li>--}}
{{--                                                <li><a href="faq.html">FAQ</a></li>--}}
{{--                                                <li><a href="error.html">404-Error</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="menu-items"><a href="contact.html">Contact Us</a></li>--}}
                            </ul>
                        </div>

                        <form action="{{ url('catalog') }}">
                            <div class="search-event">
                                <input class="header-search" type="search" placeholder="Search" name="name">
                                <button class="header-search-btn" type="submit"><img
                                        src="{{asset('assets/Martup/images/icons/icon-search.svg')}}" alt=""></button>
                            </div>
                        </form>
                        <!-- End Menu event -->
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-action">
                        @isset($WL_count)
                            <button class="header-action-item header-action-wishlist" data-bs-toggle="offcanvas"
                                    data-bs-target="#wishlistOffcanvas">
                                <img src="assets/images/icons/icon-heart-dark.svg" alt="">
                                <span class="count-tag">{{ $WL_count }}</span>
                            </button>
                        @endisset
                        @isset($cart_count)
                            <button class="header-action-item header-action-wishlist" data-bs-toggle="offcanvas"
                                    data-bs-target="#addcartOffcanvas">
                                <img src="{{ asset('assets/images/icons/icon-shopping-bag-dark.svg') }}" alt="">
                                <span class="item-count item-count--light">{{ $cart_count }} ITEMS</span>
                            </button>
                        @endisset
                        @if(\Illuminate\Support\Facades\Auth::user())
                            <div class="menu-event dropdown">
                                <button class="header-action-item header-right main-menu-event dropdown-toggle edit-button"
                                        data-bs-toggle="dropdown">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span class="item-count item-count--light" style="font-size:1rem;padding-left:5px; color:#FFF">
                                        {{ \Illuminate\Support\Facades\Auth::user()->firstname }}
                                    </span>
                                </button>
                                <ul class="mainmenu-nav dropdown-menu">
                                    <li class="menu-items">
                                        <a href="{{ route('page.profile.customer') }}">Profile</a>
                                    </li>
                                    <li class="menu-items">
                                        <a href="{{ route('route.auth.logout') }}">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <a href="{{ route('page.login.customer') }}">
                                <button class="header-action-item header-right edit-button">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span class="item-count item-count--light edit-text" style="font-size:1rem;padding-left:5px; color:#FFF">Login</span>
                                </button>
                            </a>
                        @endif
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
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/igw/logo_gaming_store.png') }}" style="width:100ox; height:45px;" alt=""></a>
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
        @if(\Illuminate\Support\Facades\Auth::user())
            <div class="d-flex justify-content-center ">
                @isset($WL_count)
                    <a href="wishlist.html" class="header-action-item header-action-wishlist"><img
                            src="{{ asset('assets/images/icons/icon-heart-dark.svg') }}" alt=""><span
                            class="count-tag">{{ $WL_count }}</span></a>
                @endisset
                @isset($cart_count)
                    <a href="cart.html" class="header-action-item header-action-wishlist"><img
                            src="{{ asset('assets/images/icons/icon-shopping-bag-dark.svg') }}" alt=""><span
                            class="item-count item-count--light">{{ $cart_count }}</span></a>
                @endisset
            </div>
        @endif

        <form action="{{ url('catalog') }}">
            <div class="header-event mobile-search my-5">
                <div class="search-event">
                    <input class="header-search" type="search" name="name">
                    <button class="header-search-btn" type="submit">
                        <img src="{{ asset('assets/images/icons/icon-search.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </form>

        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-mobile-menu-wrapper">
            <!-- Start Mobile Menu  -->
            <div class="mobile-menu-bottom">
                <!-- Start Mobile Menu Nav -->
                <div class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="#"><span>Home</span></a>
                        </li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Shop Page</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="{{ route('page.catalog.customer') }}">Catalog</a></li>
                                        <li><a href="{{ route('page.cart.customer') }}">Cart</a></li>
                                        <li><a href="{{ route('page.wishlist.customer') }}">Wishlist</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div> <!-- End Mobile Menu Nav -->
            </div> <!-- End Mobile Menu -->
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
            @isset($WL_cust)
                @foreach ($WL_cust as $item)
                    <li class="single-item">
                        <div class="box">
                            <a href="" class="image">
                                <img src="{{ asset('assets/images/products/small/product-small-1.webp') }}" alt=""
                                    class="offcanvas-wishlist-image">
                            </a>
                            <div class="content">
                                <a href="" class="title">{{ $item->namaBarang }}</a>
                                <div class="offcanvas-wishlist-item-details">
                                    <span class="offcanvas-wishlist-item-details-price">
                                        @if(isset($item->promos[0]))
                                            {{ generateFormatRP($item->harga - $item->promos[0]->potonganHarga) }}
                                        @else
                                            {{ generateFormatRP($item->harga) }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                        <form action="/deleteWL" method="post"> @csrf
                            <div class="item-delete text-right">
                                <input type="hidden" name="barangId" value="{{ $item->id_barang }}">
                                <button><img src="{{ asset('assets/images/icons/icon-trash.svg') }}" alt=""></button>
                            </div>
                        </form>
                    </li>
                @endforeach
            @endisset

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
            @isset($cart_barang)
            @isset($data_session)
                @foreach ($cart_barang as $cart)
                @foreach ($data_session as $barang)
                    @if ($cart["id"] == $barang->id_barang)
                        <li class="single-item">
                            <div class="box">
                                <a href="/detailBarang/{{ $barang->id_barang }}" class="image">
                                    <img src="{{ $barang->gambar[0]->gambar }}" alt=""
                                    class="offcanvas-wishlist-image">
                                </a>
                                <div class="content">
                                    <a href="/detailBarang/{{ $barang->id_barang }}" class="title">{{ $barang->namaBarang }}</a>
                                    <div class="offcanvas-wishlist-item-details">
                                        <span class="offcanvas-wishlist-item-details-quantity">{{ $cart['qty'] }} x</span>
                                        <span class="offcanvas-wishlist-item-details-price">
                                            @if(isset($barang->promos[0]))
                                                {{ generateFormatRP($barang->harga - $barang->promos[0]->potonganHarga) }}
                                            @else
                                                {{ generateFormatRP($barang->harga) }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-delete text-right">
                                <form action="/deleteCart" method="get">
                                    @csrf
                                    <input type="hidden" name="barangId" value="{{ $barang->id_barang }}">
                                    <button><img src="{{ asset('assets/images/icons/icon-trash.svg') }}" alt=""></button>
                                </form>
                            </div>
                        </li>
                    @endif
                @endforeach
                @endforeach
            @endisset
            @endisset

        </ul>
        <div class="offcanvas-action-link">
            <a href="{{ url('cart') }}" class="btn">Checkout</a>
        </div>
    </div>
</div>
<!-- ...:::: End Add Cart Offcanvas Section:::... -->
