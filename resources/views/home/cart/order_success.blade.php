@extends('layouts.product1')
@section('content')
<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">
		<div>
			<nav class="woocommerce-breadcrumb"><a href="{{route('home')}}">Trang chủ</a><span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>Đặt hàng</nav>
			<div class="jumbotron">
				<div class="container text-center">
					@if(Auth::check())
					<h3 style="font-size: 25px; line-height:2; margin: 34px">Đặt hàng thành công, vui lòng theo dõi trạng thái đơn hàng được gửi đến email kiểm tra trong <a style="font-size: 25px;color:#3498db" href="{{route('order_history')}}">trang cá nhân</a></h3>
					@else
					<h3 style="margin: 34px">Đặt hàng thành công, chi tiết đơn hàng được gửi về email của bạn</h3>
					@endif
					<p>
						<a href="{{route('home_product')}}" class="btn btn-primary btn-lg">Tiếp tục mua hàng</a>
					</p>
				</div>
			</div>

		</div><!-- .col-full -->
	</div><!-- .row -->
</div>
@stop()