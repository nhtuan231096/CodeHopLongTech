@extends('layouts.admin')
@section('title','Tool Heath Product Check')
@section('links','Sản phẩm')
@section('main')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách sản phẩm chưa đạt tiêu chuẩn</h3>
	</div>
	<div class="panel-body">
		<form action="" method="GET" class="form-inline" role="form">
			@csrf
			<select name="tool_check_product" id="input" class="form-control tool_check_product">
                <option selected value="pdp">Tiêu chí PDP</option>
                <option value="seo">Tiêu chí SEO</option>
                <option value="price">Tiêu chí giá sản phẩm</option>
            </select>
		
			
		
			<button type="submit" class="btn btn-primary">Check</button>
		</form>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên sản phẩm</th>
					<th>Người tạo</th>
					<th>Trạng thái</th>
					<th>Ngày tạo</th>
					<th><th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $item)
				<tr>
					<td>{{$item->id}}</td>
					<td>{{$item->title}}</td>
					<td>{{$item->created_by}}</td>
					<td>{{$item->status}}</td>
					<td>{{$item->created_at}}</td>
					<td>
						<a href="{{route('editPro',['id'=>$item->id])}}" class="btn btn-xs btn-primary fa fa-edit" target="_blank"></a>
        				<a href="{{route('delPro',['id'=>$item->id])}}" onclick="return confirm('Bạn có muốn xóa không??')" class="btn btn-xs btn-danger fa fa-trash"></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop()