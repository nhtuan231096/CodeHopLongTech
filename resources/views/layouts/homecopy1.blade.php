<!DOCTYPE html>
<html lang="en-US" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="
       @if(isset($category))
            {{$category->meta_description}}
        @elseif(isset($download))
            {{$download->content}}
        @else
         Công ty cổ phẩn công nghệ hợp long 
        @endif">
    <title>
        @if(isset($category))
            {{$category->meta_title}}
        @elseif(isset($download))
            {{$download->title}}
        @elseif(isset($news_project))
            {{$news_project->title}}
        @elseif(isset($img_company))
            {{$img_company->title}}
        @else
         Công ty cổ phẩn công nghệ hợp long
        @endif
    </title>
    
    <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery.min.js"></script>
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
     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-43044974-10"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-43044974-10');
    </script>
    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="{{url('public/home')}}/assets/css/config.css">
        <link rel="stylesheet" href="{{url('public/css')}}/mystyle.css">
        <!-- Demo Purpose Only. Should be removed in production : END -->
        <link rel='dns-prefetch' href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
        <link rel="shortcut icon" href="{{url('uploads/logo/Logo-hl.png')}}">
    </head>
    <body class="woocommerce-active page-template-template-homepage-v1 can-uppercase" ng-controller="checkboxCtrl">
        <div id="page" class="hfeed site">
            <div class="top-bar top-bar-v1">
                <div class="col-full">
                    <ul id="menu-top-bar-left" class="nav justify-content-center">
                        <li class="menu-item animate-dropdown">
                            <a title="" href="{{route('home')}}">Công ty cổ phần công nghệ Hợp Long</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="" href="#">Trang Thương Mại Điện Tử</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="" href="#">Các chính sách</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-487 animate-dropdown dropdown">
                            <a title="Dollar (US)" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">
                                <i class="fa fa-language"></i>Tiếng Việt (US)
                                <span class="caret"></span>
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
                    </ul>
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
                                          <!-- <span class="caret"></span> -->
                                        </a>
                                        <!-- <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item animate-dropdown">
                                                <a title="Wishlist" href="wishlist.html">Wishlist</a>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                      <a title="Tuyển dụng" href="{{route('tuyen-dung')}}">Tuyển dụng</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="Download catalog" href="{{route('downloads')}}">DOWNLOAD</a>
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
                      </div>
                      <div class="row align-items-center">
                          <div id="departments-menu" class="dropdown departments-menu">
                            <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="tm tm-departments-thin"></i>
                                <span>Tất cả danh mục</span>
                            </button>
                            <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
                                <li class="highlight menu-item animate-dropdown">
                                    <a title="Top 100 Offers" href="#">Top 100 Offers</a>
                                </li>
                                    @foreach($categorys as $category)
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                        <a title="{{$category->title}}" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="{{route('view_category',['slug=>$categorys->slug'])}}">{{$category->title}}<span class="caret"></span></a>
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
                            <form class="navbar-search" method="get" action="{{route('search_product')}}">
                              <label class="sr-only screen-reader-text" for="search">Search for:</label>
                              <div class="input-group">
                                <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="title" placeholder="Tìm theo tên sản phẩm" />
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
                            </form>
                            <ul class="header-compare nav navbar-nav">
                              <li class="nav-item">
                                  <a href="compare.html" class="nav-link">
                                      <i class="tm tm-compare"></i>
                                      <span id="top-cart-compare-count" class="value">3</span>
                                  </a>
                              </li>
                            </ul>
                            <ul class="header-wishlist nav navbar-nav">
                                <li class="nav-item">
                                    <a href="wishlist.html" class="nav-link">
                                        <i class="tm tm-favorites"></i>
                                        <span id="top-cart-wishlist-count" class="value">3</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- .header-wishlist -->
                            <ul id="site-header-cart" class="site-header-cart menu">
                                <li class="animate-dropdown dropdown ">
                                    <a class="cart-contents" href="#" data-toggle="dropdown" title="">
                                        <i class="tm tm-shopping-bag"></i>
                                        <span class="count">0</span>
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
                                <div class="handheld-header-links">
                                    <ul class="columns-3">
                                        <li class="my-account">
                                            <a href="#" class="has-icon">
                                                <i class="tm tm-login-register"></i>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="#" class="has-icon">
                                                <i class="tm tm-favorites"></i>
                                                <span class="count"></span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#" class="has-icon">
                                                <i class="tm tm-compare"></i>
                                                <span class="count"></span>
                                            </a>
                                        </li>
                                    </ul>
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
                                          <li class="highlight menu-item animate-dropdown">
                                              <a title="Top 100 sản phẩm bán chạy" href="#">Top 100 sản phẩm bán chạy</a>
                                          </li>
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
                                <!-- .header-v1 -->
                                @yield('content')
                                <!-- #content -->
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
                                                <h5 class="newsletter-title">Sign up to Newsletter</h5>
                                                <span class="newsletter-marketing-text">...and receive
                                                    <strong>$20 coupon for first shopping</strong>
                                                </span>
                                            </div>
                                            <!-- .newsletter-header -->
                                            <div class="newsletter-body">
                                                <form class="newsletter-form">
                                                    <input type="text" placeholder="Enter your email address">
                                                    <button class="button" type="button">Sign up</button>
                                                </form>
                                            </div>
                                            <!-- .newsletter body -->
                                        </div>
                                        <!-- .clearfix -->
                                    </div>
                                    <!-- .media-body -->
                                </div>
                                <!-- .media -->
                            </div>
                            <!-- .footer-newsletter -->
                            <div class="footer-social-icons">
                                <ul class="social-icons nav">
                                    <li class="nav-item">
                                        <a class="sm-icon-label-link nav-link" href="#">
                                            <i class="fa fa-facebook"></i> Facebook</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="sm-icon-label-link nav-link" href="#">
                                            <i class="fa fa-twitter"></i> Twitter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="sm-icon-label-link nav-link" href="#">
                                            <i class="fa fa-google-plus"></i> Google+</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="sm-icon-label-link nav-link" href="#">
                                            <i class="fa fa-vimeo-square"></i> Vimeo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="sm-icon-label-link nav-link" href="#">
                                            <i class="fa fa-rss"></i> RSS</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- .footer-social-icons -->
                        </div>
                        <!-- .col-full -->
                    </div>
                    <!-- .before-footer-wrap -->
                    <div class="footer-widgets-block">
                        <div class="row">
                            <div class="footer-contact">
                                <div class="footer-logo">
                                    <a href="home-v1.html" class="custom-logo-link" rel="home">
                                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 28">
                                            <defs>
                                                <style>
                                                    .cls-1,
                                                    .cls-2 {
                                                        fill: #333e48;
                                                    }
                                                    
                                                    .cls-1 {
                                                        fill-rule: evenodd;
                                                    }
                                                    
                                                    .cls-3 {
                                                        fill: #3265b0;
                                                    }
                                                </style>
                                            </defs>
                                            <polygon class="cls-1" points="171.63 0.91 171.63 11 170.63 11 170.63 0.91 170.63 0.84 170.63 0.06 176 0.06 176 0.91 171.63 0.91" />
                                            <rect class="cls-2" x="166.19" y="0.06" width="3.47" height="0.84" />
                                            <rect class="cls-2" x="159.65" y="4.81" width="3.51" height="0.84" />
                                            <polygon class="cls-1" points="158.29 11 157.4 11 157.4 0.06 158.26 0.06 158.36 0.06 164.89 0.06 164.89 0.87 158.36 0.87 158.36 10.19 164.99 10.19 164.99 11 158.36 11 158.29 11" />
                                            <polygon class="cls-1" points="149.54 6.61 150.25 5.95 155.72 10.98 154.34 10.98 149.54 6.61" />
                                            <polygon class="cls-1" points="147.62 10.98 146.65 10.98 146.65 0.05 147.62 0.05 147.62 5.77 153.6 0.33 154.91 0.33 147.62 7.05 147.62 10.98" />
                                            <path class="cls-1" d="M156.39,24h-1.25s-0.49-.39-0.71-0.59l-1.35-1.25c-0.25-.23-0.68-0.66-0.68-0.66s0-.46,0-0.72a3.56,3.56,0,0,0,3.54-2.87,3.36,3.36,0,0,0-3.22-4H148.8V24h-1V13.06h5c2.34,0.28,4,1.72,4.12,4a4.26,4.26,0,0,1-3.38,4.34C154.48,22.24,156.39,24,156.39,24Z" transform="translate(-12 -13)" />
                                            <polygon class="cls-1" points="132.04 2.09 127.09 7.88 130.78 7.88 130.78 8.69 126.4 8.69 124.42 11 123.29 11 132.65 0 133.04 0 133.04 11 132.04 11 132.04 2.09" />
                                            <polygon class="cls-1" points="120.97 2.04 116.98 6.15 116.98 6.19 116.97 6.17 116.95 6.19 116.95 6.15 112.97 2.04 112.97 11 112 11 112 0 112.32 0 116.97 4.8 121.62 0 121.94 0 121.94 11 120.97 11 120.97 2.04" />
                                            <ellipse class="cls-3" cx="116.3" cy="22.81" rx="5.15" ry="5.18" />
                                            <rect class="cls-2" x="99.13" y="0.44" width="5.87" height="27.12" />
                                            <polygon class="cls-1" points="85.94 27.56 79.92 27.56 79.92 0.44 85.94 0.44 85.94 16.86 96.35 16.86 96.35 21.84 85.94 21.84 85.94 27.56" />
                                            <path class="cls-1" d="M77.74,36.07a9,9,0,0,0,6.41-2.68L88,37c-2.6,2.74-6.71,4-10.89,4A13.94,13.94,0,0,1,62.89,27.15,14.19,14.19,0,0,1,77.11,13c4.38,0,8.28,1.17,10.89,4,0,0-3.89,3.82-3.91,3.8A9,9,0,1,0,77.74,36.07Z" transform="translate(-12 -13)" />
                                            <rect class="cls-2" x="37.4" y="11.14" width="7.63" height="4.98" />
                                            <polygon class="cls-1" points="32.85 27.56 28.6 27.56 28.6 5.42 28.6 3.96 28.6 0.44 47.95 0.44 47.95 5.42 34.46 5.42 34.46 22.72 48.25 22.72 48.25 27.56 34.46 27.56 32.85 27.56" />
                                            <polygon class="cls-1" points="15.4 27.56 9.53 27.56 9.53 5.57 9.53 0.59 9.53 0.44 24.93 0.44 24.93 5.57 15.4 5.57 15.4 27.56" />
                                            <rect class="cls-2" y="0.44" width="7.19" height="5.13" />
                                        </svg>
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
                                                <span class="call-us-title">Got Questions ? Call us 24/7!</span>
                                                <span class="call-us-text">(800) 8001-8588, (0600) 874 548</span>
                                                <address class="footer-contact-address">17 Princess Road, London, Greater London NW1 8JR, UK</address>
                                                <a href="#" class="footer-address-map-link">
                                                    <i class="tm tm-map-marker"></i>Find us on map</a>
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
                                                <h5 class="footer-payment-info-title">We are using safe payments</h5>
                                                <div class="footer-payment-icons">
                                                    <ul class="list-payment-icons nav">
                                                        <li class="nav-item">
                                                            <img class="payment-icon-image" src="assets/images/credit-cards/mastercard.svg" alt="mastercard" />
                                                        </li>
                                                        <li class="nav-item">
                                                            <img class="payment-icon-image" src="assets/images/credit-cards/visa.svg" alt="visa" />
                                                        </li>
                                                        <li class="nav-item">
                                                            <img class="payment-icon-image" src="assets/images/credit-cards/paypal.svg" alt="paypal" />
                                                        </li>
                                                        <li class="nav-item">
                                                            <img class="payment-icon-image" src="assets/images/credit-cards/maestro.svg" alt="maestro" />
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .footer-payment-icons -->
                                                <div class="footer-secure-by-info">
                                                    <h6 class="footer-secured-by-title">Secured by:</h6>
                                                    <ul class="footer-secured-by-icons">
                                                        <li class="nav-item">
                                                            <img class="secure-icons-image" src="assets/images/secured-by/norton.svg" alt="norton" />
                                                        </li>
                                                        <li class="nav-item">
                                                            <img class="secure-icons-image" src="assets/images/secured-by/mcafee.svg" alt="mcafee" />
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
                                            <h4 class="widget-title">Find it Fast</h4>
                                            <div class="menu-footer-menu-1-container">
                                                <ul id="menu-footer-menu-1" class="menu">
                                                    <li class="menu-item">
                                                        <a href="shop.html">Computers &#038; Laptops</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Cameras &#038; Photography</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Smart Phones &#038; Tablets</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Video Games &#038; Consoles</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">TV</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Car Electronic &#038; GPS</a>
                                                    </li>
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
                                                    <li class="menu-item">
                                                        <a href="shop.html">Printers &#038; Ink</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Audio &amp; Music</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Home Theaters</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">PC Components</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Ultrabooks</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Smartwatches</a>
                                                    </li>
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
                                            <h4 class="widget-title">Customer Care</h4>
                                            <div class="menu-footer-menu-3-container">
                                                <ul id="menu-footer-menu-3" class="menu">
                                                    <li class="menu-item">
                                                        <a href="login-and-register.html">My Account</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="track-your-order.html">Track Order</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Shop</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="about.html">About Us</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="terms-and-conditions.html">Returns/Exchange</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="faq.html">FAQs</a>
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
                            <div class="copyright">Copyright &copy; 2017 <a href="home-v1.html">Techmarket</a> Theme. All rights reserved.</div>
                            <div class="credit">Made with
                                <i class="fa fa-heart"></i> by bcube.</div>
                        </div>
                    </div>
                </div>
            </footer>
        <!-- .site-footer -->
    </div>
    <!-- For demo purposes – can be removed on production -->
    <!-- For demo purposes – can be removed on production : End -->
    
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
    <script src="{{url('public/js')}}/angular.min.js"></script>
    <script src="{{url('public/js')}}/app-angular.js"></script>
    <script src="{{url('public/js')}}/dirPagination.js"></script>

    <!-- For demo purposes – can be removed on production -->
    <script src="{{url('public/home')}}/switchstylesheet/switchstylesheet.js"></script>
    <!-- For demo purposes – can be removed on production : End -->
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