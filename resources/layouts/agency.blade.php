<!DOCTYPE html>
<html lang="en-US" class="stm-site-preloader" class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Công ty cổ phần công nghệ Hợp Long - Hoplongtech Automation</title>
<meta name="title" content="Công ty cổ phần công nghệ Hợp Long - Hoplongtech Automation">
<meta name="description" content="Hoplongtech.com - Nhà phân phối chính thức Schneider, Omron, Autonics, Hanyoung, Siemens, Patlite, Idec, LS, Mitsubishi, Delta, Proface tại Việt Nam. Ngoài ra Hoplong còn cung cấp các giải pháp tích hợp hệ thống robot đáp ứng mọi ứng dụng của khách hàng.">
<meta name="keyword" content="Schneider, Omron, Autonics, Idec Việt Nam, biến tầm Schneider">
<meta name='robots' content='index,follow' />
<!-- <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap.min.css" media="all" /> -->
<link type="text/css" media="all" href="{{url('public')}}/css/autoptimize.css" rel="stylesheet" />
<link type="text/css" media="all" href="{{url('public/home/home')}}/css/slick.css" rel="stylesheet" id='consulting-layout-inline-css'/>
<link rel='stylesheet' id='consulting-default-font-css' href="{{url('public/home/home')}}/css/fonts.css" type='text/css' media='all' />
<link rel='stylesheet' id='stm-google-fonts-css' href="{{url('public/home/home')}}/css/fonts.css" type='text/css' media='all' />
<link rel="canonical" href="http://localhost/hoplongtech" />
<link rel="icon" href="{{url('uploads/logo/Logo-hl.png')}}" sizes="32x32" />
<link rel="stylesheet" href="{{url('public')}}/css/newstyle.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-43044974-10"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-43044974-10');
</script>
<script type="text/javascript">
var ajaxurl = '{{url("public/home/home")}}/wp-admin/admin-ajax.php';
</script>
<link rel="stylesheet" href="{{url('public/css')}}/mystyle.css"> </head>
<body class="page-template-default page page-id-614 site_layout_1 header_style_2 sticky_menu wpb-js-composer js-comp-ver-5.4.7 vc_responsive">
<div id="wrapper">
<div id="fullpage" class="content_wrapper">
    <header id="header">
        <div class="top_bar">
            <div class="container">
                <div id="lang_sel">
                    <ul>
                        <li>
                            <a href="#" class="pull-left lang_sel_sel icl-en" style="font-family:'Open Sans', sans-serif"><img style="padding: 0 5px 3px 3px;" class="pull-left" src="{{url('uploads/logo/icon-vn.jpg')}}" width="30px" height="20px" alt="logo-vn"> Tiếng việt</a>
                            <ul>
                                <li class="icl-fr"><a href="#fr">vietnamese</a></li>
                                <li class="icl-de"><a href="#de">English</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="top_bar_info_wr">
                    <div class="top_bar_info_switcher">
                        <div class="active">
                            <div class="dropdown">
                                <button class="dropbtn"><span>Hà Nội<i class="fa fa-caret-down" style="padding-left: 10px"></i></span></button>
                                <div class="dropdown-content"> @foreach($offices as $office) <a href="#{{$office->id}}">{{$office->title}}</a> @endforeach </div>
                            </div>
                        </div>
                    </div>
                    <?php if(Auth::guard('customer')->user()) :?>
                    <ul class="login_logout" id="top_bar_logout" style="display: block">
                        <li class="dropdown">
                            <a href="#" class="link-hover">
                                <i class="fa fa-user"></i>
                                <span>Hi {{Auth::guard('customer')->user()->name}}</span>
                            </a>
                            <div class="dropdown-content">
                                <a href="{{route('my_account')}}" class="link">Tài khoản của tôi</a>
                                <a href="{{route('order_history')}}" class="link">Đơn hàng của tôi</a>
                                <a href="{{route('logout_customer')}}" class="link">Thoát tài khoản</a>
                            </div>
                        </li>
                    </ul>          
                    <?php else :?>
                        <ul class="login_logout" id="top_bar_login" style="display: block">
                            <li> 
                                <a data-toggle="modal" href='#customer-login'>
                                    <i class="fa fa-user"></i>
                                    <span> Đăng nhập/Đăng ký</span>
                                </a> 
                            </li>
                        </ul>   
                    <?php endif ?>
                    
                    <ul class="top_bar_info" id="top_bar_info_1" style="display: block;">
                        <!--  <li> <i class="stm-marker"></i> <span>{{$actoffice->title}}</span> </li> -->
                        <li> <i class="fa fa-envelope-o"></i> <span> {{$actoffice->email}}</span> </li>
                        <li> <i class="fa fa-phone"></i> <span>{{$actoffice->phone}}</span> </li>
                    </ul>@foreach($offices as $office)
                    <ul class="top_bar_info" id="{{$office->id}}">
                        <!--   <li> <i class="stm-marker"></i> <span>{{$office->address}}</span></li> -->
                        <li> <i class="fa fa-envelope-o"></i> <span> {{$office->email}}</span></li>
                        <li> <i class="fa fa-phone"></i> <span>{{$office->phone}}</span></li>
                    </ul>@endforeach</div>
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
<div class="header_top clearfix">
<div class="row">
    <div class="col-md-2">
        <div class="logo-home text-center">
            <a href="{{route('home')}}"><img class="" src="{{url('uploads/logo/Logo-hl.png')}}" alt="logo-hl"></a>
        </div>
    </div>
    <div class="col-md-10">
        <div class="col-md-12">
            <div class="menu-top">
                <ul>
                    <li> <a href="#">Giới thiệu</a> </li>
                    <li> <a href="{{route('home_product')}}">Sản phẩm</a> </li>
                    <li> <a href="https://hoplongtech.com/robot">Robot</a> </li>
                    <li> <a href="https://schneider.hoplongtech.com">SE</a> </li>
                    <li> <a href="{{route('agency_posts')}}">Dành cho đại lý</a> </li>
                    <li> <a href="{{route('tuyen-dung')}}">Tuyển dụng</a> </li>
                    <li> <a href="{{route('downloads')}}">Download</a> </li>
                    <li> <a href="{{route('projects')}}">Dự án</a> </li>
                    <li> <a href="{{route('contact')}}">Liên hệ</a> </li>
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-9 ">
                <form class="navbar-search ng-pristine ng-valid" action="{{route('search_product')}}" method="get">
                    <label class="sr-only screen-reader-text" for="search">Tìm kiếm:</label>
                    <div class="input-group">
                        <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="title" placeholder="Search for products">
                        <div class="input-group-addon search-categories">
                            <select name="product_cat" id="product_cat" class="postform resizeselect" style="width: 154.609px;">
                                <option value="" selected="selected">Tất cả các danh mục</option> @csrf </select>
                            </div>
                            <div class="input-group-btn">
                                <input type="hidden" id="search-param" name="post_type" value="product" autocomplete="off">
                                <button type="submit" class="btn btn-s"> <span class="search-btn fa fa-search"></span> </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="hotline"><i class="fa fa-phone" style="font-size: 23px;padding-right: 10px;"></i><span>19006536</span></div>
                    <div class="email"><i class="fa fa-envelope" style="font-size: 23px;padding-right: 10px;"></i><span>info@hoplongtech.com.vn</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="top_nav media-body media-middle"> </div>
