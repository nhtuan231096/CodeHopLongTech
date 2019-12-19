@extends('layouts.product')
@section('content')
<link rel="stylesheet" href="{{url('public/css/newstyle.css')}}">
<link rel="stylesheet" href="{{url('public/css/stylecart.css')}}">
<style type="text/css">
th,tr,td {
    border: none ;
}
.lborder-none{
	border-left: none;
}
.rborder-none{
	border-right: none;
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
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

<div class="container">
	<nav class="woocommerce-breadcrumb"><a href="{{route('home_product')}}">Trang chủ</a><span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>Giỏ hàng</nav>
</div>
<div class="body" data-currency-code="USD">
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
	<div class="container">
		<div class="page">

			<main class="page-content" data-cart>
<div class="entry-content">
    <div class="woocommerce">
        @if(count($cart->items) > 0)
        <div class="cart-wrapper">
            <form class="woocommerce-cart-form" action="{{route('usesCoupon')}}" method="post">

                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="product-remove">&nbsp;</th>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Sản phẩm</th>
                            <th class="product-price">Giá</th>
                            <th class="product-quantity">Số lượng</th>
                            <th class="product-subtotal">Tổng tiến</th>
                        </tr>
                    </thead>
                    <tbody>
						@foreach($cart->items as $item)
                        <tr class="woocommerce-cart-form__cart-item cart_item">

                            <td class="lborder-none rborder-none product-remove">
                                <a href="{{route('delete_cart',['id'=>$item['id']])}}" class="remove" aria-label="Remove this item" data-product_id="9" data-product_sku="">×</a> </td>

                            <td class="lborder-none rborder-none product-thumbnail">
                                <a href="{{route('view',['slug'=>$item['slug']])}}"><img width="180" height="180" src="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="" sizes="(max-width: 180px) 100vw, 180px"></a>
                            </td>

                            <td class="lborder-none rborder-none product-name" data-title="Product">
                                <div class="media cart-item-product-detail">
                                    <a href="{{route('view',['slug'=>$item['slug']])}}"><img width="180" height="180" src="{{url('uploads/product')}}/{{$item['image']}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""></a>
                                    <div class="media-body align-self-center"><a href="{{route('view',['slug'=>$item['slug']])}}">{{$item['title']}}</a></div>
                                </div>
                            </td>

                            <td class="lborder-none rborder-none product-price" data-title="Price">
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{number_format($item['price'])}}</span>
                            </td>

                            <td class="lborder-none rborder-none product-quantity" data-title="Quantity">
                                <div class="quantity">
                                    <label for="quantity-input">Số lượng</label>
                                    <input type="hidden" type="id" name="id[]" value="{{$item['id']}}">
                                    <input id="quantity-input" type="number" step="1" min="1" max="" name="quantity[]" value="{{$item['quantity']}}" title="Qty" class="input-text qty text" size="4" pattern="[1-99]*" inputmode="numeric" aria-labelledby="">
                                </div>
                            </td>

                            <td class="lborder-none rborder-none product-subtotal" data-title="Total">
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{number_format($item['price']*$item['quantity'])}}</span> <span class="product-remove"><a href="{{route('delete_cart',['id'=>$item['id']])}}" class="remove" title="Remove this item" data-product_id="9" data-product_sku="">×</a></span> </td>
                        </tr>
						@endforeach
                        <tr>

                            <td colspan="6" class="actions"  style="border: none">
								@csrf

                                <div class="coupon">
                                	<a style="margin:0px 15px;color: blue;bottom: 0px;right: 15px;position: absolute;" href="#" class="fa fa-print" id="btnPrint">In báo giá</a>
                                    <label for="coupon_code">Mã giảm giá:</label>
                                    <input type="text" style="height: 37px" name="coupon_code" class="input-text" id="coupon_code" value="{{isset($data_uses_coupon['coupon_code']) ? $data_uses_coupon['coupon_code'] : ''}}" placeholder="Nhập mã giảm giá">
                                    <input type="submit" class="button" name="apply_coupon" value="Sử dụng">
                                </div>
								
                                <input type="submit" class="button" name="update_cart" value="Cập nhật">
							</td>
                        </tr>

                    </tbody>
                </table>

            </form>
			
			<!-- TODO WIP -->
            <div class="cart-collaterals">
                <div class="cart_totals ">

                    <h2>Giỏ hàng</h2>

                    <table cellspacing="0" class="shop_table shop_table_responsive">
						
                        <tbody>
                        	@if(isset($data_uses_coupon['price_reduced']))
                        	<tr class="cart-subtotal">
                                <th style="padding:0px;margin:0px;border: none;">Mã giảm giá</th>
                                <td style="padding:0px;margin:0px;border: none;" data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>-{{number_format($data_uses_coupon['price_reduced'])}} đ</span>
                                </td>
                            </tr>
                            @endif
							
                            <!-- <tr class="cart-subtotal">
                                <th style="border: none;">Tổng tiền</th>
                                <td style="border: none;" data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{$cart->total_amount}}</span>
                                </td>
                            </tr>
							
                            <tr class="shipping">
                                <th>Shipping</th>
                                <td data-title="Shipping">
                                    <ul id="shipping_method">
                                        <li>
                                            <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate1" value="flat_rate:1" class="shipping_method" checked="checked">
                                            <label for="shipping_method_0_flat_rate1">Normal Delivery: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>100.00</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate2" value="flat_rate:2" class="shipping_method">
                                            <label for="shipping_method_0_flat_rate2">Express Delivery: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>500.00</span>
                                            </label>
                                        </li>
                                    </ul>

                                    <form class="woocommerce-shipping-calculator" action="https://demo2.chethemes.com/techmarket/cart/" method="post">

                                        <p><a href="#" class="shipping-calculator-button">Calculate shipping</a></p>

                                        <section class="shipping-calculator-form" style="display:none;">

                                            <p class="form-row form-row-wide" id="calc_shipping_country_field">
                                                <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state country_select" rel="calc_shipping_state">
                                                    <option value="">Select a country…</option>
                                                </select>
                                            </p>

                                            <p class="form-row form-row-wide" id="calc_shipping_state_field" style="display: none;">
                                                <input type="hidden" class="hidden" name="calc_shipping_state" id="calc_shipping_state" value="" placeholder="State / County"> </p>

                                            <p class="form-row form-row-wide" id="calc_shipping_postcode_field">
                                                <input type="text" class="input-text" value="" placeholder="Postcode / ZIP" name="calc_shipping_postcode" id="calc_shipping_postcode">
                                            </p>

                                            <p>
                                                <button type="submit" name="calc_shipping" value="1" class="button">Update totals</button>
                                            </p>

                                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="cd3f0d1357">
                                            <input type="hidden" name="_wp_http_referer" value="/techmarket/cart/"> </section>
                                    </form>

                                </td>
                            </tr> -->
						
                            <tr class="order-total">
                                <th style="border: none;">Tổng tiền</th>
                                <td style="border: none;" data-title="Total">
                                	<strong>
                                		<span class="woocommerce-Price-amount amount">
                                			<span class="woocommerce-Price-currencySymbol"></span>
											@if(isset($data_uses_coupon['total_amount']))
												<span>{{number_format($data_uses_coupon['total_amount'])}} đ</span>
											@else
												<span>{{number_format($cart->total_amount)}} đ</span>
											@endif	
                                		</span>
                                	</strong> 
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="wc-proceed-to-checkout">

                        <!-- <form class="woocommerce-shipping-calculator" action="https://demo2.chethemes.com/techmarket/cart/" method="post"> -->

                            <!-- <p><a href="#" class="shipping-calculator-button">Calculate shipping</a></p> -->

                            <!-- <section class="shipping-calculator-form" style="display:none;">

                                <p class="form-row form-row-wide" id="calc_shipping_country_field">
                                    <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state country_select" rel="calc_shipping_state">
                                        <option value="">Select a country…</option>
                                    </select>
                                </p>

                                <p class="form-row form-row-wide" id="calc_shipping_state_field" style="display: none;">
                                    <input type="hidden" class="hidden" name="calc_shipping_state" id="calc_shipping_state" value="" placeholder="State / County"> </p>

                                <p class="form-row form-row-wide" id="calc_shipping_postcode_field">
                                    <input type="text" class="input-text" value="" placeholder="Postcode / ZIP" name="calc_shipping_postcode" id="calc_shipping_postcode">
                                </p>

                                <p>
                                    <button type="submit" name="calc_shipping" value="1" class="button">Update totals</button>
                                </p>

                                <input type="hidden" id="_wpnonce" name="_wpnonce" value="cd3f0d1357">
                                <input type="hidden" name="_wp_http_referer" value="/techmarket/cart/"> </section> -->
                        <!-- </form> -->

                        <a href="{{route('order')}}" class="checkout-button button alt wc-forward">Đặt hàng</a>
                        <a href="{{route('home_product')}}" class="back-to-shopping">Tiếp tục mua hàng</a> </div>

                </div>
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
        <!-- /.cart-wrapper -->
    </div>
