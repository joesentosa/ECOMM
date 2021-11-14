@extends('__Admin.layout.master')
@section('title', 'Master Brand')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/material-design-icon.css')}}">
@endsection

@section('style')
<style>  
  .uploadOuter {
    text-align: center;
    padding: 20px;
  }
  .uploadOuter strong {
    padding: 0 10px;
  }
  .dragBox {
    width: 600px;
    height: 100px;
    margin: 0 auto;
    position: relative;
    text-align: center;
    font-weight: bold;
    line-height: 95px;
    color: #999;
    border: 2px dashed #ccc;
    display: inline-block;
    transition: transform 0.3s;
  }
  .dragBox input[type="file"] {
    position: absolute;
    height: 100%;
    width: 100%;
    opacity: 0;
    top: 0;
    left: 0;
  }
  .draging {
    transform: scale(1.1);
  }
  #preview_insert, #preview_update {
    text-align: center;
  }
  #preview_insert img {
    max-width: 100%;
  }
  #preview_update img {
    max-width: 100%;
  }
</style>
@endsection

@section('breadcrumb-title')
	<h2>Master<span>Brand</span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item">Master</li>
	<li class="breadcrumb-item active">Brand</li>
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
          <button class="btn btn-primary" data-toggle='modal' data-target='#form_brand_insert'>
            <i class="fas fa-plus"></i>
            Tambah
          </button>
        </div>
      </div>
      <div class="table-responsive">
        <table class="display no-wrap" id="tableBrand" style="width:100%;">
            <thead>
              <tr>
                <th style="text-align: center;">No</th>
                <th>Nama Brand</th>
                <th>Gambar</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @isset($data)
                @foreach($data as $item)
                <tr>
                  <td style="text-align: center;">{{$item->id_brand}}</td>
                  <td>{{$item->namaBrand}}</td>                    
                  @if(strpos($item->gambar,'https'))                    
                    <td class="d-flex justify-content-center"><img src="{{$item->gambar}}" style="width:150px; height:10%;background-size: cover;"></td>
                  @else                               
                    <td class="d-flex justify-content-center"><img src="{{asset($item->gambar)}}" style="width:150px; height:10%;background-size: cover;"></td>
                  @endif
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
<div class="modal fade bd-example-modal-sm" id="form_brand_insert" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <i class="fas fa-gamepad"></i>
          Insert Brand
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form method="POST" enctype="multipart/form-data" action="/admin/insertbrand" id="brand_insert" class="form theme-form">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="nmbrand_insert">Nama Brand</label>
                <input class="form-control" id="nmbrand_insert" type="text" placeholder="Masukkan Nama Brand" name="nmbrand_insert">
              </div>             
            </div>            
          </div>    
          <div class="row">
            <div class="col-12">
              <label for="basic-url">Url Image</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3">https://example.com/</span>
                </div>
                <input type="text" class="form-control" id="basic-url" name="urlimageinsert" aria-describedby="basic-addon3">
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12 d-flex flex-row-reverse">              
              <button type="button" class="btn btn-danger btn-xs remove-preview-insert">
                <i class="fa fa-times"></i> Reset This Form
              </button>              
            </div>
          </div>                                             
          <div class="row">
            <div class="col-12">
              <div class="uploadOuter">                                            
                <span class="dragBox">
                  Drag and Drop image here
                  <input type="file" onChange="dragNdropInsert(event)"  ondragover="dragInsert()" ondrop="dropInsert()" id="uploadFile_insert" name="uploadFile_insert"  />
                </span>
              </div>
              <div id="preview_insert"></div>
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
<div class="modal fade bd-example-modal-lg" id="form_brand_update" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
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
        <form method="POST" enctype="multipart/form-data" action="/admin/updatebrand" id="barang_update" class="form theme-form">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="nmbrand_insert">Nama Brand</label>
                <input class="form-control" id="nmbrand_update" type="text" placeholder="Masukkan Nama Brand" name="nmbrand_update">
              </div>             
            </div>            
          </div>   
          <div class="row">
            <div class="col-12">
              <label for="basic-url">Url Image</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3">https://example.com/</span>
                </div>
                <input type="text" class="form-control" id="basic-url" name="urlimageupdate" aria-describedby="basic-addon3">
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12 d-flex flex-row-reverse">              
              <button type="button" class="btn btn-danger btn-xs remove-preview-update">
                <i class="fa fa-times"></i> Reset This Form
              </button>              
            </div>
          </div>                                             
          <div class="row">
            <div class="col-12">
              <div class="uploadOuter">                                            
                <span class="dragBox">
                  Drag and Drop image here
                  <input type="file" onChange="dragNdropUpdate(event)"  ondragover="dragUpdate()" ondrop="dropUpdate()" name="uploadFile_update" id="uploadFile_update"/>
                </span>
              </div>
              <div id="preview_update"></div>
            </div>
          </div>          
          <input type="hidden" name="id_hidden" id="id_hidden">
          <div class="row">
            <div class="col-md-12 d-flex justify-content-end p-4">
              <input type="submit" value="Update" class="btn btn-primary">
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
<script src="{{asset('assets/js/js_upload_settings.js')}}"></script>

<!-- dropzone js -->
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
<!-- end dropzone js -->

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
        "defaultContent": "<button type='button' id='btnupdate_brand' class='btn-edit mr-1' style='color:white;' data-toggle='modal' data-target='#form_brand_update'><i class='fas fa-edit'></i></button><button type='button' id='btndelete_brand' class='btn-edit mt-1' style='color:white;'><i class='fas fa-trash'></i></button>",
        "orderable": false
      },
      { "width": "10px", "targets": 0, "orderable": false },
      { "width": "200px", "targets": 1 },
      { "width": "150px", "targets": 2 },
      { "width": "10px", "targets": 3 },      
    ],              
    'responsive'  : true,
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
  const settingsbrand = GeneralSettingsTable('tableBrand',settingstable,true,'container_button');

  // display data di table ke input form modal
  $('#tableBrand tbody').on('click','#btnupdate_brand',function(){      
    const data = settingsbrand.row($(this).parents('tr')).data();
    clearInput();
    // fill data
    $(`input[name=id_hidden]`).val(data[0]);
    $(`input[name=nmbrand_update]`).val(data[1]);
    // $(`#preview_update`).append(data[2]);    
    // ============================================
  });

  function clearInput(){
    $(`input[name=id_hidden]`).val('');
    $(`input[name=nmbrand_update]`).val('');
    $(`#preview_update`).html(''); 
  }

  // delete brand
  $('#tableBrand tbody').on('click','#btndelete_brand',function(){
    const data = settingsbrand.row($(this).parents('tr')).data();
    $.ajax({
        type: 'POST',
        url:"/admin/deletebrand",
        data:{
          'id_brand'    : data[0],
          '_token'           : $('input[name="_token"]').val()
        },
        success: function(res){
          if (res.status == 200) {
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'berhasil Ditambahkan',
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
              title: 'Tidak berhasil Ditambahkan',
              showConfirmButton: false,
              timer: 1500
            });
          }
        }
    });            
  });
</script>
@endsection

