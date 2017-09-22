<!-- BEGIN .main-item-wrapper -->
<div class="main-item-wrapper">
	<div class="main-title">
		<p class="breadcrumbpro">
			{{breadcrumbProduk($produk,'; <span>/</span>',';',true)}}
		</p>
		<!-- <a onclick="window.open(this.href, 'mywin', 'left=20, top=20, width=500, height=500, toolbar=1, resizable=0'); return false;" href="https://www.facebook.com/sharer/sharer.php?u={{product_url($produk)}}" class="share">share this item</a> -->
		<!-- <a href="http://twitter.com/home/?status=Twitter is like the lunch meeting with potential clients before you do the pitch. via @blogtyrant">tweet this </a> -->
		<div class="sosmed">
			{{sosialShare(product_url($produk))}}
		</div>
	</div>

	<div class="main-image">
		<div class="image-wrapper-3">
			<div id="single-product-slider">
				@if($produk->gambar1!='')
				<div class="image">
					<a href="{{product_image_url($produk->gambar1,'large')}}" class="fancybox" title="{{$produk->nama}}">
						<img src="{{product_image_url($produk->gambar1,'large')}}" width="470" alt="{{$produk->nama}}" />
					</a>
				</div>
				@endif
				@if($produk->gambar2!='')
				<div class="image">
					<a href="{{product_image_url($produk->gambar1,'large')}}" class="fancybox" title="{{$produk->nama}}">
						<img src="{{product_image_url($produk->gambar2,'large')}}" width="470" alt="{{$produk->nama}}" />
					</a>
				</div>
				@endif
				@if($produk->gambar3!='')
				<div class="image">
					<a href="{{product_image_url($produk->gambar1,'large')}}" class="fancybox" title="{{$produk->nama}}">
						<img src="{{product_image_url($produk->gambar3,'large')}}" width="470" alt="{{$produk->nama}}" />
					</a>
				</div>
				@endif
				@if($produk->gambar4!='')
				<div class="image">
					<a href="{{product_image_url($produk->gambar1,'large')}}" class="fancybox" title="{{$produk->nama}}">
						<img src="{{product_image_url($produk->gambar4,'large')}}" width="470" alt="{{$produk->nama}}" />
					</a>
				</div>
				@endif
			</div>
		</div>
		<div class="clear"></div>
		<table>
			<tr>
				@if($produk->gambar1!='')
				<td>
					<div class="image-wrapper-4 active">
						<div class="image">
							<a href="#">
								<img src="{{product_image_url($produk->gambar1,'thumb')}}" width="60" alt="{{$produk->nama}}" />
							</a>
						</div>
					</div>
				</td>
				@endif
				@if($produk->gambar2!='')
				<td>
					<div class="image-wrapper-4 active">
						<div class="image">
							<a href="#">
								<img src="{{product_image_url($produk->gambar2,'thumb')}}" width="60" alt="{{$produk->nama}}" />
							</a>
						</div>
					</div>
				</td>
				@endif
				@if($produk->gambar3!='')
				<td>
					<div class="image-wrapper-4 active">
						<div class="image">
							<a href="#">
								<img src="{{product_image_url($produk->gambar3,'thumb')}}" width="60" alt="{{$produk->nama}}" />
							</a>
						</div>
					</div>
				</td>
				@endif
				@if($produk->gambar4!='')
				<td>
					<div class="image-wrapper-4 active">
						<div class="image">
							<a href="#">
								<img src="{{product_image_url($produk->gambar4,'thumb')}}" width="60" alt="{{$produk->nama}}" />
							</a>
						</div>
					</div>
				</td>
				@endif
			</tr>
		</table>
	</div>

	<div class="text">
		<h2 class="custom-font-1"><a href="#">{{$produk->nama}}</a></h2>
		<div class="price custom-font-1" >
			<div class="pricepro">
				<p>{{ price($produk->hargaJual) }}</p>
				@if($produk->hargaCoret != 0)
				<p><s>{{ price($produk->hargaCoret) }}</s></p>
				@endif
			</div>
			
			<div class="clear"></div>
		</div>

		<div class="options">
			<form action="#" id="addorder">
				<div class="item">
					<label>Jumlah :</label>
					<div class="select">
						<input type="text" class="input-text-1" name="qty" value="1" min="1" pattern="[0-9]">
					</div>
					<div class="clear"></div><br>
				</div>
				@if($opsiproduk->count()>0)
					<div class="item">
						<label>Pilih Opsi:</label>
						<div class="select">
							<select name="opsiproduk">
								<option value="">-- Pilih Opsi --</option>
								@foreach ($opsiproduk as $key => $opsi)
								<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
									{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}
								</option>
								@endforeach
							</select>
						</div>
						<div class="clear"></div><br>
					</div>
				@endif
				<div class="item">
					<button class="button-3 custom-font-1 trans-1 add_cart"><span>Masukan ke Keranjang</span></button>
				</div>
			</form>
		</div>
		
		<div class="description">
			<div class="button-navigation custom-font-1">
				<table class="desc">
					<tr>
						<td>
							<a href="#" class="active"><span>Deskripsi</span></a>
							<a href="#"><span>Review</span></a>
						</td>
					</tr>
				</table>
			</div>
			<div class="items">
				<div id="description_slider">
					<div class="item justify">
						<p>{{$produk->deskripsi}}</p>
					</div>
					<div class="item trust">
						{{ pluginComment(product_url($produk), @$produk) }}
					</div> 
				</div>
			</div>
		</div>
	</div>

	<div class="clear"></div>
</div>
<!-- END .main-item-wrapper -->
@if(count(other_product($produk)) > 0)
<!-- BEGIN .related-items -->
<div class="featured-items related-items">
	<div class="main-title">
		<p class="custom-font-1">Related items</p>
	</div>

	<div class="items-wrapper">
		<div class="items">
		@if(count(other_product($produk)) > 0)
			@foreach(other_product($produk) as $myproduk)
			<div class="item-block-1" >
				<!-- <div class="item-tag tag-off custom-font-1">
					<span>Sale</span>
				</div> -->
				
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
						<a href="#"><img src="{{product_image_url($myproduk->gambar1,'medium')}}" alt="{{$myproduk->nama}}" width="214" /></a>
					</div>
				</div>
				<h3><a href="{{product_url($myproduk)}}" class="custom-font-1">{{short_description($myproduk->nama, 25)}}</a></h3>
				<p><b class="custom-font-1">{{price($myproduk->hargaJual)}}</b></p>
			</div>
			@endforeach	
		@endif
		</div>
	</div>

	<div class="clear"></div>
	<br><br><br>
</div>
<!-- END .related-items -->
@endif
<div class="clear"></div>
<div class="powerup">
	<div class="cekresi">
		{{pluginSidePowerup()}}
	</div>
	<br>
</div>
<div class="clear"></div>
<br><br><br>