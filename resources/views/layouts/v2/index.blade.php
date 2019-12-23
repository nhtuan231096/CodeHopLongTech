<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
    ============================================ -->
    <title>@if(isset($category)){{$category->meta_title}} @elseif(isset($download)) {{$download->title}} @elseif(isset($news_project)) {{$news_project->title}} @elseif(isset($img_company)) {{$img_company->title}} @else Công ty cổ phẩn công nghệ Hợp Long @endif</title>
    <meta charset="utf-8">
    <!-- <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" /> -->
    <meta name="description" content="@if(isset($category)){{$category->meta_description}}@elseif(isset($download))
    {{$download->content}}@else Công ty cổ phẩn công nghệ Hợp Long - Nhà phân phối chính thức Schneider Electric, Autonics, Omron, LS, Delta, Hanyoung, Patlite tại Việt Nam @endif">
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    
    <!-- Favicon
    ============================================ -->
    <link rel="icon" href="{{url('uploads/logo/Logo-hl.png')}}" sizes="32x32" />
  
   
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{url('public/homev2')}}/css/bootstrap/css/bootstrap.min.css">
    <link href="{{url('public/homev2')}}/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/themecss/lib.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/js/minicolors/miniColors.css" rel="stylesheet">
    
    <!-- Theme CSS
    ============================================ -->
    <link href="{{url('public/homev2')}}/css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/themecss/so-categories.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/themecss/so-category-slider.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/themecss/so-newletter-popup.css" rel="stylesheet">

    <link href="{{url('public/homev2')}}/css/footer/footer1.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="{{url('public/homev2')}}/css/theme.css" rel="stylesheet"> 
    <link href="{{url('public/homev2')}}/css/responsive.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/my_style.css" rel="stylesheet">
    
     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>     

    <script type="text/javascript" src="{{url('public/homev2')}}/js/jquery-2.2.4.min.js"></script>

    <style type="text/css">
         body{font-family:'Poppins', sans-serif;}
         #myList .item-vertical{ display:none;}
    </style>
    
</head>

