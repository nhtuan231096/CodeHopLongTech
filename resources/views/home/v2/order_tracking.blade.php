@extends('layouts.v2.index')
@section('mainContainer')
<style type="text/css">
.header {
	margin-top:2%;
	width:100%;
	text-align:center;
}
.header h1 {
	font-family: 'Open Sans', sans-serif;
	line-height:25px;
	text-transform:uppercase;
	color:grey;
}
.content{
	width:100%;
	margin:3% auto 0 auto;
	height:460px;
	background-color:#F5F5F5;
}
.content1 {
	background-color:#3498db;
	text-align:center;
	padding:2em;
}
.content1 h2 {
	font-family: 'Open Sans', sans-serif;
	text-transform:uppercase;
	margin:0;
	color:#fff;
}
.content2 {
	background-color:#36b9ed;
}
.content2-header1 {
	float:left;
	width:27%;
	text-align:center;
	padding:1.5em;
}
.content2-header1 p {
	font-family: 'Open Sans', sans-serif;
	font-size:16px;
	font-weight:700;
	color:#fff;
	margin:0;
}
.content2-header1 span {
	font-size:14px;
	font-weight:400;
}
.shipment {
	width:100%;
	margin-top:10%;
}
span.line {
    height: 5px;
    width: 90px;
    background-color:#F5998E;
    display: block;
    position: absolute;
    top: 28%;
    left: 45%;
}
.confirm{
	text-align:center;
	width:20%;
	position:relative;
	float:left;
	margin-left:5%;
}
.confirm .imgcircle , .process .imgcircle, .quality .imgcircle {
	background-color:#98D091;
}
.confirm span.line, .process span.line {
	background-color:#98D091; 
}
.content3 p {
	margin-left:-50%;
	font-size:15px;
	font-weight:600;
} 
.imgcircle {
	height:75px;
	width:75px;
	border-radius:50%;
	background-color:#F5998E;
	position:relative;
}
.imgcircle img {
	height:30px;
	position:absolute;
	top: 28%;
	left: 30%;
}
.process{
	position:relative;
	width:20%;
	text-align:center;
	float:left;
}
.quality {
	position:relative;
	width:20%;
	text-align:center;
	float:left;
}
.dispatch{
	position:relative;
	width:20%;
	text-align:center;
	float:left;
}
.delivery{
	position:relative;
	width:20%;
	text-align:center;
	float:left;
	margin-right:-9%;
}
.footer a, a:active {
	color:grey;
	text-decoration:none;
	font-family: 'Tahoma', sans-serif;
}
.footer a:hover {
	color:#00c4ff;
	text-decoration:none;
	transition:all 0.5s ease-in-out;
}
.footer {
	margin-top:3%;
	text-align:center;
	font-weight:100;
}
.footer p {
	color:grey;
	font-size:15px;
	font-family: 'Tahoma', sans-serif;
	line-height:25px;
}

/*---- responsive-design -----*/
@media(max-width:1920px){
	span.line {
	width:157px;
	left:32%;
	}
	.shipment{
		margin-top:6%;
	}
.content3 p{
margin-left:-76%;
}
}

@media(max-width:1680px){
	.content3 p {
    margin-left: -60%;
}
span.line {
    width: 127px;
    left: 37%;
}
}

@media(max-width:1600px){
span.line {
    width: 117px;
    left: 39%;
}
}

@media(max-width:1440px){
.content3 p {
    margin-left: -53%;
}
span.line {
    width: 99px;
    left: 43%;
}
}

@media (max-width: 1366px){
span.line {
    width: 90px;
    left: 45%;
}
.shipment {
    margin-top: 10%;
}
}

@media (max-width: 1280px){
span.line {
    width: 80px;
    left: 48%;
	top:29%;
}
}

@media (max-width: 1080px){
.content {
width: 75%;
}
span.line {
    width: 88px;
left: 46%;
}
}

@media (max-width: 1050px){
span.line {
    width: 84px;
    left: 47%;
}
}

@media (max-width: 1024px){
	.content{
		width:77%;
	}
	.content3 p {
		font-size:14px;
	}
}

@media (max-width: 991px){
	.content {
    width: 80%;
}
span.line {
    width: 84px;
    left: 47%;
}
}

