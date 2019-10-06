@extends('layouts.shop')
@section('content')
<div class="col-md-12">
<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">
		<div class="row">
			<nav class="woocommerce-breadcrumb"><a href="{{route('home')}}">Trang chủ</a>
				<span class="delimiter">
					<i class="tm tm-breadcrumbs-arrow-right"></i>
				</span>Tài khoản
			</nav>
			


		</div><!-- .col-full -->

	</div><!-- .row -->
	@if(Session::has('error'))
		<div class="alert alert-danger text-center">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('error')}}</strong>
		</div>
	@endif
	@if(Session::has('success'))
		<div class="alert alert-success text-center">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('success')}}</strong>
		</div>
	@endif
	@if(Session::has('resetSuccess'))
		<div class="alert alert-success text-center">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('resetSuccess')}}</strong>
		</div>
	@else
	<div class="jumbotron">
		<div class="container">

			<div class="main" style="max-width: 568px;margin: 0 auto">
				
				<h2 style="font-size: 30px;margin-top: 30px" class="text-center">Quên mật khẩu!</h2>
				<form method="post" action="" class="woocommerce-ResetPassword lost_reset_password">

					<p>Vui lòng nhập địa chỉ email của bạn. Bạn sẽ nhận được một liên kết để tạo một mật khẩu mới qua email.</p>

					<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
						<label for="user_login">Email</label>
						<input class="woocommerce-Input woocommerce-Input--text input-text" type="email" name="email" id="user_login" required>
					</p>

					<div class="clear"></div>

					
					<p class="woocommerce-form-row form-row">
						<button style="color: #fff" value="submit">Gửi</button>
					</p>
					@csrf
				</form>
			</div>
		</div>
	</div>
	@endif
</div>
</div>
@stop()