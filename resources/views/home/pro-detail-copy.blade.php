<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage" ng-app="app" ng-controller="BaoGiaCtrl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="{{$product->meta_description}}">
<title>{{$product->meta_title}}</title>
<link rel="shortcut icon" href="{{url('uploads/logo')}}/favicon.png">
<link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/font-awesome.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/techmarket-font-awesome.css" media="all" />
<link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap-grid.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap-reboot.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/font-techmarket.css" media="all" />
<!-- <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/slick.css" media="all" /> -->
<link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/slick-style.css" media="all" />
<link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/animate.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/style.css" media="all" />
<link rel="stylesheet" href="{{url('public/home')}}/assets/css/config.css">
<link rel="stylesheet" href="{{url('public')}}/css/mystyle.css">
<link rel="stylesheet" type="text/css" href="{{url('public/css')}}/style.css" media="all" />
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" /> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-43044974-10"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-43044974-10');
</script>
<style>
table {
width: 100% !important;
height: 100% !important;
}
a, h2, h3{
font-weight: bold;
color: #0000FF;
}
</style>
</head>
<body class="woocommerce-active single-product full-width normal" ng-controller="BaoGiaCtrl">
<div id="page" class="hfeed site">
<div class="top-bar top-bar-v4">
<div class="col-full">
<ul id="menu-top-bar-left" class="nav justify-content-center">
<li class="menu-item animate-dropdown text-left"> <a title="Công ty cổ phần công nghệ Hợp long" href="#">Công ty cổ phẩn công nghệ Hợp Long</a> </li>
<li class="menu-item animate-dropdown"> <a title="Ưu đãi dành cho đối tác" href="#">Ưu đãi dành cho đối tác</a> </li>
<li class="menu-item animate-dropdown"> <a title="Khuyến mại hot" href="#">Khuyến mại hot</a> </li>
</ul>
</div>
</div>
<header id="masthead" class="site-header header-v1" style="background-image: none; ">
<div class="col-full desktop-only">
<div class="sticky-wrapper">
<div class="techmarket-sticky-wrap">
<div class="row">
    <div class="site-branding">
        <a href="{{route('home')}}" class="custom-logo-link" rel="home">
            <div class="logo"> <img src="{{url('uploads/logo/Logo-hl-3.png')}}" alt=""> </div>
        </a>
    </div>
    <nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation" data-nav="flex-menu">
        <ul id="menu-primary-menu" class="nav yamm">
            <li class="sale-clr yamm-fw menu-item animate-dropdown"> <a title="hop-long-tech" href="{{route('home')}}">Trang chủ</a> </li>
            <li class="menu-item animate-dropdown"> <a title="San-pham" href="{{route('home_product')}}">Sản phẩm</a> </li>
            <li class="menu-item animate-dropdown"> <a title="Tuyen-dung" href="{{route('tuyen-dung')}}">Tuyển dụng</a> </li>
            <li class="menu-item animate-dropdown"> <a title="Download" href="{{route('downloads')}}">Download</a> </li>
            <li class="menu-item animate-dropdown"> <a title="Du-an-hop-long-tech" href="{{route('projects')}}">Dự án</a> </li>
            <li class="menu-item animate-dropdown"> <a title="Lien-he" href="{{route('contact')}}">Liên hệ</a> </li>
        </ul>
    </nav>
    <nav id="secondary-navigation" class="secondary-navigation" aria-label="Secondary Navigation" data-nav="flex-menu">
        <ul id="menu-secondary-menu" class="nav">
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2802 animate-dropdown">
                <a title="Chính sách vận chuyển"> <i class="tm tm-order-tracking"></i>Chính sách vận chuyển</a>
            </li>
            <li class="menu-item">
                <a title="Phone" href="#"> <i class="fa fa-phone"></i>Hotline: 1900 6536</a>
            </li>
        </ul>
    </nav>
</div>
</div>
</div>
<div class="row align-items-center">
<div id="departments-menu" class="dropdown departments-menu">
<button class="btn btn-block" type="" data-toggle="" aria-haspopup="true" aria-expanded="false"> <i class="tm tm-departments-thin"></i> <a style="color: #fff" href="{{route('categorys')}}">Hãng sản phẩm </a> </button>
</div>
<form class="navbar-search " method="get" action="{{route('search_product')}}">
<label class="sr-only screen-reader-text" for="search">Search for:</label>
<div class="input-group">
    <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="title" placeholder="Tìm theo tên sản phẩm...">
    <div class="input-group-addon search-categories">
        <select name="product_cat" id="product_cat" class="postform resizeselect" style="width: 157.453px;">
            <option value="0" selected="selected">All Categories</option>
        </select>
    </div>
    <div class="input-group-btn">
        <input type="hidden" id="search-param" name="post_type" value="product">
        <button type="submit" class="btn btn-primary"> <span class="search-btn" style="color: #fff">Search</span> </button>
    </div>
