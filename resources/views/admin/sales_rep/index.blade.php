@extends('layouts.admin')
@section('title','Quản lý đại diện bán hàng')
@section('links','user')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<h4 class="pull-left">Danh sách tài khoản</h3>
		<a href="{{route('new_sales_rep')}}" class="btn btn-md btn-primary pull-right">Thêm mới</a>
		<div class="clearfix"></div>
	</div>
	<div class="panel-body">
		@if(Session::has('success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('success')}}</strong>
		</div>
		@endif
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Đại diện bán hàng</th>
					<th>Khách hàng</th>
					<th>Doanh thu</th>
					<th>Người tạo</th>
					<th>Trạng thái</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($salesRep as $itemSalesRep)
				<tr>
					<td>{{$itemSalesRep->id}}</td>
					<td>{{$itemSalesRep->user->username}}</td>
					<td>
						<ul class="list-group">
							@foreach($itemSalesRep->customer as $itemCustomer)
							<li class="list-group-item">{{$itemCustomer->name}}</li>
							@endforeach
						</ul>
					</td>
					<td>{{$itemSalesRep->total_sales}}</td>
					<td>{{$itemSalesRep->created_by}}</td>
					<td>{{$itemSalesRep->status == 1 ? "enable" : "disable"}}</td>
					<td>
						<a href="{{route('new_sales_rep',['id'=>$itemSalesRep->id])}}" class="fa fa-edit btn btn-xs btn-info"></a>
						<a href="" class="fa fa-trash btn btn-xs btn-danger"></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>	
</div>
@stop()