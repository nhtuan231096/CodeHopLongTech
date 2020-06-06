@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
@if($cart->total_quantity)
<div class="main-container container">
	<ul class="breadcrumb">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
		<li><a href="#">Thanh toán</a></li>
		
	</ul>
	
	<div class="row">
		<!--Middle Part Start-->
		<div id="content" class="col-sm-12">
		  <h2 class="title">Thanh toán</h2>
		  	<form action="{{route('order')}}" method="POST" role="form">
			  <div class="so-onepagecheckout row">
					<div class="col-left col-sm-3">
					  <!-- <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-sign-in"></i> Create an Account or Login</h4>
						</div>
						  <div class="panel-body">
								<div class="radio">
								  <label>
									<input type="radio" value="register" name="account">
									Register Account</label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" checked="checked" value="guest" name="account">
									Guest Checkout</label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" value="returning" name="account">
									Returning Customer</label>
								</div>
						  </div>
					  </div> -->
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-user"></i> Thông tin chung</h4>
						</div>
						  <div class="panel-body">
								<fieldset id="account">
								  <div class="form-group required">
									<label for="input-payment-firstname" class="control-label">Họ tên</label>
									<input type="text" class="form-control" id="input-payment-firstname" placeholder="Họ tên" value="{{ isset(Auth::guard('customer')->user()->name) ? Auth::guard('customer')->user()->name : ''}}" name="name">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-email" class="control-label">E-Mail</label>
									<input type="email" class="form-control" id="input-payment-email" placeholder="E-Mail" value="{{ isset(Auth::guard('customer')->user()->email) ? Auth::guard('customer')->user()->email : ''}}" name="email">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-telephone" class="control-label">Số điện thoại</label>
									<input type="phone" class="form-control" id="input-payment-telephone" placeholder="Số điện thoại" value="{{ isset(Auth::guard('customer')->user()->phone) ? Auth::guard('customer')->user()->phone : ''}}" name="phone">
								  </div>
								</fieldset>
							  </div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-book"></i> Địa chỉ nhận hàng</h4>
						</div>
						  <div class="panel-body">
								<fieldset id="address" class="required">
								  <div class="form-group required">
									<label for="input-payment-address-1" class="control-label">Địa chỉ</label>
									<input type="text" class="form-control" id="input-payment-address-1" placeholder="Địa chỉ nhận hàng" value="{{ isset(Auth::guard('customer')->user()->address) ? Auth::guard('customer')->user()->address : ''}}" name="address">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-city" class="control-label">Thành phố</label>
									<select id="city" class="form-control" required="required">
						                <option value="">Chọn thành phố</option>
						                @foreach($cart->city() as $k=>$itemCity)
						                <option value="{{$k}}">{{$itemCity}}</option>
						                @endforeach
						            </select>
								  </div>
								  
								  <!-- <div class="checkbox"> -->
									<!-- <label> -->
									  <!-- <input type="checkbox" checked="checked" value="1" name="shipping_address"> -->
									  <!-- My delivery and billing addresses are the same.</label> -->
								  <!-- </div> -->
								</fieldset>
							  </div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-truck"></i> Vận chuyển & Thanh toán</h4>
						</div>
						  <div class="panel-body">
								<fieldset id="address" class="required">
								  <div class="form-group required">
									<label for="input-payment-city" class="control-label">Hình thức giao hàng</label>
									<select name="shipping_method" id="input" class="form-control" required>
						                <option value="">Hình thức giao hàng</option>
						                @foreach($cart->shipping_method() as $key => $item)
						                <option value="{{$item}}">{{$item}}</option>
						                @endforeach
						            </select>
								  </div>
								  <div class="form-group required">
									<label for="input-payment-address-1" class="control-label">Hình thức thanh toán</label>
									<select name="payment_method" id="input_payment_method" class="form-control" required>
						                <option value="">Hình thức thanh toán</option>
						                @foreach($cart->payment_method() as $key => $item)
						                <option value="{{$item}}">{{$item}}</option>
						                @endforeach
						            </select>
								  </div>
								  
								  
								  <!-- <div class="checkbox"> -->
									<!-- <label> -->
									  <!-- <input type="checkbox" checked="checked" value="1" name="shipping_address"> -->
									  <!-- My delivery and billing addresses are the same.</label> -->
								  <!-- </div> -->
								</fieldset>
							  </div>
					  </div>
					</div>

					
					<!-- //--- -->
					  <input type="hidden" name="status" value="1">
			          <?php $totalAmount = !empty(request()->session()->get('price_reduced')) ? $cart->total_amount - (request()->session()->get('price_reduced')) : $cart->total_amount?>
			          <!-- <input type="hidden" name="total_price" value="{{number_format(isset($data_red_bill['red_bill_company']) ? ($totalAmount+(($cart->total_amount*10)/100)) : $totalAmount)}}"> -->
			          <input type="hidden" name="total_order_price" value="{{number_format(isset($data_red_bill['red_bill_company']) ? ($totalAmount+(($totalAmount*10)/100)) : $totalAmount)}}">
			          <input type="hidden" name="total_price" value="{{($totalAmount)}}">
			          <input type="hidden" name="red_bill_company" value="{{isset($data_red_bill['red_bill_company']) ? $data_red_bill['red_bill_company'] : ''}}">
			          <input type="hidden" name="red_bill_tax_code" value="{{isset($data_red_bill['red_bill_tax_code']) ? $data_red_bill['red_bill_tax_code'] : ''}}">
			          <input type="hidden" name="red_bill_address" value="{{isset($data_red_bill['red_bill_address']) ? $data_red_bill['red_bill_address'] : ''}}">
			          <input type="hidden" name="vat" value="{{isset($data_red_bill['red_bill_company']) ? 1 : 0}}">
			          <input type="hidden" name="total_vat" value="{{isset($data_red_bill['red_bill_company']) ? ($totalAmount*10)/100 : 0}}">
			          <input type="hidden" id="reward_point" name="reward_point" value="">
			          <input type="hidden" id="redeem_money_point" name="redeem_money" value="">
			          <input type="hidden" id="reduced_price" name="reduced_price" value="">
			          <!-- <input type="text" name="data_uses_coupon" value="{{isset($data_uses_coupon['coupon_code']) ? $data_uses_coupon['coupon_code'] : ''}}"> -->
			          <input type="hidden" name="data_uses_coupon" value="{{!empty(request()->session()->get('coupon_code')) ? request()->session()->get('coupon_code') : ''}}">
			          <input type="hidden" name="use_coupon_code" value="{{!empty(request()->session()->get('price_reduced')) ? request()->session()->get('price_reduced') : ''}}">
			          <input type="hidden" name="shipping_fee" id="shipping_fee_1" value="0">
			          <input type="hidden" name="ship_cod" id="ship_code" value="0">
			          @csrf
					<!-- //--- -->



				<div class="col-right col-sm-9">
				  <div class="row">
					<!-- <div class="col-sm-12"> -->
						<!-- <div class="panel panel-default no-padding">
							<div class="col-sm-6 checkout-shipping-methods">
								<div class="panel-heading">
								  <h4 class="panel-title"><i class="fa fa-truck"></i> Phương thức giao hàng</h4>
								</div>
								<div class="panel-body ">
									<p>Please select the preferred shipping method to use on this order.</p>
									<div class="radio">
									  <label>
										<input type="radio" checked="checked" name="Free Shipping">
										Free Shipping - $0.00</label>
									</div>
									<div class="radio">
									  <label>
										<input type="radio" name="Flat Shipping Rate">
										Flat Shipping Rate - $7.50</label>
									</div>
									
								</div>
							</div>
							<div class="col-sm-6  checkout-payment-methods">
								<div class="panel-heading">
								  <h4 class="panel-title"><i class="fa fa-credit-card"></i> Phương thức thanh toán</h4>
								</div>
								<div class="panel-body">
									<p>Please select the preferred payment method to use on this order.</p>
									<div class="radio">
									  <label>
										<input type="radio" checked="checked" name="Cash On Delivery">Cash On Delivery</label>
									</div>
									
									<div class="radio">
									  <label>
										<input type="radio" name="Paypal">Paypal</label>
									</div>
								</div>
							</div>
						</div> -->
						
						
							
						<!-- </div> -->
					
					
					
					<!-- <div class="col-sm-12">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-ticket"></i> Do you Have a Coupon or Voucher?</h4>
						</div>
						  <div class="panel-body row">
							<div class="col-sm-6 ">
							<div class="input-group">
							  <input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon here" value="" name="coupon">
							  <span class="input-group-btn">
							  <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Apply Coupon">
							  </span></div>
							</div>
							
							<div class="col-sm-6">
							<div class="input-group">
							  <input type="text" class="form-control" id="input-voucher" placeholder="Enter your gift voucher code here" value="" name="voucher">
							  <span class="input-group-btn">
							  <input type="submit" class="btn btn-primary" data-loading-text="Loading..." id="button-voucher" value="Apply Voucher">
							  </span> </div>
							</div>
						  </div>
					  </div>
					</div> -->

					<div class="col-sm-12">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Giỏ hàng của bạn</h4>
						</div>
						  <div class="panel-body">
							<div class="table-responsive">
							  <table class="table table-bordered">
								<thead>
								  <tr>
									<td class="text-center">Ảnh</td>
									<td class="text-left">Sản phẩm</td>
									<td class="text-left">Số lượng</td>
									<td class="text-right">Đơn giá</td>
									<td class="text-right">Thành tiền</td>
								  </tr>
								</thead>
								<tbody>
								  @foreach($cart->items as $item)
								  <tr>
									<td class="text-center"><a href=""><img width="60px" src="{{url('uploads/product')}}/{{$item['image']}}" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes" class="img-thumbnail"></a></td>
									<td class="text-left"><a href="">{{$item['title']}}</a></td>
									<td class="text-left"><div class="input-group btn-block" style="min-width: 100%;">
										<!-- <input type="text" name="quantity" value="1" size="1" class="form-control">
										<span class="input-group-btn">
										<button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
										<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
										</span></div></td> -->
										<span>{{$item['quantity']}}</span>
									<td class="text-right">{{number_format($item['price'])}}</td>
									<?php $price = $item['price'] > 0 ? number_format($item['price']*$item['quantity']).'đ' : $item['price'] ?>
									<td class="text-right">{{$price}}</td>
								  </tr>
								  @endforeach
								</tbody>
								<tfoot>
								  <tr>
									<td class="text-right" colspan="4"><strong>Phí vận chuyển:</strong></td>
									<td class="text-right">
										<span class="text-muted" id="shipping_fee">0</span>
									</td>
								  </tr>
								  <tr>
									<td class="text-right" colspan="4"><strong>Phí ship COD:</strong></td>
									<td class="text-right">
										<span class="text-muted" id="ship_cod">0</span>
									</td>
								  </tr>
								  <tr>
									<td class="text-right" colspan="4"><strong>Mã giảm giá:</strong></td>
									<td class="text-right">
										@if(!empty(request()->session()->get('price_reduced')))
											<?php $price_reduced = request()->session()->get('price_reduced') ?>
	        								<span class="text-muted">-{{number_format($price_reduced)}}</span>
	        							@endif
									</td>
								  </tr>
								  <tr>
									<td class="text-right" colspan="4"><strong>VAT (10%):</strong></td>
									@if(isset($data_red_bill['red_bill_company']))
										<?php $vat = ((($totalAmount * 10) / 100))?>
										<td class="text-right">{{number_format($vat)}}</td>
									@else
										<td class="text-right">0</td>
									@endif
								  </tr>
								  <tr>
									<td class="text-right" colspan="4"><strong>Tổng tiền:</strong></td>
									<?php 
					                    $cart_total = isset($data_red_bill['red_bill_company']) ? ($cart->total_amount + (($totalAmount * 10) / 100)) : $cart->total_amount;
					                    $cart_total = (!empty(request()->session()->get('price_reduced'))) ? $cart_total - request()->session()->get('price_reduced') : $cart_total;
					                ?>
									<td class="text-right">
										<i id="totalPrice" style="text-decoration: underline;">{{number_format($cart_total)}}</i>
	              						<i id="getTotalPrice" style="display: none;">{{number_format($cart_total)}}</i>
									</td>
								  </tr>
								</tfoot>
							  </table>
							</div>
						  </div>
					  </div>
					</div>
					<div class="col-sm-12">
					  <!-- <div class="panel panel-default"> -->
						<!-- <div class="panel-heading"> -->
						  <!-- <h4 class="panel-title"><i class="fa fa-pencil"></i> Xác nhận đặt hàng</h4> -->
						<!-- </div> -->
						  <!-- <div class="panel-body"> -->
							<!-- <textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea> -->
							<!-- <br> -->
							<label class="control-label" for="confirm_agree">
							  <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
							  <span>Tôi đã đọc và đồng ý với các <a class="agree" href="{{route('terms_purc')}}"><b>Điều khoản</b></a></span> </label>

							<label class="control-label pull-right" for="confirm_agree">
								@if(isset($data_red_bill['red_bill_company']))
								<a href="{{route('order',['status'=>'unCheck'])}}" style="width: 100%">
						          <div style="width: 31px; height:31px;position: absolute;z-index: 3;"></div>
						          <div class="chkbx" style="float: left;">
						            <input type="checkbox" value="None" id="chkbx" name="check" checked />
						            <label for="chkbx"></label>
						          </div>
						          <span style="width: 86%;float: right;line-height: 2.3;padding-bottom: 15px" class="text-right" style="text-decoration: underline;">Lấy hóa đơn VAT</span>
						        </a>
								@else
							    <a data-toggle="modal" href='#modal-id' style="width: 100%">
						          <div class="chkbx" style="float: left;">
						            <input type="checkbox" value="None" id="chkbx" name="check" />
						            <label for="chkbx"></label>
						          </div>
						          <span style="width: 86%;float: right;line-height: 2.3" class="text-right" style="text-decoration: underline;">Lấy hóa đơn VAT</span>
						        </a>
						        @endif
							<div class="buttons">
							  <div class="pull-right">
								<input type="submit" class="btn btn-primary" id="button-confirm" value="Xác nhận đặt hàng">
							  </div>
							</div>
						  <!-- </div> -->
					  <!-- </div> -->
					</div>
				  </div>
				</div>
			  </div>
		  </form>
		</div>
		<!--Middle Part End -->
		
	</div>
