@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<div class="main-container container">
	<ul class="breadcrumb">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
		<li><a href="#">Tin tức/ Dự án</a></li>
		
	</ul>
	
	<div class="row">
		<!--Left Part Start -->
		<aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column " id="column-left">
			<div class="module blog-category titleLine">
            	<h3 class="modtitle">Danh mục tin tức</h3>
            	<div class="modcontent">
            		<ul class="list-group ">
            			@foreach($news_category as $news_cate)
            			<li class="list-group-item"> <a href="{{route('danh_muc_tin_tuc',['slug'=>$news_cate->slug])}}"class="group-item active">{{$news_cate->title}}</a></li>
            			@endforeach
            		</ul>
            		
            	</div>
            </div>

            <div class="module blog-category titleLine">
            	<h3 class="modtitle">Dự án</h3>
            	<div class="modcontent">
            		<ul class="list-group ">
            			@foreach($special_news as $item)
            			<!-- <li class="list-group-item"> <a href="{{route('tin_tuc_chi_tiet',['slug'=>$item->slug])}}"class="group-item active">{{$item->title}}</a></li> -->
            			<div class="post">
                            <div class="media">
                                <a href="{{route('tin_tuc_chi_tiet',['slug'=>$item->slug])}}">
                                    <img style="margin:20px 0 6px 0" width="100%" class="media-object" src="{{url('uploads/news')}}/{{$item->image_cover}}" alt="{{$item->image_cover}}">
                                </a>
                            </div>
                            <a href="#" style="font-size: 16px;padding:5px">{{$item->title}}.</a>
                        </div>
            			@endforeach
            		</ul>
            		
            	</div>
            </div>

            <!-- <div class="module product-simple">
                <h3 class="modtitle">
                    <span>Đang khuyến mại</span>
                </h3>
                <div class="modcontent">
                    <div class="so-extraslider" >
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
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <div class="module banner-left hidden-xs ">
                <div class="banner-sidebar banners">
                  <div>
                    <a title="Banner Image" href="#"> 
                      <img src="{{url('public/homev2')}}/image/catalog/banners/banner-sidebar.jpg" alt="Banner Image"> 
                    </a>
                  </div>
                </div>
            </div>	
        </aside>
		<!--Left Part End -->
		
		<!--Middle Part Start-->
		<div id="content" class="col-md-9 col-sm-8">
			<div class="blog-header">
				<h3>Tin tức</h3>
				
			</div>
			<div class="blog-category clearfix">
          
              <!--   <div class="product-filter product-filter-top filters-panel hidden-sm hidden-xs">
                    <div class="row">
                        <div class="col-sm-4 view-mode">
                            <div class="list-view ">
                                <button type="button" id="grid-view" class="btn btn-view hidden-sm hidden-xs">1</button>
                                <button type="button" id="grid-view-2" class="btn btn-view ">2</button>
                                <button type="button" id="grid-view-3" class="btn btn-view hidden-sm hidden-xs ">3</button>
                                <button type="button" id="grid-view-4" class="btn btn-view hidden-sm hidden-xs">4</button>
                                <button type="button" id="list-view" class="btn btn-view list "><i class="fa fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="blog-listitem row">
                	@foreach($news as $item)
                    <div class="blog-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-item-inner clearfix">
                            <div class="itemBlogImg clearfix">
                                <div class="article-image">
                                    <div>
                                        <a class="popup-gallery" href="{{route('tin_tuc_chi_tiet',['tin_tuc_chi_tiet'=>$item->slug])}}">
                                            <img src="{{url('uploads/news')}}/{{$item->image_cover}}" alt="{{$item->title}}" />
                                        </a>
                                    </div>
                                    <div class="article-date">
                                        <div class="date">  <span class="article-date">
                                        	<?php 
                                        		$date = explode('-', date_format($item->created_at,'d-M-y'));
                                        	?>
                                            <b>{{$date[0]}}</b> {{$date[1]}}
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="itemBlogContent clearfix ">
                                <div class="blog-content">
                                    <div class="article-title font-title">
                                        <h4><a href="{{route('tin_tuc_chi_tiet',['tin_tuc_chi_tiet'=>$item->slug])}}">{{$item->title}}</a></h4>
                                    </div>
                                    <div class="blog-meta"> <span class="author"><i class="fa fa-user"></i><span>Post by </span>{{$item->created_by}}</span>
                                    </div>
                                    <p class="article-description">{!!strip_tags($item->description)!!}</p>
                                    <div class="readmore">  <a class="btn-readmore font-title" href="{{route('tin_tuc_chi_tiet',['tin_tuc_chi_tiet'=>$item->slug])}}"><i class="fa fa-caret-right"></i>Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="product-filter product-filter-bottom filters-panel clearfix">
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                            	{{$news->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--Middle Part End-->
</div>
@stop()