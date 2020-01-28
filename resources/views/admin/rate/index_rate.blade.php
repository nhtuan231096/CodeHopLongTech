@extends('layouts.admin')
@section('title','Quản lý đánh giá sản phẩm')
@section('links','review')
@section('main')
<div class="">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Danh sách đánh giá</h3>
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
						<th>Email</th>
						<th>Đánh giá</th>
						<th>Sản phẩm</th>
						<th>Trạng thái</th>
						<th>Ngày tạo</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($rates as $item)
					<tr>
						<td>{{$item->id}}</td>
						<td>{{$item->name}}</td>
						<td>{{$item->email}}</td>
						<td>{{$item->rate}}   <span style="color: orange" class="fa fa-star"></span></td>
						<td>{{isset($item->product->title) ? $item->product->title : ''}}</td>
						<td>
							<form action="{{route('updateRate')}}" method="POST" class="form-inline" role="form">
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
							<a href="{{route('delRate',['id'=>$item->id])}}" class="btn btn-xs btn-danger fa fa-trash"></a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			{{$rates->links()}}
		</div>
	</div>
</div>
@stop()