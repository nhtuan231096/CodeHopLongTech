@extends('layouts.admin')
@section('title','Quản lý khách hàng')
@section('links','Quản lý khách hàng')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-12">
				<form action="" method="GET" class="form-inline text-center" role="form">

					<div class="form-group">
						<label class="sr-only" for="">label</label>
						<input name="name" class="form-control" id="" placeholder="Nhập tên khách hàng..">
					</div>
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						<select name="customer_group_id" id="input" class="form-control">
							<option value="">Loại khách hàng</option>
							@foreach($cusGroup as $item)
							<option value="{{$item->id}}">{{$item->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						<input name="email" class="form-control" id="" placeholder="Email..">
					</div>




					<button type="submit" class="btn btn-primary">Tìm kiếm</button>
					<a href="{{route('exportDataCustomer')}}" class="btn btn-info pull-right">Export data</a>
				</form>
			</div>
		</div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-4">
				<form action="" method="POST" role="form">
					<legend>
						@if(!isset($customer->id))
						Thêm mới khách hàng
						@else 
						Cập nhật thông tin 
						@endif
					</legend>
					<div class="form-group">
						<label for="">Tên khách hàng</label>
						<input type="text" name="name" class="form-control" id="" value="{{isset($customer->name) ? $customer->name : ''}}" placeholder="Nhập tên khách hàng.." required>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" name="email" class="form-control" id="" value="{{isset($customer->email) ? $customer->email : ''}}" placeholder="Nhập Email.." required>
					</div>
					@if(!isset($customer->password))
					<div class="form-group">
						<label for="">Mật khẩu</label>
						<input type="password" name="password" class="form-control" id="" placeholder="Nhập mật khẩu.." required>
					</div>
					@endif
					<div class="form-group">
						<label for="">Tên công ty</label>
						<input type="text" name="company" class="form-control" id="" value="{{isset($customer->company) ? $customer->company : ''}}" placeholder="Nhập tên công ty..">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Trạng thái</label>
								<select name="status" id="input" class="form-control" required="required">
									<?php 
										$enable='';$disable='';
										if (isset($customer->status)) {
										 	$enable = $customer->status == 1 ? "selected" : ""; 
											$disable = $customer->status == 0 ? "selected" : "";
										 } 
									 ?>
									<option {{$enable}} value="1">Enable</option>
									<option {{$disable}} value="0">Disable</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Loại tài khoản</label>
								<select name="account_type" id="input" class="form-control" required="required">
									<?php 
										$cust='';$company='';
										if (isset($customer->account_type)) {
										 	$cust = $customer->account_type == 0 ? "selected" : ""; 
											$company = $customer->account_type == 1 ? "selected" : "";
										 } 
									 ?>
									<option {{$cust}} value="0">Cá nhân</option>
									<option {{$company}} value="1">Công Ty</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Nhóm tài khoản</label>
								<select name="customer_group_id" id="input" class="form-control" required="required">
									@foreach($cusGroup as $item)
									<?php $selected = isset($customer->customer_group_id) ? ($item->id == $customer->customer_group_id ? "selected" : "") :""?>
									<option <?php echo $selected ?> value="{{$item->id}}">{{$item->name}}</option>
									@endforeach
								</select>
							</div>		
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Loại hình</label>
								<select name="company_type_id" id="input" class="form-control" required="required">
									@foreach($customer_type as $item)
									<?php $selected = isset($customer->company_type_id) ? ($item->id == $customer->company_type_id ? "selected" : "") :""?>
									<option <?php echo $selected ?> value="{{$item->id}}">{{$item->name}}</option>
									@endforeach
								</select>
							</div>		
						</div>
					</div>
					
					
					<div class="form-group">
						<label for="">Lĩnh vực kinh doanh</label>
						<input type="text" name="business_areas" class="form-control" id="" value="{{isset($customer->business_areas) ? $customer->business_areas : ''}}" placeholder="Nhập lĩnh vực kinh doanh..">
					</div>
					<div class="form-group">
						<label for="">Mã số thuế</label>
						<input type="text" name="tax_code" class="form-control" value="{{isset($customer->tax_code) ? $customer->tax_code : ''}}" id="" placeholder="Nhập Mã số thuế..">
					</div>
					<div class="form-group">
						<label for="">Số điện thoại</label>
						<input type="text" name="phone" class="form-control" id="" value="{{isset($customer->phone) ? $customer->phone : ''}}" placeholder="Nhập Số điện thoại.." required>
					</div>
					<div class="form-group">
						<label for="">Địa chỉ nhận hàng</label>
						<input type="text" name="address" class="form-control" id="" value="{{isset($customer->address) ? $customer->address : ''}}" placeholder="Nhập Địa chỉ nhận hàng.." required>
					</div>
					<input type="hidden" name="id" value="{{isset($customer->id) ? $customer->id : ''}}">
					@csrf
					<button type="submit" class="btn btn-primary">Lưu</button>
				</form>
			</div>
			<div class="col-md-8">
				@if(Session::has('success'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>{{Session::get('success')}}</strong>
				</div>
				@endif
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Tên</th>
							<th>Công ty</th>
							<th>Email</th>
							<th>Số điện thoại</th>
							<th>Loại tài khoản</th>
							<th>Nhóm khách hàng</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($customers as $item)
						<tr>
							<td>{{$item->name}}</td>
							<td>{{$item->company}}</td>
							<td>{{$item->email}}</td>
							<td>{{$item->phone}}</td>
							<td>
								@if(isset($item->account_type))
								{{($item->account_type == 0) ? "Cá nhân" : "Công ty"}}
								@endif
							</td>
							<td>{{isset($item->cusGroup->name) ? $item->cusGroup->name : ""}}</td>
							<td>
								<a href="{{route('customer_adm',['id'=>$item->id])}}" class="fa fa-edit btn btn-xs btn-info"></a>
								<a href="{{route('delete_cus',['id'=>$item->id])}}" class="fa fa-trash btn btn-xs btn-danger"></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{$customers->links()}}
			</div>
		</div>
		
	</div>
</div>
@stop()