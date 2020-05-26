@extends('layouts.v2.index')
@section('mainContainer')
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<!-- Main Container  -->
<div class="main-container container">
	<ul class="breadcrumb">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
		<li><a href="#">Tài khoản</a></li>
		<li><a href="#">Tra cứu bảo hành</a></li>
	</ul>
	
	<div class="row">
		<!--Middle Part Start-->
		<div class="col-sm-9" id="content">
			<!-- <h2 class="title">Tài khoản của tôi</h2> -->
			@if(Session::has('success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{Session::get('success')}}</strong> 
			</div>
			@endif

			@if(Session::has('error'))
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{Session::get('error')}}</strong>
			</div>
			@endif

		    <div class="row">
		        <div class="panel-group">
		            <div class="panel panel-default">
		                <div class="panel-heading">
		                    <h3>Tra cứu bảo hành sản phẩm</h3>
		                </div>
		                <div class="panel-body">
		                    <form class="form-horizontal" action="" method="POST">
		                      <div class="form-group">
		                        <label class="control-label col-sm-2">Mã series: </label>
		                        <div class="col-sm-10">
		                          <input required style="width: 80%;float: left;" name="series" class="form-control" placeholder="Nhập số series sản phẩm của bạn" value="@if(isset($dataWarranty)) {{$dataWarranty->SERIES}} @endif">
		                          <button type="submit" class="btn btn-lg btn-default fa fa-search"></button>
		                        </div>
		                      </div>
		                      @csrf
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		    @if(isset($dataWarranty))
			<table width="680" style="min-width:680px; margin-bottom: 15px" align="center">
			    <tbody>
			        <tr style="background: #0458b2;">
			        <td>
			            <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#0458B2" style="border-radius:10px;border:10px solid #0458B2;border-top-width:0;border-left-width:2px;border-right-width:2px">
			                <tbody>
			                    <tr>
			                        <td align="left" style="font-size:25px;font-family:arial;color:#ffffff;padding:15px 20px">HOPLONGTECH Serial Number Check</td>
			                    </tr>
			                    <tr>
			                    <td align="left" valign="top" bgcolor="#ffffff" style="padding-left:20px">
			                        <div style="width:0;height:0;border-style:solid;border-width:20px;border-color:#0458B2 transparent transparent"></div>
			                    </td>
			                </tr>
			                <tr>
			                    <td align="left" bgcolor="#ffffff" style="font-size:14px;font-family:arial;color:#1f1f1f;line-height:1.5;padding:0 20px 30px">
			                        <div>Kính chào quý khách hàng,
			                            <br>
			                            <br>Số Series sản phẩm bạn vừa nhập tương ứng với thông tin sản phẩm sau:
			                        </div>
			                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
			                            <tbody>
			                                <tr>
			                                <td style="font-size:14px;font-family:arial;color:#1f1f1f;line-height:1.5;padding:25px 10px">
			                                    <div>
			                                       <div style="font-size:14px;font-weight:bold;padding-bottom:5px"></div>
			                                       <table width="100%" border="1" cellspacing="0" cellpadding="5" style="border-collapse:collapse;border:1px #cccccc">
			                            <tbody>
			                                    <tr>
			                                        <td align="center" valign="middle" bgcolor="#eeeeee" style="font-size:13px;font-family:Arial;border-color:#cccccc" width="150">Số series</td>
			                                        <td align="left" valign="middle" bgcolor="#ffffff" style="font-size:13px;font-family:Arial;border-color:#cccccc">{{$dataWarranty->SERIES}}</td>
			                                    </tr>
			                                    <tr>
			                                        <td align="center" valign="middle" bgcolor="#eeeeee" style="font-size:13px;font-family:arial;border-color:#cccccc" width="150">Mã hàng</td>
			                                        <td align="left" valign="middle" bgcolor="#ffffff" style="font-size:13px;font-family:arial;border-color:#cccccc">{{$dataWarranty->MA_CHUAN}}</td>
			                                    </tr>
			                                    <tr>
			                                        <td align="center" valign="middle" bgcolor="#eeeeee" style="font-size:13px;font-family:arial;border-color:#cccccc" width="150">Ngày giao hàng</td>
			                                        <td align="left" valign="middle" bgcolor="#ffffff" style="font-size:13px;font-family:arial;border-color:#cccccc">{{date("d-m-Y", strtotime($dataWarranty->NGAY_CHUNG_TU))}}</td>
			                                    </tr>
			                                    <tr>
			                                        <td align="center" valign="middle" bgcolor="#eeeeee" style="font-size:13px;font-family:arial;border-color:#cccccc" width="150">Ngày hết hạn bảo hành</td>
			                                        <td align="left" valign="middle" bgcolor="#ffffff" style="font-size:13px;font-family:arial;border-color:#cccccc">{{date("d-m-Y", strtotime($dataWarranty->NGAY_HET_HAN))}}</td>
			                                    </tr>
			                                    
			                                    <tr>
			                                        <td align="center" valign="middle" style="font-size:13px;font-family:arial;border-color:#cccccc" width="150" colspan="2">&nbsp;</td>
			                                    </tr>
			                                    <tr>
			                                        <td align="center" valign="middle" bgcolor="#eeeeee" style="font-size:13px;font-family:arial;border-color:#cccccc" width="150">Ghi chú</td>
			                                        <td align="left" valign="middle" bgcolor="#ffffff" style="font-size:13px;font-family:arial;border-color:#cccccc">Sản phẩm được tính bảo hành bắt đầu từ ngày giao hàng.</td>
			                                    </tr>



			                                </tbody></table>

			                            </div>

			                        </td>
			                    </tr>
			                </tbody>
			            </table>
			                <br>
			                <div><span>Trân trọng,<br>
			                    Hoplongtech.com<br><br>
			                    Nếu quý khách còn bất cứ câu hỏi nào vui lòng liên hệ Hotline 1900.6536 hoặc email: <a href="mailto:info@hoplongtech.com.vn" target="_blank">info@hoplongtech.com.vn</a>.<br>
			                    Cảm ơn quý khách đã sử dụng dịch vụ tại Hợp Long!
			                </span><br>
			                <div style="font-size:13px"></div>

			            </div></td>
			        </tr>
			    </tbody></table>
			    <br>
			</td>
			</tr>
			</tbody>
			</table>
			@endif
		</div>
		<!--Middle Part End-->
		<!--Right Part Start -->
		<aside class="col-sm-3 hidden-xs content-aside col-md-3" id="column-right">
			<h2 class="subtitle">Account</h2>
			<div class="list-group">
				<ul class="list-item">
		            @if(!Auth::guard('customer')->check())
					<li><a href="{{route('login_customer')}}">Đăng nhập</a>
		            </li>
		            <li><a href="{{route('register_customer')}}">Đăng ký</a>
		            </li>
		            @endif
		            <li><a href="{{route('forgotPassword')}}">Quên mật khẩu</a>
		            </li>
		            <!-- <li><a href="{{route('my_account')}}">Tài khoản của tôi</a> -->
		            <!-- </li> -->
		            <!-- <li><a href="{{route('customer_order_history')}}">Order History</a> -->
		            <!-- </li> -->
		            <!-- <li><a href="{{route('logout_customer')}}">Đăng xuất</a> -->
		            <!-- </li> -->
		        </ul>
			</div>
		</aside>
		<!--Right Part End -->
	</div>
</div>
<script type="text/javascript">
	$(".fa-search").click(function(){
		   $.ajax({
		    url: "http://sales.hoplong.com:8002/api/API_hoplongtech/GetTimeBH/219CE83007788",
		    type: "GET",
		    contentType: "application/json",
		    success: function (data) {
		        console.log(data);
		    }
		});
	});
</script>
<!-- //Main Container -->
@stop()