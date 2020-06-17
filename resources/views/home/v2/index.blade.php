@extends('layouts.v2.index')
@section('mainContainer')
<div class="main-container container">
    <div id="content">
        <div class="content-top-w">
            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 main-left module col1 hidden-sm hidden-xs"></div>    
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
                                <span>Top Bán chạy</span>
                            </h3>
                            <div class="modcontent">
                                <div id="so_extra_slider_1" class="so-extraslider" >
                                    <!-- Begin extraslider-inner -->
                                    <div class="yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                        <div class="item ">
                                            @foreach($best_seller->slice(0, 4) as $itemProduct)
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="{{route('view',['slug'=>$itemProduct->slug])}}" target="_self" title="{{$itemProduct->title}}">
                                                            <?php $urlImage = ($itemProduct->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                                            <img src="{{url($urlImage)}}/{{$itemProduct->cover_image}}" alt="{{$itemProduct->cover_image}}">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="{{route('view',['slug'=>$itemProduct->slug])}}" target="_self" title="{{$itemProduct->title}}">{{$itemProduct->title}}</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price">{{$cart->PriceProduct($itemProduct)}}</span>&nbsp;&nbsp;
                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            @endforeach
                                            <!-- End item-wrap -->
                                        </div>
                                        @if($best_seller->count()>6)
                                        <div class="item ">
                                            @foreach($best_seller->slice(6, 4) as $itemProduct)
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="{{route('view',['slug'=>$itemProduct->slug])}}" target="_self" title="{{$itemProduct->title}}">
                                                            <?php $urlImage = ($itemProduct->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                                            <img src="{{url($urlImage)}}/{{$itemProduct->cover_image}}" alt="{{$itemProduct->cover_image}}">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="{{route('view',['slug'=>$itemProduct->slug])}}" target="_self" title="{{$itemProduct->title}}">{{$itemProduct->title}}</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price">{{$cart->PriceProduct($itemProduct)}}</span>&nbsp;&nbsp;

                                                        <!-- <span class="price-old">$76.00 </span>&nbsp; -->

                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            @endforeach
                                            <!-- End item-wrap -->
                                        </div>
                                        @elseif($best_seller->count()>12)
                                        <div class="item ">
                                            @foreach($best_seller->slice(12, 4) as $itemProduct)
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="{{route('view',['slug'=>$itemProduct->slug])}}" target="_self" title="{{$itemProduct->title}}">
                                                            <?php $urlImage = ($itemProduct->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                                            <img src="{{url($urlImage)}}/{{$itemProduct->cover_image}}" alt="{{$itemProduct->cover_image}}">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="{{route('view',['slug'=>$itemProduct->slug])}}" target="_self" title="{{$itemProduct->title}}">{{$itemProduct->title}}</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price">{{$cart->PriceProduct($itemProduct)}}</span>&nbsp;&nbsp;
                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            @endforeach
                                            <!-- End item-wrap -->
                                        </div>
                                        @endif
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
                    <a href="https://hoplongtech.com/tin-tuc/chuong-trinh-khuyen-mai-mung-sinh-nhat-lan-thu-10-cung-hoplongtech"><img src="{{url('public/homev2')}}/image/catalog/banners/flash-sale-1.jpg" alt="image"></a>
                </li>
                <li>
                    <a href="https://hoplongtech.com/tin-tuc/chuong-trinh-khuyen-mai-mung-sinh-nhat-lan-thu-10-cung-hoplongtech"><img src="{{url('public/homev2')}}/image/catalog/banners/flash-sale-2.jpg" alt="image"></a>
                </li>
                <li>
                    <a href="https://hoplongtech.com/tin-tuc/chuong-trinh-khuyen-mai-mung-sinh-nhat-lan-thu-10-cung-hoplongtech"><img src="{{url('public/homev2')}}/image/catalog/banners/flash-sale-3.jpg" alt="image"></a>
                </li>
                <li>
                    <a href="https://hoplongtech.com/tin-tuc/chuong-trinh-khuyen-mai-mung-sinh-nhat-lan-thu-10-cung-hoplongtech"><img src="{{url('public/homev2')}}/image/catalog/banners/flash-sale-4.jpg" alt="image"></a>
                </li>
                <li>
                    <a href="https://hoplongtech.com/tin-tuc/chuong-trinh-khuyen-mai-mung-sinh-nhat-lan-thu-10-cung-hoplongtech"><img src="{{url('public/homev2')}}/image/catalog/banners/flash-sale-6.jpg" alt="image"></a>
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
                @foreach($flash_sale->products as $itemProductFlashSale)
                <div class="item">         
                    <div class="item-inner product-layout transition product-grid">
                        <div class="product-item-container">
                            <div class="left-block left-b">
                                <div class="box-label">
                                    <!-- <span class="label-product label-sale"> -->
                                        <!-- -{{$itemProductFlashSale->discount}}% -->
                                    <!-- </span> -->
                                </div>
                                <div class="product-image-container">
                                    <a href="{{route('view',['slug'=>$itemProductFlashSale->slug,'flash_sale_id'=>$itemProductFlashSale->flash_sale_id,'id'=>$itemProductFlashSale->id])}}" target="_self" title="{{$itemProductFlashSale->title}}">
                                        <?php $urlImage = ($itemProductFlashSale->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                        <img style="height: 200px" src="{{url($urlImage)}}/{{$itemProductFlashSale->cover_image}}" class="img-1 img-responsive" alt="{{$itemProductFlashSale->title}}">
                                    </a>
                                </div>
                          </div>
                          <div class="right-block">
                            <div class="button-group so-quickview cartinfo--left">
                                <span>
                                    <!-- <button type="button" class="addToCart addCart" title="Thêm vào giỏ hàng"> -->
                                        <a class="addToCart addCart" href="{{route('add_cart_flash_sale',['id'=>$itemProductFlashSale->id])}}">
                                            <span style="color: #fff">Thêm vào giỏ</span>
                                        </a>
                                    <!-- </button> -->
                                </span>   
                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                    </button>
                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
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
                                                    <h4><a href="{{route('view',['slug'=>$itemProductFlashSale->slug])}}" title="{{$itemProductFlashSale->title}}" target="_self">{{$itemProductFlashSale->title}}</a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                  <span class="price-new">{{number_format($itemProductFlashSale->price)}}VNĐ</span>
                                                  <span class="price-old">{{number_format($itemProductFlashSale->list_price)}}VNĐ</span>
                                              </p>
                                          </div>

                                          <div class="item-available">
                                            <div class="available">
                                                <?php $sold = $itemProductFlashSale->sold * (100/$itemProductFlashSale->quantity) ?>
                                              <span class="color_width" data-title="{{$sold}}%" data-toggle='tooltip' style="width: {{$sold}}%"></span>
                                          </div>                          
                                          <p class="a2">Đã bán: <b>{{$itemProductFlashSale->sold}}</b>  </p>
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

          <div class="module listingtab-layout1">
            <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                <div class="loadeding"></div>
                <div class="ltabs-wrap">
                    <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="6" data-md="3" data-sm="2" data-xs="1" data-margin="30">
                        <!--Begin Tabs-->
                        <div class="ltabs-tabs-wrap"> 
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
                        <div class="ltabs-items items-category-20 grid ltabs-items-selected ltabs-items-loaded" data-total="18">
                            <div class="ltabs-items-inner ltabs-slider">
                                @foreach($best_seller as $itemProduct)
                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                <div class="product-image-container">
                                                    <a href="{{route('view',['slug'=>$itemProduct->slug])}}" target="_self" title="">
                                                        <?php $urlImage = ($itemProduct->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                                        <img src="{{url($urlImage)}}/{{$itemProduct->cover_image}}" alt="{{$itemProduct->cover_image}}" class="img-1 img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <span>
                                                        @if($itemProduct->price > 0)
                                                        <!-- <button type="button" class="addToCart addCart" title="Thêm vào giỏ hàng"> -->
                                                            <!-- <a href="{{route('add_cart',['id'=>$itemProduct->id])}}">
                                                                <span style="color: #fff">Thêm vào giỏ</span>
                                                            </a> -->
                                                            <a class="addToCart addCart" href="{{route('add_cart',['id'=>$itemProduct->id])}}">
                                                                <span style="color: #fff">Thêm vào giỏ</span>
                                                            </a>
                                                        <!-- </button> -->
                                                        @else
                                                        <a class="addToCart addCart" href="{{route('view',['slug'=>$itemProduct->slug])}}">Chi tiết</a>
                                                        @endif
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List">
                                                            <i class="fa fa-heart-o"></i>
                                                            <span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product">
                                                            <i class="fa fa-retweet"></i>
                                                            <span>Compare this Product</span>
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
                                                    <h4><a href="{{route('view',['slug'=>$itemProduct->slug])}}" title="Pastrami bacon" target="_self">{{$itemProduct->title}}</a></h4>
                                                </div>
                                                <p class="price"><span class="price-new">{{$cart->PriceProduct($itemProduct)}}</span></p>
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                                @endforeach
                            </div>                              
                        </div>
                        <div class="ltabs-items items-category-18 grid ltabs-items-loaded" data-total="18">
                            <div class="ltabs-items-inner ltabs-slider owl2-carousel owl2-theme owl2-loaded">
                              <div class="owl2-stage-outer">
                                 <div class="owl2-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1701px;">
                                    @foreach($promotions->slice(0, 5) as $promotion)
                                    <div class="owl2-item active" style="width: 213px; margin-right: 30px;">
                                       <div class="item">
                                          <div class="item-inner product-layout transition product-grid">
                                             <div class="product-item-container">
                                                <div class="left-block left-b">
                                                   <div class="product-image-container">
                                                      <a href="{{route('view',['slug'=>$promotion->slug])}}" target="_self" title="">
                                                        <?php $urlImage = ($promotion->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                                          <img src="{{url($urlImage)}}/{{$promotion->cover_image}}" class="img-1 img-responsive" alt="$promotion->cover_image">
                                                          <?php $cover_image_new_2 = isset($promotion->cover_image_2) ? $promotion->cover_image_2 : $promotion->cover_image;?>
                                                      </a>
                                                  </div>
                                              </div>
                                              <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <span>
                                                        @if($promotion->price > 0)
                                                        <!-- <button type="button" class="addToCart addCart" title="Thêm vào giỏ hàng"> -->
                                                            <a class="addToCart addCart" href="{{route('add_cart',['id'=>$promotion->id])}}">
                                                                <span style="color: #fff">Thêm vào giỏ</span>
                                                            </a>
                                                        <!-- </button> -->
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
                                                <p class="price"><span class="price-new">{{$cart->PriceProduct($promotion)}}</span></p>
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
                                           <div class="product-image-container">
                                              <a href="{{route('view',['slug'=>$new_product->slug])}}" target="_self" title="">
                                                <?php $urlImage = ($new_product->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                                  <img src="{{url($urlImage)}}/{{$new_product->cover_image}}" class="img-1 img-responsive" alt="">
                                              </a>
                                          </div>
                                      </div>
                                      <div class="right-block">
                                       <div class="button-group so-quickview cartinfo--left">
                                        <span>
                                            @if($new_product->price > 0)
                                            <!-- <button type="button" class="addToCart addCart" title="Thêm vào giỏ hàng"> -->
                                                <a class="addToCart addCart" href="{{route('add_cart',['id'=>$new_product->id])}}">
                                                    <span style="color: #fff">Thêm vào giỏ</span>
                                                </a>
                                            <!-- </button> -->
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
</div>
</div>
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
        </div>
        <div class="categoryslider-content">
          <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="5" data-items_column0="5" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
            @foreach($promotions as $new_product)        
            <div class="item">         
                <div class="item-inner product-layout transition product-grid">
                    <div class="product-item-container">
                        <div class="left-block left-b">
                            <div class="product-image-container">
                                <a href="{{route('view',['slug'=>$new_product->slug])}}" target="_self" title="{{$new_product->title}}">
                                    <?php $urlImage = ($new_product->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                    <img src="{{url($urlImage)}}/{{$new_product->cover_image}}" class="img-1 img-responsive" alt="{{$new_product->title}}">
                                </a>
                            </div>
                        </div>
                        <div class="right-block">
                            <div class="button-group so-quickview cartinfo--left">
                                <span>
                                    @if($new_product->price > 0)
                                    <!-- <button type="button" class="addToCart addCart" title="Thêm vào giỏ hàng"> -->
                                        <a class="addToCart addCart" href="{{route('add_cart',['id'=>$new_product->id])}}">
                                            <span style="color: #fff">Thêm vào giỏ</span>
                                        </a>
                                    <!-- </button> -->
                                    @else
                                    <a class="addToCart addCart" href="{{route('view',['slug'=>$new_product->slug])}}">
                                        Chi tiết
                                    </a>
                                    @endif
                                </span>    
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
            <div class="page-title-categoryslider">Gợi ý dành riêng cho bạn</div>
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
          
                            <div class="products-list col-md-12">

                            @foreach($cat_copy_shn as $shn)
                            <div class="item col-md-3">         
                                <div class="item-inner product-layout transition product-grid">
                                    <div class="product-item-container">
                                        <div class="left-block left-b">

                                            <div class="product-image-container">
                                                <a href="{{route('view_category',['slug'=>$shn->slug])}}" target="_self" title="">
                                                    <img style="width: 258px" width="256" height="100" src="{{url('uploads/category')}}/{{$shn->cover_image}}" class="img-1 img-responsive" alt="{{$shn->title}}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <div class="button-group so-quickview cartinfo--left">
                                                <button type="button" class="addToCart" title="">
                                                    <span>Xem chi tiết </span>   
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
                                        </div>
                                    </div>
                                  </div>      
                              </div>
                              @endforeach  
                            </div>
                        </div>
                        <!-- end cate -->
                        <div class="categoryslider-content" id="omron">
          
                            <div class="products-list col-md-12">

                            @foreach($cat_copy_omron as $omron)
                            <div class="item col-md-3">         
                                <div class="item-inner product-layout transition product-grid">
                                    <div class="product-item-container">
                                        <div class="left-block left-b">

                                            <div class="product-image-container">
                                                <a href="{{route('view_category',['slug'=>$omron->slug])}}" target="_self" title="">
                                                    <img height="100" src="{{url('uploads/category')}}/{{$omron->cover_image}}" class="img-1 img-responsive" alt="{{$omron->title}}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <div class="button-group so-quickview cartinfo--left">
                                                <button type="button" class="addToCart" title="">
                                                    <span>Xem chi tiết </span>   
                                                </button>
                                            </div>
                                            <div class="caption hide-cont">
                                                <div class="ratings">
                                                    <div class="rating-box">    
                                                    </div>
                                                    <span class="rating-num"></span>
                                                </div>
                                                <h4><a href="{{route('view_category',['slug'=>$omron->slug])}}" title="Pastrami bacon" target="_self">{{$omron->title}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                  </div>      
                              </div>
                              @endforeach  
                            </div>
                        </div>
                        <!-- end cate -->
                        <div class="categoryslider-content" id="autonics">
          
                            <div class="products-list col-md-12">

                            @foreach($cat_copy_atn as $atn)
                            <div class="item col-md-3">         
                                <div class="item-inner product-layout transition product-grid">
                                    <div class="product-item-container">
                                        <div class="left-block left-b">

                                            <div class="product-image-container">
                                                <a href="{{route('view_category',['slug'=>$atn->slug])}}" target="_self" title="">
                                                    <img height="100" src="{{url('uploads/category')}}/{{$atn->cover_image}}" class="img-1 img-responsive" alt="{{$atn->title}}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <div class="button-group so-quickview cartinfo--left">
                                                <button type="button" class="addToCart" title="">
                                                    <span>Xem chi tiết </span>   
                                                </button>
                                            </div>
                                            <div class="caption hide-cont">
                                                <div class="ratings">
                                                    <div class="rating-box">    
                                                    </div>
                                                    <span class="rating-num"></span>
                                                </div>
                                                <h4><a href="{{route('view_category',['slug'=>$atn->slug])}}" title="Pastrami bacon" target="_self">{{$atn->title}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                  </div>      
                              </div>
                              @endforeach  
                            </div>
                        </div>
                        <!-- end cate -->
                        <div class="categoryslider-content" id="idec">
          
                            <div class="products-list col-md-12">

                            @foreach($cat_copy_id as $id)
                            <div class="item col-md-3">         
                                <div class="item-inner product-layout transition product-grid">
                                    <div class="product-item-container">
                                        <div class="left-block left-b">

                                            <div class="product-image-container">
                                                <a href="{{route('view_category',['slug'=>$id->slug])}}" target="_self" title="">
                                                    <img height="100" src="{{url('uploads/category')}}/{{$id->cover_image}}" class="img-1 img-responsive" alt="{{$id->title}}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <div class="button-group so-quickview cartinfo--left">
                                                <button type="button" class="addToCart" title="">
                                                    <span>Xem chi tiết </span>   
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
                                        </div>
                                    </div>
                                  </div>      
                              </div>
                              @endforeach  
                            </div>
                        </div>
                        <!-- end cate -->
                        <div class="categoryslider-content" id="ls">
          
                            <div class="products-list col-md-12">

                            @foreach($cat_copy_ls as $ls)
                            <div class="item col-md-3">         
                                <div class="item-inner product-layout transition product-grid">
                                    <div class="product-item-container">
                                        <div class="left-block left-b">

                                            <div class="product-image-container">
                                                <a href="{{route('view_category',['slug'=>$ls->slug])}}" target="_self" title="">
                                                    <img height="100" src="{{url('uploads/category')}}/{{$ls->cover_image}}" class="img-1 img-responsive" alt="{{$ls->title}}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <div class="button-group so-quickview cartinfo--left">
                                                <button type="button" class="addToCart" title="">
                                                    <span>Xem chi tiết </span>   
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
                                        </div>
                                    </div>
                                  </div>      
                              </div>
                              @endforeach  
                            </div>
                        </div>
                        <!-- end cate -->
                        <div class="categoryslider-content" id="misubishi">
          
                            <div class="products-list col-md-12">

                            @foreach($cat_copy_mit as $mit)
                            <div class="item col-md-3">         
                                <div class="item-inner product-layout transition product-grid">
                                    <div class="product-item-container">
                                        <div class="left-block left-b">

                                            <div class="product-image-container">
                                                <a href="{{route('view_category',['slug'=>$mit->slug])}}" target="_self" title="">
                                                    <img height="100" src="{{url('uploads/category')}}/{{$mit->cover_image}}" class="img-1 img-responsive" alt="{{$mit->title}}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <div class="button-group so-quickview cartinfo--left">
                                                <button type="button" class="addToCart" title="">
                                                    <span>Xem chi tiết </span>   
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
                                        </div>
                                    </div>
                                  </div>      
                              </div>
                              @endforeach  
                            </div>
                        </div>
                        <!-- end cate -->
</div>
</div>
<!-- end Category Slider 3 -->

<!-- Banners -->
<div class="banners4 banners">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/bn1.jpg" alt="Banner Bottom 1"></a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/bn2.jpg" alt="Banner Bottom 2"></a>
        </div>
    </div>
</div>
<!-- end Banners -->

<!-- Slider Brands -->
<div class="slider-brands col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="yt-content-slider contentslider" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="8" data-items_column0="7" data-items_column1="5" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes"
    data-pagination="no" data-lazyload="yes" data-loop="yes">
    @foreach($categorys as $itemCategory)
    <div class="item">
        <a href="{{route('view_category',['slug'=>$itemCategory->slug])}}">
            <img src="{{url('uploads/category')}}/{{$itemCategory->cover_image}}">
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
<!-- //Main Container -->
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
        $('#menu_idec').click(function(){
            $('#schneider').hide();
            $('#omron').hide();
            $('#autonics').hide();
            $('#idec').show();
            $('#mitsubishi').hide();
            $('#ls').hide();
        });
        $('#menu_mitsubishi').click(function(){
            $('#schneider').hide();
            $('#omron').hide();
            $('#autonics').hide();
            $('#idec').hide();
            $('#mitsubishi').show();
            $('#ls').hide();
        });
        $('#menu_ls').click(function(){
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

