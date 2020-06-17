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
      <a href="" title="Graph &amp; Charts"><i class="icon-bar-chart"></i><span>  
      Tích điểm</span></a>
      <!-- Other Contents Sub Menu -->
      <a href="" title="Admin Tools"><i class="icon-cogs"></i><span>  
      Thiết lập tài khoản</span></a>
   </div>
   <!--Menu-->
</div>
<div id="content-wrapper">
<div style="border:1px #e8e8e8 solid;margin:-15px 0px 10px 0px">
   <div style="border-bottom:1px #e8e8e8 solid;background-color:#3c8dbc;padding:8px;font-size:13px;font-weight:700;color:#45484d;">
      <div class="right-bar text-right">
         <i class="fa fa-home" style="color: #fff;margin-right: 60px;font-size: 17px;">         Homepage</i>
         <i class="fa fa-user" style="color: #000;border-radius: 50%;border: 1px solid;margin-right: 10px;font-size: 18px; padding: 3px 5px;">         
         </i>
         <span style="color: #fff;margin-right:26px">{{Auth::guard('customer')->user()->name}}</span>
      </div>
   </div>
   <div style="border:1px #e8e8e8 solid;margin:0px 0px 10px 0px">
      <div style="padding:8px;font-size:13px;">
         <div class="row">
               <!--Middle Part Start-->
               <div class="col-sm-12" id="content">
                  <!-- <h2 class="title">Tài khoản của tôi</h2> -->
                  <p class="lead">Xin chào, <strong>{{Auth::guard('customer')->user()->name}}</strong> - Cập nhật thông tin tài khoản của bạn.</p>
                  @if(Session::has('success'))
                  <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <strong>{{Session::get('success')}}</strong> 
                  </div>
                  @endif
                  <form method="POST" action="{{route('saveCustomer')}}">
                     <div class="row">
                        <div class="col-sm-6">
                           <fieldset id="personal-details">
                              <legend>Thông tin cá nhân</legend>
                              <div class="form-group required">
                                 <label for="input-firstname" class="control-label">Họ và tên</label>
                                 <input type="text" class="form-control" id="input-firstname" placeholder="Họ và tên" value="{{Auth::guard('customer')->user()->name}}" required name="name">
                              </div>
                              <div class="form-group required">
                                 <label for="input-email" class="control-label">E-Mail</label>
                                 <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="{{Auth::guard('customer')->user()->email}}" name="email" disabled>
                              </div>
                              <div class="form-group required">
                                 <label for="input-telephone" class="control-label">Số điện thoại</label>
                                 <input type="number" class="form-control" id="input-telephone" placeholder="Số điện thoại" value="{{Auth::guard('customer')->user()->phone}}" name="phone" required>
                              </div>
                           </fieldset>
                           <br>
                        </div>
                        <div class="col-sm-6">
                           <fieldset>
                              <legend>Thay đổi mật khẩu</legend>
                              <div class="form-group required">
                                 <label for="input-password" class="control-label">Mật khẩu hiện tại</label>
                                 <input type="password" class="form-control"  placeholder="Mật khẩu hiện tại" value="" name="old_password" required>
                                 @if(Session::has('error'))
                                 <p class="error" style="color: red;padding-bottom: 0px;margin-bottom: 0px;line-height: 0;margin-top: 10px">{{Session::get('error')}}</p>
                                 @endif
                              </div>
                              <div class="form-group">
                                 <label for="input-password" class="control-label">Mật khẩu mới</label>
                                 <input type="password" class="form-control"  placeholder="Mật khẩu mới" value="" name="new_password">
                                 @if($errors->has('new_password'))
                                 <p class="error" style="color: red;padding-bottom: 0px;margin-bottom: 0px;line-height: 0;margin-top: 10px">{{$errors->first('new_password')}}</p>
                                 @endif
                              </div>
                              <div class="form-group">
                                 <label for="input-confirm" class="control-label">Nhập lại mật khẩu mới</label>
                                 <input type="password" class="form-control" id="input-confirm" placeholder="Nhập lại mật khẩu mới" value="" name="new_confirm">
                                 @if($errors->has('new_confirm'))
                                 <p class="error" style="color: red;padding-bottom: 0px;margin-bottom: 0px;line-height: 0;margin-top: 10px">{{$errors->first('new_confirm')}}</p>
                                 @endif
                              </div>
                           </fieldset>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <fieldset id="address">
                              <legend>Địa chỉ thanh toán, giao hàng</legend>
                              <div class="form-group">
                                 <label for="input-company" class="control-label">Công ty</label>

                                 <input type="text" class="form-control"  placeholder="Công ty" value="{{Auth::guard('customer')->user()->company}}" name="company">

                              </div>
                              <div class="form-group required">
                                 <label for="input-address-1" class="control-label">Địa chỉ</label>
                                 <input type="text" class="form-control"  placeholder="Địa chỉ" value="{{Auth::guard('customer')->user()->address}}" name="address" required>
                              </div>
                              <div class="form-group">
                                 <label for="input-postcode" class="control-label">Mã số thuế</label>
                                 <input type="text" class="form-control"  placeholder="Mã số thuế" value="{{Auth::guard('customer')->user()->tax_code}}" name="tax_code">
                              </div>
                           </fieldset>
                        </div>
                        <div class="col-sm-6">
                           <fieldset id="reward_point">
                              <legend>Thông tin điểm thưởng</legend>
                              <!-- <div class="form-group">
                                 <label for="input-company" class="control-label">Điểm xét hạng:</label>

                                 <input disabled type="text" class="form-control"  placeholder="{{Auth::guard('customer')->user()->total_points}}">

                              </div> -->
                              <div class="form-group">
                                 <label for="input-address-1" class="control-label">Điểm thưởng:</label>
                                 <input disabled type="text" class="form-control"  placeholder="{{Auth::guard('customer')->user()->reward_points}}">
                              </div>
                              <div class="form-group">
                                 <label class="control-label">
                                    Mỗi 1 điểm sẽ quy đổi bằng {{$reward_points->redeem_money}}đ, điểm sẽ được sử dụng khi quý khách mua hàng 
                                 </label>
                              </div>
                           </fieldset>
                        </div>
                     </div>
                     @csrf
                     <div class="buttons clearfix">
                        <div class="pull-left" style="margin:10px 0">
                           <input type="submit" class="btn btn-md btn-primary" value="Lưu thay đổi">
                        </div>
                     </div>
                  </form>
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