@extends('layouts.customer')
@section('content')
@if(Auth::guard('customer')->check())
<script src="{{url('public/js')}}/angular.min.js"></script>
<script src="{{url('public/js')}}/OrderCtrl.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-i18n/1.6.0/angular-locale_de-de.js"></script>

<div class="col-md-3">

	<div style="margin-bottom: 15px" class="list-group">
		<a href="{{route('my_account')}}" class="list-group-item active">Thông tin chung</a>
		<a href="{{route('order_history')}}" class="list-group-item ">Đơn hàng của tôi</a>
		<a href="{{route('logout_customer')}}" class="list-group-item">Thoát tài khoản</a>
	</div>
</div>
<div class="col-md-9">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Tài khoản của bạn</h3>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<td>Tên cá nhân/Công ty: {{isset(Auth::guard('customer')->user()->company) ? Auth::guard('customer')->user()->company : Auth::guard('customer')->user()->name ? Auth::guard('customer')->user()->name : ''}}</td>
							<td>Email: {{Auth::guard('customer')->user()->email ? Auth::guard('customer')->user()->email : ''}}</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Số điện thoại: {{Auth::guard('customer')->user()->phone ? Auth::guard('customer')->user()->phone : ''}}</td>
							<td>Địa chỉ nhận hàng: {{Auth::guard('customer')->user()->address ? Auth::guard('customer')->user()->address : ''}}</td>
						</tr>
						<tr>
							<td>Điểm thưởng: {{Auth::guard('customer')->user()->reward_points}}</td>
							<td>Điểm tích lũy: 
								{{$current_total_point}} (Bạn cần {{$vip_guests}} điểm để trở thành khách VIP)
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endif
@stop()
