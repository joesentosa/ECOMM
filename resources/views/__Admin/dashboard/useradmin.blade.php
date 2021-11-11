@extends('__Admin.layout.master')
@section('title', 'Master Admin')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/material-design-icon.css')}}">
@endsection

@section('style')
<style>
  #tdreview{
    max-width: 300px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;       
  }    
  .dt-button{
    background-color:#7e37d8;
    color:white;
    width:100px;
    height:35px;
    border-radius:50px;
    border:none;
  }
  .dt-button:hover{
    background-color:#7d37d8af;
  }
  .btn-edit{
    background-color:#7e37d8;
    border:none;
  }
  .btn-edit:hover{
    background-color:#7d37d8af;
  }
  .btn-add{
    background-color:#7e37d8;
    width:100px;
    border:none;
    border-radius:50px;
    height:35px;
    color:white;
  }
  .btn-add:hover{
    background-color:#7d37d8af;
  }  
</style>
@endsection

@section('breadcrumb-title')
	<h2>Master<span>Admin</span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item">Master</li>
	<li class="breadcrumb-item active">Admin</li>
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
          <button class="btn-add" data-toggle='modal' data-target='#form_useradmin_insert'>
            <i class="fas fa-plus"></i>
            Tambah
          </button>
        </div>
      </div>
      <div class="table-responsive">
        <table class="display no-wrap" id="tableuseradmin" style="width:100%;">
            <thead>
              <tr>
                <th style="text-align: center;">No</th>
                <th>Username</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align: center;">1</td>
                <td>Samuel Wijaya</td>
                <td>samuel3@mhs.stts.edu</td>
                <td></td>  
                <td></td>                                     
              </tr>              
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Main Modal insert -->
<div class="modal fade" id="form_useradmin_insert" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <i class="fas fa-gamepad"></i>
          Insert User Admin
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form method="POST" id="useradmin_insert" class="form theme-form">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="username_insert">Username</label>
                <input class="form-control" id="username_insert" type="text" placeholder="Masukkan Nama user Admin" name="username_insert">
              </div>             
            </div>            
          </div>                                                           
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="email_insert">Email</label>
                <input class="form-control" id="email_insert" type="text" placeholder="Masukkan email" name="email_insert">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="notlp_insert">Nomor Telepon</label>
                <input class="form-control" id="notlp_insert" type="text" placeholder="Masukkan nomor telepon" name="notlp_insert">
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
<div class="modal fade" id="form_useradmin_update" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <i class="fas fa-gamepad"></i>
          Update User Admin
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form method="POST" id="useradmin_update" class="form theme-form">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="username_update">Username</label>
                <input class="form-control" id="username_update" type="text" placeholder="Masukkan Nama user Admin" name="username_update">
              </div>             
            </div>            
          </div>                                                           
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="email_update">Email</label>
                <input class="form-control" id="email_update" type="text" placeholder="Masukkan email" name="email_update">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="notlp_update">Nomor Telepon</label>
                <input class="form-control" id="notlp_update" type="text" placeholder="Masukkan nomor telepon" name="notlp_update">
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
<!-- Alternative pagination Starts-->
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
<script>
  const settingstable = {    
    "columnDefs": [           
      {
        "targets": -1,
        "data": null,
        "defaultContent": "<button type='button' id='btnupdate_brand' class='btn-edit mr-1' style='color:white;' data-toggle='modal' data-target='#form_useradmin_update'><i class='fas fa-edit'></i></button><button type='button' id='btndelete_brand' class='btn-edit mt-1' style='color:white;'><i class='fas fa-trash'></i></button>",
        "orderable": false
      },
      { "width": "10px", "targets": 0, "orderable": false },
      { "width": "200px", "targets": 1 },
      { "width": "200px", "targets": 2 },
      { "width": "140px", "targets": 3 },      
      { "width": "60px", "targets": 4 },  
    ],              
    'responsive'  : true,
    'paging'      : true,
    'pageLength'  : 10,
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
  GeneralSettingsTable('tableuseradmin',settingstable,true,'container_button');
</script>
@endsection

