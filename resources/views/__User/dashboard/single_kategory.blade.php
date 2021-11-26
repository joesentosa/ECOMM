<!-- Start Tab Content Single Item -->
<div class="tab-pane tab-animate" id="kat-{{$kategory->id_kategori}}" role="tabpanel">
    <div class="row">
        <div class="col-12">
            <div class="center-slider-nav product-slider-3grids-2rows">
                <!-- Slider main container -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach($kategory->barang as $barang)
                            @include('__User.dashboard.single_item')
                        @endforeach
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="center-slider-nav-buttons slider-buttons">
                    <div class="slider-button button-prev"><span class="material-icons">arrow_left</span>
                    </div>
                    <div class="slider-button button-next"><span class="material-icons">arrow_right</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Tab Content Single Item -->