</div>
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
	  <div class="modal-content" style="width: 100%">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	      <h4 class="modal-title">Thông tin viết hóa đơn</h4>
	    </div>
	    <div class="modal-body">
	      <form action="{{route('red_bill')}}" method="POST" role="form">

	        <div class="form-group">
	          <label class="lab" for="">Tên công ty</label>
	          <input type="text" class="form-control" name="red_bill_company" required placeholder="Nhập tên công ty">
	        </div>
	        <div class="form-group">
	          <label class="lab" for="">Mã số thuế</label>
	          <input type="number" class="form-control" name="red_bill_tax_code" required placeholder="Nhập mã số thuế">
	        </div>
	        <div class="form-group">
	          <label class="lab" for="">Địa chỉ xuất hóa đơn</label>
	          <input type="text" class="form-control" name="red_bill_address" required placeholder="Nhập địa chỉ công ty ( bao gồm Phường / Xã, Quận, Huyện, Tỉnh / Thành phố nếu có) ...">
	        </div>
	        @csrf
	        <div style="font-size: 14px">*<b>Lưu ý:</b> Hoplong <span style="color: red">CHỈ XUẤT HÓA ĐƠN ĐỎ 1 LẦN DUY NHẤT</span> theo thông tin bạn đã nhập</div>
	        <div class="modal-footer" style="padding-bottom: 0px">
	          <button type="submit" class="btn btn-primary">Xác nhận</button>
	          <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
	        </div>

	      </form>
	    </div>
	  </div>
	</div>
