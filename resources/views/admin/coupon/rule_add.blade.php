@extends('layouts.admin')
@section('title','Quản lý quy tắc mã giảm giá')
@section('links','coupon')
@section('main')
<form action="" method="POST" role="form">
	@if(isset($dataRule->id))
	<legend>Cập nhật quy tắc mã giảm giá</legend>
	@else
	<legend>Tạo quy tắc mã giảm giá</legend>
	@endif

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Tiêu đề</label>
				<input type="text" name="name" class="form-control" id="" placeholder="Nhập tiêu đề.." required value="{{isset($dataRule->name) ? $dataRule->name : ''}}"> 
			</div>	
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Slug</label>
				<input type="text" name="slug" class="form-control" id="" placeholder="Nhập slug.." required value="{{isset($dataRule->slug) ? $dataRule->slug : ''}}">
			</div>
		</div>
	</div>
	

	
	
	<div class="form-group">
		<label for="">Mô tả ngắn</label>
		<input type="text" name="description" class="form-control" id="" placeholder="Nhập mô tả ngắn.." value="{{isset($dataRule->description) ? $dataRule->description : ''}}">
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Thời gian bắt đầu</label>
				<input type="date" name="from_date" class="form-control" id="" required value="{{isset($dataRule->from_date) ? $dataRule->from_date : ''}}">
			</div>		
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Thời gian kết thúc</label>
				<input type="date" name="to_date" class="form-control" id="" required value="{{isset($dataRule->to_date) ? $dataRule->to_date : ''}}">
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Số lượt sử dụng/1 khách hàng</label>
				<input type="number" name="uses_per_customer" class="form-control" id="" placeholder="Nhập số lượt sử dụng cho 1 khách hàng.." required value="{{isset($dataRule->uses_per_customer) ? $dataRule->uses_per_customer : ''}}">
			</div>		
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Số lượt sử dụng của mã giảm giá</label>
				<input type="number" name="uses_per_coupon" class="form-control" id="" placeholder="Nhập số lượt sử dụng của mã giảm giá.." required value="{{isset($dataRule->uses_per_coupon) ? $dataRule->uses_per_coupon : ''}}">
			</div>		
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Độ dài mã</label>
				<input type="number" name="code_length" class="form-control" id="" placeholder="Nhập độ dài của mã giảm giá VD: 8" required value="{{isset($dataRule->code_length) ? $dataRule->code_length : ''}}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Mã tiền tố</label>
				<input type="text" name="code_prefix" class="form-control" id="" placeholder="Nhập tiền tố của mã giảm giá VD: HLT" value="{{isset($dataRule->code_prefix) ? $dataRule->code_prefix : ''}}">
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-2">
			<div class="form-group">
				<label for="">Điều kiện</label>
				<input type="text" class="form-control" placeholder="Giá sản phẩm" readonly>
			</div>
		</div>
		<div class="col-md-1">
			<div class="form-group">
				<label for=""> </label>
				<select name="conditions" id="input" class="form-control" style="margin-top: 5px">
					@if(isset($dataRule->id))
						@if($dataRule->conditions == '<=')
						<option value="<="><=</option>
						<option value=">=">>=</option>
						@elseif($dataRule->conditions == '>=')
						<option value=">=">>=</option>					
						<option value="<="><=</option>
						@endif
					@else
						<option value=">=">>=</option>					
						<option value="<="><=</option>
					@endif
				</select>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="">Số tiền áp dụng cho điều kiện</label>
				<input type="number" name="condition_for" class="form-control" id="" placeholder="Nhập số tiền áp dụng cho điều kiện. VD: 300000" value="{{isset($dataRule->condition_for) ? $dataRule->condition_for : ''}}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Số tiền giảm</label>
				<input type="text" name="price_reduced" class="form-control" id="" placeholder="Nhập số tiền giảm VD: 300000 hoặc 30%" value="{{isset($dataRule->price_reduced) ? $dataRule->price_reduced : ''}}">
			</div>
		</div>
	</div>
	<div class="row">
		@if(isset($dataRule->id))
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Trạng thái</label>
				<select name="status" id="inputStatus" class="form-control" required="required">
					@if($dataRule->id == 1)
					<option value="1">Enable</option>
					<option value="0">Disable</option>
					@else
					<option value="0">Disable</option>
					<option value="1">Enable</option>
					@endif
				</select>
			</div>
		</div>
		@endif
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Áp dụng cho khách hàng đăng nhập</label>
				<select name="customer_login" class="form-control">
					@if(isset($dataRule->id) && $dataRule->customer_login == 1)
					<option value="1">Enable</option>
					<option value="0">Disable</option>
					@else
					<option value="0">Disable</option>
					<option value="1">Enable</option>
					@endif
				</select>
			</div>
		</div>
	</div>

	@csrf
	<input type="hidden" name="created_by" value="{{auth::guard('admin')->user()->username}}">

	<button type="submit" class="btn btn-primary">Lưu</button>
</form>
@stop()