</div>
</form>
</div>
</div>
<div class="col-full handheld-only">
<div class="handheld-header">
<div class="row">
<div class="site-branding">
    <a href="{{route('home')}}" class="custom-logo-link" rel="home">
        <div class="logo"> <img src="{{url('uploads/logo/Logo-hl-3.png')}}" alt=""> </div>
    </a>
</div>
<div class="handheld-header-links">
    <ul class="columns-3">
    </ul>
</div>
</div>
<div class="sticky-wrapper" style="height: 0px;">
<div class="techmarket-sticky-wrap">
    <div class="row">
        <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
            <button class="btn navbar-toggler" type="button"> <i class="tm tm-departments-thin"></i> <span>Menu</span> </button>
            <div class="handheld-navigation-menu"> <span class="tmhm-close">Close</span>
                <ul id="menu-departments-menu-1" class="nav">
                    <li class="highlight menu-item animate-dropdown"> <a title="Hang san pham" href="{{route('categorys')}}">Hãng sản phẩm</a> </li>
                </ul>
            </div>
        </nav>
        <div class="site-search">
            <div class="widget woocommerce widget_product_search">
                <form  action="{{route('search_product')}}" role="search" method="get" class="woocommerce-product-search">
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
</div>
</header>
</div>
<div id="content" class="site-content" tabindex="-1">
<div class="col-full">
<div class="row">
<nav class="woocommerce-breadcrumb"> <a href="{{route('home')}}">Home</a> <span class="delimiter"> <i class="tm tm-breadcrumbs-arrow-right"></i> </span><a href="{{route('view_category',['slug'=>$product->category->slug])}}">{{$product->category->title}}</a> <span class="delimiter"> <i class="tm tm-breadcrumbs-arrow-right"></i> </span>{{$product->title}}</nav>
<div id="primary" class="content-area">
<main id="main" class="site-main">
<div class="product product-type-simple">
    <div class="single-product-wrapper">
        <div class="product-images-wrapper thumb-count-4"> <span class="onsale"> <span class="woocommerce-Price-amount amount"> <span class="woocommerce-Price-currencySymbol"></span>{{$product->promotion}}</span>
        </span>
        <div id="techmarket-single-product-gallery" class="" data-columns="4">
            <div class="techmarket-single-product-gallery-images">
                <div class="" data-columns="4">
                    <figure>
                        <div> <a href="{{url('uploads/product')}}/{{$product->cover_image}}" tabindex="0"> <img src="{{url('uploads/product')}}/{{$product->cover_image}}" alt="{{$product->title}}"> </a> </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="summary entry-summary">
        <div class="single-product-header">
            <h1 class="product_title entry-title"><b>{{$product->title}}</b></h1>
            <div class="rating-and-sharing-wrapper">
                <div class="woocommerce-product-rating">
                    <div class="star-rating"> <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div><a rel="dofollow" class="woocommerce-review-link" href="#reviews">(<span class="count">5</span> nhận xét)</a> 
                </div>
            </div>
            <div> 
                <span> 
                    <a href="{{$product->category->slug}}">
                        <span>Danh mục: <span style="color: #3498db;">{{$product->category->title}}</span> </span>
                    </a>
                </span> | 
                <span>Mã hàng: <span style="color: #3498db;">{{$product->title}}</span> </span>
            </div>
            <div>
                @if($product->download_id=='') 
                <span>Tài liệu đang được cập nhật!<span> 
                    @else 
                    <b>Download tài liệu kỹ thuật </b>
                        <a href="{{route('document',['slug'=>$product->slug])}}"><img src="{{url('uploads/download')}}/icon-download-9.png"  title="{{$product->taiLieu->title}}" style="display: inline"> 
                    </a> 
                    @endif
                </div>
            </div>
            <div class="product-actions-wrapper">
                <div class="product-actions">
                    <p class="price">
                        <ins> 
                            <span class="woocommerce-Price-amount amount">Giá: @if($product->price=='') 
                                <span class="woocommerce-Price-currencySymbol">Liên hệ 1900.6536</span> @else 
                                <span class="woocommerce-Price-currencySymbol"></span>{{$product->price}}
                            </span> 
                            @endif 
                        </ins> 
                    </p>
                    <div class="modal fade" id="modal-id">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">
                                        <span ng-show="language" style="color: red">Yêu cầu nhanh qua hotline: 1900.6536</span>
                                        <span ng-hide="language" style="color: red">Quick Support: 1900.6536</span>
                                    </h4> 
                                    <a style="float: right;" href="" class="btn btn-md btn-primary">
                                        <span ng-click="language=false" ng-show="language">English</span>
                                        <span ng-click="language=true" ng-hide="language">Vietnamese</span>
                                    </a>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('send_mail')}}" method="POST" role="form">
                                        <legend>
                                            <span ng-show="language">Bạn đang yêu cầu báo giá sản phẩm {{$product->title}} </br>
                                            Nhập đầy đủ thông tin dưới đây để chúng tôi hỗ trợ bạn.</span> 
                                            <span ng-hide="language">Enter information to receive a quote</span> 
                                        </legend>
                                        <div class="form-group">
                                            <label class="control-label" for="">
                                                <span ng-show="language">Họ tên:*</span>
                                                <span ng-hide="language">Full name:*</span>
                                            </label>
                                            <input ng-show="language" ng-model="KHACH_HANG" type="text" name="name" class="form-control" id="" required placeholder="Nhập họ tên">
                                            <input ng-hide="language" ng-model="KHACH_HANG" type="text" name="name" class="form-control" id="" required placeholder="Enter your name">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="">Email:</label>
                                            <input ng-show="language" ng-model="EMAIL" type="email" name="email" class="form-control" id="" required placeholder="Nhập email">
                                            <input ng-hide="language" ng-model="EMAIL" type="email" name="email" class="form-control" id="" required placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="product_id" class="form-control" id="" value="{{$product->id}}"> 
                                        </div>
                                        <div class="form-group">
                                            <input ng-model="SAN_PHAM" type="hidden" name="product" class="form-control" id="SAN_PHAM" value="{{$product->title}}">
                                        </div>
                                        <input ng-model="MA_SAN_PHAM" type="hidden" name="code_product" class="form-control" id="MA_SAN_PHAM" value="{{$product->slug}}"> 
                                        <div class="form-group">
                                            <label class="control-label" for="">
                                                <span ng-show="language">Số điện thoại:*</span>
                                                <span ng-hide="language">Phone number:*</span>
                                            </label>    
                                            <input ng-show="language" ng-model="SO_DIEN_THOAI" type="number" name="phone" class="form-control" id="" required placeholder="Nhập số điện thoại">
                                            <input ng-hide="language" ng-model="SO_DIEN_THOAI" type="number" name="phone" class="form-control" id="" required placeholder="Enter your phone number">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="">
                                                <span ng-show="language">Địa chỉ báo giá:*</span>
                                                <span ng-hide="language">Address quote:*</span>
                                            </label>
                                            <select ng-model="DIA_CHI" ng-show="language" id="DIA_CHI" name="diaChi" id="input" class="form-control" required="required">
                                                <option value="#">
                                                    <span>Chọn địa chỉ báo giá</span>
                                                </option>
                                                <option value="HOPLONG">
                                                    <span>Hà Nội</span>
                                                </option>
                                                <option value="TAHP">
                                                    <span>Hải Phòng</span>
                                                </option>
                                                <option value="TADN">
                                                    <span>Đà Nẵng</span>
                                                </option>     
                                                <option value="CANTHO">
                                                    <span>Cần Thơ</span>
                                                </option>     
                                                <option value="TAHCM">
                                                    <span>Thành Phố HCM</span>
                                                </option>        
                                            </select>
                                            <select ng-model="DIA_CHI" ng-hide="language" name="diaChi" id="input" class="form-control" required="required">
                                                <option value=""><span>Choose a quote address</span></option>
                                                <option value="HOPLONG"><span>Ha Noi</span></option>
                                                <option value="TAHP"><span>Hai Phong</span></option>
                                                <option value="TADN"><span>Da Nang</span></option>
                                                <option value="CANTHO"><span>Can Tho</span></option>
                                                <option value="TAHCM"><span>Ho Chi Minh City</span></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="">
                                                <span ng-show="language">Nội dung:</span>
                                                <span ng-hide="language">Content:</span>
                                            </label>
                                            <textarea ng-show="language" ng-model="NOI_DUNG" name="content" rows=8 placeholder="Nội dung.."></textarea>
                                            <textarea ng-hide="language" ng-model="NOI_DUNG" name="content" rows=8 placeholder="Enter content.."></textarea>
                                        </div>@csrf
                                        <div class="form-group text-right">
                                            <button ng-click="abc()" type="submit" class="btn btn-primary">
                                                <span ng-show="language">Gửi</span>
                                                <span ng-hide="language">Send</span>
                                            </button>
                                            <button ng-show="language" type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
                                            <button ng-hide="language" type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer"> </div>
                        </div>
                    </div>
                    <div>
                        <form enctype="multipart/form-data" method="post" class="cart"> 
                            <button class="btn btn-danger fa fa-money" data-toggle="modal" href='#modal-id' style="font-weight: bold; padding: 18px 20px; font-size: 18px; width: 100%"> Yêu cầu báo giá</button>
                        </form>
                        <button class="btn btn-primary fa fa-phone" style="font-weight: bold; padding: 18px 20px; font-size: 18px; width: 100%"> Hotline: 1900.6536</button>
                    </div>
                </div></br>
                <div class="fb-like" data-href="https://hoplongtech.com/products/{{$product->slug}}" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true">
                </div>
            </div>
        </div>
    </div>
    <div class="woocommerce-tabs wc-tabs-wrapper"> 
        <ul role="tablist" class="nav tabs wc-tabs">
            <li class="nav-item specification_tab"> 
                <a class="nav-link active" data-toggle="tab" role="tab" aria-controls="tab-specification" href="#tab-specification">Thông số kỹ thuật</a> 
            </li>
            <li class="nav-item accessories_tab"> 
                <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-accessories" href="#tab-accessories">Ảnh thực tế</a> </li>
                <li class="nav-item specification_tab">
                    <a class="nav-link " data-toggle="tab" role="tab" aria-controls="tab-specifications" href="#tab-specifications">Mô tả</a>
                </li>
                <li class="nav-item specification_tab">
                    <a class="nav-link " data-toggle="tab" role="tab" aria-controls="tab-feature" href="#tab-feature">Đặc tính</a>
                </li> 
                <li class="nav-item specification_tab">
                    <a class="nav-link " data-toggle="tab" role="tab" aria-controls="tab-dimension" href="#tab-dimension">Kích thước</a>
                </li>
            </ul> 
            <div class="tab-content"> 
                <div class="tab-pane" id="tab-accessories" role="tabpanel"> 
                    <div class="accessories"> 
                        <div class="accessories-wrapper"> 
                            <div class="accessories-product columns-5"> 
                                <div class="products"> 
                                    <div class="product"> 
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href=""> 
                                            <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/product')}}/{{$product->cover_image}}"> 
                                            <span class="price"> 
                                                <del> 
                                                    <span class="woocommerce-Price-amount amount"> 
                                                    </del> 
                                                    <ins> 
                                                        <span class="woocommerce-Price-amount amount"> 
                                                        </ins> 
                                                    </span> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" id="tab-specification" role="tabpanel">
                            <div class="container">
                                <div class="row">
                                   <div style="overflow-x:auto; width: 100%">
                                    {!!$product->content!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="tab-feature" role="tabpanel">
                        <p><center>Đang được cập nhật!</center></p>
                    </div>
                    <div class="tab-pane " id="tab-specifications" role="tabpanel">
                        <p><center>Đang được cập nhật!</center></p>
                    </div>
                    <div class="tab-pane " id="tab-dimension" role="tabpanel">  
                        <p><center>Đang được cập nhật!</center></p>
                    </div>
                </div>
                <br>
                <div class="woocommerce-tabs wc-tabs-wrapper">
                    <ul role="tablist" class="nav tabs wc-tabs">
                        <a href="{{route('view_category',['slug'=>$product->categorys->slug])}}" style="padding:10px; color: #3498db; font-size: 18px; text-transform: none;  font-family: "Times New Roman, Times, serif;"> Series: <b style="text-decoration: underline;">{{$product->categorys->title}}</b></a>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-landscape-products-carousel recently-viewed" id="recently-viewed">
            <div class="tm-related-products-carousel section-products-carousel" id="tm-related-products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#tm-related-products-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                <section class="related">
                    <header class="section-header">
                        <h3 class="section-title">Sản phẩm cùng loại</h3>
                        <nav class="custom-slick-nav"></nav>
                    </header>
                    <div class="products">
                        @foreach($sames as $other)
                        <div class="product">
                            <a href="{{route('view',['slug'=>$other->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                <img src="{{url('uploads/product')}}/{{$other->cover_image}}" width="224" height="197" class="wp-post-image" alt="" rel="dofollow">
                                <span class="woocommerce-loop-product__title">{{$other->title}}</span>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </section>
        <section class="brands-carousel"> 
            <span class="sr-only">Brands Carousel</span>
            <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                <div class="brands"> @foreach($partners as $partner)
                    <div class="item">
                        <a href="">
                            <figure>
                                <figcaption class="text-overlay">
                                    <div class="info"> <span>{{$partner->title}}</span> </div>
                                </figcaption> <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="{{url('uploads/partner')}}/{{$partner->cover_image}}"> 
                            </figure>
                        </a>
                    </div>@endforeach 
                </div>
            </div>
        </section>
    </div>
</main>
</div>
</div>
</div>
</div>
<footer class="page-footer font-small blue-grey lighten-5" style="background-color: #eceff1">
<div style="background-color: #3498db;">
<div class="footer-header col-full">
<div class="row py-4 d-flex align-items-center">
<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
    <div class="media">
        <i class="footer-newsletter-icon tm tm-newsletter"></i>
        <div class="media-body">
            <div class="clearfix">
                <div class="newsletter-header"></div>
                <div class="newsletter-body">
                    <form class="newsletter-form">
                        <input type="text" placeholder="Nhập email để nhận khuyến mại..">
                        <button type="submit" class="btn btn-info" type="button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-7 text-center text-md-right">
    <div class="footer-social-icons">
        <ul class="social-icons nav">
            <li class="nav-item">
                <a class="sm-icon-label-link nav-link" href="#" rel="nofollow">
                    <i class="fa fa-facebook"></i> Facebook</a>
            </li>
            <li class="nav-item">
                <a class="sm-icon-label-link nav-link" href="#" rel="nofollow">
                    <i class="fa fa-twitter"></i> Twitter</a>
            </li>
            <li class="nav-item">
                <a class="sm-icon-label-link nav-link" href="#" rel="nofollow">
                    <i class="fa fa-google-plus"></i> Google+</a>
            </li>
        </ul>
    </div>
</div>
</div>
</div>
</div>
<div class="footer-body col-full text-center text-md-left mt-5">
<div class="row mt-3 dark-grey-text">
<div class="col-md-3 col-lg-4 col-xl-3 mb-4 col-footer">
<h6 class="text-uppercase font-weight-bold">Hợp Long</h6>
<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
<p>HOPLONGTECH tự hào là nhà cung cấp thiết bị, giải pháp và dịch vụ kỹ thuật cho khách hàng trong và ngoài nước với các ngành sản xuất công nghiệp, môi trường, năng lượng, là một Công ty phân phối thiết bị tự động hóa hàng đầu Việt Nam.</p>
</div>
<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 col-sp col-footer">
<h6 class="text-uppercase font-weight-bold">Sản Phẩm</h6>
<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
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
</div>
<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 col-footer">
<h6 class="text-uppercase font-weight-bold">Dịch vụ</h6>
<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
<p><a class="dark-grey-text" href="#">Chính sách bảo hành</a></p>
<p><a class="dark-grey-text" href="#">Bảo hành sản phẩm</a></p>
</div>
<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 col-lh">
<h6 class="text-uppercase font-weight-bold">Liên hệ</h6>
<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
<p><i class="fa fa-home" style="font-size: 23px;padding-right: 10px;"></i> 87 Lĩnh Nam, Mai Động, Hoàng Mai, Hà Nội</p>
<p><i class="fa fa-envelope" style="font-size: 23px;padding-right: 10px;"></i></i> info@hoplongtech.com.vn</p>
<p><i class="fa fa-phone" style="font-size: 23px;padding-right: 10px;"></i> 19006536</p>
</div>
</div>
</div>
<div class="footer-copyright text-center text-black-50 py-3" style="background-color:  rgba(0,0,0,.2);"> Copyright &copy;  
<a class="dark-grey-text" href="https://hoplongtech.com/"> Hoplongtech 2018</a>.  All rights reserved.
</div>
</footer>
<script src="{{url('public/home')}}/assets/js/jquery.min.js"></script>
<script src="{{url('public/home')}}/js/alljs.js"></script>
<script src="{{url('public/home')}}/assets/js/bootstrap.min.js"></script>
<script src="{{url('public/home')}}/assets/js/jquery-migrate.min.js"></script>
<script src="{{url('public/home')}}/assets/js/slick.min.js"></script>
<script src="{{url('public/home')}}/assets/js/scripts.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-43044974-2"></script>
<script src="{{url('public')}}/js/angular.min.js"></script>
<script src="{{url('public')}}/js/BaoGiaCtrl.js?time=@DateTime.Now"></script>
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
<div class="fb-customerchat" page_id="525393284632285" ref=""></div>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s);
js.id = id;
js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2';
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>