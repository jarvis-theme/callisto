<!-- BEGIN .catalog -->
    <!-- BEGIN .message-welcome -->
    <!-- <div class="message-welcome" style="text-align: center; padding: 23px 0px 30px 0; background:none"> -->
        <div class="homepage-slider">
            <div id="hompage-slider_content" id="slides">
                @foreach(horizontal_banner() as $banner)
                <a href="{{URL::to($banner->url)}}">
                    <img src="{{banner_image_url($banner->gambar)}}" alt="Info Promo" class="homebanner" />
                </a>
                @endforeach
            </div>
        </div>
        <!-- END .message-welcome -->

        <div class="featured-items">
            <div class="main-title">
                <p class="custom-font-1">Produk Kami</p>
            </div>

            <div class="items-wrapper">
                <div class="items">
                    @foreach(home_product() as $myproduk)
                    <div class="item-block-1">
                        @if($myproduk->koleksiId!=0)
                        <div class="item-tag tag-off custom-font-1">
                            <span>{{$myproduk->koleksi->nama}}</span>
                        </div>
                        @endif
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
                                    <img src="{{product_image_url($myproduk->gambar1,'large')}}" alt="{{$myproduk->nama}}" width="294" />
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
            
            <div class="pages custom-font-1">
                {{home_product()->links()}}
            </div>

            <div class="clear"></div>
            <!-- END .catalog -->
        </div>
        <br><br>

        <!-- BEGIN .homepage-about -->
        <div class="homepage-best-sellers" id="callus">
            <div class="main-title">
                <p class="custom-font-1">Hubungi Kami</p>
            </div>
            <div class="text">
                <div class="title-legend">
                    @if(!empty($shop->ym))
                    {{ymyahoo($shop->ym)}}
                    <br>
                    @endif
                    @if($shop->telepon)
                    <br>
                    <a href="#" class="comments" title="Telepon">{{$shop->telepon}}</a>
                    @endif
                    
                    @if($shop->hp)
                    <br>
                    <a href="#" class="comments" title="SMS">{{$shop->hp}}</a>
                    @endif
                    
                    @if($shop->bb)
                    <br>
                    <!-- <img src="{{URL::to('img/bbm.png')}}" style="width: 30px;"> -->
                    <a href="#" class="comments" title="Pin BB">{{$shop->bb}}</a>
                    <br><br>
                    @endif
                </div>
            </div>
        </div>
        <!-- END .homepage-about -->

        <!-- BEGIN .homepage-latest-news -->
        <div class="list-testimo">
            <div class="main-title">
                <p class="custom-font-1">Testimonial</p>
                <a href="{{URL::to('testimoni')}}" class="view">Lihat semua</a>
            </div>

            <div class="items">
                @foreach(list_testimonial() as $items)
                <div class="item">
                    <div class="text">
                        <h5><a href="#" class="custom-font-1">"{{$items->isi}}"</a></h5>
                        <p><a href="#">~ {{$items->nama}}</a></p>
                    </div>
                </div>
                <br>
                @endforeach
            </div>
        </div>
        <!-- END .homepage-latest-news -->

        <!-- BEGIN .homepage-best-sellers -->
        <div class="homepage-about">
            <div class="main-title">
                <p class="custom-font-1">Promo</p>
            </div>

            <div class="items">
                @foreach(vertical_banner() as $banner)
                <a target="_blank" href="{{URL::to($banner->url)}}">
                    <img src="{{banner_image_url($banner->gambar)}}" alt="Promo {{Theme::place('title')}}" />
                </a>
                @endforeach
            </div>
            <div class="clear"></div>
        </div>
        <!-- END .homepage-best-sellers -->
        <div class="clear"></div>

        <div class="powerup">
            <div class="cekresi">
                {{pluginSidePowerup()}}
            </div>
            <br>
        </div>
        <div class="clear"></div>