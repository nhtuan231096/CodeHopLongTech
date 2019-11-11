@extends('layouts.admin')
@section('title','Quản lý điều khoản')
@section('links','Điều khoản')
@section('main')

@if(Session::has('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{Session::get('success')}}
	</div>
@endif
<div class="row">
	<div class="col-md-4">
		<form action="" method="POST" role="form">	
			<legend>
				{{(isset($data_edit->name)) ? "Cập nhật điều khoản" : "Thêm mới điều khoản"}}
			</legend>	
			<input type="hidden" name="id" value="{{isset($data_edit->id) ? ($data_edit->id) : ''}}">				
			<div class="form-group">
				<label for="">Tên điều khoản</label>
				<input name="name" class="form-control" id="name" value="{{isset($data_edit->name) ? ($data_edit->name) : ''}}" placeholder="Nhập nội dung.." required>
			</div>
			<div class="form-group">
				<label for="">Loại điều khoản</label>
				<select name="type_terms" id="inputType_terms" class="form-control" required>
					<option value="">Loại điều khoản</option>
					@foreach($type_terms as $key=>$item)
					<option value="{{$key}}">{{$item}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="">Nội dung</label>
				<textarea name="content" style="height: 600px" cols="30" rows="10">{{isset($data_edit->content) ? ($data_edit->content) : ""}}</textarea>
			</div>

			<div class="modal-footer">
				<input type="submit" class="btn btn-primary btn-md" value="Lưu">
			</div>
			<input type="hidden" name="created_by" value="{{Auth::guard('admin')->user()->username}}">
			@csrf
		</form>
	</div>
	<div class="col-md-8">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title" style="font-weight: bold;font-size: 16px">Danh sách điều khoản</h3>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Điều khoản</th>
							<th>Nội dung điều khoản</th>
							<!-- <th>Trạng thái</th> -->
							<th>Ngày tạo</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($datas as $data)
						<tr>
							<td>{{$data->id}}</td>
							<td>{{$data->name}}</td>
							<td>{!!$data->content!!}</td>
							<!-- <td>{{$data->status == 1 ? "enable" : "disable"}}</td> -->
							<td>{{$data->created_at}}</td>
							<td>
								<a href="{{route('terms',['id'=>$data->id])}}" class="fa fa-edit btn btn-xs btn-info"></a>
								<a href="{{route('terms_del',['id'=>$data->id])}}" class="fa fa-trash btn btn-xs btn-danger"></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


@stop()