@extends('layouts.home')
@extends('layouts.header')
@section('content')
<div id="content" class="site-content">
    <div class="col-full">
        <div class="row">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="home-v1-slider home-slider">
                        <div class="slider-1" style="background-image: url(https://hoplongtech.com/uploads/slider/schneider-banner-product.jpg);">
                            <!-- @foreach($sliders as $slider)
                            <img src="{{url('uploads/slider')}}/{{$slider->cover_image}}" alt="">
                            @endforeach -->
                        </div>
                    </div>
                    <div class="features-list">
                        <div class="features">
                            <div class="feature">
                                <div class="media">
                                    <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                                    <div class="media-body feature-text">
                                        <h5 class="mt-0">Miễn phí giao hàng</h5>
                                        <span>nội thành</span>
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="media">
                                    <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                                    <div class="media-body feature-text">
                                        <h5 class="mt-0">99% khách hàng</h5>
                                        <span>Hài lòng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="media">
                                    <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                                    <div class="media-body feature-text">
                                        <h5 class="mt-0">365+ ngày</h5>
                                        <span>Bảo hành sản phẩm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="media">
                                    <i class="feature-icon d-flex mr-3 tm tm-safe-payments"></i>
                                    <div class="media-body feature-text">
                                        <h5 class="mt-0">24/7/365</h5>
                                        <span>hỗ trợ kỹ thuật</span>
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="media">
                                    <i class="feature-icon d-flex mr-3 tm tm-best-brands"></i>
                                    <div class="media-body feature-text">
                                        <h5 class="mt-0"> 1.000.000+</h5>
                                        <span>sản phẩm giá tốt</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-deals-carousel-and-products-carousel-tabs row">
                        <section class="column-1 deals-carousel" id="sale-with-timer-carousel">
                            <div class="deals-carousel-inner-block">
                                <header class="section-header">
                                    <h2 class="section-title"><strong>Bán chạy nhất</strong> tháng {{date('m',strtotime($date))}}</h2>
                                    <nav class="custom-slick-nav"></nav>
                                </header>
                                    <div class="sale-products-with-timer-carousel deals-carousel-v1">
                                        <div class="products-carousel">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-1">
                                                    <div class="products" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#sale-with-timer-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}}]}">
                                                        @foreach($promotions as $promotion)
                                                        <div class="sale-product-with-timer product">
                                                            <a class="woocommerce-LoopProduct-link" href="{{route('view',['slug'=>$promotion->slug])}}">
                                                                <div class="sale-product-with-timer-header">
                                                                    <div class="sale-label-outer">
                                                                        <div class="sale-saved-label">
                                                                            <span class="saved-label-amount">
                                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>SALE</span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <img width="224" height="197" alt="" class="wp-post-image" src="{{url('uploads/product')}}/{{$promotion->cover_image}}">
                                                                <h2 class="woocommerce-loop-product__title" style="text-align: center;">{{$promotion->title}}</h2>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <footer class="section-footer">
                                    <nav class="custom-slick-pagination">
                                        <a class="slider-prev left" href="#" data-target="#sale-with-timer-carousel .products">
                                            <i class="tm tm-arrow-left"></i>Back</a>
                                            <a class="slider-next right" href="#" data-target="#sale-with-timer-carousel .products">Next<i class="tm tm-arrow-right"></i>
                                        </a>
                                    </nav>
                                </footer>
                            </div>
                        </section>
                        <section class="column-2 section-products-carousel-tabs tab-carousel-1">
                            <div class="section-products-carousel-tabs-wrap">
                                <header class="section-header">
                                    <ul role="tablist" class="nav justify-content-end">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#tab-sales" data-toggle="tab">Đang khuyến mại</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tab-new" data-toggle="tab">Mới nhất</a>
                                        </li>
                                    </ul>
                                </header>
                                <div class="tab-content">
                                    <div id="tab-sales" class="tab-pane active" role="tabpanel">
                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce">
                                                    <div class="products">
                                                        @foreach($best_seller as $product)
                                                        <div class="product">
                                                            <a href="{{route('view',['slug'=>$product->slug])}}" class="woocommerce-LoopProduct-link">
                                                                <img src="{{url('uploads/product')}}/{{$product->cover_image}}" class="wp-post-image" alt="{{$promotion->cover_image}}" style="height: 170px !important;">
                                                                <h2 class="woocommerce-loop-product__title">{{$product->title}}</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="{{route('view',['slug'=>$product->slug])}}" rel="dofflow">Chi tiết</a>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-new" class="tab-pane" role="tabpanel">
                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce">
                                                    <div class="products">
                                                        @foreach($new_products as $new_product)
                                                        <div class="product">
                                                            <a href="{{route('view',['slug'=>$new_product->slug])}}" class="woocommerce-LoopProduct-link">
                                                                <img src="{{url('uploads/product')}}/{{$new_product->cover_image}}" class="wp-post-image" alt="{{$new_product->cover_image}}" style="height: 170px !important;">
                                                                <h2 class="woocommerce-loop-product__title">{{$new_product->title}}</h2>
                                                            </a>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="fullwidth-notice stretch-full-width">
                        <div class="col-full">
                            <p class="message"><i class="fa fa-info-circle"></i> THÔNG BÁO: Thay đổi bảng giá Hanyoung 2019</p>
                        </div>
                    </div>
                    <section style="background-size: cover; background-position: center center; background-image: url({{url('uploads')}}/banner/back-dien-dan-dung.jpg); height: 853px;" class="section-landscape-full-product-cards-carousel">
                        <div class="col-full">
                            <header class="section-header">
                                <h2 class="section-title"><strong>Thiết bị điện dân dụng</strong></h2>
                            </header>
                            <div class="row">
                                <div class="landscape-full-product-cards-carousel">
                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;rows&quot;:2,&quot;slidesPerRow&quot;:2,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:1,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}}]}">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-2">
                                                <div class="products">
                                                    <div class="landscape-product-card product">
                                                        <div class="media">
                                                            <a class="woocommerce-LoopProduct-link" href="https://hoplongtech.com/product-category/schneider-dan-dung">
                                                                <img class="wp-post-image" src="{{url('uploads')}}/banner/schneider-dan-dung.jpg" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                                <a class="woocommerce-LoopProduct-link " href="https://hoplongtech.com/product-category/schneider-dan-dung">
                                                                    <span class="price"><ins><span class="amount"> Schneider dân dụng</span></ins></span>
                                                                    <h2 class="woocommerce-loop-product__title">Công tắc, ổ cắm, phích cắm, cầu dao bảo vệ,...</h2>
                                                                    <div class="ribbon green-label"><span style="color: #fff;">Giá tốt</span></div>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="https://hoplongtech.com/product-category/schneider-dan-dung">Chi tiết</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="landscape-product-card product">
                                                        <div class="media">
                                                            <a class="woocommerce-LoopProduct-link" href="#">
                                                                <img class="wp-post-image" src="{{url('uploads')}}/banner/ls-dan-dung.jpg" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                                <a class="woocommerce-LoopProduct-link " href="#">
                                                                    <span class="price"><ins><span class="amount"> LS dân dụng</span></ins></span>
                                                                    <h2 class="woocommerce-loop-product__title">Công tắc, ổ cắm, phích cắm, cầu dao bảo vệ, đèn chiếu sáng,...</h2>
                                                                    <div class="ribbon green-label"><span style="color: #fff;">Giá tốt</span></div>
                                                                </a>
                                                                <div class="hover-area"><a class="button add_to_cart_button" href="#">Chi tiết</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="landscape-product-card product">
                                                        <div class="media">
                                                            <a class="woocommerce-LoopProduct-link" href="#">
                                                                <img class="wp-post-image" src="{{url('uploads')}}/banner/panasonics-dan-dung.jpg" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                                <a class="woocommerce-LoopProduct-link " href="#">
                                                                    <span class="price"><ins><span class="amount"> Panasonics Dân dụng</span></ins></span>
                                                                    <h2 class="woocommerce-loop-product__title">Công tắc, ổ cắm, phích cắm, cầu dao bảo vệ,...</h2>
                                                                    <div class="ribbon green-label"><span style="color: #fff;">Giá tốt</span></div>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="#">Chi tiết</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="landscape-product-card product">
                                                        <div class="media">
                                                            <a class="woocommerce-LoopProduct-link" href="#">
                                                                <img class="wp-post-image" src="{{url('uploads')}}/banner/dien-dan-dung.jpg" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                                <a class="woocommerce-LoopProduct-link " href="#">
                                                                    <span class="price"><ins><span class="amount"> Điện dân dụng</span></ins></span>
                                                                    <h2 class="woocommerce-loop-product__title">Công tắc, ổ cắm, phích cắm, cầu dao bảo vệ,...</h2>
                                                                    <div class="ribbon green-label"><span style="color: #fff;">Giá tốt</span></div>
                                                                </a>
                                                                <div class="hover-area"><a class="button add_to_cart_button" href="#">Chi tiết</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section-hot-new-arrivals section-products-carousel-tabs techmarket-tabs">
                        <div class="section-products-carousel-tabs-wrap">
                            <header class="section-header">
                                <h2 class="section-title">Công nghiệp & Sản xuất</h2>
                                <ul role="tablist" class="nav justify-content-end">
                                    <li class="nav-item"><a class="nav-link active" href="#tab-9" data-toggle="tab">Robot công nghiệp</a></li>
                                    <li class="nav-item"><a class="nav-link " href="#tab-10" data-toggle="tab">Tủ điện</a></li>
                                    <li class="nav-item"><a class="nav-link " href="#tab-8" data-toggle="tab">Chế tạo máy</a></li>
                                </ul>
                            </header>
                            <div class="tab-content">
                                <div id="tab-9" class="tab-pane active" role="tabpanel">
                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                        <div class="container-fluid">
                                            <div class="woocommerce">
                                                <div class="products">
                                                    @foreach($cat_copy as $shn)
                                                    @if($shn->sorder==9) 
                                                    <div class="product">
                                                        <a href="{{route('view_category',['slug'=>$shn->slug])}}" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('uploads/category')}}/{{$shn->cover_image}}"  class="wp-post-image" alt="{{$shn->title}}" style="height: 170px !important;">
                                                            <h2 class="woocommerce-loop-product__title">{{$shn->title}}</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$shn->slug])}}" rel="nofollow">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-10" class="tab-pane " role="tabpanel">
                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                        <div class="container-fluid">
                                            <div class="woocommerce">
                                                <div class="products">
                                                    <div class="products">
                                                        @foreach($cat_copy as $shn)
                                                        @if($shn->sorder==10) 
                                                        <div class="product">
                                                            <a href="{{route('view_category',['slug'=>$shn->slug])}}" class="woocommerce-LoopProduct-link">
                                                                <img src="{{url('uploads/category')}}/{{$shn->cover_image}}"  class="wp-post-image" alt="{{$shn->title}}" style="height: 170px !important;">
                                                                <h2 class="woocommerce-loop-product__title">{{$shn->title}}</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$shn->slug])}}" rel="nofollow">Chi tiết</a>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-8" class="tab-pane " role="tabpanel">
                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                        <div class="container-fluid">
                                            <div class="woocommerce">
                                                <div class="products">
                                                    @foreach($cat_copy as $shn)
                                                    @if($shn->sorder==8) 
                                                    <div class="product">
                                                        <a href="{{route('view_category',['slug'=>$shn->slug])}}" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('uploads/category')}}/{{$shn->cover_image}}"  class="wp-post-image" alt="{{$shn->title}}" style="height: 170px !important;">
                                                            <h2 class="woocommerce-loop-product__title">{{$shn->title}}</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$shn->slug])}}" rel="nofollow">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="banners">
                        <div class="row">
                            <div class="banner banner-long text-in-right">
                                <a href="shop.html">
                                    <div style="background-size: cover; background-position: center center; background-image: url( {{url('uploads')}}/banner/Schneider-Banner-2.jpg); height: 259px;" class="banner-bg">
                                    <!-- <div class="caption">
                                    <div class="banner-info">
                                    <h3 class="title">
                                    <strong>Shop now</strong> to find savings on everything you need
                                    <br> for the big game.</h3>
                                    </div>
                                    <span class="banner-action button">Browse</span>
                                    </div> -->
                                    </div>
                                </a>
                            </div>
                            <div class="banner banner-short text-in-left">
                                <a href="shop.html">
                                    <div style="background-size: cover; background-position: center center; background-image: url( {{url('uploads')}}/banner/banner-schneider-2.jpg ); height: 259px;" class="banner-bg">
                                        <div class="caption">
                                            <div class="banner-info">
                                                <h4 class="title" style="color: #30AB40 !important;">Chuyên trang<br><strong>Schneider</br>Electric</strong></h4>
                                            </div>
                                                <span class="banner-action button">Xem ngay</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <section class="stretch-full-width section-products-carousel-with-vertical-tabs">
                        <header class="section-header">
                            <h3 class="section-title"><strong>Nhà phân phối chính thức</strong></h3>
                        </header>
                        <div class="products-carousel-with-vertical-tabs row">
                            <ul role="tablist" class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#top-1" data-toggle="tab">
                                        <span class="category-title"><i class="tm tm-desktop-pc"></i> Schneider</span><i class="tm tm-arrow-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#top-2" data-toggle="tab">
                                        <span class="category-title"><i class="tm tm-laptop"></i> Omron</span><i class="tm tm-arrow-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#top-3" data-toggle="tab">
                                        <span class="category-title"><i class="tm tm-smartphone"></i> Autonics</span><i class="tm tm-arrow-right"></i>
                                </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#top-4" data-toggle="tab">
                                        <span class="category-title"><i class="tm tm-digital-camera"></i> Idec</span><i class="tm tm-arrow-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#top-5" data-toggle="tab">
                                        <span class="category-title"><i class="tm tm-accesories"></i> Mitsubishi</span><i class="tm tm-arrow-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#top-6" data-toggle="tab">
                                        <span class="category-title"><i class="tm tm-accesories"></i> LS</span><i class="tm tm-arrow-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#top-8" data-toggle="tab">
                                        <span class="category-title"><i class="tm tm-accesories"></i> Hanyoung</span><i class="tm tm-arrow-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#top-8" data-toggle="tab">
                                        <span class="category-title"><i class="tm tm-accesories"></i> Delta</span><i class="tm tm-arrow-right"></i>
                                    </a>
                                </li>
                                </ul>
                                <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/vertical-bg.png ); height: 552px;" class="tab-content">
                                    <div id="top-1" class="tab-pane active" role="tabpanel">
                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1600,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-5">
                                                    <div class="products">
                                                        @foreach($cat_copy as $shn)
                                                        @if($shn->sorder==1)
                                                        <div class="product">
                                                            <a href="{{route('view_category',['slug'=>$shn->slug])}}" class="woocommerce-LoopProduct-link">
                                                                <img src="{{url('uploads/category')}}/{{$shn->cover_image}}" style="height: 170px !important;" class="wp-post-image" alt="{{$shn->title}}">
                                                                <h2 class="woocommerce-loop-product__title">{{$shn->title}}</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$shn->slug])}}">Chi tiết</a>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .tab-pane -->
                                    <div id="top-2" class="tab-pane" role="tabpanel">
                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1600,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-5">
                                                    <div class="products">
                                                        @foreach($cat_copy as $om)
                                                        @if($om->sorder==2)
                                                        <div class="product">
                                                            <a href="{{route('view_category',['slug'=>$om->slug])}}" class="woocommerce-LoopProduct-link">
                                                                <img src="{{url('uploads/category')}}/{{$om->cover_image}}" style="height: 170px !important;" class="wp-post-image" alt="{{$om->title}}">
                                                                <h2 class="woocommerce-loop-product__title">{{$om->title}}</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$om->slug])}}">Chi tiết</a>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .tab-pane -->
                                    <div id="top-3" class="tab-pane" role="tabpanel">
                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1600,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-5">
                                                    <div class="products">
                                                        @foreach($cat_copy as $auto)
                                                        @if($auto->sorder==3)
                                                        <div class="product">
                                                            <a href="{{route('view_category',['slug'=>$auto->slug])}}" class="woocommerce-LoopProduct-link">
                                                                <img src="{{url('uploads/category')}}/{{$auto->cover_image}}" style="height: 170px !important;" class="wp-post-image" alt="{{$auto->title}}">
                                                                <h2 class="woocommerce-loop-product__title">{{$auto->title}}</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$auto->slug])}}">Chi tiết</a>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .tab-pane -->
                                    <div id="top-4" class="tab-pane" role="tabpanel">
                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1600,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-5">
                                                    <div class="products">
                                                        @foreach($cat_copy as $id)
                                                        @if($id->sorder==4)
                                                        <div class="product">
                                                            <a href="{{route('view_category',['slug'=>$id->slug])}}" class="woocommerce-LoopProduct-link">
                                                                <img src="{{url('uploads/category')}}/{{$id->cover_image}}" style="height: 170px !important;" class="wp-post-image" alt="{{$id->title}}">
                                                                <h2 class="woocommerce-loop-product__title">{{$id->title}}</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$id->slug])}}">Chi tiết</a>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .tab-pane -->
                                    <div id="top-5" class="tab-pane" role="tabpanel">
                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1600,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-5">
                                                    <div class="products">
                                                        @foreach($cat_copy as $ls)
                                                        @if($ls->sorder==5)
                                                        <div class="product">
                                                            <a href="{{route('view_category',['slug'=>$ls->slug])}}" class="woocommerce-LoopProduct-link">
                                                                <img src="{{url('uploads/category')}}/{{$ls->cover_image}}" style="height: 170px !important;" class="wp-post-image" alt="{{$ls->title}}">
                                                                <h2 class="woocommerce-loop-product__title">{{$ls->title}}</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$ls->slug])}}">Chi tiết</a>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .tab-pane -->
                                    <div id="top-6" class="tab-pane" role="tabpanel">
                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1600,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-5">
                                                    <div class="products">
                                                        @foreach($cat_copy as $mit)
                                                        @if($mit->sorder==6)
                                                        <div class="product">
                                                            <a href="{{route('view_category',['slug'=>$mit->slug])}}" class="woocommerce-LoopProduct-link">
                                                                <img src="{{url('uploads/category')}}/{{$mit->cover_image}}" style="height: 170px !important;" class="wp-post-image" alt="{{$mit->title}}">
                                                                <h2 class="woocommerce-loop-product__title">{{$mit->title}}</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$mit->slug])}}">Chi tiết</a>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .tab-pane -->
                                    <div id="top-7" class="tab-pane" role="tabpanel">
                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1600,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-5">
                                                    <div class="products">
                                                        @foreach($cat_copy as $pa)
                                                        @if($pa->sorder==7)
                                                        <div class="product">
                                                            <a href="{{route('view_category',['slug'=>$pa->slug])}}" class="woocommerce-LoopProduct-link">
                                                                <img src="{{url('uploads/category')}}/{{$pa->cover_image}}" style="height: 170px !important;" class="wp-post-image" alt="{{$ls->title}}">
                                                                <h2 class="woocommerce-loop-product__title">{{$pa->title}}</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$pa->slug])}}">Chi tiết</a>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="brands-carousel">
                            <h2 class="sr-only">Brands Carousel</h2>
                            <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                <div class="brands">
                                    @foreach($partners as $partner)
                                    <div class="item">
                                        <a href="{{$partner->slug}}">
                                            <figure>
                                                <figcaption class="text-overlay"><div class="info"><h4>{{$partner->title}}</h4></div></figcaption>
                                                <a href="{{route('view_category',['slug'=>$partner->slug])}}"> <img width="145" height="50" class="img-responsive desaturate" alt="{{$partner->title}}" src="{{url('uploads/partner')}}/{{$partner->cover_image}}"></a>
                                            </figure>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </main>
                </div>
            </div>
        </div>
                </div></div>
                @stop()
