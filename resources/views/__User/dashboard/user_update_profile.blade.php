@extends('__User.layout.master')
@section('title', 'Edit Profile')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Edit<span>Profile</span></h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item">User</li>
	<li class="breadcrumb-item active">Edit Profile</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="edit-profile">
      <div class="row">
         <div class="col-lg-8">
            <form class="card theme-form" action="{{url('user/profile/doUpdate')}}" method="post">
                @csrf
               <div class="card-header">
                  <h4 class="card-title mb-0">Edit Profile</h4>
                  <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-toggle="card-remove"><i class="fe fe-x"></i></a></div>
               </div>
               <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                           <label class="form-label">First Name</label>
                           <input class="form-control" type="text" value="{{$customer->firstname}}" placeholder="{{$customer->firstname}}" name="firstname">
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                           <label class="form-label">Last Name</label>
                           <input class="form-control" type="text" value="{{$customer->lastname}}" placeholder="{{$customer->lastname}}" name="lastname">
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="form-group">
                           <label class="form-label">Username</label>
                           <input class="form-control" type="text" value="{{$customer->username}}" placeholder="{{$customer->username}}" name="username">
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="form-group">
                           <label class="form-label">Email address</label>
                           <input class="form-control" type="email" value="{{$customer->email}}" placeholder="{{$customer->email}}" name="email">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label class="form-label">Address</label>
                           <input class="form-control" type="text" value="{{$customer->address}}" placeholder="{{$customer->address}}" name="address">
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                           <label class="form-label">City</label>
                           <input class="form-control" type="text" value="{{$customer->kota}}" placeholder="{{$customer->kota}}" name="kota">
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                           <label class="form-label">Zip Code</label>
                           <input class="form-control" type="number" value="{{$customer->kodeZip}}" placeholder="{{$customer->kodeZip}}" name="kodeZip">
                        </div>
                     </div>
                     <div class="col-md-12 text-right">
                         <input type="submit" class="btn btn-primary btn-pill" value="Update Profile">
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title mb-0">Add projects And Upload</h5>
                  <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-toggle="card-remove"><i class="fe fe-x"></i></a></div>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                           <tr>
                              <th>Project Name</th>
                              <th>Date</th>
                              <th>Status</th>
                              <th>Price</th>
                              <th></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><a class="text-inherit" href="#">Untrammelled prevents </a></td>
                              <td>28 May 2018</td>
                              <td><span class="status-icon bg-success"></span> Completed</td>
                              <td>$56,908</td>
                              <td class="text-right"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                           </tr>
                           <tr>
                              <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                              <td>12 June 2018</td>
                              <td><span class="status-icon bg-danger"></span> On going</td>
                              <td>$45,087</td>
                              <td class="text-right"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                           </tr>
                           <tr>
                              <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                              <td>12 July 2018</td>
                              <td><span class="status-icon bg-warning"></span> Pending</td>
                              <td>$60,123</td>
                              <td class="text-right"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                           </tr>
                           <tr>
                              <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                              <td>14 June 2018</td>
                              <td><span class="status-icon bg-warning"></span> Pending</td>
                              <td>$70,435</td>
                              <td class="text-right"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                           </tr>
                           <tr>
                              <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                              <td>25 June 2018</td>
                              <td><span class="status-icon bg-success"></span> Completed</td>
                              <td>$15,987</td>
                              <td class="text-right"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm btn-pill" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
@endsection
