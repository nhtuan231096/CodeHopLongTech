@extends('layouts.admin')
@section('title','Quản lý đánh giá sản phẩm')
@section('links','review')
@section('main')
<div class="">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title" style="font-weight: bold;margin-bottom: 10px">Danh sách bình luận</h3>
			<form action="" method="GET" class="form-inline" role="form">
			
				<div class="form-group">
					<label class="sr-only" for="">label</label>
					<input type="" class="form-control" name="name" placeholder="Tìm theo tên">
				</div>
				<div class="form-group">
					<label class="sr-only" for="">label</label>
					<select name="status" id="input" class="form-control">
						<option value="">Trạng thái</option>
						<option value="1">Đã trả lời</option>
						<option value="0">Chưa trả lời</option>
					</select>
				</div>
			
				
			
				<button type="submit" class="btn btn-primary">Tìm kiếm</button>
			</form>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
			@if(Session::has('success'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>{{Session::get('success')}}</strong>
				</div>
			@endif
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên</th>
						<!-- <th>Email</th> -->
						<th>Bình luận</th>
						<th>Sản phẩm</th>
						<th>Trạng thái</th>
						<th>Ngày tạo</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($comment as $item)
					<tr>
						<td>{{$item->id}}</td>
						<td>{{$item->name}}</td>
						<!-- <td>{{$item->email}}</td> -->
						<td>{{$item->comment}}</td>
						<td>{{isset($item->product->title) ? $item->product->title : ''}}</td>
						<td>
							<form action="{{route('updateComment')}}" method="POST" class="form-inline" role="form">
								<input type="hidden" name="id" value="{{$item->id}}">
								@if($item->status==0)
								<button type="submit" name="status" value="{{$item->status}}" class="btn btn-default fa fa-spinner"></button>
								@else
								<button type="submit" name="status" value="{{$item->status}}" class="btn btn-info fa fa-check"></button>
								@endif
								@csrf
							</form>
						</td>
						<td>{{$item->created_at}}</td>
						<td>
							<a href="{{route('replyComment',['id'=>$item->id])}}" class="btn btn-xs btn-info fa fa-reply-all" aria-hidden="true"></a>
							<a href="{{route('delComment',['id'=>$item->id])}}" class="btn btn-xs btn-danger fa fa-trash"></a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			{{$comment->links()}}
		</div>
	</div>
</div>
@stop()