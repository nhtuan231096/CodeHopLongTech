@extends('layouts.home')
@section('content')
<div id="content" class="site-content">
    <div class="col-full">
        <div class="row">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="home-v1-slider home-slider">
                        <div class="slider-1" style="background-image: url(assets/images/slider/home-v1-background.jpg);">                            
                            @foreach($sliders as $slider)
                            <img src="{{url('uploads/slider')}}/{{$slider->cover_image}}" alt="Home banner">
                            @endforeach
                        </div>
                    </div>
                    <div class="features-list">
                        <div class="features">
                            <div class="feature">
                                <div class="media">
                                    <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                                    <div class="media-body feature-text">
                                        <h5 class="mt-0">Free Delivery</h5>
                                        <span>from $50</span>
                                    </div>
                                </div>
                            </div>
                            <!-- .feature -->
                            <div class="feature">
                                <div class="media">
                                    <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                                    <div class="media-body feature-text">
                                        <h5 class="mt-0">99% Customer</h5>
                                        <span>Feedbacks</span>
                                    </div>
                                </div>
                                <!-- .media -->
                            </div>
                            <!-- .feature -->
                            <div class="feature">
                                <div class="media">
                                    <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                                    <div class="media-body feature-text">
                                        <h5 class="mt-0">365 Days</h5>
                                        <span>for free return</span>
                                    </div>
                                </div>
                                <!-- .media -->
                            </div>
                            <!-- .feature -->
                            <div class="feature">
                                <div class="media">
                                    <i class="feature-icon d-flex mr-3 tm tm-safe-payments"></i>
                                    <div class="media-body feature-text">
                                        <h5 class="mt-0">Payment</h5>
                                        <span>Secure System</span>
                                    </div>
                                </div>
                                <!-- .media -->
                            </div>
                            <!-- .feature -->
                            <div class="feature">
                                <div class="media">
                                    <i class="feature-icon d-flex mr-3 tm tm-best-brands"></i>
                                    <div class="media-body feature-text">
                                        <h5 class="mt-0">Only Best</h5>
                                        <span>Brands</span>
                                    </div>
                                </div>
                                <!-- .media -->
                            </div>
                            <!-- .feature -->
                        </div>
                        <!-- .features -->
                    </div>
                    <section class="section-top-categories section-categories-carousel" id="categories-carousel-1">
                        <header class="section-header">
                            <h4 class="pre-title">Featured</h4>
                            <h2 class="section-title">Top bán chạy
                                <br>nhất tháng {{date('m',strtotime($date))}}</h2>
                                <nav class="custom-slick-nav"></nav>
                            </header>

                            <div class="product-categories-1 product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#categories-carousel-1 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                <div class="woocommerce columns-5">
                                    <div class="products">
                                        @foreach($best_seller as $product)
                                        <div class="product-category product first">
                                            <a href="{{route('view',['slug'=>$product->slug])}}">
                                                <img width="224" height="197" alt="" src="{{url('uploads/product')}}/{{$product->cover_image}}">
                                                <h2 class="woocommerce-loop-category__title">{{$product->title}}</h2>
                                            </a>
                                        </div>
                                        <!-- .product-category -->
                                        <!-- .product-category -->
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .product-categories -->
                        </section>
                        <section class="section-single-carousel-with-tab-product type-2">
                            <div class="row">
                                <section class="column-3 section-products-carousel-tabs">
                                    <div class="section-products-carousel-tabs-wrap">
                                        <header class="section-header">
                                            <ul role="tablist" class="nav justify-content-end">
                                                <li class="nav-item"><a class="nav-link " href="#tab-sales" data-toggle="tab">Đang khuyến mại</a></li>
                                                <li class="nav-item"><a class="nav-link  active" href="#tab-new" data-toggle="tab">Mới nhất</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#tab-feature" data-toggle="tab">Nổi bật</a></li>
                                            </ul>
                                        </header>
                                        <div class="tab-content">
                                            <div id="tab-new" class="tab-pane active" role="tabpanel">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce columns-4">
                                                            <div class="products">
                                                                @foreach($new_products as $new_product)
                                                                <div class="product">
                                                                    <a href="{{route('view',['slug'=>$new_product->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                                                        <img src="{{url('uploads/product')}}/{{$new_product->cover_image}}"  style="height: 170px !important;" class="wp-post-image" alt="{{$new_product->cover_image}}">
                                                                        <span class="price">
                                                                        </span>
                                                                        <div class="">
                                                                            <h2 class="woocommerce-loop-product__title">{{$new_product->title}}</h2>
                                                                        </div>
                                                                    </a> 
            <!-- <div class="hover-area">
                <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="dofollow">Xem chi tiết</a>
            </div> -->
        </div>
        @endforeach
    </div>
