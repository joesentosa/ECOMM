@extends('layouts.simple.master')
@section('title', 'Search Website')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photoswipe.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Search<span>Website</span></h2>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Pages</li>
	<li class="breadcrumb-item active">Search Website</li>
@endsection

@section('content')
<div class="container-fluid search-page">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <form class="search-form">
                  <div class="form-group m-0">
                     <label class="sr-only">Email</label>
                     <input class="form-control-plaintext" type="search" placeholder="Search..">
                  </div>
               </form>
            </div>
            <div class="card-body">
               <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" id="all-link" data-toggle="tab" href="#all-links" role="tab" aria-selected="true"><i class="icon-target"></i>All</a>
                     <div class="material-border"></div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="image-link" data-toggle="tab" href="#image-links" role="tab" aria-selected="false"><i class="icon-image"></i>Images</a>
                     <div class="material-border"></div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="video-link" data-toggle="tab" href="#video-links" role="tab" aria-selected="false"><i class="icon-video-clapper"></i>Videos</a>
                     <div class="material-border"></div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="map-link" data-toggle="tab" href="#map-links" role="tab" aria-selected="false"><i class="icon-map-alt"></i>Maps</a>
                     <div class="material-border"></div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="setting-link" data-toggle="tab" href="#setting-links" role="tab" aria-selected="false"><i class="icon-settings"></i>Settings</a>
                     <div class="material-border"></div>
                  </li>
               </ul>
               <div class="tab-content" id="top-tabContent">
                  <div class="search-links tab-pane fade show active" id="all-links" role="tabpanel" aria-labelledby="all-link">
                     <div class="row">
                        <div class="col-xl-6 box-col-12">
                           <p class="pb-4">About 6,000 results (0.60 seconds)</p>
                           <div class="info-block">
                              <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                              <a href="">Pocoeducation.info/</a>
                              <p>Poco introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in Surat.</p>
                              <div class="star-ratings">
                                 <ul class="search-info">
                                    <li>2.5 stars</li>
                                    <li>590 votes</li>
                                    <li>Music</li>
                                 </ul>
                              </div>
                           </div>
                           <div class="info-block">
                              <h6>Proin eleifend metus vel erat faucibus, ut bibendum nulla iaculis.</h6>
                              <a href="">Pocoeducation.info/</a>
                              <p>Poco introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in Surat.</p>
                              <div class="star-ratings">
                                 <ul class="search-info">
                                    <li>2.5 stars</li>
                                    <li>590 votes</li>
                                    <li>Music</li>
                                 </ul>
                              </div>
                           </div>
                           <div class="info-block">
                              <h6>Fusce rutrum elit aliquet nisi malesuada cursus.</h6>
                              <a href="">Pocoeducation.info/</a>
                              <p>Poco introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in Surat.</p>
                              <div class="star-ratings">
                                 <ul class="search-info">
                                    <li><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rate-blank"></i><i class="icofont icofont-ui-rate-blank"></i></li>
                                    <li>2.5 stars</li>
                                    <li>590 votes</li>
                                    <li>Music</li>
                                 </ul>
                              </div>
                           </div>
                           <div class="info-block">
                              <h6>Morbi feugiat mauris vel semper fringilla.</h6>
                              <a href="">Pocoeducation.info/</a>
                              <p>Poco introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in Surat.</p>
                              <div class="star-ratings">
                                 <ul class="search-info">
                                    <li><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rate-blank"></i><i class="icofont icofont-ui-rate-blank"></i></li>
                                    <li>2.5 stars</li>
                                    <li>590 votes</li>
                                    <li>Music</li>
                                 </ul>
                              </div>
                           </div>
                           <div class="info-block">
                              <h6>Morbi feugiat mauris vel semper fringilla.</h6>
                              <a href="">Pocoeducation.info/</a>
                              <p>Poco introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in Surat.</p>
                              <div class="star-ratings">
                                 <ul class="search-info">
                                    <li><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rating"></i><i class="icofont icofont-ui-rate-blank"></i><i class="icofont icofont-ui-rate-blank"></i></li>
                                    <li>2.5 stars</li>
                                    <li>590 votes</li>
                                    <li>Music</li>
                                 </ul>
                              </div>
                           </div>
                           <div class="info-block">
                              <nav aria-label="...">
                                 <ul class="pagination pagination-primary">
                                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                        <div class="col-xl-6 box-col-12">
                           <div class="card lg-mt mb-0">
                              <div class="blog-box blog-shadow">
                                 <img class="img-fluid" src="{{asset('assets/images/blog/blog.jpg')}}" alt="">
                                 <div class="blog-details">
                                    <p class="digits">25 July 2018</p>
                                    <h4>Accusamus et iusto odio dignissimos ducimus qui blanditiis.</h4>
                                    <ul class="blog-social digits">
                                       <li><i class="icofont icofont-user"></i>Mark Jecno</li>
                                       <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="image-links" role="tabpanel" aria-labelledby="image-link">
                     <div class="info-block m-t-30">
                        <p class="pb-4 col-sm-12 digits">About 12,120 results (0.50 seconds)</p>
                        <div class="my-gallery row gallery-with-description" id="aniimated-thumbnials" itemscope="">
                           <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                              <a href="{{asset('assets/images/big-lightgallry/01.jpg')}}" itemprop="contentUrl" data-size="1600x950">
                                 <img src="{{asset('assets/images/lightgallry/01.jpg')}}" itemprop="thumbnail" alt="Image description">
                                 <div class="caption">
                                    <h4>Portfolio Title</h4>
                                    <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                 </div>
                              </a>
                              <figcaption itemprop="caption description">
                                 <h4>Portfolio Title</h4>
                                 <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                           </figure>
                           <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                              <a href="{{asset('assets/images/big-lightgallry/02.jpg')}}" itemprop="contentUrl" data-size="1600x950">
                                 <img src="{{asset('assets/images/lightgallry/02.jpg')}}" itemprop="thumbnail" alt="Image description">
                                 <div class="caption">
                                    <h4>Portfolio Title</h4>
                                    <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                 </div>
                              </a>
                              <figcaption itemprop="caption description">
                                 <h4>Portfolio Title</h4>
                                 <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                           </figure>
                           <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                              <a href="{{asset('assets/images/big-lightgallry/03.jpg')}}" itemprop="contentUrl" data-size="1600x950">
                                 <img src="{{asset('assets/images/lightgallry/03.jpg')}}" itemprop="thumbnail" alt="Image description">
                                 <div class="caption">
                                    <h4>Portfolio Title</h4>
                                    <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                 </div>
                              </a>
                              <figcaption itemprop="caption description">
                                 <h4>Portfolio Title</h4>
                                 <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                           </figure>
                           <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                              <a href="{{asset('assets/images/big-lightgallry/04.jpg')}}" itemprop="contentUrl" data-size="1600x950">
                                 <img src="{{asset('assets/images/lightgallry/04.jpg')}}" itemprop="thumbnail" alt="Image description">
                                 <div class="caption">
                                    <h4>Portfolio Title</h4>
                                    <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                 </div>
                              </a>
                              <figcaption itemprop="caption description">
                                 <h4>Portfolio Title</h4>
                                 <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                           </figure>
                           <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                              <a href="{{asset('assets/images/big-lightgallry/05.jpg')}}" itemprop="contentUrl" data-size="1600x950">
                                 <img src="{{asset('assets/images/lightgallry/05.jpg')}}" itemprop="thumbnail" alt="Image description">
                                 <div class="caption">
                                    <h4>Portfolio Title</h4>
                                    <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                 </div>
                              </a>
                              <figcaption itemprop="caption description">
                                 <h4>Portfolio Title</h4>
                                 <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                           </figure>
                           <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                              <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
                                 <img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description">
                                 <div class="caption">
                                    <h4>Portfolio Title</h4>
                                    <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                 </div>
                              </a>
                              <figcaption itemprop="caption description">
                                 <h4>Portfolio Title</h4>
                                 <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                           </figure>
                           <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                              <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
                                 <img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description">
                                 <div class="caption">
                                    <h4>Portfolio Title</h4>
                                    <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                 </div>
                              </a>
                              <figcaption itemprop="caption description">
                                 <h4>Portfolio Title</h4>
                                 <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                           </figure>
                           <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
                              <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
                                 <img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description">
                                 <div class="caption">
                                    <h4>Portfolio Title</h4>
                                    <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                 </div>
                              </a>
                              <figcaption itemprop="caption description">
                                 <h4>Portfolio Title</h4>
                                 <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                           </figure>
                        </div>
                        <!-- Root element of PhotoSwipe. Must have class pswp.-->
                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                           <!--
                              Background of PhotoSwipe.
                              It's a separate element, as animating opacity is faster than rgba().
                              -->
                           <div class="pswp__bg"></div>
                           <!-- Slides wrapper with overflow:hidden.-->
                           <div class="pswp__scroll-wrap">
                              <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
                              <!-- don't modify these 3 pswp__item elements, data is added later on.-->
                              <div class="pswp__container">
                                 <div class="pswp__item"></div>
                                 <div class="pswp__item"></div>
                                 <div class="pswp__item"></div>
                              </div>
                              <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
                              <div class="pswp__ui pswp__ui--hidden">
                                 <div class="pswp__top-bar">
                                    <!-- Controls are self-explanatory. Order can be changed.-->
                                    <div class="pswp__counter"></div>
                                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                    <button class="pswp__button pswp__button--share" title="Share"></button>
                                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
                                    <!-- element will get class pswp__preloader--active when preloader is running-->
                                    <div class="pswp__preloader">
                                       <div class="pswp__preloader__icn">
                                          <div class="pswp__preloader__cut">
                                             <div class="pswp__preloader__donut"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                    <div class="pswp__share-tooltip"></div>
                                 </div>
                                 <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                                 <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                                 <div class="pswp__caption">
                                    <div class="pswp__caption__center"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="info-block m-t-30">
                        <nav aria-label="...">
                           <ul class="pagination pagination-primary">
                              <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="video-links" role="tabpanel" aria-labelledby="video-link">
                     <div class="row">
                        <div class="col-xl-6">
                           <p class="pb-4">About 6,000 results (0.60 seconds)</p>
                           <div class="media info-block">
                              <iframe class="mr-3 mb-3" width="200" height="100" src="https://www.youtube.com/embed/CJnfAXlBRTE"></iframe>
                              <div class="media-body">
                                 <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                 <a href="">Pocoeducation.info/</a>
                                 <p>Poco introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in Surat.</p>
                                 <div class="star-ratings">
                                    <ul class="search-info">
                                       <li>2.5 stars</li>
                                       <li>590 votes</li>
                                       <li>Music</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="media info-block">
                              <iframe class="mr-3 mb-3" width="200" height="100" src="https://www.youtube.com/embed/-L4gEk7cOfk"></iframe>
                              <div class="media-body">
                                 <h6>Morbi eget quam et purus commodo dapibus.</h6>
                                 <a href="">Pocoeducation.info/</a>
                                 <p>Poco introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in Surat.</p>
                                 <div class="star-ratings">
                                    <ul class="search-info">
                                       <li>2.5 stars</li>
                                       <li>590 votes</li>
                                       <li>Music</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="media info-block">
                              <iframe class="mr-3 mb-3" width="200" height="100" src="https://www.youtube.com/embed/FZzWGr3ruVw"></iframe>
                              <div class="media-body">
                                 <h6>Etiam eget ligula at ante eleifend rutrum.</h6>
                                 <a href="">Pocoeducation.info/</a>
                                 <p>Poco introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in Surat.</p>
                                 <div class="star-ratings">
                                    <ul class="search-info">
                                       <li>2.5 stars</li>
                                       <li>590 votes</li>
                                       <li>Music</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="media info-block">
                              <iframe class="mr-3 mb-3" width="200" height="100" src="https://www.youtube.com/embed/wpmHZspl4EM"></iframe>
                              <div class="media-body">
                                 <h6>Lorem Ipsum is simply dummy text of the printing.</h6>
                                 <a href="">Pocoeducation.info/</a>
                                 <p>Poco introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in Surat.</p>
                                 <div class="star-ratings">
                                    <ul class="search-info">
                                       <li>2.5 stars</li>
                                       <li>590 votes</li>
                                       <li>Music</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="info-block">
                              <nav aria-label="...">
                                 <ul class="pagination pagination-primary">
                                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div>
                              <div class="embed-responsive embed-responsive-21by9 lg-mt">
                                 <iframe width="560" height="315" src="https://www.youtube.com/embed/wpmHZspl4EM" allowfullscreen=""></iframe>
                              </div>
                              <div class="embed-responsive embed-responsive-21by9">
                                 <iframe width="560" height="315" src="https://www.youtube.com/embed/I0-vBdh4sZ8" allowfullscreen=""></iframe>
                              </div>
                           </div>
                        </div>
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
<script src="{{asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
<script src="{{asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
<script src="{{asset('assets/js/photoswipe/photoswipe.js')}}"></script>
@endsection
