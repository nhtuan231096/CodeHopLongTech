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
.producttab .tabsslider.horizontal-tabs .nav-tabs li a{
    font-size: 13px;
}
.outstock::before {
  content: "\f057"!important;
  font-family: FontAwesome;
  display: inline-block;
  color: red!important;
  margin-right: 5px;
  margin-left: 10px;
}
</style>
<script src="https://360player.io/static/dist/scripts/embed.js" async></script>
<link rel="stylesheet" href="{{url('public/css')}}/styleProduct.css">
<link rel="stylesheet" href="{{url('public/homev2')}}/css/mystyle.css">
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
<!-- <script src="{{url('public/js')}}/dirPagination.js"></script> -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('view_category',['slug'=>$product->category->slug])}}">{{$product->category->title}}</a></li>
        <li>{{$product->title}}</li>
    </ul>
    <div class="row">
        <!--Left Part Start -->
        <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
            <div class="module category-style">
                <h3 class="modtitle">Danh mục</h3>
                <div class="modcontent">
                    <div class="box-category">
                        <ul id="cat_accordion" class="list-group">
                            @foreach($cate as $category)
                            <li class="hadchild"><a href="{{route('view_category',[$category->slug])}}" class="cutom-parent">{{$category->title}}</a>   
                                <!-- <span class="button-view  fa fa-plus-square-o"></span> -->
                            </li>
                            @endforeach
                            <!-- //--- -->
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
                                              <?php $urlImage = ($promotion->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                                <img src="{{url($urlImage)}}/{{$promotion->cover_image}}" alt="{{$promotion->cover_image}}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-title">
                                            <a href="{{route('view',['slug'=>$promotion->slug])}}" target="_self" title="{{$promotion->title}}">{{$promotion->title}}</a>
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
                    @endif
                    @if($product->cover_image_2)
                    <a data-index="1" class="img thumbnail " data-image="{{url($urlImage)}}/{{$product->cover_image_2}}" title="">
                        <img src="{{url($urlImage)}}/{{$product->cover_image_2}}" title="" alt="">
                    </a>
                    @endif
                    @if($product->cover_image_3)
                    <a data-index="2" class="img thumbnail " data-image="{{url($urlImage)}}/{{$product->cover_image_3}}" title="">
                        <img src="{{url($urlImage)}}/{{$product->cover_image_3}}" title="" alt="">
                    </a>
                    @endif
                    @if($product->cover_image_4)
                    <a data-index="3" class="img thumbnail " data-image="{{url($urlImage)}}/{{$product->cover_image_4}}" title="">
                        <img src="{{url($urlImage)}}/{{$product->cover_image_4}}" title="" alt="">
                    </a>
                    @endif
                    @if($product->cover_image_5)
                    <a data-index="4" class="img thumbnail " data-image="{{url($urlImage)}}/{{$product->cover_image_5}}" title="">
                        <img src="{{url($urlImage)}}/{{$product->cover_image_5}}" title="" alt="">
                    </a>
                    @endif
                    @if($product->image_360)
                    <div class="img thumbnail" style="position: relative;">
                        <img src="https://hoplongtech.com/public/home/assets/images/360.png" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="">
                        <button style="position: absolute;top: 0;right: 0;width:125px;height: 125px; opacity: 0" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#image_360"></button>
                    </div>
                    @endif
                </div>
            </div>

            <div id="image_360" class="modal fade" role="dialog">
              <div class="modal-dialog" style="max-width: 678px">

                <!-- Modal content-->
                <div class="modal-content text-center">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{$product->title}}</h4>
                  </div>
                  <div class="modal-body">
                    <iframe style="margin-bottom: 66px" src="{{$product->image_360}}" scrolling="no" frameborder="0" width=560 height=315 allowfullscreen data-token="k6f7rb"></iframe>                            
                  </div>
                </div>
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
                      @if($flashsale == 1)
                        <span class="price-new" itemprop="price">{{number_format($product->price)}}</span>
                      @else 
                        <span class="price-new" itemprop="price">{{$cart->PriceProduct($product)}}</span>
                      @endif
                        <span class="price-old">{{$product->list_price > 0 ? number_format($product->list_price) : ''}}</span>
                    </div>
                    @if($product->in_stock > 0)
                    <div class="stock"><span>Số lượng:</span> <span class="status-stock">{{$product->in_stock}}</span></div>
                    @else
                    <div class="stock"><span>Tình trạng:</span> <span class="status-stock outstock">Không có sẵn</span></div>
                    @endif
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
                    <div class="woocommerce-product-details__short-description" style="padding-bottom: 25px;margin-bottom:15px;border-bottom: 1px solid #eee">
                      <ins>
                          <b>DỊCH VỤ & KHUYẾN MẠI</b>
                      </ins>
                      <ul>
                          <li>Quà tặng trị giá <b style="color: red">200.000đ</b> (Áp dụng sản phẩm tự động hóa công nghiệp <b style="color:#2A9332">SCHNEIDER ELECTRIC</b>)</li>
                          <li>Nhập mã <b style="color: red">HOPLONG</b> giảm thêm 1% dành cho toàn bộ đơn hàng từ <b style="color: red">01/01 đến 20/04/2020</b></li>
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
                    @else
                    <a class="btn btn-danger fa fa-money" data-toggle="modal" href='#modal-id' style="font-weight: bold; padding: 18px 20px; font-size: 18px; width: 50%;color:#fff"><span> Yêu cầu báo giá</span></a>
                    @endif
                </form>

            </div>
            <!-- end box info product -->

        </div>

    </div>
