@extends('layouts.shop')
@section('content')
<div id="content" class="site-content">
                <div class="col-full">
                    <div class="row" >
                        <!-- .woocommerce-breadcrumb -->
                        <div id="primary" class="content-area" style="padding: 20px 50px;">
                            <main id="main" class="site-main">
                                <article class="post format-image">
                                   
                                    <header class="entry-header">
                                        <h1 class="entry-title">
                                    @if(isset($news_project))
                                       {{$news_project->title}}
                                    @elseif(isset($tintuc))
                                        {{$tintuc->title}}
                                    @else
                                        {{$img_company->title}}
                                    @endif
                                         
                                        </h1>

                                        <!-- .entry-title -->
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <a rel="#" href="#">
                                                    <time datetime="" class="entry-date published">
                                                         @if(isset($news_project))
                                                           {{date('d-m-Y',strtotime($news_project->updated_at))}}
                                                        @elseif(isset($tintuc))
                                                            {{date('d-m-Y',strtotime($tintuc->updated_at))}} 
                                                        @else
                                                            {{date('d-m-Y',strtotime($img_company->updated_at))}} 
                                                        @endif
                                                  </time>
                                                </a>
                                            </span>
                                            <!-- .posted-on -->
                                            <span class="author">
                                                <a rel="author" title="Posts by {{$news_project->created_by}}" href="#">By 
                                                     @if(isset($news_project))
                                                           {{$news_project->created_by}}
                                                        @elseif(isset($tintuc))
                                                            {{$tintuc->created_by}}
                                                        @else
                                                             {{$img_company->created_by}}
                                                        @endif
                                                            
                                                    
                                                  </a>
                                            </span>

                                             <div class="media-attachment">
                                      <!--   <div class="post-thumbnail">
                                            <img width="335px" height="250px" alt="" class="wp-post-image img-project" src="{{url('uploads/news')}}/{{$news_project->image_cover}}">
                                        </div> -->
                                    </div>
                                            <!-- .author -->
                                        </div>
                                        <!-- .entry-meta -->
                                    </header>
                                    <!-- .entry-header -->
                                    <div class="entry-content" itemprop="articleBody">
                                     
                                         @if(isset($news_project))
                                            {!!$news_project->content!!}
                                        @elseif(isset($tintuc))
                                             {!!$tintuc->content!!}
                                        @else
                                               {!!$img_company->content!!}
                                        @endif
                            
                                    </div>
<br>
                                    <section class="section-products-carousel" id="homev6-carousel-3">
                                    <header class="section-header">
                                        <h2 class="section-title">
                                        Tin liên quan
                                    </h2>
                                        <nav class="custom-slick-nav"></nav>
                                        <!-- .custom-slick-nav -->
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products-carousel 6-column-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:6,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#homev6-carousel-3 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:750,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-6">
                                                <div class="products">
                                                @if(isset($news_project))
                                                   @foreach($related as $news)
                                                    <div class="product" >  
                                                        <div class="img-news" >
                                                            <div class="hovereffect">
                                                                <img src="{{url('uploads/news')}}/{{$news->image_cover}}" class="wp-post-image" alt="" style="height: 200px;">
                                                                <div class="overlay">
                                                               <br>
                                                                   <a class="info" href="{{route('detail_project',['slug'=>$news->slug])}}">Chi tiết</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <!-- <span class="amount"> 456.00</span> -->
                                                            </span>
                                                            <!-- /.price -->
                                                            <div class="news-title">
                                                                <a href="{{route('detail_project',['slug'=>$news->slug])}}"><h2 class="woocommerce-loop-product__title">{{$news->title}}</h2></a>
                                                            </div>
                                                        </a>
                                                  <div class="hover-area">
                                                   
                                                </div>
    
                                                    </div>
                                                @endforeach
                                                @elseif($tintuc)
                                                    @foreach($relate as $new)
                                                    <div class="product" >  
                                                        <div class="img-news" >
                                                            <div class="hovereffect">
                                                                <img src="{{url('uploads/news')}}/{{$new->image_cover}}" class="wp-post-image" alt="" style="height: 200px;">
                                                                <div class="overlay">
                                                               <br>
                                                                   <a class="info" href="{{route('detail_project',['slug'=>$new->slug])}}">Chi tiết</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <!-- <span class="amount"> 456.00</span> -->
                                                            </span>
                                                            <!-- /.price -->
                                                            <div class="news-title">
                                                                <a href="{{route('detail_project',['slug'=>$new->slug])}}"><h2 class="woocommerce-loop-product__title">{{$new->title}}</h2></a>
                                                            </div>
                                                        </a>
            
                                                    </div>
                                                @endforeach
                                               
                                                @else
                                                    @foreach($relate_compa as $news_com)
                                                    <div class="product" >  
                                                        <div class="img-news" >
                                                            <div class="hovereffect">
                                                                <img src="{{url('uploads/news')}}/{{$news_com->image_cover}}" class="wp-post-image" alt="" style="height: 200px;">
                                                                <div class="overlay">
                                                               <br>
                                                                   <a class="info" href="{{route('detail_project',['slug'=>$news_com->slug])}}">Chi tiết</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <!-- <span class="amount"> 456.00</span> -->
                                                            </span>
                                                            <!-- /.price -->
                                                            <div class="news-title">
                                                                <a href="{{route('detail_project',['slug'=>$news_com->slug])}}"><h2 class="woocommerce-loop-product__title">{{$news_com->title}}</h2></a>
                                                            </div>
                                                        </a>
            
                                                    </div>
                                                @endforeach
                                                @endif
                                                    <!-- /.product-outer -->
                                                </div>
                                            </div>
                                            <!-- .woocommerce-->
                                        </div>
                                        <!-- .container-fluid -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                </article>
                                                               <!-- .comments-area -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                        <div id="secondary" class="sidebar-blog widget-area" role="complementary">
                      
                              <div class="widget widget_categories" id="categories-2">
                                <span class="gamma widget-title">Tin mới</span>
                                <ul>
                                  @if(isset($news_project))  
                                    @foreach($related as $news)
                                        <li class="cat-item cat-item-53"><a href="{{route('detail_project',['slug'=>$news->slug])}}">{{$news->title}}</a></li>
                                    @endforeach
                                  @elseif(isset($tintuc))
                                    @foreach($relate as $news)
                                        <li class="cat-item cat-item-53"><a href="{{route('detail_project',['slug'=>$news->slug])}}">{{$news->title}}</a></li>
                                    @endforeach 
                                @else
                                    @foreach($relate_compa as $news_compa)
                                        <li class="cat-item cat-item-53"><a href="{{route('detail_project',['slug'=>$news_compa->slug])}}">{{$news_compa->title}}</a></li>
                                    @endforeach
                                  @endif  

                                </ul>
                            </div>
                            <!-- .widget_tag_cloud -->
                        </div>
                        <!-- .sidebar-blog -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>
@stop()