@extends('layouts.simple.master')
@section('title', 'Tree View')

@section('css')
<link rel="stylesheet" type="text/css" href="{{route('/')}}/assets/css/tree.css">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Tree<span>View</span></h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Ui Elements</li>	
	<li class="breadcrumb-item active">Tree View</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12 col-xl-6">
         <div class="card">
            <div class="card-header">
               <h5>Basic Tree</h5>
            </div>
            <div class="card-body">
               <div id="basicTree">
                  <ul>
                     <li>
                        Admin
                        <ul>
                           <li data-jstree="{&quot;opened&quot;:true}">
                              Assets
                              <ul>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Css</li>
                                 <li data-jstree="{&quot;opened&quot;:true}">
                                    Plugins
                                    <ul>
                                       <li data-jstree="{&quot;selected&quot;:true,&quot;type&quot;:&quot;file&quot;}">Plugin one</li>
                                       <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Plugin two</li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li data-jstree="{&quot;opened&quot;:true}">
                              Email Template
                              <ul>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Email one</li>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Email two</li>
                              </ul>
                           </li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-view-dashboard&quot;}">Dashboard</li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-format-underlined&quot;}">Typography</li>
                           <li data-jstree="{&quot;opened&quot;:true}">
                              User Interface
                              <ul>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Buttons</li>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Cards</li>
                              </ul>
                           </li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-collection-text&quot;}">Forms</li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-view-list&quot;}">Tables</li>
                        </ul>
                     </li>
                     <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Frontend</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-xl-6">
         <div class="card">
            <div class="card-header">
               <h5>Checkbox Tree</h5>
            </div>
            <div class="card-body">
               <div id="checkTree">
                  <ul>
                     <li>
                        Admin
                        <ul>
                           <li data-jstree="{&quot;opened&quot;:true}">
                              Assets
                              <ul>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Css</li>
                                 <li data-jstree="{&quot;opened&quot;:true}">
                                    Plugins
                                    <ul>
                                       <li data-jstree="{&quot;selected&quot;:true,&quot;type&quot;:&quot;file&quot;}">Plugin one</li>
                                       <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Plugin two</li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li data-jstree="{&quot;opened&quot;:true}">
                              Email Template
                              <ul>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Email one</li>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Email two</li>
                              </ul>
                           </li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-view-dashboard&quot;}">Dashboard</li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-format-underlined&quot;}">Typography</li>
                           <li data-jstree="{&quot;opened&quot;:true}">
                              User Interface
                              <ul>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Buttons</li>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Cards</li>
                              </ul>
                           </li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-collection-text&quot;}">Forms</li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-view-list&quot;}">Tables</li>
                        </ul>
                     </li>
                     <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Frontend</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-xl-6">
         <div class="card">
            <div class="card-header">
               <h5>Drag Tree</h5>
            </div>
            <div class="card-body">
               <div id="dragTree">
                  <ul>
                     <li>
                        Admin
                        <ul>
                           <li data-jstree="{&quot;opened&quot;:true}">
                              Assets
                              <ul>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Css</li>
                                 <li data-jstree="{&quot;opened&quot;:true}">
                                    Plugins
                                    <ul>
                                       <li data-jstree="{&quot;selected&quot;:true,&quot;type&quot;:&quot;file&quot;}">Plugin one</li>
                                       <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Plugin two</li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li data-jstree="{&quot;opened&quot;:true}">
                              Email Template
                              <ul>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Email one</li>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Email two</li>
                              </ul>
                           </li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-view-dashboard&quot;}">Dashboard</li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-format-underlined&quot;}">Typography</li>
                           <li data-jstree="{&quot;opened&quot;:true}">
                              User Interface
                              <ul>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Buttons</li>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Cards</li>
                              </ul>
                           </li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-collection-text&quot;}">Forms</li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-view-list&quot;}">Tables</li>
                        </ul>
                     </li>
                     <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Frontend</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-xl-6">
         <div class="card">
            <div class="card-header">
               <h5>Contextmenu Tree</h5>
            </div>
            <div class="card-body">
               <div id="contextmenu">
                  <ul>
                     <li>
                        Admin
                        <ul>
                           <li data-jstree="{&quot;opened&quot;:true}">
                              Assets
                              <ul>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Css</li>
                                 <li data-jstree="{&quot;opened&quot;:true}">
                                    Plugins
                                    <ul>
                                       <li data-jstree="{&quot;selected&quot;:true,&quot;type&quot;:&quot;file&quot;}">Plugin one</li>
                                       <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Plugin two</li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li data-jstree="{&quot;opened&quot;:true}">
                              Email Template
                              <ul>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Email one</li>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Email two</li>
                              </ul>
                           </li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-view-dashboard&quot;}">Dashboard</li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-format-underlined&quot;}">Typography</li>
                           <li data-jstree="{&quot;opened&quot;:true}">
                              User Interface
                              <ul>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Buttons</li>
                                 <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Cards</li>
                              </ul>
                           </li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-collection-text&quot;}">Forms</li>
                           <li data-jstree="{&quot;icon&quot;:&quot;zmdi zmdi-view-list&quot;}">Tables</li>
                        </ul>
                     </li>
                     <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Frontend</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{route('/')}}/assets/js/tree/jstree.min.js"></script>
<script src="{{route('/')}}/assets/js/tree/tree.js"></script>
@endsection

