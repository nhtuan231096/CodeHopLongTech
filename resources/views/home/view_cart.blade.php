@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<div class="main-container container">
	<ul class="breadcrumb">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
		<li><a href="#">Giỏ hàng</a></li>
	</ul>
	@if(Session::has('error'))
	<div class="alert alert-danger text-center">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{Session::get('error')}}</strong>
	</div>
	@elseif(Session::has('success'))
	<div class="alert alert-success text-center">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{Session::get('success')}}</strong>
	</div>
	@endif
	@if(isset($usecoupon) == 1)
	<div class="alert alert-success text-center">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Sử dụng mã giảm giá thành công</strong>
	</div>
	@endif
	@if(count($cart->items) > 0)
	<div class="row">
		<!--Middle Part Start-->
		<form class="woocommerce-cart-form" action="{{route('usesCoupon')}}" method="post">
		    <div id="content" class="col-sm-12">
		      <h2 class="title">Giỏ hàng</h2>
		        <div class="table-responsive form-group" style="position: relative;">
		          <table class="table table-bordered">
		            <thead>
		              <tr>
		                <td class="text-center">Ảnh</td>
		                <td class="text-left">Sản phẩm</td>
		                <!-- <td class="text-left">Model</td> -->
		                <td class="text-left">Số lượng</td>
		                <td class="text-right">Đơn giá</td>
		                <td class="text-right">Tổng tiền</td>
		              </tr>
		            </thead>
		            <tbody>
		              @foreach($cart->items as $item)
		              <tr>
		                <td class="text-center"><a href="{{route('view',['slug'=>$item['slug']])}}"><img width="70px" src="{{url('uploads/product')}}/{{$item['image']}}" alt="" title="" class="img-thumbnail" /></a></td>
		                <td class="text-left"><a href="{{route('view',['slug'=>$item['slug']])}}">{{$item['title']}}</a><br />
		                 </td>
		                <!-- <td class="text-left">Pt 001</td> -->
		                <td class="text-left" width="200px"><div class="input-group btn-block quantity">
		                    <input type="text" type="number" min="1" max="99" name="quantity[]" value="{{$item['quantity']}}" size="1" class="form-control" />
		                    <span class="input-group-btn">
		                    <!-- <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-clone"></i></button> -->
		                    <input type="hidden" type="id" name="id[]" value="{{$item['id']}}">
		                    <a href="{{route('delete_cart',['id'=>$item['id']])}}"><i class="fa fa-times-circle" style="font-size: large; vertical-align: middle;"></i></a>
		                    </span></div></td>
		                <td class="text-right">{{number_format($item['price'])}}</td>
		                <td class="text-right">{{number_format($item['price']*$item['quantity'])}}</td>
		              </tr>
		              @endforeach
		            </tbody>
		            <a style="margin:0px 15px;color: blue;bottom: 35px;left: 0px;position: absolute;" href="#" class="fa fa-print" id="btnPrint">In báo giá</a>
		          </table>
		          <input type="submit" class="button pull-right" name="update_cart" value="Cập nhật">
		        </div>
		      <!-- <h3 class="subtitle no-margin">What would you like to do next?</h3> -->
		      <!-- <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p> -->

			<div class="panel-group" id="accordion">
				@csrf
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">Sử dụng mã giảm giá 
								
								<i class="fa fa-caret-down"></i>
							</a>
						</h4>
					</div>
					<div id="collapse-coupon" class="panel-collapse collapse in coupon-toggle" aria-expanded="true">
						<div class="panel-body">
							<label class="col-sm-2 control-label" for="input-coupon">Nhập mã giảm giá của bạn</label>
							<div class="input-group">
								<input type="text" name="coupon_code" value="{{isset($data_uses_coupon['coupon_code']) ? $data_uses_coupon['coupon_code'] : ''}}" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
								<span class="input-group-btn"><input type="submit" name="apply_coupon" value="Xác nhận" id="button-coupon" data-loading-text="Loading..." class="btn btn-primary"></span>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a href="#collapse-shipping" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Estimate Shipping &amp; Taxes 
								
								<i class="fa fa-caret-down"></i>
							</a>
						</h4>
					</div>
					<div id="collapse-shipping" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
						<div class="panel-body">
							<p>Enter your destination to get a shipping estimate.</p>
							<div class="form-horizontal">
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-country">Country</label>
									<div class="col-sm-10">
										<select name="country_id" id="input-country" class="form-control">
											<option value=""> --- Please Select --- </option>
											<option value="244">Aaland Islands</option>
											<option value="1">Afghanistan</option>
											<option value="2">Albania</option>
											<option value="3">Algeria</option>
										</select>
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-zone">Region / State</label>
									<div class="col-sm-10">
										<select name="zone_id" id="input-zone" class="form-control">
											<option value=""> --- Please Select --- </option>
											<option value="3513">Aberdeen</option>
											<option value="3514">Aberdeenshire</option>
											<option value="3515">Anglesey</option>
											<option value="3516">Angus</option>
											<option value="3517">Argyll and Bute</option>
											<option value="3518">Bedfordshire</option>
											<option value="3519">Berkshire</option>
										</select>
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
									<div class="col-sm-10"><input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control"></div>
								</div>
									<button type="button" id="button-quote" data-loading-text="Loading..." class="btn btn-primary">Get Quotes</button>
							</div>
						</div>
					</div>
				</div> -->
				<!-- <div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a href="#collapse-voucher" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false">Use Gift Certificate 
								
								<i class="fa fa-caret-down"></i>
							</a>
						</h4>
					</div>
					<div id="collapse-voucher" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
						<div class="panel-body">
							<label class="col-sm-2 control-label" for="input-voucher">Enter your gift certificate code here</label>
							<div class="input-group">
								<input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
								<span class="input-group-btn"><input type="submit" value="Apply Gift Certificate" id="button-voucher" data-loading-text="Loading..." class="btn btn-primary"></span>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</form>
	</div>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-8">
			<table class="table table-bordered">
				<tbody>
					@if(isset($data_uses_coupon['price_reduced']))
					<tr>
						<td class="text-right">
							<strong>Mã giảm giá:</strong>
						</td>
						<td class="text-right">-{{number_format($data_uses_coupon['price_reduced'])}} đ</td>
					</tr>
					@endif
					<tr>
						<td class="text-right">
							<strong>Tổng tiền:</strong>
						</td>
						<td class="text-right">
							@if(isset($data_uses_coupon['total_amount']))
								<span>{{number_format($data_uses_coupon['total_amount'])}} đ</span>
							@else
								<span>{{number_format($cart->total_amount)}} đ</span>
							@endif	
						</td>
					</tr>
					<!-- <tr>
						<td class="text-right">
							<strong>Eco Tax (-2.00):</strong>
						</td>
						<td class="text-right">$5.62</td>
					</tr>
					<tr>
						<td class="text-right">
							<strong>VAT (20%):</strong>
						</td>
						<td class="text-right">$34.68</td>
					</tr>
					<tr>
						<td class="text-right">
							<strong>Total:</strong>
						</td>
						<td class="text-right">$213.70</td>
					</tr> -->
				</tbody>
			</table>
		</div>
	</div>
	
	 <div class="buttons">
        <div class="pull-left"><a href="{{route('home_product')}}" class="btn btn-primary">Tiếp tục mua hàng</a></div>
        <div class="pull-right"><a href="{{route('order')}}" class="btn btn-primary">Đặt hàng</a></div>
      </div>
    </div>
    @else 
    <div class="jumbotron text-center">
        <div class="container">
            <p style="font-size: 26px;padding-top: 15px">Bạn chưa có sản phẩn nào trong giỏ hàng</p>
            <div class="emptycart_img">
                <img src="{{url('uploads/1.0.1/emptycart.png')}}" alt="">
            </div>
            <p>
                <a href="{{route('home_product')}}" class="btn btn-primary btn-lg">Tiếp tục mua hàng</a>
            </p>
        </div>
    </div>
    @endif
    <!--Middle Part End -->
		
	</div>
