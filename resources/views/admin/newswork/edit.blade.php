@extends('layouts.admin')
@section('title','Cập nhật bài viết')
@section('links','Danh mục')
@section('main')
<div class="panel panel-info">
	<!-- Default panel contents -->
	<div class="panel-heading">
		<h4>Sửa bài viết: {{$editNewsWork->name}}</h4>
	</div>
	@if(Session::has('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{Session::get('success')}}</strong>
	</div>
	@endif	
	<div class="panel-body">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Tên bài viết *</label>
						<input type="text" name="name" class="form-control" id="name" value="{{$editNewsWork->name}}" placeholder="Tên bài viết">
						@if($errors->has('name'))
						<div class="help-block">
							{{$errors->first('name')}}
						</div>
						@endif
					</div>
				</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Danh mục</label>
							<select name="cat_work_id" id="inputParent_id" class="form-control">
								<option value="cat_work_id">Chọn danh mục</option>		
								@foreach($catwork as $cat)
								<?php $selected=$editNewsWork->cat_work_id==$cat->id ? 'selected' : '' ?>
								<option {{$selected}} value="{{$cat->id}}">{{$cat->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Địa điểm</label>
							<select name="add_work_id" id="inputParent_id" class="form-control">
								<option value="add_work_id">Chọn địa điểm</option>
								@foreach($addwork as $add)
								<?php $selected=$editNewsWork->add_work_id==$add->id ? 'selected' : '' ?>
								<option  {{$selected}} value="{{$add->id}}">{{$add->title}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>								
				<div class="row">
					<div class="col-md-2">
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
					<div class="col-md-2">
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
				
				
					<div class="col-md-2">
						<div class="form-group">
							<label for="">Thời gian làm việc</label>
							<select name="timework" id="inputExperience" class="form-control" required="required">
								<option value="fulltime">Fulltime</option>
								<option value="parttime">Parttime</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="">Chức vụ</label>
							<select name="level" id="inputExperience" class="form-control" required="required">
								<option value="Nhân viên">Nhân viên</option>
								<option value="Quản lý">Quản lý</option>
								<option value="Trưởng phòng">Trưởng phòng</option>
							</select>
						</div>
					</div>
		
				
					<div class="col-md-2">
						<div class="form-group">
							<label for="">Giới tính</label>
							<select name="gender" id="inputExperience" class="form-control" required="required">
								<option value="Nam">Nam</option>
								<option value="Nữ">Nữ</option>
								<option value="Khác">Khác</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="">Hạn cuối</label>
							<input type="date" name="deadline" class="form-control" id="" placeholder="Hạn nộp hồ sơ">
						</div>
					</div>
				</div>

			<div class="form-group">			
				<img width="200px" height="150px" src="{{url('uploads/works')}}/{{$editNewsWork->cover_image}}" alt="">

				<input type="file" name="file_upload">
			</div>	
			<div class="form-group">
				<label for="">Lương</label>
				<input type="text" name="salary" class="form-control" id="salary" value="{{$editNewsWork->salary}}" >

			</div>
			@if($errors->has('salary'))
			<div class="helper-box">
				<p>{{ $errors->first('salary') }}</p>
			</div>
			@endif
			<div class="form-group">
				<label for="">Nội dung</label>

				<textarea name="content" id="desc" class="form-control" required="required" >
					{!! $editNewsWork->content!!}
				</textarea>	
			</div>
			@if($errors->has('content'))
			<div class="helper-box">
				<p>{{ $errors->first('content') }}</p>
			</div>
			@endif
			<div class="form-group">
				<label for="">Quyền lợi</label>

				<textarea name="salary2" id="desc" class="form-control" required="required" >
					{!! $editNewsWork->salary2!!}
				</textarea>	
			</div>
			@if($errors->has('salary2'))
			<div class="helper-box">
				<p>{{ $errors->first('salary2') }}</p>
			</div>
			@endif
		
			<div class="form-group">
				<label for="">Yêu cầu</label>
				<textarea name="requirement" id="desc" class="form-control" rows="5" required="required" >
					{!! $editNewsWork->requirement!!}
				</textarea>	
			</div>
			@if($errors->has('requirement'))
			<div class="helper-box">
				<p>{{ $errors->first('requirement') }}</p>
			</div>
			@endif

			@csrf
			<div class="modal-footer">
				<a href="{{route('news-work')}}" class="btn btn-info" data-dismiss="modal">Hủy</a>
				<button type="submit" class="btn btn-primary">Lưu</button>
			</div>
			<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
		</form>	
	</div>
</div>	
@stop()