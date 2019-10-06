@if(!Auth::guard('customer')->check())
@extends('layouts.shop')
@section('content')
<style type="text/css">
	#content #primary {
		flex: 0 0 100%;
		max-width: 100%;
		order: 2;
	}
	.woocommerce-breadcrumb{
		padding-left:1em;
	}
</style>
<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">
		<div class="row">
			<nav class="woocommerce-breadcrumb"><a href="https://demo2.chethemes.com/techmarket">Trang chủ</a><span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>Đăng ký</nav>
			<div id="primary" class="content-area">
				<main id="main" class="site-main">


					<div id="post-7" class="post-7 page type-page status-publish hentry">
						<div class="entry-content">
							<div class="woocommerce">

								<div class="customer-login-form">
									<span class="or-text">or</span>

									<div class="u-columns col2-set" id="customer_login">

										<div class="u-column1 col-1">


											<h2>Đăng nhập</h2>

											<form class="woocommerce-form woocommerce-form-login login" method="post" action="{{route('login_customer')}}">

												<p class="before-login-text">
												Tạo tài khoản để theo dõi đơn hàng, lưu 
												danh sách sản phẩm yêu thích, nhận
												nhiều ưu đãi hấp dẫn.		</p>
												<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="email">Email <span class="required">*</span></label>
													<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="email" value="">
												</p>
												@csrf
												<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="password">Mật khẩu <span class="required">*</span></label>
													<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password">
												</p>


												<p class="form-row">
													<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="fe51bc5aa5"><input type="hidden" name="_wp_http_referer" value="/techmarket/my-account/">				<input type="submit" class="woocommerce-Button button" name="login" value="Đăng nhập">
													<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
														<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
													</label>
												</p>
												<p class="woocommerce-LostPassword lost_password">
													<a href="{{route('forgotPassword')}}">Quên mật khẩu?</a>
												</p>

												<div class="register-benefits">
													<h3>Đăng ký thành viên ngay:</h3>			<ul>
														<li>Thanh toán nhanh chóng</li>
														<li>Theo dõi đơn hàng của bạn một cách dễ dàng</li>
														<li>Lưu trữ các giao dịch của bạn</li>
													</ul>
												</div>
											</form>


										</div>

										<div class="u-column2 col-2">

											<h2>Đăng ký</h2>

											<form method="post" class="register" action="{{route('register_customer')}}">

												<p class="before-register-text">
												Đăng nhập để theo dõi đơn hàng, lưu 
												danh sách sản phẩm yêu thích, nhận
												nhiều ưu đãi hấp dẫn.	</p>

												<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="reg_email">Email <span class="required">*</span></label>
													<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" required>
												</p>
												<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="reg_email">Tên cá nhân/Công ty <span class="required">*</span></label>
													<input type="" class="woocommerce-Input woocommerce-Input--text input-text" name="name" id="reg_email" required>
												</p>
												<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="reg_email">Số điện thoại <span class="required">*</span></label>
													<input type="number" class="woocommerce-Input woocommerce-Input--text input-text" name="phone" id="reg_email" required>
												</p>
												<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="reg_email">Loại tài khoản <span class="required">*</span></label>
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
												</p>
												<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="">Lĩnh vực kinh doanh <span class="required">*</span></label>
													<input type="" class="woocommerce-Input woocommerce-Input--text input-text" name="business_areas" id="reg_email" required>
												</p>
												<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="reg_email">Loại hình <span class="required">*</span></label>
													<!-- <input type="" class="woocommerce-Input woocommerce-Input--text input-text" name="business_areas" id="reg_email" value=""> -->
													<select name="company_type_id" id="input" class="form-control" required="required">
                                                        @foreach($custome_type as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
												</p>
												<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="reg_email">Mã số thuế <span class="required">*</span></label>
													<input type="number" class="woocommerce-Input woocommerce-Input--text input-text" name="tax_code" id="reg_email" required>
												</p>

												<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="reg_password">Mật khẩu <span class="required">*</span></label>
													<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password">
												</p>

												@csrf

												<p class="woocommerce-FormRow form-row">
													<input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="4eb2b2e701"><input type="hidden" name="_wp_http_referer" value="/techmarket/my-account/">				<input type="submit" class="woocommerce-Button button" name="register" value="Đăng ký">
												</p>

												
											</form>

										</div>

									</div>

								</div><!-- /.customer-login-form --></div>
							</div><!-- .entry-content -->
						</div><!-- #post-## -->

					</main><!-- #main -->
				</div><!-- #primary -->


			</div><!-- .col-full -->
		</div><!-- .row -->
	</div>
	@stop()
@endif