</div>
@else
<div class="jumbotron text-center">
	<div class="container">
		<h1>Tiếp tục mua hàng!</h1>
		<p>
			<a href="{{route('home')}}" class="btn btn-primary btn-lg">Quay lại trang chủ</a>
		</p>
	</div>
</div>
@endif
<!-- //--- -->
<script type="text/javascript">
// var ship_code = 0;
// var shipping_fee = 0;
var getShippingFee = $('#shipping_fee_1').val(0);
var getShipCod = $('#ship_code').val(0)
var reduced_price =$('#reduced_price').val(0)
// ship cod
$('#input_payment_method option[value=""]').attr('selected','selected');
$('#input_payment_method').change(function(){
  var getTotalPrice = $('#getTotalPrice').text();
    getTotalPrice = getTotalPrice.replace(',','');
    getTotalPrice = getTotalPrice.replace(',','');
    getTotalPrice = getTotalPrice.replace(',','');


  var TotalPrice = $('#totalPrice').text();
    TotalPrice = TotalPrice.replace(',','');
    TotalPrice = TotalPrice.replace(',','');
    TotalPrice = TotalPrice.replace(',','');
      
  var value = $('#input_payment_method').val();
  var cartTotal = TotalPrice;
  if(value == 'Thanh toán tiền mặt khi nhận hàng'){
      $('#ship_cod').text('15,000');
      $('#show_ship_cod').css('display','block','!important');
      ship_code = 15000;
  }
  // if(value != 'Thanh toán tiền mặt khi nhận hàng' && value != 'Thanh toán bằng thẻ quốc tế Visa, Master, JCB'){
  //   $('#ship_cod').text('0');
  //   $('#show_ship_cod').css('display','none','!important');
  //   ship_code = 0;
  // }
  else{
    $('#ship_cod').text('0');
    ship_code = 0;
  }
  
  // $('#ship_code').val(ship_code);
  var getShipCod = $('#ship_code').val(ship_code);
  var getShippingFee = $('#shipping_fee_1');
  reduced_price = $('#reduced_price');
  var format_reward_point = String(reduced_price.val()).replace(',','');
  var format_reward_point = String(format_reward_point).replace(',','');
  check(getShipCod.val(),getShippingFee.val(),getTotalPrice,format_reward_point);
});  
// end ship cod

