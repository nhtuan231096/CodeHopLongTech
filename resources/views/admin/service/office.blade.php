@extends('layouts.admin')
@section('title','Quản lý cấu hình web')
@section('links','Văn phòng')
@section('main')
<div class="col-md-3">
	<form action="" method="POST" role="form">
		<legend>Thêm mới</legend>
	
		<div class="form-group">
			<label for="">Tiêu đề</label>
			<input type="text" name="title" class="form-control" id="name" @if(isset($editOff->id)) value="{{$editOff->title}}" @endif placeholder="Nhập tiêu đề">
			@if($errors->has('title'))
				<div class="help-block error">{{$errors->first('title')}}</div>
			@endif
		</div>
		<div class="form-group">
			<label for="">Đường dẫn</label>
			<input type="text" name="slug" class="form-control" id="slug" @if(isset($editOff->id)) value="{{$editOff->slug}}" @endif placeholder="Nhập đường dẫn">
			@if($errors->has('slug'))
				<div class="help-block error">{{$errors->first('slug')}}</div>
			@endif
		</div>		
		<div class="form-group">
			<label for="">Địa chỉ</label>
			<input type="text" name="address" class="form-control" id="" @if(isset($editOff->id)) value="{{$editOff->address}}" @endif placeholder="Nhập địa chỉ">
		</div>
			@if($errors->has('address'))
				<div class="help-block error">{{$errors->first('address')}}</div>
			@endif	
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" name="email" class="form-control" id="" @if(isset($editOff->id)) value="{{$editOff->email}}" @endif placeholder="Nhập email">
			@if($errors->has('email'))
				<div class="help-block error">{{$errors->first('email')}}</div>
			@endif
		</div>
		<div class="form-group">
			<label for="">Số điện thoại</label>
			<input type="text" name="phone" class="form-control" id="" @if(isset($editOff->id)) value="{{$editOff->phone}}" @endif placeholder="Nhập số điện thoại">
			@if($errors->has('phone'))
				<div class="help-block error">{{$errors->first('phone')}}</div>
			@endif
		</div>
		@if(isset($editOff->id)) 
		<div class="form-group">
			<label for="">Trạng thái</label>
			<select name="status" id="inputStatus" class="form-control">
				@if($editOff->status=='enable')
				<option selected value="enable">enable</option>
				<option value="disable">disable</option>
				@else
				<option selected value="disable">disable</option>
				<option value="enable">enable</option>
				@endif
			</select>
		</div>		
		@endif
		@csrf
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<div class="col-md-9">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Danh sách office</h3>
		</div>
		<div class="panel-body">
		@if(Session::has('success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Success:</strong> {{Session::get('success')}}
			</div>
		@endif
		<table class="table table-bordered table-hover">
			<thead>
					<tr>
						<th>ID</th>
						<th>Tiêu đề</th>
						<th>Đường dẫn</th>
						<th>Địa chỉ</th>
						<th>Email</th>
						<th>Số điện thoại</th>
						<th>Sorder</th>
						<th>Trạng thái</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($offices as $office)
					<tr>
						<td>{{$office->id}}</td>
						<td>{{$office->title}}</td>
						<td>{{$office->slug}}</td>
						<td>{{$office->address}}</td>
						<td>{{$office->email}}</td>
						<td>{{$office->phone}}</td>
						<td>
							<form action="{{route('update-office',['id'=>$office->id])}}" method="POST" class="form-inline" role="form">
							
								<div class="form-group">
									<label class="sr-only" for="">label</label>
									<input style="width: 40px;" type="" class="form-control" name="sorder" value="{{$office->sorder}}" id="" placeholder="">
								</div>
							@csrf()
								
							
								<button type="submit" class="fa fa-save btn btn-primary"></button>
							</form>
						</td>
						<td>{{$office->status}}</td>

						<td>
							<a href="{{route('editOff',['id'=>$office->id])}}" class="btn btn-xs btn-primary fa fa-edit"></a>
							<a href="{{route('delOff',['id'=>$office->id])}}" class="btn btn-xs btn-danger fa fa-trash"></a>
						</td>
					</tr>
				@endforeach
				</tbody>
		</table>
	</div>
</div>
@stop()