</div>
<div class="row">

    <div class="col-md-12">
      <div class="panel-body table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="verticalMid">Mã hàng</th>
              <th class="verticalMid">Giá thường</th>
              <th class="verticalMid">Giá bán</th>
              <th class="verticalMid">Tình trạng</th>
              <th class="verticalMid">Số lượng</th>
              <th class="verticalMid">Đặt hàng</th>
          </tr>
      </thead>
      <tbody>
        <tr dir-paginate="itemPartNumber in getPartNumber | itemsPerPage: 5" pagination-id="part_number_pagination">
          <td class="verticalMid">
            <div>
              <div class="media">
                <!-- <a class="pull-left" href="{{route('view',[$product->slug])}}"> -->
                  <a class="pull-left" href="{{url('')}}/@{{itemPartNumber['slug']}}">
                    <img ng-if="itemPartNumber['pdp'] == 1" width="70px" class="media-object" src="{{url('uploads/product_new/cover_image/')}}/@{{itemPartNumber['cover_image']}}" alt="Image">
                    <img ng-if="itemPartNumber['pdp'] == 0" width="70px" class="media-object" src="{{url('uploads/product/')}}/@{{itemPartNumber['cover_image']}}" alt="Image">
                </a>
                <div class="media-body" style="padding-left: 15px">
                    <h3 class="media-heading" style="font-size: 15px"><a href="{{url('')}}/products/@{{itemPartNumber['slug']}}">@{{itemPartNumber['title']}}</a></h3>
                    <div class="star-rating" title="Rated 5 out of 5">
                      <span style="width:100%"></span>
                    </div>
                    <div class="woocommerce-product-details__short-description" style="margin-top: 20px;">
                      <span>@{{itemPartNumber["short_description"]}}</span> 
                    </div>
                </div>
              </div>
            </div>
          </td>
  <td class="verticalMid" style="width: 150px">
      <span style="text-decoration: line-through;" ng-if="itemPartNumber['list_price'] > 0">
        @{{itemPartNumber['list_price']|number}}VNĐ
    </span>
    <span ng-if="itemPartNumber['list_price']==null">
        Liên hệ: 1900.6536
    </span>
</td>
<td class="verticalMid" style="width: 160px">
  <span class="woocommerce-Price-amount amount">
      <span>
        @{{itemPartNumber['price']}}
    </span>
</span>
</td>
<td class="verticalMid" style="width: 160px">
    <p>Có sẵn: @{{itemPartNumber['in_stock'] > 0 ? itemPartNumber['in_stock'] : 0}}</p>
    <p>Đặt hàng: Từ 2-4 tuần</p>
</td>
<td class="verticalMid">
    <form action="" method="POST" role="form" style="margin: 0">
      <div class="form-group" style="width: 66px;margin: 0">
        <input type="number" class="form-control" ng-model="quantity">
    </div>
</form>
</td>
<td class="verticalMid" ng-if="itemPartNumber['price']!='Liên hệ 1900.6536'">    
    <a href="" ng-click="addCart(itemPartNumber['id'],quantity)" class="btn btn-md btn-info" style="margin-bottom: 5px;    padding-right: 20px;">
      <i class="fa fa-shopping-cart"></i> Thêm giỏ 
  </a>
  <div class="clearfix"></div>
  <a href="" ng-click="shopNow(itemPartNumber['id'],quantity)" class="btn btn-md btn-danger">
      <i class="fa fa-tags"></i> Mua ngay
  </a>
