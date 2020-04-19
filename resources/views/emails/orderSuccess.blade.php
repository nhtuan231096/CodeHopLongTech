<span style="font-size: 16px;font-weight: bold">Kính chào quý khách, Cảm ơn quý khách đã đặt hàng</span>
<br>
<span>Hoplongtech rất vui lòng thông báo đơn hàng <span style="color:blue">#{{$order['id']}}</span> của quý khách đặt đã hoàn thành.
<br>
Quý khách đã tích được <b>{{$order['reward_point']}}</b> điểm. 
@if($order['new_account'] == true)
Hãy đăng nhập bằng email đã mua hàng và mật khẩu mặc định là <b style="text-decoration: underline;">{{$order['password']}}</b> để tích điểm trên hệ thống</span>.
<br>
@endif
<span>Mỗi 1 điểm sẽ quy đổi bằng {{number_format($order['redeem_money'])}}đ, số tiền sẽ được trừ khi Quý khách mua những đơn hàng sau</span>
<br>