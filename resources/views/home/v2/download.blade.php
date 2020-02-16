@extends('layouts.v2.index')
@section('mainContainer')
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/tether.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/bootstrap.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery-migrate.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery-ui.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/hidemaxlistitem.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery.easing.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/scrollup.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery.waypoints.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/waypoints-sticky.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/pace.min.js"></script> -->
<script type="text/javascript" src="{{url('public/home')}}/assets/js/slick.min.js"></script>
<script type="text/javascript" src="{{url('public/home')}}/assets/js/scripts.js"></script>
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/switchstylesheet.js"></script> -->
<!-- <script src="{{url('public/js')}}/angular.min.js"></script> -->
<!-- <script src="{{url('public/js')}}/app-angular.js"></script> -->
<!-- <script src="{{url('public/js')}}/dirPagination.js"></script> -->
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
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/slick.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/slick-style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/animate.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/css')}}/style.css" media="all" />
  <link rel="stylesheet" href="{{url('public/home')}}/assets/css/config.css">
  <link rel="stylesheet" href="{{url('public/css')}}/mystyle.css">
  <link rel="stylesheet" href="{{url('public/css')}}/newstyle.css">
<style type="text/css">
	.section-products-carousel-tabs .nav-link.active::after{
		border-color:#fff;
	}
	.vertical-wrapper{
		display: none;
	}
</style>


