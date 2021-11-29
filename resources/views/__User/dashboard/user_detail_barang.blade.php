@extends('__User.layout.master')
@section('title', 'Detail Barang')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photoswipe.css')}}">
@endsection
@section('breadcrumb-title')
	<h2>{{$barang->namaBarang}}</h2>
@endsection

@section('content')
<style>
    .item{}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col">
        <div class="card">
            <div class="row product-page-main">
            <div class="col-xl-4">
                <div class="product-slider owl-carousel owl-theme" id="sync1">
                    <div class="item"><img src="{{asset('uploads/barang/gambar_barang_202111243c2LQXLg.jpg')}}" style='width:20em; height:20em'></div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="product-page-details">
                <h5>{{$barang->namaBarang}}</h5>
                <div class="d-flex">
                    <select id="u-rating-fontawesome" name="rating" autocomplete="off">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select><span>(250 review)</span>
                </div>
                </div>
                <hr>
                <p>{{$barang->review}}</p>
                <div class="product-price digits">{{'Rp.'.$barang->harga.',-'}}</div>
                <hr>
                <div>
                <table class="product-page-width">
                    <tbody>
                    <tr>
                        <td>Brand :</td>
                        <td>{{$brand->namaBrand}}</td>
                    </tr>
                    <tr>
                        <td>Category :</td>
                        <td>{{$kategori->nama_kategori}}</td>
                    </tr>
                    <tr>
                        <td>Availability :</td>
                        @if ($barang->stok > 0)
                            <td class="in-stock">{{$barang->stok}} in stock</td>
                        @else
                            <td class="out-of-stock" style="display: none;">Out Of stock</td>
                        @endif
                    </tr>
                    <tr>
                        <td>Weight :</td>
                        <td>{{$barang->berat}} kg</td>
                    </tr>
                    </tbody>
                </table>
                </div>
                <hr>
                <div class="m-t-15">
                    <a href="{{url("user/addToCart/$barang->id_barang")}}" class="btn btn-primary-gradien m-r-10" data-original-title="btn btn-info-gradien" style="color:white;"><i class="fa fa-plus-circle"></i> Add To Cart</a>
                    <a  class="btn btn-success-gradien m-r-10" data-original-title="btn btn-info-gradien" style="color:white;">Buy Now</a>
                </div>
            </div>
            </div>
        </div>
        {{-- <div class="card">
            <div class="row product-page-main">
            <div class="col-sm-12">
                <ul class="nav nav-tabs nav-material mb-0" id="top-tab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false">Febric</a>
                    <div class="material-border"></div>
                </li>
                <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Video</a>
                    <div class="material-border"></div>
                </li>
                <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="true">Details</a>
                    <div class="material-border"></div>
                </li>
                <li class="nav-item"><a class="nav-link" id="brand-top-tab" data-toggle="tab" href="#top-brand" role="tab" aria-controls="top-brand" aria-selected="true">Brand</a>
                    <div class="material-border"></div>
                </li>
                </ul>
                <div class="tab-content" id="top-tabContent">
                <div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                    <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                </div>
                <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                    <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
                <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                    <p class="mb-0 m-t-20">{{$barang->review}}</p>
                </div>
                <div class="tab-pane fade" id="top-brand" role="tabpanel" aria-labelledby="brand-top-tab">
                    <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
                </div>
            </div>
            </div>
        </div> --}}
        </div>
    </div>
    </div>
@endsection

@section('script')
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
 <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
 <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
 <script src="{{asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
 <script src="{{asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
 <script src="{{asset('assets/js/photoswipe/photoswipe.js')}}"></script>
@endsection
