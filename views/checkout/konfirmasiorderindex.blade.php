<div class="single-full-width customer customer-order">
	<div class="main-title">
		<p class="custom-font-1"><a href="#" class="active">Konfirmasi Order</a></p>
		<a href="{{URL::previous()}}" class="continue">Kembali</a>
	</div>
	
	<div class="contact-form">
		<p>Silakan masukkan kode order yang mau anda cari!</p>
		{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
			<input style="float:left;" type="text" class="input-text-1" placeholder=" Kode Order" name='kodeorder'>
	  		<button type="submit" class="button-1 custom-font-1 trans-1"><span> Cari Kode</span></button>
		{{Form::close()}}
	</div>
</div>
	<!-- Checkout Page 
	<div class="main-content item-block-3">
		<div class="row standard">										
			<header class="span12 prime">
				<h3>Konfirmasi Order</h3>
			</header>
		</div>
		<div class="row standard">										
			<header class="span12 prime">
				<p>Silakan masukkan kode order yang mau anda cari!</p>
				{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
				<input style="float:left;" type="text" class="input-text-1" placeholder=" Kode Order" name='kodeorder'>
			  	<button type="submit" class="button-1 custom-font-1 trans-1"><span> Cari Kode</span></button>
				{{Form::close()}}
			</header>
		</div>				
	</div>
</div>-->

<div id="cart_dialog" class="content_dialog"><img style="margin:100px;" /></div>