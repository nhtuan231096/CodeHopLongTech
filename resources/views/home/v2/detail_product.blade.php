@extends('layouts.v2.index')
@section('mainContainer')
<style type="text/css">
html {
    scroll-behavior: smooth
}
.fixed {
    width: 100%;
    position: fixed;
    top: 0px;
    left: 0;
    z-index: 7000;
}
</style>
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<script type="text/javascript">
   jQuery(document).ready(function($) {
      $(window).load(function() {
         if ($('.wrapper-nav').length > 0) {
            var _top = $('.wrapper-nav').offset().top ;
           $(window).scroll(function(evt) {
             var _y = $(this).scrollTop();
             if (_y > _top) {
               $('.wrapper-nav').addClass('fixed');
               $('.main-1').css("margin-top", "30px");
               $('.wr>ul').css("margin-top", "88px");
               $('.position_anchor').css("bottom", "146px");
               $('#imagesPro').css("bottom", "136px");
           } else {
               $('.wrapper-nav').removeClass('fixed');
               $('.main-1').css("margin-top", "0");
               $('.wr>ul').css("margin-top", "0px")
               $('.position_anchor').css("bottom", "246px");
           }
       })
       }
   });
  });
</script>
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('view_category',['slug'=>$product->category->slug])}}">{{$product->category->title}}</a></li>
        <li><a href="#">{{$product->title}}</a></li>
        
    </ul>
    
    <div class="row">

        <!--Left Part Start -->
        <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
            <div class="module category-style">
                <h3 class="modtitle">Danh mục</h3>
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
            <div class="module product-simple">
                <h3 class="modtitle">
                    <span>Sản phẩm khuyến mại</span>
                </h3>
                <div class="modcontent">
                    <div class="so-extraslider" >
                        <!-- Begin extraslider-inner -->
                        <div class=" extraslider-inner">
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
                      <img src="{{url('public/homev2')}}/image/catalog/banners/banner-sidebar.jpg" alt="Banner Image"> 
                  </a>
              </div>
          </div>
      </div>
  </aside>
  <!--Left Part End -->

  <!--Middle Part Start-->
  <div id="content" class="col-md-9 col-sm-8">

    <div class="product-view row">
        <div class="left-content-product">

            <div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
                <div class="large-image  ">
                    <?php $urlImage = ($product->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                    <img itemprop="image" class="product-image-zoom" src="{{url($urlImage)}}/{{$product->cover_image}}"  title="" alt="">
                </div>
                @if(isset($product->video))
                <a class="thumb-video pull-left" href="{{$product->video}}"><i class="fa fa-youtube-play"></i></a>
                @endif
                <div id="thumb-slider" class="yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="4"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                    @if($product->cover_image)
                    <a data-index="0" class="img thumbnail " data-image="{{url($urlImage)}}/{{$product->cover_image}}" title="">
                        <img src="{{url($urlImage)}}/{{$product->cover_image}}" title="" alt="">
                    </a>
                    @elseif($product->cover_image_2)
                    <a data-index="1" class="img thumbnail " data-image="{{url($urlImage)}}/{{$product->cover_image_2}}" title="">
                        <img src="{{url($urlImage)}}/{{$product->cover_image_2}}" title="" alt="">
                    </a>
                    @elseif($product->cover_image_3)
                    <a data-index="2" class="img thumbnail " data-image="{{url($urlImage)}}/{{$product->cover_image_3}}" title="">
                        <img src="{{url($urlImage)}}/{{$product->cover_image_3}}" title="" alt="">
                    </a>
                    @elseif($product->cover_image_4)
                    <a data-index="3" class="img thumbnail " data-image="{{url($urlImage)}}/{{$product->cover_image_4}}" title="">
                        <img src="{{url($urlImage)}}/{{$product->cover_image_4}}" title="" alt="">
                    </a>
                    @elseif($product->cover_image_5)
                    <a data-index="4" class="img thumbnail " data-image="{{url($urlImage)}}/{{$product->cover_image_5}}" title="">
                        <img src="{{url($urlImage)}}/{{$product->cover_image_5}}" title="" alt="">
                    </a>
                    @endif
                </div>

            </div>

            <div class="content-product-right col-md-7 col-sm-12 col-xs-12">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{Session::get('success')}}</strong>
                </div>
                @endif
                <div class="title-product">
                    <h1>{{$product->title}}</h1>
                </div>
                <!-- Review ---->
                <div class="box-review form-group">
                    <div class="ratings">
                        <div class="rating-box">
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                        </div>
                    </div>

                    <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{$product->countRate->count()}} đánh giá</a>  | 
                    <a class="write_review_button" href="" onclick="$('a[href=\'#danh-gia\']').trigger('click'); return false;">Đánh giá sản phẩm này</a>
                </div>

                <div class="product-label form-group">
                    <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                        <span class="price-new" itemprop="price">{{$cart->PriceProduct($product)}}</span>
                        <span class="price-old">{{$product->list_price > 0 ? number_format($product->list_price) : ''}}</span>
                    </div>
                    <div class="stock"><span>Tình trạng:</span> <span class="status-stock">Có sẵn</span></div>
                </div>

                <div class="product-box-desc">
                    <div class="inner-box-desc">
                        <!-- <div class="price-tax"><span>Ex Tax:</span> $60.00</div> -->
                        <!-- <div class="reward"><span>Price in reward points:</span> 400</div> -->
                        <div class="brand"><span>Danh mục:</span><a href="{{route('view_category',['slug'=>$product->category->slug])}}">   {{$product->category->title}}</a>     </div>
                        <div class="model"><span>Mã hàng:</span>   {{$product->title}}</div>
                        <!-- <div class="reward"><span>Reward Points:</span> 100</div> -->
                        @if($product->download_id=='') 
                        <span>Tài liệu đang được cập nhật!<span> 
                            @else 
                            <b>Download tài liệu kỹ thuật </b>
                            <a href="{{route('document',['slug'=>$product->slug])}}"><img src="{{url('uploads/download')}}/icon-download-9.png"  title="{{$product->taiLieu->title}}" style="display: inline"> 
                            </a> 
                            @endif
                            <div class="view">
                              <i class="fa fa-eye" style="margin-top: 3px">   {{number_format($product->view)}}</i>
                          </div>
                      </div>
                  </div>


                  <div id="product">
                    <!-- <h4>Available Options</h4> -->
                           <!--  <div class="image_option_type form-group required">
                                <label class="control-label">Colors</label>
                                <ul class="product-options clearfix"id="input-option231">
                                    <li class="radio">
                                        <label>
                                            <input class="image_radio" type="radio" name="option[231]" value="33"> 
                                            <img src="{{url('public/homev2')}}/image/demo/colors/blue.jpg" data-original-title="blue +$12.00" class="img-thumbnail icon icon-color">             <i class="fa fa-check"></i>
                                            <label> </label>
                                        </label>
                                    </li>
                                    <li class="radio">
                                        <label>
                                            <input class="image_radio" type="radio" name="option[231]" value="34"> 
                                            <img src="{{url('public/homev2')}}/image/demo/colors/brown.jpg" data-original-title="brown -$12.00" class="img-thumbnail icon icon-color">               <i class="fa fa-check"></i>
                                            <label> </label>
                                        </label>
                                    </li>
                                    <li class="radio">
                                        <label>
                                            <input class="image_radio" type="radio" name="option[231]" value="35"> <img src="{{url('public/homev2')}}/image/demo/colors/green.jpg"
                                            data-original-title="green +$12.00" class="img-thumbnail icon icon-color">              <i class="fa fa-check"></i>
                                            <label> </label>
                                        </label>
                                    </li>
                                    <li class="selected-option">
                                    </li>
                                </ul>
                            </div> -->
                            
                           <!--  <div class="box-checkbox form-group required">
                                <label class="control-label">Checkbox</label>
                                <div id="input-option232">
                                    <div class="checkbox">
                                        <label for="checkbox_1"><input type="checkbox" name="option[232][]" value="36" id="checkbox_1"> Checkbox 1 (+$12.00)</label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox_2"><input type="checkbox" name="option[232][]" value="36" id="checkbox_2"> Checkbox 2 (+$36.00)</label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox_3"><input type="checkbox" name="option[232][]" value="36" id="checkbox_3"> Checkbox 3 (+$24.00)</label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox_4"><input type="checkbox" name="option[232][]" value="36" id="checkbox_4"> Checkbox 4 (+$48.00)</label>
                                    </div>
                                </div>
                            </div> -->
                            <div class="woocommerce-product-details__short-description" style="padding-bottom: 25px;margin-bottom:15px;border-bottom: 1px solid #eee">
                              <ins>
                                  <b>DỊCH VỤ & KHUYẾN MẠI</b>
                              </ins>
                              <ul>
                                  <li>Quà tặng trị giá <b style="color: red">200.000đ</b> (Áp dụng sản phẩm tự động hóa công nghiệp <b style="color:#2A9332">SCHNEIDER ELECTRIC</b>)</li>
                                  <li>Nhập mã <b style="color: red">HOPLONG</b> giảm thêm 3% dành cho toàn bộ đơn hàng từ <b style="color: red">10/10 đến 31/10/2019</b></li>
                                  <li>Tặng <b style="color: red">voucher 20.000đ khi đánh giá 5*</b> (Áp dụng cho đơn hàng từ 200.000đ)</li>
                                  <li>Đăng nhập <b style="color: red">để nhận giá tốt nhất</b></li>
                              </ul>

                          </div>
                          <form enctype="multipart/form-data" action="{{route('shopNow')}}" method="post" class="cart"> 
                            @csrf
                            @if($product->price > 0)
                            <div class="form-group box-info-product">
                                <div class="option quantity">
                                    <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                        <label>Số lượng</label>
                                        <input class="form-control" type="text" name="quantity" id="quantity-input"
                                        value="1">
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <span class="input-group-addon product_quantity_down">−</span>
                                        <span class="input-group-addon product_quantity_up">+</span>
                                    </div>
                                </div>
                                <div class="cart">
                                    <button class="btn btn-primary btn-lg" name="addCart" value="true" style="font-weight: bold; font-size: 16px;"> 
                                        <i style="margin-right: 5px" class="fa fa-shopping-cart"></i>Thêm giỏ hàng
                                    </button>
                                </div>
                                <div class="add-to-links wish_comp wishlist">
                                    <button class="btn btn-danger btn-lg" name="shopNow" value="true" style="font-weight: bold; font-size: 16px;"> 
                                        <i style="margin-right: 5px" class="fa fa-money"></i>Mua ngay
                                    </button>
                                </div>
                            </div>
                            @endif
                        </form>

                    </div>
                    <!-- end box info product -->

                </div>

            </div>
        </div>
        <!-- Product Tabs -->
            <!-- <div class="producttab ">
                <div class="tabsslider  vertical-tabs col-xs-12">
                    <ul class="nav nav-tabs col-lg-2 col-sm-3">
                        <li class="active"><a data-toggle="tab" href="#tab-1">THÔNG SỐ KỸ THUẬT</a></li>
                        <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Đánh giá ({{$product->countRate->count()}})</a></li>
                        <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tổng quan</a></li>
                        <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Kích thước</a></li>
                    </ul>
                    <div class="tab-content col-lg-10 col-sm-9 col-xs-12">
                        <div id="tab-1" class="tab-pane fade active in">
                        
                        @if($product->pdp == 1)
                        <?php 
                          $dataPro = json_decode(strip_tags($product->content));
                        ?>
                        <div>
                          <div class="panel panel-default">
                            <table class="table">
                              <tbody>
                                @foreach($dataPro as $title => $value)
                                <tr>
                                  <th>{{$title}}</th>
                                  <td>{{$value}}</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                        @else
                        <div style="width: 100%">{!!$product->content!!}</div>
                        @endif
                        </div>
                        <div id="tab-review" class="tab-pane fade">
                            <form action="{{route('rateProduct')}}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <input type="hidden" name="status" value="1">
                                <div id="review">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            @foreach($rates as $rate)
                                            <tr>
                                                <td style="width: 50%;"><strong>{{$rate->name}}</strong></td>
                                                <td class="text-right">{{date_format($rate->created_at,"d/m/Y")}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p>{{$rate->content}}</p>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <?php $o_start = 5 - $rate->rate;?>
                                                            @for($i = 1; $i <= $rate->rate; $i++)
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            @endfor
                                                            @for($i = 1; $i <= $o_start; $i++)
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="paginate pull-right">
                                        {{$rates->links()}}
                                    </div>
                                    <div class="text-right"></div>
                                </div>
                                <h2 id="review-title">Gửi đánh giá của bạn</h2>
                                <div class="contacts-form">
                                    <div class="form-group"> <span class="icon icon-user"></span>
                                        <input type="text" name="name" class="form-control" placeholder="Nhập họ tên" required> 
                                    </div>
                                    <div class="form-group"> <span class="icon icon-email"></span>
                                        <input type="text" name="email" class="form-control" placeholder="Nhập email" required> 
                                    </div>
                                    <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                        <textarea class="form-control" name="content" placeholder="Nội dung đánh giá của bạn về sản phẩm.."></textarea>
                                    </div>                                     
                                    <div class="form-group">
                                     <b>Rating</b> <span>Bad</span>&nbsp;
                                    <input type="radio" name="rate" value="1"> &nbsp;
                                    <input type="radio" name="rate"
                                    value="2"> &nbsp;
                                    <input type="radio" name="rate"
                                    value="3"> &nbsp;
                                    <input type="radio" name="rate"
                                    value="4"> &nbsp;
                                    <input type="radio" name="rate" checked 
                                    value="5"> &nbsp;<span>Good</span>
                                    
                                    </div>
                                    <button type="submit" class="btn buttonGray pull-left">Gửi</button>
                                </div>
                            </form>
                        </div>
                        <div id="tab-4" class="tab-pane fade">
                            @if($product->pdp)
                              <?php $overViews = $cart->stringToArray(strip_tags($product->specifications));?>
                              @foreach($overViews as $overview)
                                <div class="overViewImg">
                                  <img src="{{url('uploads/product_new/overview')}}/{{$overview}}">
                                </div>
                              @endforeach
                            @else
                            <div style="width: 100%">{!!$product->specifications!!}</div>
                            @endif           
                        </div>
                        <div id="tab-5" class="tab-pane fade">
                            @if(isset($product->dimension))
                                @if($product->pdp)
                                  <?php $dimensions = $cart->stringToArray(($product->dimension));?>
                                  @foreach($dimensions as $dimension)
                                    <div class="overViewImg">
                                      <img src="{{url('uploads/product_new/dimension')}}/{{$dimension}}">
                                    </div>
                                  @endforeach
                                @else
                                <div style="width: 100%">{!!$product->dimension!!}</div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div> -->


            <div class="producttab ">
                <div class="tabsslider horizontal-tabs  col-xs-12">
                    <ul class="nav nav-tabs wrapper-nav" id="navbar">
                        <li class="active"><a href="#thong-so">THÔNG SỐ KỸ THUẬT</a></li>
                        <li class="item_nonactive"><a href="#tong-quan">Tổng quan</a></li>
                        <li class="item_nonactive "><a href="#kick-thuoc">Kích thước</a></li>
                        <li class="item_nonactive "><a href="#imagesPro">Ảnh thực tế</a></li>
                        <li class="item_nonactive"><a href="#danh-gia">Đánh giá ({{$product->countRate->count()}})</a></li>
                    </ul>
                    <div class="tab-content col-xs-12">
                        <div class="tab-pane fade in active">
                            <div id="thong-so">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Thông số kỹ thuật</h3>
                                    </div>
                                </div>
                                @if($product->pdp == 1)
                                <?php 
                                $dataPro = json_decode(strip_tags($product->content));
                                ?>
                                <div>
                                  <div class="panel panel-default">
                                    <table class="table">
                                      <tbody>
                                        @foreach($dataPro as $title => $value)
                                        <tr>
                                          <th>{{$title}}</th>
                                          <td>{{$value}}</td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      @else
                      <div style="width: 100%">{!!$product->content!!}</div>
                      @endif
                  </div>
                  <!-- //--- -->
                  <div id="danh-gia">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Đánh giá</h3>
                        </div>
                    </div>
                    <form action="{{route('rateProduct')}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="status" value="1">
                        <div id="review">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    @foreach($rates as $rate)
                                    <tr>
                                        <td style="width: 50%;"><strong>{{$rate->name}}</strong></td>
                                        <td class="text-right">{{date_format($rate->created_at,"d/m/Y")}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>{{$rate->content}}</p>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <?php $o_start = 5 - $rate->rate;?>
                                                    @for($i = 1; $i <= $rate->rate; $i++)
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    @endfor
                                                    @for($i = 1; $i <= $o_start; $i++)
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    @endfor
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="paginate pull-right">
                                {{$rates->links()}}
                            </div>
                            <div class="text-right"></div>
                        </div>
                        <h2 id="review-title">Gửi đánh giá của bạn</h2>
                        <div class="contacts-form">
                            <div class="form-group"> <span class="icon icon-user"></span>
                                <input type="text" name="name" class="form-control" placeholder="Nhập họ tên" required> 
                            </div>
                            <div class="form-group"> <span class="icon icon-email"></span>
                                <input type="text" name="email" class="form-control" placeholder="Nhập email" required> 
                            </div>
                            <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                <textarea class="form-control" name="content" placeholder="Nội dung đánh giá của bạn về sản phẩm.."></textarea>
                            </div>                                     
                            <div class="form-group">
                               <b>Rating</b> <span>Bad</span>&nbsp;
                               <input type="radio" name="rate" value="1"> &nbsp;
                               <input type="radio" name="rate"
                               value="2"> &nbsp;
                               <input type="radio" name="rate"
                               value="3"> &nbsp;
                               <input type="radio" name="rate"
                               value="4"> &nbsp;
                               <input type="radio" name="rate" checked 
                               value="5"> &nbsp;<span>Good</span>

                           </div>
                           <button type="submit" class="btn buttonGray pull-left">Gửi</button>
                       </div>
                   </form>
               </div>
               <div class="clearfix"></div>
               <div id="tong-quan" style="margin-top: 15px">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tổng quan</h3>
                    </div>
                </div>
                @if($product->pdp)
                <?php $overViews = $cart->stringToArray(strip_tags($product->specifications));?>
                @foreach($overViews as $overview)
                <div class="overViewImg">
                  <img src="{{url('uploads/product_new/overview')}}/{{$overview}}">
              </div>
              @endforeach
              @else
              <div style="width: 100%">{!!$product->specifications!!}</div>
              @endif    
          </div>
          <div id="kick-thuoc">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Kích thước</h3>
                    </div>
                </div>
                @if(isset($product->dimension))
                @if($product->pdp)
                <?php $dimensions = $cart->stringToArray(($product->dimension));?>
                @foreach($dimensions as $dimension)
                <div class="overViewImg">
                  <img src="{{url('uploads/product_new/dimension')}}/{{$dimension}}">
              </div>
              @endforeach
              @else
              <div style="width: 100%">{!!$product->dimension!!}</div>
              @endif
              @endif
          </div>
          <div id="imagesPro">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Ảnh thực tế</h3>
                </div>
            </div>
              @if($product->pdp || $product->actual_photo)
              <?php $actual_photos = $cart->stringToArray($product->actual_photo);?>
              
              @foreach($actual_photos as $actual_photo)
              <div class="col-md-4">
                <img src="{{url('uploads/product_new/actual_photo')}}/{{$actual_photo}}" class="attachment-shop_single size-shop_single" alt="{{$product->title}}">
              </div>
              
              @endforeach
              @else
              <div class="col-md-4">
                <img src="{{url('uploads/product')}}/{{$product->cover_image}}" class="attachment-shop_single size-shop_single" alt="{{$product->title}}">
              </div>
              <div class="col-md-4">
                <img src="{{url('uploads/product')}}/{{$product->cover_image}}" class="attachment-shop_single size-shop_single" alt="{{$product->title}}">
              </div>
              <div class="col-md-4">
                <img src="{{url('uploads/product')}}/{{$product->cover_image}}" class="attachment-shop_single size-shop_single" alt="{{$product->title}}">
              </div>
              @endif
          </div>
      <!-- //--- -->

  </div>
                            <!-- <div id="tab-review" class="tab-pane fade">
                                <form action="{{route('rateProduct')}}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <input type="hidden" name="status" value="1">
                                <div id="review">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            @foreach($rates as $rate)
                                            <tr>
                                                <td style="width: 50%;"><strong>{{$rate->name}}</strong></td>
                                                <td class="text-right">{{date_format($rate->created_at,"d/m/Y")}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p>{{$rate->content}}</p>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <?php $o_start = 5 - $rate->rate;?>
                                                            @for($i = 1; $i <= $rate->rate; $i++)
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            @endfor
                                                            @for($i = 1; $i <= $o_start; $i++)
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="paginate pull-right">
                                        {{$rates->links()}}
                                    </div>
                                    <div class="text-right"></div>
                                </div>
                                <h2 id="review-title">Gửi đánh giá của bạn</h2>
                                <div class="contacts-form">
                                    <div class="form-group"> <span class="icon icon-user"></span>
                                        <input type="text" name="name" class="form-control" placeholder="Nhập họ tên" required> 
                                    </div>
                                    <div class="form-group"> <span class="icon icon-email"></span>
                                        <input type="text" name="email" class="form-control" placeholder="Nhập email" required> 
                                    </div>
                                    <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                        <textarea class="form-control" name="content" placeholder="Nội dung đánh giá của bạn về sản phẩm.."></textarea>
                                    </div>                                     
                                    <div class="form-group">
                                     <b>Rating</b> <span>Bad</span>&nbsp;
                                    <input type="radio" name="rate" value="1"> &nbsp;
                                    <input type="radio" name="rate"
                                    value="2"> &nbsp;
                                    <input type="radio" name="rate"
                                    value="3"> &nbsp;
                                    <input type="radio" name="rate"
                                    value="4"> &nbsp;
                                    <input type="radio" name="rate" checked 
                                    value="5"> &nbsp;<span>Good</span>
                                    
                                    </div>
                                    <button type="submit" class="btn buttonGray pull-left">Gửi</button>
                                </div>
                            </form>
                            </div>
                            <div id="tab-4" class="tab-pane fade">
                                @if($product->pdp)
                                  <?php $overViews = $cart->stringToArray(strip_tags($product->specifications));?>
                                  @foreach($overViews as $overview)
                                    <div class="overViewImg">
                                      <img src="{{url('uploads/product_new/overview')}}/{{$overview}}">
                                    </div>
                                  @endforeach
                                @else
                                <div style="width: 100%">{!!$product->specifications!!}</div>
                                @endif              
                            </div>
                            <div id="tab-5" class="tab-pane fade">
                                @if(isset($product->dimension))
                                    @if($product->pdp)
                                      <?php $dimensions = $cart->stringToArray(($product->dimension));?>
                                      @foreach($dimensions as $dimension)
                                        <div class="overViewImg">
                                          <img src="{{url('uploads/product_new/dimension')}}/{{$dimension}}">
                                        </div>
                                      @endforeach
                                    @else
                                    <div style="width: 100%">{!!$product->dimension!!}</div>
                                    @endif
                                @endif
                            </div>
                        </div> -->
                    </div>
                </div>



                <!-- //Product Tabs -->

                <!-- Related Products -->
                <div class="related titleLine products-list grid module ">
                    <h3 class="modtitle">Sản phẩm liên quan  </h3>

                    <div class="releate-products yt-content-slider products-list" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="5" data-items_column0="5" data-items_column1="3" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                        @foreach($sames as $other)
                        <div class="item">         
                            <div class="item-inner product-layout transition product-grid">
                                <div class="product-item-container">
                                    <div class="left-block left-b">

                                        <div class="product-image-container second_img">
                                            <a href="{{route('view',['slug'=>$other->slug])}}" target="_self" title="Lastrami bacon">
                                                <img src="{{url('uploads/product')}}/{{$other->cover_image}}" class="img-1 img-responsive" alt="">
                                                <img src="{{url('uploads/product')}}/{{$other->cover_image}}" class="img-2 img-responsive" alt="">
                                            </a>
                                        </div>
                                        <!--quickview--> 
                                        <div class="so-quickview">
                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('view',['slug'=>$other->slug])}}" title="" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                      </div>                                                     
                                      <!--end quickview-->


                                  </div>
                                  <div class="right-block">
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart" title="Add to cart">
                                            <span>
                                                <a class="addToCart addCart" href="{{route('add_cart',['id'=>$other->id])}}">
                                                    Thêm giỏ hàng 
                                                </a>
                                            </span>   
                                        </button>
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
                                        <h4><a href="{{route('view',['slug'=>$other->slug])}}" title="Pastrami bacon" target="_self">{{$other->title}}</a></h4>
                                        
                                    </div>
                                    <p class="price">
                                      <span class="price-new">{{$cart->PriceProduct($other)}}</span>
                                      
                                  </p>
                              </div>

                          </div>
                      </div>      
                  </div>
                  @endforeach
              </div>
          </div>

          <!-- end Related  Products-->
      </div>






  </div>


</div>
<!--Middle Part End-->
</div>
@stop()