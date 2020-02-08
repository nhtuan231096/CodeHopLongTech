@extends('layouts.shop')
@section('content')
</br>
<div id="content" class="site-content">
    <div class="col-full">
        <div class="row">
            <div id="primary" class="content-area">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('home')}}">Trang chủ</a>
                    <span class="delimiter">
                        <i class="fa fa-angle-right"></i>
                    </span>
                    Tin tức
                </nav>
                <h3>Tin tức, sự kiện</h3>
                <br>
                <main id="main" class="site-main">
                <div class="row">
                    @foreach($news_category as $new)
                    <div class="col-md-2">
                        <article class="post format-image hentry">
                            <div class="media-attachment">
                                <div class="post-thumbnail">
                                    <a href="{{route('detail_project',['slug'=>$new->slug])}}" rel="dofollow">
                                        <img alt="" class="wp-post-image" src="{{url('uploads/news')}}/{{$new->image_cover}}">
                                    </a>
                                </div>
                            </div>
                            <!-- .media-attachment -->
                            <div class="content-body">
                                <header class="entry-header">
                                    <h1 class="entry-title">
                                        <a rel="dofollow" href="{{route('detail_project',['slug'=>$new->slug])}}"><center>{{$new->title}}</center></a>
                                    </h1>
                                </header>
                                <span class="comments-link">
                                </span>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
                    <div class="paginate-pj pull-right">
                        {{$news_category->links()}}
                    </div>
                </main>
            </div><!-- 
            <div id="secondary" {{url('public/home')}}/class="sidebar-blog widget-area" role="complementary">
                <div class="widget widget_categories" id="categories-2">
                    <span class="gamma widget-title">Tin mới</span>
                    <ul>
                    @foreach($nproject as $news_category)
                        <li class="cat-item cat-item-53">
                            <a href="{{route('detail_project',['slug'=>$news_category->slug])}}" rel="dofollow">{{$news_category->title}}</a>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</div>
@stop()