@extends('layouts.v2.index')
@section('mainContainer')
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
                <h3 class="modtitle">Categories</h3>
                <div class="modcontent">
                    <div class="box-category">
                        <ul id="cat_accordion" class="list-group">
                            <li class="hadchild"><a href="category.html" class="cutom-parent">Smartphone & Tablets</a>   <span class="button-view  fa fa-plus-square-o"></span>
                                <ul style="display: block;">
                                    <li><a href="category.html">Men's Watches</a></li>
                                    <li><a href="category.html">Women's Watches</a></li>
                                    <li><a href="category.html">Kids' Watches</a></li>
                                    <li><a href="category.html">Accessories</a></li>
                                </ul>
                            </li>
                            <li class="hadchild"><a class="cutom-parent" href="category.html">Electronics</a>   <span class="button-view  fa fa-plus-square-o"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html">Cycling</a></li>
                                    <li><a href="category.html">Running</a></li>
                                    <li><a href="category.html">Swimming</a></li>
                                    <li><a href="category.html">Football</a></li>
                                    <li><a href="category.html">Golf</a></li>
                                    <li><a href="category.html">Windsurfing</a></li>
                                </ul>
                            </li>
                            <li class="hadchild"><a href="category.html" class="cutom-parent">Shoes</a>   <span class="button-view  fa fa-plus-square-o"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                </ul>
                            </li>
                            <li class="hadchild"><a href="category.html" class="cutom-parent">Watches</a>  <span class="button-view  fa fa-plus-square-o"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html">Men's Watches</a></li>
                                    <li><a href="category.html">Women's Watches</a></li>
                                    <li><a href="category.html">Kids' Watches</a></li>
                                    <li><a href="category.html">Accessories</a></li>
                                </ul>
                            </li>
                            <li class="hadchild"><a href="category.html" class="cutom-parent">Jewellery</a>    <span class="button-view  fa fa-plus-square-o"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                    <li><a href="category.html">Sub Categories</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="category.html" class="cutom-parent">Health &amp; Beauty</a>  <span class="dcjq-icon"></span></li>
                            <li class=""><a href="category.html" class="cutom-parent">Kids &amp; Babies</a>    <span class="dcjq-icon"></span></li>
                            <li class=""><a href="category.html" class="cutom-parent">Sports</a>  <span class="dcjq-icon"></span></li>
                            <li class=""><a href="category.html" class="cutom-parent">Home &amp; Garden</a><span class="dcjq-icon"></span></li>
                            <li class=""><a href="category.html" class="cutom-parent">Wines &amp; Spirits</a>  <span class="dcjq-icon"></span></li>
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
                                                <img src="{{url('uploads/product')}}/{{$promotion->cover_image}}" alt="{{$promotion->cover_image}}">
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
                <h3 class="title-category ">{{$category->title}}</h3>
                <div class="category-desc">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banners">
                                <div>
                                    <a  href="#"><img src="{{url('uploads/category')}}/{{$category->cover_image}}" alt=""> <br></a>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <!-- Filters -->
                <div class="product-filter product-filter-top filters-panel">
                    <div class="row">
                        <div class="col-md-5 col-sm-3 col-xs-12 view-mode">
                            
                                <div class="list-view">
                                    <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
                                    <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                </div>
                    
                        </div>
                        <div class="short-by-show form-inline text-right col-md-7 col-sm-9 col-xs-12">
                            <!-- <div class="form-group short-by">
                                <label class="control-label" for="input-sort">Sort By:</label>
                                <select id="input-sort" class="form-control"
                                onchange="location = this.value;">
                                    <option value="" selected="selected">Default</option>
                                    <option value="">Name (A - Z)</option>
                                    <option value="">Name (Z - A)</option>
                                    <option value="">Price (Low &gt; High)</option>
                                    <option value="">Price (High &gt; Low)</option>
                                    <option value="">Rating (Highest)</option>
                                    <option value="">Rating (Lowest)</option>
                                    <option value="">Model (A - Z)</option>
                                    <option value="">Model (Z - A)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-limit">Show:</label>
                                <select id="input-limit" class="form-control" onchange="location = this.value;">
                                    <option value="" selected="selected">15</option>
                                    <option value="">25</option>
                                    <option value="">50</option>
                                    <option value="">75</option>
                                    <option value="">100</option>
                                </select>
                            </div> -->
                        </div>
                        <!-- <div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                            <ul class="pagination">
                                <li class="active"><span>1</span></li>
                                <li><a href="">2</a></li><li><a href="">&gt;</a></li>
                                <li><a href="">&gt;|</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <!-- //end Filters -->

                <!--changed listings-->
                <div class="products-list row nopadding-xs so-filter-gird">
                    @foreach($products as $pro)
                    <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-item-container">
                            <div class="left-block left-b">
                                
                                <div class="product-image-container second_img">
                                    <a href="{{route('view',[$pro->slug])}}" target="_self" title="Lastrami bacon">
                                        <?php $urlImage = ($pro->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                        <img src="{{url($urlImage)}}/{{$pro->cover_image}}" class="img-1 img-responsive" alt="">
                                        @if(isset($pro->cover_image_2))
                                        <img src="{{url($urlImage)}}/{{$pro->cover_image_2}}" class="img-2 img-responsive" alt="">
                                        @endif
                                    </a>
                                </div>
                                <!--quickview--> 
                                <div class="so-quickview">
                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view',[$pro->slug])}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                </div>                                                     
                                <!--end quickview-->

                                
                            </div>
                            <div class="right-block">
                                <div class="button-group so-quickview cartinfo--left">
                                    <a href="{{route('add_cart',['id'=>$pro->id])}}" class="addToCart addCart">Thêm giỏ hàng</a>
                                   <!--  <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                    </button>
                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                    </button> -->
                                    
                                </div>
                                <div class="caption hide-cont">
                                    <div class="ratings">
                                        <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <span class="rating-num">( 2 )</span>
                                    </div>
                                    <h4><a href="product.html" title="Pastrami bacon" target="_self">{{$pro->title}}</a></h4>
                                    
                                </div>
                                <p class="price">
                                  <span class="price-new">{{$cart->PriceProduct($pro)}}</span>
                                  
                                </p>
                                <div class="description item-desc">
                                    <p>{!!$pro->short_description!!}</p>
                                </div>
                                <div class="list-block">
                                    <a href="{{route('add_cart',['id'=>$pro->id])}}" class="addToCart addCart">Thêm giỏ hàng</a>
                                    <!-- <button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i>
                                    </button>
                                    <button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('101');"><i class="fa fa-refresh"></i>
                                    </button> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
                {{$products->links()}}
                <!--// End Changed listings-->
                <!-- Filters -->
                <div class="product-filter product-filter-bottom filters-panel">
                    <div class="row">
                        <div class="col-sm-6 text-left"></div>
                        <div class="col-sm-6 text-right">Showing 1 to 15 of 15 (1 Pages)</div>
                    </div>
                </div>
                <!-- //end Filters -->
                
            </div>
            
        </div>
        

        <!--Middle Part End-->
    </div>
</div>
@stop()