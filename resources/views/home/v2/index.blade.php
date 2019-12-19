@extends('layouts.v2.index')
@section('mainContainer')
<!-- <script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script> -->
<div class="main-container container">
    <div id="content">
        <div class="content-top-w">
            
            <!-- <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 main-left"> -->
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 main-left module col1 hidden-sm hidden-xs"></div>    
                <!-- <div class="module col1 col-sm-12 col-xs-12">
                    <div class="module category-style">
                        <h3 class="modtitle">Danh mục sản phẩm</h3>
                        <div class="modcontent">
                            <div class="box-category">
                                <ul id="cat_accordion" class="list-group">
                                    @foreach($categorys as $category)
                                    <li class="hadchild"><a href="{{route('view_category',[$category->slug])}}" class="cutom-parent">{{$category->title}}</a>   <span class="button-view  fa fa-plus-square-o"></span>
                                        <ul class="itemMenu">
                                            @foreach($category->childs as $child)
                                            <li class="menuCate">
                                                <a href="{{route('view_category',['slug'=>$child->slug])}}">{{$child->title}}</a>  
                                                <span class="btn-view-child fa fa-plus-square-o"></span>
                                                <ul class="list-child-menu">
                                                    @foreach($child->childs2 as $chil)
                                                    <li class="childMenu">
                                                        <a href="{{route('view_category',['slug'=>$chil->slug])}}">{{$chil->title}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            
                        </div>
                    </div>
                </div> -->
            <!-- </div>     -->
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 main-right">
                <div class="slider-container row"> 
                                
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 col2">
                        <div class="module sohomepage-slider ">
                            <div class="yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                @foreach($sliders as $slider)
                                <div class="yt-content-slide">
                                    <a href="#"><img src="{{url('uploads/slider')}}/{{$slider->cover_image}}" alt="{{$slider->title}}" class="img-responsive"></a>
                                </div>
                                @endforeach
                            </div>
                            
                            <div class="loadeding"></div>
                        </div>
                        
                    </div>

                    
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col3">
                        <div class="module product-simple extra-layout1">
                            <h3 class="modtitle">
                                <span>Bán chạy</span>
                            </h3>
                            <div class="modcontent">
                                <div id="so_extra_slider_1" class="so-extraslider" >
                                    <!-- Begin extraslider-inner -->
                                    <div class="yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                        <div class="item ">
                                            @foreach($best_seller->slice(0, 5) as $product)
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="{{route('view',['slug'=>$product->slug])}}" target="_self" title="{{$product->title}}">
                                                            <img src="{{url('uploads/product')}}/{{$product->cover_image}}" alt="{{$product->cover_image}}">
                                                            </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="{{route('view',['slug'=>$product->slug])}}" target="_self" title="{{$product->title}}">{{$product->title}}</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price">{{$cart->PriceProduct($product)}}</span>&nbsp;&nbsp;

                                                        <!-- <span class="price-old">$76.00 </span>&nbsp; -->

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
                    </div>                
                </div>
            </div>                                        
        </div>
        <div class="row content-main-w">
            
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 main-left">
                
                <div class="module">
                    <div class="banners banners2">
                        <div class="banner">
                            <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/banner1.jpg" alt="image"></a>
                        </div>
                    </div>
                </div>

                <!-- <div class="module product-simple extra-layout1">
                    <h3 class="modtitle">
                        <span>Robot công nghiệp</span>
                    </h3>
                    <div class="modcontent">
                        <div id="so_extra_slider_1" class="so-extraslider" >
                            <div class="yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                <div class="item ">
                                    @foreach($cat_copy as $shn)
                                    @if($shn->sorder==9) 
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="{{route('view_category',['slug'=>$shn->slug])}}" target="_self" title="{{$shn->title}}"><img src="{{url('uploads/category')}}/{{$shn->cover_image}}" alt="{{$shn->cover_image}}"></a>
                                            </div>                                        
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="{{route('view_category',['slug'=>$shn->slug])}}" target="_self" title="Mandouille short">{{$shn->title}}</a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price"> </span>

                                                <span class="price-old"> </span>

                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach 
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="module so-latest-blog blog-sidebar">

                    <h3 class="modtitle"><span>Bài viết mới nhất</span></h3>
                    <div class="modcontent clearfix">

                        <div class="so-blog-external buttom-type1 button-type1">
                            <div class="blog-external-simple">
                                @foreach($latest_post as $news)
                                <div class="cat-wrap">
                                    <div class="media">

                                        <div class="item item-1">
                                            <div class="media-left">
                                                <a href="{{route('tin_tuc_chi_tiet',['slug'=>$news->slug])}}" target="_self">
                                                <img src="{{url('uploads/news')}}/{{$news->image_cover}}" alt="{{$news->title}}" class="media-object">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                <a href="#" title="Biten demons lector in henderit in vulp" target="_self">{{$news->title}}</a>
                                                </h4>
                                                <div class="media-content">
                                                    <div class="media-date-added"><i class="fa fa-calendar"></i> {{$news->created_at}}</div>         
                                                    <div class="media-subcontent">
                                                    <span class="media-comment"><i class="fa fa-comments"></i>0  Comment</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
                <div class="module">
                    <div class="policy-w">
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/call-us.jpg" alt="image"></a>
                        <ul class="block-infos">
                            <li class="info1">
                              <div class="inner">
                              <i class="fa fa-plane"></i>
                              <div class="info-cont">
                              <a href="#">Miễn phí</a>
                              <p>giao hàng nội thành</p>
                              </div>
                              </div>
                            </li>
                            <li class="info2">
                              <div class="inner">
                              <i class="fa fa-money"></i>
                              <div class="info-cont">
                              <a href="#">An toàn</a>
                              <p>Giao dịch tài chính</p>
                              </div>
                              </div>
                            </li>
                            <li class="info3">
                              <div class="inner">
                              <i class="fa fa-gift"></i>
                              <div class="info-cont">
                              <a href="#"> 1.000.000+</a>
                              <p>Sản phẩm giá tốt</p>
                              </div>
                              </div>
                            </li>
                            <li class="info4">
                              <div class="inner">
                              <i class="fa fa-shield"></i>
                              <div class="info-cont">
                              <a href="#">365+ ngày</a>
                              <p>Bảo hành sản phẩm</p>
                              </div>
                              </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="module extra">
                    <h3 class="modtitle">
                        <span class="deal-hot">
                            <strong>Deal HOT</strong> tháng {{date('m',strtotime($date))}}</h2>
                        </span>
                    </h3>
                    <div class="modcontent">
                        <div id="so_extra_slider_1" class="so-extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class="products-list yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                @foreach($promotions as $promotion)
                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                
                                                <div class="product-image-container second_img">
                                                    <a href="{{route('view',['slug'=>$promotion->slug])}}" target="_self" title="Duis aute irure ">
                                                        <img src="{{url('uploads/product')}}/{{$promotion->cover_image}}" class="img-1 img-responsive" alt="{{$promotion->cover_image}}">
                                                        <?php $cover_image_pro_2 = isset($promotion->cover_image_2) ? $promotion->cover_image_2 : $promotion->cover_image;?>
                                                        <img src="{{url('uploads/product')}}/{{$cover_image_pro_2}}" class="img-2 img-responsive" alt="{{$promotion->cover_image}}">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view',['slug'=>$promotion->slug])}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <span>
                                                        <a class="addToCart addCart" href="{{route('add_cart',['id'=>$promotion->id])}}">
                                                            Thêm giỏ hàng 
                                                        </a>
                                                    </span> 
                                                   <!--  <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                    </button> -->
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>
                                                    <h4><a href="{{route('view',['slug'=>$promotion->slug])}}" title="Pastrami bacon" target="_self">{{$promotion->title}} </a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                  <span class="price-new">{{$cart->PriceProduct($promotion)}}</span>

                                                </p>
                                            </div>

                                            
                                        </div>
                                    </div>      
                                </div>
                                @endforeach
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>

                
                
                <!-- <div class="module testimonials">
                    <h3 class="modtitle"><span>Testimonials</span></h3>
                    <div class="slider-testimonials">
                        <div class="yt-content-slider contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-hoverpause="yes">
                            <div class="item">
                                <div class="img"><img src="{{url('public/homev2')}}/image/catalog/demo/client/user-1.jpg" alt="Image"></div>
                                <div class="name">Johny Walker</div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore”</p>          
                            </div>
                            <div class="item">
                                <div class="img"><img src="{{url('public/homev2')}}/image/catalog/demo/client/user-2.jpg" alt="Image"></div>
                                <div class="name">Jen Nguyen</div>
                                <p>“Ut enim ad minim veniam, lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incidi”</p>          
                            </div>
                            <div class="item">
                                <div class="img"><img src="{{url('public/homev2')}}/image/catalog/demo/client/user-3.jpg" alt="Image"></div>
                                <div class="name">Vin Jame</div>
                                <p>“sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, lorem ipsum dolor sit amet, consectetur adip”</p>          
                            </div>
                        </div>
                    </div>
                </div> -->
                

                <div class="module">
                    <div class="banners banners5">
                        <div class="banner">
                          <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/banner2.jpg" alt="image"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 main-right">
                

                <div class="static-cates">
                    <ul>
                        <li>
                            <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/cat1.jpg" alt="image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/cat2.jpg" alt="image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/cat3.jpg" alt="image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/cat4.jpg" alt="image"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/cat5.jpg" alt="image"></a>
                        </li>
                    </ul>
                </div>

                <!-- Deals -->
                @if(isset($flash_sale->products))
                <div class="module deals-layout1">
                    <div class="head-title">
                        <div class="modtitle">
                            <span>Flash Sale</span>
                            <div class="cslider-item-timer">
                              <div class="product_time_maxprice">
                                
                                <div class="item-time">
                                  <div class="item-timer">
                                    <div class="second-counter" data-date="{{$flash_sale->end_time}}">
                                        <div class="time-item time-day">
                                            <div class="num-time counter-days">00</div>
                                            <div class="name-time">Day </div>
                                        </div>
                                        <div class="time-item time-hour">
                                            <div class="num-time counter-hours">00</div>
                                            <div class="name-time">Hour </div>
                                        </div>
                                        <div class="time-item time-min">
                                            <div class="num-time counter-minutes">00</div>
                                            <div class="name-time">Min </div>
                                        </div>
                                        <div class="time-item time-sec">
                                            <div class="num-time counter-seconds">00</div>
                                            <div class="name-time">Sec </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                              
                              <a class="viewall" href="{{route('flash-sale')}}">Xem thêm</a>
                            
                        </div>    
                    </div>
                    <div class="modcontent">
                        <div id="so_deal_1" class="so-deal style1">
                            <div class="extraslider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="6" data-items_column0="5" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                @foreach($flash_sale->products as $itemProduct)
                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                <div class="box-label">
                                                    <span class="label-product label-sale">-{{$itemProduct->discount}}%</span>
                                                </div>
                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Pastrami bacon">
                                                        <img style="height: 156px" src="{{url('uploads/product')}}/{{$itemProduct->cover_image}}" class="img-1 img-responsive" alt="">
                                                        <img style="height: 156px" src="{{url('uploads/product')}}/{{$itemProduct->cover_image}}" class="img-2 img-responsive" alt="">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view',['slug'=>$itemProduct->slug])}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <span>
                                                        <a class="addToCart addCart" href="{{route('add_cart',['id'=>$itemProduct->id])}}">
                                                            Thêm giỏ hàng 
                                                        </a>
                                                    </span>   
                                                    <!-- <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
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
                                                    <h4><a href="product.html" title="Pastrami bacon" target="_self">{{$itemProduct->title}}</a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                  <span class="price-new">{{$cart->PriceProduct($itemProduct)}}</span>
                                                  <span class="price-old">{{number_format($itemProduct->list_price)}}VNĐ</span>
                                                </p>
                                            </div>

                                            <div class="item-available">
                                                <div class="available">
                                                  <span class="color_width" data-title="50%" data-toggle='tooltip' style="width: 50%"></span>
                                                </div>                          
                                                <p class="a2">Sold: <b>{{$itemProduct->sold}}</b>  </p>
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                                @endforeach
                            </div>
                        </div>
                      </div>
                </div>
                @endif
                <!-- End Deals -->

                <!-- Banners -->
                <div class="banners3 banners">
                    <div class="item1">
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/banner3.jpg" alt="image"></a>
                    </div>
                    <div class="item2">
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/banner4.jpg" alt="image"></a>
                    </div>
                    <div class="item3">
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/banner5.jpg" alt="image"></a>
                    </div>
                </div>
                <!-- end Banners -->

                <!-- Category Slider 1 -->
                <!-- <div id="so_category_slider_1" class="so-category-slider container-slider module cateslider1">
                    <div class="modcontent">                                                                
                        <div class="page-top">
                            <div class="page-title-categoryslider">Sản phẩm mới</div>
                        </div>

                        <div class="categoryslider-content">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Technology" target="_self">
                                  <img class="categories-loadimage" alt="Technology" src="{{url('public/homev2')}}/image/catalog/demo/category/tab1.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    @foreach($new_products as $promotion)
                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    <div class="box-label">
                                                        <span class="label-product label-new">New</span>
                                                    </div>
                                                    <div class="product-image-container second_img">
                                                        <a href="{{route('view',['slug'=>$promotion->slug])}}" target="_self" title="{{$promotion->title}}">
                                                            <img src="{{url('uploads/product')}}/{{$promotion->cover_image}}" class="img-1 img-responsive" alt="{{$promotion->cover_image}}">
                                                            <?php $cover_image_2 = isset($promotion->cover_image_2) ? $promotion->cover_image_2 : $promotion->cover_image;?>
                                                            <img src="{{url('uploads/product')}}/{{$cover_image_2}}" class="img-2 img-responsive" alt="{{$cover_image_2}}">
                                                        </a>
                                                    </div>
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="#" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                            <span>
                                                                <a class="addToCart addCart" href="{{route('add_cart',['id'=>$promotion->id])}}">
                                                                    Thêm giỏ hàng 
                                                                </a>
                                                            </span>   
                                                        </button>        
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
                                                        <h4><a href="{{route('view',['slug'=>$promotion->slug])}}" title="{{$promotion->title}}" target="_self">{{$promotion->title}}</a></h4>  
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">{{$cart->PriceProduct($promotion)}}</span>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>
                                    @endforeach                               
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- end Category Slider 1 -->
                
                <!-- Listing tabs -->
                <div class="module listingtab-layout1">
                    
                    <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                        <div class="loadeding"></div>
                        <div class="ltabs-wrap">
                            <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="3" data-sm="2" data-xs="1" data-margin="30">
                                <!--Begin Tabs-->
                                <div class="ltabs-tabs-wrap"> 
                                <span class="ltabs-tab-selected">Bathroom</span> <span class="ltabs-tab-arrow">▼</span>
                                    <div class="item-sub-cat">
                                        <ul class="ltabs-tabs cf">
                                            <li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">Bán chạy</span> </li>
                                            <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18"> <span class="ltabs-tab-label">Giá Đặc biệt</span> </li>
                                            <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"> <span class="ltabs-tab-label">Sản phẩm mới</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Tabs-->
                            </div>
                        
                            <div class="ltabs-items-container products-list grid">
                                <!--Begin Items-->
                                <div class="ltabs-items items-category-20 grid ltabs-items-selected ltabs-items-loaded" data-total="16">
                                    <div class="ltabs-items-inner ltabs-slider">
                                        @foreach($best_seller as $product)
                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                        <div class="product-image-container second_img">
                                                            <a href="{{route('view',['slug'=>$product->slug])}}" target="_self" title="">
                                                                <img src="{{url('uploads/product')}}/{{$product->cover_image}}" alt="{{$product->cover_image}}" class="img-1 img-responsive">
                                                                <img src="{{url('uploads/product')}}/{{$product->cover_image}}" alt="{{$product->cover_image}}" class="img-2 img-responsive">
                                                            </a>
                                                        </div>
                                                        <!--quickview--> 
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view',['slug'=>$product->slug])}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Chi tiết</span></a>
                                                        </div>                                                     
                                                        <!--end quickview-->
                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <span>
                                                                    @if($product->price > 0)
                                                                   <!--  <a class="addToCart addCart" href="{{route('add_cart',['id'=>$product->id])}}">
                                                                        Thêm giỏ hàng 
                                                                    </a> -->
                                                                    <button type="button" class="addToCart addCart" title="Add to cart"><a href="{{route('add_cart',['id'=>$product->id])}}"><span style="color: #fff">Thêm vào giỏ</span></a></button>
                                                                    @else
                                                                    <a class="addToCart addCart" href="{{route('view',['slug'=>$product->slug])}}">
                                                                        Chi tiết
                                                                    </a>
                                                                    @endif
                                                                    <button type="button" class="wishlist btn-button" title="Add to Wish List"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                                    </button>
                                                                    <button type="button" class="compare btn-button" title="Compare this Product"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                                    </button>
                                                              </span>  
                                                        </div>
                                                        <div class="caption hide-cont">
                                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4><a href="{{route('view',['slug'=>$product->slug])}}" title="Pastrami bacon" target="_self">{{$product->title}}</a></h4>
                                                            
                                                        </div>
                                                        <p class="price">
                                                          <span class="price-new">{{$cart->PriceProduct($product)}}</span>
                                                          
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>      
                                        </div>
                                        @endforeach
                                    </div>                              
                                </div>
                                <div class="ltabs-items items-category-18 grid ltabs-items-loaded" data-total="16">
                                   <div class="ltabs-items-inner ltabs-slider owl2-carousel owl2-theme owl2-loaded">
                                      <div class="owl2-stage-outer">
                                         <div class="owl2-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1701px;">
                                            @foreach($promotions->slice(0, 5) as $promotion)
                                            <div class="owl2-item active" style="width: 213px; margin-right: 30px;">
                                               <div class="item">
                                                  <div class="item-inner product-layout transition product-grid">
                                                     <div class="product-item-container">
                                                        <div class="left-block left-b">
                                                           <div class="product-image-container second_img">
                                                              <a href="{{route('view',['slug'=>$promotion->slug])}}" target="_self" title="">
                                                              <img src="{{url('uploads/product')}}/{{$promotion->cover_image}}" class="img-1 img-responsive" alt="$promotion->cover_image">
                                                              <?php $cover_image_new_2 = isset($promotion->cover_image_2) ? $promotion->cover_image_2 : $promotion->cover_image;?>
                                                              <img src="{{url('uploads/product')}}/{{$cover_image_new_2}}" class="img-2 img-responsive" alt="{{$promotion->cover_image}}">
                                                              </a>
                                                           </div>
                                                           <!--quickview--> 
                                                           <div class="so-quickview">
                                                              <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view',['slug'=>$promotion->slug])}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                           </div>
                                                           <!--end quickview-->
                                                        </div>
                                                        <div class="right-block">
                                                           <div class="button-group so-quickview cartinfo--left">
                                                              <span>
                                                                @if($promotion->price > 0)
                                                                <a class="addToCart addCart" href="{{route('add_cart',['id'=>$promotion->id])}}">
                                                                    Thêm giỏ hàng 
                                                                </a>
                                                                @else
                                                                <a class="addToCart addCart" href="{{route('view',['slug'=>$promotion->slug])}}">
                                                                    Chi tiết
                                                                </a>
                                                                @endif
                                                              </span>   
                                                           </div>
                                                           <div class="caption hide-cont">
                                                              <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                              </div>
                                                              <h4><a href="{{route('view',['slug'=>$promotion->slug])}}" title="Pastrami bacon" target="_self">{{$promotion->title}}</a></h4>
                                                           </div>
                                                           <p class="price">
                                                              <span class="price-new">{{$cart->PriceProduct($promotion)}}</span>
                                                           </p>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                            @endforeach
                                         </div>
                                      </div>
                                      <!-- <div class="owl2-controls">
                                         <div class="owl2-nav">
                                            <div class="owl2-prev" style=""></div>
                                            <div class="owl2-next" style=""></div>
                                         </div>
                                         <div style="display: none;" class="owl2-dots"></div>
                                      </div> -->
                                   </div>
                                </div>
                                <div class="ltabs-items  items-category-25 grid ltabs-items-loaded" data-total="16">
                                   <div class="ltabs-items-inner ltabs-slider owl2-carousel owl2-theme owl2-loaded">
                                      <div class="owl2-stage-outer">
                                         <div class="owl2-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1701px;">
                                            @foreach($new_products->slice(0, 5) as $new_product)
                                            <div class="owl2-item active" style="width: 213px; margin-right: 30px;">
                                               <div class="item">
                                                  <div class="item-inner product-layout transition product-grid">
                                                     <div class="product-item-container">
                                                        <div class="left-block left-b">
                                                           <div class="product-image-container second_img">
                                                              <a href="{{route('view',['slug'=>$new_product->slug])}}" target="_self" title="">
                                                              <img src="{{url('uploads/product')}}/{{$new_product->cover_image}}" class="img-1 img-responsive" alt="">
                                                              <img src="{{url('uploads/product')}}/{{$new_product->cover_image}}" class="img-2 img-responsive" alt="">
                                                              </a>
                                                           </div>
                                                           <!--quickview--> 
                                                           <div class="so-quickview">
                                                              <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view',['slug'=>$new_product->slug])}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                           </div>
                                                           <!--end quickview-->
                                                        </div>
                                                        <div class="right-block">
                                                           <div class="button-group so-quickview cartinfo--left">
                                                                <span>
                                                                    @if($new_product->price > 0)
                                                                    <a class="addToCart addCart" href="{{route('add_cart',['id'=>$new_product->id])}}">
                                                                        Thêm giỏ hàng 
                                                                    </a>
                                                                    @else
                                                                    <a class="addToCart addCart" href="{{route('view',['slug'=>$new_product->slug])}}">
                                                                        Chi tiết
                                                                    </a>
                                                                    @endif
                                                              </span>  
                                                           </div>
                                                           <div class="caption hide-cont">
                                                              <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                              </div>
                                                              <h4><a href="{{route('view',['slug'=>$new_product->slug])}}" title="Pastrami bacon" target="_self">{{$new_product->title}}</a></h4>
                                                           </div>
                                                           <p class="price">
                                                              <span class="price-new">{{$cart->PriceProduct($new_product)}}</span>
                                                           </p>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                            @endforeach
                                         </div>
                                      </div>
                                      <!-- <div class="owl2-controls">
                                         <div class="owl2-nav">
                                            <div class="owl2-prev" style=""></div>
                                            <div class="owl2-next" style=""></div>
                                         </div>
                                         <div style="display: none;" class="owl2-dots"></div>
                                      </div> -->
                                   </div>
                                </div>


                                <!--End Items-->
                            </div>
                            
                        </div>   
                    </div>
                </div>
                <!-- end Listing tabs -->        

                <!-- Category Slider 2 -->
                <div id="so_category_slider_1" class="so-category-slider container-slider module cateslider2">
                    <div class="modcontent">                                                                
                        <div class="page-top">
                            <div class="page-title-categoryslider">Big Sale</div>
                            <!-- <div class="item-sub-cat">
                                <ul>
                                    <li><a href="#" title="Smartphone" target="_self">Living room</a></li>
                                    <li><a href="#" title="Tablets" target="_self">Bathroom</a></li>
                                    <li><a href="#" title="Computer" target="_self">Bedroom</a></li>
                                    <li><a href="#" title="Accessories" target="_self">Accessories</a></li>
                                    <li><a href="#" title="Hitech" target="_self">Decor</a></li>
                                </ul>
                            </div>  -->
                        </div>

                        <div class="categoryslider-content">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Funiture & Decor" target="_self">
                                  <img class="categories-loadimage" alt="Funiture & Decor" src="{{url('public/homev2')}}/image/catalog/demo/category/tab2.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    @foreach($promotions as $new_product)        
                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    <!-- <div class="box-label">
                                                        <span class="label-product label-new">New</span>
                                                    </div> -->
                                                    <div class="product-image-container second_img">
                                                        <a href="{{route('view',['slug'=>$new_product->slug])}}" target="_self" title="Sunt inculpa qui">
                                                            <img src="{{url('uploads/product')}}/{{$new_product->cover_image}}" class="img-1 img-responsive" alt="$new_product->cover_image">
                                                            <?php $cover_image_new_2 = isset($new_product->cover_image_2) ? $new_product->cover_image_2 : $new_product->cover_image;?>
                                                            <img src="{{url('uploads/product')}}/{{$cover_image_new_2}}" class="img-2 img-responsive" alt="{{$new_product->cover_image}}">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view',['slug'=>$new_product->slug])}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <span>
                                                            @if($new_product->price > 0)
                                                            <a class="addToCart addCart" href="{{route('add_cart',['id'=>$new_product->id])}}">
                                                                Thêm giỏ hàng 
                                                            </a>
                                                            @else
                                                            <a class="addToCart addCart" href="{{route('view',['slug'=>$new_product->slug])}}">
                                                                Chi tiết
                                                            </a>
                                                            @endif
                                                        </span>    
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
                                                        <h4><a href="{{route('view',['slug'=>$new_product->slug])}}" title="Pastrami bacon" target="_self">{{$new_product->title}}</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">{{$cart->PriceProduct($new_product)}}</span>
                                                      
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Category Slider 2 -->

                <!-- Category Slider 3 -->
                <div id="so_category_slider_1" class="so-category-slider container-slider module cateslider1">
                    <div class="modcontent">                                                                
                        <div class="page-top">
                            <div class="page-title-categoryslider">Gợi ý giành riêng cho bạn</div>
                            <div class="item-sub-cat">
                                <ul>
                                    <li><a title="Schneider" id="menu_schneider" target="_self">Schneider</a></li>
                                    <li><a title="Omron" id="menu_omron" target="_self">Omron</a></li>
                                    <li><a title="Autonics" id="menu_autonics" target="_self">Autonics</a></li>
                                    <li><a title="Idec" id="menu_idec" target="_self">Idec</a></li>
                                    <li><a title="Mitsubishi" id="menu_mitsubishi" target="_self">Misubishi</a></li>
                                    <li><a title="LS" id="menu_ls" target="_self">LS</a></li>
                                    <li><a title="Hanyoung" target="_self">Hanyoung</a></li>
                                    <li><a title="Delta" target="_self">Delta</a></li>
                                </ul>
                            </div> 
                        </div>

                        <div class="categoryslider-content" id="schneider">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Fashion & Accessories" target="_self">
                                  <img class="categories-loadimage" alt="Fashion & Accessories" src="{{url('public/homev2')}}/image/catalog/demo/category/tab3.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    @foreach($cat_copy as $shn)
                                    @if($shn->sorder==1)
                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="{{route('view_category',['slug'=>$shn->slug])}}" target="_self" title="">
                                                            <img height="100" src="{{url('uploads/category')}}/{{$shn->cover_image}}" class="img-1 img-responsive" alt="{{$shn->cover_image}}">
                                                            <?php $cover_image_cate_2 = isset($shn->cover_image_2) ? $shn->cover_image_2 : $shn->cover_image;?>
                                                            <img height="100" src="{{url('uploads/category')}}/{{$cover_image_cate_2}}" class="img-2 img-responsive" alt="{{$shn->cover_image}}">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view_category',['slug'=>$shn->slug])}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="">
                                                            <span>Chi tiết </span>   
                                                        </button>
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    
                                                            </div>
                                                            <span class="rating-num"></span>
                                                        </div>
                                                        <h4><a href="{{route('view_category',['slug'=>$shn->slug])}}" title="Pastrami bacon" target="_self">{{$shn->title}}</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <!-- <span class="price-new">$80.00</span> -->
                                                      
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>
                                    @endif
                                    @endforeach                           
                            </div>
                        </div>

                        <div class="categoryslider-content" id="omron">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Fashion & Accessories" target="_self">
                                  <img class="categories-loadimage" alt="Fashion & Accessories" src="{{url('public/homev2')}}/image/catalog/demo/category/tab3.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    @foreach($cat_copy as $om)
                                    @if($om->sorder==2)
                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="{{route('view_category',['slug'=>$om->slug])}}" target="_self" title="">
                                                            <img height="100" src="{{url('uploads/category')}}/{{$om->cover_image}}" class="img-1 img-responsive" alt="{{$om->cover_image}}">
                                                            <?php $cover_image_cate_2 = isset($om->cover_image_2) ? $om->cover_image_2 : $om->cover_image;?>
                                                            <img height="100" src="{{url('uploads/category')}}/{{$cover_image_cate_2}}" class="img-2 img-responsive" alt="{{$om->cover_image}}">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view_category',['slug'=>$om->slug])}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="">
                                                            <span>Chi tiết </span>   
                                                        </button>
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    
                                                            </div>
                                                            <span class="rating-num"></span>
                                                        </div>
                                                        <h4><a href="{{route('view_category',['slug'=>$om->slug])}}" title="Pastrami bacon" target="_self">{{$om->title}}</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <!-- <span class="price-new">$80.00</span> -->
                                                      
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>
                                    @endif
                                    @endforeach                           
                            </div>
                        </div>

                        <div class="categoryslider-content" id="autonics">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Fashion & Accessories" target="_self">
                                  <img class="categories-loadimage" alt="Fashion & Accessories" src="{{url('public/homev2')}}/image/catalog/demo/category/tab3.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    @foreach($cat_copy as $auto)
                                    @if($auto->sorder==3)
                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="{{route('view_category',['slug'=>$auto->slug])}}" target="_self" title="">
                                                            <img height="100" src="{{url('uploads/category')}}/{{$auto->cover_image}}" class="img-1 img-responsive" alt="{{$auto->cover_image}}">
                                                            <?php $cover_image_cate_2 = isset($auto->cover_image_2) ? $auto->cover_image_2 : $auto->cover_image;?>
                                                            <img height="100" src="{{url('uploads/category')}}/{{$cover_image_cate_2}}" class="img-2 img-responsive" alt="{{$auto->cover_image}}">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view_category',['slug'=>$auto->slug])}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="">
                                                            <span>Chi tiết </span>   
                                                        </button>
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    
                                                            </div>
                                                            <span class="rating-num"></span>
                                                        </div>
                                                        <h4><a href="{{route('view_category',['slug'=>$auto->slug])}}" title="Pastrami bacon" target="_self">{{$auto->title}}</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <!-- <span class="price-new">$80.00</span> -->
                                                      
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>
                                    @endif
                                    @endforeach                           
                            </div>
                        </div>

                        <div class="categoryslider-content" id="idec">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Fashion & Accessories" target="_self">
                                  <img class="categories-loadimage" alt="Fashion & Accessories" src="{{url('public/homev2')}}/image/catalog/demo/category/tab3.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    @foreach($cat_copy as $id)
                                    @if($id->sorder==4)
                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="{{route('view_category',['slug'=>$id->slug])}}" target="_self" title="">
                                                            <img height="100" src="{{url('uploads/category')}}/{{$id->cover_image}}" class="img-1 img-responsive" alt="{{$id->cover_image}}">
                                                            <?php $cover_image_cate_2 = isset($id->cover_image_2) ? $id->cover_image_2 : $id->cover_image;?>
                                                            <img height="100" src="{{url('uploads/category')}}/{{$cover_image_cate_2}}" class="img-2 img-responsive" alt="{{$id->cover_image}}">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view_category',['slug'=>$id->slug])}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="">
                                                            <span>Chi tiết </span>   
                                                        </button>
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    
                                                            </div>
                                                            <span class="rating-num"></span>
                                                        </div>
                                                        <h4><a href="{{route('view_category',['slug'=>$id->slug])}}" title="Pastrami bacon" target="_self">{{$id->title}}</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <!-- <span class="price-new">$80.00</span> -->
                                                      
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>
                                    @endif
                                    @endforeach                           
                            </div>
                        </div>

                        <div class="categoryslider-content" id="mitsubishi">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Fashion & Accessories" target="_self">
                                  <img class="categories-loadimage" alt="Fashion & Accessories" src="{{url('public/homev2')}}/image/catalog/demo/category/tab3.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    @foreach($cat_copy as $mit)
                                    @if($mit->sorder==6)
                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="{{route('view_category',['slug'=>$mit->slug])}}" target="_self" title="">
                                                            <img height="100" src="{{url('uploads/category')}}/{{$mit->cover_image}}" class="img-1 img-responsive" alt="{{$mit->cover_image}}">
                                                            <?php $cover_image_cate_2 = isset($mit->cover_image_2) ? $mit->cover_image_2 : $mit->cover_image;?>
                                                            <img height="100" src="{{url('uploads/category')}}/{{$cover_image_cate_2}}" class="img-2 img-responsive" alt="{{$mit->cover_image}}">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view_category',['slug'=>$mit->slug])}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="">
                                                            <span>Chi tiết </span>   
                                                        </button>
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    
                                                            </div>
                                                            <span class="rating-num"></span>
                                                        </div>
                                                        <h4><a href="{{route('view_category',['slug'=>$mit->slug])}}" title="Pastrami bacon" target="_self">{{$mit->title}}</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <!-- <span class="price-new">$80.00</span> -->
                                                      
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>
                                    @endif
                                    @endforeach                           
                            </div>
                        </div>

                        <div class="categoryslider-content" id="ls">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Fashion & Accessories" target="_self">
                                  <img class="categories-loadimage" alt="Fashion & Accessories" src="{{url('public/homev2')}}/image/catalog/demo/category/tab3.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    @foreach($cat_copy as $ls)
                                    @if($ls->sorder==5)
                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="{{route('view_category',['slug'=>$ls->slug])}}" target="_self" title="">
                                                            <img height="100" src="{{url('uploads/category')}}/{{$ls->cover_image}}" class="img-1 img-responsive" alt="{{$ls->cover_image}}">
                                                            <?php $cover_image_cate_2 = isset($ls->cover_image_2) ? $ls->cover_image_2 : $ls->cover_image;?>
                                                            <img height="100" src="{{url('uploads/category')}}/{{$cover_image_cate_2}}" class="img-2 img-responsive" alt="{{$ls->cover_image}}">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view_category',['slug'=>$ls->slug])}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="">
                                                            <span>Chi tiết </span>   
                                                        </button>
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    
                                                            </div>
                                                            <span class="rating-num"></span>
                                                        </div>
                                                        <h4><a href="{{route('view_category',['slug'=>$ls->slug])}}" title="Pastrami bacon" target="_self">{{$ls->title}}</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <!-- <span class="price-new">$80.00</span> -->
                                                      
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>
                                    @endif
                                    @endforeach                           
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Category Slider 3 -->

                <!-- Banners -->
                <div class="banners4 banners">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/bn1.jpg" alt="image"></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/bn2.jpg" alt="image"></a>
                        </div>
                    </div>
                </div>
                <!-- end Banners -->

                <!-- Listing tabs -->
                <!-- <div class="module listingtab-layout1">
                    
                    <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                        <div class="loadeding"></div>
                        <div class="ltabs-wrap">
                            <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="3" data-sm="2" data-xs="1" data-margin="30">
                                <div class="ltabs-tabs-wrap"> 
                                <span class="ltabs-tab-selected">Bathroom</span> <span class="ltabs-tab-arrow">▼</span>
                                    <div class="item-sub-cat">
                                        <ul class="ltabs-tabs cf">
                                            <li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">Robot công nghiệp</span> </li>
                                            <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18"> <span class="ltabs-tab-label">Tủ điện</span> </li>
                                            <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"> <span class="ltabs-tab-label">Chế tạo máy</span> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="ltabs-items-container products-list grid">
                                <div class="ltabs-items ltabs-items-selected items-category-20" data-total="16">
                                    <div class="ltabs-items-inner ltabs-slider">
                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                        
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self" title="Ullamco occaeca">
                                                                <img src="{{url('public/homev2')}}/image/catalog/demo/product/270/h1.jpg" class="img-1 img-responsive" alt="image1">
                                                                <img src="{{url('public/homev2')}}/image/catalog/demo/product/270/h7.jpg" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                        </div>                                                     

                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                                <span>Add to cart </span>   
                                                            </button>
                                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                            </button>
                                                            
                                                        </div>
                                                        <div class="caption hide-cont">
                                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4><a href="product.html" title="Pastrami bacon" target="_self">Ullamco occaeca </a></h4>
                                                            
                                                        </div>
                                                        <p class="price">
                                                          <span class="price-new">$45.00</span>
                                                          
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>      
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="ltabs-items items-category-18 grid" data-total="16">
                                    <div class="ltabs-loading"></div>
                                    
                                </div>
                                <div class="ltabs-items  items-category-25 grid" data-total="16">
                                    <div class="ltabs-loading"></div>
                                </div>
                            </div>
                            
                        </div>   
                    </div>
                </div> -->
                <!-- end Listing tabs -->
                
                <!-- Slider Brands -->
                <div class="slider-brands col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="yt-content-slider contentslider" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="7" data-items_column0="7" data-items_column1="5" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes"
                            data-pagination="no" data-lazyload="yes" data-loop="yes">
                        @foreach($partners as $partner)
                        <div class="item">
                            <a href="{{$partner->slug}}">
                                <img width="145" height="50" src="{{url('uploads/partner')}}/{{$partner->cover_image}}" alt="{{$partner->title}}">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div> 
                <!-- Slider Brands -->


            </div>
            
        </div>
        
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($){
    window.loopcounter = function( idWarp ) {
        if(typeof idWarp!= 'undefined'){
            var date = $('.'+idWarp).data('date');
            if(typeof date != 'undefined'){
                var start = new Date( date.replace(/-/g, "/") ),
                end   = new Date(),
                diff  = new Date( start - end ),
                time  = diff/1000/60/60/24;

                var day = parseInt(time);
                var hour = parseInt( 24 - (diff/1000/60/60)%24 );
                var min = parseInt( 60 - (diff/1000/60)%60 );
                var sec = parseInt( 60 - (diff/1000)%60 );
                
                counterDate(idWarp,day,hour,min,sec);

                var interval = setInterval(function () {
                    if( sec==0 && min!=0 ){
                        min--;
                        sec = 60;
                    }
                    if(min == 0 && sec == 0 && hour!=0 ){
                        hour--;
                        min = 59;
                        sec = 60;
                    }
                    if(min == 0 && sec == 0 && hour == 0 && day!=0 ){
                        day--;
                        hour = 23;
                        min = 59;
                        sec = 60;
                    }
                    if(min == 0 && sec == 0 && hour == 0 && day==0 ){
                        clearInterval(interval);
                    }else{
                        sec--;
                    }
                    counterDate(idWarp,day,hour,min,sec);
                }, 1000 );

                function counterDate(id,day,hour,min,sec){
                    if (time < 0) { day = hour = min = sec = 0; }
                    $( '.'+id+' .counter-days').html( counterDoubleDigit(day) );
                    $( '.'+id+' .counter-hours').html( counterDoubleDigit(hour) );
                    $( '.'+id+' .counter-minutes').html( counterDoubleDigit(min) );
                    $( '.'+id+' .counter-seconds').html( counterDoubleDigit(sec) );
                }
                function counterDoubleDigit( arg ){
                    if( arg.toString().length <= 1 ){
                        arg = ('0' + arg).slice(-2);
                    }
                    return arg;
                }
            }
        }
    }
//loopcounter( 'counter-id' );
});
    $(document).ready(function(){
        loopcounter('second-counter');
    });
