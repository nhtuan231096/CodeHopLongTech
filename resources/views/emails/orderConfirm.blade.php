<span style="font-size: 16px;font-weight: bold">Kính chào quý khách :{{$order['name']}}</span>
<br>
<span>Hoplongtech rất vui lòng thông báo đơn hàng <span style="color:blue">#{{$order['id']}}</span> của quý khách đặt đã được tiếp nhận và đang trong quá trình xử lý.</span>
<br>
<p style="font-weight: bold">
	<span style="font-size: 14px;text-decoration: underline;">Thông tin đơn hàng </span>: #{{$order['id']}} (Ngày tạo: {{date_format($order['created_at'],"d/m/Y H:i:s")}})
</p> 
<hr>
<p><span style="font-weight: bold">Người nhận:</span> {{$order['name']}}</p>
<p><span style="font-weight: bold">Email:</span> {{$order['email']}}</p>
<p><span style="font-weight: bold">Số điện thoại:</span> {{$order['phone']}}</p>
<p><span style="font-weight: bold">Địa chỉ nhận hàng:</span> {{$order['address']}}</p>
<p><span style="font-weight: bold">Tổng tiền:</span> {{number_format($order['total_price'])}}</p>