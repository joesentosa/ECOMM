@extends('__Admin.layout.master')
@section('title', 'Master Shipping')

@section('css')
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/jsgrid.css">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/material-design-icon.css">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Master<span>Shipping</span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item">Master</li>
	<li class="breadcrumb-item active">Shipping</li>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
        <div class="card">          
          <div class="card-body">
              <div id="basicScenario"></div>
          </div>
        </div>
    </div>      
  </div>
</div>
@endsection

@section('script')
<script src="{{route('/')}}/assets/js/typeahead/handlebars.js"></script>
<script src="{{route('/')}}/assets/js/typeahead/typeahead.bundle.js"></script>
<script src="{{route('/')}}/assets/js/typeahead/typeahead.custom.js"></script>
<script src="{{route('/')}}/assets/js/typeahead-search/handlebars.js"></script>
<script src="{{route('/')}}/assets/js/typeahead-search/typeahead-custom.js"></script>
<script src="{{route('/')}}/assets/js/custom-card/custom-card.js"></script>
<script src="{{route('/')}}/assets/js/notify/bootstrap-notify.min.js"></script>
<script src="{{route('/')}}/assets/js/dashboard/default.js"></script>
<script src="{{route('/')}}/assets/js/notify/index.js"></script>
<!-- table design settings-->
<script src="{{route('/')}}/assets/js/jsgrid/jsgrid.min.js"></script>
<script src="{{route('/')}}/assets/js/jsgrid/griddata.js"></script>
<script src="{{route('/')}}/assets/js/jsgrid/jsgrid.js"></script>
<!-- end table design settings-->
@endsection

