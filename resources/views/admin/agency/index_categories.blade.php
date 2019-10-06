@extends('layouts.admin')
@section('title','Danh mục bài viết dành cho đại lý')
@section('links','agency')
@section('main')

@if(Session::has('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{Session::get('success')}}
	</div>
	@endif
	@if($errors->has('name') || $errors->has('slug'))
	<script type="text/javascript">
		alert('Danh mục hoặc đường dẫn tĩnh đã tồn tại');
	</script>
	@endif
	<div class="row">
		<div class="col-md-4">
			@if(!isset($data_edit))
			<form action="{{route('addCategoryAgency')}}" method="POST" role="form">						
				<div class="form-group">
					<label for="">Tên danh mục</label>
					<input name="name" class="form-control" id="name" placeholder="Nhập nội dung.." required>
				</div>
				<div class="form-group">
					<label for="">Đường dẫn tĩnh</label>
					<input name="slug" class="form-control" id="slug" placeholder="Nhập nội dung.." required>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary btn-md" value="Lưu">
				</div>
				<input type="hidden" name="created_by" value="{{Auth::guard('admin')->user()->username}}">
				@csrf
			</form>
			@else
			<form action="{{route('saveCategoryAgency')}}" method="POST" role="form">		
				<input type="hidden" name="id" value="{{$data_edit->id}}">				
				<div class="form-group">
					<label for="">Tên danh mục</label>
					<input name="name" class="form-control" id="name" value="{{$data_edit->name}}" placeholder="Nhập nội dung.." required>
				</div>
				<div class="form-group">
					<label for="">Đường dẫn tĩnh</label>
					<input name="slug" class="form-control" id="slug" value="{{$data_edit->slug}}" placeholder="Nhập nội dung.." required>
				</div>
				<div class="form-group">
					<label for="">Trạng thái</label>	
					<select name="status" id="inputStatus" class="form-control" required="required">
						@if($data_edit->status==1)
						<option value="1" selected>Enable</option>
						<option value="0">Disable</option>
						@elseif($data_edit->status==0)
						<option value="1">Enable</option>
						<option value="0" selected>Disable</option>
						@endif
					</select>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary btn-md" value="Lưu">
				</div>
				<input type="hidden" name="created_by" value="{{Auth::guard('admin')->user()->username}}">
				@csrf
			</form>
			@endif
		</div>
		<div class="col-md-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Danh sách danh mục</h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Tên danh mục</th>
								<th>Đường dẫn tĩnh</th>
								<th>Trạng thái</th>
								<th>Người tạo</th>
								<th>Ngày tạo</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($category as $item)
							<tr>
								<td>{{$item->id}}</td>
								<td>{{$item->name}}</td>
								<td>{{$item->slug}}</td>
								<td><span class="label {{$item->status == 1 ? 'label-info' : 'label-danger'}}">{{$item->status == 1 ? "enable" : "disable"}}</span></td>
								<td>{{$item->created_by}}</td>
								<td>{{$item->created_at}}</td>
								<td>
									<a href="{{route('editAgencyCategory',['id'=>$item->id])}}" class="btn-info btn btn-xs fa fa-edit"></a>
									<a href="{{route('deleteAgencyCategory',['id'=>$item->id])}}" class="btn-danger btn btn-xs fa fa-trash"></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{$category->links()}}
				</div>
			</div>
		</div>
	</div>
	
	
	@stop()