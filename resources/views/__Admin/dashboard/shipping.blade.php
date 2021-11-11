@extends('__Admin.layout.master')
@section('title', 'Master Shipping')

@section('css')
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/datatables.css">
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
<!-- Alternative pagination Starts-->
<div class="col-sm-12">
  <div class="card">    
    <div class="card-body">
      <div class="row">
        <div class="col-6">          
          <div class="container_button"></div>          
        </div>     
        <div class="col-6 d-flex flex-row-reverse">
          <button class="btn-add" data-toggle='modal' data-target='#form_shipping_insert'>
            <i class="fas fa-plus"></i>
            Tambah
          </button>
        </div>   
      </div>
      <div class="table-responsive">
        <table class="display no-wrap" id="tableshipping" style="width:100%;">
            <thead>
              <tr>
                <th style="text-align: center;">No</th>
                <th>Kota Tujuan</th>
                <th>Kurir</th>
                <th>Jenis Layanan</th>     
                <th>Tarif</th>    
                <th>Action</th>       
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align: center;">1</td>
                <td>Surabaya</td>
                <td>JNE</td>
                <td>-</td>                                                      
                <td>Rp. 15.000,00</td>
                <td></td>
              </tr>              
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Main Modal insert -->
<div class="modal fade" id="form_shipping_insert" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <i class="fas fa-gamepad"></i>
          Insert Shipping
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form method="POST" id="shipping_insert" class="form theme-form">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="kotatujuan_insert">Kota Tujuan</label>
                <input class="form-control" id="kotatujuan_insert" type="text" placeholder="Masukkan kota tujuan" name="kotatujuan_insert">
              </div>             
            </div>            
          </div>                                                       
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="kurir_insert">Kurir</label>
                <input class="form-control" id="kurir_insert" type="text" placeholder="Masukkan kurir" name="kurir_insert">
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="jenislayanan_insert">Jenis Layanan</label>
                <input class="form-control" id="jenislayanan_insert" type="text" placeholder="Masukkan jenis layanan" name="jenislayanan_insert">
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="tarif_insert">Tarif</label>
                <input class="form-control" id="tarif_insert" type="text" placeholder="Masukkan tarif" name="tarif_insert">
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
<div class="modal fade" id="form_shipping_update" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <i class="fas fa-gamepad"></i>
          Update Brand
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form method="POST" id="shipping_update" class="form theme-form">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="kotatujuan_update">Kota Tujuan</label>
                <input class="form-control" id="kotatujuan_update" type="text" placeholder="Masukkan kota tujuan" name="kotatujuan_update">
              </div>             
            </div>            
          </div>                                                       
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="kurir_update">Kurir</label>
                <input class="form-control" id="kurir_update" type="text" placeholder="Masukkan kurir" name="kurir_update">
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="jenislayanan_update">Jenis Layanan</label>
                <input class="form-control" id="jenislayanan_update" type="text" placeholder="Masukkan jenis layanan" name="jenislayanan_update">
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="tarif_update">Tarif</label>
                <input class="form-control" id="tarif_update" type="text" placeholder="Masukkan tarif" name="tarif_update">
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
<script src="{{route('/')}}/assets/js/typeahead/handlebars.js"></script>
<script src="{{route('/')}}/assets/js/typeahead/typeahead.bundle.js"></script>
<script src="{{route('/')}}/assets/js/typeahead/typeahead.custom.js"></script>
<script src="{{route('/')}}/assets/js/typeahead-search/handlebars.js"></script>
<script src="{{route('/')}}/assets/js/typeahead-search/typeahead-custom.js"></script>
<!-- <script src="{{route('/')}}/assets/js/custom-card/custom-card.js"></script> -->
<script src="{{route('/')}}/assets/js/notify/bootstrap-notify.min.js"></script>
<script src="{{route('/')}}/assets/js/dashboard/default.js"></script>
<script src="{{route('/')}}/assets/js/notify/index.js"></script>

<script src="{{route('/')}}/assets/js/js_general.js"></script>

<!-- table design settings-->
<script src="{{route('/')}}/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
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
        "defaultContent": "<button type='button' id='btnupdate_shipping' class='btn-edit mr-1' style='color:white;' data-toggle='modal' data-target='#form_shipping_update'><i class='fas fa-edit'></i></button><button type='button' id='btndelete_shipping' class='btn-edit mt-1' style='color:white;'><i class='fas fa-trash'></i></button>",
        "orderable": false
      },             
      { "width": "10px", "targets": 0, "orderable": false },
      { "width": "200px", "targets": 1 },
      { "width": "200px", "targets": 2 },
      { "width": "120px", "targets": 3 },            
      { "width": "100px", "targets": 4 },
      { "width": "70px", "targets": 5 },
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
  GeneralSettingsTable('tableshipping',settingstable,true,'container_button');
</script>
@endsection

