@extends('layouts.admin')
@section('title','Quản lý mã giảm giá')
@section('links','coupon')
@section('main')
<div class="">
	<div class="panel panel-info">
		<div class="panel-heading">
			<form action="" method="POST" class="form-inline" role="form">
		
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<select name="rule_id" id="inputRule_id" class="form-control" required="required">
					<option value="">Chọn quy tắc tạo mã giảm giá</option>
					@foreach($CouponRule as $item)
					<option value="{{$item->id}}">{{$item->name}}</option>
					@endforeach
				</select>
			</div>
			@csrf
			
		
			<button type="submit" class="btn btn-primary">Tạo mã</button>
		</form>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
			@if(Session::has('success'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>{{Session::get('success')}}!</strong> 
				</div>
			@elseif(Session::has('error'))
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>{{Session::get('error')}}!</strong> 
				</div>
			@endif
				<thead>
					<tr>
						<th>ID</th>
						<th>Mã giảm giá</th>
						<th>Số lượt sử dụng tối đa</th>
						<th>Số lượt đã sử dụng</th>
						<th>Quy định</th>
						<th>Bắt đầu</th>
						<th>Kết thúc</th>
						<th>Trạng thái</th>
						<th>Người tạo</th>
						<th>Ngày tạo</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($CouponCode as $item)
					<tr>
						<td>{{$item->id}}</td>
						<td>{{$item->coupon_code}}</td>
						<td>{{isset($item->rule->uses_per_coupon) ? $item->rule->uses_per_coupon : ''}}</td>
						<td>{{$item->times_used}}</td>
						<td>{{isset($item->rule->name) ? $item->rule->name : ''}}</td>
						<td>{{isset($item->rule->from_date) ? $item->rule->from_date : ''}}</td>
						<td>{{isset($item->rule->to_date) ? $item->rule->to_date : ''}}</td>
						<td>{{$item->status == 1 ? 'enable' : 'disable'}}</td>
						<td>{{$item->created_by}}</td>
						<td>{{$item->created_at}}</td>
						<td>
							<a href="{{route('delCoupon',['id'=>$item->id])}}" class="fa fa-trash btn btn-xs btn-danger"></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$CouponCode->links()}}
		</div>
	</div>
</div>
@stop()