@extends('layouts.admin')
@section('title','Quản lý popup')
@section('links','popup')
@section('main')
<style type="text/css">
	input{
		margin:25px 15px;
	}	
</style>
<div class="jumbotron text-center">
	@if(Session::has('success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('success')}}</strong>
		</div>
	@endif
	
	@if(empty($data))
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="upload_file" style="margin:0 auto" >

		<span><i style="font-size: 12px">(ảnh nền popup)</i></span>
		<div class="clearfix"></div>
		<div class="container">
			<div class="boxes" style="width: 450px;height:350px;border: 1px solid #000;margin:30px auto">
				<select name="status" required>
					<option value="">Status</option>
					<option value="1">Enable</option>
					<option value="0">Disable</option>
				</select>
				<input type="text" name="title" placeholder="Tiêu đề">
				<div class="clearfix"></div>
				<input type="text" name="text1" placeholder="text">
				<div class="clearfix"></div>
				<!-- <input type="text" name="text2" placeholder="text"> -->
				<input type="text" name="link" style="margin:0 auto" placeholder="Link liên kết tới bài viết">
			</div>
		</div>
		@csrf
		<input type="submit" value="Lưu Popup">
	</form>
	@endif

	@if(!empty($data))
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="upload_file" style="margin:0 auto" >

		<span><i style="font-size: 12px">(ảnh nền popup)</i></span>
		<div class="clearfix"></div>
		<div class="container">
			<input type="hidden" name="id" value="{{$data->id}}">
			<div class="boxes" style="width: 450px;height:350px;border: 1px solid #000;margin:30px auto;background-image: url({{url('uploads/file_service/popup')}}/{{$data->cover_image}});">
				<select name="status" required>
					@if($data->status == 1)
					<option selected value="1">Enable</option>
					<option value="0">Disable</option>
					@elseif($data->status == 0)
					<option value="0">Disable</option>
					<option selected value="1">Enable</option>
					@endif
				</select>
				<input type="text" name="title" value="{{$data->title}}" placeholder="Tiêu đề">
				<div class="clearfix"></div>
				<input type="text" name="text1" value="{{$data->text1}}" placeholder="text">
				<div class="clearfix"></div>
				<!-- <input type="text" name="text2" value="{{$data->text2}}" placeholder="text"> -->
				<input type="text" name="link" value="{{$data->link}}" style="margin:0 auto" placeholder="Link liên kết tới bài viết">
			</div>
		</div>
		@csrf
		<input type="submit" class="btn btn-md btn-primary" value="Lưu Popup">
	</form>
	@endif
</div>
@stop()