</div>
</div>
</div>
</div>
<div id="tab-sales" class="tab-pane " role="tabpanel">
    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
        <div class="container-fluid">
            <div class="woocommerce columns-4">
                <div class="products">
                    @foreach($promotions as $promotion)
                    <div class="product">
                        <a href="{{route('view',['slug'=>$promotion->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                            <img src="{{url('uploads/product')}}/{{$promotion->cover_image}}"  style="height: 170px !important;" class="wp-post-image" alt="{{$promotion->cover_image}}">
                            <h2 class="woocommerce-loop-product__title">{{$promotion->title}}</h2>
                        </a>
         <!--    <div class="hover-area">
                <a class="button add_to_cart_button" href="{{route('view',['slug'=>$promotion->slug])}}" rel="dofollow">Chi tiết</a>
            </div> -->
        </div>
        @endforeach
    </div>
</div>
</div>
</div>
</div>
<div id="tab-feature" class="tab-pane " role="tabpanel">
    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
        <div class="container-fluid">
            <div class="woocommerce columns-4">
                <div class="products">
                    @foreach($special_products as $special_product)
                    <div class="product">
           <!--  <div class="yith-wcwl-add-to-wishlist">
                <a href="{{route('view',['slug'=>$special_product->slug])}}" rel="dofollow" class="add_to_wishlist"> Add to Wishlist</a>
            </div> -->
            <a href="{{route('view',['slug'=>$special_product->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                <img src="{{url('uploads/product')}}/{{$special_product->cover_image}}"  style="height: 170px !important;" class="wp-post-image" alt="{{$special_product->cover_image}}">
                <span class="price">
                    <!-- <ins>
                        <span class="amount"> </span>
                    </ins>
                    <span class="amount"> 456.00</span> -->
                </span>
                <!-- /.price -->
                <h2 class="woocommerce-loop-product__title">{{$special_product->title}}</h2>
            </a>
       <!--      <div class="hover-area">
                <a class="button add_to_cart_button" href="{{route('view',['slug'=>$special_product->slug])}}" rel="dofollow">Chi tiết</a>
            </div> -->
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
</section>
<section class="section-products-carousel-with-bg 6-column-carousel-bg">
    <div class="col-full">
        <div class="row">
            <header class="section-header">
                <h2 class="section-title">Kết thúc

                </h2>
                <div class="deal-countdown-timer">
                    <span class="deal-time-diff" style="display:none;">28800</span>
                    <div class="deal-countdown countdown"></div>
                </div>
                <img alt="" src="">
            </header>
            <div class="products-carousel-with-bg">
                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                    <div class="container-fluid">
                        <div class="woocommerce columns-6">
                            <div class="products">
                                @foreach($promotions as $sale)
                                <div class="product">
                                    <a href="{{route('view',['slug'=>$sale->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                        <img src="{{url('uploads/product')}}/{{$sale->cover_image}}"  style="height: 170px !important;" class="wp-post-image" alt="">
                                        <h2 class="woocommerce-loop-product__title">{{$sale->title}}</h2>
                                    </a>
  <!--   <div class="hover-area">
        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$sale->slug])}}" rel="dofollow">Xem chi tiết</a>
    </div> -->
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