@media (max-width: 900px){
.content {
    width: 85%;
}
span.line {
    width: 78px;
    left: 49%;
}
}

@media (max-width: 800px){
.content {
    width: 95%;
}
.content2-header1 p {
	margin: 0 0 0 -7%;
}
}

@media (max-width: 768px){
.content2-header1 {
	width: 25%;
}
.content2-header1 p {
    margin: 0 -19% 0 -10%;
}
span.line {
    width: 72px;
    left: 51%;
}
}

@media (max-width: 736px){
	span.line {
    width: 62px;
    left: 55%;
}
}

@media (max-width: 667px){
	.content2-header1 p {
	font-size:14px;
	}
	.content2-header1 span {
    font-size: 13px;
}
.shipment {
    margin-top: 13%;
}
.content3 p {
    font-size: 12px;
	margin-left: -35%;
}
.confirm{
	margin-left:4%;
}
span.line {
    width: 49px;
    left: 60%;
}
}

@media (max-width: 600px){
	.content1 {
		padding:1.2em;
	}
.content2-header1 p {
    font-size: 13px;
}
.content2-header1 span {
    font-size: 12px;
}
.content2-header1 {
    width: 24%;
}
.imgcircle {
    height: 65px;
    width: 65px;
}
.imgcircle img{
	top: 26%;
    left: 27%;
}
.content3 p {
	margin-left: -38%;
	font-size:11px;
}
.content {
	height: 395px;
}
span.line {
    width: 50px;
    left: 58%;
}
}

@media (max-width: 568px){
	.content{
		height:380px;
	}
	.content1{
	padding: 1em;
}
span.line {
    width: 56px;
    left: 47%;
}
.content2-header1 {
    width: 23%;
}
.imgcircle {
    height: 50px;
    width: 50px;
}
.imgcircle img {
    height: 25px;
    top: 27%;
    left: 25%;
}
.content3 p {
    font-size: 10px;
    margin-left: -46%;
}
.confirm {
    margin-left: 5%;
}
}

@media (max-width: 414px){
	.header {
    margin-top: 8%;
}
	.content {
    width: 93%;
	height:885px;
	margin-top:9%;
}
	.content1 h2 {
	font-size:22px;
}
	.content2-header1 {
	padding:0.7em;
    width: 80%;
	margin-left: 3%;
}
	.content2-header1 p {
    font-size: 19px;
}
	.content2-header1 span {
    font-size: 16px;
}
	.confirm {
	width:100%;
}
	.process {
	width:100%;
	margin: 22% 0 0 5%;
}
	.quality{
	width:100%;
	margin: 22% 0 0 5%;
}
	.dispatch{
	width:100%;
	margin: 22% 0 0 5%;
}
	.delivery{
	width:100%;
	margin: 22% 0 0 5%;
}
	.imgcircle {
    height: 70px;
    width: 70px;
	margin-left: 35%;
}
	.imgcircle img {
    height: 30px;
    top: 27%;
    left: 28%;
}
	span.line {
    width: 6px;
    left: 43.5%;
    height: 58px;
	top:152%;
}
	.content3 p {
    font-size: 15px;
    margin: -12% 0 0 -72%;
}
	.shipment {
    margin-left: 16%;
}
	.footer {
	padding:1%;
}
	.footer p {
	font-size:16px;
}
}

@media (max-width: 384px){
	.header {
    margin-top: 9%;
}
	.content1 h2 {
    font-size: 21px;
}
	.content3 p {
    margin: -13% 0 0 -74%;
}
	.shipment {
    margin-top: 11%;
}
	span.line {
	top:154%;
	left:44%;
	height:52px;
}
	.content {
    height: 845px;
}
	.footer {
    padding: 3%;
}
	.footer p {
    font-size: 15px;
}
}

@media (max-width: 375px){
	.content {
    height: 840px;
}
	.content1 h2 {
    font-size: 20px;
}
	span.line {
    top: 149%;
    left: 44.5%;
    height: 51px;
}
	.shipment {
    margin-left: 17%;
}
}

