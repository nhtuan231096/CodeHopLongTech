@extends('layouts.admin')
@section('title','Cập nhật bài viết')
@section('links','Quản lý bài viết')
@section('main')

<form action="" method="POST" role="form" enctype="multipart/form-data">

	<div class="row">
		@if($errors->has('slug'))
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{$errors->first('slug')}}</strong> 
			</div>
		@endif
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Tiêu đề bài viết</label>
				<input type="text" name="title" class="form-control" id="" value="{{$datas->title}}" placeholder="Nhập tiêu đề.." required>
			</div>
			<div class="form-group">
				<label for="">Đường dẫn tĩnh</label>
				<input type="text" name="slug" class="form-control" id="" value="{{$datas->slug}}" placeholder="Nhập đường dẫn tĩnh.." required>
			</div>
			
			<div class="form-group">
				<label for="">Ảnh đại diện bài viết</label>
				<div class="clearfix"></div>
				<img src="{{url('uploads/posts')}}/{{$datas->cover_image}}" width="100px" alt="{{$datas->cover_image}}">
				<input type="file" name="upload_cover_image" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Bài viết nổi bật</label>
				<select name="featured_posts" id="inputFeatured_posts" class="form-control">
					@if($datas->featured_posts == 1)
					<option value="1" selected>Enable</option>
					<option value="0">Disable</option>
					@else
					<option value="1">Enable</option>
					<option value="0" selected>Disable</option>
					@endif
				</select>
			</div>
			<div class="form-group">
				<label for="">Trạng thái</label>
				<select name="status" id="input" class="form-control">
					@if($datas->status == 1)
					<option value="1" selected>Enable</option>
					<option value="0">Disable</option>
					@else
					<option value="1">Enable</option>
					<option value="0" selected>Disable</option>
					@endif
				</select>
			</div>
			<div class="form-group">
				<label for="">Danh mục bài viết</label>
				<select name="category_id" id="input" class="form-control" required="required">
					<option value="">Chọn danh mục bài viết</option>
					@foreach($category as $cate)
					<?php $selected = $datas->category_id == $cate->id ? 'selected' : '' ?>
					<option {{$selected}} value="{{$cate->id}}">{{$cate->name}}</option>
					@endforeach
				</select>
			</div>
			<input type="hidden" name="created_by" value="{{Auth::guard('admin')->user()->username}}">
			<div class="form-group">
				<label for="">Mô tả ngắn</label>
				<textarea style="height: 300px!important" name="description" id="" cols="30" rows="10">
					{{$datas->description}}
				</textarea>
				<input type="hidden" name="id" value="{{$datas->id}}">
			</div>
			@csrf
			<button type="submit" class="btn btn-primary">Lưu</button>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Nội dung bài viết</label>
				<textarea style="height: 726px!important" name="content" id="" cols="30" rows="10">
					{{$datas->content}}
				</textarea>
			</div>
		</div>
	</div>

	

</form>

@stop()