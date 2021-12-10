@extends('__User.layout.butler')

@section('css')
@endsection

@section('style')
    <style>
        select {
            display: none;
        }

        .nice-select {
            width: 100%;
        }

        .nice-select .option {
            width: 100%;
        }

        #edit-shipping {
            transition: all ease-in 0.5;
        }

        #edit-shipping:hover {
            color: #264653;
            font-weight: 700;
        }

        .btn-edit-layanan {
            height: 42px;
            width: 120px;
            color: #FFF;
            background-color: #264653;
        }

        .btn-edit-layanan:hover {
            color: #FFF;
            background-color: #264653d3;
        }

    </style>
@endsection

@section('content')
    <!-- ...::: Strat Breadcrumb Section :::... -->
    <div class="breadcrumb-section">
        <div class="box-wrapper">
            <div class="breadcrumb-wrapper breadcrumb-wrapper--style-1 pos-relative">
                <div class="breadcrumb-bg">
                    <img src="{{ asset('assets/images/banner/bg-2.jpg') }}" alt="">
                </div>
                <div class="breadcrumb-content section-fluid-270">
                    <div class="breadcrumb-wrapper">
                        <div class="content">
                            <span class="title-tag">Ready for checkout</span>
                            <h2 class="title"><span class="text-mark">Your</span> Cart</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="{{ url('catalog') }}">Shop</a></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...:::: Start Cart Section:::... -->
    <div class="cart-section section-fluid-270 section-top-gap-100">
        <!-- Start Cart Table -->
        <div class="cart-table-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                <table>
                                    <!-- Start Cart Table Head -->
                                    <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                    </tr>
                                    </thead> <!-- End Cart Table Head -->
                                    <tbody>
                                    @foreach($carts as $item)
                                        <!-- Start Cart Single Item-->
                                        <tr>
                                            <td class="product_remove">
                                                <a href="#"><img
                                                        src="{{ asset('assets/images/icons/icon-trash.svg') }}">
                                                </a>
                                            </td>
                                            <td class="product_thumb">
                                                <a href="{{ url('detailBarang/' . $item['data']['id_barang']) }}">
                                                    <img src="{{ $item['data']['gambar'][0]->gambar }}" alt=""
                                                         loading="lazy">
                                                </a>
                                            </td>
                                            <td class="product_name">
                                                <a href="{{ url('detailBarang/' . $item['data']['id_barang']) }}">
                                                    {{ $item['data']['namaBarang'] }}
                                                </a>
                                            </td>
                                            <td class="product-price">{{ generateFormatRP($item['data']['harga']) }}</td>
                                            <td class="product_quantity"><label>Quantity</label>
                                                <input min="1" max="100" value="{{ $item['qty'] }}" type="number"
                                                       id="qty">
                                            </td>
                                            <td class="product_total">{{ generateFormatRP( ($item['data']['harga']) * $item['qty'] ) }}</td>
                                        </tr> <!-- End Cart Single Item-->
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <button class="btn btn-sm btn-radius btn-default" type="submit">update cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->

        <!-- Start Coupon Start -->
        <div class="coupon_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Billing Details</h3>
                            <div class="coupon_inner">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="default-form-box">
                                                <label>First Name <span>*</span></label>
                                                <input type="text" placeholder="First Name"
                                                       value="@if($customer){{$customer->firstname}}@endif"
                                                       name="firstname">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="default-form-box">
                                                <label>Last Name <span>*</span></label>
                                                <input type="text" placeholder="Last Name"
                                                       value="@if($customer){{$customer->lastname}}@endif"
                                                       name="lastname">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="default-form-box">
                                                <label>Company Name</label>
                                                <input type="text" placeholder="Company Name" name="company_name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="default-form-box">
                                                <label>Street address <span>*</span></label>
                                                <input placeholder="House number and street name" type="text"
                                                       name="address"
                                                       value="@if($customer){{$customer->address}}@endif">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="default-form-box">
                                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text"
                                                       name="address_details">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="default-form-box">
                                                <label>Town / City <span>*</span></label>
                                                <input type="text" placeholder="City"
                                                       value="@if($customer){{$customer->kota}}@endif">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="default-form-box">
                                                <label>Phone<span>*</span></label>
                                                <input type="text" placeholder="Phone Number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="default-form-box">
                                                <label> Email Address <span>*</span></label>
                                                <input type="text" placeholder="Your Email" name="email"
                                                       value="@if($customer){{$customer->email}}@endif"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="checkbox-default" for="newShipping" data-bs-toggle="collapse"
                                                   data-bs-target="#anotherShipping">
                                                <input type="checkbox" id="newShipping" >
                                                <span>Ship to a different address?</span>
                                            </label>

                                            <div id="anotherShipping" class="collapse mt-3"
                                                 data-parent="#anotherShipping">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="default-form-box">
                                                            <label>First Name <span>*</span></label>
                                                            <input type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="default-form-box">
                                                            <label>Last Name <span>*</span></label>
                                                            <input type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="default-form-box">
                                                            <label>Company Name</label>
                                                            <input type="text">
                                                        </div>
                                                    </div>


                                                    <div class="col-12">
                                                        <div class="default-form-box">
                                                            <label>Street address <span>*</span></label>
                                                            <input placeholder="House number and street name"
                                                                   type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="default-form-box">
                                                            <input placeholder="Apartment, suite, unit etc. (optional)"
                                                                   type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="default-form-box">
                                                            <label>Town / City <span>*</span></label>
                                                            <input type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="default-form-box">
                                                            <label>State / County <span>*</span></label>
                                                            <input type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="default-form-box">
                                                            <label>Phone<span>*</span></label>
                                                            <input type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="default-form-box">
                                                            <label> Email Address <span>*</span></label>
                                                            <input type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="order-notes">
                                                <label for="order_note">Order Notes</label>
                                                <textarea id="order_note"
                                                          placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p class="cart_amount">$215.00</p>
                                </div>
                                <div class="cart_subtotal mb-3">
                                    <p>Shipping</p>
                                    <p class="cart_amount" id="price_amount"><span>Flat Rate:</span> Rp. 00.00,- </p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" id="edit-shipping" data-bs-toggle="modal"
                                            data-bs-target="#form_shipping">Calculate shipping
                                    </button>
                                </div>
                                <div class="cart_subtotal mt-4">
                                    <p>Total</p>
                                    <p class="cart_amount">$215.00</p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="{{ url('checkout') }}" class="btn btn-sm btn-radius btn-default">Proceed to
                                        Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Coupon Start -->
    </div> <!-- ...:::: End Cart Section:::... -->

    <div class="modal fade" id="form_shipping" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Choose Shipping</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action=""> @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <label>Kurir</label>
                                    <select class="form-select" aria-label="Default select example"
                                            name="cb_pilih_kurir" id="cb_pilih_kurir">
                                        <option selected>Choose courier</option>
                                        <option value="jne">JNE</option>
                                        <option value="pos">POS Indonesia</option>
                                        <option value="tiki">TIKI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <label>Provinsi</label>
                                    <select class="form-select" aria-label="Default select example"
                                            name="cb_pilih_provinsi" id="cb_pilih_provinsi">
                                        <option selected>Choose provinsi</option>
                                        <option value="1">Bali</option>
                                        <option value="2">Bangka Belitung</option>
                                        <option value="3">Banten</option>
                                        <option value="4">Bengkulu</option>
                                        <option value="5">DI Yogyakarta</option>
                                        <option value="6">DKI Jakarta</option>
                                        <option value="7">Gorontalo</option>
                                        <option value="8">Jambi</option>
                                        <option value="9">Jawa Barat</option>
                                        <option value="10">Jawa Tengah</option>
                                        <option value="11">Jawa Timur</option>
                                        <option value="12">Kalimantan Barat</option>
                                        <option value="13">Kalimantan Selatan</option>
                                        <option value="14">Kalimantan Tengah</option>
                                        <option value="15">Kalimantan Timur</option>
                                        <option value="16">Kalimantan Utara</option>
                                        <option value="17">Kepulauan Riau</option>
                                        <option value="18">Lampung</option>
                                        <option value="19">Maluku</option>
                                        <option value="20">Maluku Utara</option>
                                        <option value="21">Nanggroe Aceh Darussalam (NAD)</option>
                                        <option value="22">Nusa Tenggara Barat (NTB)</option>
                                        <option value="23">Nusa Tenggara Timur (NTT)</option>
                                        <option value="24">Papua</option>
                                        <option value="25">Papua Barat</option>
                                        <option value="26">Riau</option>
                                        <option value="27">Sulawesi Barat</option>
                                        <option value="28">Sulawesi Selatan</option>
                                        <option value="29">Sulawesi Tengah</option>
                                        <option value="30">Sulawesi Tenggara</option>
                                        <option value="31">Sulawesi Utara</option>
                                        <option value="32">Sumatera Barat</option>
                                        <option value="33">Sumatera Selatan</option>
                                        <option value="34">Sumatera Utara</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <label>Kota</label>
                                    <select class="form-select" name="cb_pilih_city"
                                            id="cb_pilih_city" size="5">
                                        <option selected>Choose city</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <label>Jenis Layanan</label>
                                    <select class="form-select"
                                            name="cb_pilih_layanan" id="cb_pilih_layanan">
                                        <option selected>Choose Package</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-edit-layanan btn-sm">Submit</button>
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

    <script src="{{ asset('assets/Martup/js/main.js') }}"></script>
    <script>

        $(document).ready(function(){

            // populate city
            $('#cb_pilih_provinsi').change(function(){
                $.ajax({
                    url: "{{ url('shipping') }}",
                    type: 'GET',
                    datatype: 'json',
                    data: {
                        'provinsi': $(this).val(),
                    },
                    success: function(data){
                        $("#cb_pilih_city").empty();
                        for (let i of data)
                        {
                            // append city
                            $("#cb_pilih_city").append($('<option>', {
                                value: i['city_id'],
                                text: i['city_name']
                            }));
                        }
                        $('#cb_pilih_city').niceSelect('update');
                    }
                });
            });

            // populate harga
            $('#cb_pilih_city').change(function(){
                $.ajax({
                    url: "{{ url('shipping') }}",
                    type: 'GET',
                    datatype: 'json',
                    data: {
                        'provinsi': $('#cb_pilih_provinsi').val(),
                        'kota': $(this).val(),
                        'courier': $('#cb_pilih_kurir').val()
                    },
                    success: function(result){
                        $("#cb_pilih_layanan").empty();
                        for (let i of result)
                        {
                            // append city
                            $("#cb_pilih_layanan").append($('<option>', {
                                value: i['cost'],
                                text: i['service'] + " " + i['description'] + " Rp. " + i['cost'] + ",-",
                            }));
                        }
                        $('#cb_pilih_layanan').niceSelect('update');
                    }
                });
            });
        });
    </script>
@endpush