@media (max-width: 320px){
	.header {
    margin-top: 10%;
}
	.content{
	margin-top: 10%;
}
	.content1 {
    padding: 1em;
}
	.header h1{
	font-size:31px;
}
	.content {
    height: 830px;
}
	.content1 h2 {
    font-size: 17px;
}
	.content2-header1 span {
    font-size: 15px;
}
	.content3 p {
    margin: -16% 0 0 -79%;
}
	.shipment {
    margin-left: 19%;
}
	span.line {
    top: 115%;
    left: 46%;
}
	.footer {
	margin-top: 1%;
}
	.footer p {
    font-size: 14px;
}
}
.arrow
{
  height: 40px;
  width: 40px;
  /**
   * Dark Arrow Down
   */
  background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSI1MTIiIGlkPSJzdmcyIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6Y2M9Imh0dHA6Ly9jcmVhdGl2ZWNvbW1vbnMub3JnL25zIyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczppbmtzY2FwZT0iaHR0cDovL3d3dy5pbmtzY2FwZS5vcmcvbmFtZXNwYWNlcy9pbmtzY2FwZSIgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIiB4bWxuczpzb2RpcG9kaT0iaHR0cDovL3NvZGlwb2RpLnNvdXJjZWZvcmdlLm5ldC9EVEQvc29kaXBvZGktMC5kdGQiIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxkZWZzIGlkPSJkZWZzNCIvPjxnIGlkPSJsYXllcjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAsLTU0MC4zNjIyKSI+PHBhdGggZD0ibSAxMjcuNDA2MjUsNjU3Ljc4MTI1IGMgLTQuOTg1MywwLjA3ODQgLTkuOTEwNzcsMi4xNjMwOCAtMTMuNDM3NSw1LjY4NzUgbCAtNTUsNTUgYyAtMy42MDA1NjUsMy41OTkyNyAtNS42OTY4ODMsOC42NTg5NSAtNS42OTY4ODMsMTMuNzUgMCw1LjA5MTA1IDIuMDk2MzE4LDEwLjE1MDczIDUuNjk2ODgzLDEzLjc1IEwgMjQyLjI1LDkyOS4yNSBjIDMuNTk5MjcsMy42MDA1NiA4LjY1ODk1LDUuNjk2ODggMTMuNzUsNS42OTY4OCA1LjA5MTA1LDAgMTAuMTUwNzMsLTIuMDk2MzIgMTMuNzUsLTUuNjk2ODggTCA0NTMuMDMxMjUsNzQ1Ljk2ODc1IGMgMy42MDA1NiwtMy41OTkyNyA1LjY5Njg4LC04LjY1ODk1IDUuNjk2ODgsLTEzLjc1IDAsLTUuMDkxMDUgLTIuMDk2MzIsLTEwLjE1MDczIC01LjY5Njg4LC0xMy43NSBsIC01NSwtNTUgYyAtMy41OTgxNSwtMy41OTEyNyAtOC42NTA2OCwtNS42ODEyNyAtMTMuNzM0MzgsLTUuNjgxMjcgLTUuMDgzNjksMCAtMTAuMTM2MjIsMi4wOSAtMTMuNzM0MzcsNS42ODEyNyBMIDI1Niw3NzguMDMxMjUgMTQxLjQzNzUsNjYzLjQ2ODc1IGMgLTMuNjY2NzgsLTMuNjY0MjMgLTguODQ4MDEsLTUuNzY0NDIgLTE0LjAzMTI1LC01LjY4NzUgeiIgaWQ9InBhdGgzNzY2LTEiIHN0eWxlPSJmb250LXNpemU6bWVkaXVtO2ZvbnQtc3R5bGU6bm9ybWFsO2ZvbnQtdmFyaWFudDpub3JtYWw7Zm9udC13ZWlnaHQ6bm9ybWFsO2ZvbnQtc3RyZXRjaDpub3JtYWw7dGV4dC1pbmRlbnQ6MDt0ZXh0LWFsaWduOnN0YXJ0O3RleHQtZGVjb3JhdGlvbjpub25lO2xpbmUtaGVpZ2h0Om5vcm1hbDtsZXR0ZXItc3BhY2luZzpub3JtYWw7d29yZC1zcGFjaW5nOm5vcm1hbDt0ZXh0LXRyYW5zZm9ybTpub25lO2RpcmVjdGlvbjpsdHI7YmxvY2stcHJvZ3Jlc3Npb246dGI7d3JpdGluZy1tb2RlOmxyLXRiO3RleHQtYW5jaG9yOnN0YXJ0O2Jhc2VsaW5lLXNoaWZ0OmJhc2VsaW5lO2NvbG9yOiMwMDAwMDA7ZmlsbDojMjIyMjIyO2ZpbGwtb3BhY2l0eToxO2ZpbGwtcnVsZTpub256ZXJvO3N0cm9rZTpub25lO3N0cm9rZS13aWR0aDozOC44ODAwMDEwNzttYXJrZXI6bm9uZTt2aXNpYmlsaXR5OnZpc2libGU7ZGlzcGxheTppbmxpbmU7b3ZlcmZsb3c6dmlzaWJsZTtlbmFibGUtYmFja2dyb3VuZDphY2N1bXVsYXRlO2ZvbnQtZmFtaWx5OlNhbnM7LWlua3NjYXBlLWZvbnQtc3BlY2lmaWNhdGlvbjpTYW5zIi8+PC9nPjwvc3ZnPg==);
  background-size: contain;
  position: absolute;
    top: -45px;
    left: 17px;
}