<div class="banner full-width-banner">
    <a href="#">
        <div style="background-size: cover; background-position: center center; background-image: url( {{url('uploads/about')}}/banner-mid.jpg ); width:100%; height: 300px;" class="banner-bg">
            <div class="caption">
                <div class="banner-info">
                    <h3 class="title">
                    </div>
                </div>
            </div>
        </a>
    </div>
    <section class="section-products-carousel-tabs techmarket-tabs">
        <div class="section-products-carousel-tabs-wrap">
            <header class="section-header">
                <h2 class="section-title">Ứng dụng công nghiệp 4.0</h2>
                <ul role="tablist" class="nav justify-content-end">
                    <li class="nav-item"><a class="nav-link active" href="#top-8" data-toggle="tab">Tự động hóa</a></li>
                    <li class="nav-item"><a class="nav-link " href="#top-9" data-toggle="tab">Robot công nghiệp</a></li>
                    <li class="nav-item"><a class="nav-link " href="#top-10" data-toggle="tab">Chế tạo tủ điện</a></li>
                    <li class="nav-item"><a class="nav-link " href="#top-11" data-toggle="tab"></a></li>
                </ul>
            </header>
            <div class="tab-content">
                <div id="top-8" class="tab-pane active" role="tabpanel">
                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                        <div class="container-fluid">
                            <div class="woocommerce"></div>
                            <div class="products">
                                @foreach($cat_copy as $shn)
                                @if($shn->sorder==8)                   
                                <div class="product">
                                    <a href="{{route('view_category',['slug'=>$shn->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                        <img src="{{url('uploads/category')}}/{{$shn->cover_image}}" class="wp-post-image" alt=""  style="height: 170px !important;" >
                                        <h2 class="woocommerce-loop-product__title">{{$shn->title}}</h2>
                                    </a>
       <!--  <div class="hover-area">
            <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$shn->slug])}}" rel="dofollow">Xem chi tiết</a>
        </div> -->
    </div>
    @endif
    @endforeach  
</div>
</div>
</div>
</div>
<div id="top-9" class="tab-pane " role="tabpanel">
    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
        <div class="container-fluid">
            <div class="woocommerce">
                <div class="products">
                    @foreach($cat_copy as $shn)
                    @if($shn->sorder==9)                   
                    <div class="product">
                        <a href="{{route('view_category',['slug'=>$shn->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                            <img src="{{url('uploads/category')}}/{{$shn->cover_image}}" class="wp-post-image" alt=""  style="height: 170px !important;" >
                            <h2 class="woocommerce-loop-product__title">{{$shn->title}}</h2>
                        </a>
       <!--  <div class="hover-area">
            <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$shn->slug])}}" rel="dofollow">Xem chi tiết</a>
        </div> -->
    </div>
    @endif
    @endforeach  
</div>
</div>
</div>
</div>
</div>
<div id="top-10" class="tab-pane " role="tabpanel">
    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
        <div class="container-fluid">
            <div class="woocommerce">
                <div class="products">
                    @foreach($cat_copy as $shn)
                    @if($shn->sorder==10)                   
                    <div class="product">
                        <a href="{{route('view_category',['slug'=>$shn->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                            <img src="{{url('uploads/category')}}/{{$shn->cover_image}}" class="wp-post-image" alt=""  style="height: 170px !important;" >
                            <h2 class="woocommerce-loop-product__title">{{$shn->title}}</h2>
                        </a>
       <!--  <div class="hover-area">
            <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$shn->slug])}}" rel="dofollow">Xem chi tiết</a>
        </div> -->
    </div>
    @endif
    @endforeach  
</div>
</div>
</div>
</div>
</div>
<div id="top-11" class="tab-pane " role="tabpanel">
    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
        <div class="container-fluid">
            <div class="woocommerce">
                <div class="products">
<!--  @foreach($new_products as $new_product)
<div class="product">
    <a href="{{route('view',['slug'=>$new_product->slug])}}" class="woocommerce-LoopProduct-link">
        <img src="{{url('uploads/product')}}/admin_6ed1052-1md08-0ba0.jpg" class="wp-post-image" alt="">
        <h2 class="woocommerce-loop-product__title">{{$new_product->title}}</h2>
    </a>
    <div class="hover-area">
        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="dofollow">Xem chi tiết</a>
    </div>
