<!-- BEGIN .main-footer-wrapper -->
<div class="main-footer-wrapper">
	<a href="#" class="back-to-the-top">Kembali ke atas</a>
	<div class="main-footer">
		@foreach(all_menu() as $key=>$group)
			@if($key==0 || $key>2)

			@else
			<div class="newsletter">
				<div class="main-title">
					<p class="custom-font-1">{{$group->nama}}</p>
				</div>

				<ul>
				@foreach($group->link as $key=>$link)
					@if($group->id==$link->tautanId)
					<li>
						<a href="{{menu_url($link)}}">{{$link->nama}}</a>
					</li>
					@endif
				@endforeach
				</ul>
			</div>
			@endif	
		@endforeach

		<div class="menu">
			<div class="main-title">
				<p class="custom-font-1">Sosial Network</p>
			</div>

			<p class="social">
				@if($kontak->fb)
				<a target="_blank" href="{{$kontak->fb}}" title="Facebook">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x" id="fb"></i>
						<i class="fa fa-facebook-f fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				@endif
				@if($kontak->tw)
				<a target="_blank" href="{{$kontak->tw}}" title="Twitter">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x" id="tw"></i>
						<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				@endif
				@if(!empty($kontak->gp))
				<a target="_blank" href="{{url($kontak->gp)}}" title="Google+">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x" id="gp"></i>
						<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				@endif
				@if(!empty($kontak->pt))
				<a target="_blank" href="{{url($kontak->pt)}}" title="Pinterest">
					<span class="fa-stack fa-lg">
						<i class="fa fa-pinterest fa-2x" id="pt"></i>
					</span>
				</a>
				@endif
				@if(!empty($kontak->tl))
				<a target="_blank" href="{{url($kontak->tl)}}" title="Tumblr">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x" id="tl"></i>
						<i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				@endif
				@if(!empty($kontak->ig))
				<a target="_blank" href="{{url($kontak->ig)}}" title="Instagram">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x" id="ig-circle"></i>
						<i class="fa fa-instagram fa-stack-1x fa-inverse" id="ig"></i>
					</span>
				</a>
				@endif
				@if(!empty($kontak->picmix))
				<a target="_blank" href="{{url($kontak->picmix)}}" title="Picmix">
					<img class="picmix" src="//d3kamn3rg2loz7.cloudfront.net/blogs/event/icon-picmix.png">
				</a>
				@endif
			</p>
		</div>

		<div class="contacts">
			<div class="main-title">
				<p class="custom-font-1">Hubungi Kami</p>
			</div>

			@if($kontak->alamat!='')
				<p><b>Alamat:</b> <br>{{$kontak->alamat}}</p><br>
				<p><b>Telepon:</b> <br>{{$kontak->telepon}}</p><br>
				@if(!empty($kontak->bb))
				<p><b>PIN BB: </b> <br>{{$kontak->bb}}</p><br>
				@endif
				<b>Email:</b> <br><a class="white" href="mailto:{{$kontak->email}}">{{$kontak->email}}</a>
			@else
				<p></p>
			@endif
		</div>

		<div class="copyright">
			@foreach(list_banks() as $value)
				@if($value->status == 1)
				<a><img src="{{bank_logo($value)}}" alt="{{$value->bankdefault->nama}}" title="{{$value->bankdefault->nama}}" /></a>
				@endif
			@endforeach
			@foreach(list_payments() as $pay)
				@if($pay->nama == 'paypal' && $pay->aktif == 1)
				<a><img src="{{url('img/bank/paypal.png')}}" alt="Paypal" title="Paypal" /></a>
				@endif
				@if($pay->nama == 'ipaymu' && $pay->aktif == 1)
				<a><img src="{{ URL::to('img/bank/ipaymu.jpg') }}" alt="ipaymu" title="Ipaymu"></a>
				@endif
				@if($pay->nama == 'bitcoin' && $pay->aktif == 1)
				<a><img src="{{url('img/bitcoin.png')}}" alt="Bitcoin" title="Bitcoin" /></a>
				@endif
			@endforeach
			@if(count(list_dokus()) > 0 && list_dokus()->status == 1)
			<a><img src="{{ URL::to('img/bank/doku.jpg') }}" alt="doku" title="Doku"></a>
			@endif
			@if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
			<a><img class="midtrans" src="{{url('img/bank/midtrans.png')}}" alt="Midtrans" title="Midtrans"></a>
			@endif
		</div>

		<div class="copyright">
			<table>
				<tr>
					<td>
						<span>Copyright &copy; {{date('Y')}} {{ Theme::place('title') }}. Powered by <a target="_blank"  href="//jarvis-store.com">Jarvis Store</a></span>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<!-- END .main-footer-wrapper -->

{{pluginPowerup()}} 