// shipping fee
$('#city option[value=""]').attr('selected','selected');
$('#city').change(function(){ 
  var getTotalPrice = $('#getTotalPrice').text();
    getTotalPrice = getTotalPrice.replace(',','');
    getTotalPrice = getTotalPrice.replace(',','');
    getTotalPrice = getTotalPrice.replace(',','');


  var TotalPrice = $('#totalPrice').text();
    TotalPrice = TotalPrice.replace(',','');
    TotalPrice = TotalPrice.replace(',','');
    TotalPrice = TotalPrice.replace(',','');

    var value = $(this).val();
    var cartTotal = TotalPrice;
    // var show_shipping_fee = $('#shipping_fee');
    // cartTotal = cartTotal.replace(',','');
    // cartTotal = cartTotal.replace(',','');
    // cartTotal = cartTotal.replace(',','');
    // console.log(show_shipping_fee);
    
    if(cartTotal >= 5000000){
      // return shipping_fee;
      shipping_fee = 0;
    }
    else {
      if(value == 0){
      shipping_fee = 30000;
      // return shipping_fee;
      }
      else {
        shipping_fee = 20000;
        // return shipping_fee;
      }
    }
    format_shipping_fee = String(shipping_fee).replace(/(.)(?=(\d{3})+$)/g,'$1,');
    $('#shipping_fee').text(format_shipping_fee);
    $('#show_shipping_fee').css('display','block','!important');
    var  getShippingFee= $('#shipping_fee_1').val(shipping_fee);
    var getShipCod = $('#ship_code');
    var reduced_price = $('#reduced_price');
    var format_reward_point = String(reduced_price.val()).replace(',','');
    var format_reward_point = String(format_reward_point).replace(',','');
    check(getShipCod.val(),getShippingFee.val(),getTotalPrice,format_reward_point);
    // $('#shipping_fee_1').val(parseInt(shipping_fee));

    // cartTotal = parseInt(cartTotal)+parseInt(shipping_fee);
    // if(check_cod == 1){
    //   cartTotal = cartTotal+15000;
    // }

    // // format cartTotal
    // cartTotal = String(cartTotal).replace(/(.)(?=(\d{3})+$)/g,'$1,');
    // // format shipping_fee
    // shipping_fee = String(shipping_fee).replace(/(.)(?=(\d{3})+$)/g,'$1,');

    // show_shipping_fee.text(shipping_fee);
    // $('#show_shipping_fee').css('display','block','!important');
    // check_ship = cartTotal;
    // reload
    // cartTotal = 0;
    // show_shipping_fee = 0;
    // shipping_fee = 0;
});

