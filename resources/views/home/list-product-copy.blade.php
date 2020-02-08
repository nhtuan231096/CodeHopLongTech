@extends('layouts.search')
@section('content')
</br>
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="panel-body"><h4> Danh sách sản phẩm</h4></div>
                    <!-- .shop-archive-header -->
                    <div class="tab-content">
                        <div id="grid-extended" class="tab-pane active" role="tabpanel">
                            <div class="woocommerce columns-5">
                                <div class="products">
                                    @foreach($product as $pro)
                                    <div class="product first">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <a href="#" class="add_to_wishlist"> Add to Wishlist</a>
                                        </div>
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route('view',['slug'=>$pro->slug])}}" rel="dofollow">
                                            <img style="height:197px" width="224px" alt="{{$pro->title}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/product')}}/{{$pro->cover_image}}">
                                            <h2 class="woocommerce-loop-product__title">{{$pro->title}}</h2>
                                        </a>
                                    </div>
                                 @endforeach
                                </div> 
                            </div>
                            {{$product->appends(request()->only('title','created_by','category_id','status'))->links()}}
                        </div> 
                    </div>
                </main>
            <!-- #main -->
            </div>
            <!-- #primary -->
            </br>
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