.bounce {
  animation: bounce 2s infinite;
}

@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-30px);
  }
  60% {
    transform: translateY(-15px);
  }
}
.class-relative {
	position: relative;
}
</style>
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>

<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Theo dõi đơn hàng</a></li>
    </ul>
    
    <div class="row">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Theo dõi đơn hàng của bạn</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="" method="POST">
                      <div class="form-group">
                        <label class="control-label col-sm-2" style="font-size: 16px">Mã đơn hàng: </label>
                        <div class="col-sm-10">
                          <input style="width: 80%;float: left;" name="order_id" class="form-control" placeholder="Nhập order id đơn hàng">
                          <button type="submit" class="btn btn-lg btn-default fa fa-search"></button>
                        </div>
                      </div>
                      @csrf
                    </form>
                    @if(isset($order))
					<div class="content">
						<div class="content1">
							<h2>Theo dõi đơn hàng: #{{$order->order_id}}</h2>
						</div>
						<div class="content2">
							<div class="content2-header1">
								<p>Đơn vị vận chuyển : <span>{{$order->shipping_method}}</span></p>
							</div>
							<div class="content2-header1">
								<p>Trạng thái đơn hàng : <span>{{$cart->check_order_status($order->status)}}</span></p>
							</div>
							<div class="content2-header1">
								<p>Ngày giao hàng dự kiến : <span>{{date("d-m-Y", strtotime ( '+4 day' , strtotime ( $order->created_at ) ))}}</span></p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="content3">
					        <div class="shipment">
								<div class="confirm">
					                <div class="imgcircle class-relative">
										@if($order->status == 1)
										<div class="arrow bounce"></div>
										@endif
					                	<img src="{{url('public/homev2/image/icons')}}/process.png" alt="process order">
					            	</div>
									<span class="line"></span>
									<p>Đang chờ xử lý</p>
								</div>
								<div class="process">
					           	 	<div class="imgcircle class-relative">
					           	 		@if($order->status == 2)
										<div class="arrow bounce"></div>
										@endif
					                    <img src="{{url('public/homev2/image/icons')}}/confirm.png" alt="confirm order">
					            	</div>
									<span class="line"></span>
									<p>Xác nhận đặt hàng</p>
								</div>
								<div class="quality">
									<div class="imgcircle class-relative">
										@if($order->status == 3)
										<div class="arrow bounce"></div>
										@endif
					                	<img src="{{url('public/homev2/image/icons')}}/dispatch.png" alt="dispatch product">
					            	</div>
									<span class="line"></span>
									<p>Đang giao hàng</p>
								</div>
								<div class="dispatch">
									<div class="imgcircle class-relative">
										@if($order->status == 4)
										<div class="arrow bounce"></div>
										@endif
					                	<img src="{{url('public/homev2/image/icons')}}/delivery.png" alt="delivery">
					            	</div>
									<span class="line"></span>
									<p>Đã giao hàng</p>
								</div>
								<div class="delivery">
									<div class="imgcircle class-relative">
										@if($order->status == 5)
										<div class="arrow bounce"></div>
										@endif
										<i class="fa fa-remove" style="color: #fff;font-size: 38px;padding-top: 15px;"></i>
									</div>
									<p>Đơn hàng bị hủy</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Main Container -->

@stop()