// reward point
$('.reward_points').click(function(){
  $('.reward_points').css("display","none");
  $('.use_reward_points').css("display","block");
});

$('.fa-remove').click(function(){
  $('.reward_points').css("display","block");
  $('.use_reward_points').css("display","none");
});
$('#fa-fa-check').click(function(){
  var getTotalPrice = $('#getTotalPrice').text();
    getTotalPrice = getTotalPrice.replace(',','');
    getTotalPrice = getTotalPrice.replace(',','');
    getTotalPrice = getTotalPrice.replace(',','');


  var TotalPrice = $('#totalPrice').text();
    TotalPrice = TotalPrice.replace(',','');
    TotalPrice = TotalPrice.replace(',','');
    TotalPrice = TotalPrice.replace(',','');


  function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
  }
  // check customer login
  <?php if(Auth::guard('customer')->check()): ?>

  var points = <?php echo $cart->Reward_points()->redeem_money?>;
  var auth_point = <?php echo Auth::guard('customer')->user()->reward_points ?>;
  var money = $('#redeem_money').val();
  if(money <= auth_point)
  {
    var total_price = <?php echo $cart_total?>;
    var total = total_price - (money * points);
    var reduced_price = (money * points);
    
    // $('#totalPrice').text(formatNumber(total));
    check(getShipCod.val(),getShippingFee.val(),getTotalPrice,reduced_price); 


    $('#reward_point').val(formatNumber(total));
    $('#redeem_money_point').val(formatNumber(money));
    $('#reduced_price').val(formatNumber(reduced_price));
    
    // $('.reward_points').css("display","block");
    alert('Bạn đã sử dụng '+money+' điểm để đổi '+ formatNumber(reduced_price))+ 'đ';
  }

  else{
    alert('Giá trị nhập vào không hợp lệ');
  }
<?php endif ?>
}); 
// reward point

var check = function (ship_cod,shipping_fee,getTotalPrice,reduced_price){
  var TotalCart = parseInt(ship_cod) + parseInt(shipping_fee) + parseInt(getTotalPrice) - parseInt(reduced_price);
  // console.log(ship_cod);
  // console.log(shipping_fee);
  // console.log(getTotalPrice);
  // console.log(reduced_price);
  var formatTotalPrice = String(TotalCart).replace(/(.)(?=(\d{3})+$)/g,'$1,');
  $('#totalPrice').text(formatTotalPrice);

}
</script>
<!-- //--- -->
@stop()