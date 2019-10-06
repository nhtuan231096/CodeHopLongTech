<h3>Xin chào {{$order->name}}</h3>
<p>OrderId: #{{$order->id}}</p>
<p>Ngày tạo đơn hàng: {{$order->created_at}}</p>
<p>
	<?php 
	$reduced_price = isset($order->reduced_price) ? $order->reduced_price : 0;
	$use_coupon_code = isset($order->use_coupon_code) ? $order->use_coupon_code : 0;
	$shipping_fee = isset($order->shipping_fee) ? $order->shipping_fee : 0;
	$ship_cod = isset($order->ship_cod) ? $order->ship_cod : 0;
	$total_vat = isset($order->total_vat) ? $order->total_vat : 0;
	$totalPrice = $order->total_price - $reduced_price - $use_coupon_code + $shipping_fee + $ship_cod + $total_vat;
	 ?>
	<strong>Tổng tiền hàng: {{$order->total_price}} đ</strong><br>
	<strong>Sử dụng điểm thưởng: {{$reduced_price}} đ</strong><br>
	<strong>Mã giảm giá: {{$use_coupon_code}} đ</strong><br>
	<strong>Phí ship: {{$shipping_fee}} đ</strong><br>
	<strong>COD: {{$ship_cod}} đ</strong><br>
	<strong>VAT: {{$total_vat}} đ</strong><br>

</p>
<p>
	<strong>
		Chi tiết đơn hàng
	</strong>
</p>
<table border="1" width="666px" cellpadding="5" cellspacing="0">
	<tr>
		<td>STT</td>
		<td>Sản phẩm</td>
		<td>Số lượng</td>
		<td>Giá</td>
	</tr>
	<?php $k=0 ?>
	@foreach($cart->items as $item)
	<tr>
		<td>{{$k+=1}}</td>
		<td>{{$item['title']}}</td>
		<td>{{$item['quantity']}}</td>
		<td>{{$item['price']}}</td>
	</tr>
	@endforeach
</table>
<p>
	<strong>Tổng tiền: {{$totalPrice}} đ</strong><br>
</p>