@extends('layouts.v2.index')
@section('mainContainer')
    <script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
    <!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Thông tin đặt hàng</a></li>
        </ul>

        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-sm-9">
                <h2 class="title">Thông tin đặt hàng</h2>

                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <td colspan="2" class="text-left">Chi tiết đơn hàng</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="width: 50%;" class="text-left"> <b>Order ID:</b> #{{$order->order_id}}
                            <br>
                            <b>Ngày đặt hàng:</b> {{date_format($order->created_at, 'd/m/Y')}}</td>
                        <td style="width: 50%;" class="text-left"> <b>Phương thức thanh toán:</b> {{$order->payment_method}}
                            <br>
                            <b>Phương thức thanh toán:</b> {{$order->shipping_method}} </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <td style="width: 50%; vertical-align: top;" class="text-left">Địa chỉ thanh toán</td>
                        <td style="width: 50%; vertical-align: top;" class="text-left">Địa chỉ giao hàng</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">
                            {{$order->address}}
                        </td>
                        <td class="text-left">
                            {{$order->address}}
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <td class="text-left">Sản phẩm</td>
                            <td class="text-left">Ảnh</td>
                            <td class="text-right">Số lượng</td>
                            <td class="text-right">Giá</td>
                            <td class="text-right">Thành tiền</td>
                            <!-- <td style="width: 20px;"></td> -->
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order->order_detail as $order_item)
                            <tr>
                                <td class="text-left">
                                    {{$order_item->product_name}}
                                </td>
                                <td class="text-left">
                                    <img width="85" class="img-thumbnail" title="{{$order_item->product_name}}" alt="{{$order_item->product_name}}" src="{{url('uploads/product')}}/{{$order_item->product_image}}">
                                </td>
                                <td class="text-right">
                                    {{$order_item->quantity}}
                                </td>
                                <td class="text-right">
                                    {{number_format($order_item->price)}}
                                </td>
                                <?php $totalPrice = $order_item->price * $order_item->quantity; ?>
                                <td class="text-right">
                                    {{number_format($totalPrice)}}
                                </td>
                                <!-- <td style="white-space: nowrap;" class="text-right"> <a class="btn btn-primary" title="" data-toggle="tooltip" href="#" data-original-title="Reorder"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-danger" title="" data-toggle="tooltip" href="return.html" data-original-title="Return"><i class="fa fa-reply"></i></a>
                                </td> -->
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <!--  <tr>
                             <td colspan="3"></td>
                             <td class="text-right"><b>Tổng tiền</b>
                             </td>
                             <td class="text-right">$101.00</td>
                             <td></td>
                         </tr> -->
                        <tr>
                            <td colspan="3"></td>
                            <td class="text-right"><b>Phí vận chuyển</b>
                            </td>
                            <td class="text-right">{{number_format($order->shipping_fee)}}</td>
                        </tr>
                        @if(($order->ship_cod)>0)
                            <tr>
                                <td colspan="3"></td>
                                <td class="text-right"><b>COD</b>
                                </td>
                                <td class="text-right">{{number_format($order->ship_cod)}}</td>
                            </tr>
                        @endif
                        @if(($order->total_vat)>0)
                            <tr>
                                <td colspan="3"></td>
                                <td class="text-right"><b>VAT (10%)</b>
                                </td>
                                <td class="text-right">{{number_format($order->total_vat)}}</td>
                            </tr>
                        @endif
                        @if(($order->use_coupon_code)>0)
                            <tr>
                                <td colspan="3"></td>
                                <td class="text-right"><b>Mã giảm giá</b>
                                </td>
                                <td class="text-right">{{number_format($order->use_coupon_code)}}</td>
                            </tr>
                        @endif
                        @if(($order->reduced_price)>0)
                            <tr>
                                <td colspan="3"></td>
                                <td class="text-right"><b>Đổi điểm</b>
                                </td>
                                <td class="text-right">{{number_format($order->reduced_price)}}</td>
                            </tr>
                        @endif
                        <tr>
                            <td colspan="3"></td>
                            <td class="text-right"><b>Tổng tiền</b>
                            </td>
                            <td class="text-right">{{number_format($order->total_order_price)}}</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- <h3>Order History</h3>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td class="text-left">Date Added</td>
                            <td class="text-left">Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">20/06/2016</td>
                            <td class="text-left">Processing</td>
                        </tr>
                        <tr>
                            <td class="text-left">21/06/2016</td>
                            <td class="text-left">Shipped</td>
                        </tr>
                        <tr>
                            <td class="text-left">24/06/2016</td>
                            <td class="text-left">Complete</td>
                        </tr>
                    </tbody>
                </table> -->
                <div class="buttons clearfix">
                    <div class="pull-right"><a class="btn btn-primary" href="{{route('home')}}">Tiếp tục mua hàng</a>
                    </div>
                </div>



            </div>
            <!--Middle Part End-->
            <!--Right Part Start -->
            <aside class="col-sm-3 hidden-xs content-aside col-md-3" id="column-right">
                <h2 class="subtitle">Tài khoản</h2>
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
