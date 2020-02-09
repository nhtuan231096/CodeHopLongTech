@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Thông tin đặt hàng</a></li>
    </ul>
    
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
            <h2 class="title">Order ID: #{{$order->order_id}}</h2> 
            <div class="row">
                <div class="col-md-3">
                    Ngày tạo order: {{date_format($order->created_at, 'd/m/Y')}}
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td class="text-center">Ảnh</td>
                            <td class="text-left">Sản phẩm</td>
                            <td class="text-center">Số lượng</td>
                            <td class="text-center">Trạng thái</td>
                            <td class="text-right">Giá sản phẩm</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->order_detail as $order_item)
                        <tr>
                            <td class="text-center">
                                <a href="product.html">
                                    <img width="85" class="img-thumbnail" title="{{$order_item->product_name}}" alt="{{$order_item->product_name}}" src="{{url('uploads/product')}}/{{$order_item->product_image}}">
                                </a>
                            </td>
                            <td class="text-left"><a href="product.html">{{$order_item->product_name}}</a>
                            </td>
                            <td class="text-center">{{$order_item->quantity}}</td>
                            <td class="text-center">Shipped</td>
                            <td class="text-right">{{number_format($order_item->price)}}</td>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right">
                                <p style="font-weight: bold;">Phí vận chuyển: {{number_format($order->shipping_fee)}}</p>
                                @if(($order->ship_cod)>0)
                                <p style="font-weight: bold;">COD: {{number_format($order->ship_cod)}}</p>
                                @elseif(($order->total_vat)>0)
                                <p style="font-weight: bold;">VAT: {{number_format($order->total_vat)}}</p>
                                @elseif(($order->use_coupon_code)>0)
                                <p style="font-weight: bold;">Mã giảm giá: {{number_format($order->use_coupon_code)}}</p>
                                @elseif(($order->reduced_price)>0)
                                <p style="font-weight: bold;">Sử dụng điểm thưởng: {{number_format($order->reduced_price)}}</p>
                                @endif
                                <p style="font-weight: bold;">Tổng tiền: {{number_format($order->total_order_price)}}</p>
                            </td>
                        </tr>
                </table>
            </div>
            <a href="{{route('home')}}" class="btn btn-md btn-primary">Tiếp tục mua hàng</a>
        </div>
        <!--Middle Part End-->
        <!--Right Part Start -->
        <aside class="col-sm-3 hidden-xs content-aside col-md-3" id="column-right">
            <h2 class="subtitle">Account</h2>
            <div class="list-group">
            <ul class="list-item">
                <li><a href="{{route('login_customer')}}">Đăng nhập</a>
                </li>
                <li><a href="{{route('register_customer')}}">Đăng ký</a>
                </li>
                <li><a href="{{route('forgotPassword')}}">Quên mật khẩu</a>
                </li>
                <li><a href="{{route('my_account')}}">Tài khoản của tôi</a>
                </li>
                <li><a href="{{route('customer_order_history')}}">Order History</a>
                </li>
            </ul>
            </div>          
        </aside>
        <!--Right Part End -->
    </div>
</div>
<!-- //Main Container -->
@stop()