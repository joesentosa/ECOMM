@extends('__Admin.layout.master')
@section('title', 'Master Promo')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/material-design-icon.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
@endsection

@section('style')
<style>
  .datepicker{
    z-index: 160000 !important;
  }
</style>
@endsection

@section('breadcrumb-title')
	<h2>Master<span>Promo</span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item">Master</li>
	<li class="breadcrumb-item active">Promo</li>
@endsection

@section('content')
<!-- Alternative pagination Starts-->
<div class="col-sm-12">
  <div class="card">    
    <div class="card-body">
      <div class="row">
        <div class="col-6">          
          <div class="container_button"></div>          
        </div>
        <div class="col-6 d-flex flex-row-reverse">
          <button class="btn-add" data-toggle='modal' data-target='#form_promo_insert'>
            <i class="fas fa-plus"></i>
            Tambah
          </button>
        </div>
      </div>
      <div class="table-responsive">
        <table class="display no-wrap" id="tablepromo" style="width:100%;">
          <thead>
            <tr>
              <th style="text-align: center;">No</th>
              <th>Tanggal Awal</th>                         
              <th>Tanggal Akhir</th>
              <th>Harga Promo</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="text-align: center;">1</td>
              <td>10/11/2021</td>
              <td>15/11/2021</td>                                                     
              <td>5%</td>
              <td></td>
            </tr>              
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Main Modal insert -->
<div class="modal fade" id="form_promo_insert" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <i class="fas fa-gamepad"></i>
          Insert Promo
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form method="POST" id="promo_insert" class="form theme-form">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="rangedatepromo_insert">Tanggal Awal - Tanggal Akhir Promo</label>
                <input class="datepicker-here form-control digits" id="rangedatepromo_insert" name="rangedatepromo_insert" type="text" data-range="true" data-multiple-dates-separator=" - " data-language="en">
              </div>             
            </div>            
          </div>    
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="hargapromo_insert">Harga Promo</label>
                <input class="form-control" type="text" name="hargapromo_insert" id="hargapromo_insert" placeholder="Masukkan Harga Promo">
              </div>
            </div>
          </div>         
          <div class="row">
            <div class="col-md-12 d-flex justify-content-end p-4">
              <input type="submit" value="insert" class="btn btn-primary">
            </div>
          </div>
        </form>
        <!-- end form -->
      </div>
    </div>
  </div>
</div>
<!-- end Main Modal insert -->

<!-- Main Modal update -->
<div class="modal fade" id="form_promo_update" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">
              <i class="fas fa-gamepad"></i>
              Update Promo
            </h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <!-- form -->
          <form method="POST" id="promo_update" class="form theme-form">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="rangedatepromo_update">Tanggal Awal - Tanggal Akhir Promo</label>
                  <input class="datepicker-here form-control digits" id="rangedatepromo_update" name="rangedatepromo_update" type="text" data-range="true" data-multiple-dates-separator=" - " data-language="en">
                </div>             
              </div>            
            </div>    
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="hargapromo_update">Harga Promo</label>
                  <input class="form-control" type="text" name="hargapromo_update" id="hargapromo_update" placeholder="Masukkan Harga Promo">
                </div>
              </div>
            </div>         
            <div class="row">
              <div class="col-md-12 d-flex justify-content-end p-4">
                <input type="submit" value="update" class="btn btn-primary">
              </div>
            </div>
          </form>
          <!-- end form -->
        </div>
      </div>
  </div>
</div>
<!-- end Main Modal update -->
@endsection

@section('script')
<script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
<script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets/js/dashboard/default.js')}}"></script>
<script src="{{asset('assets/js/notify/index.js')}}"></script>

<script src="{{asset('assets/js/js_general.js')}}"></script>

<!-- table design settings-->
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-html5-2.0.1/b-print-2.0.1/r-2.2.9/sl-1.3.3/datatables.min.js"></script>
<!-- end table design settings-->

<!-- datepicker settings -->
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<!-- end datepicker settings -->
<script>
  const settingstable = {    
    "columnDefs": [           
      {
        "targets": -1,
        "data": null,
        "defaultContent": "<button type='button' id='btnupdate_promo' class='btn-edit mr-1' style='color:white;' data-toggle='modal' data-target='#form_promo_update'><i class='fas fa-edit'></i></button><button type='button' id='btndelete_promo' class='btn-edit mt-1' style='color:white;'><i class='fas fa-trash'></i></button>",
        "orderable": false
      },
      { "width": "10px", "targets": 0, "orderable": false },
      { "width": "100px", "targets": 1 },
      { "width": "100px", "targets": 2 },        
      { "width": "70px", "targets": 3 },  
      { "width": "60px", "targets": 4 },  
    ],          
    "order": [[1, 'asc']],
    'responsive'  : false,
    'paging'      : true,
    'pageLength'  : 5,
    'destroy'     : false,
    'lengthChange': false,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : true,
    'buttons'     : [
      'copy',
      'excel',      
      'print'
    ]
  }
  GeneralSettingsTable('tablepromo',settingstable,true,'container_button');
</script>
@endsection

