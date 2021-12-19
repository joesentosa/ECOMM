@extends('__Admin.layout.master')
@section('title', 'Laporan Pendapatan per Bulan')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/material-design-icon.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h2>Laporan<span>Pendapatan per Bulan</span></h2>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Laporan</li>
<li class="breadcrumb-item active">Pendapatan per Bulan</li>
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
                <table class="display no-wrap" id="tabledorder" style="width:100%;">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>Bulan Transaksi</th>
                            <th>Jumlah tranksaksi</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($data)
                            <?php $ctr = 1;?>
                            @foreach($data as $item)
                            <tr>                          
                                <td>{{$ctr}}</td>
                                <td>{{$item->Bulan}}</td>
                                <td>{{$item->count_per_bulan}}</td>
                                <td>{{generateFormatRP($item->subperbulan)}}</td>
                            </tr>          
                            <?php $ctr = $ctr+1;?>    
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
        'responsive': true,
        'paging': true,
        'pageLength': 10,
        'destroy': false,
        'lengthChange': false,
        'searching': true,
        'ordering': true,
        'info': true,
        'autoWidth': true,
        'buttons': [
            'copy',
            'excel',
            'print'
        ]
    }
    const settingsdorder = GeneralSettingsTable('tabledorder', settingstable, true, 'container_button');
</script>
@endsection