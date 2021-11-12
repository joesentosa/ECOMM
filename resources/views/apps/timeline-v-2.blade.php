@extends('layouts.simple.master')
@section('title', 'Timeline 2')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Timeline<span>2</span></h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item">Timeline</li>
	<li class="breadcrumb-item active">Timeline 2</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Example</h5>
            </div>
            <div class="card-body">
               <div id="timeline-2">
                  <div data-year="2014">Start</div>
                  <div class="active" data-year="2011">Lorem is simply dummy text of the printing and typesetting industry. the printing and typesetting industry.</div>
                  <div data-year="2015">Lorem is simply dummy text of the printing and typesetting industry. </div>
                  <div data-year="2016">Lorem is simply dummy text of the printing and typesetting industry.</div>
                  <div data-year="2017">Lorem is simply dummy text of the printing and typesetting industry.</div>
                  <div data-year="2018">Lorem is simply dummy text of the printing and typesetting industry.</div>
                  <div data-year="2021">End.</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/timeline/timeline-v-2/jquery.timeliny.min.js')}}"></script>
<script src="{{asset('assets/js/timeline/timeline-v-2/timeline-v-2-custom.js')}}"></script>
@endsection
