@extends('layouts.search')
@section('content')
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
                            <form action="" method="GET" class="form-inline" role="form">
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
                    <header class="section-header"> 
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
                    <div class="section-products-carousel-tabs-wrap">
                        <header class="section-header">     
                            <ul role="tablist" class="nav justify-content-end">
                                <li class="nav-item"><a class="nav-link active" href="#tab-catalog" data-toggle="tab">Catalog</a></li>
                                <li class="nav-item"><a class="nav-link " href="#tab-pricelist" data-toggle="tab">Price list</a></li>
                                <li class="nav-item"><a class="nav-link " href="#tab-manuals" data-toggle="tab">Manuals</a></li>
                                <li class="nav-item"><a class="nav-link " href="#tab-software" data-toggle="tab">Software</a></li>
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
        </div>
    </div>
</div>
@stop()


