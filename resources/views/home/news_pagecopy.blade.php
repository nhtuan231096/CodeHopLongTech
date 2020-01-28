@extends('layouts.product') 
@section('content')
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <nav class="woocommerce-breadcrumb">
            <a href="{{route('home')}}">Home</a>
            <span class="delimiter">
                <i class="fa fa-angle-right"></i>
            </span>Tin tức
        </nav>
        <div class="row">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    @foreach($news as $item)
                    <article id="post-861" class="post-861 post type-post status-publish format-image has-post-thumbnail hentry category-laptops post_format-post-format-image">
                        <div class="media-attachment">
                            <div class="post-thumbnail">
                                <a href="{{route('tin_tuc_chi_tiet',['tin_tuc_chi_tiet'=>$item->slug])}}"><img width="460" height="244" src="{{url('uploads/news')}}/{{$item->image_cover}}" alt=""></a>
                            </div>
                        </div>
                        <div class="content-body">
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="" style="font-size: 18px">{{$item->title}}</a></h2>
                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <a href="{{route('tin_tuc_chi_tiet',['tin_tuc_chi_tiet'=>$item->slug])}}" rel="category tag">{{$item->created_by}}</a>               </span>

                                    <span class="posted-on"><a href="" rel="bookmark"><time class="entry-date published" datetime="2017-03-23T08:06:09+00:00">{{$item->created_at}}</time> </a></span>
                                </div>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p>{!!strip_tags($item->description)!!}</p>
                            </div>
                            <!-- .post-excerpt -->
                            <div class="post-readmore"><a href="{{route('tin_tuc_chi_tiet',['tin_tuc_chi_tiet'=>$item->slug])}}" class="btn btn-primary">Chi tiết</a></div>
                            <!-- <span class="comments-link"><a href="">Leave a comment</a></span> -->
                        </div>
                    </article>
                    @endforeach
                    <!-- #post-## -->
                    <nav id="post-navigation" class="navigation pagination" aria-label="Post Navigation"><span class="screen-reader-text">Posts navigation</span>
                        <div class="nav-links">
                            {{$news->links()}}
                        </div>
                    </nav>
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
            <div id="secondary" class="sidebar-blog widget-area" role="complementary">
                <div id="search-2" class="widget widget_search">
                    <form method="get" class="search-form" action="">
                        <label>
                            <span class="screen-reader-text">Tìm kiếm:</span>
                            <input type="search" class="search-field" placeholder="Tìm kiếm…" value="" name="search">
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </form>
                </div>
                <div id="categories-2" class="widget widget_categories"><span class="gamma widget-title">Danh mục tin tức</span>
                    <ul>
                        @foreach($news_category as $news_cate)
                        <li class="cat-item"><a href="{{route('danh_muc_tin_tuc',['slug'=>$news_cate->slug])}}">{{$news_cate->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div id="techmarket_posts_carousel_widget-3" class="widget techmarket_posts_carousel_widget">
                        <header class="section-header">
                            <h2 class="section-title">Dự án</h2>
                            <div class="custom-slick-nav"><a href="#" class="slick-arrow" style="display: inline;"></a></div>
                        </header>
                        @foreach($special_news as $item)
                        <div class="post">
                            <div class="media">
                                <a href="{{route('tin_tuc_chi_tiet',['slug'=>$news_cate])}}}}">
                                    <img style="margin:20px 0 6px 0" width="100%" class="media-object" src="{{url('uploads/news')}}/{{$item->image_cover}}" alt="{{$item->image_cover}}">
                                </a>
                            </div>
                            <a href="#" style="font-size: 16px;padding:5px">{{$item->title}}.</a>
                        </div>
                        @endforeach
                </div>
            </div>
            <!-- #secondary -->
        </div>
        <!-- .col-full -->
    </div>
    <!-- .row -->
</div>
@stop()