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
                <img src="https://infinitygroupus.com/wp-content/uploads/2020/05/Arvinas-Blog-Hero.png" alt="">
            </div>
            <div class="breadcrumb-content section-fluid-270">
                <div class="breadcrumb-wrapper">
                    <div class="content">
                        <span class="title-tag">BEST DEAL FOREVER</span>
                        <h2 class="title"><span class="text-mark">Wishlist</span> Page</h2>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                        <li>Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Breadcrumb Section :::... -->

<!-- ...:::: Start Wishlist Section:::... -->
<div class="wishlist-section section-fluid-270 section-top-gap-100">
    <!-- Start Cart Table -->
    <div class="wishlish-table-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="table_page table-responsive">
                            <table>
                                <!-- Start Wishlist Table Head -->
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_stock">Stock Status</th>
                                        <th class="product_addcart">Add To Cart</th>
                                    </tr>
                                </thead> <!-- End Cart Table Head -->
                                <tbody>
                                    <!-- Start Wishlist Single Item-->
                                    <tr>
                                        <td class="product_remove"><a href="#"><img src="{{asset('assets/martup/images/icons/icon-trash.svg')}}" alt=""></a></td>
                                        <td class="product_thumb"><a href="product-details-default.html"><img src="{{asset('assets/Martup/images/products/small/product-small-1.webp')}}" alt=""></a></td>
                                        <td class="product_name"><a href="product-details-default.html">Handbag fringilla</a></td>
                                        <td class="product-price">$65.00</td>
                                        <td class="product_stock">In Stock</td>
                                        <td class="product_addcart"><a href="cart.html" class="btn btn-sm btn-radius btn-default">Add To Cart</a></td>
                                    </tr> <!-- End Wishlist Single Item-->
                                    <!-- Start Wishlist Single Item-->
                                    <tr>
                                        <td class="product_remove"><a href="#"><img src="{{asset('assets/martup/images/icons/icon-trash.svg')}}" alt=""></a></td>
                                        <td class="product_thumb"><a href="product-details-default.html"><img src="{{asset('assets/Martup/images/products/small/product-small-2.webp')}}" alt=""></a></td>
                                        <td class="product_name"><a href="product-details-default.html">Handbags justo</a></td>
                                        <td class="product-price">$90.00</td>
                                        <td class="product_stock">In Stock</td>
                                        <td class="product_addcart"><a href="cart.html" class="btn btn-sm btn-radius btn-default">Add To Cart</a></td>
                                    </tr> <!-- End Wishlist Single Item-->
                                    <!-- Start Wishlist Single Item-->
                                    <tr>
                                        <td class="product_remove"><a href="#"><img src="{{asset('assets/martup/images/icons/icon-trash.svg')}}" alt=""></a></td>
                                        <td class="product_thumb"><a href="product-details-default.html"><img src="{{asset('assets/Martup/images/products/small/product-small-3.webp')}}" alt=""></a></td>
                                        <td class="product_name"><a href="product-details-default.html">Handbag elit</a></td>
                                        <td class="product-price">$80.00</td>
                                        <td class="product_stock">In Stock</td>
                                        <td class="product_addcart"><a href="cart.html" class="btn btn-sm btn-radius btn-default">Add To Cart</a></td>
                                    </tr> <!-- End Wishlist Single Item-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Cart Table -->
</div> 
<!-- ...:::: End Wishlist Section:::... -->
@endsection

@push('JScript')
  <script src="{{ asset('assets/Martup/js/vendor/modernizr-3.11.2.min.js') }}"></script>
  <script src="{{ asset('assets/Martup/js/vendor/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/Martup/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
  <script src="{{ asset('assets/Martup/js/vendor/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>

  <script src="{{asset('assets/Martup/js/plugins/jquery.nice-select.js')}}"></script>
  <script src="{{asset('assets/Martup/js/plugins/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/Martup/js/plugins/ion.rangeSlider.min.js')}}"></script>
  <script src="{{asset('assets/Martup/js/plugins/venobox.min.js')}}"></script>
  <script src="{{asset('assets/Martup/js/plugins/ajax-mail.js')}}"></script>
@endpush