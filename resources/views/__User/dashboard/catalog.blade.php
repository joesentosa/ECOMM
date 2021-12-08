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
                <img src="https://infinitygroupus.com/wp-content/uploads/2020/05/Arvinas-Blog-Hero.png" alt="error">
            </div>
            <div class="breadcrumb-content section-fluid-270">
                <div class="breadcrumb-wrapper">
                    <div class="content">
                        <span class="title-tag">BEST DEAL FOREVER</span>
                        <h2 class="title"><span class="text-mark">Hurry!</span> <br> Get your product now</h2>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="shop-grid-sidebar-left.html">Home</a></li>
                        <li> Katalog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Breadcrumb Section :::... -->

<!-- ...:::: Start Shop List Section:::... -->
<div class="shop-list-section section-fluid-270 section-top-gap-100">
    <div class="box-wrapper">
        <div class="shop-list-wrapper">
        <div class="container-fluid">
            <div class="row flex-column-reverse flex-lg-row">
            <div class="col-xl-3 col-lg-3">
                <!-- Start Sidebar Area -->
                <div class="siderbar-section">
                <!-- Start Single Sidebar Widget -->
                <div class="sidebar-single-widget">
                    <h6 class="sidebar-title title-border title-border">Categories</h6>
                    <div class="sidebar-content">
                        <div class="filter-type-select">
                            <form action="{{ url('catalog-filter-category') }}" method="post"> @csrf
                                <ul>
                                    @isset($data_kategori)
                                        @foreach($data_kategori as $item)
                                        <li>
                                            <label class="checkbox-default" for="{{$item->nama_kategori}}">
                                            {{-- <input type="hidden" name="category" value="{{$item->id_kategori}}"> --}}
                                            <input type="checkbox" id="{{$item->nama_kategori}}" name="category[]" value="{{$item->id_kategori}}">
                                            <span>{{$item->nama_kategori}}</span>
                                            </label>
                                        </li>
                                        @endforeach
                                    @endisset
                                    </ul> <br>
                                    <input class="btn" style="background-color:#ade1e9; color:#fff;" type="submit" value="FILTER">
                            </form>
                        </div><br>
                    </div>
                </div> <!-- End Single Sidebar Widget -->

                <!-- Start Single Sidebar Widget -->
                <div class="sidebar-single-widget">
                    <h6 class="sidebar-title title-border">Color</h6>
                    <div class="sidebar-content">
                        <div class="filter-type-select">
                            <ul>
                                <li>
                                    <label class="checkbox-default" for="red">
                                        <input type="checkbox" id="red">
                                        <span>Red</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-default" for="green">
                                        <input type="checkbox" id="green">
                                        <span>Green</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-default" for="blue">
                                        <input type="checkbox" id="blue">
                                        <span>Blue</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-default" for="black">
                                        <input type="checkbox" id="black">
                                        <span>Black</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-default" for="pink">
                                        <input type="checkbox" id="pink">
                                        <span>Pink</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- End Single Sidebar Widget -->

                <!-- Start Single Sidebar Widget -->
                <div class="sidebar-single-widget">
                    <h6 class="sidebar-title title-border">FILTER BY PRICE</h6>
                    <div class="sidebar-content">
                        <form action="{{route('filter-price')}}" method="post"> @csrf
                            <input type="text" class="js-range-slider" name="my_range" value="" data-type="double" data-min="0" data-max="10000000" data-from="500" data-to="5000" />
                            <input class="btn" style="background-color:#ade1e9; color:#fff;" type="submit" value="Filter by price">
                        </form>
                    </div>
                </div> <!-- End Single Sidebar Widget -->

                <!-- Start Single Sidebar Widget -->
                <div class="sidebar-single-widget">
                    <h6 class="sidebar-title title-border">Brands</h6>
                    <div class="sidebar-content">
                        <ul class="tag-link">
                            @isset($data_brand)
                                @foreach($data_brand as $item)
                                    <li><a href="#">{{$item->namaBrand}}</a></li>
                                @endforeach
                            @endisset
                        </ul>
                    </div>
                </div>
                <!-- End Single Sidebar Widget -->
                </div>
                <!-- End Sidebar Area -->
            </div>
            <!-- product barang -->
            <div class="col-xl-8 offset-xl-1 col-lg-9">
                <ul class="product-shop-filter-info">
                <li class="prduct-item-traking"><span>total 08 of 40</span></li>
                <li class="prduct-item-filter">
                    <select name="choice">
                    <option value="first">New Arrival</option>
                    <option value="second" selected>Featured</option>
                    <option value="third">Popular</option>
                    </select>
                </li>
                </ul>
                <div class="product-shop-list-items">
                    <div class="row mb-n25">
                        @isset($data_barang)
                            @foreach($data_barang as $barang)
                                <div class="col-md-6 col-12 mb-25">
                                    @include('__User.dashboard.single_item')
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>
                {{-- @isset($select_kategori)
                    @foreach ($select_kategori as $item)
                        <h1>{{ $item }}</h1>
                    @endforeach
                @endisset --}}


                <!-- Start Pagination -->
                <div class="d-flex justify-content-center">
                    <ul class="page-pagination">
                        <li class="icon-direction icon-direction--prev"><a href="#"><span class="material-icons-outlined">arrow_left</span></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>...</li>
                        <li><a href="#">10</a></li>
                        <li class="icon-direction icon-direction--next"><a href="#"><span class="material-icons-outlined">arrow_right</span></a></li>
                    </ul>
                </div>
                <!-- End Pagination -->
            </div>
            <!-- end product barang -->
            </div>
        </div>
        </div>
    </div>
</div>
<!-- ...:::: End Shop List Section:::... -->
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