</td>
<td class="verticalMid" ng-if="itemPartNumber['price']=='Liên hệ 1900.6536'">    
    <div class="clearfix"></div>
    <a href="" class="btn btn-md btn-danger">
      <i class="fa fa-phone"></i> Liên hệ
  </a>
</td>
</tr>
</tbody>
<div class="position_anchor" style="position: absolute; bottom: 60px"id="specifications"></div>
</table>
<div class="paginationPartNumber">
  <dir-pagination-controls
  pagination-id="part_number_pagination"
  max-size="1"
  direction-links="true"
  boundary-links="true" >
</dir-pagination-controls>
</div>
<!-- //--- -->

<!-- <span id="specifications" style="padding:250px 0px"></span> -->
</div>
</div>
</div>
<!-- // -->

<div class="producttab ">
    <div class="tabsslider horizontal-tabs  col-xs-12">
        <ul class="nav nav-tabs wrapper-nav" id="navbar" style="padding: 12px;position: sticky;">
            <li class="active"><a href="#thong-so">THÔNG SỐ KỸ THUẬT</a></li>
            <li class="item_nonactive"><a href="#tong-quan">Tổng quan</a></li>
            <!-- <li class="item_nonactive "><a href="#kick-thuoc">Kích thước</a></li> -->
            <!-- <li class="item_nonactive "><a href="#document">Document & Dowload</a></li> -->
            <!-- <li class="item_nonactive "><a href="#imagesPro">Ảnh thực tế</a></li> -->
            <!-- <li class="item_nonactive"><a href="#danh-gia">Đánh giá ({{$product->countRate->count()}})</a></li> -->
            <!-- <li class="item_nonactive "><a href="#hoi-dap">Hỏi đáp</a></li> -->
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
                            @foreach(!empty($dataPro) ? $dataPro : [] as $title => $value)
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

<div id="document">
  <div class=" panel-primary">
      <div class="panel-heading">
          <h3 class="panel-title">DOCUMENT & DOWNLOAD</h3>
      </div>
      <div class="panel-body">
        <div>
          @if($product->download_id=='') 
          <span>Tài liệu đang được cập nhật!<span> 
            @else 
                        <!--     <b>Catalogue</b>
                            <br>

                            <a href="{{route('document',['slug'=>$product->slug])}}"><img src="{{url('uploads/download')}}/icon-download-9.png"  title="{{$product->taiLieu->title}}" style="display: inline"> <span>{{$product->taiLieu->title}}</span>
                            </a> 
                        </div> -->

                        <div class="w3-bar w3-black text-center">
                            <button style="color: #fff;background: #849be9;" class="w3-bar-item w3-button" onclick="openCity('vn')">Tiếng Việt</button>
                            <button style="color: #fff;background: #849be9;" class="w3-bar-item w3-button" onclick="openCity('en')">English</button>
                            <button style="color: #fff;background: #849be9;" class="w3-bar-item w3-button" onclick="openCity('jp')">Japan</button>
                            <button style="color: #fff;background: #849be9;" class="w3-bar-item w3-button" onclick="openCity('cn')">China</button>
                        </div> 
                        <div id="vn" class="city">
                            <h2>
                              <a href="{{route('document',['slug'=>$product->slug,'lang'=>'vn'])}}">
                                <img src="{{url('uploads/download')}}/icon-download-9.png"  title="{{$product->taiLieu->title}}" style="display: inline"> 
                                <span>Catalog: {{$product->taiLieu->title}}</span>
                            </a> 
                        </h2>
                        <p>{!!$product->taiLieu->content!!}</p>
                    </div>

                    <div id="en" class="city" style="display:none">
                        <h2>
                          <a href="{{route('document',['slug'=>$product->slug,'lang'=>'en'])}}">
                            <img src="{{url('uploads/download')}}/icon-download-9.png"  title="{{$product->taiLieu->title}}" style="display: inline"> 
                            <span>{{$product->taiLieu->file_download_en}}</span>
                        </a> 
                    </h2>
                    <p>{!!$product->taiLieu->content!!}</p>
                </div>

                <div id="jp" class="city" style="display:none">
                    <h2>
                      <a href="{{route('document',['slug'=>$product->slug,'lang'=>'jp'])}}">
                        <img src="{{url('uploads/download')}}/icon-download-9.png"  title="{{$product->taiLieu->title}}" style="display: inline"> 
                        <span>{{$product->taiLieu->file_download_jp}}</span>
                    </a> 
                </h2>
                <p>{!!$product->taiLieu->content!!}</p>
            </div>
            <div id="cn" class="city" style="display:none">
                <h2>
                  <a href="{{route('document',['slug'=>$product->slug,'lang'=>'cn'])}}">
                    <img src="{{url('uploads/download')}}/icon-download-9.png"  title="{{$product->taiLieu->title}}" style="display: inline"> 
                    <span>{{$product->taiLieu->file_download_cn}}</span>
                </a> 
            </h2>
            <p>{!!$product->taiLieu->content!!}</p>
        </div>
        @endif
    </div>
