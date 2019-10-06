@extends('layouts.admin')
@section('title','Quản lý quy tắc mã giảm giá')
@section('links','coupon')
@section('main')
<div class="">
	<div class="panel panel-info">
		<div class="panel-heading">
			<a href="{{route('couppon_rule_add')}}" class="btn btn-md btn-info">Thêm mới</a>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
			@if(Session::has('success'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>{{Session::get('success')}}!</strong> 
				</div>
			@endif
				<thead>
					<tr>
						<th>ID</th>
						<th>Tiêu đề</th>
						<th>Mô tả</th>
						<th>Số lượt/1 khách</th>
						<th>Số lượt sử tối đa</th>
						<th>Trạng thái</th>
						<th>Điều kiện</th>
						<th>Số tiền giảm</th>
						<th>Bắt đầu</th>
						<th>Kết thúc</th>
						<th>Người tạo</th>
						<th>Ngày tạo</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($CouponRule as $item)
					<tr>
						<td>{{$item->id}}</td>
						<td>{{$item->name}}</td>
						<td>{{$item->description}}</td>
						<td>{{$item->uses_per_customer}}</td>
						<td>{{$item->uses_per_coupon}}</td>
						<td>{{$item->status}}</td>
						<td>Giá {{$item->conditions}} {{$item->condition_for}}</td>
						<td>{{$item->price_reduced}}</td>
						<td>{{$item->from_date}}</td>
						<td>{{$item->to_date}}</td>
						<td>{{$item->created_by}}</td>
						<td>{{$item->created_at}}</td>
						<td>
							<a href="{{route('couppon_rule_add',['id'=>$item->id])}}" class="fa fa-edit btn btn-xs btn-info"></a>
							<a href="{{route('delRule',['id'=>$item->id])}}" class="fa fa-remove btn btn-xs btn-danger"></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop()