@extends('layouts.admin')
@section('title','Selection Tool: quản lý hãng')
@section('links','selection tool')
@section('main')
<div class="col-md-3">
	<form action="{{route('SelectionToolAddPartners')}}" method="POST" class="" role="form" enctype="multipart/form-data">
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
		<div class="form-group">
			<label class="" for="">Chọn danh mục</label>
			<select name="category_id" class="form-control" required>
				<option value="">Chọn danh mục</option>
				@foreach($category as $itemCate)
				<?php
					$selected = ''; 
					if (isset($edit->category_id)) {
					$selected = $itemCate->id == $edit->category_id ? "selected" : '';
					}
				?>
				<option {{$selected}} value="{{$itemCate->id}}">{{$itemCate->title}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="">Sorder</label>
			<input type="number" name="sorder" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->sorder}}" @endif placeholder="Sorder">
		</div>	
		<div class="form-group">
			<label for="">Description</label>
			<input type="" name="description" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->description}}" @endif placeholder="description">
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
		<h3 class="panel-title">Danh sách hãng</h3>
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
						<input class="form-control" name="title" placeholder="Nhập tên hãng">
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
					<th>Category id</th>
					<th>Status</th>
					<th>Created by</th>
					<th>Created at</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($partners as $item)
				<tr>
					<td>{{$item->id}}</td>
					<td>{{$item->title}}</td>
					<td>{{$item->slug}}</td>
					<td>{{$item->sorder}}</td>
					<td>{{$item->category_id}}</td>
					<td>{{$item->status == 1 ? "enable" : "disable"}}</td>
					<td>{{$item->created_by}}</td>
					<td>{{$item->created_at}}</td>
					<td>
						<a href="{{route('editPartnersTool',['id'=>$item->id])}}" class="btn btn-xs btn-primary fa fa-edit"></a>
						<a href="{{route('deletePartnersTool',['id'=>$item->id])}}" class="btn btn-xs btn-danger fa fa-trash"></a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		{{$partners->links()}}
	</div>
</div>
</div>
@stop()