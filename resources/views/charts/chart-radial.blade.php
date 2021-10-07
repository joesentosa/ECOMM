@extends('layouts.simple.master')
@section('title', 'Radial Chart')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Radial<span>Chart</span></h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Charts</li>
	<li class="breadcrumb-item active">Radial Chart</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12 col-xl-12">
         <div class="card">
            <div class="card-header">
               <h5>Radial Variants</h5>
            </div>
            <div class="card-body redial-chart-block">
               <div class="radial-bar radial-bar-10 radial-bar-lg radial-bar-primary mr-3" data-label="10%"></div>
               <div class="radial-bar radial-bar-30 radial-bar-lg radial-bar-secondary mr-3" data-label="30%"></div>
               <div class="radial-bar radial-bar-50 radial-bar-lg radial-bar-success mr-3" data-label="50%"></div>
               <div class="radial-bar radial-bar-70 radial-bar-lg mr-3 .radial-bar-info" data-label="70%"></div>
               <div class="radial-bar radial-bar-90 radial-bar-lg radial-bar-warning mr-3" data-label="90%"></div>
               <div class="radial-bar radial-bar-100 radial-bar-lg radial-bar-danger mr-3" data-label="100%"></div>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-xl-6">
         <div class="card">
            <div class="card-header">
               <h5>Radial Sizes</h5>
            </div>
            <div class="card-body redial-chart-block">
               <div class="radial-bar radial-bar-50 radial-bar-lg radial-bar-primary mr-3" data-label="50%"></div>
               <div class="radial-bar radial-bar-40 radial-bar-secondary mr-3" data-label="40%"></div>
               <div class="radial-bar radial-bar-40 radial-bar-sm radial-bar-success mr-3" data-label="40%"></div>
               <div class="radial-bar radial-bar-30 radial-bar-xs radial-bar-info mr-3" data-label="30%"></div>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-xl-6">
         <div class="card">
            <div class="card-header">
               <h5>Radial With Images</h5>
            </div>
            <div class="card-body redial-chart-block">
               <div class="radial-bar radial-bar-50 radial-bar-lg radial-bar-primary mr-3" data-label="50%"><img src="../assets/images/user/1.jpg" alt="User-Image"></div>
               <div class="radial-bar radial-bar-50 radial-bar-secondary mr-3" data-label="50%"><img src="../assets/images/user/1.jpg" alt="User-Image"></div>
               <div class="radial-bar radial-bar-40 radial-bar-sm radial-bar-success mr-3" data-label="40%"><img src="../assets/images/user/1.jpg" alt="User-Image"></div>
               <div class="radial-bar radial-bar-30 radial-bar-xs radial-bar-info mr-3" data-label="30%"><img src="../assets/images/user/1.jpg" alt="User-Image"></div>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-xl-12">
         <div class="card">
            <div class="card-header">
               <h5>Radial With Toopltip</h5>
            </div>
            <div class="card-body redial-chart-block">
               <div class="radial-bar radial-bar-10 radial-bar-lg radial-bar-primary mr-3" data-label="10%" data-toggle="tooltip" data-title="10%"></div>
               <div class="radial-bar radial-bar-30 radial-bar-lg radial-bar-secondary mr-3" data-label="30%" data-toggle="tooltip" data-title="30%"></div>
               <div class="radial-bar radial-bar-50 radial-bar-lg radial-bar-success mr-3" data-label="50%" data-toggle="tooltip" data-title="50%"></div>
               <div class="radial-bar radial-bar-70 radial-bar-lg radial-bar-info mr-3" data-label="70%" data-toggle="tooltip" data-title="70%"></div>
               <div class="radial-bar radial-bar-90 radial-bar-lg radial-bar-warning mr-3" data-label="90%" data-toggle="tooltip" data-title="90%"></div>
               <div class="radial-bar radial-bar-100 radial-bar-lg radial-bar-danger mr-3" data-label="100%" data-toggle="tooltip" data-title="100%"></div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{route('/')}}/assets/js/radial-chart-tooltip.js"></script>
@endsection