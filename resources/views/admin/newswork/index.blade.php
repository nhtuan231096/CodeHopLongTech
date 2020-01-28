@extends('layouts.admin')
@section('title','Thông tin tuyển dụng')
@section('links','Tạo mới hồ sơ')
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
												<input type="text" name="name" class="form-control" id="" placeholder="Tên bài viết" required>
												@if($errors->has('name'))
												<div class="help-block">
													{{$errors->first('name')}}
												</div>
												@endif
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="">Ảnh *</label>
										<input type="file" name="upload_file" class="form-control" id="upload_file" placeholder="" required>		
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Danh mục</label>
												<select name="cat_work_id" id="inputParent_id" class="form-control">
													<option value="cat_work_id">Chọn danh mục</option>		
													@foreach($catwork as $cat)
													<option value="{{$cat->id}}">{{$cat->name}}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Địa điểm</label>
												<select name="add_work_id" id="inputParent_id" class="form-control">
													<option value="add_work_id">Chọn địa điểm</option>
													@foreach($addwork as $add)
													<option value="{{$add->id}}">{{$add->title}}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>								
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Kinh nghiệm</label>
												<select name="experience" id="inputExperience" class="form-control" required="required">
													<option value="Không yêu cầu">Không yêu cầu</option>
													<option value="Dưới 1 năm">Dưới 1 năm</option>
													<option value="1 năm"> 1 năm</option>
													<option value="2 năm"> 2 năm</option>
													<option value="Trên 2 năm"> Trên 2 năm</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Trình độ</label>
												<select name="education" id="inputExperience" class="form-control" required="required">
													<option value="Phổ thông">Phổ thông</option>
													<option value="Trung cấp">Trung cấp</option>
													<option value="Cao đẳng"> Cao đẳng</option>
													<option value="Đại học"> Đại học</option>
													<option value="Trên đại học"> Trên đại học</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Thời gian làm việc</label>
												<select name="timework" id="inputExperience" class="form-control" required="required">
													<option value="Fulltime">Fulltime</option>
													<option value="Parttime">Parttime</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Chức vụ</label>
												<select name="level" id="inputExperience" class="form-control" required="required">
													<option value="Nhân viên">Nhân viên</option>
													<option value="Quản lý">Quản lý</option>
													<option value="Trưởng phòng">Trưởng phòng</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Giới tính</label>
												<select name="gender" id="inputExperience" class="form-control" required="required">
													<option value="Nam">Nam</option>
													<option value="Nữ">Nữ</option>
													<option value="Khác">Khác</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Hạn cuối</label>
												<input type="date" name="deadline" class="form-control" id="" placeholder="Hạn nộp hồ sơ">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="">Lương</label>
										<input  class="form-control" type="text" name="salary" placeholder="Lương">
									</div>
									<div class="form-group">
										<label for="">Nội dung</label>
										<textarea type="text" name="content" class="form-control" id="" placeholder="Nội dung"></textarea>
									</div>

									<div class="form-group">
										<label for="">Quyền lợi </label>
										<textarea type="text" name="salary2" class="form-control" id="" placeholder="Quyền lợi"></textarea>
									</div>
									<div class="form-group">
										<label for="">Yêu cầu</label>
										<textarea type="text" name="requirement" class="form-control" id="" placeholder="Yêu cầu"></textarea>
									</div>
									<input type="hidden" name="created_by" value="{{Auth::Guard('admin')->user()->username}}">
									<input type="hidden" name="status" value="enable">
									@csrf
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Save changes</button>
									</div>
									<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
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
					<th>Danh mục</th>
					<th>Địa điểm</th>
					<th>Lương</th>
					<th></th>
					<th>Trạng thái</th>
					<th>Ngày tạo</th>
					<th>Tùy chỉnh</th>

				</tr>
			</thead>
			<tbody>
				@foreach($newswork as $key=>$news)
				<tr>
					<td>{{$key+1}}</td>
					<td width="350px;">{{$news->name}}</td>
					<td><img width="130px" height="80px" src="{{url('uploads/works')}}/{{$news->cover_image}}" alt=""></td>
					<td>{{$news->catWork->name}}</td>
					<td>{{$news->addWork->title}}</td>
					<td>{{$news->salary}} </td>
					<td>
						@if($news->status=='enable')
						<td>
							<div class="label label-primary">{{$news->status}}</div></td>
							@else
							<td>
								<div class="label label-danger">{{$news->status}}</div></td>
								@endif
							</td>

							<td>{{date('h:m / d-m-Y',strtotime($news->created_at ))}}</td>
							<td>
								<a class="btn btn-xs btn-primary" href="{{route('editNewsWork',['id'=>$news->id])}}">Sửa</a>
								<a class="btn btn-xs btn-danger" onclick="return confirm('Bạn chắc chắn chứ?')" href="{{route('deleteNewsWork',['id'=>$news->id])}}">Xóa</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{$newswork->links()}}
			</div>
		</div>
		@stop()

