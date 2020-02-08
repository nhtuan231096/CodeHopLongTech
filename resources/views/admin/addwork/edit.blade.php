@extends('layouts.admin')
@section('title','Cập nhật địa điểm')
@section('links','Địa điểm')
@section('main')
<div class="panel panel-info">
	<!-- Default panel contents -->
	<div class="panel-heading">
		<h4>Sửa địa điểm: {{$addwork->title}}</h4>
	</div>
		@if(Session::has('success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{Session::get('success')}}</strong>
			</div>
		@endif	
	<div class="panel-body">
	<form action="" method="POST" role="form" enctype="multipart/form-data">
		<div class="form-group">
			<label for="">Tên danh mục *</label>
			<input type="text" name="title" class="form-control"value="{{$addwork->title}}" placeholder="Tên địa điểm">
			@if($errors->has('title'))
				<div class="help-block">
					{{$errors->first('title')}}
				</div>
			@endif
		</div>
		
		<div class="form-group">
			<label for="">Trạng thái</label>
			<select name="status" id="input" class="form-control">
				@if($addwork->status=='enable')
				<option value="enable">Enable</option>
				<option value="disable">Disable</option>
				@else
				<option value="disable">Disable</option>
				<option value="enable">Enable</option>
				@endif
			</select>
		</div>
		@csrf
	   <div class="modal-footer">
	     <a href="{{route('address-work')}}" class="btn btn-info" data-dismiss="modal">Hủy</a>
	     <button type="submit" class="btn btn-primary">Lưu</button>
	   </div>
	</form>	
	</div>
</div>	
@stop()