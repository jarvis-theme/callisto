<div id="slides">
    @foreach(horizontal_banner() as $banner)
    <a href="{{URL::to($banner->url)}}">
        <img src="{{banner_image_url($banner->gambar)}}" class="homebanner" alt="Info Promo" />
    </a>
    @endforeach
</div>
<!-- BEGIN .featured-items -->
<div class="featured-items">
    <div class="main-title">
        <p class="custom-font-1">Produk Kami</p>
        <a href="{{URL::to('produk')}}" class="view">Lihat produk yang lainnya</a>
    </div>

    <div class="items-wrapper">
        <div class="items">
            @foreach(home_product() as $key=>$myproduk)
            <div class="item-block-1">
                <div class="image-wrapper-3 homeproduct">
                    @if(is_outstok($myproduk))
                    <img src="{{Config::get('aws.cdn2.endpoint')}}/images/stok-badge.png" class="outstok-badge">
                    @elseif(is_terlaris($myproduk))
                    <img src="{{Config::get('aws.cdn2.endpoint')}}/images/terlaris-badge.png" class="best-badge">
                    @elseif(is_produkbaru($myproduk))
                    <img src="{{Config::get('aws.cdn2.endpoint')}}/images/new-badge.png" class="new-badge">
                    @endif
                    <div class="image">
                        <div class="image-overlay-1 trans-1">
                            <table>
                                <tr>
                                    <td>
                                        <a href="{{product_url($myproduk)}}" class="button-1 custom-font-1 trans-1"><span>Lihat</span></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <a href="{{product_url($myproduk)}}">
                            <img src="{{product_image_url($myproduk->gambar1,'medium')}}" width="214" />
                        </a>
                    </div>
                </div>
                <h3><a href="{{product_url($myproduk)}}" class="custom-font-1">{{$myproduk->nama}}</a></h3>
                <p><b class="custom-font-1">{{price($myproduk->hargaJual)}}</b></p>
            </div>
            @endforeach
        </div>
    </div>

    <div class="clear"></div>
</div>
<!-- END .featured-items -->
<br>