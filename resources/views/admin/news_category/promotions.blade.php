@extends('layouts.admin')
@section('title','Quản lý thông tin khuyến mãi')
@section('links','Tin tức')
@section('main')
<div class="col-md-4">
	<div class="panel panel-info">
		<div class="panel-body">
			<form action="" method="POST" role="form" style="margin-bottom: 15px">
				<legend>Chọn khuyến mại được hiển thị</legend>
				<select name="promotions" id="input" class="form-control" required="required">
					@foreach($datas as $data)
					<option value="{{$data->id}}">{{$data->title}}</option>
					@endforeach
				</select>
				@csrf
				<button type="submit" class="btn btn-primary" style="margin-top: 5px">Lưu</button>
			</form>
			<form action="" method="POST" role="form">
				<legend>Thêm mới</legend>
			
				<div class="form-group">
					<label for="">Tiêu đề</label>
					<input type="text" class="form-control" name="title" id="" placeholder="Nhập tiêu đề.." required>
				</div>
				<div class="form-group">
					<label for="">Liên kết</label>
					<input type="text" class="form-control" name="links" id="" placeholder="Nhập links.." required>
				</div>
			
				
				@csrf
				<button type="submit" class="btn btn-primary">Lưu</button>
			</form>
		</div>
	</div>
</div>
<div class="col-md-8">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-info">Danh sách liên kết khuyến mại</h4>
		</div>
		<div class="panel-body">
		@if(Session::has('success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Success: </strong> {{Session::get('success')}}
			</div>
		@endif
		@if(Session::has('error'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Error: </strong> {{Session::get('error')}}
			</div>
		@endif
		<form action="" method="GET" class="form-inline" role="form">
		
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="" name="search" class="form-control" id="" placeholder="Nhập tiêu đề..">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary fa fa-search"></button>
		</form>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tiêu đề</th>
						<th>Liên kết</th>
						<th>Trạng thái</th>
						<th>Ngày tạo</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($datas as $data)
					<tr>
						<td>{{$data->id}}</td>
						<td>{{$data->title}}</td>
						<td>{{$data->links}}</td>
						<td>{{$data->status == 1 ? "enable" : "disable"}}</td>
						<td>{{$data->created_at}}</td>
						<td>
							<a href="{{route('delPromotion',['id'=>$data->id])}}" class="btn btn-xs btn-danger fa fa-trash"></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$datas->links()}}
		</div>
	</div>
</div>
@stop()