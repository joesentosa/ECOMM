@extends('layouts.simple.master')
@section('title', 'Chart Widget')

@section('css')

<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/chartist.css">
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/prism.css">
<!-- Plugins css Ends-->
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
  <h2>Chart<span>Widget </span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item active">Chart</li>
  <li class="breadcrumb-item">Chart Widget</li>
@endsection

@section('content')
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <!-- Chart widget top Start-->
    <div class="row">
      <div class="col-xl-4 col-md-12 box-col-12">
        <div class="card gradient-primary text-white">
          <div class="chart-widget-top">
            <div class="row card-body p-b-0">
              <div class="col-5">
                <h6 class="f-w-600">SALE</h6><span><span>90</span>%<i class="icon-angle-up f-12 ml-1"></i></span>
              </div>
              <div class="col-7 text-right">
                <h4 class="total-value">$ <span>3654</span>.00</h4>
              </div>
            </div>
            <div>
              <div id="chart-widget1"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-12 box-col-12">
        <div class="card gradient-secondary text-white">
          <div class="chart-widget-top">
            <div class="row card-body p-b-0">
              <div class="col-7">
                <h6 class="f-w-600">PROJECTS</h6><span><span>30</span>%<i class="icon-angle-up f-12 ml-1"></i></span>
              </div>
              <div class="col-5 text-right text-white">
                <h4 class="total-value">12569</h4>
              </div>
            </div>
            <div id="chart-widget2">
              <div class="flot-chart-placeholder" id="chart-widget-top-second"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-12 box-col-12">
        <div class="card gradient-info text-white">
          <div class="chart-widget-top">
            <div class="row card-body p-b-0">
              <div class="col-8">
                <h6 class="f-w-600">PRODUCTS</h6><span><span>68</span>%<i class="icon-angle-up f-12 ml-1"></i></span>
              </div>
              <div class="col-4 text-right">
                <h4 class="total-value"><span>93</span>M</h4>
              </div>
            </div>
            <div id="chart-widget3">
              <div class="flot-chart-placeholder" id="chart-widget-top-third"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Chart widget top Ends-->
    <!-- market widget start-->
    <div class="row">
      <div class="col-xl-12 col-lg-12 box-col-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-9">
                <h5>Market Trending Status</h5>
              </div>
              <div class="col-3 text-right"><i class="text-muted" data-feather="trending-up"></i></div>
            </div>
          </div>
          <div class="card-body p-0">
            <div id="chart"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- market widget Ends            -->
    <!-- market-value widget start              -->
    <div class="row">
      <div class="col-xl-4 col-lg-12 box-col-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-9">
                <h5>Serious Trends</h5>
              </div>
              <div class="col-3 text-right"><i class="text-muted" data-feather="shopping-bag"></i></div>
            </div>
          </div>
          <div class="card-body r-dount">
            <div id="chart1"> </div>
          </div>
        </div>
      </div>
      <div class="col-xl-5 col-lg-12 box-col-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-9">
                <h5>Results</h5>
              </div>
              <div class="col-3 text-right"><i class="text-muted" data-feather="shopping-bag"></i></div>
            </div>
          </div>
          <div class="card-body p-0">
            <div id="chart-year"> </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-12 box-col-12">
        <div class="row">
          <div class="col-sm-12">
            <div class="card o-hidden small-chart">
              <div id="small-chart1"></div>
              <div class="card-body px-0 p-t-0">
                <div class="p-l-25">
                  <h4>$23,567</h4><span class="p-b-10">Amount Processed</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card o-hidden small-chart">
              <div id="small-chart2"></div>
              <div class="card-body px-0 p-t-0">
                <div class="p-l-25">
                  <h4>$23,530</h4><span class="p-b-10">Amount Spent</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- market-value widget start-->
    <!-- status widget Start-->
    <div class="row">
      <div class="col-xl-7 col-md-12 box-col-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-9">
                <h5>Order Status</h5>
              </div>
              <div class="col-3 text-right"><i class="text-muted" data-feather="navigation"></i></div>
            </div>
          </div>
          <div class="card-body pt-0 px-0">
            <div id="line-adwords"></div>
          </div>
        </div>
      </div>
      <div class="col-xl-5 col-lg-12 box-col-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-9">
                <h5>Finance</h5>
              </div>
              <div class="col-3 text-right"><i class="text-muted" data-feather="shopping-bag"></i></div>
            </div>
          </div>
          <div class="card-body pt-0 r-radial">
            <div id="radialBarBottom"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- status widget Ends-->
  </div>
  <!-- Container-fluid Ends-->
@endsection

@section('script')
<!-- Plugins JS start-->
<script src="{{route('/')}}/assets/js/chart/chartist/chartist.js"></script>
<script src="{{route('/')}}/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
<script src="{{route('/')}}/assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="{{route('/')}}/assets/js/chart/apex-chart/stock-prices.js"></script>
<script src="{{route('/')}}/assets/js/prism/prism.min.js"></script>
<script src="{{route('/')}}/assets/js/clipboard/clipboard.min.js"></script>
<script src="{{route('/')}}/assets/js/counter/jquery.waypoints.min.js"></script>
<script src="{{route('/')}}/assets/js/counter/jquery.counterup.min.js"></script>
<script src="{{route('/')}}/assets/js/counter/counter-custom.js"></script>
<script src="{{route('/')}}/assets/js/custom-card/custom-card.js"></script>
<script src="{{route('/')}}/assets/js/chart-widget.js"></script>
<!-- Plugins JS Ends-->
@endsection