</div>
@endforeach    -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>                                
<section class="type-2 section-products-carousel-tabs section-product-carousel-with-featured-product carousel-with-featured-3">
    <header class="section-header">
        <h2 class="section-title">Hãng phân phối chính thức</h2>
        <ul role="tablist" class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link active" href="#top-1" data-toggle="tab">Schneider</a></li>
            <li class="nav-item"><a class="nav-link" href="#top-2" data-toggle="tab">Omron</a></li>
            <li class="nav-item"><a class="nav-link" href="#top-3" data-toggle="tab">Autonics</a></li>
            <li class="nav-item"><a class="nav-link" href="#top-4" data-toggle="tab">Idec</a></li>
            <li class="nav-item"><a class="nav-link" href="#top-6" data-toggle="tab">Mitsubishi</a></li>
            <li class="nav-item"><a class="nav-link" href="#top-5" data-toggle="tab">LS</a></li>
            <li class="nav-item"><a class="nav-link" href="#top-7" data-toggle="tab">Patlite</a></li>
        </ul>
    </header>
    <div class="tab-content">
        <div role="tabpanel" id="top-1" class="tab-pane active">
            <div class="tab-product-carousel-with-featured-product">
                <div class="tab-carousel-products" style="max-width: 100%;">
                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                        <div class="container-fluid">
                            <div class="woocommerce columns-5">
                                <div class="products">
                                    @foreach($cat_copy as $shn)
                                    @if($shn->sorder==1)                   
                                    <div class="product">
                                        <a href="{{route('view_category',['slug'=>$shn->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                            <img src="{{url('uploads/category')}}/{{$shn->cover_image}}" class="wp-post-image" alt=""  style="height: 170px !important;" >
                                            <h2 class="woocommerce-loop-product__title">{{$shn->title}}</h2>
                                        </a>
       <!--  <div class="hover-area">
            <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$shn->slug])}}" rel="dofollow">Xem chi tiết</a>
        </div> -->
    </div>
    @endif
    @endforeach  
</div>
</div>
</div>
</div>
</div>
<!--  <div class="tab-featured-product">
<div class="woocommerce columns-1">
<div class="products">
<div class="tab-product-featured product">
<a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
    <img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="">
    <h2 class="woocommerce-loop-product__title"></h2>
</a>
<a class="button add_to_cart_button" href="">Xem chi tiết</a>
</div>
</div>
</div> 
</div> -->
</div>
</div>
<div role="tabpanel" id="top-2" class="tab-pane">
    <div class="tab-product-carousel-with-featured-product">
        <div class="tab-carousel-products" style="max-width: 100%;">
            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                <div class="container-fluid">
                    <div class="woocommerce columns-5">
                        <div class="products">
                         @foreach($cat_copy as $om) 
                         @if($om->sorder==2)         
                         <div class="product">
                            <a href="{{route('view_category',['slug'=>$om->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                <img src="{{url('uploads/category')}}/{{$om->cover_image}}" class="wp-post-image" alt=""  style="height: 170px !important;" >
                                <h2 class="woocommerce-loop-product__title">{{$om->title}}</h2>
                            </a>
         <!--    <div class="hover-area">
                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$om->slug])}}" rel="dofollow">Xem chi tiết</a>
            </div> -->
        </div>
        @endif 
        @endforeach  
    </div>
</div>
</div>
</div>
</div>
<div class="tab-featured-product">
<!--  <div class="woocommerce columns-1">
<div class="products">
<div class="tab-product-featured product">
<a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
    <img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="{{url('uploads/product')}}/admin_abb-psr105-600-700.jpg">
    <h2 class="woocommerce-loop-product__title">abcxyz</h2>
</a>
<a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}">Xem chi tiết</a>
</div>
</div>
</div> -->
</div>
</div>
</div>
<div role="tabpanel" id="top-3" class="tab-pane">
    <div class="tab-product-carousel-with-featured-product">
        <div class="tab-carousel-products" style="max-width: 100%;">
            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                <div class="container-fluid">
                    <div class="woocommerce columns-5">
                        <div class="products">
                         @foreach($cat_copy as $auto) 
                         @if($auto->sorder==3)         
                         <div class="product">
                            <a href="{{route('view_category',['slug'=>$auto->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                <img src="{{url('uploads/category')}}/{{$auto->cover_image}}" class="wp-post-image" alt=""  style="height: 170px !important;">
                                <h2 class="woocommerce-loop-product__title">{{$auto->title}}</h2>
                            </a>
          <!--   <div class="hover-area">
                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$auto->slug])}}" rel="dofollow">Xem chi tiết</a>
            </div> -->
        </div>
        @endif 
        @endforeach  
    </div>
