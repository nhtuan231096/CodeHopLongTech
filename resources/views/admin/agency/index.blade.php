@extends('layouts.admin')
@section('title','Bài viết')
@section('links','Quản lý bài viết')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-3">
			<a href="{{route('agency_add_posts')}}" class="btn btn-md btn-primary">Thêm bài viết</a>
		</div>
		<div class="col-md-9">
			<form action="" method="GET" class="form-inline text-center" role="form">
		
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input name="title" class="form-control" id="" placeholder="Nhập tiêu đề cần tìm..">
			</div>
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<select name="status" id="input" class="form-control">
					<option value="">Chọn trạng thái</option>
					<option value="1">Enable</option>
					<option value="0">Disable</option>
				</select>
			</div>
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input name="created_by" class="form-control" id="" placeholder="Người tạo..">
			</div>

		
			
		
			<button type="submit" class="btn btn-primary">Tìm kiếm</button>
		</form>
		</div>
		</div>
	</div>
	<div class="panel-body">
		@if(Session::has('success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('success')}}</strong> 
		</div>
		@elseif(Session::has('error'))
			<div class="alert alert-warning">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{Session::get('error')}}</strong> 
			</div>
		@endif
		
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tiêu đề</th>
					<th>Ảnh đại diện</th>
					<th>Danh mục</th>
					<th>Trạng thái</th>
					<th>Người tạo</th>
					<th>Ngày tạo</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($datas as $item)
				<tr>
					<td>{{$item->id}}</td>
					<td>{{$item->title}}</td>
					<td>
						<img width="80px" height="50px" src="{{url('uploads/posts')}}/{{$item->cover_image}}" alt="{{$item->cover_image}}">
					</td>
					<td>{{$item->category->name}}</td>
					<td><span class="label {{$item->status == 1 ? 'label-primary' : 'label-danger'}}">{{$item->status == 1 ? "enable" : "disable"}}</span></td>
					<td>{{$item->created_by}}</td>
					<td>{{$item->created_at}}</td>
					<td>
						<a href="{{route('agency_edit_post',['id'=>$item->id])}}" class="fa fa-edit btn btn-xs btn-info"></a>
						<a href="{{route('agency_delete_post',['id'=>$item->id])}}" class="fa fa-trash btn btn-xs btn-danger"></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$datas->links()}}
	</div>
</div>
@stop()