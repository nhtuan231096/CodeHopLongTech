@extends('layouts.admin')
@section('title','Selection Tool: quản lý danh mục')
@section('links','selection tool')
@section('main')
<div class="col-md-3">
	<form action="{{route('SelectionToolAddCate')}}" method="POST" class="" role="form" enctype="multipart/form-data">
		<legend>Thêm mới</legend>
		<div class="form-group">
			<label class="" for="">Tiêu đề</label>
			<input type="" name="title" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->title}}" @endif placeholder="Nhập tiêu đề" required>
			@if($errors->has('title'))
			<div class="help-block error">
				{{$errors->first('title')}}
			</div>
			@endif
		</div>
		<div class="form-group">
			<label class="" for="">Slug</label>
			<input type="" name="slug" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->slug}}" @endif placeholder="Nhập slug" required>
			@if($errors->has('slug'))
			<div class="help-block error">
				{{$errors->first('slug')}}
			</div>
			@endif
		</div>
		@if( !isset($edit->id) || $edit->parent_id != 0 )
		<div class="form-group">
			<label class="" for="">Chọn danh mục cha</label>
			<!-- <input type="" name="slug" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->slug}}" @endif placeholder="Nhập slug"> -->
			<select name="parent_id" class="form-control">
				<option value="0">Danh mục cha</option>
				@foreach($parent as $itemParent)
				<?php
					$selected = ''; 
					if (isset($edit->parent_id)) {
					$selected = $itemParent->id == $edit->parent_id ? "selected" : '';
					}
				?>
				<option {{$selected}} value="{{$itemParent->id}}">{{$itemParent->title}}</option>
				@endforeach
			</select>
		</div>
		@endif
		<div class="form-group">
			<label for="">Sorder</label>
			<input type="number" name="sorder" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->sorder}}" @endif placeholder="Sorder">
		</div>	
		<div class="form-group">
			<label for="">Description</label>
			<input type="" name="description" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->description}}" @endif placeholder="description">
		</div>
		<div class="form-group">
			<label for="">Content</label>
			<textarea class="form-control" name="content" id="" cols="70" rows="20" placeholder="Content">
				@if(isset($edit->id)) {{$edit->description}} @endif
			</textarea>
		</div>			
		@csrf
		@if(isset($edit->id))
		<input type="hidden" name="id" value="{{$edit->id}}">
		@endif
		<button type="submit" class="btn btn-primary">Save</button>
	</form>
</div>
<div class="col-md-9">
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách danh mục</h3>
	</div>
	<div class="panel-body">
		@if(Session::has('success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('success')}}</strong>
		</div>
		@endif	
		@if(Session::has('error'))
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('error')}}</strong>
		</div>
		@endif	
		<div class="row">
			<div class="col-md-6">
				<form action="" method="GET" class="form-inline" role="form" style="margin-bottom:15px">
					
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						<input class="form-control" name="title" placeholder="Nhập tên danh mục">
					</div>
				
					
				
					<button type="submit" class="btn btn-primary">Search</button>
				</form>
			</div>
		</div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tiêu đề</th>
					<th>Slug</th>
					<th>Sorder</th>
					<th>Parent id</th>
					<th>Status</th>
					<th>Created by</th>
					<th>Created at</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($category as $itemCategory)
				<tr>
					<td>{{$itemCategory->id}}</td>
					<td>{{$itemCategory->title}}</td>
					<td>{{$itemCategory->slug}}</td>
					<td>{{$itemCategory->sorder}}</td>
					<td>{{$itemCategory->parent_id}}</td>
					<td>{{$itemCategory->status == 1 ? "enable" : "disable"}}</td>
					<td>{{$itemCategory->created_by}}</td>
					<td>{{$itemCategory->created_at}}</td>
					<td>
						<a href="{{route('editCategoryTool',['id'=>$itemCategory->id])}}" class="btn btn-xs btn-primary fa fa-edit"></a>
						<a href="{{route('deleteCategoryTool',['id'=>$itemCategory->id])}}" class="btn btn-xs btn-danger fa fa-trash"></a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		{{$category->links()}}
	</div>
</div>
</div>
@stop()