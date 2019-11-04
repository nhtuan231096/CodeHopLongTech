<!DOCTYPE html>
<!-- //--- -->
<!-- <html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage" ng-app="myApp"> -->
<!-- //--- -->
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage" ng-app="my_app" ng-controller="SearchCtrl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <h1>
    <title>@if(isset($category)){{$category->meta_title}} @elseif(isset($download)) {{$download->title}} @elseif(isset($news_project)) {{$news_project->title}} @elseif(isset($img_company)) {{$img_company->title}} @else Công ty cổ phẩn công nghệ Hợp Long @endif
    </title>
  </h1>
  <meta name="description" content="@if(isset($category)){{$category->meta_description}}@elseif(isset($download))
  {{$download->content}}@else Công ty cổ phẩn công nghệ Hợp Long - Nhà phân phối chính thức Schneider Electric, Autonics, Omron, LS, Delta, Hanyoung, Patlite tại Việt Nam @endif">
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/font-awesome.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap-grid.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap-reboot.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/font-techmarket.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/slick.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/techmarket-font-awesome.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/slick-style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/animate.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/css')}}/style.css" media="all" />
  <link rel="icon" href="{{url('uploads/logo/Logo-hl.png')}}" sizes="32x32" />
  <style type="text/css">
    .sub-menu-parent
    {
      position: relative; 
      width: 100%;
      font-weight: bold;
      padding:2px 2px;
    }
    .sub-menu { 
      font-weight: normal;
      padding-top: 15px;
      visibility: hidden; 
      opacity: 0;
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      transform: translateY(-2em);
      z-index: -1;
      transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
    }
    .sub-menu-parent:focus .sub-menu,
    .sub-menu-parent:focus-within .sub-menu,
    .sub-menu-parent:hover .sub-menu {
      visibility: visible; 
      opacity: 1;
      z-index: 1;
      transform: translateY(0%);
      transition-delay: 0s, 0s, 0.1s; 
      padding-left:20px !important;
    }
    nav a:hover { color: #3498db !important; }
    .sub-menu {
      background: #fff;
      line-height: 50px !important; 
    }
  </style>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-43044974-10"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-43044974-10');
  </script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5TBN73L');</script>
<!-- End Google Tag Manager -->

<link rel="stylesheet" href="{{url('public/home')}}/assets/css/config.css">
<link rel="stylesheet" href="{{url('public/css')}}/mystyle.css">
<link rel="stylesheet" href="{{url('public/css/newstyle.css')}}">
<link rel='dns-prefetch' href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
<!-- <link rel="icon" href="{{url('uploads/logo/Logo-hl.png')}}" sizes="32x32" /> -->
<style>
  a, p, ul, li {
    font-family: sans-serif;
  }
</style>
<script src="{{url('public/js')}}/angular.min.js"></script>
<script src="{{url('public/js')}}/SearchCtrl.js"></script>  
</head>
<body class="woocommerce-active page-template-template-homepage-v1 can-uppercase">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TBN73L"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="page" class="hfeed site">
      <div class="top-bar top-bar-v1">
        <div class="col-full">
          <ul id="menu-top-bar-left" class="nav justify-content-center">
            <li class="menu-item animate-dropdown"><a title="" href="{{route('home')}}">Công ty cổ phần công nghệ Hợp Long</a></li>
            <li class="menu-item animate-dropdown"><a title="" href="#">Trang Thương Mại Điện Tử</a></li>
            <li class="menu-item animate-dropdown"><a title="" href="#">Các chính sách</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-487 animate-dropdown dropdown">
              <a title="Dollar (US)" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">
                <i class="fa fa-language"></i>Tiếng Việt (US)<span class="caret"></span>
              </a>
              <ul role="menu" class=" dropdown-menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-489 animate-dropdown">
                  <a title="AUD" href="#">English</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-490 animate-dropdown">
                  <a title="INR" href="#">Japan</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-491 animate-dropdown">
                  <a title="AED" href="#">China</a>
                </li>
              </ul>
            </li>
            <?php if(Auth::guard('customer')->user()) :?>
            <li class="dropdown menu-item animate-dropdown" style="margin-left: 15px">
              <a href="#" class="link-hover">
                <i class="fa fa-user"></i>
                <span>Hi {{Auth::guard('customer')->user()->name}}</span>
              </a>
              <div class="dropdown-content" style="z-index: 1000">
                <a href="{{route('my_account')}}" class="link">Tài khoản của tôi</a>
                <a href="{{route('order_history')}}" class="link">Đơn hàng của tôi</a>
                <a href="{{route('logout_customer')}}" class="link">Thoát tài khoản</a>
              </div>
            </li>
            <?php else: ?>
              <!-- <li class="menu-item animate-dropdown"><a data-toggle="modal" href='#customer-login'>Đăng nhập</a></li> -->
              <li class="menu-item animate-dropdown"><a href="{{route('loginCustomer')}}">Đăng nhập</a></li>
            <?php endif ?>
          </ul>
        </div>
      </div>
      <div class="modal fade" id="customer-login">
        <div class="modal-dialog modal-lg">
          <style type="text/css">.modal-content{max-width: 100%!important}</style>
          <div class="modal-content" style="max-width: 100%!important">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-4">
                  <span style="font-size: 18px">Đăng nhập</span>
                  <img style="width: 100%;margin-top: 15px" src="{{url('uploads/1.0.1/imglogin.png')}}" alt="">
                  <p style="font-size: 14px">Đăng nhập để theo dõi đơn hàng và nhận nhiều ưu đãi hấp dẫn.</p>
                </div>
                <div class="col-md-8">
                  <ul class="accordion-tabs-minimal">
                    <li class="tab-header-and-content">
                      <a href="#" class="tab-link is-active">Đăng nhập</a>
                      <div class="tab-content">
                        <form action="{{route('login_customer')}}" method="POST" role="form" style="margin-top: 20px">                                     
                          <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" id="" placeholder="Nhập email" required>
                          </div>
                          <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" id="" placeholder="Nhập mật khẩu" required>
                          </div>
                          @csrf
                          <p>Quên mật khẩu? ấn vào <a href=""><i>đây</i></a></p>
                          
                          <button type="submit" class="btn btn-primary pull-right">Đăng nhập</button>
                        </form>
                      </div>
                    </li>
                    <li class="tab-header-and-content">
                      <a href="#" class="tab-link">Đăng ký</a>
                      <div class="tab-content">
                        <div class="form-group text-center" style="margin-bottom: 0px">
                          <label for="">
                            <span>
                              <div class="btn-group" data-toggle="buttons" style="vertical-align: middle;">
                                <label class="btn active type_customer">
                                  <input type="radio" name='type_customer' value="0" checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span> Cá nhân</span>
                                </label>
                                <label class="btn type_company">
                                  <input type="radio" name='type_customer' value="1"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span> Công ty</span>
                                </label>
                              </div>
                            </span>
                          </label>
                        </div>

                        <form class="validatedForm" id="form_customer" action="{{route('register_customer')}}" method="POST" role="form">
                          
                          <div class="form-group">
                            <label for="">Họ tên</label>
                            <input type="text" name="name" class="form-control" id="" placeholder="Nhập tên cá nhân/Công ty" required>
                          </div>
                          <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" id="" placeholder="Nhập email" required>
                          </div>
                          <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input type="number" name="phone" class="form-control" id="" placeholder="Nhập số điện thoại" required>
                          </div>
                          <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" id="" placeholder="Nhập địa chỉ" required>
                          </div>
                          <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Nhập nhật khẩu" required>
                          </div>
                          <input type="hidden" name="account_type" value="0"> 
                          <input type="hidden" name="status" value="1"> 
                          @csrf
                          <button type="submit" class="btn btn-primary pull-right">Đăng ký</button>
                        </form>
                        <form class="validatedForm" id="form_company" action="{{route('register_customer')}}" method="POST" role="form">

                          <div class="form-group">
                            <label for="">Tên công ty</label>
                            <input type="text" name="company" class="form-control" id="" placeholder="Nhập tên cá nhân/Công ty" required>
                          </div>
                          <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" id="" placeholder="Nhập email" required>
                          </div>
                          <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input type="number" name="phone" class="form-control" id="" placeholder="Nhập số điện thoại" required>
                          </div>
                          <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" id="" placeholder="Nhập địa chỉ" required>
                          </div>
                          <!-- <input type="hidden" name="customer_group_id"> -->
                          <div class="form-group company_type_id">
                            <style type="text/css">
                              .company_type_id .select2-selection__rendered{background: #cacaca!important;}
                              .company_type_id .select2-selection{border: none!important}
                            </style>
                            <label for="" class="type_cus">Loại hình</label>
                            <select name="company_type_id" id="input" class="form-control" required="required">
                              @foreach($custome_type as $item)
                              <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="">Lĩnh vực kinh doanh</label>
                            <input type="text" name="business_areas" class="form-control" id="" placeholder="Lĩnh vực kinh doanh">
                          </div>
                          <div class="form-group">
                            <label for="">Mã số thuế</label>
                            <input type="text" name="tax_code" class="form-control" id="" placeholder="Nhập mã số thuế" required>
                          </div>
                          <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Nhập nhật khẩu" required>
                          </div>
                          <input type="hidden" name="status" value="1"> 
                          <input type="hidden" name="account_type" value="1">
                          @csrf
                          <button type="submit" class="btn btn-primary pull-right">Đăng ký</button>
                        </form>
                        @if($errors->has('email'))
                        <script type="text/javascript">
                          alert('Tài khoản đã tồn tại, vui lòng thử lại');
                        </script>
                        @endif
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- Latest compiled and minified CSS & JS -->
                <script src="https://code.jquery.com/jquery.js"></script>
                <script type="text/javascript">
                  $("#form_company").hide();
                  
                  $(".type_customer").click(function(){
                    $("#form_customer").show();
                    $("#form_company").hide();
                  });
                  $(".type_company").click(function(){
                    $("#form_company").show();
                    $("#form_customer").hide();
                  });
                </script>
                <script type="text/javascript">
                  $(document).ready(function () {
                    $('.accordion-tabs-minimal').each(function(index) {
                      $(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
                    });
                    $('.accordion-tabs-minimal').on('click', 'li > a.tab-link', function(event) {
                      if (!$(this).hasClass('is-active')) {
                        event.preventDefault();
                        var accordionTabs = $(this).closest('.accordion-tabs-minimal');
                        accordionTabs.find('.is-open').removeClass('is-open').hide();

                        $(this).next().toggleClass('is-open').toggle();
                        accordionTabs.find('.is-active').removeClass('is-active');
                        $(this).addClass('is-active');
                      } else {
                        event.preventDefault();
                      }
                    });
                  });
                </script>
                @if(Session::has('register_success'))
                <script type="text/javascript">
                  alert('Đăng ký tài khoản thành công!');
                </script>
                @endif
                @if(Session::has('login_success'))
                <script type="text/javascript">
                  alert('Đăng nhập thành công!');
                </script>
                @endif
                @if(Session::has('login_error'))
                <script type="text/javascript">
                  alert('Tài khoản hoặc mật khẩu không đúng, vui lòng thử lại!');
                </script>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
      <header id="masthead" class="site-header header-v1" style="background-image: none; ">
        <div class="col-full desktop-only">
          <div class="techmarket-sticky-wrap">
            <div class="row">
              <div class="site-branding">
                <a href="{{route('home')}}" class="custom-logo-link" rel="home">
                  <div class="logo">
                    <img src="{{url('uploads/logo/Logo-hl.png')}}" alt="">
                  </div>
                </a>
              </div>
              <nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation" data-nav="flex-menu">
                <ul id="menu-primary-menu" class="nav yamm">
                  <li class="sale-clr yamm-fw menu-item animate-dropdown">
                    <a title="hoplongtech" href="{{route('home')}}">TRANG CHỦ</a>
                  </li>
                  <li class="menu-item animate-dropdown">
                    <a title="Sản phẩm" href="{{route('home_product')}}">SẢN PHẨM
                    </a>
                  </li>
                  <li class="menu-item animate-dropdown">
                    <a title="Tuyển dụng" href="{{route('tuyen-dung')}}">Tuyển dụng</a>
                  </li>
                  <li class="menu-item animate-dropdown">
                    <a title="Dành cho đại lý" href="{{route('home_agency_posts')}}">Dành cho đại lý</a>
                  </li> 
                  <li class="menu-item animate-dropdown">
                    <a title="Download catalog" href="{{route('downloads')}}">DOWNLOAD</a>
                  </li>
                  <li class="menu-item animate-dropdown">
                    <a title="Tin tức" href="{{route('tin_tuc')}}">Tin tức</a>
                  </li>
                  <li class="menu-item animate-dropdown">
                    <a title="Headphones Sale" href="{{route('projects')}}">DỰ ÁN</a>
                  </li>
                  <li class="menu-item animate-dropdown">
                    <a title="Headphones Sale" href="{{route('contact')}}">LIÊN HỆ</a>
                  </li>
                </ul>
              </nav>
              <nav id="secondary-navigation" class="secondary-navigation" aria-label="Secondary Navigation" data-nav="flex-menu">
                <ul id="menu-secondary-menu" class="nav">
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2802 animate-dropdown">
                    <a title="Dành cho đại lý" href="#">
                      <i class="tm tm-order-tracking"></i>Dành cho đại lý</a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-487 animate-dropdown dropdown">
                      <a title="Track Your Order" href="track-your-order.html">
                        <i class="fa fa-phone"></i> 1900.6536</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="row align-items-center">
                <div id="departments-menu" class="dropdown departments-menu">
                  <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="tm tm-departments-thin"></i>
                    <span>Tất cả danh mục</span>
                  </button>
                  <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
                    @foreach($categorys as $category)
                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                      <a title="{{$category->title}}" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="{{route('view_category',[$category->slug])}}">{{$category->title}}<span class="caret"></span></a>
                      <ul role="menu" class=" dropdown-menu">
                        <li class="menu-item menu-item-object-static_block animate-dropdown">
                          <div class="yamm-content">
                            <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                              <div class="kc-col-container">           
                                <img src="{{url('uploads/category')}}/{{$category->cover_image_2}}"  alt="{{$category->title}}" style="padding-top:30px;" />   
                              </div>   
                            </div>
                            <div class="row yamm-content-row">
                              @foreach($category->childs as $child)
                              <div class="col-md-6 col-sm-12">
                                <div class="kc-col-container">
                                  <div class="kc_text_block">
                                    <ul>
                                      <nav>
                                        <ul>
                                          <li class="sub-menu-parent" tab-index="0">
                                            <a href="{{route('view_category',['slug'=>$child->slug])}}" >{{$child->title}}</a>
                                            <ul class="sub-menu">
                                              @foreach($child->childs2 as $chil)
                                              <li>
                                                <a href="{{route('view_category',['slug'=>$chil->slug])}}">{{$chil->title}}</a>
                                              </li>
                                              @endforeach
                                            </ul>
                                          </li> 
                                        </ul>
                                      </nav>
                                      <li class="nav-divider"></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    @endforeach
                    <li class="highlight menu-item animate-dropdown">
                      <a title="Tất cả danh mục" href="{{route('categorys')}}">Tất cả danh mục</a>
                    </li>
                  </ul>
                </div>
                <!-- .departments-menu -->
                <form class="navbar-search" method="get" action="{{route('search_product')}}" style="position: relative;">
                  <label class="sr-only screen-reader-text" for="search">Search for:</label>
                  <div class="input-group">
                    <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="title" placeholder="Tìm theo tên sản phẩm" ng-change="productSearch(product_search)" ng-model="product_search" ng-model-options="{debounce: 1000}" />
                    <div class="input-group-addon search-categories">
                      <select name='product_cat' id='product_cat' class='postform resizeselect'>
                        <option value='0' selected='selected'>All Categories</option>
                        @foreach($categorys as $cat)
                        <option class="level-0" value="{{$cat->title}}">{{$cat->title}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="input-group-btn">
                      <input type="hidden" id="search-param" name="post_type" value="product" />
                      <button type="submit" class="btn btn-primary">
                        <i class="fa fa-search"></i>
                        <span class="search-btn" style="color: #fff; font-weight: bold;">Tìm</span>
                      </button>
                    </div>
                  </div>
                  <div class="search-tab" style="position: absolute;width: 97%">
                        <div class="col-md-12" style="border: 1px solid #3498db;background: #fff;border: 2px solid #e7e7e7;
    border-right-color: rgb(231, 231, 231);border-radius: 5px !important;">
                            <div class="media" ng-repeat="search_item in res_product_search ">
                              <span ng-click="close_tab()" style="position: absolute;top: 10px;right: 15px;font-size: 16px;z-index: 50;font-weight: bold;cursor: pointer;">x</span>
                                <a class="pull-left" href="{{url('')}}/products/@{{search_item['slug']}}" target="_blank">
                                    <img width="80" class="media-object" src="{{url('uploads/product')}}/@{{search_item['cover_image']}}" alt="Image">
                                </a>
                                <div class="media-body">
                                    <a class="" href="{{url('')}}/products/@{{search_item['slug']}}" target="_blank" style="font-size: 15px;font-weight: 700;margin-bottom: 0px;letter-spacing: -.04em;line-height: 1;padding: 10px 0 0;">@{{search_item['title']}}</a>
                                    <p>@{{search_item['price_product']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- .navbar-search -->
                <!-- <ul class="header-compare nav navbar-nav">
                  <li class="nav-item">
                    <a href="compare.html" class="nav-link">
                      <i class="tm tm-compare"></i>
                      <span id="top-cart-compare-count" class="value">0</span>
                    </a>
                  </li>
                </ul>
                <ul class="header-wishlist nav navbar-nav">
                  <li class="nav-item">
                    <a href="wishlist.html" class="nav-link">
                      <i class="tm tm-favorites"></i>
                      <span id="top-cart-wishlist-count" class="value">0</span>
                    </a>
                  </li>
                </ul>
                <ul id="site-header-cart" class="site-header-cart menu">
                  <li class="animate-dropdown dropdown ">
                    <a class="cart-contents cart" id="cart" href="#" data-toggle="dropdown" title="">
                      <i class="tm tm-shopping-bag"></i>
                      <span class="count">{{$cart->total_quantity}}</span>
                    </li>
                  </ul> -->
                  <ul id="site-header-cart" class="site-header-cart menu">
                    <li class="animate-dropdown dropdown">
                        <a class="cart-contents" href="" data-toggle="dropdown" title="View your shopping cart" aria-expanded="false" style="opacity: 1;">
                            <i class="header-cart-icon tm tm-shopping-bag"></i>
                            <span class="count">{{$cart->total_quantity}}</span>
                            <span class="amount"><span class="price-label">Giỏ hàng</span>{{number_format($cart->total_amount)}}</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-mini-cart">
                            <li>
                                <div class="widget_shopping_cart_content" style="opacity: 1;">

                                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                       @foreach($cart->items as $item)
                                        <li style="padding-top: 6px;padding-bottom: 6px" class="woocommerce-mini-cart-item mini_cart_item">
                                            <a href="{{route('delete_cart',['id'=>$item['id']])}}" class="remove remove_from_cart_button" style="background: #3498db">×</a>
                                            <a href="https://demo2.chethemes.com/techmarket/product/smart-watches-3-swr50/" style="font-weight: bold">
                                                <img width="180" height="180" src="{{url('uploads/product')}}/{{$item['image']}}" alt="{{$item['image']}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" sizes="(max-width: 180px) 100vw, 180px">{{$item['title']}}</a>

                                            <span class="quantity">{{$item['quantity']}} × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{number_format($item['price'])}}</span>
                                            </span>
                                        </li>
                                        @endforeach
                                    </ul>

                                    <p class="woocommerce-mini-cart__total total"><strong>Tổng tiền:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{number_format($cart->total_amount)}}</span>
                                    </p>

                                    <p class="woocommerce-mini-cart__buttons buttons">
                                      <a href="{{route('view_cart')}}" style="margin: 0" class="button wc-forward">Xem giỏ hàng</a>
                                      <a href="{{route('order')}}" style="margin: 3px" class="button checkout wc-forward">Đặt hàng</a>
                                    </p>

                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                </div>
               
              </div>
              
              <div class="col-full handheld-only">
                <div class="handheld-header">
                  <div class="row">
                    <div class="site-branding">
                      <a href="{{route('home')}}" class="custom-logo-link" rel="home">
                        <div class="logo">
                          <img src="{{url('uploads/logo/Logo-hl.png')}}" alt="hoplongtech">
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="techmarket-sticky-wrap">
                    <div class="row">
                      <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                        <button class="btn navbar-toggler" type="button"> 
                          <i class="tm tm-departments-thin"></i> 
                          <span>Menu</span> 
                        </button>
                        <div class="handheld-navigation-menu"> 
                          <span class="tmhm-close">Close</span>
                          <ul id="menu-departments-menu-1" class="nav">
                            @foreach($categorys as $category)
                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                              <a title="{{$category->title}}" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">{{$category->title}}<span class="caret"></span></a>
                              <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item menu-item-object-static_block animate-dropdown">
                                  <div class="yamm-content">
                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                    </div>
                                    <!-- .bg-yamm-content -->
                                    <div class="row yamm-content-row">
                                      @foreach($category->childs as $child)
                                      <div class="col-md-6 col-sm-12">
                                        <div class="kc-col-container">
                                          <div class="kc_text_block">
                                            <ul>
                                              <li class="nav-title ttitle">{{$child->title}}</li>
                                              @foreach($child->childs as $chil)
                                              <li><a href="{{route('view',['slug'=>$chil->slug])}}">{{$chil->title}}</a></li>
                                              @endforeach
                                              <li class="nav-divider"></li>

                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      @endforeach
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </li>
                            @endforeach
                          </ul>
                        </div>
                      </nav>
                      <div class="site-search">
                        <div class="widget woocommerce widget_product_search">
                          <form action="{{route('search_product')}}" role="search" method="get" class="woocommerce-product-search">
                            <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                            <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="title" />
                            <input type="submit" value="Search" />
                            <input type="hidden" name="post_type" value="product" />
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </header>
            @yield('content')
            <footer class="site-footer footer-v1">
              <div class="col-full">
                <div class="before-footer-wrap">
                  <div class="col-full">
                    <div class="footer-newsletter">
                      <div class="media">
                        <i class="footer-newsletter-icon tm tm-newsletter"></i>
                        <div class="media-body">
                          <div class="clearfix">
                            <div class="newsletter-header">
                              <h5 class="newsletter-title">Đăng kí nhận email</h5>
                              <span class="newsletter-marketing-text">...nhận các bản tin khuyến mại.
                              </span>
                            </div>
                            <div class="newsletter-body">
                              <form class="newsletter-form">
                                <input type="text" placeholder="Nhập email để nhận khuyến mại.." style="display: inline-block;">
                                <button class="button" type="button" style="display: inline-block; margin:0;padding:13px">Gửi đi</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="footer-social-icons">
                      <ul class="social-icons nav">
                        <li class="nav-item">
                          <a class="sm-icon-label-link nav-link" href="https://www.facebook.com/hoplongtech" rel="nofollow">
                            <i class="fa fa-facebook"></i> Facebook</a>
                          </li>
                          <li class="nav-item">
                            <a class="sm-icon-label-link nav-link" href="#" rel="nofollow">
                              <i class="fa fa-twitter"></i> Twitter</a>
                            </li>
                            <li class="nav-item">
                              <a class="sm-icon-label-link nav-link" href="#" rel="nofollow">
                                <i class="fa fa-youtube"></i> Youtube</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="footer-widgets-block">
                        <div class="row">
                          <div class="footer-contact">
                            <div class="footer-logo">
                              <a href="{{route('home')}}" class="custom-logo-link" rel="home">
                                <div class="logo">
                                  <img src="{{url('uploads/logo/Logo-hl.png')}}" alt="">
                                </div>
                              </a>
                            </div>
                            <!-- .footer-logo -->
                            <div class="contact-payment-wrap">
                              <div class="footer-contact-info">
                                <div class="media">
                                  <span class="media-left icon media-middle">
                                    <i class="tm tm-call-us-footer"></i>
                                  </span>
                                  <div class="media-body">
                                    <span class="call-us-title">Hỗ trợ kĩ thuật/ kinh doanh 24/7!</span>
                                    <span class="call-us-text">1900.6536</span>
                                    <address class="footer-contact-address"><i class="fa fa-building"></i> 87 Lĩnh Nam - Hoàng Mai - Hà Nội</address>
                                    <address class="footer-contact-address"><i class="fa fa-building"></i> 972 Bạch Đằng - Hai Bà Trưng - Hà Nội</address>
                                    <!-- <address class="footer-contact-address"><i class="fa fa-warehouse"></i> </address> -->
                                    <address class="footer-contact-address"><i class="fa fa-industry"></i> 22/64 Sài Đồng - Long Biên - Hà Nội</address>
                                    <a href="https://www.google.com/search?ei=AYGpXI2zCpasoASnw6WwAw&q=hoplongtech.com&oq=hoplongtech.com&gs_l=psy-ab.3...10216.10874..11141...0.0..0.79.306.4......0....1..gws-wiz.Nq9z245h7a4" class="footer-address-map-link" rel="nofollow" target="blank">
                                      <i class="tm tm-map-marker"></i>Tìm trên bản đồ</a>
                                    </div>
                                    <!-- .media-body -->
                                  </div>
                                  <!-- .media -->
                                </div>
                                <!-- .footer-contact-info -->
                                <div class="footer-payment-info">
                                  <div class="media">
                                    <span class="media-left icon media-middle">
                                      <i class="tm tm-safe-payments"></i>
                                    </span>
                                    <div class="media-body">
                                      <h5 class="footer-payment-info-title">Chúng tôi hiện diện tại:</h5>
                                      <div class="footer-payment-icons">
                                        <ul class="list-payment-icons nav">
                                          <li class="nav-item">
                                            <span>Hải phòng</span>
                                          </li>
                                          <li class="nav-item">
                                            <span>Đà Nẵng</span>
                                          </li>
                                          <li class="nav-item">
                                            <span>Hồ Chí Minh</span>
                                          </li>
                                          <li class="nav-item">
                                            <span>Cần Thơ</span>
                                          </li>
                                        </ul>
                                      </div>
                                      <!-- .footer-secure-by-info -->
                                    </div>
                                    <!-- .media-body -->
                                  </div>
                                  <!-- .media -->
                                </div>
                                <!-- .footer-payment-info -->
                              </div>
                              <!-- .contact-payment-wrap -->
                            </div>
                            <!-- .footer-contact -->
                            <div class="footer-widgets">
                              <div class="columns">
                                <aside class="widget clearfix">
                                  <div class="body">
                                    <h4 class="widget-title">Danh mục sản phẩm</h4>
                                    <div class="menu-footer-menu-1-container">
                                      <ul id="menu-footer-menu-1" class="menu">
                                        @foreach($categorys as $category)
                                        @if($category->priority==1)
                                        <li class="menu-item">
                                          <a href="{{route('view_category',[$category->slug])}}">{{$category->title}}</a>
                                        </li>
                                        @endif
                                        @endforeach
                                      </ul>
                                    </div>
                                    <!-- .menu-footer-menu-1-container -->
                                  </div>
                                  <!-- .body -->
                                </aside>
                                <!-- .widget -->
                              </div>
                              <!-- .columns -->
                              <div class="columns">
                                <aside class="widget clearfix">
                                  <div class="body">
                                    <h4 class="widget-title">&nbsp;</h4>
                                    <div class="menu-footer-menu-2-container">
                                      <ul id="menu-footer-menu-2" class="menu">
                                        @foreach($categorys as $category)
                                        @if($category->priority=="")
                                        <li class="menu-item">
                                          <a href="{{route('view_category',[$category->slug])}}">{{$category->title}}</a>
                                        </li>
                                        @endif
                                        @endforeach
                                      </ul>
                                    </div>
                                    <!-- .menu-footer-menu-2-container -->
                                  </div>
                                  <!-- .body -->
                                </aside>
                                <!-- .widget -->
                              </div>
                              <!-- .columns -->
                              <div class="columns">
                                <aside class="widget clearfix">
                                  <div class="body">
                                    <h4 class="widget-title">Dịch vụ</h4>
                                    <div class="menu-footer-menu-3-container">
                                      <ul id="menu-footer-menu-3" class="menu">
                                        <li class="menu-item">
                                          <a href="#">Dành cho đại lý</a>
                                        </li>
                                        <li class="menu-item">
                                          <a href="#">Chính sách bảo hành</a>
                                        </li>
                                        <li class="menu-item">
                                          <a href="#">Chính sách đổi trả</a>
                                        </li>
                                        <li class="menu-item">
                                          <a href="#">Chính sách vận chuyển</a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </aside>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="site-info">
                          <div class="col-full">
                            <div class="copyright">Copyright &copy; 2019 <a href="https://hoplongtech.com">Hoplongtech.com</a> All rights reserved.</div>
                          </div>
                        </div>
                      </div>
                    </footer>
                  </div>

                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery.min.js"></script>
                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/tether.min.js"></script>
                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/bootstrap.min.js"></script>
                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery-migrate.min.js"></script>
                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery-ui.min.js"></script>
                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/hidemaxlistitem.min.js"></script>
                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery.easing.min.js"></script>
                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/scrollup.min.js"></script>
                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery.waypoints.min.js"></script>
                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/waypoints-sticky.min.js"></script>
                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/pace.min.js"></script>
                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/slick.min.js"></script>
                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/scripts.js"></script>
                  <script type="text/javascript" src="{{url('public/home')}}/assets/js/switchstylesheet.js"></script>
                  <script src="{{url('public/js')}}/angular.min.js"></script>
                  <script src="{{url('public/js')}}/app-angular.js"></script>
                  <script src="{{url('public/js')}}/dirPagination.js"></script>
                  <script>
                    window.fbMessengerPlugins = window.fbMessengerPlugins || {
                      init: function () {
                        FB.init({
                          appId            : '1678638095724206',
                          autoLogAppEvents : true,
                          xfbml            : true,
                          version          : 'v3.0'
                        });
                      }, callable: []
                    };
                    window.fbAsyncInit = window.fbAsyncInit || function () {
                      window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
                      window.fbMessengerPlugins.init();
                    };
                    setTimeout(function () {
                      (function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) { return; }
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
                        fjs.parentNode.insertBefore(js, fjs);
                      }(document, 'script', 'facebook-jssdk'));
                    }, 0);
                  </script>

                  <div
                  class="fb-customerchat"
                  page_id="673301269359074"
                  ref="">
                </div>
              </body>
              </html>