<body class="common-home res layout-1">
    
    <div id="wrapper" class="wrapper-fluid banners-effect-3">

    <!-- Header Container  -->
    <header id="header" class=" typeheader-1">
        
        <!-- Header Top -->
        <div class="header-top hidden-compact">
            <div class="container">
                <div class="row">
                    <div class="header-top-left col-lg-7 col-md-8 col-sm-6 col-xs-4">
                        <div class="hidden-md hidden-sm hidden-xs welcome-msg">Công ty cổ phần công nghệ Hợp Long /
                            <span>Merry Christmas</span> 
                        </div>
                        <ul class="top-link list-inline hidden-lg ">
                            <li class="account" id="my_account">
                                <a href="#" title="My Account " class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs">My Account </span>  <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="dropdown-menu ">
                                    <li><a href=""><i class="fa fa-user"></i> Đăng ký</a></li>
                                    <li><a href="{{route('loginCustomer')}}"><i class="fa fa-pencil-square-o"></i> Đăng nhập</a></li>
                                </ul>
                            </li>
                        </ul>            
                    </div>
                    <div class="header-top-right collapsed-block col-lg-5 col-md-4 col-sm-6 col-xs-8">
                        <ul class="top-link list-inline lang-curr">
                            <!-- <li class="currency">
                                <div class="btn-group currencies-block">
                                    <form action="index.html" method="post" enctype="multipart/form-data" id="currency">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <span class="icon icon-credit "></span> $ US Dollar  <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu btn-xs">
                                            <li> <a href="#">(€)&nbsp;Euro</a></li>
                                            <li> <a href="#">(£)&nbsp;Pounds    </a></li>
                                            <li> <a href="#">($)&nbsp;US Dollar </a></li>
                                        </ul>
                                    </form>
                                </div>
                            </li>    -->
                            <li class="language">
                                <div class="btn-group languages-block ">
                                    <form action="#" method="post" enctype="multipart/form-data" id="bt-language">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <img src="{{url('public/homev2')}}/image/catalog/flags/vn.jpg" width="16px";height="10px" alt="English" title="English">
                                            <span class="">Tiếng Việt</span>
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li> <a href="#"> <img class="image_flag" src="{{url('public/homev2')}}/image/catalog/flags/vn.jpg" width="16px";height="10px" alt="Arabic" title="Arabic" /> Tiếng Việt </a> </li>
                                            <li><a href="index.html"><img class="image_flag" src="{{url('public/homev2')}}/image/catalog/flags/gb.png" alt="English" title="English" /> English </a></li>
                                        </ul>
                                    </form>
                                </div>
                                
                            </li>
                        </ul>
                        

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- //Header Top -->

        <!-- Header center -->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="navbar-logo col-lg-2 col-md-3 col-sm-4 col-xs-12">
                        <div class="logo"><a href="{{route('home')}}"><img src="{{url('public/homev2')}}/image/catalog/logo.png" height="46px" title="Your Store" alt="hoplongtech" /></a></div>
                    </div>
                    <!-- //end Logo -->

                    
                    <!-- Search -->
                    <div class="col-lg-7 col-md-6 col-sm-5">
                        <div class="search-header-w">
                            <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i></div>                                
                              
                            <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                <form method="GET" action="{{route('search_product')}}">
                                    <div id="search0" class="search input-group form-group">
                                        <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                            <select class="no-border" name='product_cat'>
                                                <option selected value="0">Tất cả danh mục</option>
                                                @foreach($categorys as $cat)
                                                <option class="level-0" value="{{$cat->title}}">{{$cat->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" name="title" placeholder="Tìm theo tên sản phẩm" >

                                        <input type="hidden" id="search-param" name="post_type" value="product" />
                                
                                        <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                                    
                                    </div>
                                    <!-- <input type="hidden" name="route" value="product/search" /> -->
                                </form>
                            </div>
                        </div>  
                    </div>
                    <!-- //end Search -->
                    <div class="middle-right col-lg-3 col-md-3 col-sm-3">                  
                        <!--cart-->
                        
                        <div class="shopping_cart">
                            <div id="cart" class="btn-shopping-cart">

                                <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <div class="shopcart">
                                        <span class="icon-c">
                                <i class="fa fa-shopping-bag"></i>
                              </span>
                                        <div class="shopcart-inner">
                                            <p class="text-shopping-cart">

                                                Giỏ hàng
                                            </p>

                                            <span class="total-shopping-cart cart-total-full">
                                   <span class="items_cart">{{$cart->total_quantity}}</span><span class="items_cart2"> sản phẩm</span><span class="items_carts">( {{number_format($cart->total_amount)}} )</span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                @if($cart->total_quantity)
                                <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                    <li>
                                        <table class="table table-striped">
                                            <tbody>
                                                
                                                    @foreach($cart->items as $item)
                                                    <tr>
                                                        <td class="text-center" style="width:70px">
                                                            <a href="product.html">
                                                                <img src="{{url('uploads/product')}}/{{$item['image']}}" alt="{{$item['image']}}" style="width:70px" title="{{$item['image']}}" class="preview">
                                                            </a>
                                                        </td>
                                                        <td class="text-left"> <a class="cart_product_name" href="">{{$item['title']}}</a> 
                                                        </td>
                                                        <td class="text-center">x {{$item['quantity']}}</td>
                                                        <td class="text-center">{{number_format($item['price'])}}đ</td>
                                                        <td class="text-right">
                                                            <!-- <a href="product.html" class="fa fa-edit"></a> -->
                                                        </td>
                                                        <td class="text-right">
                                                            <a href="{{route('delete_cart',['id'=>$item['id']])}}" class="fa fa-times fa-delete"></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"><strong>Tổng tiền</strong>
                                                        </td>
                                                        <td class="text-right">{{number_format($cart->total_amount)}}</td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                                        </td>
                                                        <td class="text-right">$2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong>VAT (20%)</strong>
                                                        </td>
                                                        <td class="text-right">$20.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong>Total</strong>
                                                        </td>
                                                        <td class="text-right">$162.00</td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                            <p class="text-right"> <a class="btn view-cart" href="{{route('view_cart')}}"><i class="fa fa-shopping-cart"></i>Xem giỏ hàng</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="{{route('order')}}"><i class="fa fa-share"></i>Đặt hàng</a> 
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                @endif
                            </div>

                        </div>
                        <!--//cart-->

                        <!-- <ul class="wishlist-comp hidden-md hidden-sm hidden-xs">
                            <li class="compare hidden-xs"><a href="#" class="top-link-compare" title="Compare "><i class="fa fa-refresh"></i></a>
                            </li>
                            <li class="wishlist hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist" title="Wish List (0) "><i class="fa fa-heart"></i></a>
                            </li>
                        </ul> -->

                                            
                        
                    </div>
                    
                </div>

            </div>
        </div>
        <!-- //Header center -->

        <!-- Header Bottom -->
        <div class="header-bottom hidden-compact">
            <div class="container">
                <div class="row">
                    
                    <div class="bottom1 menu-vertical col-lg-2 col-md-3 col-sm-3">
                        <div class="responsive so-megamenu megamenu-style-dev ">
                            <div class="so-vertical-menu ">
                                <nav class="navbar-default">    
                                    
                                    <div class="container-megamenu vertical">
                                        <div id="menuHeading">
                                            <div class="megamenuToogle-wrapper">
                                                <div class="megamenuToogle-pattern">
                                                    <div class="container">
                                                        <div>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                        Danh mục                          
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="navbar-header">
                                            <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">      
                                                <i class="fa fa-bars"></i>
                                                <span>  Danh mục     </span>
                                            </button>
                                        </div>
                                        <div class="vertical-wrapper" >
                                            <span id="remove-verticalmenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu megamenu-left" id="myList" style="position: relative;">
                                                        @foreach($categorys as $category)
                                                        <li class="item-vertical  with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="{{route('view_category',[$category->slug])}}" class="clearfix">
                                                                <img src="{{url('public/homev2')}}/image/catalog/menu/icons/ico10.png" alt="icon">
                                                                <span>{{$category->title}}</span>
                                                                <b class="fa-angle-right"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="60"  >
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                @foreach($category->childs as $child)
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="{{route('view_category',['slug'=>$child->slug])}}"  class="main-menu">{{$child->title}}</a>
                                                                                                <ul>
                                                                                                    @foreach($child->childs2->slice(0, 3) as $chil)
                                                                                                    <li><a href="{{route('view_category',['slug'=>$chil->slug])}}" >{{$chil->title}}</a></li>
                                                                                                    @endforeach
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>   
                                                        @endforeach
                                                        <li class="loadmore" id="loadMore">
                                                            <i class="fa fa-plus-square-o"></i>
                                                            <span class="more-view">Xem thêm</span>
                                                        </li>

                                                        <li class="loadmore" id="lessMore" style="display: none;">
                                                            <i class="fa fa-plus-square-o"></i>
                                                            <span class="more-view">Rút gọn</span>
                                                        </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                            </div>
                        </div>

                    </div>
                    
                    <!-- Main menu -->
                    <div class="main-menu-w col-lg-10 col-md-9">
                        <div class="responsive so-megamenu megamenu-style-dev">
                            <nav class="navbar-default">
                                <div class=" container-megamenu  horizontal open ">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    
                                    <div class="megamenu-wrapper">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container-mega">
                                                <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="{{route('home_product')}}" class="clearfix">
                                                            <strong>SẢN PHẨM</strong>
                                                            <img class="label-hot" src="{{url('public/homev2')}}/image/catalog/menu/hot-icon.png" alt="icon items">
                                                        </a>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>Flash Sale</strong>
                                                            <img class="label-hot" src="{{url('public/homev2')}}/image/catalog/menu/hot-icon.png" alt="icon items">
                                                        </a>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>Voucher</strong>
                                                            <img class="label-hot" src="{{url('public/homev2')}}/image/catalog/menu/new-icon.png" alt="icon items">
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="{{route('downloads')}}" class="clearfix">
                                                            <strong>Khuyến mại</strong>
                                                        </a>
                                            
                                                    </li>
                                                    <!-- <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="{{route('tin_tuc')}}" class="clearfix">
                                                            <strong>Tin tức</strong>
                                                            <span class="label"></span>
                                                        </a>
                                                    </li> -->
                                                    <li class="with-sub-menu hover">
                                                        <a href="{{route('home')}}">Về Hoplong</a>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- //end Main menu -->
                                      
                    <div class="bottom3">                        
                        <div class="telephone hidden-xs hidden-sm hidden-md">
                            <ul class="blank"> 
                                <li><a href="#"><i class="fa fa-truck"></i>Theo dõi đơn hàng của bạn</a></li> 
                                <li><a href="#"><i class="fa fa-phone-square"></i>Hotline 1900.6536</a></li> 
                            </ul>
                        </div>  
                        <div class="signin-w hidden-md hidden-sm hidden-xs">
                            <ul class="signin-link blank"> 
                                @if(Auth::guard('customer')->check())                           
                                <li class="log login"><i class="fa fa-lock"></i> <a class="link-lg" href="{{route('my_account')}}">Hi {{Auth::guard('customer')->user()->name}}</a> </li> 
                                @else
                                <li class="log login"><i class="fa fa-lock"></i> <a class="link-lg" href="{{route('loginCustomer')}}">Đăng nhập </a> / <a href="{{route('register_customer')}}">Đăng ký</a></li> 
                                @endif                               
                            </ul>                       
                        </div>                  
                    </div>
                    
                </div>
            </div>

        </div>
    </header>
    <!-- //Header Container  -->
    
   
<!-- Main Container  -->
@yield('mainContainer')
<!-- //Main Container -->
   
   

    <!-- Footer Container -->
    <footer class="footer-container typefooter-1">
        <!-- Footer Top Container -->
 
            <div class="container">
                <div class="row footer-top">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="socials-w">
                          <h2>Follow socials</h2>
                          <ul class="socials">
                            <li class="facebook"><a href="https://www.facebook.com/hoplongtech/" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                            <li class="twitter"><a href="https://twitter.com/" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                            <li class="google_plus"><a href="https://plus.google.com/" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i><span>Google Plus</span></a></li>
                            <li class="pinterest"><a href="https://www.pinterest.com/" target="_blank" rel="nofollow"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                            <li class="youtube"><a href="#" target="_blank"><i class="fa fa-youtube-play" rel="nofollow"></i><span>Youtube</span></a></li>
                            <li class="linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin" rel="nofollow"></i><span>linkedin</span></a></li>
                          </ul>
                        </div>
                        




                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="module newsletter-footer1">
                            <div class="newsletter">

                                <div class="title-block">
                                    <div class="page-heading font-title">
                                        Đăng ký để nhận khuyến mãi
                                    </div>
                                    
                                </div>

                                <div class="block_content">
                                    <form method="post" id="signup" name="signup" class="form-group form-inline signup send-mail">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" placeholder="Nhập email của bạn..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
                                            </div>
                                            <div class="subcribe">
                                                <button class="btn btn-primary btn-default font-title" type="submit" onclick="return subscribe_newsletter();" name="submit">
                                            Gửi
                                        </button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                                <!--/.modcontent-->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
      
        <!-- /Footer Top Container -->
        
        <div class="footer-middle ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-infos">
                        <div class="infos-footer">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="{{url('public/homev2')}}/image/catalog/logo-footer.png" height="46px" alt="image"></a>
                            </div>
                            <ul class="menu">
                                <li class="adress">
                                    87 Lĩnh Nam - Hoàng Mai - Hà Nội
                                </li>
                                <li class="phone">
                                    1900.6536
                                </li>
                                <li class="mail">
                                    <a href="mailto:info@hoplongtech.com.vn">info@hoplongtech.com.vn</a>
                                </li>
                                <li class="time">
                                    Open time: 8:00AM - 6:00PM
                                </li>
                            </ul>
                        </div>


                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-information box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Hệ thống chi nhánh:</h3>
                                <div class="modcontent">
                                  <ul class="menu">
                                    <li><a href="#">Hà Nội</a></li>
                                    <li><a href="#">Hải phòng</a></li>
                                    <li><a href="#">Đà Nẵng</a></li>
                                    <li><a href="#">Hồ Chí Minh</a></li>
                                    <li><a href="#">Cần Thơ</a></li>
                                  </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-clear">
                        <div class="box-service box-footer">
                          <div class="module clearfix">
                            <h3 class="modtitle">Về Hoplong</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="{{route('home')}}">Giới thiệu</a></li>
                                        <li><a href="#">Điều khoản sử dụng</a></li>
                                        <li><a href="#">Chính sách bảo mật</a></li>
                                        <li><a href="#">Hình thức thanh toán</a></li>
                                        <li><a href="#">Liên hệ</a></li>
                                    </ul>
                                </div>
                          </div>
                        </div>
                    </div><!-- 
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-service box-footer">
                          <div class="module clearfix">
                            <h3 class="modtitle">Danh mục sản phẩm</h3>
                            <div class="modcontent">
                              <ul class="menu">
                                @foreach($categorys->slice(0,5) as $category)
                                <li><a href="{{route('view_category',[$category->slug])}}">{{$category->title}}</a></li>
                                @endforeach
                              </ul>
                            </div>
                          </div>
                        </div>
                    </div> -->
                
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-account box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Chăm sóc khách hàng</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="">Hotline: 1900.6536</a></li>
                                        <li><a href="{{route('view_terms',['type'=>'bao_hanh'])}}">Hướng dẫn mua hàng</a></li>
                                        <li><a href="{{route('view_terms',['type'=>'doi_tra'])}}">Điểm thưởng và đổi điểm thưởng</a></li>
                                        <li><a href="{{route('view_terms',['type'=>'van_chuyen'])}}">Chính sách vận chuyển</a></li>
                                        <li><a href="{{route('loginCustomer')}}">Dành cho đại lý</a></li>
                                        <!-- <li><a href="{{route('register_customer')}}">Đăng ký</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-service box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Dịch vụ</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="{{route('home_agency_posts')}}">Dành cho đại lý</a></li>
                                        <li><a href="{{route('view_terms',['type'=>'bao_hanh'])}}">Chính sách bảo hành</a></li>
                                        <li><a href="{{route('view_terms',['type'=>'doi_tra'])}}">Chính sách đổi trả</a></li>
                                        <li><a href="{{route('view_terms',['type'=>'van_chuyen'])}}">Chính sách vận chuyển</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-service box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Tải ứng dụng ngay</h3>
                                <div class="modcontent col-md-6">
                                    <!-- <ul class="menu">
                                        <li><a href="{{route('home_agency_posts')}}">Dành cho đại lý</a></li>
                                        <li><a href="{{route('view_terms',['type'=>'bao_hanh'])}}">Chính sách bảo hành</a></li>
                                        <li><a href="{{route('view_terms',['type'=>'doi_tra'])}}">Chính sách đổi trả</a></li>
                                        <li><a href="{{route('view_terms',['type'=>'van_chuyen'])}}">Chính sách vận chuyển</a></li>
                                    </ul> -->
                                    <img src="{{url('public/homev2')}}/image/catalog/qr-code.png" alt="iOS/Android">
                                </div>
                                <div class="col-md-6">
                                    <img src="{{url('public/homev2')}}/image/catalog/appstore.png" alt="Aps Store"></br></br>
                                    <img src="{{url('public/homev2')}}/image/catalog/googleplay.png" alt="CH Play">
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!--  <div class="container">
            <div class="row">
                        <div class="footer-b">
                            <div class="bottom-cont">
                                <a href="#"><img src="{{url('public/homev2')}}/image/catalog/demo/payment/pay1.jpg" alt="image"></a>
                                <ul class="footer-links">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">Orders and Returns</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>  
                                <p>**$50 off orders $350+ with the code BOO50. $75 off orders $500+ with the code BOO75. $150 off orders $1000+ with the code BOO150. Valid from October 28, 2016 to October 31, 2016. Offer may not be combined with any other offers or promotions, is non-exchangeable and non-refundable. Offer valid within the US only.</p>
                            </div>
                        </div>
            </div>
        </div> -->

        <!-- Footer Bottom Container -->
        <div class="footer-bottom">
            <div class="container">
                <div class="col-lg-12 col-xs-12 payment-w">
                    <img src="{{url('public/homev2')}}/image/catalog/demo/payment/payment.png" alt="imgpayment">
                </div>
                <div class="col-lg-12 col-xs-12 payment-w">
                    <a href="http://online.gov.vn/Home/WebDetails/29393" rel="nofollow" target="_blank"><img src="{{url('public/homev2')}}/image/catalog/dathongbao.png" alt="Đã thông báo Bộ Công Thương" style="margin-top: 20px;"></a>
                </div>
            </div>
            <div class="copyright-w">
                <div class="container">
                    <div class="copyright">
                    Copyright © 2019 <a href="https://hoplongtech.com/" target="_blank">hoplongtech.com</a> All rights reserved. 
                    </div>
                </div>
            </div>            
        </div>
        <!-- /Footer Bottom Container -->
        
        
            <!--Back To Top-->
        <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
    </footer>
    <!-- //end Footer Container -->

    </div>
   

<!-- End Color Scheme
============================================ -->



<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script type="text/javascript" src="{{url('public/homev2')}}/js/jquery-2.2.4.min.js"></script> -->
<script type="text/javascript" src="{{url('public/homev2')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/slick-slider/slick.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/libs.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/modernizr/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/minicolors/jquery.miniColors.min.js"></script>

<!-- Theme files
============================================ -->

<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/application.js"></script>

<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/homepage.js"></script>

<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/toppanel.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/addtocart.js"></script>  

<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/application.js"></script>
    <script type="text/javascript"><!--
    // Check if Cookie exists
        if($.cookie('display')){
            view = $.cookie('display');
        }else{
            view = 'grid';
        }
        if(view) display(view);
    //--></script> 

    <script type="text/javascript" src="{{url('public/homev2')}}/js/my_js.js"></script>


</body>
</html>