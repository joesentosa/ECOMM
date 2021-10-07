@extends('layouts.simple.master')
@section('title', 'State Color')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>State<span>Color</span></h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Ui Elements</li>	
	<li class="breadcrumb-item active">State Color</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Default Color</h5>
          </div>
          <div class="card-body">
            <div class="row color-box">
              <div class="col-lg-3 col-md-4 col-6 col-xl-2">
                <div class="bg-primary p-20 m-b-10 text-center">#ab8ce4</div>
              </div>
              <div class="col-lg-3 col-md-4 col-6 col-xl-2">
                <div class="bg-secondary p-20 m-b-10 text-center">#26c6da</div>
              </div>
              <div class="col-lg-3 col-md-4 col-6 col-xl-2">
                <div class="bg-success p-20 m-b-10 text-center">#00c292</div>
              </div>
              <div class="col-lg-3 col-md-4 col-6 col-xl-2">
                <div class="bg-info p-20 m-b-10 text-center">#03a9f3</div>
              </div>
              <div class="col-lg-3 col-md-4 col-6 col-xl-2">
                <div class="bg-warning p-20 m-b-10 text-center">#fec107</div>
              </div>
              <div class="col-lg-3 col-md-4 col-6 col-xl-2">
                <div class="bg-danger p-20 m-b-10 text-center">#fb9678</div>
              </div>
              <div class="col-lg-3 col-md-4 col-6 col-xl-2">
                <div class="bg-light p-20 m-b-10 text-center text-dark">#eeeeee</div>
              </div>
              <div class="col-lg-3 col-md-4 col-6 col-xl-2">
                <div class="bg-dark p-20 m-b-10 text-center">#263238</div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5>Color</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <h6 class="sub-title text-uppercase">Primary</h6>
                <div class="primary-color">
                  <ul class="m-b-30">
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <h6 class="sub-title text-uppercase">secondary</h6>
                <div class="secondary-color">
                  <ul class="m-b-30">
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <h6 class="sub-title text-uppercase">Success</h6>
                <div class="success-color">
                  <ul class="m-b-30">
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <h6 class="sub-title text-uppercase">Info</h6>
                <div class="info-color">
                  <ul class="m-b-30">
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <h6 class="sub-title text-uppercase">Warning</h6>
                <div class="yellow-color">
                  <ul>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 xs-mt">
                <h6 class="sub-title text-uppercase">Danger</h6>
                <div class="red-color">
                  <ul>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 nav-md-mt">
                <h6 class="sub-title text-uppercase">Pink</h6>
                <div class="pink-color">
                  <ul>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 nav-md-mt">
                <h6 class="sub-title text-uppercase">Grey</h6>
                <div class="gray-color">
                  <ul>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
@endsection