</div>
</div>
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
<div class="clearfix"></div>
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
            <div class="">
                <div class="col-md-3">
                  <div class="advanced-review row">
                    <div class="advanced-review-rating">
                      <h2 class="based-title" style="margin-bottom: 20px">Đánh giá {{$product->title}}</h2>
                      <div class="avg-rating">
                        <span class="avg-rating-number" style="font-size: 23px; margin-top: 15px; float: left;">{{number_format($percentRated,1)}}</span>
                        <div class="star-rating" style="font-size: 1.8em;margin:15px 25px;" title="Rated 0.0 out of 5">
                            <span style="width:{{$countRates > 0 ? (100/5 * $percentRated) : 100 }}%"></span>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="rating-histogram" style="width: 100%">
                        <div class="rating-bar" style="position: relative;">
                          <div class="star-rating" style="margin-right:10px;font-size: 1.6em" title="Rated 5 out of 5">
                            <span style="width:100%"></span>
                          </div>
                          <div class="rating-count zero">{{$countRate5}}</div>
                          <div class="rating-percentage-bar" style="position:absolute;top:7px;right:0;width: 12.25em;height: 0.625em;border-radius: 0.313em;background-color: #f3f3f3;">
                              <span style="width:{{$countRate5 > 0 ? 100/($countRates/$countRate5) : 0}}%" class="rating-percentage" style="height: 100%;background-color: #59abe1; display: block;"></span>
                          </div>
                        </div>
                        <div class="rating-bar" style="position: relative;">
                          <div class="star-rating" style="margin-right:10px;font-size: 1.6em" title="Rated 4 out of 5">
                            <span style="width:80%"></span>
                          </div>
                          <div class="rating-count zero">{{$countRate4}}</div>
                          <div class="rating-percentage-bar" style="position:absolute;top:7px;right:0;width: 12.25em;height: 0.625em;border-radius: 0.313em;background-color: #f3f3f3;">
                              <span style="width:{{$countRate4 > 0 ? 100/($countRates/$countRate4) : 0}}%" class="rating-percentage" style="height: 100%;background-color: #59abe1; display: block;"></span>
                          </div>
                        </div>
                        <div class="rating-bar" style="position: relative;">
                          <div class="star-rating" style="margin-right:10px;font-size: 1.6em" title="Rated 3 out of 5">
                            <span style="width:60%"></span>
                          </div>
                          <div class="rating-count zero">{{$countRate3}}</div>
                          <div class="rating-percentage-bar" style="position:absolute;top:7px;right:0;width: 12.25em;height: 0.625em;border-radius: 0.313em;background-color: #f3f3f3;">
                              <span style="width:{{$countRate3 > 0 ? 100/($countRates/$countRate3) : 0}}%" class="rating-percentage" style="height: 100%;background-color: #59abe1; display: block;"></span>
                          </div>
                        </div>
                        <div class="rating-bar" style="position: relative;">
                          <div class="star-rating" style="margin-right:10px;font-size: 1.6em" title="Rated 2 out of 5">
                            <span style="width:40%"></span>
                          </div>
                          <div class="rating-count zero">{{$countRate2}}</div>
                          <div class="rating-percentage-bar" style="position:absolute;top:7px;right:0;width: 12.25em;height: 0.625em;border-radius: 0.313em;background-color: #f3f3f3;">
                              <span style="width:{{$countRate2 > 0 ? 100/($countRates/$countRate2) : 0}}%" class="rating-percentage" style="height: 100%;background-color: #59abe1; display: block;"></span>
                          </div>
                        </div>
                        <div class="rating-bar" style="position: relative;">
                          <div class="star-rating" style="margin-right:10px;font-size: 1.6em" title="Rated 1 out of 5">
                            <span style="width:20%"></span>
                          </div>
                          <div class="rating-count zero">{{$countRate1}}</div>
                          <div class="rating-percentage-bar" style="position:absolute;top:7px;right:0;width: 12.25em;height: 0.625em;border-radius: 0.313em;background-color: #f3f3f3;">
                              <span style="width:{{$countRate1 > 0 ? 100/($countRates/$countRate1) : 0}}%" class="rating-percentage" style="height: 100%;background-color: #59abe1; display: block;"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-9">
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
              </div></br>
              <div id="review" class="col-md-12">
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
            </div>
          </div>
    </form>
 </div>
