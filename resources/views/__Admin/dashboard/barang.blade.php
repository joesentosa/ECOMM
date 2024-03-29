@extends('__Admin.layout.master')
@section('title', 'Master Barang')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/material-design-icon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/img_box.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.4-rc1/css/foundation.css">
@endsection

@section('style')
<style>  
  .quote-imgs-thumbs {
    background: #eee;
    border: 1px solid #ccc;
    border-radius: 0.25rem;
    margin: 1.5rem 0;
    padding: 0.75rem;
  }
  .quote-imgs-thumbs--hidden {
    display: none;
  }
  .img-preview-thumb {
    background: #fff;
    border: 1px solid #777;
    border-radius: 0.25rem;
    box-shadow: 0.125rem 0.125rem 0.0625rem rgba(0, 0, 0, 0.12);
    margin-right: 1rem;
    max-width: 140px;
    padding: 0.25rem;
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
          <button class="btn btn-primary" data-toggle='modal' data-target='#form_barang_insert'>
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
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @isset($data)
              @foreach($data as $item)
                <tr>
                  <td style="text-align: center;">{{$item->id_barang}}</td>
                  <td>{{$item->namaBarang}}</td>
                  <td>{{$item->stok}}</td>
                  <td>{{generateFormatRP($item->harga)}}</td>
                  <td>{{$item->berat}} kg</td>
                  <td id="tdreview">
                    <button data-id="{{$item->id_barang}}" class="btn-primary view_data"><i class="fas fa-eye"></i></button>                    
                    {{$item->review}}                              
                  </td>                  
                  <td>         
                    <section id="gallery">                               
                      <div id="image-gallery">                        
                        @foreach($item->gambar as $index => $images)                          
                          <div class="image @if($index > 0) hide_img @endif">
                            <div class="img-wrapper">
                              <a href="{{asset($images->gambar)}}"><img src="{{asset($images->gambar)}}" class="img-responsive"></a>
                              <div class="img-overlay">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                              </div>
                            </div>
                          </div> 
                        @endforeach                         
                      </div><!-- End image gallery -->
                    </section>
                  </td>                        
                  <td data-idbrand="{{$item->fk_id_brand}}" class="idbrand_hidden">{{$item->namaBrand}}</td>
                  <td data-idkategori="{{$item->fk_id_kategori}}" class="idkategori_hidden">{{$item->nama_kategori}}</td>                       
                  <td></td>                        
                </tr>  
              @endforeach
            @endisset
          </tbody>
        </table>

        <!-- modal review -->
        <div id="data" class="modal show fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                  <i class="fas fa-gamepad"></i>
                  Detail Barang
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="detail_data">  
              </div>  
              <div class="modal-footer">  
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
              </div> 
            </div>
          </div>
        </div>
        <!-- end modal review -->

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
        <form method="POST" enctype="multipart/form-data" action="/admin/insertbarang" id="barang_insert" class="form theme-form">
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
                @isset($brand)
                  @foreach($brand as $item)
                    <option value="{{$item->id_brand}}">{{$item->namaBrand}}</option>
                  @endforeach
                @endisset    
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
                <option value="#">Pilih Kategori</option>   
                @isset($kategori)                                                        
                  @foreach($kategori as $item)
                    <option value="{{$item->id_kategori}}">{{$item->nama_kategori}}</option>   
                  @endforeach
                @endisset
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
                <textarea class="form-control" rows="5" cols="5" placeholder="Masukkan review Barang" id="reviewbarang_insert" name="reviewbarang_insert"></textarea>                
              </div>
            </div>
          </div>                    
          <div class="row">
            <div class="col-12">
              <p>
                <label for="upload_imgs_insert" class="button hollow">Select Your Images +</label>
                <input class="show-for-sr" type="file" id="upload_imgs_insert" name="upload_imgs_insert[]" multiple/>
              </p>
              <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview_insert" aria-live="polite"></div>
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
        <form method="POST" enctype="multipart/form-data" action="/admin/updatebarang" id="barang_update" class="form theme-form">
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
              <select class="form-control form-control-primary btn-square" name="cb_brand" id="cb_brand">
                <option value="#">Pilih Brand</option>
                @isset($brand)
                  @foreach($brand as $item)
                    <option value="{{$item->id_brand}}">{{$item->namaBrand}}</option>
                  @endforeach
                @endisset
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
              <select class="form-control form-control-primary btn-square" id="cb_kategori" name="cb_kategori">
                <option value="opt1">Pilih Kategori</option>
                @isset($kategori)
                  @foreach($kategori as $item)
                    <option value="{{$item->id_kategori}}">{{$item->nama_kategori}}</option>
                  @endforeach
                @endisset
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="stokbarang_update">Stok Barang</label>
                <input class="form-control digits" id="stokbarang_update" type="number" placeholder="Masukkan Stok Barang" id="stokbarang_update" name="stokbarang_update">
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
                <textarea class="form-control" rows="5" cols="5" placeholder="Masukkan review Barang" id="reviewbarang_update" name="reviewbarang_update"></textarea>                
              </div>
            </div>
          </div>
          <div class="row">            
            <div class="col-md-12">              
              <p>
                <label for="upload_imgs_update" class="button hollow">Select Your Images +</label>
                <input class="show-for-sr" type="file" id="upload_imgs_update" name="upload_imgs_update[]" multiple/>
              </p>
              <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview_update" aria-live="polite"></div>
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

  <script src="{{asset('assets/js/js_image_gallery.js')}}"></script>
  <script src="{{asset('assets/js/js_general.js')}}"></script>

  <!-- table design settings-->
  <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-html5-2.0.1/b-print-2.0.1/r-2.2.9/sl-1.3.3/datatables.min.js"></script>
  <!-- end table design settings-->
<script>      
  $(document).ready(function(){
    const settingstable = {    
      "columnDefs": [           
        {
          "targets": -1,
          "data": null,
          "defaultContent": "<button type='button' id='btnupdate_barang' class='btn-edit mr-1' style='color:white;' data-toggle='modal' data-target='#form_barang_update'><i class='fas fa-edit'></i></button><button type='button' id='btndelete_barang' class='btn-edit mt-1' style='color:white;'><i class='fas fa-trash'></i></button>",
          "orderable": false
        },
        { "width": "10px", "targets": 0},
        { "width": "200px", "targets": 1 },
        { "width": "10px", "targets": 2 },
        { "width": "100px", "targets": 3 },
        { "width": "10px", "targets": 4 },
        { "width": "200px", "targets": 6 },
        { "width": "150px","targets":9}   
      ],          
      "order": [[1, 'asc']],
      'responsive'  : true,
      'paging'      : false,
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
    const settingsBarang = GeneralSettingsTable('tableBarang',settingstable,true,'container_button');    

    $('.view_data').click(function(){      
      var data_id = settingsBarang.row($(this).parents('tr')).data();         
      let tmpdata = data_id[5].split("</button>");      
      $("#detail_data").html(tmpdata[1]);
      $("#data").modal('show');		
    });
    // display data di table ke input form modal
    $('#tableBarang tbody').on('click','#btnupdate_barang',function(){  
      const trhead = $(this).parents('tr');      
      const data = settingsBarang.row(trhead).data();          
      let tmpidbrand = trhead.find($('td')).eq(7).attr('data-idbrand');
      let tmpidkategori = trhead.find($('td')).eq(8).attr('data-idkategori');
      let tmpberat = data[4].split(" ");   
      let tmpreview = data[5].split("</button>");                
      
      // $('#img_preview_update').html();
      $(`input[name=nmbarang_update]`).val(data[1]);
      $(`input[name=hargaBarang_update]`).val(data[3].replace('Rp ','').replace('.','').replace(',00',''));
      $('#cb_brand').val(tmpidbrand).change();
      $('#cb_kategori').val(tmpidkategori).change();
      $(`input[name=stokbarang_update]`).val(data[2]);
      $(`input[name=beratbarang_update]`).val(tmpberat[0]);
      $(`textarea#reviewbarang_update`).val(tmpreview[1]);
      $(`input[name=id_hidden]`).val(data[0]);     
      // ============================================
    });    
    $('#tableBarang tbody').on('click','#btndelete_barang',function(){            
      const data = settingsBarang.row($(this).parents('tr')).data();
      $.ajax({
        type: 'GET',
        url:"/admin/deletebarang/"+data[0],        
        success: function(res){
          if (res.status == 200) {
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'berhasil Dihapus',
              showConfirmButton: false,
              timer: 1500
            });
            setTimeout(function(){
              location.reload();
            }, 200);
          }
          else if(res.status == 400){
            Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'Tidak berhasil Dihapus',
              showConfirmButton: false,
              timer: 1500
            });
          }         
        }
    });   
    })
    // =================================
    // image upload
    generalUpload('upload_imgs_insert','img_preview_insert','img-upload-form-insert');
    generalUpload('upload_imgs_update','img_preview_update','img-upload-form-update');
  });
</script>
@endsection