<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{route('home')}}">Trang chủ</a>
                        <span class="delimiter">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        Download
                    </nav>
                    <div class="homev6-slider-with-banners row">
                        <div class="slider-block column-1">
                            <h3 style="color: red; padding: 10px;">DOWNLOAD CATALOG</h3>
                            <form action="" method="GET" class="form-inline" role="form" style="padding-left: 15px;">
                                <div class="form-group">
                                    <input type="search" class="form-control" name="search" id="" placeholder="Nhập tên tài liệu tìm kiếm">
                                </div>
                                    @csrf
                                <button type="submit" class="btn btn-info">Search</button>
                            </form> 
                        </div>
                    </div>
                </main>
                <section class="section-products-carousel" id="homev6-carousel-3">
                    <header class="section-header" style="position: unset;margin-top:0px;"> 
                        <h2 class="section-title">Tài liệu</h2>
                        <nav class="custom-slick-nav"></nav>
                    </header>
                    <section class="section-products-carousel-tabs techmarket-tabs">
                        <div class="section-products-carousel-tabs-wrap">
                            <div class="tab-content">
                                <div id="tab-cats" class="tab-pane active" role="tabpanel">
                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                        <div class="container-fluid">
                                            <div class="woocommerce">
                                                <div class="products">
                                                    @foreach($cats as $cat)
                                                    <div class="product"> 
                                                        <a href="{{route('view_doc',[
                                                        'slug'=>$cat->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                                            @if($cat->cover_image=='') 
                                                            <img src="{{url('uploads/download')}}/not-image-2.jpg" class="wp-post-image img-responsive " alt=""> 
                                                            @else
                                                            <div>
                                                               <img src="{{url('uploads/download/file_service/large')}}/{{$cat->cover_image}}" style="height: 113px !important;" class="wp-post-image img-responsive " alt="">
                                                            </div>
                                                            @endif
                                                       <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount">{{$cat->title}}</span>
                                                        </span>
                                                        <h2 class="woocommerce-loop-product__title"> </h2>
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
                </section>
                <section class="section-products-carousel-tabs techmarket-tabs">
                    <div class="section-products-carousel-tabs-wrap" role="tabpanel">
                        <header class="section-header" style="position: unset;margin-top: 50px">     
                            <ul role="tablist" class="nav nav-tabs justify-content-end">
                                <li role="presentation" class="active nav-item"><a style="padding: 5px 20px;" class="nav-link active" role="tab" href="#tab-catalog" data-toggle="tab">Catalog</a></li>
                                <li role="presentation" class="nav-item"><a style="padding: 5px 20px;" class="nav-link " role="tab" href="#tab-pricelist" data-toggle="tab">Price list</a></li>
                                <li role="presentation" class="nav-item"><a style="padding: 5px 20px;" class="nav-link " role="tab" href="#tab-manuals" data-toggle="tab">Manuals</a></li>
                                <li role="presentation" class="nav-item"><a style="padding: 5px 20px;" class="nav-link " role="tab" href="#tab-software" data-toggle="tab">Software</a></li>
                            </ul>
                        </header>
                        <div class="tab-content">
                            <div id="tab-catalog" class="tab-pane active" role="tabpanel">
                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                    <div class="container-fluid">
                                        <div class="woocommerce">
                                            <div class="products">
                                                @foreach($catalog as $cata)
                                                <div class="product" > 
                                                    <a href="{{route('view_doc',[
                                                    'slug'=>$cata->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                                        @if($cata->cover_image=='') 
                                                        <img src="{{url('uploads/download')}}/not-image-2.jpg" class="wp-post-image img-responsive " alt="" style="height: 113px !important;"> 
                                                        @else
                                                        <img src="{{url('uploads/download/file_service/large')}}/{{$cata->cover_image}}" class="wp-post-image img-responsive " alt="" style="height: 113px !important;">
                                                        @endif
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount">{{$cata->title}}</span>
                                                        </span>
                                                        <h2 class="woocommerce-loop-product__title"></h2>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-pricelist" class="tab-pane " role="tabpanel">
                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                    <div class="container-fluid">
                                        <div class="woocommerce">
                                            <div class="products">     
                                                @foreach($pricelist as $price)                                                 
                                                <div class="product"> 
                                                    <a href="{{route('view_doc',['slug'=>$price->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                                        @if($price->cover_image=='')   
                                                        <img src="{{url('uploads/download')}}/not-image-2.jpg" class="wp-post-image img-responsive " alt="" style="height: 113px !important;">
                                                        @else
                                                        <img src="{{url('uploads/download/file_service/large')}}/{{$price->cover_image}}" class="wp-post-image img-responsive " alt="" style="height: 113px !important;">
                                                        @endif     
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount">{{$price->title}}</span>
                                                        </span>
                                                        <h2 class="woocommerce-loop-product__title"> @if(isset($price->category->title)){{$price->category->title}}@endif</h2>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-manuals" class="tab-pane " role="tabpanel">
                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                    <div class="container-fluid">
                                        <div class="woocommerce">
                                            <div class="products">
                                                @foreach($manuals as $manua)                                       
                                                <div class="product"> 
                                                    <a href="{{route('view_doc',[
                                                    'slug'=>$manua->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                                    @if($manua->cover_image=='')    
                                                    <img src="{{url('uploads/download')}}/not-image-2.jpg" class="wp-post-image img-responsive " alt="" style="height: 113px !important;">
                                                    @else

                                                    <img src="{{url('uploads/download/file_service/large')}}/{{$manua->cover_image}}" class="wp-post-image img-responsive " alt="" style="height: 113px !important;">

                                                    @endif
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> </span>
                                                        </ins>
                                                        <span class="amount">{{$manua->title}}</span>
                                                    </span>
                                                    <h2 class="woocommerce-loop-product__title"> {{$manua->category->title}}</h2>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div id="tab-software" class="tab-pane " role="tabpanel">
                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                    <div class="container-fluid">
                                        <div class="woocommerce">
                                            <div class="products">
                                                @foreach($software as $soft)                                                                                                
                                                <div class="product"> 
                                                    <a href="{{route('view_doc',[
                                                    'slug'=>$soft->slug])}}" class="woocommerce-LoopProduct-link" rel="dofollow">
                                                    @if($soft->cover_image=='')   
                                                    <img src="{{url('uploads/download')}}/not-image-2.jpg" class="wp-post-image img-responsive " alt="" style="height: 113px !important;"> 
                                                    @else

                                                    <img src="{{url('uploads/download/file_service/large')}}/{{$soft->cover_image}}" class="wp-post-image img-responsive " alt="" style="height: 113px !important;">

                                                    @endif
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> </span>
                                                        </ins>
                                                        <span class="amount">{{$soft->title}}</span>
                                                    </span>
                                                    <h2 class="woocommerce-loop-product__title"> {{$soft->category->title}}</h2>
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
    </div>
</div>
@stop()


