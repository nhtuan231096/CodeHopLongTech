@extends('layouts.admin')
@section('title','Quản lý nhóm khách hàng')
@section('links','Quản lý khách hàng')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-12">
				<form action="" method="GET" class="form-inline text-center" role="form">
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						<input name="name" class="form-control" id="" placeholder="Nhập tên nhóm khách hàng..">
					</div>
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						<select name="status" id="input" class="form-control">
							<option value="">Chọn trạng thái</option>
							<option value="1">Enable</option>
							<option value="0">Disable</option>
						</select>
					</div>
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						<input name="created_by" class="form-control" id="" placeholder="Người tạo..">
					</div>




					<button type="submit" class="btn btn-primary">Tìm kiếm</button>
				</form>
			</div>
		</div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-4">
				<form action="" method="POST" role="form">
					<legend>Thêm mới nhóm khách hàng</legend>
					<div class="form-group">
						<label for="">Tên nhóm</label>
						<input type="text" class="form-control" name="name" value="{{isset($dataEdit->name) ? $dataEdit->name : ''}}" required placeholder="Nhập tên nhóm..">
					</div>
					<div class="form-group">
						<label for="">Mức chiết khấu cho nhóm khách hàng(%)</label>
						<input type="number" class="form-control" value="{{isset($dataEdit->discount_amount) ? $dataEdit->discount_amount : ''}}" name="discount_amount" placeholder="Nhập mức chiết khấu">
					</div>
					@if(isset($dataEdit->status))
					<?php $enable = $dataEdit->status == 1 ? "selected" : ""; $disable = $dataEdit->status == 0 ? "selected" : ""; ?>
					<div class="form-group">
						<label for="">Trạng thái</label>
						<select name="status" id="input" class="form-control">
							<option {{$disable}} value="0">Disable</option>
							<option {{$enable}} value="1">Enable</option>
						</select>
					</div>
					@endif
					<input type="hidden" name="id" value="{{isset($dataEdit->id) ? $dataEdit->id : ''}}">
					<input type="hidden" name="created_by" value="{{Auth::guard('admin')->user()->username}}">
					@csrf

					<div class="">
						<button type="submit" class="btn btn-primary pull-right">Lưu</button>
					</div>
				</form>
			</div>
			<div class="col-md-8">
				@if(Session::has('success'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>{{Session::get('success')}}</strong>
				</div>
				@endif
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Tên nhóm</th>
							<th>Mức chiết khấu</th>
							<th>Trạng thái</th>
							<th>Người tạo</th>
							<th>Ngày tạo</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($datas as $item)
						<tr>
							<td>{{$item->name}}</td>
							<td>{{$item->discount_amount}}</td>
							<td>{{$item->status != 0 ? "Enable" : "Disable"}}</td>
							<td>{{$item->created_by}}</td>
							<td>{{$item->created_at}}</td>
							<td>
								<a href="{{route('customer_group',['id'=>$item->id])}}" class="fa fa-edit btn btn-xs btn-info"></a>
								<a href="{{route('delete_customer_group',['id'=>$item->id])}}" class="fa fa-trash btn btn-xs btn-danger"></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{$datas->links()}}
			</div>
		</div>
		
	</div>
</div>
@stop()