<!-- BEGIN .main-footer-wrapper -->
<div class="main-footer-wrapper">
	<a href="#" class="back-to-the-top">Kembali ke atas</a>
	<div class="main-footer">
		@foreach($tautan as $key=>$group)
            @if($key==0 || $key>2)

            @else
            <div class="newsletter">
	            <div class="main-title">
					<p class="custom-font-1">{{$group->nama}}</p>
				</div>

				<ul>
				@foreach($quickLink as $key=>$link)
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
			</p>
		</div>

		<div class="contacts">
			<div class="main-title">
				<p class="custom-font-1" style="font-size: 24px;">Hubungi Kami</p>
			</div>

			@if($kontak->alamat!='')
				<p><b>Alamat:</b> <br>{{$kontak->alamat}}</p><br>
				<p><b>Telpon:</b> <br>{{$kontak->telepon}}</p><br>
				@if(!empty($kontak->bb))
                <p><b>PIN BB: </b> <br>{{$kontak->bb}}</p><br>
                @endif
				<b>Email:</b> <br><a style="color:white" href="mailto:{{$kontak->email}}">{{$kontak->email}}</a>
			@else
				<p></p>
			@endif
		</div>

		<div class="copyright">
		@if(!empty($bank))
			@foreach(list_banks() as $value)
				<a><img src="{{bank_logo($value)}}" /></a>
            @endforeach
            @foreach(list_payments() as $pay)
                @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
				<a><img src="{{ URL::to('img/bank/ipaymu.jpg') }}" alt="ipaymu"></a>
                @endif
            @endforeach
            @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
			<img src="{{ URL::to('img/bank/doku.jpg') }}" alt="doku">
            @endif
		@endif
		</div>

		<div class="copyright">
			<table>
				<tr>
					<td>
						<span>Copyright &copy; {{date('Y')}} {{ Theme::place('title') }}. Powered by <a target="_blank"  href="http://jarvis-store.com">Jarvis Store</a></span>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<!-- END .main-footer-wrapper -->
{{pluginPowerup()}}