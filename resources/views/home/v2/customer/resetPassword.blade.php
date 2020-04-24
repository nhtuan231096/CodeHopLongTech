@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>

<div class="main-container container">
	<ul class="breadcrumb">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
		<li><a href="#">Tài khoản</a></li>
		<li><a href="#">Tài khoản của tôi</a></li>
	</ul>
	
	<div class="row">
		<!--Middle Part Start-->
		<div class="col-md-12">
			<div id="content" class="site-content" tabindex="-1">
				@if(Session::has('error'))
					<div class="alert alert-danger text-center">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>{{Session::get('error')}}</strong>
					</div>
				@endif
				@if(Session::has('success'))
					<div class="alert alert-success text-center">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>{{Session::get('success')}}</strong>
					</div>
				@endif
				@if(isset($email) && isset($password))
				<div class="jumbotron">
					<div class="container">

						<div class="main" style="max-width: 568px;margin: 0 auto">
							<form action="{{route('reset-password')}}" method="POST" role="form">
								<legend>Quên mật khẩu!</legend>
							
								<div class="form-group">
									<label for="">Nhập mật khẩu mới:</label>
									<input type="password" class="form-control" name="password" placeholder="password">
								</div>

								<input type="hidden" name="email" value="{{$email}}">
								@csrf
							
								<button type="submit" value="submit" class="btn btn-primary">Gửi</button>
							</form>
						</div>
					</div>
				</div>	
				@endif
			</div>
			</div>
		<!--Middle Part End-->
	</div>
</div>


@stop()