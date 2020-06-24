@extends('layouts.admin')
@section('title','Selection Tool: quản lý sản phẩm')
@section('links','selection tool')
@section('main')
<div class="col-md-5">
	<form action="{{route('SelectionToolAddProduct')}}" method="POST" class="" role="form" enctype="multipart/form-data">
		@if(isset($edit->id))
		<legend class="text-center">
			<a href="{{route('selectionToolProduct')}}" class="btn btn-md btn-primary pull-left">Trở lại</a>
			<span>
				Cập nhật sản phẩm
			</span>
		</legend>
		@else
		<legend>Thêm mới</legend>
		@endif
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="" for="">Tiêu đề</label>
					<input type="" name="title" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->title}}" @endif placeholder="Nhập tiêu đề" required>
					@if($errors->has('title'))
					<div class="help-block error">
						{{$errors->first('title')}}
					</div>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="" for="">Slug</label>
					<input type="" name="slug" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->slug}}" @endif placeholder="Nhập slug" required>
					@if($errors->has('slug'))
					<div class="help-block error">
						{{$errors->first('slug')}}
					</div>
					@endif
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<label class="" for="">Chọn hãng</label>
			<!-- <input type="" name="slug" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->slug}}" @endif placeholder="Nhập slug"> -->
			<select name="partner_id" class="form-control">
				@foreach($partners as $item)
				<?php
					$selected = ''; 
					if (isset($edit->item)) {
					$selected = $item->id == $edit->partners_id ? "selected" : '';
					}
				?>
				<option {{$selected}} value="{{$item->id}}">{{$item->title}} / {{$item->category()->title}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="">Description</label>
			<input type="" name="description" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->description}}" @endif placeholder="description">
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="">Sorder</label>
					<input type="number" name="sorder" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->sorder}}" @endif placeholder="Sorder">
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="">Price</label>
					<input type="number" name="price" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->price}}" @endif placeholder="price">
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="">Điện áp cung cấp</label>
					<input type="" name="voltage" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->voltage}}" @endif placeholder="Điện áp">
				</div>	
			</div>
		</div>
		<div class="form-group">
			<label for="">Đầu vào cảm biến</label>
			<input type="" name="sensor_input" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->sensor_input}}" @endif>
		</div>
		<div class="form-group">
			<label for="">Đầu ra điều khiển 1</label>
			<input type="" name="control_output1" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->control_output1}}" @endif>
		</div>
		<div class="form-group">
			<label for=""> Đầu ra điều khiển 2</label>
			<input type="" name="control_output2" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->control_output2}}" @endif>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="">Đầu ra cảnh báo</label>
					<input type="" name="warning_output" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->warning_output}}" @endif>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="">Chức năng đặc biệt</label>
					<input type="" name="special_functions" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->special_functions}}" @endif>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="">Kich thước</label>
					<input type="" name="size" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->size}}" @endif>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="">Phụ kiện</label>
			<input type="" name="accessories" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->accessories}}" @endif>
		</div>
		<div class="form-group">
			<label for="">Catalog</label>
			<input type="" name="catalog" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->catalog}}" @endif>
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
<div class="col-md-7">
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách sản phẩm</h3>
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
					<th>Danh mục</th>
					<th>Hãng</th>
					<th>Status</th>
					<th>Created by</th>
					<th>Created at</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($products as $itemProduct)
				<tr>
					<td>{{$itemProduct->id}}</td>
					<td>{{$itemProduct->title}}</td>
					<td>{{$itemProduct->slug}}</td>
					<td>{{$itemProduct->sorder}}</td>
					<td>{{$itemProduct->partners()->category()->title}}</td>
					<td>{{$itemProduct->partners()->title}}</td>
					<td>{{$itemProduct->status == 1 ? "enable" : "disable"}}</td>
					<td>{{$itemProduct->created_by}}</td>
					<td>{{$itemProduct->created_at}}</td>
					<td>
						<a href="{{route('editProductTool',['id'=>$itemProduct->id])}}" class="btn btn-xs btn-primary fa fa-edit"></a>
						<a href="{{route('deleteProductTool',['id'=>$itemProduct->id])}}" class="btn btn-xs btn-danger fa fa-trash"></a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		{{$products->links()}}
	</div>
</div>
</div>
@stop()