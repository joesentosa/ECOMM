@extends('layouts.simple.master')
@section('title', 'Server Side')

@section('css')
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/datatables.css">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Datatables<span>Server Side</span></h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Tables</li>
	<li class="breadcrumb-item">Data Tables</li>
	<li class="breadcrumb-item active">Server Side</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <!-- Server Side Processing start-->
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Server Side Processing</h5>
               <span>In some tables you might wish to have some content generated automatically.</span>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="display datatables" id="server-side-datatable">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- Server Side Processing end-->
      <!-- http Server Side start-->
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Custom HTTP variables</h5>
               <span>The example below shows server-side processing being used with an extra parameter being sent to the server by using the ajax.data option as a function</span>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="display datatables" id="datatable-http">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- http Server Side end-->
      <!-- post data Server Side start-->
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>POST Data</h5>
               <span>The example below shows server-side processing being used with an extra parameter being sent to the server by using the ajax.data option as a function</span>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="display datatables" id="datatable-post">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{route('/')}}/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{route('/')}}/assets/js/datatable/datatables/datatable.custom.js"></script>
@endsection