@extends('__Admin.layout.master')
@section('title', 'Baca Notif')

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
	<h4>Terdapat <span id="jumlah">0</span> notifikasi tidak terbaca.</h4>
@endsection

@section('content')
<ul>
    @forelse($notifications as $notification)
        <div class="alert alert-success" role="alert">
            [{{ $notification->created_at }}] User {{ $notification->data['username'] }} ({{ $notification->data['email'] }}) has just registered.
            <a href="#" class="float-right mark-as-read" data-id="{{ $notification->id }}">
                Mark as read
            </a>
        </div>

        @if($loop->last)
            <a href="#" id="mark-all">
                Mark all as read
            </a>
        @endif
    @empty
        There are no new notifications
    @endforelse
</ul>
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

    setInterval(() => {
        $.get("{{url('dapatnotif')}}", {}, function(hasil) {
            $("#jumlah").html(hasil);
        })
    }, 1000);
  });
</script>
@endsection


