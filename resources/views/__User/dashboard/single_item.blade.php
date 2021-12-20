{{--<!-- Start Product Single Item - Style 1 -->--}}
{{--<div class="product-single-item-style-1 swiper-slide">--}}
{{--    <a href="product-details-default.html"--}}
{{--       class="image img-responsive">--}}
{{--        <img class="img-fluid"--}}
{{--             src="assets/images/products/default/product-default-style-1-img-1.webp"--}}
{{--             width="435" height="350" loading="lazy"--}}
{{--             alt="product-image">--}}
{{--        <ul class="tooltip-tag-items">--}}
{{--            <li class="color-green">15%</li>--}}
{{--        </ul>--}}
{{--    </a>--}}
{{--    <div class="content">--}}
{{--        <div class="top">--}}
{{--            <span class="catagory">{{ $barang->kategory->nama_kategori }}</span>--}}
{{--            <h4 class="title">--}}
{{--                <a href="product-details-default.html">--}}
{{--                    {{ $barang->namaBarang }}--}}
{{--                </a>--}}
{{--            </h4>--}}
{{--            <span class="price">$355.00 <del>$400.00</del></span>--}}
{{--        </div>--}}
{{--        <div class="bottom">--}}
{{--            <ul class="review-star">--}}
{{--                <li class="fill"><span class="material-icons">star</span>--}}
{{--                </li>--}}
{{--                <li class="fill"><span class="material-icons">star</span>--}}
{{--                </li>--}}
{{--                <li class="fill"><span class="material-icons">star</span>--}}
{{--                </li>--}}
{{--                <li class="fill"><span class="material-icons">star</span>--}}
{{--                </li>--}}
{{--                <li class="fill"><span class="material-icons">star_half</span>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <div class="product-event-items">--}}
{{--                <a href="cart.html" class="btn cart-btn">Add to--}}
{{--                    cart</a>--}}
{{--                <a href="wishlist.html"--}}
{{--                   class="btn wishlist-btn"><span--}}
{{--                        class="material-icons">favorite_border</span></a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--</div>--}}
{{--<!-- End Product Single Item - Style 1 -->--}}

<!-- Start Product Single Item - Style 1 -->
<div class="product-single-item-style-1 swiper-slide">
    <a href="{{ url('detailBarang/'. $barang->id_barang) }}" class="image img-responsive">
        <img class="img-fluid"
             src="
             @if($barang->gambar->first())
             {{ asset($barang->gambar->first()->gambar) }}
             @endif
                 " width="435" height="350" loading="lazy" alt="product-image">
        {{--                                                <ul class="tooltip-tag-items">--}}
        {{--                                                    <li class="color-yellow">15%</li>--}}
        {{--                                                </ul>--}}
    </a>
    <div class="content">
        <div class="top">
            <span class="catagory">{{ $barang->kategori->namaKategori }}</span>
            <h4 class="title">
                <a href="{{ url('detailBarang/'. $barang->id_barang) }}">
                    {{ $barang->namaBarang }}
                </a>
            </h4>
            <span class="price">
                @if(isset($barang->promos[0]))
                    {{generateFormatRP($barang->harga - $barang->promos[0]->potonganHarga)}}
                <del>
                    @php
                        $div = pow(10, strlen((string)$barang->harga) - 1);
                        generateFormatRP(ceil($barang->harga / $div) * $div);
                    @endphp
                    {{generateFormatRP($barang->harga)}}
                </del>
                @else
                    {{generateFormatRP($barang->harga)}}
                @endif
            </span>
        </div>
        <div class="bottom">
            <ul class="review-star">
                @for ($i = 0; $i < floor($barang->rating); $i++)
                    <li class="fill"><span class="material-icons">star</span></li>
                @endfor
                @if ($barang->rating * 10 % 10 != 0)
                    <li class="fill"><span class="material-icons">star_half</span></li>
                @endif
            </ul>
            <div class="product-event-items">
                <form action="{{url('addingToCart')}}" method="post"> @csrf
                    <input type="hidden" name="id" value="{{$barang->id_barang}}">
                    <button class="btn cart-btn">Add to cart</button>
                </form>
                <form action="/wishlist" method="get">
                    @csrf
                    <input type="hidden" name="barangId" value="{{ $barang->id_barang }}">
                    <button class="btn wishlist-btn"><span class="material-icons">favorite_border</span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Product Single Item - Style 1 -->