</div>
</div>
</div>
</div>
<!--      <div class="tab-featured-product">
<div class="woocommerce columns-1">
<div class="products">
<div class="tab-product-featured product">
<a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
    <img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="{{url('uploads/product')}}/admin_abb-psr105-600-700.jpg">
    <h2 class="woocommerce-loop-product__title">abcxyz</h2>
</a>
<a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}">Xem chi tiết</a>
</div>
</div>
</div>
</div> -->
</div>
</div>
<div role="tabpanel" id="top-4" class="tab-pane">
    <div class="tab-product-carousel-with-featured-product">
        <div class="tab-carousel-products" style="max-width: 100%;">
            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                <div class="container-fluid">
                    <div class="woocommerce columns-5">
                        <div class="products">
                         @foreach($cat_copy as $id) 
                         @if($id->sorder==4)         
                         <div class="product">
                            <a href="{{route('view_category',['slug'=>$id->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                <img src="{{url('uploads/category')}}/{{$id->cover_image}}" class="wp-post-image" alt=""  style="height: 170px !important;">
                                <h2 class="woocommerce-loop-product__title">{{$id->title}}</h2>
                            </a>
          <!--   <div class="hover-area">
                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$id->slug])}}" rel="dofollow">Xem chi tiết</a>
            </div> -->
        </div>
        @endif 
        @endforeach  
    </div>
</div>
</div>
</div>
</div>
<!--     <div class="tab-featured-product">
<div class="woocommerce columns-1">
<div class="products">
<div class="tab-product-featured product">
<a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
    <img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="{{url('uploads/product')}}/admin_abb-psr105-600-700.jpg">
    <h2 class="woocommerce-loop-product__title">abcxyz</h2>
</a>
<a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}">Xem chi tiết</a>
</div>
</div>
</div>
</div> -->
</div>
</div>
<div role="tabpanel" id="top-5" class="tab-pane">
    <div class="tab-product-carousel-with-featured-product">
        <div class="tab-carousel-products" style="max-width: 100%;">
            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                <div class="container-fluid">
                    <div class="woocommerce columns-5">
                        <div class="products">
                         @foreach($cat_copy as $ls) 
                         @if($ls->sorder==6)         
                         <div class="product">
                            <a href="{{route('view_category',['slug'=>$ls->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                <img src="{{url('uploads/category')}}/{{$ls->cover_image}}" class="wp-post-image" alt=""  style="height: 170px !important;">
                                <h2 class="woocommerce-loop-product__title">{{$ls->title}}</h2>
                            </a>
          <!--   <div class="hover-area">
                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$ls->slug])}}" rel="dofollow">Xem chi tiết</a>
            </div> -->
        </div>
        @endif 
        @endforeach  
    </div>
</div>
</div>
</div>
</div>
<!--     <div class="tab-featured-product">
<div class="woocommerce columns-1">
<div class="products">
<div class="tab-product-featured product">
<a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
    <img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="{{url('uploads/product')}}/admin_abb-psr105-600-700.jpg">
    <h2 class="woocommerce-loop-product__title">abcxyz</h2>
</a>
<a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}">Xem chi tiết</a>
</div>
</div>
</div>
</div> -->
</div>
</div> 
<div role="tabpanel" id="top-6" class="tab-pane">
    <div class="tab-product-carousel-with-featured-product">
        <div class="tab-carousel-products" style="max-width: 100%;">
            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                <div class="container-fluid">
                    <div class="woocommerce columns-5">
                        <div class="products">
                         @foreach($cat_copy as $mit) 
                         @if($mit->sorder==5)         
                         <div class="product">
                            <a href="{{route('view_category',['slug'=>$mit->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                <img src="{{url('uploads/category')}}/{{$mit->cover_image}}" class="wp-post-image" alt=""  style="height: 170px !important;">
                                <h2 class="woocommerce-loop-product__title">{{$mit->title}}</h2>
                            </a>
           <!--  <div class="hover-area">
                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$mit->slug])}}" rel="dofollow">Xem chi tiết</a>
            </div> -->
        </div>
        @endif 
        @endforeach  
    </div>