</div>

<div style="display: none;">
	<form id="form1">
		<div id="dvContainer">
			<style>
				.invoice-box {
					max-width: 800px;
					margin: auto;
					padding: 30px;
					border: 1px solid #eee;
					box-shadow: 0 0 10px rgba(0, 0, 0, .15);
					font-size: 16px;
					line-height: 24px;
					font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
					color: #555;
				}

				.invoice-box table {
					width: 100%;
					line-height: inherit;
					text-align: left;
				}

				.invoice-box table td {
					padding: 5px;
					vertical-align: top;
				}

				.invoice-box table tr td:nth-child(2) {
					text-align: right;
				}

				.invoice-box table tr.top table td {
					padding-bottom: 0px;
				}

				.invoice-box table tr.top table td.title {
					font-size: 45px;
					line-height: 45px;
					color: #333;
				}

				.invoice-box table tr.information table td {
					padding-bottom: 15px;
				}

				.invoice-box table tr.heading td {
					background: #eee;
					border-bottom: 1px solid #ddd;
					font-weight: bold;
				}

				.invoice-box table tr.details td {
					padding-bottom: 20px;
				}

				.invoice-box table tr.item td{
					border-bottom: 1px solid #eee;
				}

				.invoice-box table tr.item.last td {
					border-bottom: none;
				}

				.invoice-box table tr.total td:nth-child(2) {
					border-top: 2px solid #eee;
					font-weight: bold;
				}

				@media only screen and (max-width: 600px) {
					.invoice-box table tr.top table td {
						width: 100%;
						display: block;
						text-align: center;
					}

					.invoice-box table tr.information table td {
						width: 100%;
						display: block;
						text-align: center;
					}
				}

				/** RTL **/
				.rtl {
					direction: rtl;
					font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				}

				.rtl table {
					text-align: right;
				}

				.rtl table tr td:nth-child(2) {
					text-align: left;
				}
				.cs_style_p p{
					padding: 0px;
					margin: 0px;
				}
			</style>
		</head>

		<body>
			<div class="invoice-box">
				<table cellpadding="0" cellspacing="0">
					<tr class="top">
						<td colspan="2">
							<table>
								<tr>
									<td>
										<h1 style="color: #3498db;font-size: 23px;margin-bottom: 10px">Công ty cổ phần công nghệ Hợp Long</h1><br>
										Trụ sở chính: 87 Lĩnh Nam, Hoàng Mai, Hà Nội<br>
										Hotline: 19006536 <br>
										E-mail: info@hoplongtech.com.vn
									</td>
									<td>
										<!-- Order Id: #<br> -->
										<img src="{{url('uploads/logo/logo.jpg')}}" style="width:100%; max-width:150px;">
										<!-- <h3>Khách hàng</h3> -->
									</td>

								</tr>
							</table>
						</td>
					</tr>

					<tr class="information">
						<td colspan="2">
							<table>
								<tr>
									<td style="text-align: center;">
										<b>BẢNG CHÀO GIÁ</b>
										<p style="font-size: 11px;margin-top: -10px;font-style: initial">{{(date('d-m-Y H:i:s'))}}</p>
									</td>
								</tr>
								<tr>
									<td class="cs_style_p">
										<p><b>Kính gửi:</b> {{Auth::guard('customer')->check() ? Auth::guard('customer')->user()->name : "quý khách hàng"}}</p>
										<p><b>Email:</b> {{Auth::guard('customer')->check() ? Auth::guard('customer')->user()->email : ""}}</p>
										<p><b>Điện thoại:</b> {{Auth::guard('customer')->check() ? Auth::guard('customer')->user()->phone : ""}}</p>
										<p><b>Công ty Cổ Phần Công nghệ Hợp Long</b> xin trân trọng gửi tới quý khách hàng bảng chào giá sau :</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr class="heading">
						<td>
							<span style="width:60px; margin-right: 15px">Số lượng</span>Sản phẩm 
						</td>

						<td>
							Đơn giá
						</td>
					</tr>
					@foreach($cart->items as $item)
					<tr class="item">
						<td>
							<span style="margin-right: 50px;margin-left: 30px">{{$item['quantity']}}</span>{{$item['title']}}
						</td>

						<td>
							{{$item['price'] > 0 ? number_format($item['price']) : $item['price']}}
						</td>
					</tr>
					@endforeach
					<tr class="total">
						<td><a style="font-size: 13px;font-style: italic;" href="{{route('terms_purc')}}">Điều khoản thanh toán</a></td>

						<td>
							Tổng tiền: {{number_format($cart->total_amount)}}
						</td>
					</tr>
				</table>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
	$(".coupon-toggle").removeClass('in');
	$("#btnPrint").live("click", function () {
		var divContents = $("#dvContainer").html();
		var printWindow = window.open('', '', 'height=400,width=800');
		printWindow.document.write('<html><head><title>Công ty cổ phần công nghệ hợp long</title>');
		printWindow.document.write('</head><body >');
		printWindow.document.write(divContents);
		printWindow.document.write('</body></html>');
		printWindow.document.close();
		printWindow.print();
	});
</script>

@stop()