@extends('__User.layout.errors')

@section('content')
    <!-- error-400 start-->
    <div class="error-wrapper">
        <div class="container">
            <img class="img-100" src="{{asset('assets/images/other-images/sad.png')}}" alt="">
            <div class="error-heading">
                <h2 class="headline font-primary" style="font-size:10em !important">400 Bad Requests</h2>
            </div>
            <div class="col-md-8 offset-md-2">
                <p class="sub-content">Check Your Request, Or Back To Homepage</p>
            </div>
            <div><a class="btn btn-primary btn-lg" href="{{url('/')}}">BACK TO HOME PAGE</a></div>
        </div>
    </div>
    <!-- error-400 end-->
@endsection
