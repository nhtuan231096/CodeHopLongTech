@extends('layouts.admin')
@section('title','Flash Sale Management')
@section('links','Sản phẩm')    
@section('main')
<!-- Latest compiled and minified CSS & JS -->
	<legend>Chi tiết flash sale</legend>
	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
				<label for="">Tiêu đề</label>
				<input type="text" class="form-control" name="title" placeholder="Nhập tiêu đề" value="{{$datas->title}}">
			</div>

			<div class="form-group">
				<label for="">Ngày kết thúc</label>
				<input type="" class="form-control" name="end_time" value="{{$datas->end_time}}">
			</div>

			<div class="form-group">
				<label for="">Ảnh đại diện</label>
				<div class="clearfix"></div>
				<img src="{{url('uploads/flash_sale')}}/{{$datas->cover_image}}" width="100" alt="">
				<input type="file" class="form-control" name="file_upload" style="padding: 0">
			</div>
			
			<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
		</div>
		<div class="col-md-9" style="margin-top: 38px">
			<a href="{{route('product_lrv')}}" class="btn btn-md btn-info">Thêm sản phẩm vào chương trình flash sales</a>
			@if(Session::has('success'))
			<div class="alert alert-success">
			    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			    {{Session::get('success')}}
			</div>
			@endif
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Product ID</th>
						<th>Sản phẩm</th>
						<th>Số lượng đã bán</th>
						<th>Số lượng</th>
						<th>Giá</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					<form action="{{route('updateProductFlashSale')}}" method="POST" role="form">
						<tr>
							<td>{{$product->product_id}}</td>
							<td>{{$product->title}}</td>
							<td>
								<input type="number" name="sold" value="{{$product->sold}}">
							</td>
							<td class="qty">
								<input type="number" name="quantity" value="{{$product->quantity}}">
							</td>
							<td class="w_discount">
								<input type="number" name="price" value="{{$product->price}}">
								<input type="hidden" name="id" value="{{$product->id}}">
							</td>
							<td>
								<button type="submit" class="btn btn-md btn-info">Update</button>
								<button type="submit" name="delete" value="1" class="btn-danger btn btn-md">Xóa</button>
							</td>
						</tr>
					@csrf
					</form>
					@endforeach
				</tbody>
			</table>
			<!-- {{$products->links()}} -->
		</div>
	</div>
</div>
@stop()
