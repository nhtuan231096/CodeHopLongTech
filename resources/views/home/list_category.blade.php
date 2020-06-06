@extends('layouts.shop')
@section('content')
<br>
<style>.containerImg{margin:20px auto;position:relative;width:100%;height:170px}.imageImg{display:block;width:100%;height:100%}.overlayImg{position:absolute;bottom:0;left:0;right:0;background-color:rgba(52,152,219,.83);;overflow:hidden;width:100%;height:0;transition:.5s ease}.containerImg:hover .overlayImg{height:100%}.textImg{color:#fff;font-weight:700;font-size:20px;position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);text-align:center}
</style>
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">

            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    <div class="panel-primary">
                       <h3> Danh sách danh mục</h3>
                    </div>

                   <!--  <div class="shop-control-bar">
                        <div class="handheld-sidebar-toggle">
                            <button type="button" class="btn sidebar-toggler">
                                <i class="fa fa-sliders"></i>
                                <span>Bộ lọc</span>
                            </button>
                        </div>

                    </div> -->
                  
                <div class="row">
                @foreach($categorys1 as $cat)
                    <div class="col-md-2">
                        <div class="containerImg">
                        @if($cat->cover_image=='')
                          <img style="" src="{{url('uploads/category')}}/cap-nhat.png" alt="{{$cat->title}}" class="imageImg">
                        @else
                          <img style="" src="{{url('uploads/category')}}/{{$cat->cover_image}}" alt="{{$cat->title}}" class="imageImg">
                        @endif
                            <div class="overlay text-center">
                                <a href="{{route('view_category',['slug'=>$cat->slug])}}">
                                    <div class="overlayImg" style="color: #fff;">
                                    <span style="font-weight: bold;font-size:22px;">{{$cat->title}}</span>
                                    <p><i class=""></i>Đang cập nhật mô tả danh mục</p>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                    {{$categorys1->links()}}
        </main>     
    </div>
    <div id="secondary" class="widget-area shop-sidebar" role="complementary">
       <!--  <div id="techmarket_products_filter-3" class="widget widget_techmarket_products_filter">
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
        </div> -->
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
                                <span style="font-weight: bold;color: #fff !important">{{$partner->title}}</span>
                            </div>
                            <!-- /.info -->
                        </figcaption>
                        <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="{{url('uploads/partner')}}/{{$partner->cover_image}}">
                    </figure>
                </a>
            </div>
            @endforeach
            <!-- .item -->
        </div>
    </div>
    <!-- .col-full -->
</section>
@stop()
