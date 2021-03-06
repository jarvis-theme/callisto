<div>
	<div class="main-title">
		<p class="custom-font-1">Login Pelanggan</p>
	</div>

	<!-- BEGIN .single-full-width -->
	<div class="single-full-width customer">
		<div class="login">
			<form class="form-horizontal" action="{{URL::to('member/login')}}" method="post">
				<p>
					<label>Email:</label>
					<input type="text" name="email" class="input-text-1" required />
				</p>
				<p>
					<label>Password:</label>
					<input type="password" name="password" class="input-text-1" />
				</p>
				<p>
					<label></label>
					<a href="{{URL::to('member/forget-password')}}">Lupa password?</a>
				</p>
				<p class="sign-in">
					<label></label>
					<button type="submit" class="button-1 custom-font-1 trans-1"><span>Login</span></button>
					<b>atau <a href="{{URL::to('produk')}}">Kembali ke Toko</a></b>
				</p>
			</form>
		</div>
		
		<div class="guest-login">
			<div class="main-title">
				<p class="custom-font-1">Pelanggan Baru</p>
			</div>
			<p>Nikmati kemudahan dalam berbelanja saat anda terdaftar sebagai member.</p>
			<a href="{{URL::to('member/create')}}" class="button-1 custom-font-1 trans-1"><span>Daftar sebagai member</span></a>
		</div>

		<div class="clear"></div>
	</div>
	<!-- END .single-full-width -->

	<div class="clear"></div>
</div>