@extends('layouts.admin')
@section('title','Quản lý điểm thưởng')
@section('links','reward points')
@section('main')
@if(Session::has('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{Session::get('success')}}</strong> 
	</div>
@endif
<div class="jumbotron text-center">
	<div class="container">
		<form action="" method="POST" role="form">
			<legend style="font-size: 26px">Cách tính điểm thưởng</legend>
		
			<div class="row">
				@csrf
				<input type="hidden" name="id" value="{{isset($data->id) ? ($data->id) : ''}}">
				<div class="col-md-4">
					<div class="form-group">
						<label for="">Số tiền để nhận được 1 điểm</label>
						<input type="text" name="money" class="form-control text-center" required placeholder="Nhập số tiền quy định cho 1 điểm" value="{{isset($data->money) ? ($data->money) : ''}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="">Số tiền đổi được từ 1 điểm</label>
						<input type="" name="redeem_money" class="form-control text-center" value="{{isset($data->redeem_money) ? ($data->redeem_money) : ''}}" required>
						<input type="hidden" name="point" class="form-control text-center" value="1" readonly>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="">Số điểm để trở thành khách VIP</label>
						<input type="text" name="vip_guests" class="form-control text-center" required placeholder="Nhập mức điểm đạt được để thành khách VIP" value="{{isset($data->vip_guests) ? ($data->vip_guests) : ''}}">
					</div>
				</div>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Lưu</button>
		</form>
	</div>
</div>
@stop()