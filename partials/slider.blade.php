<!-- BEGIN .homepage-slider -->
<div class="homepage-slider">
	<!-- BEGIN  #hompage-slider_content -->
	<div id="hompage-slider_content" style="height: 410px;">
		@foreach(slideshow() as $slides)
		<div class="item">
			<!-- <div class="title">
				<h3 class="custom-font-1">New 2012 summer apparel collection</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae nibh risus.Morbi dapibus lectus at erat viverra malesuada. <a href="#">Read more</a></p>
			</div> -->
			<!-- <div class="title">
				<h4 class="custom-font-1">Brand new hats &amp; nitwear</h4>
				<h5 class="custom-font-1">starting from just</h5>
				<h6 class="custom-font-1">$120</h6>
				<a href="#" class="read-more">Read more</a>
			</div> -->
			<a href="#"><img src="{{slide_image_url($slides->gambar)}}" width="944" /></a>
		</div>
		@endforeach
	</div>
	<!-- END #hompage-slider_content -->
	
	<div class="navigation custom-font-1">
		<table>
			<tr>
				<td>
					<a href="#" class="previous">Previous</a>
					<span id="pager">
						<a href="#" class="bullet"></a>
						<a href="#" class="bullet"></a>
						<a href="#" class="bullet"></a>
					</span>
					<a href="#" class="next">Next</a>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- END .homepage-slider --> 