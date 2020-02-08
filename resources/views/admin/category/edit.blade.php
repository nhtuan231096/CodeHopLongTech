@extends('layouts.admin')
@section('title','Danh mục sản phẩm')
@section('links','Danh mục')
@section('main')
<div class="panel panel-info">
	<!-- Default panel contents -->
	<div class="panel-heading">
	<br>
		<h4>Sửa danh mục: {{$cate->title}}</h4>
	</div>
		@if(Session::has('success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{Session::get('success')}}</strong>
			</div>
		@endif	
	<div class="panel-body">
	<form action="" method="POST" role="form" enctype="multipart/form-data">
		<div class="col-md-5">
		<br>
			<div class="form-group">
				<label for="">Tên danh mục *</label>
				<input type="text" name="title" class="form-control" id="title" value="{{$cate->title}}" placeholder="Tên danh mục">
				@if($errors->has('title'))
					<div class="help-block">
						{{$errors->first('title')}}
					</div>
				@endif
			</div>
			<div class="form-group">
				<label for="">Đường dẫn tĩnh *</label>
				<input type="text" name="slug" class="form-control" id="slug" value="{{$cate->slug}}" placeholder="Đường dẫn tĩnh">
			</div>
			<div class="form-group">
				<label for="">Danh mục cha *</label>
				<select name="parent_id" id="input" class="form-control">
					<option value="0">Danh mục cha</option>
				@foreach($parent as $parents)
				<?php $selected=($cate->parent_id==$parents->id) ? 'selected' : '' ?>
					<option {{$selected}} value="{{$parents->id}}">{{$parents->title}}</option>
				@endforeach
				<!-- <option value="">â</option> -->
				</select>
			</div>
			<div class="form-group">
	    		<label for="">Meta title</label>
	    		<input type="text" name="meta_title" class="form-control" id="meta_title" value="{{$cate->meta_title}}" placeholder="Meta title">
	    	</div>

	    
	    	<div class="form-group">
	    		<label for="">Meta description</label>
	    		<!-- <textarea name="meta_description" id="content" class="form-control" placeholder="meta_description">{{$cate->meta_description}}</textarea> -->
	    		<input type="text" name="meta_description" class="form-control" id="meta_description" value="{{$cate->meta_description}}" placeholder="Meta description">
	    	</div>
	    	<div class="form-group">
	    		<label for="">meta keywords</label>
	    		<input type="text" name="meta_keywords" class="form-control" id="meta_keywords" value="{{$cate->meta_keywords}}" placeholder="meta keywords">
	    	</div>
			<div class="form-group">
				<label for="">Trạng thái</label>
				<select name="status" id="input" class="form-control">
					@if($cate->status=='enable')
					<option value="enable">Enable</option>
					<option value="disable">Disable</option>
					@else
					<option value="disable">Disable</option>
					<option value="enable">Enable</option>
					@endif
				</select>
			</div>
			<div class="form-group">
				<label for="">Ảnh *</label>
				<div class="clearfix"></div>
				<img width="100px" src="{{url('uploads/category')}}/{{$cate->cover_image}}" alt="image">
				<input type="file" name="upload_file" class="form-control" id="upload_file" placeholder="">
				<input type="hidden" name="created_by" value="{{Auth::Guard('admin')->user()->username}}">
			</div>
			<div class="form-group">
				<label for="">Ảnh đại diện *</label>
				<div class="clearfix"></div>
				<img width="100px" src="{{url('uploads/category')}}/{{$cate->cover_image_2}}" alt="image">
				<input type="file" name="upload_file2" class="form-control" id="upload_file2" placeholder="">
				<input type="hidden" name="created_by" value="{{Auth::Guard('admin')->user()->username}}">

			</div>
			@if($errors->has('cover_image_2'))
					<div class="help-block">
						{{$errors->first('cover_image_2')}}
					</div>
				@endif
		</div>
		<div class="col-md-7">
		<br>
			<div class="form-group">
	    		<label for="">Độ ưu tiên</label>
	    		<select name="priority" class="form-control">
	    			@if($cate->priority=='1')
	    			<option selected value="1">Nhóm 1</option>
	    			<option value="2">Nhóm 2</option>
	    			@else
	    			<option value="1">Nhóm 1</option>
	    			<option selected value="2">Nhóm 2</option>
	    			@endif
	    		</select>
	    	</div>
		<!-- 	<div class="form-group">
	    		<label for="">Mô tả</label>
	    		<textarea name="description" id="content" class="form-control" placeholder="Mô tả">{{$cate->description}}</textarea>
	    	</div> -->
			<div class="form-group">
	    		<label for="">Nội dung</label>
	    		<textarea style="height: 765px" name="content" id="content" class="form-control" placeholder="Nội dung">{{$cate->content}}</textarea>
	    	</div>
		</div>
		@csrf
	   <div class="modal-footer">
	     <a href="{{route('category')}}" class="btn btn-info" data-dismiss="modal">Hủy</a>
	     <button type="submit" class="btn btn-primary">Lưu</button>
	   </div>
		<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
	</form>	
	</div>
</div>	
@stop()