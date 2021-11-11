@extends('__Admin.layout.master')
@section('title', 'Master Barang')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/material-design-icon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}">
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
	<h2>Master<span>Barang</span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item">Master</li>
	<li class="breadcrumb-item active">Barang</li>
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
          <button class="btn-add" data-toggle='modal' data-target='#form_barang_insert'>
            <i class="fas fa-plus"></i>
            Tambah
          </button>
        </div>
      </div>
      <div class="table-responsive">
        <table class="display no-wrap" id="tableBarang" style="width:100%;">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Berat</th>
                <th>Review</th>
                <th>Gambar</th>
                <th>Brand</th>
                <th>Kategori</th>
                <th>Promo</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align: center;">1</td>
                <td>Cooler Master MH752 + USB 7.1 Surround Sound Gaming Headset</td>
                <td>50</td>
                <td>Rp. 1.190.000</td>
                <td>2 kg</td>
                <td id="tdreview">
                  Headphone
                  Driver Diameter: 40mm
                  Frequency Response: 20-20,000 Hz
                  Impedance: 26 Ω
                  Sensitivities (@1KHz): 97dB ± 3dB
                  Cable Length: 1.5m 3.5mm connector (removable), 1.5m USB cable (removable)
                  Connector: 3.5mm 4-pole jack, USB Type A
                  Headband Material: Steel and plastic headband, PU leather and foam cushion
                  Headphone Ear Cushion Material: PU Leather and foam cushion

                  Microphone
                  Pick-up Pattern: Omni-Directional
                  Frequency Response: 100-10,000 Hz
                  Sensitivity: -42 ± 3dB (@ 1KHz)
                  Signal to Noise Ratio: 55 dB
                  Type: Detachable flexible microphone
                  Volume Control: Up/Down Buttons (control box)
                  Microphone Control: Up/down buttons
                  Control Box – Microphone Control: Mute Switch
                  Virtual 7.1 surround sound: On/off button with indicative LED
                  Dimensions: 149 mm x 85 mm x 215 mm
                  Weight: 340 g
                  Headphone Type: Over Ear Headphones

                  Content package
                  Headset MH752
                  USB Soundcard
                  Detachable Microphone
                  Detachable 3.5mm Cable
                  Pouch bag
                  Quick start guide
                </td>
                <td></td>
                <td>Cooler Master</td>
                <td>Headphone</td>
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
<div class="modal fade bd-example-modal-lg" id="form_barang_insert" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <i class="fas fa-gamepad"></i>
          Insert Barang
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form method="POST" enctype="multipart/form-data" id="barang_insert" class="form theme-form">
          @csrf
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label for="nmbarang_insert">Nama Barang</label>
                <input class="form-control" id="nmbarang_insert" type="text" placeholder="Masukkan Nama Barang" name="nmbarang_insert">
              </div>             
            </div>
            <div class="col-md-4">
              <div class="col-form-label">Brand</div>
              <select class="form-control form-control-primary btn-square" name="cb_brand">
                <option value="opt1">Pilih Brand</option>
                <option value="opt2">Type 2</option>
                <option value="opt3">Type 3</option>
                <option value="opt4">Type 4</option>
                <option value="opt5">Type 5</option>
                <option value="opt6">Type 6</option>
                <option value="opt7">Type 7</option>
                <option value="opt8">Type 8</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">              
              <div class="form-group">
                <label for="hargaBarang_insert">Harga Barang</label>
                <input class="form-control" id="hargaBarang_insert" type="text" placeholder="Masukkan Harga Barang" name="hargaBarang_insert">
              </div>               
            </div>
            <div class="col-md-6">
              <div class="col-form-label">Kategori</div>
              <select class="form-control form-control-primary btn-square" name="cb_kategori">
                <option value="opt1">Pilih Kategori</option>
                <option value="opt2">Type 2</option>
                <option value="opt3">Type 3</option>
                <option value="opt4">Type 4</option>
                <option value="opt5">Type 5</option>
                <option value="opt6">Type 6</option>
                <option value="opt7">Type 7</option>
                <option value="opt8">Type 8</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="stokbarang_insert">Stok Barang</label>
                <input class="form-control digits" id="stokbarang_insert" type="number" placeholder="Masukkan Stok Barang" name="stokbarang_insert">
              </div>
            </div>            
            <div class="col-md-6">
              <div class="form-group">
                <label for="beratbarang_insert">Berat Barang</label>
                <input class="form-control digits" id="beratbarang_insert" type="number" placeholder="Masukkan Berat Barang" name="beratbarang_insert">
              </div>
            </div>
          </div>                    
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="reviewbarang_insert">Review Barang</label>
                <textarea class="form-control" rows="5" cols="5" placeholder="Masukkan review Barang" name="reviewbarang_insert"></textarea>                
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
                  <input type="file" onChange="dragNdropInsert(event)"  ondragover="dragInsert()" ondrop="dropInsert()" id="uploadFile_insert"  />
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
<div class="modal fade bd-example-modal-lg" id="form_barang_update" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <i class="fas fa-gamepad"></i>
          Update Barang
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form method="POST" enctype="multipart/form-data" id="barang_update" class="form theme-form">
          @csrf
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label for="nmbarang_update">Nama Barang</label>
                <input class="form-control" id="nmbarang_update" type="text" placeholder="Masukkan Nama Barang" name="nmbarang_update">
              </div>             
            </div>
            <div class="col-md-4">
              <div class="col-form-label">Brand</div>
              <select class="form-control form-control-primary btn-square" name="cb_brand">
                <option value="opt1">Pilih Brand</option>
                <option value="opt2">Type 2</option>
                <option value="opt3">Type 3</option>
                <option value="opt4">Type 4</option>
                <option value="opt5">Type 5</option>
                <option value="opt6">Type 6</option>
                <option value="opt7">Type 7</option>
                <option value="opt8">Type 8</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">              
              <div class="form-group">
                <label for="hargaBarang_update">Harga Barang</label>
                <input class="form-control" id="hargaBarang_update" type="text" placeholder="Masukkan Harga Barang" name="hargaBarang_update">
              </div>               
            </div>
            <div class="col-md-6">
              <div class="col-form-label">Kategori</div>
              <select class="form-control form-control-primary btn-square" name="cb_kategori">
                <option value="opt1">Pilih Kategori</option>
                <option value="opt2">Type 2</option>
                <option value="opt3">Type 3</option>
                <option value="opt4">Type 4</option>
                <option value="opt5">Type 5</option>
                <option value="opt6">Type 6</option>
                <option value="opt7">Type 7</option>
                <option value="opt8">Type 8</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="stokbarang_update">Stok Barang</label>
                <input class="form-control digits" id="stokbarang_update" type="number" placeholder="Masukkan Stok Barang" name="stokbarang_Update">
              </div>
            </div>            
            <div class="col-md-6">
              <div class="form-group">
                <label for="beratbarang_update">Berat Barang</label>
                <input class="form-control digits" id="beratbarang_update" type="number" placeholder="Masukkan Berat Barang" name="beratbarang_update">
              </div>
            </div>
          </div>                    
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="reviewbarang_update">Review Barang</label>
                <textarea class="form-control" rows="5" cols="5" placeholder="Masukkan review Barang" name="reviewbarang_update"></textarea>                
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
            <div class="col-md-12">              
              <div class="uploadOuter">                                              
                <span class="dragBox">
                  Drag and Drop image here
                  <input type="file" onChange="dragNdropUpdate(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile_update"/>
                </span>
              </div>
              <div id="preview_update"></div>
            </div>
          </div>
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
<!-- select2 settings-->
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<!-- end select2 settings-->

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
        "defaultContent": "<button type='button' id='btnupdate_barang' class='btn-edit mr-1' style='color:white;' data-toggle='modal' data-target='#form_barang_update'><i class='fas fa-edit'></i></button><button type='button' id='btndelete_barang' class='btn-edit mt-1' style='color:white;'><i class='fas fa-trash'></i></button>",
        "orderable": false
      },
      { "width": "10px", "targets": 0, "orderable": false },
      { "width": "200px", "targets": 1 },
      { "width": "10px", "targets": 2 },
      { "width": "100px", "targets": 3 },
      { "width": "10px", "targets": 4 },
      { "width": "150px","targets":10}   
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
  GeneralSettingsTable('tableBarang',settingstable,true,'container_button');  
</script>
@endsection