<div class="clearfix" style="margin-bottom: 15px"></div>
<div id="hoi-dap" class="contacts-form col-md-12">
   <div class="panel panel-primary" style="position: relative;">
    <div class="panel-heading">
        <h3 class="panel-title">Hỏi đáp</h3>
    </div>
    <div class="panel-body">
      <!-- Contenedor Principal -->
      <div class="comments-container" style="width: 100%">
        <form action="{{route('comment')}}" method="POST" role="form" enctype="multipart/form-data">
            <legend class="titlePro">THẢO LUẬN VỀ: {{$product->title}}</legend>
            <div class="form-group">
                <textarea name="comment" id="desc" class="form-control" rows="3"  placeholder="Mời bạn để lại bình luận.."></textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="" placeholder="Họ và tên.." required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="number" name="phone" class="form-control" id="" placeholder="Số điện thoại.." required>
                    </div>
                </div>
            </div>
            <input type="hidden" name="product_id" value="{{$product->id}}">
            @csrf
            <input type="file" name="upload_file" accept="image/*">
            <button type="submit" class="btn btn-primary pull-right">Gửi</button>
        </form>
        <div class="clearfix" style="margin-bottom: 15px"></div>
        <div class="row">
            <div class="col-md-6">
                <b>{{$product->countComment->count()}} Bình Luận</b>
                <span style="margin-left: 15px">
                    <input type="checkbox" name=""> Xem Bình Luận Kỹ Thuật
                </span>
            </div>
            <!-- <div class="col-md-6">
                <span>
                    <input style="width: 50%" type="" class="pull-right" name="" placeholder="Tìm theo nội dung, người gửi...">
                    <i style="position: absolute;right:15px;font-size: 33px;color:#bcd5d5" class="fa fa-search pull-right"></i>
                </span>
            </div> -->
        </div>
        <ul id="comments-list">
          <li dir-paginate="commentItem in getCommentProduct | itemsPerPage: 3">
            <div class="comment-main-level">
              <!-- Avatar -->
              <!-- <div class="comment-avatar">
                <img src="https://icon-library.net/images/windows-8-user-icon/windows-8-user-icon-10.jpg" alt="" style="width: 20px">
              </div> -->
              <!-- Contenedor del Comentario -->
              <div class="comment-box">
                <div class="comment-head">
                  <h6 class="comment-name by-author"><i class="fa fa-user"></i> @{{commentItem['name']}}</h6>
                  <!-- <span>@{{commentItem['created_at']}}</span> -->
                  <i class="fa fa-reply" ng-click="replyComment(commentItem['id'])">      <!-- @{{commentItem['reply']}} thảo luận --></i>
                  <!-- <i class="fa fa-heart"></i> -->
                </div>
                <div class="comment-content">
                    @{{commentItem['comment']}}
                </div>
                <img ng-if="commentItem['cover_image']" style="margin-left: 20px; max-height: 200px" src="{{url('uploads/comment')}}/@{{commentItem['cover_image']}}" alt="">
                <div class="col">
                  <span class="fa fa-reply" ng-click="replyComment(commentItem['id'])" style="cursor: pointer;font-size: 14px;color:#3498db">     
                    <span ng-if="commentItem['quantity_reply'] > 0">
                      Trả lời (@{{commentItem['quantity_reply']}})
                    </span>
                    <span ng-if="commentItem['quantity_reply'] <= 0">
                        Trả lời
                    </span>
                  </span>
                  <span style="font-size: 14px">-      @{{commentItem['created_at']}}</span>
                </div>
              </div>
            </div>
            <!-- Respuestas de los comentarios -->
            <ul class="comments-list reply-comment reply-list hide" >
              <li ng-repeat="itemReply in getReplyCommentProduct">
                <div class="comment-avatar" style="margin-left: 26px">
                  <img ng-if="itemReply['name']" src="https://icon-library.net/images/windows-8-user-icon/windows-8-user-icon-10.jpg" alt="">
                  <img ng-if="itemReply['name'] == null" src="https://hoplongtech.com/uploads/logo/favicon.png">
                </div>
                <div class="comment-box">
                    <div class="comment-head">
                      <h6 ng-if="itemReply['name']" class="comment-name"><a href="">@{{itemReply['name']}}</a></h6>
                      <h6 ng-if="!itemReply['name']" class="comment-name"><a href="">Quản trị viên</a></h6>
                      <span>@{{itemReply['created_at']}}</span>
                      <i class="fa fa-heart"></i>
                    </div>
                    <div class="comment-content">
                        @{{itemReply['comment']}}
                    </div>
                </div>
              </li>
            </ul>
            <ul class="comments-list reply-comment reply-list hide" >
              <li>
                <form action="{{route('comment')}}" method="POST" role="form" enctype="multipart/form-data">
                  @csrf                                            
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="comment" id="desc" class="form-control" rows="3"  placeholder="Mời bạn để lại bình luận.."></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="name" class="form-control" name="name" placeholder="Nhập tên" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="number" class="form-control" name="phone" placeholder="Nhập số điện thoại" required>
                      </div>
                    </div>
                    <input type="hidden" name="id_comment_reply" value="@{{commentItem['id']}}">
                    <input type="hidden" name="product_id" value="@{{commentItem['product_id']}}">
                  </div>
                  <button type="submit" class="pull-right btn btn-primary">Gửi</button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
        <div class="pull-right">
          <dir-pagination-controls
          max-size="1"
          direction-links="true"
          boundary-links="true" >
          </dir-pagination-controls>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
