@extends('layouts.search')
@section('content')
</br>
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <nav class="woocommerce-breadcrumb">
            <a href="{{route('home')}}">Home</a>
            <span class="delimiter">
                <i class="tm tm-breadcrumbs-arrow-right"></i>
                <a href="" style="padding: 10px">Tìm kiếm</a>
        </nav>
        <div class="row">

            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    
                    <!-- .shop-archive-header -->
                    <div class="shop-control-bar">
                        @if(request()->is('/'))
                        <ul role="tablist" class="shop-view-switcher nav nav-tabs">
                            <li class="nav-item">
                                <a href="#grid-extended" title="Grid Extended View" data-toggle="tab" class="nav-link active">
                                    <i class="tm tm-grid"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#list-view-large" title="List View Large" data-toggle="tab" class="nav-link ">
                                    <i class="tm tm-listing-large"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#list-view" title="List View" data-toggle="tab" class="nav-link ">
                                    <i class="tm tm-listing"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#list-view-small" title="List View Small" data-toggle="tab" class="nav-link ">
                                    <i class="tm tm-listing-small"></i>
                                </a>
                            </li>
                        </ul>
                        @endif
                    </div>
                    <!-- .shop-control-bar -->
                    <div class="tab-content">
                        @if(count($product)>0)
                        <h3>Kết quả tìm kiếm cho từ khóa</h3>
                        <div id="grid-extended" class="tab-pane active" role="tabpanel">
                            <div class="woocommerce columns-5">
                                <div class="products">
                                    @foreach($product as $pro)
                                    <div class="product first">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <a href="" rel="dofollow" class="add_to_wishlist"></a>
                                        </div>
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route('view',['slug'=>$pro->slug])}}" rel="dofollow">
                                            <img alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image"  src="{{url('uploads/product')}}/{{$pro->cover_image}}">
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount"></span>
                                                <span class="woocommerce-loop-product__title">{{$pro->title}}</span>
                                            </span>
                                        </a>
                                        <div class="techmarket-product-rating">
                                            <div title="" class="star-rating">
                                                <span style="width:100%">
                                                    <strong class="rating">5.00</strong> out of 5</span>
                                            </div>
                                            <span class="review-count">(1)</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div> 
                                {{$product->appends(request()->only('title','created_by','category_id','status'))->links()}}
                                <!-- .products -->
                            </div>
                                <!-- .woocommerce -->
                        </div>
                        @endif
                    </div>
                </main>
            <!-- #main -->
            
            
            <!-- #primary -->
            </br>
            @if(count($product)>0)
            <div id="secondary" class="widget-area shop-sidebar" role="complementary">
                <div id="techmarket_product_categories_widget-2" class="widget woocommerce widget_product_categories techmarket_widget_product_categories">
                    <ul class="product-categories category-single">
                        <li class="product_cat">
                            <ul class="show-all-cat">
                                <li class="product_cat">
                                    <span class="">{{$pro->category->title}}</span>
                                    <ul>
                                        @foreach($product as $pro)
                                        <li class="cat-item">
                                            <a href="{{route('view',['slug'=>$pro->slug])}}">
                                                <span class="no-child"></span>{{$pro->title}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                            </ul>
                        </li>
                    </ul>
                </div>
                
            </div>
            @endif
        </div>
    </div>
    @if(count($product)==0)
    <style type="text/css">.shop-control-bar{border-bottom: none!important}#primary{height: 0px}</style>
            <div class="jumbotron text-center">
                <div class="container">
                    <h1></h1>
                    <p style="font-size: 23px">Không tìm tháy sản phẩm phù hợp với từ khóa, quay lại <a style="font-size: 23px;color: blue" href="{{route('home')}}">trang chủ</a></p>
                </div>
            </div>
            @endif
            </div>
</div>
<section class="brands-carousel">
    <span class="sr-only">Brands Carousel</span>
    <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
        <div class="brands">
            @foreach($partners as $partner)
                <div class="item">
                    <a href="#">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info"><span>{{$partner->title}}</span></div>
                            </figcaption>
                                <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="{{url('uploads/partner')}}/{{$partner->cover_image}}">
                        </figure>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@stop()
