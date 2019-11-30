@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>

<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Tài khoản</a></li>
			<li><a href="#">Đăng nhập</a></li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-login">
				
					<div class="account-border">
						<div class="row">
							<div class="col-sm-6 new-customer">
								<div class="well">
									<h3><i class="fa fa-file-o" aria-hidden="true"></i> Bạn chưa có tài khoản?</h3>
									<p>Tạo tài khoản để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích, nhận nhiều ưu đãi hấp dẫn.  </p>
									<div class="register-benefits">
										<h3>Đăng ký thành viên ngay:</h3>			
										<ul class="tick-register">
											<li class="fa fa-check"><span>Thanh toán nhanh chóng</span></li>
											<li class="fa fa-check"><span>Theo dõi đơn hàng của bạn một cách dễ dàng</span></li>
											<li class="fa fa-check"><span>Lưu trữ các giao dịch của bạn</span></li>
										</ul>
									</div>
								</div>
								<div class="bottom-form">
									<a href="#" class="btn btn-default pull-right">Đăng ký tài khoản</a>
								</div>
							</div>
							
							<form method="post" action="{{route('login_customer')}}">
								@csrf
								<div class="col-sm-6 customer-login">
									<div class="well">
										<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Đăng nhập</h2>
										<p><strong></strong></p>
										<div class="form-group">
											<label class="control-label " for="input-email">E-Mail Address</label>
											<input type="text" name="email" value="" id="input-email" class="form-control" />
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Password</label>
											<input type="password" name="password" value="" id="input-password" class="form-control" />
										</div>
									</div>
									<div class="bottom-form">
										<a href="{{route('forgotPassword')}}" class="forgot">Quên mật khẩu</a>
										<input type="submit" name="login" value="Đăng nhập" class="btn btn-default pull-right" />
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
@stop()