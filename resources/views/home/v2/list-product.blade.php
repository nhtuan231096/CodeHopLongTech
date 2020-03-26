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
        <li><a href="#">Tìm kiếm</a></li>
    </ul>
    <div class="row">
        <!--Left Part Start -->
        <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
            <div class="module category-style">
                <h3 class="modtitle">Danh mục</h3>
                <div class="modcontent">
                    <div class="box-category">
                        <ul id="cat_accordion" class="list-group">
                            @foreach($categorys as $category1)
                            <li class="hadchild"><a href="{{route('view_category',[$category1->slug])}}" class="cutom-parent">{{$category1->title}}</a>   <span class="button-view  fa fa-plus-square-o"></span>
                            </li>
                            @endforeach
                            <!-- //--- -->
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!--Left Part End -->
        
        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">
            <div class="products-category">
                <h3 class="title-category">
                    <span>Danh sách sản phẩm</span>
                </h3>
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
                            @foreach($products as $pro)
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block left-b">
                                        <div class="product-image-container">
                                            <a href="{{route('view',[$pro->slug])}}" target="_self" title="{{$pro->title}}">
                                                <?php $urlImage = ($pro->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                                <img src="{{url($urlImage)}}/{{$pro->cover_image}}" class="img-2 img-responsive" alt="{{$pro->title}}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="button-group so-quickview cartinfo--left text-center">
                                            <!-- <span> -->
                                                @if($pro->price > 0)
                                                    <a class="addToCart addCart" style="padding:5px 10px!important; background:#d7d7d7" href="{{route('add_cart',['id'=>$pro->id])}}">
                                                        <span style="color: #fff">Thêm vào giỏ</span>
                                                    </a>
                                                @endif
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