</div>
<div class="mobile_header">
    <div class="logo_wrapper clearfix">
        <div class="logo">
            <a href="{{route('home')}}"><img src="{{url('uploads/logo/w-logo.png')}}" style="width:70px; height: px;" alt="Hoplongtech"></a>
        </div>
        <div id="menu_toggle" class="">
            <button></button>
        </div>
    </div>
    <div class="header_info">
        <div class="top_nav_mobile" style="display: none;">
            <ul id="menu-main-menu-1" class="main_menu_nav">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-13"><a href="{{route('home')}}">Trang chủ</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-560"><a href="{{route('home_product')}}">Sản phẩm</a> </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-560"><a href="https://hoplongtech.com/robot">Robot</a> </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-560"><a href="https://schneider.hoplongtech.com">SE</a>
                 </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-560"><a href="{{route('agency_posts')}}">Dành cho đại lý</a>
                 </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1528"><a href="{{route('tuyen-dung')}}">Tuyển dụng </a> </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-524"><a href="{{route('projects')}}">Dự án</a> </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1368"><a href="{{route('contact')}}">Liên hệ</a> </li>
            </ul>
        </div>
        <div class="icon_texts" style="padding: 10px 40px;">
            <div class="icon_text clearfix">
                <!--   <div class="icon"><i class="fa stm-phone"></i></div> -->
                <div class="text"> <span><i class="fa fa-phone" style="font-size: 23px;padding-right: 10px;"></i></span><strong> {{$actoffice->phone}}</strong> </div>
            </div>
            <div class="icon_text clearfix">
                <div class="text"> <span><i class="fa fa-envelope" style="font-size: 23px;padding-right: 10px;"></i></span><strong> s{{$actoffice->email}}</strong> </div>
            </div>
        </div>
    </div>
