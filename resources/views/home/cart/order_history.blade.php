@extends('layouts.customer')
@section('content')
<script src="{{url('public/js')}}/angular.min.js"></script>
<script src="{{url('public/js')}}/OrderCtrl.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-i18n/1.6.0/angular-locale_de-de.js"></script>

<div class="col-md-3">

	<div style="margin-bottom: 15px" class="list-group">
		<a href="{{route('my_account')}}" class="list-group-item">Thông tin chung</a>
		<a href="{{route('order_history')}}" class="list-group-item active">Đơn hàng của tôi</a>
		<a href="{{route('logout_customer')}}" class="list-group-item">Thoát tài khoản</a>
	</div>
</div>
<div class="col-md-9">
	<div class="panel panel-info" ng-app="myApp" ng-controller="CtrlOrder">
		<div class="panel-heading">
			<h3 class="panel-title">Đơn hàng của tôi</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Order id</th>
						<th>Ngày đặt hàng</th>
						<th>Trạng thái</th>
						<th>Tổng tiền</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php $stt = '' ?>
					@foreach($orders as $order)
						@foreach($cart->order_status() as $key=>$status)
							@if($key == $order->status)
								<?php $stt = $status ?>
							@endif
						@endforeach
					<tr>
						<td>{{$order->order_id}}</td>
						<td>{{$order->created_at}}</td>
						<td>{{$stt}}</td>
						<td>{{$order->total_price}}</td>
						<td>
							<a ng-click="detaiOrder({{$order->order_id}})" data-toggle="modal" href='#modal-id'>Chi tiết</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@if($stt=='')
					<div class="jumbotron">
						<div class="container text-center">
							<p style="padding: 40px 0px;font-size: 23px;">Bạn chưa có đơn hàng nào, hãy <a style="font-size: 23px; font-style: italic; color: #3498db" href="{{route('home_product')}}">tạo đơn hàng đầu tiên</a></p>
						</div>
					</div>
				@endif
			{{$orders->links()}}
			<div class="modal fade" id="modal-id">
				<div class="modal-dialog modal-lg" style="width: 100%">
					<div class="modal-content" style="width: 100%">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Chi tiết đơn hàng</h4>
						</div>
						<div class="modal-body">
							<div class="row" style="font-weight: bold; margin-bottom: 10px">
								<div class="col-md-6">
									<span>Sản phẩm</span>
								</div>
								<div class="col-md-3">
									Giá
								</div>
								<div class="col-md-3">
									VAT
								</div>
							</div>
							<hr>
							<div class="row products" ng-repeat="item in detail_order" style="margin: 5px">
								<div class="col-md-6">
									<span>@{{item['product_name']}} x @{{item['quantity']}}</span>
								</div>
								<div class="col-md-3" ng-if="item['price'] >= 0">
									@{{item['price']*item['quantity'] | number: 0}}
								</div>
								<div class="col-md-3" ng-if="item['price'] == 'Liên hệ'">
									@{{item['price']}}
								</div>
								<div class="col-md-3">
									@if($order->vat == 1)
										@{{((item['price']*item['quantity'])*10)/100 | number: 0}}
									@else 
										0
									@endif
								</div>
							</div>
							<hr>
							<div class="row" style="margin-bottom: 10px">
								<div class="col-md-6">
									<span style="font-weight: bold;">Người nhận:</span> @{{orders['name']}}
								</div>
								<div class="col-md-4">
									<span style="font-weight: bold;">Email:</span> @{{orders['email']}}
								</div>
							</div>
							<div class="row" style="margin-bottom: 10px">
								<div class="col-md-6">
									<span style="font-weight: bold;">Số điện thoại:</span> @{{orders['phone']}}
								</div>
								<div class="col-md-6">
									<span style="font-weight: bold;">Điểm thưởng:</span> -@{{orders['reduced_price'] > 0 ? orders['reduced_price'] : 0}}								
								</div>
							</div>
							<div class="row" style="margin-bottom: 10px">
								<div class="col-md-6">
									<span style="font-weight: bold;">Mã giảm giá:</span> -@{{orders['use_coupon_code']>0 ? (orders['use_coupon_code'] | number) : 0}}
								</div>
								<div class="col-md-6">
									<span style="font-weight: bold;">Tổng tiền:</span> @{{orders['total_price']}}								
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="jumbotron">
			<div class="container text-center">
				<p style="padding: 40px 0px;font-size: 23px;">Bạn chưa có đơn hàng nào, hãy <a style="font-size: 23px; font-style: italic; color: #3498db" href="{{route('home_product')}}">tạo đơn hàng đầu tiên</a></p>
			</div>
		</div> -->
	</div>
</div>
@stop()
