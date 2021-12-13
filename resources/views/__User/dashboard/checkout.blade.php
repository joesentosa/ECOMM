@extends('__User.layout.butler')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ $clientKey }}"></script>

    <!-- ...:::: Start Checkout Section:::... -->
    <div class="checkout-section section-fluid-270 section-top-gap-100">
        <div class="container-fluid">
            <div class="row">
            @if(\Illuminate\Support\Facades\Auth::guest())
                <!-- User Quick Action Form -->
                    <div class="col-12">
                        <div class="user-actions accordion">
                            <h3>
                                Returning customer?
                                <a class="Returning" href="{{ route('page.login.customer') }}">Click here to login</a>
                            </h3>
                        </div>
                    </div>
                    <!-- User Quick Action Form -->
            @endif
            </div>
            <!-- Start User Details Checkout Form -->
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form action="#">
                            <h3>Your order</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($barangs as $barang)
                                        <tr>
                                            <td> {{ $barang->namaBarang }} <strong> × {{ $barang->qty }}</strong></td>
                                            <td> {{ generateFormatRP($barang->harga_total) }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2"> No Data </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Cart Subtotal</th>
                                        <td>{{ generateFormatRP($subtotal) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td><strong>{{ generateFormatRP($shipping_cost) }}</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong>{{ generateFormatRP($subtotal + $shipping_cost) }}</strong></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment_method">
                                <div class="order_button">
                                    <button class="btn btn-sm btn-radius btn-default" type="button" id="pay-button">
                                        Proceed to Pay
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- Start User Details Checkout Form -->
        </div>
    </div><!-- ...:::: End Checkout Section:::... -->

    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function () {
            // SnapToken acquired from previous step
            snap.pay('{{ $snapToken }}', {
                // Optional
                onSuccess: function (result) {
                    /* You may add your own js here, this is just example */
                    console.log(JSON.stringify(result, null, 2));
                    //document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    window.location.replace('{{ url('invoice') }}' + '?orderID=' + '{{ $order_id }}');

                    // send ajax to place json_data from midtrans to session
                    // $.ajax({
                    //     url: '',
                    //     type: 'POST',
                    //     data: result,
                    //     success: function (){
                    //
                    //     },
                    // });
                },
                // Optional
                onPending: function (result) {
                    /* You may add your own js here, this is just example */
                    console.log(JSON.stringify(result, null, 2));
                    //document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    window.location.replace('{{ url('invoice') }}' + '?orderID=' + '{{ $order_id }}');
                },
                // Optional
                onError: function (result) {
                    /* You may add your own js here, this is just example */
                    console.log(JSON.stringify(result, null, 2));
                    //document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    window.location.replace('{{ url('invoice') }}' + '?orderID=' + '{{ $order_id }}');
                }
            });
        };
    </script>
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
