@extends('layouts.admin')
@section('title','Tin tức dịch vụ')
@section('links','Tạo mới tin tức')
@section('main')
<div class="panel panel-info">
	<!-- Default panel contents -->
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-2">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addCategory">
					Thêm mới
				</button>
				<!-- Modal -->
				<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h2 class="modal-title" id="exampleModalLabel">Thêm mới bài viết</h2>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">

								<form action="" method="POST" role="form" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="">Tên bài viết *</label>
												<input type="text" name="title" class="form-control" id="" placeholder="Tên bài viết" required value="{{old('title')}}" >
												@if($errors->has('title'))
												<div class="help-block">
													{{$errors->first('title')}}
												</div>
												@endif
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="">Ảnh *</label>
										<input type="file" name="upload_file" class="form-control" id="upload_file" placeholder="" required>		
									</div>	
									<div class="form-group">
										<label for="">Nội dung</label>
										<textarea type="text" name="content"  id="content"class="form-control" id="" placeholder="Nội dung"></textarea>
									</div>
									<div class="form-group">
										<label for="">Links</label>
										<input type="text" name="links" class="form-control" id="" placeholder="Links">
									</div>
									
									<input type="hidden" name="created_by" value="{{Auth::Guard('admin')->user()->username}}">
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
						<input type="" class="form-control" name="search" id="" placeholder="Tên bài viết cần tìm..">
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
					<th>Tên bài viết</th>
					<th>Ảnh</th>	
					<th>Links</th>
					<th>Người tạo</th>	
					<th></th>
					<th>Trạng thái</th>
					<th>Ngày tạo</th>
					<th>Tùy chỉnh</th>
				</tr>
			</thead>
			<tbody>
				@foreach($service2 as $ser2)
				<tr>
					<td>{{$ser2->id}}</td>
					<td width="300px">{{$ser2->title}}</td>
					<td><img width="100px" height="60px" src="{{url('uploads/service2')}}/{{$ser2->cover_image}}" alt=""></td>

					
					<td>{!!$ser2->links!!}</td>
					<td>{{$ser2->created_by}}</td>
					<td>
						@if($ser2->status=='enable')
						<td>
							<div class="label label-primary">{{$ser2->status}}</div></td>
							@else
							<td>
								<div class="label label-danger">{{$ser2->status}}</div></td>
								@endif
							</td>

							<td>{{date('h:m / d-m-Y',strtotime($ser2->created_at ))}}</td>
							<td>
								<a class="btn btn-xs btn-primary" href="{{route('editService2',['id'=>$ser2->id])}}">Sửa</a>
								<a class="btn btn-xs btn-danger" onclick="return confirm('Bạn chắc chắn chứ?')" href="{{route('deleteService2',['id'=>$ser2->id])}}">Xóa</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{$service2->links()}}
			</div>
		</div>
		@stop()
	