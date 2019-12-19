@extends('layouts.product')
@section('content')
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="shop-control-bar">
                        <div class="handheld-sidebar-toggle">
                            <button type="button" class="btn sidebar-toggler">
                                <i class="fa fa-sliders"></i>
                                <span>Bộ lọc</span>
                            </button>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="grid" class="tab-pane active" role="tabpanel">
                            <div class="woocommerce columns-5">
                                <div class="products">
                                @foreach($product as $pro)
                                    <div class="product">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                        </div>
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="">
                                            <img style="height:197px" width="224px" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/product')}}/{{$pro->cover_image}}">
                                            <h2 class="woocommerce-loop-product__title">{{$pro->title}}</h2>
                                        </a>
                                        <div class="hover-area">
                                            <a class="button" href="{{route('view',['id'=>$pro->id])}}">Xem chi tiết</a>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                                {{$product->links()}}
                        </div>
                                    </div>
                                    <div class="shop-control-bar-bottom">
                                        <form class="form-techmarket-wc-ppp" method="POST">
                                            <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                                <option value="20">Show 20</option>
                                                <option value="40">Show 40</option>
                                                <option value="-1">Show All</option>
                                            </select>
                                            <input type="hidden" value="5" name="shop_columns">
                                            <input type="hidden" value="15" name="shop_per_page">
                                            <input type="hidden" value="right-sidebar" name="shop_layout">
                                        </form>
                                        <!-- .form-techmarket-wc-ppp -->
                                        <p class="woocommerce-result-count">
                                            Showing 1&ndash;15 of 73 results
                                        </p>
                                        <nav class="woocommerce-pagination"></nav>
                                    </div>
                                </main>
                            </div>
                            <!-- #primary -->
                            <div id="secondary" class="widget-area shop-sidebar" role="complementary">
                                <div id="techmarket_products_filter-3" class="widget widget_techmarket_products_filter">
                                    <span class="gamma widget-title">Bộ lọc</span>

                                        <div class="widget woocommerce widget_layered_nav maxlist-more" id="woocommerce_layered_nav-3">
                                            <span class="gamma widget-title">Công suất</span>
                                            <ul>
                                                <div class="checkbox">
                                                    <label style="font-size: 1.2em">
                                                        <input type="checkbox" value="0.18kW" ng-click="selection('0.18kW')">
                                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                        0.18kW
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label style="font-size: 1.2em">
                                                        <input type="checkbox" value="0.37kW" ng-click="selection('0.37kW')">
                                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                        0.37kW
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label style="font-size: 1.2em">
                                                        <input type="checkbox" value="0.75kW" ng-click="selection('0.75kW')">
                                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                        0.75kW
                                                    </label>
                                                </div>
                                            </ul>
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
                                    <!-- /.info -->
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