</div>







				<!-- <h2 class="page-heading" data-cart-page-title>
					Giỏ hàng của bạn ({{$cart->total_quantity}} sản phẩm)
				</h2> -->

				
			

				<!-- <div data-cart-content>
					@if($cart->total_quantity > 0)
					<table class="cart" data-cart-quantity="2">
						<thead class="cart-header">
							<tr>
								<th class="cart-header-item" colspan="2">Sản phẩm</th>
								<th class="cart-header-item">Giá</th>
								<th class="cart-header-item cart-header-quantity">Số lượng</th>
								<th class="cart-header-item">Tổng</th>
							</tr>
						</thead>
						<tbody class="cart-list">
							@foreach($cart->items as $item)
							<tr class="cart-item" data-item-row="">
								<td class="cart-item-block cart-item-figure">
									<img class="cart-item-image lazyautosizes lazyloaded" data-sizes="auto" src="{{url('uploads/product')}}/{{$item['image']}}" data-src="{{$item['image']}}" alt="{{$item['image']}}" title="{{$item['image']}}" sizes="97px">
								</td>
								<td class="cart-item-block cart-item-title">
									<h4 class="cart-item-name"><a href="{{route('view',['slug'=>$item['slug']])}}">{{$item['title']}}</a></h4>


									<dl class="definitionList">
										<dt class="definitionList-key">Mã sản phẩm:</dt>
										<dd class="definitionList-value">{{$item['title']}}</dd>
									</dl>
								</td>
								<td class="cart-item-block cart-item-info">
									<span class="cart-item-label">Price</span>
									<?php $unit = $item['price'] > 0 ? 'đ' : '';   $price = $item['price'] > 0 ? number_format($item['price']) : $item['price']?>
									<span class="cart-item-value ">{{$price}} {{$unit}} </span>
								</td>

								<td class="cart-item-block cart-item-info cart-item-quantity">

									<label class="form-label cart-item-label" for="qty-70aacdd9-88e7-45ca-9a60-8a2af729f916">Quantity:</label>
									<div class="form-increment">
										<form action="{{route('update_cart',['id'=>$item['id']])}}" method="post" class="ng-pristine ng-valid">
											@csrf
											<input type="number" name="quantity" style="padding:12px 0px;width:50px!important;text-align: center;border: none;" id="qty" value="{{$item['quantity']}}"><button type="submit" style="margin-top: 0px;padding: 10px;" class="btn btn-xs btn-default">Cập nhật                                        
											</button></form></div>
										</td>

										<td class="cart-item-block cart-item-info">
											<span class="cart-item-label">Total</span>
											<?php $total = $item['price'] > 0 ? $item['price'] * $item['quantity'] : 0?>
											<strong class="cart-item-value ">{{number_format($total)}}</strong>
											<a style="text-decoration: none;color: red" class="fa fa-remove" href="{{route('delete_cart',['id'=>$item['id']])}}">
											</a>
										</td>
									</tr>
									@endforeach

								</tbody>
							</table>
							<a style="margin:10px 0" href="#" class="fa fa-print" id="btnPrint">Xuất báo giá</a>
						</div> -->
						
						<!-- <div data-cart-totals>
							<ul class="cart-totals">
								@if(isset($data_uses_coupon['price_reduced']))
								<li class="cart-total" style="margin-top: -2px;">
									<div class="cart-total-label">
										<strong>Mã giảm giá:</strong>
									</div>
									<div class="cart-total-value">
										<span>-{{number_format($data_uses_coupon['price_reduced'])}} đ</span>
									</div>
								</li>
								@endif
								<li class="cart-total">
									<div class="cart-total-label">
										<strong>Tổng tiền:</strong>
									</div>
									<div class="cart-total-value">
										@if(isset($data_uses_coupon['total_amount']))
											<span>{{number_format($data_uses_coupon['total_amount'])}} đ</span>
										@else
											<span>{{number_format($cart->total_amount)}} đ</span>
										@endif
									</div>
								</li>
								
								<li class="cart-total">

								</li>

							</ul>
						</div>
						<div data-cart-totals>
							<ul class="cart-totals" style="width: 58%">
								
								<li class="cart-total">
									<div class="cart-total-label" style="padding-top: 1px">
										<strong>
											<form action="{{route('usesCoupon')}}" method="POST" class="form-inline" role="form">
										
												<div class="form-group">
													<label class="sr-only" for="">label</label>
													<input name="coupon_code" class="form-control" id="" placeholder="Mã giảm giá / Quà tặng" value="{{isset($data_uses_coupon['coupon_code']) ? $data_uses_coupon['coupon_code'] : ''}}">
												</div>
											
												
												@csrf
												<button type="submit" class="btn btn-primary">Đồng ý</button>
											</form>
										</strong>
									</div>

								</li>
								
								<li class="cart-total">

								</li>

							</ul>
						</div>
						<div class="cart-actions">
							<a class="button button--primary" href="{{route('order')}}" title="Click here to proceed to checkout">Tiến hành đặt hàng</a>
							<a href="{{route('clear_cart')}}" class="button button--default" href="clearCart" title="Clear cart">Hủy giỏ hàng</a>
						</div>
						@else
						<div class="jumbotron text-center">
							<div class="container">
								<p style="font-size: 26px;">Bạn chưa có sản phẩn nào trong giỏ hàng</p>
								<div class="emptycart_img">
									<img src="{{url('uploads/1.0.1/emptycart.png')}}" alt="">
								</div>
								<p>
									<a href="{{route('home_product')}}" class="btn btn-primary btn-lg">Tiếp tục mua hàng</a>
								</p>
							</div>
						</div>
						@endif -->
					</main>
				</div>

			</div>
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
	@stop()