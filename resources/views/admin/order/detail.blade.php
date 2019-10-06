@extends('layouts.admin')
@section('main')
@section('title','Chi tiết đơn hàng')
@section('links','Quản lý đơn hàng')

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

@if(Session::has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{Session::get('success')}}</strong>
</div>
@endif

<div class="panel panel-default">
	<!-- Default panel contents -->
	<?php $status = '' ?>
	@foreach($order_status as $key=>$stt)
		@if($key == $order->status)
			<?php $status = $stt; ?>
		@endif
	@endforeach
	<div class="panel-heading" style="font-size: 18px">Order id <span style="text-decoration: underline;margin-right: 34px">#{{$order->order_id}}</span> Trạng thái đơn hàng: <span style="text-decoration: underline;">{{$status}}</span><span class="pull-right"><a href="" id="btnPrint" class="fa fa-print"></a></span></div>
	<div class="panel-body">
		<p>
			<table class="table table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Sản phẩm</th>
					<th>Số lượng</th>
					<th>Đơn giá / 1sp</th>
					<th>Tổng</th>
				</tr>
			</thead>
			<tbody>
                <?php $totalPrice=0; ?>
				@foreach($orderDetail as $k=>$item)
				<tr>
					<td>{{$k+1}}</td>
					<td>{{$item->product_name}}</td>
					<td>{{$item->quantity}}</td>
					<td>{{$item->price > 0 ? number_format($item->price) : $item->price}}</td>
					<td>{{$total = $item->price > 0 ? (number_format($item->price * $item->quantity)) : $item->price}}</td>
                    <?php $totalPrice += filter_var($total, FILTER_SANITIZE_NUMBER_INT); ?>
				</tr>
				@endforeach
			</tbody>
		</table>
	</p>
	</div>

	<!-- Table -->
	<table class="table">
		</thead>
		<tbody>
			<tr>
				<td><b>Người nhận:</b> {{$order->name}}</td>
				<td><b>Số điện thoại:</b> {{$order->phone}}</td>
				<td>
                    <b>Đổi điểm thưởng:</b> -{{isset($order->reduced_price) ? $order->reduced_price : 0}}
                </td>
                <td>
                    <span style="margin-right: 31px">
                        <b>VAT:</b> {{$order->vat == 1 ? number_format(($totalPrice * 10) /100) : 0}}
                    </span>
                </td>
			</tr>
			<tr>
				<td><b>Địa chỉ nhận hàng:</b> {{$order->address}}</td>
				<td><b>Email:</b> {{$order->email}}</td>
				<td>
                    <b>Ngày tạo đơn hàng:</b> {{$order->created_at}}
                </td>
                <td>
                    <span style="margin-right: 31px">
                        <b>Mã giảm giá:</b> -{{isset($order->use_coupon_code) ? number_format($order->use_coupon_code) : 0}}
                        <!-- <b>Tổng tiền:</b> {{$order->total_price}} -->
                    </span>
                </td>
			</tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                   
                    <span style="margin-right: 31px">
                        <b>Tổng tiền:</b> {{$order->total_price}}
                    </span>
                </td>
            </tr>
		</tbody>
	</table>
</div>
<div class="panel panel-info">
	<div class="panel-body pull-right">
		@if($order->status == 1 || $order->status == 5)
		<a href="{{route('update_order_status',['id'=>$order->order_id,'stt'=>2])}}" class="btn btn-md btn-primary">Xác nhận đơn hàng</a>
		@elseif($order->status == 2 || $order->status == 5)
		<a href="{{route('update_order_status',['id'=>$order->order_id,'stt'=>3])}}" class="btn btn-md btn-primary">Xác nhận gửi hàng</a>
		@elseif($order->status == 3 || $order->status == 5)
		<a href="{{route('update_order_status',['id'=>$order->order_id,'stt'=>4])}}" class="btn btn-md btn-primary">Đã giao hàng</a>
		@endif	
		<a href="{{route('update_order_status',['id'=>$order->order_id,'stt'=>5])}}" class="btn btn-md btn-primary">Hủy đơn hàng</a>
	</div>
</div>

<div class="hidden">
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
        padding-bottom: 40px;
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
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{url('uploads/logo/logo.jpg')}}" style="width:100%; max-width:150px;">
                            </td>
                            
                            <td>
                                Order Id: #{{$order->order_id}}<br>
                                Ngày tạo: {{date_format($order->created_at,"d/m/Y")}}<br>
                            	<h3>Khách hàng</h3>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Công ty cổ phần công nghệ Hợp Long<br>
                                Trụ sở chính: 87 Lĩnh Nam, Hoàng Mai, Hà Nội<br>
                                Hotline: 19006536
                            </td>
                            
                            <td>
                                <div style="">{{$order->name}}</div>
                                <div style="">{{$order->phone}}</div>
                                <div style="">{{$order->email}}</div>
                                <div style="">{{$order->address}}</div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Phương thức thanh toán
                </td>
                
                <td>
                    Trạng thái #
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    {{$order->payment_method}}
                </td>
                
                <td>
                    {{$status}}
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
   			@foreach($orderDetail as $k=>$item)
            <tr class="item">
                <td>
                    <span style="margin-right: 50px;margin-left: 30px">{{$item->quantity}}</span>{{$item->product_name}}
                </td>
                
                <td>
                    {{$item->price > 0 ? number_format($item->price) : $item->price}}
                </td>
            </tr>
            @endforeach
    		@if(isset($order->use_coupon_code) ? $order->use_coupon_code : 0)
             <tr class="item">
                <td>
                    <span style="margin-left: 0px">Mã giảm giá</span>
                </td>
                
                <td>
                    -{{number_format(($order->use_coupon_code))}}
                </td>
            </tr>
            @endif
             <tr class="item">
                <td>
                    <span style="margin-left: 20px">VAT</span>
                </td>
                
                <td>
                    {{number_format(($totalPrice * 10) /100)}}
                </td>
            </tr>
            @if(isset($order->reduced_price))
            <tr class="item last">
                <td>
                    <span style="margin-left: 6px">Đổi điểm</span>
                </td>
                
                <td>
                	 -$order->reduced_price}}
                </td>
            </tr>
            @endif
            <tr class="total">
                <td></td>
                
                <td>
                   Tổng tiền: {{$order->total_price}}
                </td>
            </tr>
        </table>
    </div>
		</div>
	</form>
</div>
@stop()