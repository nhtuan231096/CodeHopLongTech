@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">
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
   #responsive-admin-menu {
   min-height: 766px!important;
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
      <div style="border-bottom:1px #e8e8e8 solid;background-color:#f3f3f3;padding:8px;font-size:13px;font-weight:700;color:#45484d;">
         Trang chủ quản trị
      </div>
      <div style="padding:8px;font-size:13px;">
         <div class="row">
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-yellow" style="border-radius: 2px;position: relative;display: block;margin-bottom: 20px;box-shadow: 0 1px 1px rgba(0,0,0,0.1);">
                  <div class="inner" style="padding: 10px;">
                     <h3 style="color: #fff;padding: 0px 15px;font-size: 30px;font-weight: bold;">{{$orderOfTheDay}}</h3>
                     <p style="font-size: 16px;color: #fff;padding: 0 15px;">Số đơn hàng trong ngày</p>
                  </div>
                  <div class="icon" style="transition: all .3s linear;position: absolute;top: -10px;right: 10px;z-index: 0;font-size: 90px;color: rgba(0,0,0,0.15);">
                     <i class="ion ion-bag fa fa-bag" style="    display: inline-block;
                        font-family: 'Ionicons';speak: none;font-style: normal;font-weight: normal;font-variant: normal;text-transform: none;text-rendering: auto;line-height: 1;-webkit-font-smoothing: antialiased;margin-top: 25px"></i>
                  </div>
                  <a href="#" class="small-box-footer" style="    position: relative;    text-align: center;    padding: 3px 0;
                     color: #fff;    color: rgba(255,255,255,0.8);    display: block;    z-index: 10;    background: rgba(0,0,0,0.1);    text-decoration: none;
                     ">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box" style="border-radius: 2px;position: relative;display: block;margin-bottom: 20px;box-shadow: 0 1px 1px rgba(0,0,0,0.1);background-color: #9e9ed8">
                  <div class="inner" style="padding: 10px;">
                     <h3 style="color: #fff;padding: 0px 15px;font-size: 30px;font-weight: bold;">{{$countOrdersSuccess}} / {{$countOrders}}</h3>
                     <p style="font-size: 16px;color: #fff;padding: 0 15px;">Số đơn hàng thành công/Tổng đơn hàng</p>
                  </div>
                  <div class="icon" style="transition: all .3s linear;position: absolute;top: -10px;right: 10px;z-index: 0;font-size: 90px;color: rgba(0,0,0,0.15);">
                     <i class="ion ion-pie-graph" style="    display: inline-block;
                        font-family: 'Ionicons';speak: none;font-style: normal;font-weight: normal;font-variant: normal;text-transform: none;text-rendering: auto;line-height: 1;-webkit-font-smoothing: antialiased;margin-top: 25px"></i>
                  </div>
                  <a href="#" class="small-box-footer" style="    position: relative;    text-align: center;    padding: 3px 0;
                     color: #fff;    color: rgba(255,255,255,0.8);    display: block;    z-index: 10;    background: rgba(0,0,0,0.1);    text-decoration: none;
                     ">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-red" style="border-radius: 2px;position: relative;display: block;margin-bottom: 20px;box-shadow: 0 1px 1px rgba(0,0,0,0.1);background-color: green">
                  <div class="inner" style="padding: 10px;">
                     <h3 style="color: #fff;padding: 0px 15px;font-size: 30px;font-weight: bold;">{{number_format($salesTotal)}}</h3>
                     <p style="font-size: 16px;color: #fff;padding: 0 15px;">Tổng tiền chi tiêu</p>
                  </div>
                  <div class="icon" style="transition: all .3s linear;position: absolute;top: -10px;right: 10px;z-index: 0;font-size: 90px;color: rgba(0,0,0,0.15);">
                     <i class="ion ion-stats-bars" style="    display: inline-block;
                        font-family: 'Ionicons';speak: none;font-style: normal;font-weight: normal;font-variant: normal;text-transform: none;text-rendering: auto;line-height: 1;-webkit-font-smoothing: antialiased;margin-top: 25px"></i>
                  </div>
                  <a href="#" class="small-box-footer" style="    position: relative;    text-align: center;    padding: 3px 0;
                     color: #fff;    color: rgba(255,255,255,0.8);    display: block;    z-index: 10;    background: rgba(0,0,0,0.1);    text-decoration: none;
                     ">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('$(o).i(4(){$("p").q(\'<r t="u" m="9/3-6-0.9"/>\');s a="";$("#3-0").c(4(){$("#3-6-0 #0").g()});$(h).f(4(){$("#3-6-0 #0").j("k")});$("#0 a.l").c(4(){d(a!=""){$("#"+a).n("a").e("7");$("#"+a).b("8")};d(a==$(1).5("2")){$("#"+$(1).5("2")).b("8");$(1).e("7");a=""}v{$("#"+$(1).5("2")).w("8");a=$(1).5("2");$(1).x("7")};y z})});',36,36,'menu|this|name|responsive|function|attr|admin|downarrow|fast|css||slideUp|click|if|removeClass|resize|slideToggle|window|ready|removeAttr|style|submenu|href|prev|document|head|append|link|var|rel|stylesheet|else|slideDown|addClass|return|false'.split('|'),0,{}))
</script>
@stop()