@extends('__User.layout.master')
@section('title', 'Detail Barang')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photoswipe.css')}}">
@endsection
@section('breadcrumb-title')
	<h2>{{$barang->namaBarang}}</h2>
@endsection

@section('content')
<?php $banyak = 0 ?>
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
                <form action="{{url('user/addingToCart')}}" method="post">
                    @csrf

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
                        <div class="touchspin-vertical-tab">
                            <div class="input-group bootstrap-touchspin">
                                <span class="input-group-text bootstrap-touchspin-prefix" style="display: none;"></span>
                                <input class="touchspin-vertical form-control" name="banyak" type="text" value="{{$banyak}}" style="display: block;">
                                <span class="input-group-text bootstrap-touchspin-postfix" style="display: none;"></span>

                            </div>
                        </div>
                        <div class="m-t-15">
                            <input type="hidden" name="id" value="{{$barang->id_barang}}">
                            <input type="submit" class="btn btn-primary-gradien m-r-10" data-original-title="btn btn-info-gradien" style="color:white;" value="{{"Add To Cart"}}">
                            <a  class="btn btn-success-gradien m-r-10" data-original-title="btn btn-info-gradien" style="color:white;">Buy Now</a>
                        </div>

                </form>
            </div>
        </div>
        </div>

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
 <script src="{{asset('assets/js/touchspin/vendors.min.js')}}"></script>
 <script src="{{asset('assets/js/touchspin/touchspin.js')}}"></script>
 <script src="{{asset('assets/js/touchspin/input-groups.min.js')}}"></script>
 <script src="{{asset('assets/js/rating/jquery.barrating.js')}}"></script>
 <script src="{{asset('assets/js/rating/rating-script.js')}}"></script>
@endsection
