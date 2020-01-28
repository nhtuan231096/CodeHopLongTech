@extends('layouts.admin')
@section('title','Quản lý khách hàng')
@section('links','Quản lý khách hàng')
@section('main')
<div class="panel panel-info">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-4">
				<form action="" method="POST" role="form">
					<legend>Tạo loại khách hàng</legend>
				
					<div class="form-group">
						<label for="">Loại khách hàng</label>
						<input type="text" name="name" class="form-control" id="" placeholder="Nhập loại khách hàng" value="{{isset($editCus->name) ? $editCus->name : ''}}" required>
					</div>
					<div class="form-group">
						<label for="">Trạng thái</label>
						<select name="status" id="inputStatus" class="form-control" required="required">
							<?php $enable = isset($editCus->status) == 1 ? "selected" : "" ?>
							<?php $disable = isset($editCus->status) == 0 ? "selected" : "" ?>
							<option {{$enable}} value="1">Enable</option>
							<option {{$disable}} value="0">Disable</option>
						</select>
					</div>
					<input type="hidden" name="id" value="{{isset($editCus->id) ? $editCus->id : ''}}">
					<input type="hidden" name="created_by" value="{{Auth::guard('admin')->user()->username}}"> 
					@csrf
					<button type="submit" class="btn btn-primary">Lưu</button>
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
							<th>Tên</th>
							<th>Người tạo</th>
							<th>Trạng thái</th>
							<th>Ngày tạo</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($datas as $data)
						<tr>
							<td>{{$data->name}}</td>
							<td>{{$data->created_by}}</td>
							<td>{{$data->status == 1 ? "enable" : "disable"}}</td>
							<td>{{$data->created_at}}</td>
							<td>
								<a href="{{route('customer_type',['id'=>$data->id])}}" class="fa fa-edit btn btn-xs btn-info"></a>
								<a href="{{route('del_customer_type',['id'=>$data->id])}}" class="fa fa-trash btn btn-xs btn-danger"></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
</div>
@stop()