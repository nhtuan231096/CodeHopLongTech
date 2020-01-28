@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<div class="main-container container">
	<ul class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i></a></li>
		<li><a href="#">Tài khoản</a></li>
		<li><a href="#">Đăng ký</a></li>
	</ul>
	@if(Session::has('register_success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('register_success')}}</strong>
		</div>
	@endif
	<div class="row">
		<div id="content" class="col-sm-12">
			<h2 class="title">Đăng ký tài khoản</h2>
			<p><a href="{{route('loginCustomer')}}" style="text-decoration: underline;">Đăng nhập</a> nếu bạn đã có tài khoản.</p>
			<div class="row">
				<fieldset id="account">
					<div class="col-md-12">
						<legend>Loại tài khoản</legend>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-firstname"></label>
						<div class="col-sm-10">
							<select name="" id="input" class="form-control accountGroup" required="required">
								<option value="0">Cá nhân</option>
								<option value="1">Công ty</option>
							</select>
						</div>
					</div>
				</fieldset>
			</div>
			<form action="{{route('register_customer')}}" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix groupCustomer">
				@csrf
				<fieldset id="account">
					<legend>Thông tin chung</legend>
					<input type="hidden" name="account_type" value="0">
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-firstname">Họ và tên</label>
						<div class="col-sm-10">
							<input type="text" name="name" value="" placeholder="Họ và tên" id="input-firstname" class="form-control" required>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
						<div class="col-sm-10">
							<input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" required>
							@if($errors->has('email'))
							<div class="errors">{{$errors->first('email')}}</div>
							@endif
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-telephone">Số điện thoại </label>
						<div class="col-sm-10">
							<input type="tel" name="phone" value="" placeholder="Số điện thoại" id="input-telephone" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-fax">Địa chỉ</label>
						<div class="col-sm-10">
							<input type="text" name="address" value="" placeholder="Địa chỉ" id="input-fax" class="form-control" required>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<legend>Mật khẩu</legend>
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-password">Password</label>
						<div class="col-sm-10">
							<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" required>
						</div>
					</div>
				</fieldset>
				
				<div class="buttons"> 
					<div class="pull-right">Tôi đồng ý với <a href="#" class="agree"><b>điều khoản của công ty</b></a>
						<input class="box-checkbox" type="checkbox" name="agree" value="1" required> &nbsp;
						<input type="submit" name="register" value="Đăng ký" class="btn btn-primary">
					</div>
				</div>
			</form>
			<form action="{{route('register_customer')}}" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix groupCompany">
				@csrf
				<fieldset id="account">
					<legend>Thông tin chung</legend>
					<input type="hidden" name="account_type" value="1">
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-firstname">Họ và tên</label>
						<div class="col-sm-10">
							<input type="text" name="name" value="" placeholder="Họ và tên" id="input-firstname" class="form-control">
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
						<div class="col-sm-10">
							<input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" required> 
							@if($errors->has('email'))
							<div class="errors">{{$errors->first('email')}}</div>
							@endif
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-telephone">Số điện thoại </label>
						<div class="col-sm-10">
							<input type="tel" name="phone" value="" placeholder="Số điện thoại" id="input-telephone" class="form-control" required>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-fax">Địa chỉ</label>
						<div class="col-sm-10">
							<input type="text" name="address" value="" placeholder="Địa chỉ" id="input-fax" class="form-control" required>
						</div>
					</div>
				</fieldset>
				<fieldset id="address">
					<legend>Thông tin chi tiết</legend>
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-company">Tên công ty</label>
						<div class="col-sm-10">
							<input type="text" name="company" value="" placeholder="Tên công ty" id="input-company" class="form-control" required>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-address-1">Lĩnh vực kinh doanh</label>
						<div class="col-sm-10">
							<input type="text" name="business_areas" value="" placeholder="Lĩnh vực kinh doanh" id="input-address-1" class="form-control" required>
						</div>
					</div>
					<div class="form-group required" >
						<label class="col-sm-2 control-label" for="input-address-2">Loại hình</label>
						<div class="col-sm-10">
							<select name="company_type_id" id="input" class="form-control" required="required">
                                @foreach($custome_type as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-city">Mã số thuế </label>
						<div class="col-sm-10">
							<input type="text" name="tax_code" value="" placeholder="Mã số thuế " id="input-city" class="form-control" required>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<legend>Mật khẩu</legend>
					<div class="form-group required">
						<label class="col-sm-2 control-label" for="input-password">Password</label>
						<div class="col-sm-10">
							<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" required>
						</div>
					</div>
					<!-- <div class="form-group required">
						<label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
						<div class="col-sm-10">
							<input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
						</div>
					</div> -->
				</fieldset>
				
				<div class="buttons"> 
					<div class="pull-right">Tôi đồng ý với <a href="#" class="agree"><b>điều khoản của công ty</b></a>
						<input class="box-checkbox" type="checkbox" name="agree" value="1" required> &nbsp;
						<input type="submit" value="Continue" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.accountGroup').val(0);
	$('.groupCompany').hide();
	$('.accountGroup').change(function(){
		if($('.accountGroup').val() == 0){
			console.log($('.accountGroup'));
			$('.groupCustomer').show();
			$('.groupCompany').hide();
		}
		if($('.accountGroup').val() == 1){
			console.log($('.accountGroup'));
			$('.groupCustomer').hide();
			$('.groupCompany').show();
		}
	});
</script>
@stop()