@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<!-- Main Container  -->
@if(!Auth::guard('customer')->check())
<div class="main-container container">
	<ul class="breadcrumb">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
		<li><a href="#">Tài khoản</a></li>
		<li><a href="#">Tài khoản của tôi</a></li>
	</ul>
	
	<div class="row">
		<!--Middle Part Start-->
		<div class="col-sm-9" id="content">
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
			<!-- <div class="jumbotron"> -->
				<div class="text-center">

					<div class="main" style="max-width: 698px;margin: 0 auto">
						
						<h2 style="font-size: 30px;margin-top: 30px" class="text-center">Quên mật khẩu!</h2>
						<form action="" method="POST" class="form-inline" role="form">
							<p>Vui lòng nhập địa chỉ email của bạn. Bạn sẽ nhận được một liên kết để tạo một mật khẩu mới qua email.</p>
							<div class="form-group">
								<label class="sr-only" for="">label</label>
								<input type="email" name="email" class="form-control" id="" placeholder="Email" required>
							</div>
							@csrf
							<button type="submit" class="btn btn-primary">Gửi</button>
						</form>
					</div>
				</div>
			<!-- </div> -->
			@endif
		</div>
		<!--Middle Part End-->
		<!--Right Part Start -->
		<aside class="col-sm-3 hidden-xs content-aside col-md-3" id="column-right">
			<h2 class="subtitle">Account</h2>
			<div class="list-group">
				<ul class="list-item">
		            @if(!Auth::guard('customer')->check())
					<li><a href="{{route('login_customer')}}">Đăng nhập</a>
		            </li>
		            <li><a href="{{route('register_customer')}}">Đăng ký</a>
		            </li>
		            @endif
		            <li><a href="{{route('forgotPassword')}}">Quên mật khẩu</a>
		            </li>
		            <!-- <li><a href="{{route('my_account')}}">Tài khoản của tôi</a> -->
		            <!-- </li> -->
		            <!-- <li><a href="{{route('customer_order_history')}}">Order History</a> -->
		            <!-- </li> -->
		            <!-- <li><a href="{{route('logout_customer')}}">Đăng xuất</a> -->
		            <!-- </li> -->
		        </ul>
			</div>
		</aside>
		<!--Right Part End -->
	</div>
</div>
@endif
<!-- //Main Container -->
@stop()