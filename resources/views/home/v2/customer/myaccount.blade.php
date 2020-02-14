@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<!-- Main Container  -->
@if(Auth::guard('customer')->check())
<div class="main-container container">
	<ul class="breadcrumb">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
		<li><a href="#">Tài khoản</a></li>
		<li><a href="#">Tài khoản của tôi</a></li>
	</ul>
	
	<div class="row">
		<!--Middle Part Start-->
		<div class="col-sm-9" id="content">
			<!-- <h2 class="title">Tài khoản của tôi</h2> -->
			<p class="lead">Xin chào, <strong>{{Auth::guard('customer')->user()->name}}</strong> - Cập nhật thông tin tài khoản của bạn.</p>
			@if(Session::has('success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{Session::get('success')}}</strong> 
			</div>
			@endif
			<form method="POST" action="{{route('saveCustomer')}}">
				<div class="row">
					<div class="col-sm-6">
						<fieldset id="personal-details">
							<legend>Thông tin cá nhân</legend>
							<div class="form-group required">
								<label for="input-firstname" class="control-label">Họ và tên</label>
								<input type="text" class="form-control" id="input-firstname" placeholder="Họ và tên" value="{{Auth::guard('customer')->user()->name}}" required name="name">
							</div>
							<div class="form-group required">
								<label for="input-email" class="control-label">E-Mail</label>
								<input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="{{Auth::guard('customer')->user()->email}}" name="email" disabled>
							</div>
							<div class="form-group required">
								<label for="input-telephone" class="control-label">Số điện thoại</label>
								<input type="number" class="form-control" id="input-telephone" placeholder="Số điện thoại" value="{{Auth::guard('customer')->user()->phone}}" name="phone" required>
							</div>
						</fieldset>
						<br>
					</div>
					<div class="col-sm-6">
						<fieldset>
							<legend>Thay đổi mật khẩu</legend>
							<div class="form-group required">
								<label for="input-password" class="control-label">Mật khẩu hiện tại</label>
								<input type="password" class="form-control"  placeholder="Mật khẩu hiện tại" value="" name="old_password" required>
								@if(Session::has('error'))
								<p class="error" style="color: red;padding-bottom: 0px;margin-bottom: 0px;line-height: 0;margin-top: 10px">{{Session::get('error')}}</p>
								@endif
							</div>
							<div class="form-group">
								<label for="input-password" class="control-label">Mật khẩu mới</label>
								<input type="password" class="form-control"  placeholder="Mật khẩu mới" value="" name="new_password">
								@if($errors->has('new_password'))
								<p class="error" style="color: red;padding-bottom: 0px;margin-bottom: 0px;line-height: 0;margin-top: 10px">{{$errors->first('new_password')}}</p>
								@endif
							</div>
							<div class="form-group">
								<label for="input-confirm" class="control-label">Nhập lại mật khẩu mới</label>
								<input type="password" class="form-control" id="input-confirm" placeholder="Nhập lại mật khẩu mới" value="" name="new_confirm">
								@if($errors->has('new_confirm'))
								<p class="error" style="color: red;padding-bottom: 0px;margin-bottom: 0px;line-height: 0;margin-top: 10px">{{$errors->first('new_confirm')}}</p>
								@endif
							</div>
						</fieldset>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<fieldset id="address">
							<legend>Địa chỉ thanh toán, giao hàng</legend>
							<div class="form-group">
								<label for="input-company" class="control-label">Công ty</label>

								<input type="text" class="form-control"  placeholder="Công ty" value="{{Auth::guard('customer')->user()->company}}" name="company">

							</div>
							<div class="form-group required">
								<label for="input-address-1" class="control-label">Địa chỉ</label>
								<input type="text" class="form-control"  placeholder="Địa chỉ" value="{{Auth::guard('customer')->user()->address}}" name="address" required>
							</div>
							<div class="form-group">
								<label for="input-postcode" class="control-label">Mã số thuế</label>
								<input type="text" class="form-control"  placeholder="Mã số thuế" value="{{Auth::guard('customer')->user()->tax_code}}" name="tax_code">
							</div>
						</fieldset>
					</div>
				</div>
				@csrf
				<div class="buttons clearfix">
					<div class="pull-right">
						<input type="submit" class="btn btn-md btn-primary" value="Lưu thay đổi">
					</div>
				</div>
			</form>
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
		            <li><a href="{{route('my_account')}}">Tài khoản của tôi</a>
		            </li>
		            <li><a href="{{route('customer_order_history')}}">Order History</a>
		            </li>
		            <li><a href="{{route('logout_customer')}}">Đăng xuất</a>
		            </li>
		        </ul>
			</div>
		</aside>
		<!--Right Part End -->
	</div>
</div>
@endif
<!-- //Main Container -->
@stop()