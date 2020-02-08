@extends('layouts.admin')
@section('title','Cập nhật danh mục')
@section('links','Danh mục')
@section('main')
<div class="panel panel-info">
	<!-- Default panel contents -->
	<div class="panel-heading">
		<h4>Sửa danh mục: {{$editCatWork->title}}</h4>
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
			<input type="text" name="name" class="form-control" id="name" value="{{$editCatWork->name}}" placeholder="Tên danh mục">
			@if($errors->has('name'))
				<div class="help-block">
					{{$errors->first('name')}}
				</div>
			@endif
		</div>
		<div class="form-group">
			<label for="">Đường dẫn tĩnh *</label>
			<input type="text" name="slug" class="form-control" id="slug" value="{{$editCatWork->slug}}" placeholder="Đường dẫn tĩnh">
		</div>
		<div class="form-group">
			<label for="">Trạng thái</label>
			<select name="status" id="input" class="form-control">
				@if($editCatWork->status=='enable')
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
	     <a href="{{route('cat-work')}}" class="btn btn-info" data-dismiss="modal">Hủy</a>
	     <button type="submit" class="btn btn-primary">Lưu</button>
	   </div>
	</form>	
	</div>
</div>	
@stop()