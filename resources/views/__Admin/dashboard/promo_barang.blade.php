@extends('__Admin.layout.master')
@section('title', 'Master Promo Barang')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/material-design-icon.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Master<span>Promo Barang</span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item">Master</li>
	<li class="breadcrumb-item active">Promo Barang</li>
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
          <button class="btn btn-primary" data-toggle='modal' data-target='#form_promo_barang_insert'>
            <i class="fas fa-plus"></i>
            Tambah
          </button>
        </div>   
      </div>
      <div class="table-responsive">
        <table class="display no-wrap" id="tablePromoBarang" style="width:100%;">
            <thead>
              <tr>
                <th style="text-align: center;">No</th>
                <th>Nama Barang</th>
                <th>Potongan harga</th>                
                <th>Action</th>       
              </tr>
            </thead>
            <tbody>              
              @isset($data)
                @foreach($data as $item)
                  <tr>
                    <td style="text-align: center;">{{$item->id_promo_barang}}</td>
                    <td  data-idbarang="{{$item->barang->id_barang}}" class="idbarang_hidden">{{$item->barang->namaBarang}}</td>
                    <td  data-idpromo="{{$item->promo->id_promo}}" class="idpromo_hidden">{{generateFormatRP($item->promo->hargaPromo)}}</td>                    
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
<div class="modal fade" id="form_promo_barang_insert" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <i class="fas fa-gamepad"></i>
          Insert Promo Barang
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form method="POST" id="promobarang_insert" action="/admin/insertpromobarang" class="form theme-form">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="col-form-label">Pilih Promo</div>
              <select class="form-control form-control-primary btn-square" name="cb_promo">
                <option value="#">Pilih Promo</option>   
                @isset($promo)                                                        
                  @foreach($promo as $item)
                    <option value="{{$item->id_promo}}">{{$item->namaPromo}}</option>   
                  @endforeach
                @endisset
              </select>             
            </div>            
          </div>                                                       
          <div class="row">
            <div class="col-12">
              <div class="col-form-label">Pilih Barang</div>
              <select class="form-control form-control-primary btn-square" name="cb_barang">
                <option value="#">Pilih Barang</option>   
                @isset($barang)                                                        
                  @foreach($barang as $item)
                    <option value="{{$item->id_barang}}">{{$item->namaBarang}}</option>   
                  @endforeach
                @endisset
              </select>  
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
<div class="modal fade" id="form_promo_barang_update" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <i class="fas fa-gamepad"></i>
          Update Promo barang
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- form -->
        <form method="POST" id="promobarang_update" action="/admin/updatepromobarang" class="form theme-form">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="col-form-label">Pilih Promo</div>
              <select class="form-control form-control-primary btn-square" name="cb_promo_update" id="cb_promo_update">
                <option value="#">Pilih Promo</option>   
                @isset($promo)                                                        
                  @foreach($promo as $item)
                    <option value="{{$item->id_promo}}">{{$item->namaPromo}}</option>   
                  @endforeach
                @endisset
              </select>             
            </div>            
          </div>                                                       
          <div class="row">
            <div class="col-12">
              <div class="col-form-label">Pilih Barang</div>
              <select class="form-control form-control-primary btn-square" name="cb_barang_update" id="cb_barang_update">
                <option value="#">Pilih Barang</option>   
                @isset($barang)                                                        
                  @foreach($barang as $item)
                    <option value="{{$item->id_barang}}">{{$item->namaBarang}}</option>   
                  @endforeach
                @endisset
              </select>  
            </div>
          </div>         
          <div class="row">
            <div class="col-md-12 d-flex justify-content-end p-4">
              <input type="submit" value="insert" class="btn btn-primary">
            </div>
          </div>
          <input type="text" name="id_hidden" id="id_hidden">
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
        "defaultContent": "<button type='button' id='btnupdate_promoBarang' class='btn-edit mr-1' style='color:white;' data-toggle='modal' data-target='#form_promo_barang_update'><i class='fas fa-edit'></i></button><button type='button' id='btndelete_promoBarang' class='btn-edit mt-1' style='color:white;'><i class='fas fa-trash'></i></button>",
        "orderable": false
      },             
      { "width": "10px", "targets": 0 },
      { "width": "200px", "targets": 1 },
      { "width": "200px", "targets": 2 },
      { "width": "120px", "targets": 3 },            
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
  const settingsPromoBarang = GeneralSettingsTable('tablePromoBarang',settingstable,true,'container_button');  

  $('#tablePromoBarang tbody').on('click','#btnupdate_promoBarang',function(){
    const trhead = $(this).parents('tr');      
    const data = settingsPromoBarang.row(trhead).data();          
    let tmpidbarang = trhead.find($('td')).eq(1).attr('data-idbarang');
    let tmpidpromo = trhead.find($('td')).eq(2).attr('data-idpromo');  
    console.log(tmpidbarang+" - "+tmpidpromo)
    clearInput();  
    $('#cb_promo_update').val(tmpidpromo).change();
    $('#cb_barang_update').val(tmpidbarang).change();
    $('#id_hidden').val(data[0]);
  });

  function clearInput(){
    $('#cb_promo_update').val('');
    $('#cb_barang_update').val('');
    $('#id_hidden').val('');
  }

  // delete
  $('#tablePromoBarang tbody').on('click','#btndelete_promoBarang',function(){
    const data = settingsPromoBarang.row($(this).parents('tr')).data();
    $.ajax({
      type: 'POST',
      url: '/admin/deletepromobarang',
      data:{
        'id_promoBarang' :data[0],
        '_token':$('input[name=_token]').val()
      },
      success:function(res){
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
        else{
          Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Tidak berhasil Dihapus',
            showConfirmButton: false,
            timer: 1500
          });
        }
      }
    })
  });
</script>
@endsection

