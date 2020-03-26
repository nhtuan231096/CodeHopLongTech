@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Lịch sử đặt hàng</a></li>
    </ul>
    
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
            <div class="clearfix"></div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td class="text-center">Order ID</td>
                            <td class="text-center">Trạng thái</td>
                            <td class="text-center">Tổng tiền</td>
                            <td class="text-center"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order as $order_item)
                        <tr>
                            <td class="text-center">
                                #{{$order_item->order_id}}
                            </td>
                            <td class="text-center">{{$cart->check_order_status($order_item->status)}}</td>
                            <td class="text-center">
                                {{number_format($order_item->total_order_price)}}
                            </td>
                            <td class="text-center">
                                <a href="{{route('orderInformation',['id'=>$order_item->order_id])}}" class="fa fa-eye" target="_blank"></a>
                            </td>
                        </tr>
                        @endforeach
                        
                </table>
                {{$order->links()}}
            </div>
            <a href="{{route('home')}}" class="btn btn-md btn-primary">Mua hàng</a>
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
                    <li><a href="{{route('my_account')}}">Tài khoản của tôi</a>
                    </li>
                    <li><a href="{{route('customer_order_history')}}">Order History</a>
                    </li>
                    <li><a href="{{route('logout_customer')}}">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </aside>
        <!--Right Part End -->
    </div>
</div>
<!-- //Main Container -->
@stop()