@extends('__Admin.layout.master')
@section('title', 'Master Customer')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/material-design-icon.css')}}">
@endsection

@section('style')
<style>
  .edit-table-customer{
    width:100px;
    height:35px;
    text-align:center;
    padding-top:2.5%;    
    border-radius:50px;
    color:white;
    font-weight:500;
    line-height:2;
  }
  .edit-table-customer.active{
    background-color:#90e900;
  }
  .edit-table-customer.nanactive{
    background-color:#fc1f57;
  }
</style>
@endsection

@section('breadcrumb-title')
	<h2>Master<span>Customer</span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item">Master</li>
	<li class="breadcrumb-item active">Customer</li>
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
        <table class="display no-wrap" id="tablecustomer" style="width:100%;">
            <thead>
              <tr>
                <th style="text-align: center;">No</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>                
                <th>Email</th>
                <th>Address</th>                                 
                <th>Status</th>           
              </tr>
            </thead>
            <tbody>
              @isset($data)
                @foreach($data as $item)
                  <tr>
                    <td style="text-align: center;">{{$item->id_customer}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->firstname}}</td>
                    <td>{{$item->lastname}}</td>                                                      
                    <td>{{$item->email}}</td>                                                      
                    <td>{{$item->address.", ".$item->kota.", ".$item->kodeZip}}</td>                                                      
                    @if($item->deleted_at == null)
                    <td>                      
                      <p class="edit-table-customer active">Aktif</p>                  
                    </td>
                    @else
                    <td>                      
                      <p class="edit-table-customer nanactive">Tidak Aktif</p>                  
                    </td>
                    @endif
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
    "columnDefs": [                 
      { "width": "10px", "targets": 0, "orderable": false },
      { "width": "200px", "targets": 1 },
      { "width": "200px", "targets": 2 },
      { "width": "140px", "targets": 3 },            
      { "width": "40px", "targets": 4 },
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
  GeneralSettingsTable('tablecustomer',settingstable,true,'container_button');
</script>
@endsection