</div>
</header>
<div id="main">
<div id="carousel-id" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-id" data-slide-to="0" class="active"></li>@foreach($slider_homes as $dot)
        <li data-target="#carousel-id" data-slide-to="1" class=""></li>@endforeach </ol>
        <div class="carousel-inner">
            <div class="item active"> <img src="{{url('uploads/slider')}}/{{$active->cover_image}}" alt="{{$active->title}}">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>{{$active->caption1}}</h2>
                        <p>{{$active->caption2}}</p>
                        <br>
                        <p>{{$active->caption3}}</p>
                        <p><a class="btn btn-lg btn-default" href="#" role="button">Xem thêm</a></p>
                    </div>
                </div>
            </div>@foreach($slider_homes as $slider)
            <div class="item"> <img src="{{url('uploads/slider')}}/{{$slider->cover_image}}" alt="{{$slider->title}}">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>{{$active->caption1}}</h2>
                        <p>{{$active->caption2}}</p>
                        <br>
                        <p>{{$active->caption3}}</p>
                        <p><a class="btn btn-lg btn-default" href="#" role="button">Xem thêm</a></p>
                    </div>
                </div>
            </div>@endforeach</div><a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a></div>
            
</div>  
        <!-- //--- -->

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>
 -->
        @yield('main_agency')

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Tìm kiếm</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Nhập thông tin tìm kiếm...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" style="color: #fff;padding: 12px;border-radius: 4px;" type="button">Search</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Danh mục bài viết</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
                @foreach($cates as $cate)
                  <li>
                    <a class="category_agency_post" href="{{route('postsCategory',['slug'=>$cate->slug,'id'=>$cate->id])}}">{{$cate->name}}</a>
                  </li>
                @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Bài viết nổi bật</h5>
          <div class="card-body">
            @foreach($agency_featured_posts as $item)
            <div class="media highlight_post">
                <a class="pull-left" href="#">
                    <img class="media-object" src="{{url('uploads/posts')}}/{{$item->cover_image}}" width="120px" height="100px" alt="Image">
                </a>
                <div class="media-body">
                    <h4 class="media-heading" style="padding: 0;font-size: 16px">{{$item->title}}</h4>
                    <p>
                        {{substr(strip_tags($item->description),0,50)}}..
                    </p>
                </div>
            </div>
            @endforeach
          </div>
        </div>



      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"> </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- //--- -->
        <div class="competed">
            <div class="partners">
                <h2><center><p class="size_mobile">Đối tác</p></center></h2>
                <style type="text/css">
                    html,
                    body {
                        background: #102131;
                    }

                    .slider {
                        width: 1600px;
                        margin: 20px auto;
                        text-align: center;
                        padding: 20px;
                        color: white;
                        .parent-slide {
                            padding: 15px;
                        }
                        img {
                            display: block;
                            margin: auto;
                        }
                    }
                </style>
                <div class="slider"> 
                    @foreach($partners as $partner) 
                    <a href="{{url('product-category')}}/{{$partner->slug}}">
                        <img src="{{url('uploads/partner')}}/{{$partner->cover_image}}" alt="{{$partner->title}}" class="img-responsive" /> </a>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
    </div>
    <footer id="footer" class="footer style_1">

        <div class="widgets_row">
            <div class="container">
                <div class="footer_widgets">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer_logo text-center">
                                <a href="{{route('home')}}"> <img src="{{url('uploads/logo/w-logo.png')}}" width="200px" alt="Hoplongtech-logo" /> </a>
                            </div>
                            <div class="footer_text text-center">
                                <p><span style="font-weight: bold; font-size: 16px;">INDUSTRIAL AUTOMATION</span> </p>
                                <p><span style="font-weight: bold; font-size: 16px;">HOTLINE: 1900.6536</span> </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <section id="nav_menu-2" class="widget widget_nav_menu">
                                <h4 class="widget_title no_stripe">Sản phẩm</h4>
                                <div class="menu-extra-links-container">
                                    <ul id="menu-extra-links" class="menu">
                                        <li id="menu-item-163" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-163"><a href="https://hoplongtech.com/product-category/schneider">Schneider</a></li>
                                        <li id="menu-item-164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164"><a href="https://hoplongtech.com/product-category/omron">Omron</a></li>
                                        <li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a href="https://hoplongtech.com/product-category/autonics">Autonics</a></li>
                                        <li id="menu-item-927" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-927"><a href="https://hoplongtech.com/product-category/idec">Idec</a></li>
                                        <li id="menu-item-928" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-928"><a href="https://hoplongtech.com/product-category/ls">LS</a></li>
                                        <li id="menu-item-929" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-929"><a href="https://hoplongtech.com/product-category/mitsubishi">Mitsubishi</a></li>
                                        <li id="menu-item-930" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-930"><a href="https://hoplongtech.com/product-category/patlite">Patlite</a></li>
                                        <li id="menu-item-931" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-931"><a href="https://hoplongtech.com/product-category/proface">Proface</a></li>
                                        <li id="menu-item-933" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-933"><a href="https://hoplongtech.com/product-category/fuji">Fuji</a></li>
                                        <li id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a href="https://hoplongtech.com/product-category/siemens">Siemens</a></li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <section id="recent-posts-4" class="widget widget_recent_entries">      
                                <h4 class="widget_title no_stripe">Bài viết mới nhất</h4>     
                                <ul>
                                    @foreach($company_news as $company_new)
                                    <li>
                                        <a href="{{route('detail_project',['slug'=>$company_new->slug])}}">{{$company_new->title}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <section id="nav_menu-2" class="widget widget_nav_menu">
                                    <h4 class="widget_title no_stripe">Dịch vụ</h4>
                                    <div class="menu-extra-links-container">
                                        <ul id="menu-extra-links" class="menu">
                                            <li id="menu-item-163" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-163"><a href="#">Chính sách bảo hành</a></li>
                                            <li id="menu-item-164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164"><a href="#">Chính sách vận chuyển</a></li>
                                        </br>
                                        <li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a href="#">Bảo hành sản phẩm</a></li>
                                    </ul>
                                </div>
                                <div class="footer_n"> 
                                    <img src="{{url('uploads/logo/logo-da-thong-bao-voi-bo-cong-thuong.png')}}" alt="logo-da-thong-bao-voi-bo-cong-thuong"> 
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <section id="mc4wp_form_widget-2" class="widget widget_mc4wp_form_widget">
                                <script>
                                    window.fbMessengerPlugins = window.fbMessengerPlugins || {
                                        init: function() {
                                            FB.init({
                                                appId: '1678638095724206',
                                                autoLogAppEvents: true,
                                                xfbml: true,
                                                version: 'v3.0'
                                            });
                                        },
                                        callable: []
                                    };
                                    window.fbAsyncInit = window.fbAsyncInit || function() {
                                        window.fbMessengerPlugins.callable.forEach(function(item) {
                                            item();
                                        });
                                        window.fbMessengerPlugins.init();
                                    };
                                    setTimeout(function() {
                                        (function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) {
                                                return;
                                            }
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));
                                    }, 0);
                                </script>
                                <div class="fb-customerchat" page_id="673301269359074" ref=""></div>
                            </section>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_row">
            <div class="container">
                <div class="copyright_row_wr">
                    <div class="copyright"> Copyright &copy; <a href="{{route('home')}}">Hoplongtech 2019</a>.  All rights reserved.</div>
                    <div class="socials">

                        <ul>
                            <li>
                                <a href="http://facebook.com/hoplongtech" rel="nofollow" target="_blank" class="social-facebook" >
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>

</body>

<script data-cfasync="false" type="text/javascript" src="{{url('public/home/home')}}/js/startsize.js"></script>
<script type="text/javascript" src="{{url('public')}}/js/autoptimize.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script type="text/javascript">
    window.onload = function() {
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: true,
            prevArrow: '',
            nextArrow: '',
            centerMode: true,
            slidesToShow: 5,
            slidesToScroll: 1
        });
    };
</script>
</html>