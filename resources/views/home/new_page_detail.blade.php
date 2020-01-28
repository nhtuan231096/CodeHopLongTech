@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<div class="main-container container">
	<ul class="breadcrumb">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
		<li><a href="{{route('tin_tuc')}}">Tin tức / Dự án</a></li>
		<li><a href="">{{$data->title}}</a></li>
	</ul>
	
	<div class="row">
		<!--Left Part Start -->
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column " id="column-left">
            <div class="module blog-category titleLine">
                <h3 class="modtitle">Danh mục tin tức</h3>
                <div class="modcontent">
                    <ul class="list-group ">
                    	@foreach($news_category as $news_cate)
                        <li class="list-group-item"> <a href="blog-page.html"class="group-item active">{{$news_cate->title}}</a></li>
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
                                <a href="{{route('tin_tuc_chi_tiet',['slug'=>$news_cate])}}}}">
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
                    <span>Latest products</span>
                </h3>
                <div class="modcontent">
                    <div class="so-extraslider" >
                        <div class="yt-content-slider extraslider-inner">
                            <div class="item ">
                                <div class="product-layout item-inner style1 ">
                                    <div class="item-image">
                                        <div class="item-img-info">
                                            <a href="#" target="_self" title="Mandouille short ">
                                                <img src="{{url('public/homev2')}}/image/catalog/demo/product/80/8.jpg" alt="Mandouille short">
                                                </a>
                                        </div>
                                        
                                    </div>
                                    <div class="item-info">
                                        <div class="item-title">
                                            <a href="#" target="_self" title="Mandouille short">Mandouille short </a>
                                        </div>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <div class="content_price price">
                                            <span class="price-new product-price">$55.00 </span>&nbsp;&nbsp;

                                            <span class="price-old">$76.00 </span>&nbsp;

                                        </div>
                                    </div>
                                </div>
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
			<div class="article-info">
				<div class="blog-header">
					<h3>{{$data->title}}</h3>
				</div>
				<div class="article-sub-title">
					<span class="article-author">Post by: <a href="#"> {{$data->created_by}}</a></span>
					<span class="article-date">Ngày đăng: {{date_format($data->created_at,'d-m-Y H:i:s')}}</span>
					<span class="article-comment">0  Bình luận</span>
				</div>
				<div class="form-group">
					<a href="" class="image-popup"><img src="{{url('uploads/news')}}/{{$data->image_cover}}" alt=""></a>
				</div>
				
				<div class="article-description">
					{!!$data->content!!}
				</div>
				
				<div class="panel panel-default related-comment">
					<div class="panel-body">
						<div class="form-group">
							<div id="comments" class="blog-comment-info">
								
								<h3 id="review-title">Để lại bình luận của bạn  </h3>
								<input type="hidden" name="blog_article_reply_id" value="0" id="blog-reply-id">
								<div class="comment-left contacts-form row">
									<div class="col-md-6">
										<b>Họ tên:</b>
										<br>
										<input type="text" name="name" value="" class="form-control">
										<br>
									</div>
									<div class="col-md-12">
										<b>Nội dung bình luận:</b>
										<br>
										<textarea rows="6" cols="50" name="text" class="form-control"></textarea>
										<!-- <span style="font-size: 11px;">Note: HTML is not translated!</span> -->
										<!-- <br> -->
										<!-- <br> -->
									</div>
									<!-- <div class="col-md-4"> -->
										<!-- <b>Enter the code in the box below:</b> -->
										<!-- <br> -->
										<!-- <input type="text" name="captcha" style="" -->
										<!-- value="" class="form-control"> -->
										<!-- <br> -->
										<!-- <div class="form-group"> -->
											<!-- <img src="{{url('public/homev2')}}/image/demo/content/captcha.jpg" alt="" -->
											<!-- id="captcha"> -->
										<!-- </div> -->
									</div>
								</div>
								<br>
								<div class="text-left"><a id="button-comment"
									class="btn buttonGray"><span>Gửi</span></a>
								</div>
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