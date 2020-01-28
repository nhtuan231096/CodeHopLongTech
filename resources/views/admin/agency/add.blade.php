@extends('layouts.admin')
@section('title','Tạo bài viết')
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
				<input type="text" name="title" class="form-control" id="" placeholder="Nhập tiêu đề.." required>
			</div>
			<div class="form-group">
				<label for="">Đường dẫn tĩnh</label>
				<input type="text" name="slug" class="form-control" id="" placeholder="Nhập đường dẫn tĩnh.." required>
			</div>
			<div class="form-group">
				<label for="">Ảnh đại diện bài viết</label>
				<input type="file" name="upload_cover_image" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="">Bài viết nổi bật</label>
				<select name="featured_posts" id="inputFeatured_posts" class="form-control">
					<option value="0">Disable</option>
					<option value="1">Enable</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Danh mục bài viết</label>
				<select name="category_id" id="input" class="form-control" required>
					<option value="">Chọn danh mục bài viết</option>
					@foreach($category as $cate)
					<option value="{{$cate->id}}">{{$cate->name}}</option>
					@endforeach
				</select>
			</div>
			<input type="hidden" name="created_by" value="{{Auth::guard('admin')->user()->username}}">
			<div class="form-group">
				<label for="">Mô tả ngắn</label>
				<textarea style="height: 300px!important" name="description" id="" cols="30" rows="10"></textarea>
				<!-- <input type="text" class="form-control" id="" placeholder="Nhập mô tả ngắn cho bài viết.."> -->
			</div>
			@csrf
			<button type="submit" class="btn btn-primary">Lưu</button>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Nội dung bài viết</label>
				<textarea style="height: 672px!important" name="content" id="" cols="30" rows="10"></textarea>
			</div>
		</div>
	</div>
</form>
@stop()