</div>
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
                        <div class="product-image-container">
                            <a href="{{route('view',['slug'=>$other->slug])}}" target="_self" title="{{$other->title}}">
                              <?php $urlImage = ($other->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                                <img src="{{url($urlImage)}}/{{$other->cover_image}}" class="img-1 img-responsive" alt="">
                            </a>
                        </div>
                  </div>
                  <div class="right-block">
                    <div class="button-group so-quickview cartinfo--left">
                        
                        <span>
                          @if($other->price > 0)
                          <button type="button" class="addToCart addCart" title="Thêm vào giỏ hàng">
                              <a href="{{route('add_cart',['id'=>$other->id])}}">
                                  <span style="color: #fff">Thêm vào giỏ</span>
                              </a>
                          </button>
                          @else
                          <a class="addToCart addCart" href="{{route('view',['slug'=>$other->slug])}}">
                              Xem chi tiết
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
<!-- //bao gia -->
<div class="modal fade" id="modal-id">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">
            <span ng-hide="language" style="color: red">Yêu cầu nhanh qua hotline: 1900.6536</span>
            <span  ng-show="language" style="color: red">Quick Support: 1900.6536</span>
        </h4> 
        <a style="float: right;margin: -25px 15px 0 0;" href="" class="btn btn-md btn-primary">
            <span ng-click="language=false" ng-show="language">Vietnamese</span>
            <span ng-click="language=true" ng-hide="language">English</span>
        </a>
    </div>
    <div class="modal-body">
      <form action="{{route('send_mail')}}" method="POST" role="form">
        <legend>
          <span ng-hide="language">Bạn đang yêu cầu báo giá sản phẩm {{$product->title}} </br>
          Nhập đầy đủ thông tin dưới đây để chúng tôi hỗ trợ bạn.</span> 
          <span ng-show="language">Enter information to receive a quote</span> 
      </legend>
      <input type="hidden" name="slug" value="{{$product->slug}}">
      <div class="form-group">
          <label class="control-label" for="">
            <span ng-hide="language">Họ tên:*</span>
            <span ng-show="language">Full name:*</span>
        </label>
        <input ng-hide="language" ng-model="KHACH_HANG" type="text" name="name" class="form-control" id="" required placeholder="Nhập họ tên">
        <input ng-show="language" ng-model="KHACH_HANG" type="text" name="name" class="form-control" id="" required placeholder="Enter your name">
    </div>
    <div class="form-group">
      <label class="control-label" for="">Email:</label>
      <input ng-hide="language" ng-model="EMAIL" type="email" name="email" class="form-control" id="" required placeholder="Nhập email">
      <input ng-show="language" ng-model="EMAIL" type="email" name="email" class="form-control" id="" required placeholder="Enter email">
  </div>
  <div class="form-group">
      <input type="hidden" name="product_id" class="form-control" id="" value="{{$product->id}}"> 
  </div>
  <div class="form-group">
      <input ng-model="SAN_PHAM" type="hidden" name="product" class="form-control" id="SAN_PHAM" value="{{$product->title}}">
  </div>
  <input ng-model="MA_SAN_PHAM" type="hidden" name="code_product" class="form-control" id="MA_SAN_PHAM" value="{{$product->slug}}"> 
  <div class="form-group">
      <label class="control-label" for="">
        <span ng-hide="language">Số điện thoại:*</span>
        <span ng-show="language">Phone number:*</span>
    </label>    
    <input ng-hide="language" ng-model="SO_DIEN_THOAI" type="number" name="phone" class="form-control" id="" required placeholder="Nhập số điện thoại">
    <input ng-show="language" ng-model="SO_DIEN_THOAI" type="number" name="phone" class="form-control" id="" required placeholder="Enter your phone number">
</div>
<div class="form-group">
  <label class="control-label" for="">
    <span ng-hide="language">Địa chỉ báo giá:*</span>
    <span ng-show="language">Address quote:*</span>
</label>
<select ng-model="DIA_CHI" ng-hide="language" id="DIA_CHI" name="diaChi" id="input" class="form-control" required="required">
    <option value="#">
      <span>Chọn địa chỉ báo giá</span>
  </option>
  <option value="HOPLONG">
      <span>Hà Nội</span>
  </option>
  <option value="TAHP">
      <span>Hải Phòng</span>
  </option>
  <option value="TADN">
      <span>Đà Nẵng</span>
  </option>     
  <option value="CANTHO">
      <span>Cần Thơ</span>
  </option>     
  <option value="TAHCM">
      <span>Thành Phố HCM</span>
  </option>        
</select>
<select ng-model="DIA_CHI" ng-show="language" name="diaChi" id="input" class="form-control" required="required">
    <option value=""><span>Choose a quote address</span></option>
    <option value="HOPLONG"><span>Ha Noi</span></option>
    <option value="TAHP"><span>Hai Phong</span></option>
    <option value="TADN"><span>Da Nang</span></option>
    <option value="CANTHO"><span>Can Tho</span></option>
    <option value="TAHCM"><span>Ho Chi Minh City</span></option>
</select>
</div>
<div class="form-group">
  <label class="control-label" for="">
    <span ng-hide="language">Nội dung:</span>
    <span ng-show="language">Content:</span>
</label>
<textarea ng-hide="language" ng-model="NOI_DUNG" name="content"  class="form-control" rows=8 placeholder="Nội dung.."></textarea>
<textarea ng-show="language" ng-model="NOI_DUNG" name="content"  class="form-control" rows=8 placeholder="Enter content.."></textarea>
</div>@csrf
<div class="form-group text-right">
  <button ng-click="abc()" type="submit" class="btn btn-primary">
    <span ng-hide="language">Gửi</span>
    <span ng-show="language">Send</span>
</button>
<button ng-hide="language" type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
<button ng-show="language" type="button" class="btn btn-info" data-dismiss="modal">Close</button>
</div>
</form>
</div>
</div>
<div class="modal-footer">
</div>
</div>
</div>
<!-- //bao gia -->
<input type="hidden" class="ng_product_id" value="{{$product->id}}">
</div>
</div>
</div>
<!--Middle Part End-->
</div>
<!-- //--- -->
<script type="text/javascript">
    $('.product_quantity_up').click(function(){
        $("#quantity-input").val(parseInt($("#quantity-input").val()) - 1);
    });
    $('.product_quantity_down').click(function(){
        $("#quantity-input").val(parseInt($("#quantity-input").val()) + 1);
    });
</script>
<!-- //--- -->
<!-- //--- -->
<!-- load js before load page -->
<script type="text/javascript">
  $(document).ready(function() {
    document.getElementsByTagName("html")[0].style.visibility = "visible";
});
</script>
<!-- load js before load page -->
<!-- <script>
  var app = angular.module("myApp",['angularUtils.directives.dirPagination']);
  app.controller("myCtrl", function($scope,$http) {
    var url = window.location.protocol + "//" + window.location.hostname;
    var product_id = $('.ng_product_id').val();
    var currentdate = new Date(); 
        // if(currentdate.getMonth()+1 < 10){
        //     var month = "0"+(currentdate.getMonth()+1);
        // }
        var currentTime = currentdate.getFullYear() + "-"
        + (currentdate.getMonth()+1<10 ? "0"+(currentdate.getMonth()+1) : currentdate.getMonth()+1)  + "-"
        + currentdate.getDate();

        $http.get(url+'/api/getRateProduct/' + product_id).then(function(res){
          $scope.getRateProduct = res.data;
      });
        $http.get(url+'/api/getCommentProduct/' + product_id).then(function(res){
          $scope.getCommentProduct = res.data;
      }); 
        $scope.replyComment = function(idComment){
          $http.get(url+'/api/getReplyCommentProduct/' + idComment).then(function(res){
            $('.reply-comment').addClass('hide');
            var togg = ($('.fa-reply').parent().parent().parent().parent().find('.reply-comment').removeClass('hide').addClass('show'));
            $scope.getReplyCommentProduct = res.data;
        }); 
      };
        // get partnumber
        $http.get(url+'/api/getPartNumber/' + product_id).then(function(res){
          for(var i=0; i<res.data.length; i++){
            if(res.data[i]['price'] == '' || $.isNumeric(res.data[i]['price']) == false){
              res.data[i]['price'] = "Liên hệ 1900.6536";
              continue;
          }
          if((currentTime <= res.data[i]['time_discount'])){
                    // console.log(res.data[i]['price']);
                    var productPrice = res.data[i]['price'] - ((res.data[i]['price'] * res.data[i]['discount'])/100);
                    res.data[i]['price'] = String(productPrice).replace(/(.)(?=(\d{3})+$)/g,'$1,')+" VNĐ";
                    continue;
                }
                if($('.AuthCheck').val() == 'true'){
                    var priceProduct = (res.data[i]['price_when_login'] != null) ? (res.data[i]['price_when_login']) : (res.data[i]['price'] > 0 ? (res.data[i]['price']) : res.data[i]['price']);

                    var showPrice = ($(".Discount").val() != null) ? (Math.round(priceProduct - ((priceProduct/100) * $(".Discount").val()))) : priceProduct;
                    res.data[i]['price'] = String(showPrice).replace(/(.)(?=(\d{3})+$)/g,'$1,')+" VNĐ";
                    continue;
                }
                else{
                    res.data[i]['price'] = res.data[i]['price'] > 0 ? String(res.data[i]['price']).replace(/(.)(?=(\d{3})+$)/g,'$1,')+'  VNĐ' : res.data[i]['price'];
                    continue;
                }
            }
            $scope.getPartNumber = res.data;
        });
        // get partnumber
        // add to cart
        $scope.quantity = 1;
        $scope.addCart = function(idProduct,quantity){
          $http.get(url+'/cart/add-to-cart/' + idProduct + '/' + quantity).then(function(res){
            alert('Đã thêm sản phẩm vào giỏ hàng');
            location.reload();
        });
      }
      $scope.shopNow = function(idProduct,quantity){
          $http.get(url+'/cart/shop-now/' + idProduct + '/' + quantity).then(function(res){
            window.location.href = url+"/order";
        });
      }
        // add to cart

       // show hide dimension
       $scope.showDimension = function(){
        $(".fa-plus").addClass('hide');
        $(".fa-plus").removeClass('show');
        $(".fa-minus").addClass('show');
        $(".fa-minus").removeClass('hide');
        $(".togDimension").addClass('showDimension');
        $(".togDimension").removeClass('hideDimension');            
    }
    $scope.hideDimension = function(){
        $(".fa-minus").addClass('hide');
        $(".fa-minus").removeClass('show');
        $(".fa-plus").addClass('show');
        $(".fa-plus").removeClass('hide');

        $(".togDimension").addClass('hideDimension');
        $(".togDimension").removeClass('showDimension');
    }
        // show hide dimension 
    });
     // share likedin
    jQuery(document).ready(function($) {
       $('.share').click(function() {
         var NWin = window.open($(this).prop('href'), '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
         if (window.focus)
         {
           NWin.focus();
       }
       return false;
   });
     // share likedin
 });
</script> -->
<!-- //--- -->
@stop()
