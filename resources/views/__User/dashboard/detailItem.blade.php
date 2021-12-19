@extends('__User.layout.butler')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
    <!-- ...::: Strat Breadcrumb Section :::... -->
    <div class="breadcrumb-section">
        <div class="box-wrapper">
            <div class="breadcrumb-wrapper breadcrumb-wrapper--style-1 pos-relative">
                <div class="breadcrumb-bg">
                    <img src="{{ asset('assets/images/banner/bg-2.jpg') }}"
                         alt="">
                </div>
                <div class="breadcrumb-content section-fluid-270">
                    <div class="breadcrumb-wrapper">
                        <div class="content">
                            <span class="title-tag">BEST DEAL FOREVER</span>
                            <h2 class="title"><span class="text-mark">Product</span> Details</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="{{ url('catalog') }}">Shop</a></li>
                            <li>{{ $barang->namaBarang }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...::: Strat Product Gallery Section :::... -->
    <div class="product-gallery-info-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="product-gallery-info-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-8 col-lg-6">
                            <!-- Start Product Gallert - Tab Style -->
                            @isset($barang->gambar[0])
                                <div class="product-gallery product-gallery--style-tab">
                                    <div class="row flex-md-row flex-column-reverse">
                                        <div class="col-md-3">
                                            <!-- Start Product Thumbnail -->
                                            <ul class="product-thumbnail-image nav">
                                                <li class="nav-item">
                                                    <button class="nav-link active" data-bs-toggle="tab"
                                                            data-bs-target="#img-1" type="button">
                                                <span class="thumb">
                        <img class="img-fluid" src="{{ asset($barang->gambar[0]->gambar) }}" alt="" loading="lazy">
                      </span>
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                            data-bs-target="#img-2"
                                                            type="button">
                                                <span class="thumb">
                        <img class="img-fluid" src="{{ asset($barang->gambar[1]->gambar) }}" alt="" loading="lazy">
                      </span>
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                            data-bs-target="#img-3"
                                                            type="button">
                                                <span class="thumb">
                        <img class="img-fluid" src="{{ asset($barang->gambar[2]->gambar) }}" alt="" loading="lazy">
                      </span>
                                                    </button>
                                                </li>
                                            </ul>
                                            <!-- End Product Thumbnail -->
                                        </div>
                                        <div class="col-md-9">
                                            <!-- Start Product Large Image -->
                                            <div class="product-large-image tab-content">
                                                <div class="tab-pane fade show active" id="img-1" role="tabpanel">
                                                    <div class="image">
                                                        <img class="img-fluid"
                                                             src="{{asset($barang->gambar[0]->gambar)}}"
                                                             alt="" loading="lazy">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="img-2" role="tabpanel">
                                                    <div class="image">
                                                        <img class="img-fluid"
                                                             src="{{asset($barang->gambar[1]->gambar)}}"
                                                             alt="" loading="lazy">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="img-3" role="tabpanel">
                                                    <div class="image">
                                                        <img class="img-fluid"
                                                             src="{{asset($barang->gambar[2]->gambar)}}"
                                                             alt="" loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Large Image -->
                                        </div>
                                    </div>
                                </div>
                        @endisset
                        <!-- End Product Gallert - Tab Style -->
                        </div>
                        <div class="col-xxl-4 col-lg-6">
                            <!-- Start Product Content -->
                            <div class="product-content">
                                <span class="catagory">{{ $barang->kategori->nama_kategori }}</span>
                                <h2 class="title">{{ $barang->namaBarang }}</h2>
                                {{--                            <span class="author">Design: kakakoli Fashion</span>--}}
                                <div class="bottom">

                                    <ul class="review-star">
                                        @php
                                            // Count Rating and give star
                                            $int = (int)(float)$barang->rating;
                                            $dec = (float)$barang->rating - $int;
                                            if ($int > 5) { $int = 5;$dec = 0; } // threshold
                                            for ($x = 1; $x <= $int; $x++) {
                                                echo '<li class="fill"><span class="material-icons">star</span></li>';
                                            }
                                            if ($dec > 0) {
                                                echo '<li class="fill"><span class="material-icons">star_half</span></li>';
                                            }
                                        @endphp
                                    </ul>
                                    <form action="{{ url('wishlist') }}" method="post"> @csrf
                                        <input type="hidden" name="barangId" value="{{ $barang->id_barang }}">
                                        <button class="wishlist">Add Wishlist</button>
                                    </form>
                                </div>

                                {{--                                <span class="price">$550.00 <del>$650.00</del></span>--}}
                                <span class="price">{{ generateFormatRP($barang->harga) }}</span>

                                <div class="product-variables">
                                    <form action="{{url('addingToCart')}}" method="post"> @csrf
                                        <input type="hidden" name="id" value="{{$barang->id_barang}}">
                                        <ul class="variable-items">
                                            <li class="variable-single-items">
                                                <div class="num-block skin-2">
                                                    <div class="num-in">
                                                        <span class="minus dis"></span>
                                                        <input type="text" class="in-num" value="1" readonly=""
                                                               name="banyak">
                                                        <span class="plus"></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="variable-single-items">
                                                <button class="btn btn-sm btn-default">Add To Cart</button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!-- End Product Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Product Gallery Section :::... -->

    <!-- ...::: Strat Product Description Section :::... -->
    <div class="product-description-section  section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="product-description-wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="product-description-content">
                                <h6 class="title">Description</h6>
                                <p>{{ $barang->review }}</p>

                                <div class="social-links">
                                    <span class="text">Share:</span>
                                    <div class="items">
                                        <a href="{{ $socialShare["facebook"] }}"><img class="icon-svg"
                                                                                      src="{{ asset('assets/images/icons/icon-facebook-f-dark.svg') }}"
                                                                                      alt=""></a>
                                        <a href="{{ $socialShare["twitter"] }}"><img class="icon-svg"
                                                                                     src="{{ asset('assets/images/icons/icon-twitter-dark.svg') }}"
                                                                                     alt=""></a>
                                        <a href="{{ $socialShare["whatsapp"] }}"><i class="icon-svg iconify"
                                                                                    style="color: #457b9d;"
                                                                                    data-icon="dashicons:whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Product Description Section :::... -->

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
                                        @foreach($barang->kategori->barang as $barang)
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
    <script src="{{asset('js/share.js')}}"></script>
@endpush
