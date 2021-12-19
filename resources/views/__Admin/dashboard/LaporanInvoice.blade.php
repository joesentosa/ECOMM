@extends('__Admin.layout.master')
@section('title', 'Master Horder')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/material-design-icon.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Laporan<span>Invoice</span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item">Laporan</li>
	<li class="breadcrumb-item active">Invoice</li>
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
      </div>
      <div class="table-responsive">
        <table class="display no-wrap" id="tablehorder" style="width:100%;">
            <thead>
              <tr>
                <th style="text-align: center;">Order Id</th>
                <th>Tanggal Transaksi</th>
                <th>Subtotal</th>
                <th>Metode Pembayaran</th>
                <th>Kurir</th>
                <th>Jenis Layanan</th>
                <th>Total Shipping</th>                                         
              </tr>
            </thead>
            <tbody>
              @isset($data)
                @foreach($data as $item)
                  <tr>
                    <td style="text-align: center;">{{$item->id_order}}</td>
                    <td>{{$item->tanggal_trans}}</td>
                    <td>{{generateFormatRP($item->subtotal)}}</td>
                    <td>{{$item->metode_pembayaran}}</td>                    
                    <td>{{$item->kurir}}</td>
                    <td>{{$item->jenis_layanan}}</td>
                    <td>{{$item->total_shipping}}</td>
                  </tr>              
                @endforeach
              @endisset              
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
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
  const settingshorder = GeneralSettingsTable('tablehorder',settingstable,true,'container_button');     
</script>
@endsection