</div>
</div>
</div>
</div>
<!--     <div class="tab-featured-product">
<div class="woocommerce columns-1">
<div class="products">
<div class="tab-product-featured product">
<a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
    <img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="{{url('uploads/product')}}/admin_abb-psr105-600-700.jpg">
    <h2 class="woocommerce-loop-product__title">abcxyz</h2>
</a>
<a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}">Xem chi tiết</a>
</div>
</div>
</div>
</div> -->
</div>
</div> 
<div role="tabpanel" id="top-7" class="tab-pane">
    <div class="tab-product-carousel-with-featured-product">
        <div class="tab-carousel-products">
            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                <div class="container-fluid">
                    <div class="woocommerce columns-5">
                        <div class="products">
                         @foreach($cat_copy as $pa) 
                         @if($pa->sorder==7)         
                         <div class="product">
                            <a href="{{route('view_category',['slug'=>$pa->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                <img src="{{url('uploads/category')}}/{{$pa->cover_image}}" class="wp-post-image" alt=""  style="height: 170px !important;">
                                <h2 class="woocommerce-loop-product__title">{{$pa->title}}</h2>
                            </a>
            <!-- <div class="hover-area">
                <a class="button add_to_cart_button" href="{{route('view_category',['slug'=>$pa->slug])}}" rel="dofollow">Xem chi tiết</a>
            </div> -->
        </div>
        @endif 
        @endforeach  
    </div>
</div>
</div>
</div>
</div>
<!--     <div class="tab-featured-product">
<div class="woocommerce columns-1">
<div class="products">
<div class="tab-product-featured product">
<a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
    <img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="{{url('uploads/product')}}/admin_abb-psr105-600-700.jpg">
    <h2 class="woocommerce-loop-product__title">abcxyz</h2>
</a>
<a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}">Xem chi tiết</a>
</div>
</div>
</div>
</div> -->
</div>
</div>
</div>
</section>
<!-- .section-landscape-products-carousel-tab -->
</main>
<!-- #main -->
</div>
<!-- #primary -->
<div id="secondary" class="widget-area" role="complementary">
    @foreach($banners as $banner)
    <div class="widget widget_techmarket_banner_widget">
        <div class="banner">
            <a href="{{$banner->links}}">
                <div>
                    <img alt="" style="background-size: cover; background-position: center center;" src="{{url('uploads/banner')}}/{{$banner->cover_image}}" width="100%">
                </div>
            </a>
            <div class="n-banner"><a class="text-center" href="{{$banner->links}}">{{$banner->name}}</a></div>
        </div>
        <!-- .banner -->
    </div>
    @endforeach
    <!-- .widget_techmarket_banner_widget -->
    <div class="widget widget_techmarket_features_widget">
        <div class="features-list">
            <div class="features">
                <div class="feature">
                    <div class="media">
                        <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                        <div class="media-body feature-text">
                            <strong>Chính sách vận chuyển</strong></div>
                        </div>
                        <!-- .media -->
                    </div>
                    <!-- .feature -->
                    <div class="feature">
                        <div class="media">
                            <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                            <div class="media-body feature-text">
                                <strong>99% Phản hồi từ khách hàng </strong></div>
                            </div>
                            <!-- .media -->
                        </div>
                        <!-- .feature -->
                        <div class="feature">
                            <div class="media">
                                <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                                <div class="media-body feature-text">
                                    <strong>Bảo hành 365 ngày</strong></div>
                                </div>
                                <!-- .media -->
                            </div>
                            <!-- .feature -->
                            <div class="feature">
                                <div class="media">
                                    <i class="feature-icon d-flex mr-3 tm tm-safe-payments"></i>
                                    <div class="media-body feature-text">
                                        <strong>Hệ thống thanh toán an toàn</strong></div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-best-brands"></i>
                                        <div class="media-body feature-text">
                                            <strong>Đứng đầu về chất lượng</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="brands-carousel">
                        <h2 class="sr-only">Brands Carousel</h2>
                        <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                            <div class="brands">
                                @foreach($partners as $partner)
                                <div class="item">
                                    <a href="#">
                                        <figure>
                                            <figcaption class="text-overlay">
                                                <div class="info">
                                                    <h4>{{$partner->title}}</h4>
                                                </div>
                                            </figcaption>
                                            <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="{{url('uploads/partner')}}/{{$partner->cover_image}}">
                                        </figure>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        @stop()