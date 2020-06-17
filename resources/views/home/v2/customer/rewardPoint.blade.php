@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<link rel="stylesheet" href="{{url('public/homev2/css/style.css')}}">
<style type="text/css">
   @media (min-width: 1200px){
   body.layout-2 .container, body.layout-1 .container {
   max-width: 1875px;
   width: 100%;
   }
   .footer-container{
   margin-left: -200px;
   }
   }
</style>
<div class="clearfix"></div>
<div id="responsive-admin-menu">
   <div id="responsive-menu">
      <div class="menuicon">≡</div>
   </div>
   <div id="logo">
      <h3 class="text-center">
         <a href="" style="color: #fff">Trang khách hàng</a>
      </h3>
   </div>
   <!--Menu-->
   <div id="menu">
      <a href="{{route('my_account')}}" title="Dashboard"><i class="icon-dashboard"></i><span> 
      Bảng điều khiển</span></a>
      <a href="" title="News" class="submenu" name="icon-bullhorn"><i class="icon-list-ul"></i><span>  
      Tạo đơn hàng mới</span></a>
      <!-- Media Sub Menu -->
      <div id="icon-bullhorn" style="display: none;">
         <a href="{{route('home_product')}}" target="_blank" title="Video Gallery"><i class="icon-film"></i><span>  
         Tạo đơn hàng</span></a>
         <a href='#modal-import-csv' data-toggle="modal" title="Photo Gallery"><i class="fa fa-upload"></i><span>  
         Import đơn hàng</span></a>
      </div>
      <a href="{{route('view_cart')}}" target="_blank" title="Pages"><i class="icon-calendar"></i><span> Quản lý đơn hàng</span></a>
      <a href="{{route('customer_order_history')}}" title="Media"><i class="icon-eye-open"></i><span>  
      Lịch sử mua hàng</span></a>
      <!-- Media Sub Menu -->
      <a href="{{route('customer_reward_point')}}" title="Graph &amp; Charts"><i class="icon-bar-chart"></i><span>  
      Tích điểm</span></a>
      <!-- Other Contents Sub Menu -->
      <a href="{{route('edit_acc_customer')}}" title="Admin Tools"><i class="icon-cogs"></i><span>  
      Thiết lập tài khoản</span></a>
   </div>
   <!--Menu-->
</div>
<div id="content-wrapper">
<div style="border:1px #e8e8e8 solid;margin:-15px 0px 10px 0px">
   <div style="border-bottom:1px #e8e8e8 solid;background-color:#3c8dbc;padding:8px;font-size:13px;font-weight:700;color:#45484d;">
      <div class="right-bar text-right">
         <i class="fa fa-home" style="color: #fff;margin-right: 60px;font-size: 17px;">         Homepage</i>
         <i class="fa fa-user" style="color: #000;border-radius: 50%;border: 1px solid;margin-right: 10px;font-size: 18px;padding: 3px 5px;">         
         </i>
         <span style="color: #fff;margin-right:26px">{{Auth::guard('customer')->user()->name}}</span>
      </div>
   </div>
   <div style="border:1px #e8e8e8 solid;margin:0px 0px 10px 0px">
      <div style="padding:8px;font-size:13px;">
        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-sm-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td colspan="12" class="text-center">ĐIỂM CỦA BẠN: {{$totalPoint}}</td>
                        </tr>
                    </thead>
                </table>
                <h3>Lịch sử tích điểm</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td class="text-left">ID Đơn hàng</td>
                                <td class="text-left">Số điểm tích lũy</td>
                                <td class="text-left">Ngày đặt hàng</td>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($rewardPoint as $itemRewardPoint)
                            <tr>
                                <td class="text-left">{{$itemRewardPoint->order_id}}</td>
                                <td class="text-left">{{$itemRewardPoint->point}}</td>
                                <td class="text-left">{{$itemRewardPoint->created_at}}</td>
                            </tr>
                           @endforeach
                        </tbody>
                        {{$rewardPoint->links()}}
                    </table>
                </div>
                <div class="buttons clearfix">
                    <div class="pull-right"><a class="btn btn-primary" href="{{route('home')}}">Tiếp tục mua hàng</a>
                    </div>
                </div>



            </div>
            <!--Middle Part End-->
        </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('$(o).i(4(){$("p").q(\'<r t="u" m="9/3-6-0.9"/>\');s a="";$("#3-0").c(4(){$("#3-6-0 #0").g()});$(h).f(4(){$("#3-6-0 #0").j("k")});$("#0 a.l").c(4(){d(a!=""){$("#"+a).n("a").e("7");$("#"+a).b("8")};d(a==$(1).5("2")){$("#"+$(1).5("2")).b("8");$(1).e("7");a=""}v{$("#"+$(1).5("2")).w("8");a=$(1).5("2");$(1).x("7")};y z})});',36,36,'menu|this|name|responsive|function|attr|admin|downarrow|fast|css||slideUp|click|if|removeClass|resize|slideToggle|window|ready|removeAttr|style|submenu|href|prev|document|head|append|link|var|rel|stylesheet|else|slideDown|addClass|return|false'.split('|'),0,{}))
</script>
@stop()