@extends('layouts.v2.index')
@section('mainContainer')
<style type="text/css">
    .title-general::after {
        position: absolute;
        content: none;
        width: 110px;
        height: 2px;
        background-color: #3191CF;
        bottom: -2px;
        left: 0;
    }
    .title-detail::after {
        position: absolute;
        content: none;
        width: 110px;
        height: 2px;
        background-color: #3191CF;
        bottom: -2px;
        left: 190px;
    }
    .title-category::after {
        position: absolute;
        content: none;
        width: 110px;
        height: 2px;
        background-color: #3191CF;
        bottom: -2px;
        left: 0;
    }
    .title-general{
        border-bottom: 2px solid blue;
        padding-bottom: 8px;
    }
    .title-detail{
        border-bottom: 2px solid blue;
        padding-bottom: 8px;
    }
</style>
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">{{$category->title}}</a></li>
    </ul>
    <div class="row">
        <!--Left Part Start -->
        <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
            <div class="module category-style">
                <h3 class="modtitle">Danh mục</h3>
                <div class="modcontent">
                    <div class="box-category">
                        <ul id="cat_accordion" class="list-group">
                            @foreach($cate as $category1)
                            <li class="hadchild"><a href="{{route('view_category',[$category1->slug])}}" class="cutom-parent">{{$category1->title}}</a>   <span class="button-view  fa fa-plus-square-o"></span>
                            </li>
                            @endforeach
                            <!-- //--- -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="module product-simple">
                <h3 class="modtitle">
                    <span>Đang khuyến mại</span>
                </h3>
                <div class="modcontent">
                    <div class="so-extraslider" >
                        <!-- Begin extraslider-inner -->
                        <div class="yt-content-slider extraslider-inner">
                            <div class="item ">
                                @foreach($promotions->slice(0, 5) as $promotion)
                                <div class="product-layout item-inner style1 ">
                                    <div class="item-image">
                                        <div class="item-img-info">
                                            <a href="{{route('view',['slug'=>$promotion->slug])}}" target="_self" title="{{$promotion->title}}">
                                                <?php $urlImage = ($promotion->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                                <img src="{{url($urlImage)}}/{{$promotion->cover_image}}" alt="{{$promotion->cover_image}}">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="item-info">
                                        <div class="item-title">
                                            <a href="#" target="_self" title="Mandouille short">{{$promotion->title}}</a>
                                        </div>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <div class="content_price price">
                                            <span class="price-new product-price">{{$cart->PriceProduct($promotion)}}</span>&nbsp;&nbsp;
                                        </div>
                                    </div>
                                    <!-- End item-info -->
                                    <!-- End item-wrap-inner -->
                                </div>
                                @endforeach
                                <!-- End item-wrap -->
                            </div>
                        </div>
                        <!--End extraslider-inner -->
                    </div>
                </div>
            </div>
            <div class="module banner-left hidden-xs ">
                <div class="banner-sidebar banners">
                  <div>
                    <a title="Banner Image" href="#"> 
                      <img src="{{url('uploads/category')}}/{{$category->cover_image}}" alt=""> 
                    </a>
                  </div>
                </div>
            </div>
        </aside>
        <!--Left Part End -->
        
        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">
            <div class="products-category">
                <h3 class="title-category">
                    <span id="general">{{$category->title}}</span>
                    <span id="detail" style="margin-left: 25px">Thông tin chi tiết</span>
                </h3>
                
                <div class="category-desc" style="display: none;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banners">
                                <div>
                                    <a  href="#"><img src="{{url('uploads/category')}}/{{$category->cover_image}}" alt=""> <br></a>
                                </div>
                                <div class="">
                                    {!!$category->content!!}
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <!--changed listings-->
                <div class="products">
                 <!-- Filters -->
                    <div class="product-filter product-filter-top filters-panel">
                        <div class="row">
                            <div class="col-md-5 col-sm-3 col-xs-12 view-mode">
                                    <div class="list-view">
                                        <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
                                        <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- //end Filters -->
                    <div class="products-list row nopadding-xs so-filter-gird">
                        @if($childCategory->count() > 0)
                            @foreach($childCategory as $itemCate)
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block left-b">
                                        
                                        <div class="product-image-container">
                                            <a href="{{route('view_category',[$itemCate->slug])}}" target="_self" title="{{$itemCate->title}}">
                                                <img src="{{url('uploads/category')}}/{{$itemCate->cover_image}}" class="img-1 img-responsive" alt="{{$itemCate->title}}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption hide-cont text-center">
                                            <div class="ratings">
                                                <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>
                                                <span class="rating-num">( 2 )</span>
                                            </div>
                                            <!-- <h4><a href="{{route('view',[$itemCate->slug])}}" target="_self">{{$itemCate->title}}</a></h4> -->
                                            
                                        </div>
                                        <p class="price text-center">
                                          <span class="price-new"><a href="{{route('view_category',[$itemCate->slug])}}">{{$itemCate->title}}</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="clearfix"></div>
                            {{$childCategory->links()}}
                        @else
                            @foreach($products as $pro)
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block left-b">
                                        <div class="product-image-container">
                                            <a href="{{route('view',[$pro->slug])}}" target="_self" title="{{$pro->title}}">
                                                <?php $urlImage = ($pro->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                                <img src="{{url($urlImage)}}/{{$pro->cover_image}}" class="img-1 img-responsive" alt="{{$pro->title}}">
                                                @if(isset($pro->cover_image_2))
                                                <img src="{{url($urlImage)}}/{{$pro->cover_image_2}}" class="img-2 img-responsive" alt="{{$pro->title}}">
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="button-group so-quickview cartinfo--left text-center">
                                            <!-- <span> -->
                                                    <a class="addToCart addCart" style="padding:5px 10px!important; background:#d7d7d7" href="{{route('add_cart',['id'=>$pro->id])}}">
                                                        <span style="color: #fff">Thêm vào giỏ</span>
                                                    </a>
                                            <!-- </span>    -->
                                                <!-- <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                </button>
                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                </button> -->
                                        </div>
                                        <div class="caption hide-cont text-center">
                                            <div class="ratings">
                                                <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>
                                                <span class="rating-num">( 2 )</span>
                                            </div>
                                            <h4><a href="{{route('view',[$pro->slug])}}" title="Pastrami bacon" target="_self">{{$pro->title}}</a></h4>
                                            
                                        </div>
                                        <p class="price text-center">
                                          <span class="price-new">{{$cart->PriceProduct($pro)}}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="clearfix"></div>
                            {{$products->links()}}
                        @endif
                    </div>
                    <!--// End Changed listings-->
                    <!-- Filters -->
                    <div class="product-filter product-filter-bottom filters-panel">
                        <div class="row">
                            <div class="col-sm-6 text-left"></div>
                            <div class="col-sm-6 text-right">Showing 1 to 15 of 15 (1 Pages)</div>
                        </div>
                    </div>
                </div>
                <!-- //end Filters -->
                
            </div>
            
        </div>
        

        <!--Middle Part End-->
    </div>
</div>
<script type="text/javascript">
    $("#general").addClass('title-general');
    $("#detail").click(function(){
        $(this).addClass('title-detail').removeClass('title-general');
        $("#general").removeClass('title-general');
        $(".category-desc").show();
        $(".products").hide();
    });
    $("#general").click(function(){
        $(this).addClass('title-general').removeClass('title-detail');
        $("#detail").removeClass('title-detail');
        $(".category-desc").hide();
        $(".products").show();
    });
</script>
@stop()
