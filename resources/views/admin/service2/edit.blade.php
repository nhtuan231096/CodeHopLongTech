@extends('layouts.admin')
@section('title','Cập nhật bài viết')
@section('links','Danh mục')
@section('main')
<div class="panel panel-info">
	<!-- Default panel contents -->
	<div class="panel-heading">
		<h4>Sửa bài viết: {{$editService2->name}}</h4>
	</div>
	@if(Session::has('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{Session::get('success')}}</strong>
	</div>
	@endif	
	<div class="panel-body">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="">Tên bài viết *</label>
						<input type="text" name="title" class="form-control" id="title" value="{{$editService2->title}}" placeholder="Tên bài viết">
						@if($errors->has('title'))
						<div class="help-block">
							{{$errors->first('title')}}
						</div>
						@endif
					</div>
				</div>
			
		<div class="col-md-12">
			<div class="form-group">			
				<img width="100px" height="80px" src="{{url('uploads/service2')}}/{{$editService2->cover_image}}" alt="">

				<input type="file" name="file_upload">
			</div>	
	
			<div class="form-group">
				<label for="">Nội dung</label>

				<textarea name="content" id="desc" class="form-control" required="required" >
					{!! $editService2->content!!}
				</textarea>	
			</div>
			@if($errors->has('content'))
			<div class="helper-box">
				<p>{{ $errors->first('content') }}</p>
			</div>
			@endif
				<div class="form-group">
				<label for="">links</label>

				<input name="links" id="desc" class="form-control" required="required" >
					{!!$editService2->links!!}
			</div>
			@if($errors->has('links'))
			<div class="helper-box">
				<p>{{ $errors->first('links') }}</p>
			</div>
			@endif
	</div>
			@csrf
			<div class="modal-footer">
				<a href="{{route('service2')}}" class="btn btn-info" data-dismiss="modal">Hủy</a>
				<button type="submit" class="btn btn-primary">Lưu</button>
			</div>
		</form>	
	</div>
</div>	
@stop()