@extends('__User.layout.errors')

@section('content')
    <!-- error-401 start-->
    <div class="error-wrapper">
        <div class="container">
            <img class="img-100" src="{{asset('assets/images/other-images/sad.png')}}" alt="">
            <div class="error-heading">
                <h2 class="headline font-warning" style="font-size:7em !important">401 Unauthorized</h2>
            </div>
            <div class="col-md-8 offset-md-2">
                <p class="sub-content">If the problem persists, please contact support. In the meantime, if you wish,
                    you can return to the home page</p>
            </div>
            <div><a class="btn btn-warning btn-lg" href="{{url('/')}}">BACK TO HOME PAGE</a></div>
        </div>
    </div>
    <!-- error-401 end-->
@endsection
