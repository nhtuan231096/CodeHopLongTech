@extends('layouts.shop')
@section('content')
</br>
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="shop-archive-header">
                        <div class="jumbotron">
                            <div class="jumbotron-img"></div>
                            <div class="jumbotron-caption" >
                                <h3 class="jumbo-title">{{$category->title}}</h3>
                                <p class="jumbo-subtitle">{!!$category->content!!}</p>
                            </div>
                        </div>
                    </div>
                    <!-- .shop-archive-header -->
                    <div class="shop-control-bar">
                        <h1 class="woocommerce-products-header__title page-title"><span>{{$category->title}}</span></h1>
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
                        <div id="grid-extended" class="tab-pane active" role="tabpanel">
                            <div class="woocommerce columns-5">
                                <div class="products">
                                    @foreach($cate as $pro)
                                    <div class="product first">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <a href="" rel="dofollow" class="add_to_wishlist"></a>
                                        </div>
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route('view_category',['slug'=>$pro->slug])}}" rel="dofollow">
                                           @if($pro->cover_image=='')
                                           <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/category')}}/not-image.jpg">
                                           @else
                                           <img alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/category')}}/{{$pro->cover_image}}">
                                           @endif

                                            @if($pro->price=='' || is_numeric($pro->price) == false) 
                                            <span class="woocommerce-Price-currencySymbol"><b>Liên hệ 1900.6536</b></span> 
                                            @elseif(($date = date('Y-m-d') <= $product->time_discount))
                                                <?php $productPrice = $pro->price - (($pro->price * $product->discount)/100)?>
                                                <span class="woocommerce-Price-currencySymbol"><b>{{number_format($productPrice)}}</b></span>
                                            @else 
                                                @if(Auth::guard('customer')->check())
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        <?php $priceProduct = isset($pro->price_when_login) ? ($pro->price_when_login) : ($pro->price > 0 ? ($pro->price) : $pro->price)?>
                                                            <b>
                                                                {{!empty($cart->DiscountAmount()) ? number_format(round($priceProduct - (($priceProduct/100) * $cart->DiscountAmount()))) : $priceProduct}} VNĐ
                                                            </b>
                                                    </span>
                                                @else
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        <b>
                                                            {{$pro->price > 0 ? number_format($pro->price).'  VNĐ' : $pro->price}}
                                                        </b>
                                                    </span>
                                                @endif
                                            @endif 

                                            <br>
                                           <span class="price"><h2 class="woocommerce-loop-product__title">{{$pro->title}}</h2></span>
                                        </a>
                                        <div class="techmarket-product-rating">
                                            <div title="" class="star-rating">
                                                <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                            </div>
                                            <span class="review-count">(1)</span>
                                        </div> 
                                    </div>
                                    @endforeach
                                </div> 
                            </div>
                        </div> 
                    </div>
                    <div class="tab-content">
                        @if($products=='')
                        @else
                            <h3>Danh sách sản phẩm</h3>
                        @endif
                        <div id="grid-extended" class="tab-pane active" role="tabpanel">
                            <div class="woocommerce columns-5">
                                <div class="products">
                                    @foreach($products as $pro)
                                    <div class="product first">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <a href="" rel="dofollow" class="add_to_wishlist"></a>
                                        </div>
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route('view',['slug'=>$pro->slug])}}" rel="dofollow">
                                            <img alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image"  src="{{url('uploads/product')}}/{{$pro->cover_image}}">
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                    @if($pro->price=='' || is_numeric($pro->price) == false) 
                                                    <span class="woocommerce-Price-currencySymbol"><b>Liên hệ 1900.6536</b></span> 
                                                    @elseif(($date = date('Y-m-d') <= $pro->time_discount))
                                                        <?php $productPrice = $pro->price - (($pro->price * $pro->discount)/100)?>
                                                        <span class="woocommerce-Price-currencySymbol"><b>{{number_format($productPrice)}}</b></span>
                                                    @else 
                                                        @if(Auth::guard('customer')->check())
                                                            <span class="woocommerce-Price-currencySymbol">
                                                                <?php $priceProduct = isset($pro->price_when_login) ? ($pro->price_when_login) : ($pro->price > 0 ? ($pro->price) : $pro->price)?>
                                                                    <b>
                                                                        {{!empty($cart->DiscountAmount()) ? number_format(round($priceProduct - (($priceProduct/100) * $cart->DiscountAmount()))) : $priceProduct}} VNĐ
                                                                    </b>
                                                            </span>
                                                        @else
                                                            <span class="woocommerce-Price-currencySymbol">
                                                                <b>
                                                                    {{$pro->price > 0 ? number_format($pro->price).'  VNĐ' : $pro->price}}
                                                                </b>
                                                            </span>
                                                        @endif
                                                    @endif 
                                                </span>
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
                                {{$products->appends(request()->only('title','category_id'))->links()}}
                                <!-- .products -->
                            </div>
                                <!-- .woocommerce -->
                        </div>
                    </div>
                </main>
            <!-- #main -->
            </div>
            <!-- #primary -->
            </br>
            <div id="secondary" class="widget-area shop-sidebar" role="complementary">
                <div class="widget woocommerce widget_product_categories techmarket_widget_product_categories" id="techmarket_product_categories_widget-2">
                    <ul class="product-categories ">
                        <li class="product_cat">
                            <span>{{$category->title}}</span>
                            <ul>
                            @foreach($category->childs as $child)
                                <li class="cat-item">
                                    <a href="{{route('view_category',['slug'=>$child->slug])}}">
                                        <span class="no-child"></span>{{$child->title}}</a>
                                </li>
                            @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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
