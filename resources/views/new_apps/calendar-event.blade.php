@extends('layouts.simple.master')
@section('title', 'Calendar Events')

@section('css')
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/calendar.css">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Calendar<span>Events</span></h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item">User</li>
	<li class="breadcrumb-item active">Calendar Events</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="calendar-wrap">
      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-header">
                  <h5>Background Event</h5>
                  <span>Events that appear as background highlights can be achieved by an Event Object's property to "background".</span>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12">
                        <div id="cal-bg-events"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <h5>Event Colors</h5>
                  <span>You can change the color of all events on the calendar using the eventColor option.</span>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12">
                        <div id="cal-event-colors"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{route('/')}}/assets/js/jquery.ui.min.js"></script>
<script src="{{route('/')}}/assets/js/calendar/moment.min.js"></script>
<script src="{{route('/')}}/assets/js/calendar/fullcalendar.min.js"></script>
<script src="{{route('/')}}/assets/js/calendar/fullcalendar-custom.js"></script>
@endsection