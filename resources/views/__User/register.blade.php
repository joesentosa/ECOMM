@extends('__User.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Input<span>groups</span></h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Forms</li>
    <li class="breadcrumb-item">Form Controls</li>	
	<li class="breadcrumb-item active">Input groups</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <h1>Login</h1>
               <div class="row">
                  <div class="col">
                     <form>
                        <div class="form-group m-form__group">
                           <label>Email</label>
                           <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text"><i class="icofont icofont-pencil-alt-5"></i></span></div>
                              <input class="form-control" type="text" placeholder="Email">
                           </div>
                        </div>
                        <div class="form-group m-form__group">
                           <label>Password</label>
                           <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text"><i class="icofont icofont-pencil-alt-5"></i></span></div>
                              <input class="form-control" type="password" placeholder="Password">
                           </div>
                        </div>
                        <div class="form-group m-form__group">
                           <label>Confirm Password</label>
                           <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text"><i class="icofont icofont-pencil-alt-5"></i></span></div>
                              <input class="form-control" type="password" placeholder="Confirm Password">
                           </div>
                        </div>
                     </form>
                  </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-light" type="submit">Cancel</button><br>
                <a href="/login">Have a account!!</a>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
@endsection