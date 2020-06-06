@extends('layouts.admin')
@section('title','Danh sách banner')
@section('links','banner')
@section('main')
<div class="col-md-3">
	<form action="" method="POST" class="" role="form" enctype="multipart/form-data">
		<legend>Thêm mới</legend>
		<div class="form-group">
			<label class="" for="">Tiêu đề</label>
			<input type="" name="name" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->name}}" @endif placeholder="Nhập tiêu đề">
			@if($errors->has('name'))
			<div class="help-block error">
				{{$errors->first('name')}}
			</div>
			@endif
		</div>
		<div class="form-group">
			<label for="">Danh mục ảnh</label>
			<select name="type" id="input" class="form-control">
				@if(isset($edit->id))
					@if($edit->type=='banner')
					<option selected value="banner">Banner</option>
					<option value="company">Hình ảnh hoạt động công ty</option>
					@else
					<option selected value="company">Hình ảnh hoạt động công ty</option>
					<option value="banner">Banner</option>
					@endif
				@else
					<option value="banner">Banner</option>
					<option value="company">Hình ảnh hoạt động công ty</option>
				@endif
			</select>
		</div>	
		<div class="form-group">
			<label for="">Liên kết</label>
			<input type="" name="links" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->links}}" @endif placeholder="Liên kết">
		</div>	
		<div class="form-group">
			<label for="">Ảnh</label>
			<div class="clearfix"></div>
			@if(isset($edit->id))
				<img width="100px" src="{{url('uploads/banner')}}/{{$edit->cover_image}}" alt="">
			@endif
			<input type="file" name="file_upload" class="form-control" id="" @if(empty($edit->id)) required @endif>
		</div>			
		<div class="form-group">
			<label for="">Sorder</label>
			<input type="" name="sorder" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->sorder}}" @endif placeholder="Sorder">
		</div>		
		@csrf
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<div class="col-md-9">
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách banner</h3>
	</div>
	<div class="panel-body">
		@if(Session::has('success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('success')}}</strong>
		</div>
		@endif	
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tiêu đề</th>
					<th>Ảnh</th>
					<th>Danh mục ảnh</th>
					<th>Sorder</th>
					<th>Liên kết</th>
					<th>Trạng thái</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($banners as $banner)
				<tr>
					<td>{{$banner->id}}</td>
					<td>{{$banner->name}}</td>
					<td>
						<img width="50px" src="{{url('uploads/banner')}}/{{$banner->cover_image}}" alt="">
					</td>
					<td>{{$banner->type}}</td>
					<td>
						<form action="{{route('update-banner',['id'=>$banner['id']])}}" method="POST" class="form-inline" role="form">
						
							<div class="form-group">
								<label class="sr-only" for="">label</label>
								<input style="width: 50px;" type="" class="form-control" name="sorder" value="{{$banner->sorder}}" id="" placeholder="">
							</div>
						@csrf()
							
						
							<button type="submit" class="fa fa-save btn btn-primary"></button>
						</form>
					</td>
					<td>{{$banner->links}}</td>
					<td>{{$banner->status}}</td>
					<td>
						<a href="{{route('editBanner',['id'=>$banner->id])}}" class="btn btn-primary fa fa-edit"></a>
						<a href="{{route('delBanner',['id'=>$banner->id])}}" class="btn btn-danger fa fa-trash"></a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>
@stop()