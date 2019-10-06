@extends('layouts.product') @section('content')
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <nav class="woocommerce-breadcrumb"><a href="{{route('home')}}">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span><a style="background: none" href="{{route('tin_tuc')}}">Tin tức</a></nav>
        <div class="row">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    
                    <!-- #post-## -->
                    <div class="post-wrapper">
                      <img src="{{url('uploads/news')}}/{{$data->image_cover}}" style="width: 100%;height: 350px" alt="{{$data->image_cover}}">
                      <h2>{{$data->title}}</h2>
                      <span>{{$data->created_at}}</span> by <span>{{$data->created_by}}</span>
                      <p><i>{{strip_tags($data->description)}}</i></p>
                      <p>
                        {!!$data->content!!}
                      </p>
                    </div>
                    <!-- #post-## -->
                    
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->

            <div id="secondary" class="sidebar-blog widget-area" role="complementary">
                <div id="search-2" class="widget widget_search">
                    <form role="search" method="get" class="search-form" action="">
                        <label>
                            <span class="screen-reader-text">Tìm kiếm:</span>
                            <input type="search" class="search-field" placeholder="Tìm kiếm…" value="" name="search">
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </form>
                </div>
               <!--  <div id="text-2" class="widget widget_text"><span class="gamma widget-title">About</span>
                    <div class="textwidget">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero.</p>
                    </div>
                </div> -->
                <div id="categories-2" class="widget widget_categories"><span class="gamma widget-title">Danh mục tin tức</span>
                    <ul>
                        @foreach($news_category as $news_cate)
                        <li class="cat-item"><a href="">{{$news_cate->title}}</a>
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
                                <a href="#">
                                    <img style="margin:20px 0 6px 0" width="100%" class="media-object" src="{{url('uploads/news')}}/{{$item->image_cover}}" alt="{{$item->image_cover}}">
                                </a>
                            </div>
                            <a href="#" style="font-size: 16px;padding:5px">{{$item->title}}.</a>
                        </div>
                        @endforeach
                        
                </div>
                <!-- <div id="tag_cloud-2" class="widget widget_tag_cloud"><span class="gamma widget-title">Tags</span>
                    <div class="tagcloud"><a href="https://demo2.chethemes.com/techmarket/tag/amazon-like/" class="tag-cloud-link tag-link-82 tag-link-position-1" style="font-size: 22pt;" aria-label="amazon like (9 items)">amazon like</a>
                        <a href="https://demo2.chethemes.com/techmarket/tag/awesome/" class="tag-cloud-link tag-link-83 tag-link-position-2" style="font-size: 22pt;" aria-label="Awesome (9 items)">Awesome</a>
                        <a href="https://demo2.chethemes.com/techmarket/tag/bootstrap/" class="tag-cloud-link tag-link-84 tag-link-position-3" style="font-size: 22pt;" aria-label="bootstrap (9 items)">bootstrap</a>
                        <a href="https://demo2.chethemes.com/techmarket/tag/buy-it/" class="tag-cloud-link tag-link-85 tag-link-position-4" style="font-size: 22pt;" aria-label="buy it (9 items)">buy it</a>
                        <a href="https://demo2.chethemes.com/techmarket/tag/clean-design/" class="tag-cloud-link tag-link-86 tag-link-position-5" style="font-size: 22pt;" aria-label="clean design (9 items)">clean design</a>
                        <a href="https://demo2.chethemes.com/techmarket/tag/electronics/" class="tag-cloud-link tag-link-95 tag-link-position-6" style="font-size: 8pt;" aria-label="electronics (1 item)">electronics</a>
                        <a href="https://demo2.chethemes.com/techmarket/tag/theme/" class="tag-cloud-link tag-link-90 tag-link-position-7" style="font-size: 22pt;" aria-label="theme (9 items)">theme</a>
                        <a href="https://demo2.chethemes.com/techmarket/tag/video-post-format/" class="tag-cloud-link tag-link-98 tag-link-position-8" style="font-size: 8pt;" aria-label="video post format (1 item)">video post format</a>
                        <a href="https://demo2.chethemes.com/techmarket/tag/woocommerce/" class="tag-cloud-link tag-link-91 tag-link-position-9" style="font-size: 22pt;" aria-label="woocommerce (9 items)">woocommerce</a>
                        <a href="https://demo2.chethemes.com/techmarket/tag/wordpress/" class="tag-cloud-link tag-link-92 tag-link-position-10" style="font-size: 22pt;" aria-label="wordpress (9 items)">wordpress</a></div>
                </div> -->
            </div>
            <!-- #secondary -->

        </div>
        <!-- .col-full -->
    </div>
    <!-- .row -->
</div>
@stop()