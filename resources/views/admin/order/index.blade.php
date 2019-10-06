@extends('layouts.admin')
@section('main')
@section('title','Quản lý đơn hàng')
@section('links','order')
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">
			<form action="" method="GET" class="form-inline" role="form">
						
				<div class="form-group">
					<label class="sr-only" for="">label</label>
					<input type="number" name="order_id" class="form-control" id="" placeholder="Order_id">
				</div>
				<div class="form-group">
					<label class="sr-only" for="">label</label>
					<input name="name" class="form-control" id="" placeholder="Tên khách hàng">
				</div>
				<div class="form-group">
					<label class="sr-only" for="">label</label>
					<input name="email" class="form-control" id="" placeholder="Email khách hàng">
				</div>
				<div class="form-group">
					<label class="sr-only" for="">label</label>
					<select name="status" id="inputStatus" class="form-control">
						<option value="">Trạng thái đơn hàng</option>
						@foreach($order_status as $key=>$item)
						<option value="{{$key}}">{{$item}}</option>
						@endforeach
					</select>
				</div>
			
				
			
				<button type="submit" class="btn btn-primary">Tìm kiếm</button>
			</form>			
		</h3>
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Order id</th>
					<th>Khách hàng</th>
					<th>Email</th>
					<th>Địa chỉ giao hàng</th>
					<th>Hóa đơn VAT</th>
					<th>Tổng tiền</th>
					<th>Trạng thái</th>
					<th>Ngày tạo</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php $status = '' ?>
				@foreach($orders as $order)
					@foreach($order_status as $key=>$stt)
						@if($key == $order->status)
							<?php $status = $stt; ?>
						@endif
					@endforeach
				<tr>
					<td>{{$order->order_id}}</td>
					<td>{{$order->name}}</td>
					<td>{{$order->email}}</td>
					<td>{{$order->address}}</td>
					<td class="text-center">
						@if(isset($order->red_bill->id))
						<span><a href="" class="btn btn-xs btn-info fa fa-search"></a></span>
						@endif
					</td>
					<td>{{$order->total_price}}</td>
					<td>
						@if($status == "Hủy đơn hàng")
						<span class="label label-danger">{{$status}}</span>
						@elseif($status == "Xác nhận đặt hàng")
						<span class="label label-info">{{$status}}</span>
						@elseif($status == "Đã giao hàng")
						<span class="label label-primary">{{$status}}</span>
						@else
						<span class="label label-default">{{$status}}</span>
						@endif
					</td>
					<td>{{$order->created_at}}</td>
					<td>
						<a href="{{route('order_detai_admin',['id'=>$order->order_id])}}" class="btn btn-xs btn-primary">Chi tiết</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$orders->links()}}
	</div>
</div>
@stop()