</script>
<script type="text/javascript">
    $('#schneider').show();
    $('#omron').hide();
    $('#autonics').hide();
    $('#idec').hide();
    $('#mitsubishi').hide();
    $('#ls').hide();

    $(document).ready(function(){
        $('#menu_schneider').click(function(){
            $('#schneider').show();
            $('#omron').hide();
            $('#autonics').hide();
            $('#idec').hide();
            $('#mitsubishi').hide();
            $('#ls').hide();
        });
        $('#menu_omron').click(function(){
            $('#omron').show();
            $('#schneider').hide();
            $('#autonics').hide();
            $('#idec').hide();
            $('#mitsubishi').hide();
            $('#ls').hide();
        });
        $('#menu_autonics').click(function(){
            $('#omron').hide();
            $('#schneider').hide();
            $('#autonics').show();
            $('#idec').hide();
            $('#mitsubishi').hide();
            $('#ls').hide();
        });
        $('#idec').click(function(){
            $('#schneider').hide();
            $('#omron').hide();
            $('#autonics').hide();
            $('#idec').show();
            $('#mitsubishi').hide();
            $('#ls').hide();
        });
        $('#mitsubishi').click(function(){
            $('#schneider').hide();
            $('#omron').hide();
            $('#autonics').hide();
            $('#idec').hide();
            $('#mitsubishi').show();
            $('#ls').hide();
        });
        $('#ls').click(function(){
            $('#schneider').hide();
            $('#omron').hide();
            $('#autonics').hide();
            $('#idec').hide();
            $('#mitsubishi').hide();
            $('#ls').show();
        });
    });
</script>
@stop()

