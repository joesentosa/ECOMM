@extends('__Admin.layout.master')
@section('title', 'Master Kategori')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/material-design-icon.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Master<span>Kategori</span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item">Master</li>
	<li class="breadcrumb-item active">Kategori</li>
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
          <button class="btn btn-primary" data-toggle='modal' data-target='#form_kategori_insert'>
            <i class="fas fa-plus"></i>
            Tambah
          </button>
        </div>
      </div>
      <div class="table-responsive">
        <table class="display no-wrap" id="tablekategori" style="width:100%;">
          <thead>
            <tr>
              <th style="text-align: center;">No</th>
              <th>Nama Kategori</th>                         
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @isset($data)
              @foreach($data as $item)
                <tr>
                  <td style="text-align: center;">{{$item->id_kategori}}</td>
                  <td>{{$item->nama_kategori}}</td>
                  <td></td>                                                     
                </tr>              
              @endforeach
            @endisset            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Main Modal insert -->
<div class="modal fade" id="form_kategori_insert" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <i class="fas fa-gamepad"></i>
          Insert Kategori
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form method="POST" id="kategori_insert" action="/admin/insertkategori" class="form theme-form">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="nmkategori_insert">Nama Kategori</label>
                <input class="form-control" id="nmkategori_insert" type="text" placeholder="Masukkan Nama kategori" name="nmkategori_insert">
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
<div class="modal fade" id="form_kategori_update" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <i class="fas fa-gamepad"></i>
          Update Kategori
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form method="POST" id="kategori_update" action="/admin/updatekategori" class="form theme-form">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="nmkategori_update">Nama Kategori</label>
                <input class="form-control" id="nmkategori_update" type="text" placeholder="Masukkan Nama kategori" name="nmkategori_update">
              </div>               
            </div>            
          </div>              
          <div class="row">
            <div class="col-md-12 d-flex justify-content-end p-4">
              <input type="submit" value="Update" class="btn btn-primary">
            </div>
          </div>
          <input type="hidden" name="id_hidden" id="id_hidden">
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
<script>
  const settingstable = {    
    "columnDefs": [           
      {
        "targets": -1,
        "data": null,
        "defaultContent": "<button type='button' id='btnupdate_kategori' class='btn-edit mr-1' style='color:white;' data-toggle='modal' data-target='#form_kategori_update'><i class='fas fa-edit'></i></button><button type='button' id='btndelete_kategori' class='btn-edit mt-1' style='color:white;'><i class='fas fa-trash'></i></button>",
        "orderable": false
      },
      { "width": "10px", "targets": 0 },
      { "width": "300px", "targets": 1 },
      { "width": "100px", "targets": 2 },        
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
  const settingskategori = GeneralSettingsTable('tablekategori',settingstable,true,'container_button');

   // display data di table ke input form modal
  $('#tablekategori tbody').on('click','#btnupdate_kategori',function(){      
    const data = settingskategori.row($(this).parents('tr')).data();    
    clearInput();
    // fill data
    $(`input[name=id_hidden]`).val(data[0]);
    $(`input[name=nmkategori_update]`).val(data[1]);     
    // ============================================
  });
  function clearInput(){
    $(`input[name=id_hidden]`).val('');
    $(`input[name=nmkategori_update]`).val('');     
  }

  // delete kategori
  $('#tablekategori tbody').on('click','#btndelete_kategori',function(){
    const data = settingskategori.row($(this).parents('tr')).data();
    console.log(data);
    $.ajax({
        type: 'POST',
        url:"/admin/deletekategori",
        data:{
          'id_kategori' : data[0],
          '_token'      : $('input[name="_token"]').val()
        },
        success: function(res){
          if (res.status == 200) {
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'berhasil Di hapus',
              showConfirmButton: false,
              timer: 1500
            });
            setTimeout(function(){
              location.reload();
            }, 200);
          }
          else{
            Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'Tidak berhasil Di hapus',
              showConfirmButton: false,
              timer: 1500
            });
          }
        }
    });            
  });
</script>
@endsection

