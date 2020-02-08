@extends('layouts.admin')
@section('title','Danh mục sản phẩm')
@section('links','Danh mục')
@section('main')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
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

								<form action="" method="POST" role="form" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Tên danh mục *</label>
												<input type="text" name="title" class="form-control" id="name" placeholder="Tên danh mục" required>
												@if($errors->has('title'))
												<div class="help-block">
													{{$errors->first('title')}}
												</div>
												@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Đường dẫn tĩnh *</label>
												<input type="text" name="slug" class="form-control" id="slug" placeholder="Đường dẫn tĩnh" required>
											</div>
										</div>
									</div>
									<div class="form-group">
										<style>
											.chosen-container-single .chosen-single {
												height: 34px;
												width: 870px;
											}
											.chosen-container.chosen-with-drop .chosen-drop {
												width: 870px;
											}
											.chosen-container-single .chosen-search input[type=text] {
												width: 860px;
											}
											.chosen-container .chosen-results li.active-result {
												width: 870px !important;
											}
											.chosen-container-single .chosen-single span {
												padding: 5px;
											}
											.chosen-container .chosen-results {
												overflow-y: hidden;
											}
											.chosen-container-single .chosen-single div b {
												width: 86%;
											}
											.chosen-container-active.chosen-with-drop .chosen-single {
												background: #fff;
											}
										</style>
										<div class="form-group">
											<div style="width:100%;margin:0px auto;">
												<select name="category_id" id="inputCategory_id"  class="chosen form-control form-control" style="width:100px;">
													<option value="">Danh mục cha</option>
													@foreach($parent as $categ)
													<option value="{{$categ->id}}">{{$categ->title}}</option>
													@endforeach
												</select>
											</div>
											<script type="text/javascript">
												$(".chosen").chosen();
											</script>
										</div>
									</div>
									<div class="form-group">
										<label for="">Mô tả</label>
										<textarea type="text" name="description" class="form-control" id="content" placeholder="Mô tả"></textarea>
									</div>
									<div class="form-group">
										<label for="">Nội dung</label>
										<textarea type="text" name="content" class="form-control" id="content" placeholder="Nội dung"></textarea>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Meta title</label>
												<input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Meta title">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">meta keywords</label>
												<input type="text" name="meta_keywords" class="form-control" id="meta_keywords" placeholder="meta keywords">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Meta description</label>
												<input type="text" name="meta_description" class="form-control" id="meta_description" placeholder="meta description">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">sorder</label>
												<input type="number" name="sorder" class="form-control" id="" placeholder="Sorder">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Ảnh *</label>
												<input type="file" name="upload_file" class="form-control" id="upload_file" placeholder="" required>
												<input type="hidden" name="created_by" value="{{Auth::Guard('admin')->user()->username}}">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Ảnh đại diện *</label>
												<input type="file" name="upload_file2" class="form-control" id="upload_file2" placeholder="" required>
												<input type="hidden" name="created_by" value="{{Auth::Guard('admin')->user()->username}}">
											</div>
											
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Độ ưu tiên</label>
												<select name="priority" class="form-control">
													<option value="1">Nhóm 1</option>
													<option value="2">Nhóm 2</option>
												</select>
											</div>
										</div>
									</div>
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
					<th>Ảnh</th>
					<th>Ảnh đại diện</th>
					<th>ID Danh mục cha</th>
					<th>Ưu tiên</th>
					<th>Sorder</th>
					<th>Thêm</th>
					<th>Trạng thái</th>
					<th>Ngày tạo</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($cates as $cate)
				<tr>
					<td>{{$cate->id}}</td>
					<td>{{$cate->title}}</td>
					<td>{{$cate->slug}}</td>
					<td>{{$cate->created_by}}</td>
					<td>
						<img width="50px" src="{{url('uploads/category')}}/{{$cate->cover_image}}" alt="">
					</td>
					<td>
						<img width="50px" src="{{url('uploads/category')}}/{{$cate->cover_image_2}}" alt="">
					</td>
					<td>{{$cate->parent_id}}</td>
					<td>{{$cate->priority}}</td>
					<td>
						<form action="{{route('update-cate',['id'=>$cate['id']])}}" method="POST" class="form-inline" role="form">
							
							<div class="form-group">
								<label class="sr-only" for="">label</label>
								<input style="width: 60px;" type="number" class="form-control" name="sorder" value="{{$cate->sorder}}" id="" placeholder="">
							</div>
							@csrf()
							
							
							<button type="submit" class="fa fa-save btn btn-primary"></button>
						</form>
					</td>
					<td>
						<a href="{{route('list_cat_1',['id'=>$cate->id])}}"  onclick="return confirm('Bạn có chắn chắn muốn thêm mới danh muc???')" class="btn btn-xs btn-success fa fa-plus"></a>
					</td>
					@if($cate->status=='enable')
					<td><div class="label label-primary">{{$cate->status}}</div></td>
					@else
					<td><div class="label label-danger">{{$cate->status}}</div></td>
					@endif
					<td>{{$cate->created_at}}</td>
					<td>
						<a class="btn btn-xs btn-primary" href="{{route('editCategory',['id'=>$cate->id])}}">Sửa</a>
						<a class="btn btn-xs btn-danger" onclick="return confirm('Bạn chắc chắn chứ?')" href="{{route('deleteCategory',['id'=>$cate->id])}}">Xóa</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
		{{$cates->appends(request()->only('search','created_by','parent_id','status'))->links()}}
	</div>
</div>
@stop()