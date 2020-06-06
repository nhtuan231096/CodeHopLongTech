@extends('layouts.product1')
@section('content')
<style type="text/css">
  a:hover{ color:#4d84c7;}
  input[type=checkbox] {
    visibility: hidden;
  }
  .chkbx {
    width: 31px;
    height: 31px;
    background: #4d84c7;
    /*border-radius: 30px;*/
    background: -webkit-linear-gradient(top, #4d84c7 0%, #245390 100%);
    background: -moz-linear-gradient(top, #4d84c7 0%, #245390 100%);
    background: -o-linear-gradient(top, #4d84c7 0%, #245390 100%);
    background: -ms-linear-gradient(top, #4d84c7 0%, #255490 100%);
    background: linear-gradient(top, #4d84c7 0%, #245390 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4d84c7', endColorstr='#245390',GradientType=0 );
    /* margin: 0px auto; */
    /* margin-top: 50px; */
    /* box-shadow: inset 0px 0px 5px rgba(255,255,255,0.5), 0px 1px 5px rgba(0,0,0,0.5); */
    position: relative;
  }
  .chkbx label {
    cursor: pointer;
    position: absolute;
    width: 26px;
    height: 26px;
    /*border-radius: 18px;*/
    left: 2px;
    top: 2px;
    box-shadow: inset 0px 0px 3px rgba(0,0,0,0.7), 0px 1px 1px rgba(0,0,0,0.5);
    background: rgb(252,243,209);
  }
  .chkbx label:before {
    content: "";
    width: 26px;
    height: 26px;
    /* background: rgb(230,217,169); */
    position: absolute;
    left: 0px;
    top: 0px;
    border-radius: 5px;
  }
  .chkbx label:after {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    opacity: 0;
    content: '';
    position: absolute;
    width: 20px;
    height: 14px;
    background: transparent;
    top: 5px;
    left: 4px;
    border: 6px solid rgb(93, 82, 255);
    border-radius: 5px;
    border-top: none;
    border-right: none;
    transform: rotate(-45deg);
    transition: opacity 0.3s;
  }

  .chkbx label:hover::after {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
    filter: alpha(opacity=30);
    opacity: 0.3;
  }

  .chkbx input[type=checkbox]:checked + label:after {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
  }
  .lab{
    font-weight: 600;
  }
  .rm_style_button{
  background: #fff!important;
  padding:0;
}
</style>
<div class="container">
	<nav class="woocommerce-breadcrumb"><a href="https://demo2.chethemes.com/techmarket">Trang chủ</a><span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>Checkout</nav>
</div>
<div class="container">
  <div class="text-center">
    <h2 class="my-4 pt-2"><strong>Checkout form</strong></h2>
  </div>

  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3"><strong>Billing address</strong></h4>
      <form action="{{route('order')}}" method="POST" role="form">
      	<div class="row">
          <div class="col-md-6 mb-3">
            <div class="md-form md-outline my-2">
              <input type="text" name="name" placeholder="Họ tên" required class="form-control" value="{{ isset(Auth::guard('customer')->user()->name) ? Auth::guard('customer')->user()->name : ''}}">
              <!-- <label for="firstName">First name</label> -->
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="md-form md-outline my-2">
              <input type="number" name="phone" placeholder="Số điện thoại" required class="form-control" value="{{ isset(Auth::guard('customer')->user()->phone) ? Auth::guard('customer')->user()->phone : ''}}">
            </div>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-md-6 mb-3">
            <div class="md-form md-outline my-2">
              <input type="text" name="username" placeholder="Username" class="form-control" required value="{{ isset(Auth::guard('customer')->user()->username) ? Auth::guard('customer')->user()->username : ''}}">
            </div>
          </div> -->

          <div class="col-md-12  mb-3">
            <div class="md-form md-outline my-2">
              <input type="email" name="email" placeholder="Email" class="form-control" required value="{{ isset(Auth::guard('customer')->user()->email) ? Auth::guard('customer')->user()->email : ''}}">
            </div>
          </div>
        </div>
        

        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="md-form md-outline my-2">
              <select name="payment_method" id="input" class="form-control" required>
                <option value="">Hình thức thanh toán</option>
                @foreach($cart->payment_method() as $key => $item)
                <option value="{{$item}}">{{$item}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-md-6  mb-3">
            <div class="md-form md-outline my-2">
              <select name="shipping_method" id="input" class="form-control" required>
                <option value="">Hình thức giao hàng</option>
                @foreach($cart->shipping_method() as $key => $item)
                <option value="{{$item}}">{{$item}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        
        

        <div class="row">

          <div class="col-12 mb-3">
            <div class="md-form md-outline my-2">
              <input type="text" name="address" placeholder="Địa chỉ nhận hàng" class="form-control" required value="{{ isset(Auth::guard('customer')->user()->address) ? Auth::guard('customer')->user()->address : ''}}">
            </div>
          </div>
          <input type="hidden" name="status" value="1">
          <input type="hidden" name="total_price" value="{{number_format(isset($data_red_bill['red_bill_company']) ? ($cart->total_amount+(($cart->total_amount*10)/100)) : $cart->total_amount)}}">
          <input type="hidden" name="red_bill_company" value="{{isset($data_red_bill['red_bill_company']) ? $data_red_bill['red_bill_company'] : ''}}">
          <input type="hidden" name="red_bill_tax_code" value="{{isset($data_red_bill['red_bill_tax_code']) ? $data_red_bill['red_bill_tax_code'] : ''}}">
          <input type="hidden" name="red_bill_address" value="{{isset($data_red_bill['red_bill_address']) ? $data_red_bill['red_bill_address'] : ''}}">
          <input type="hidden" name="vat" value="{{isset($data_red_bill['red_bill_company']) ? 1 : 0}}">
          <input type="hidden" id="reward_point" name="reward_point" value="">
          <input type="hidden" id="redeem_money_point" name="redeem_money" value="">
          <input type="hidden" id="reduced_price" name="reduced_price" value="">
          @csrf
        </div>

        <!-- <div class="row">
          <div class="col-md-5 mb-3">
            <select class="custom-select d-block w-100 mt-2" id="country" required>
              <option value="">Country</option>
              <option>United States</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <select class="custom-select d-block w-100 mt-2" id="state" required>
              <option value="">State</option>
              <option>California</option>
            </select>
          </div>
          <div class="col-md-3 mb-3">
            <div class="md-form md-outline mt-2 mb-0">
              <input type="text" id="zip" placeholder="Zip" class="form-control mb-0" required>
            </div>
          </div>
        </div>      -->   
        <div class="checkbox">
          <label>
            <input type="checkbox" value="terms_of_payment" style="display: inline-block;visibility: visible;" required>
            Xác nhận <a href="{{route('terms_purc')}}" target="_blank" style="font-style: italic;text-decoration: underline;">điều khoản.</a>
          </label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg" type="submit">Xác nhận đặt hàng</button>
      </form>
    </div>
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-4-5">
        <span class="text-muted"><strong>Giỏ hàng của bạn</strong></span>
        <span class="badge badge-primary badge-pill">{{$cart->total_quantity}}</span>
      </h4>
      <ul class="list-group mb-3" style="margin: 0 0 1em 0em">
        @foreach($cart->items as $item)
        <li class="list-group-item d-flex justify-content-between lh-condensed">
         <div>
           <h6 class="my-0">{{$item['title']}}</h6>
           <small class="text-muted">Số lượng: {{$item['quantity']}}</small>
         </div>
         <?php $price = $item['price'] > 0 ? number_format($item['price']*$item['quantity']).'đ' : $item['price'] ?>
         <span class="text-muted">{{$price}}</span>
       </li>
       @endforeach


       @if(isset($data_red_bill['red_bill_company']))
       <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
          <h6 class="my-0">VAT</h6>
        </div>
        <?php $vat = ((($cart->total_amount * 10) / 100))?>
        <span class="text-muted">{{number_format($vat)}}</span>
      </li>

      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <a href="{{route('order',['status'=>'unCheck'])}}" style="width: 100%">
          <div style="width: 31px; height:31px;position: absolute;z-index: 3;"></div>
          <div class="chkbx" style="width: 10%;float: left;">
            <input type="checkbox" value="None" id="chkbx" name="check" checked />
            <label for="chkbx"></label>
          </div>
          <span style="width: 90%;float: right;line-height: 2.3" class="text-right" style="text-decoration: underline;">Lấy hóa đơn VAT</span>
        </a>
      </li>

      @else
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <a data-toggle="modal" href='#modal-id' style="width: 100%">
          <div class="chkbx" style="width: 10%;float: left;">
            <input type="checkbox" value="None" id="chkbx" name="check" />
            <label for="chkbx"></label>
          </div>
          <span style="width: 90%;float: right;line-height: 2.3" class="text-right" style="text-decoration: underline;">Lấy hóa đơn VAT</span>
        </a>
      </li>

      @endif
        
          @if(Auth::guard('customer')->check())
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class="chkbxx reward_points" style="width: 10%;float: left;">
              <!-- <input type="checkbox" value="None"/>
                <label for="chkbx"></label> -->
              </div>
              <form action="{{route('use_redeem_money')}}" method="POST" style="width: 100%;float: right;margin-bottom: 0px">
                <span style="line-height: 2.3;"  class="text-right" style="text-decoration: underline;">
                  <i class="reward_points pull-right" style="text-decoration: underline;cursor: pointer;">Sử dụng điểm thưởng ({{Auth::guard('customer')->user()->reward_points}})</i>
                  <div class="form-group use_reward_points" style="display: none;margin-bottom: 0px">
                    <label class="sr-only" for="">label</label>
                    <input style="width: 90%;float: left;" name="redeem_money" id="redeem_money" type="number" class="form-control" placeholder="Bạn có {{Auth::guard('customer')->user()->reward_points}} điểm" min="0" max="{{Auth::guard('customer')->user()->reward_points}}" required>
                  </div>
                </span>
                @csrf
                <div class="chkbxx use_reward_points" style="width: 10%;margin-top:6px;float: left; display: none;cursor: pointer;">
                  <button type="button" class="rm_style_button">
                    <a href="#"><span style="margin-left: 12px" class="fa fa-check"></span></a>
                  </button>
                  <!-- <span style="margin-left: 12px" class="fa fa-remove"></span> -->
                </div>
              </form>
              
            </li>


            


           <!--  <li class="reddem_points list-group-item d-flex justify-content-between lh-condensed" style="display: none!important;">
              <div>
                <h6 class="my-0"><b>Điểm thưởng :</b></h6>
              </div>
              <?php $cart_total = isset($data_red_bill['red_bill_company']) ? ($cart->total_amount + (($cart->total_amount * 10) / 100)) : $cart->total_amount?>
              <i id="points_redeem" style="text-decoration: underline;">{{number_format($cart_total)}}</i>
            </li>
            --> 



            <script src="//code.jquery.com/jquery.js"></script>

            <script>
              $('.reward_points').click(function(){
                $('.reward_points').css("display","none");
                $('.use_reward_points').css("display","block");
              });

              $('.fa-remove').click(function(){
                $('.reward_points').css("display","block");
                $('.use_reward_points').css("display","none");
              });
              $('.fa-check').click(function(){
                function formatNumber(num) {
                  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
                }
                var points = <?php echo $cart->Reward_points()->redeem_money?>;
                var auth_point = <?php echo Auth::guard('customer')->user()->reward_points ?>;
                var money = $('#redeem_money').val();
                if(money <= auth_point)
                {
                  var total_price = <?php echo $cart_total?>;
                  var total = total_price - (money * points);
                  var reduced_price = (money * points);
                  $('#totalPrice').text(formatNumber(total));
                  $('#reward_point').val(formatNumber(total));
                  $('#redeem_money_point').val(formatNumber(money));
                  $('#reduced_price').val(formatNumber(reduced_price));
                }

                else{
                  alert('Giá trị nhập vào không hợp lệ');
                }
                // console.log(points * money);

                // alert($('#redeem_money').val());
                // $('.reward_points').css("display","block");
                // $('.use_reward_points').css("display","none");
              });
            </script>
            @endif

            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"><b>Tổng tiền :</b></h6>
              </div>
              <?php $cart_total = isset($data_red_bill['red_bill_company']) ? ($cart->total_amount + (($cart->total_amount * 10) / 100)) : $cart->total_amount?>
              <i id="totalPrice" style="text-decoration: underline;">{{number_format($cart_total)}}</i>
            </li>
          </ul>
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
     <!--  <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-primary btn-md my-0 ml-0">Redeem</button>
          </div>
        </div>
      </form> -->
    </div>
  </div>
</div>
@stop()
