@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div>
            <div class="jumbotron">
                <div class="container text-center">
                    @if(Auth::check())
                        <h3 style="font-size: 25px; line-height:2; margin: 34px">Đặt hàng thành công, vui lòng theo dõi trạng thái đơn hàng được gửi đến email kiểm tra trong <a style="font-size: 25px;color:#3498db" href="{{route('order_history')}}">trang cá nhân</a></h3>
                    @else
                        <h3 style="margin: 34px">Đặt hàng thành công, chi tiết đơn hàng được gửi về email của bạn</h3>
                    @endif

                    @if($pay_status == 0)
                        <h3 style="margin: 34px;color: red;font-style: italic;text-decoration: underline">(Đơn hàng của bạn chưa được thanh toán)</h3>
                    @endif
                    <p>
                        <a href="{{route('home_product')}}" class="btn btn-primary btn-lg">Tiếp tục mua hàng</a>
                    </p>
                </div>
            </div>

        </div><!-- .col-full -->
    </div><!-- .row -->
</div>
@stop()
