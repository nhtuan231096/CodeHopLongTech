@extends('layouts.admin')
@section('title','Nhật ký sử dụng mã giảm giá')
@section('links','coupon')
@section('main')
<div class="">
	<div class="panel panel-info">
		<div class="panel-heading">
			<form action="" method="GET" class="form-inline" role="form">
			
				<div class="form-group">
					<label class="sr-only" for="">label</label>
					<input type="" name="coupon" class="form-control" id="" placeholder="Tìm kiếm theo mã giảm giá..">
				</div>
			
				@csrf
			
				<button type="submit" class="btn btn-primary">Tìm kiếm</button>
			</form>
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
						<th>Mã giảm giá</th>
						<th>Quy tắc</th>
						<th>Khách hàng</th>
						<th>Số tiền giảm</th>
						<th>Ngày sử dụng</th>
					</tr>
				</thead>
				<tbody>
					@foreach($dataLog as $item)
					<tr>
						<td>{{$item->id}}</td>
						<td>{{$item->coupon_code}}</td>
						<td>{{$item->rule->name}}</td>
						<td>{{$item->customer}}</td>
						<td>{{number_format($item->rule->price_reduced)}}</td>
						<td>{{$item->created_at}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$dataLog->links()}}
		</div>
	</div>
</div>
@stop()