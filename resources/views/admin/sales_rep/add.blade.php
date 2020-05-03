@extends('layouts.admin')
@section('title','Quản lý nhân viên Sale')
@section('links','user')
@section('main')
<div class="panel panel-info">
	<div class="panel-body">
		@if ($data)
		<form action="" method="POST" role="form">
			<legend>Chỉ định khách hàng cho sales</legend>
		
			<div class="form-group">
				<label for="">Chọn tài khoản sale</label>
				<select class="form-control" required="required" disabled>
					@foreach($users as $itemUser)
					<?php $selected = $data->user_id == $itemUser->id ? "selected" : ""?>
					<option value="{{$itemUser->id}}" {{$selected}}>{{$itemUser->username}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="">Chọn tài khoản khách hàng</label>
				<select name="customers[]" class="form-control" required="required" multiple style="height: 200px">
					<?php $selectedCustomer = "" ?>
					@foreach($customers as $itemCustomer)
						@foreach($data->customer as $itemCus)
							<?php 
								$selectedCustomer = $itemCus->id == $itemCustomer->id ? "selected" : "";
								if ($selectedCustomer != "") break;
							?>
						@endforeach
						<option {{$selectedCustomer}} value="{{$itemCustomer->id}}" style="padding:5px">{{$itemCustomer->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="">Trạng thái</label>
				<select name="status" class="form-control">
					@if($data->status == 1)
					<option value="1">Enable</option>
					<option value="0">Disable</option>
					@else
					<option value="0">Disable</option>
					<option value="1">Enable</option>
					@endif
				</select>
			</div>
			@csrf
			<input type="hidden" name="user_id" value="{{$data->user_id}}">
			<input type="hidden" name="salesRepId" value="{{$data->id}}">
			<button type="submit" class="btn btn-primary">Lưu</button>
		</form>
		@else
		<form action="" method="POST" role="form">
			<legend>Chỉ định khách hàng cho sales</legend>
		
			<div class="form-group">
				<label for="">Chọn tài khoản sale</label>
				<select name="user_id" class="form-control" required="required">
					@foreach($users as $itemUser)
					<option value="{{$itemUser->id}}">{{$itemUser->username}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="">Chọn tài khoản khách hàng</label>
				<select name="customers[]" class="form-control" required="required" multiple style="height: 200px">
					@foreach($customers as $itemCustomer)
					<option value="{{$itemCustomer->id}}" style="padding:5px">{{$itemCustomer->name}}</option>
					@endforeach
				</select>
			</div>
			@csrf
			<button type="submit" class="btn btn-primary">Lưu</button>
		</form>
		@endif
	</div>
</div>
@stop()