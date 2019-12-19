@extends('layouts.admin')
@section('title','Danh mục tuyển dụng')
@section('links','Danh mục')
@section('main')
<div class="panel panel-info">
	<!-- Default panel contents -->
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-2">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addCategory">
					Thêm danh mục
				</button>
				<!-- Modal -->
				<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h2 class="modal-title" id="exampleModalLabel">Thêm mới danh mục</h2>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">

								<form action="" method="POST" role="form">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Tên danh mục *</label>
												<input type="text" name="name" class="form-control" id="name" placeholder="Tên danh mục" required>
												@if($errors->has('title'))
												<div class="help-block">
													{{$errors->first('title')}}
												</div>
												@endif
											</div>
										</div>
										<div class="col-md-6">
											<input type="hidden" name="created_by" value="{{Auth::Guard('admin')->user()->username}}">
											<div class="form-group">
												<label for="">Đường dẫn tĩnh *</label>
												<input type="text" name="slug" class="form-control" id="slug" placeholder="Đường dẫn tĩnh" required>
											</div>
										</div>
										
									</div>
									<input type="hidden" name="status" value="enable">
									@csrf
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Save changes</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-10">
				<form action="" method="GET" class="form-inline" role="form">

					<div class="form-group">
						<input type="" class="form-control" name="search" id="" placeholder="Tên danh mục cần tìm..">
					</div>
					<div class="form-group">
						<select name="created_by" id="inputCreared_by" class="form-control">
							<option value="">Người tạo</option>
							@foreach($users as $user)
							<option value="{{$user->username}}">{{$user->username}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<select name="status" id="inputStatus" class="form-control">
							<option value="">Trạng thái</option>
							<option value="enable">Enable</option>
							<option value="disable">Disable</option>
						</select>
					</div>
					@csrf

					<button type="submit" class="btn btn-info">Tìm kiếm</button>
				</form>
			</div>	
		</div>	
	</div>
	@if(Session::has('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{Session::get('success')}}</strong>
	</div>
	@endif	
	<div class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Modal body text goes here.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save changes</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên danh mục</th>
					<th>Slug</th>
					<th>Người tạo</th>
					<th>Trạng thái</th>
					<th>Ngày tạo</th>
					<th>Tùy chỉnh</th>
				</tr>
			</thead>
			<tbody>
				@foreach($catwork as $key => $cat)
				<tr>
					<td>{{$key+1}}</td>
					<td>{{$cat->name}}</td>
					<td>{{$cat->slug}}</td>
					<td>{{$cat->created_by}}</td>

					@if($cat->status=='enable')
					<td><div class="label label-primary">{{$cat->status}}</div></td>
					@else
					<td><div class="label label-danger">{{$cat->status}}</div></td>
					@endif
					
					<td>{{date('h:m / d-m-Y',strtotime($cat->created_at ))}}</td>
					<td>
						<a class="btn btn-xs btn-primary" href="{{route('editCatWork',['id'=>$cat->id])}}">Sửa</a>
						<a class="btn btn-xs btn-danger" onclick="return confirm('Bạn chắc chắn chứ?')" href="{{route('deleteCatWork',['id'=>$cat->id])}}">Xóa</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$catwork->links()}}
	</div>
</div>
@stop()