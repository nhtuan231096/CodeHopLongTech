@extends('layouts.product1')
@section('content')
<!-- <script src="{{url('public/js')}}/angular.min.js"></script> -->
<!-- <script src="{{url('public/js')}}/OrderCtrl.js"></script> -->
<script src="{{url('public/js')}}/dirPagination.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{url('public/css')}}/styleProduct.css">
<script type="text/javascript">
 jQuery(document).ready(function($) {
  $(window).load(function() {
   if ($('.wrapper-nav').length > 0) {
     var _top = $('.wrapper-nav').offset().top - parseFloat($('.wrapper-nav').css('marginTop').replace(/auto/, 0));
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
<style type="text/css">
  /*.paginationPartNumber ul li a{
    padding: 5px 10px;
    border: 1px solid #ddd;
    }*/
    .pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
      z-index: 3;
      color: #fff;
      cursor: default;
      background-color: #337ab7;
      border-color: #337ab7;
    }
    .paginationPartNumber ul li a {
      padding: 5px 10px;
      border: 1px solid #ddd;
    }
    .pagination > li > a, .pagination > li > span {
      position: relative;
      float: left;
      padding: 6px 12px;
      margin-left: -1px;
      line-height: 1.42857143;
      color: #337ab7;
      text-decoration: none;
      background-color: #fff;
      border: 1px solid #ddd;
    }
  </style>
  <script src="https://360player.io/static/dist/scripts/embed.js" async></script>
  <div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
      <div class="row">
        <nav class="woocommerce-breadcrumb" style="padding:0 15px">
          <a href="{{route('home')}}">Home</a>
          <span class="delimiter">
            <i class="tm tm-breadcrumbs-arrow-right"></i>
          </span><a href="{{route('view_category',['slug'=>$product->category->slug])}}">{{$product->category->title}}</a>
          <span class="delimiter">
            <i class="tm tm-breadcrumbs-arrow-right"></i>
          </span>{{$product->title}}
        </nav>
        <!-- .woocommerce-breadcrumb -->
        <div id="primary" class="content-area" style="margin:0 auto">
          @if(Session::has('success'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><center>{{Session::get('success')}}</center></strong>
          </div>
          @endif 
          @if(Session::has('error'))
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><center>{{Session::get('error')}}</center></strong>
          </div>
          @endif  
          <main id="main" class="site-main">
            <div class="product product-type-simple">
              <div class="single-product-wrapper">
                
                <!-- //--- PRODUCT IMAGE -->

                <!-- todo -->
                <div class="product-images-wrapper thumb-count-3">
                 <span class="onsale">
                  @if($product->discount > 0)
                  <span class="woocommerce-Price-amount amount">
                   <span class="woocommerce-Price-currencySymbol">-{{$product->discount}}</span>%
                 </span>
                 @endif
               </span>
               <div class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images" data-columns="4">
                <div class="techmarket-single-product-gallery-images">
                 <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images">



                  <figure class="woocommerce-product-gallery__wrapper slick-initialized slick-slider cover_image">
                   <div aria-live="polite" class="slick-list draggable">
                    <div class="slick-track" role="listbox">
                     <div class="woocommerce-product-gallery__image slick-slide slick-current slick-active" style="width: auto; position: relative; overflow: hidden;" tabindex="-1" role="option">
                      <a href="" tabindex="0">
                        <?php $urlImage = ($product->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                        <img src="{{url($urlImage)}}/{{$product->cover_image}}" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                      </a>
                    </div>
                  </div>
                </div>
              </figure>
              <figure class="woocommerce-product-gallery__wrapper slick-initialized slick-slider cover_image_2 hide">
               <div aria-live="polite" class="slick-list draggable">
                <div class="slick-track" role="listbox">
                 <div class="woocommerce-product-gallery__image slick-slide slick-current slick-active" style="width: auto; position: relative; overflow: hidden;" tabindex="-1" role="option">
                  <a href="" tabindex="0">
                    <?php $urlImage = ($product->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                    <img src="{{url($urlImage)}}/{{$product->cover_image_2}}" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
                  </a>
                </div>
              </div>
            </div>
          </figure>
          <figure class="woocommerce-product-gallery__wrapper slick-initialized slick-slider cover_image_3 hide">
           <div aria-live="polite" class="slick-list draggable">
            <div class="slick-track" role="listbox">
             <div class="woocommerce-product-gallery__image slick-slide slick-current slick-active" style="width: auto; position: relative; overflow: hidden;" tabindex="-1" role="option">
              <a href="" tabindex="0">
                <?php $urlImage = ($product->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
                <img src="{{url($urlImage)}}/{{$product->cover_image_3}}" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="">
              </a>
            </div>
          </div>
        </div>
      </figure>
      <figure class="woocommerce-product-gallery__wrapper slick-initialized slick-slider video hide" style="display: none">
       <div aria-live="polite" class="slick-list draggable">
        <div class="slick-track" role="listbox">
         <div class="woocommerce-product-gallery__image slick-slide slick-current slick-active" style="width: auto; position: relative; overflow: hidden;" tabindex="-1" role="option">
          <a href="" tabindex="0">
            <iframe width="100%" height="413px" src="{{$product->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </a>
        </div>
      </div>
    </div>
  </figure>
  


</div>
</div>
<div class="techmarket-single-product-gallery-thumbnails">
 <figure class="techmarket-single-product-gallery-thumbnails__wrapper slick-initialized slick-slider slick-vertical">
  <div aria-live="polite" class="slick-list draggable" style="max-height: 463px;">
   <div class="slick-track" style="max-height: 463px;">
    @if(isset($product->cover_image))
    <figure class="techmarket-wc-product-gallery__image slick-slide slick-current slick-active slick-image" style="width: 90px;" tabindex="-1">
      <?php $urlImage = ($product->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
      <img src="{{url($urlImage)}}/{{$product->cover_image}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="">
    </figure>
    @endif
    @if(isset($product->cover_image_2))
    <figure class="techmarket-wc-product-gallery__image slick-slide slick-image-2" style="width: 90px;" tabindex="-1">
      <?php $urlImage = ($product->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
      <img src="{{url($urlImage)}}/{{$product->cover_image_2}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="">
    </figure>
    @endif
    @if(isset($product->cover_image_3))
    <figure class="techmarket-wc-product-gallery__image slick-slide slick-image-3" style="width: 90px;" tabindex="-1">
      <?php $urlImage = ($product->pdp == 1) ? 'uploads/product_new/cover_image' : 'uploads/product'?>
      <img src="{{url($urlImage)}}/{{$product->cover_image_3}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="">
    </figure>
    @endif
    @if(isset($product->image_360))
    <figure class="techmarket-wc-product-gallery__image slick-slide slick-image-360" style="width: 90px;" tabindex="-1" >
      <a data-toggle="modal" href='#image_360'>
        <img src="https://hoplongtech.com/public/home/assets/images/360.png" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="">
      </a>
    </figure>
    @endif
    @if(isset($product->video))
    <figure class="techmarket-wc-product-gallery__image slick-slide slick-video" style="width: 90px;" tabindex="-1">
      <img src="https://hoplongtech.com/public/home/assets/images/video.png" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="">
    </figure>
    @endif
  </div>
</div>
</figure>
</div>
</div>
</div>



<div class="modal fade" id="image_360">
  <div class="modal-dialog" style="max-width: 678px">
    <div class="modal-content text-center">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">{{$product->title}}</h4>
      </div>
      <div class="modal-body">
        <iframe style="margin-bottom: 66px" src="{{$product->image_360}}" scrolling="no" frameborder="0" width=560 height=315 allowfullscreen data-token="k6f7rb"></iframe>                            
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
  $(document).ready(function(){
          // image
          var image = $('.cover_image');
          var image_2 = $('.cover_image_2');
          var image_3 = $('.cover_image_3');
          var video = $('.video');

          image_2.hide();
          image_3.hide();
          video.hide();

          // button slick image
          var slick_image = $('.slick-image');
          var slick_image_2 = $('.slick-image-2');
          var slick_image_3 = $('.slick-image-3');
          var slick_video = $('.slick-video');
          
          $('.slick-image').click(function(){
            // image.removeClass('hide');   
            image.show(0);

            slick_image.addClass('slick-current slick-active');
            slick_image_2.removeClass('slick-current slick-active');
            slick_image_3.removeClass('slick-current slick-active');
            slick_video.removeClass('slick-current slick-active');

            // image_2.removeClass('show').addClass('hide');            
            // image_3.removeClass('show').addClass('hide');            
            // video.removeClass('show').addClass('hide');
            image_2.hide();            
            image_3.hide();            
            video.hide();


          });

          $('.slick-image-2').click(function(){
            // image_2.removeClass('hide');
            image_2.show(0);

            slick_image_2.addClass('slick-current slick-active');
            slick_image.removeClass('slick-current slick-active');
            slick_image_3.removeClass('slick-current slick-active');
            slick_video.removeClass('slick-current slick-active');

            // image.removeClass('show').addClass('hide');            
            // image_3.removeClass('show').addClass('hide');            
            // video.removeClass('show').addClass('hide');  
            image.hide();            
            image_3.hide();            
            video.hide();            
          });

          $('.slick-image-3').click(function(){
            // image_3.removeClass('hide');
            image_3.show(0);

            slick_image_3.addClass('slick-current slick-active');
            slick_image_2.removeClass('slick-current slick-active');
            slick_image.removeClass('slick-current slick-active');
            slick_video.removeClass('slick-current slick-active');

            // image.removeClass('show').addClass('hide');            
            // image_2.removeClass('show').addClass('hide');            
            // video.removeClass('show').addClass('hide');      
            image.hide();            
            image_2.hide();            
            video.hide();            
          });

          $('.slick-video').click(function(){
            // video.removeClass('hide');
            video.show(0);

            slick_video.addClass('slick-current slick-active');
            slick_image.removeClass('slick-current slick-active');
            slick_image_2.removeClass('slick-current slick-active');
            slick_image_3.removeClass('slick-current slick-active');

            // image.removeClass('show').addClass('hide');            
            // image_2.removeClass('show').addClass('hide');            
            // image_3.removeClass('show').addClass('hide'); 
            image.hide();            
            image_2.hide();            
            image_3.hide();            
          });

          
        });
      </script>
      <!-- todo -->

      <!-- //--- PRODUCT IMAGE -->




      <div class="summary entry-summary">
        <div class="single-product-header">
          <h2 class="product_title entry-title">{{$product->title}}</h2>
          <div class="rating-and-sharing-wrapper">
            <div class="woocommerce-product-rating">
              <div class="star-rating">
                <span style="width:100%">Rated
                  <strong class="rating">5.00</strong> out of 5 based on
                  <span class="rating">10/10</span> đánh giá</span>
                </div>
              </div>
            </div>
          </div>
          <div class="single-product-meta">
            <div class="brand"> 
                                <!-- @foreach($categorys1 as $cat)
                                 <a href="{{route('view_category',['slug'=>$cat->slug])}}"> <img width="145" height="50" class="img-responsive desaturate" alt="{{$cat->title}}" src="{{url('uploads/partner')}}/{{$cat->cover_image}}"></a>
                                @endforeach
                              -->
                              <!-- <img width="145" height="50" class="img-responsive desaturate" alt="{{$cat->title}}" src="{{url('uploads/partner')}}/{{$cat->cover_image}}"> -->
                            </div>
                            <div class="cat-and-sku">
                              <span class="posted_in categories">
                                <a rel="dofollow" href="{{route('view_category',['slug'=>$product->category->slug])}}">
                                  <span style="text-decoration: underline;">Danh mục: {{$product->category->title}} </span></a>
                                </span>
                                <span class="sku_wrapper">Mã hàng:
                                  <span class="sku">{{$product->title}}</span>
                                </span>
                              </div>
                              <div>
                                @if($product->download_id=='') 
                                <span>Tài liệu đang được cập nhật!<span> 
                                  @else 
                                  <b>Download tài liệu kỹ thuật </b>
                                  <a href="{{route('document',['slug'=>$product->slug])}}"><img src="{{url('uploads/download')}}/icon-download-9.png"  title="{{$product->taiLieu->title}}" style="display: inline"> 
                                  </a> 
                                  @endif

                                </div>
                              </div>

                              <div class="product-actions-wrapper">
                                <div class="product-actions">
                                  <p class="price">
                                    <ins>   
                                      <span class="woocommerce-Price-amount amount">Giá:
                                        
                                        {{$cart->PriceProduct($product)}}
                                      </span> 
                                    </ins>
                                  </p>
                                  <!-- .single-product-header -->
                                  <div class="modal fade" id="modal-id">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">
                                            <span ng-hide="language" style="color: red">Yêu cầu nhanh qua hotline: 1900.6536</span>
                                            <span  ng-show="language" style="color: red">Quick Support: 1900.6536</span>
                                          </h4> 
                                          <a style="float: right;" href="" class="btn btn-md btn-primary">
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
                                              <textarea ng-hide="language" ng-model="NOI_DUNG" name="content" rows=8 placeholder="Nội dung.."></textarea>
                                              <textarea ng-show="language" ng-model="NOI_DUNG" name="content" rows=8 placeholder="Enter content.."></textarea>
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
                                  <div>
                                    <form enctype="multipart/form-data" action="{{route('shopNow')}}" method="post" class="cart"> 
                                      @if($product->price > 0)
                                      @csrf
                                      <input type="hidden" name="id" value="{{$product->id}}">
                                      <span style="font-size: 14px;position: absolute;top: 65px">Số lượng</span> 
                                      <input style="width: 66px; margin-right: 5px" type="number" name="quantity" class="form-control bfh-number" value="1">
                                      <!-- <a href="{{route('add_cart',['id'=>$product->id])}}"  class="btn btn-primary" style="font-weight: bold; padding: 13.6px 20px; font-size: 18px; width: 100%"> <i style="margin-right: 5px" class="fa fa-shopping-cart"></i>Thêm vào Giỏ hàng</a> -->
                                      <button class="btn btn-primary" name="addCart" value="true" style="font-weight: bold; padding: 13.6px 20px; font-size: 18px; width: 100%"> <i style="margin-right: 5px" class="fa fa-shopping-cart"></i>Thêm vào Giỏ hàng</button>
                                      <button class="btn btn-danger fa fa-tags" name="shopNow" style="font-weight: bold; padding: 16px 20px; font-size: 18px; width: 100%">Mua ngay</button>
                                      @else
                                      <a class="btn btn-danger fa fa-money" data-toggle="modal" href='#modal-id' style="font-weight: bold; padding: 18px 20px; font-size: 18px; width: 100%;color:#fff"><span> Yêu cầu báo giá</span></a>
                                      @endif
                                    </form>
                                    <!-- @if($product->price > 0) -->
                                    <!-- <form style="display: inline-block;"> -->
                                      <!-- <button class="btn btn-danger fa fa-tags" style="font-weight: bold; padding: 16px 20px; font-size: 18px; width: 100%">Mua ngay</button> -->
                                      <!-- </form> -->
                                      @endif
                                    </div>
                                  </div>
                                </br>
                                
                                <div style="float: left;" class="fb-like" data-href="https://hoplongtech.com/products/{{$product->slug}}" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true">
                                </div>
                                <div class="social">
                                  <a class="button_share share linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url={{url('products')}}/{{$product->slug}}&title={{$product->title}}&source={{url('products')}}/{{$product->slug}}"><i class="fa fa-linkedin"></i></a>
                                  
                                </div>
                                <div class="view">
                                  <i class="fa fa-eye" style="margin-top: 3px">   {{number_format($product->view)}}</i>
                                </div>
                              </div>
                            </div>
                            <!-- .entry-summary -->
                          </div>
                          <!-- .single-product-wrapper -->
                          
                <!-- <div class="tm-related-products-carousel section-products-carousel" id="tm-related-products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#tm-related-products-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                    <section class="related">
                        <header class="section-header">
                            <h2 class="section-title">Sản phẩm dùng danh mục</h2>
                            <nav class="custom-slick-nav"></nav>
                        </header>
                        <div class="products">
                            @foreach($sames as $other)
                            <div class="product">
                                <a href="{{route('view',['slug'=>$other->slug])}}" class="woocommerce-LoopProduct-link" class="woocommerce-LoopProduct-link">
                                    <img src="{{url('uploads/product')}}/{{$other->cover_image}}" width="224" height="197" class="wp-post-image" alt="{{$product->title}}">
                                    <h4 class="woocommerce-loop-product__title">{{$other->title}}</h4>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </section>
                  </div> -->



                </div>
              </main>
              <!-- #main -->
            </div>
            <!-- #primary -->
            <!-- <div id="secondary" class="widget-area shop-sidebar" role="complementary"> -->
              <!-- <div id="techmarket_product_categories_widget-2" class="widget woocommerce widget_product_categories techmarket_widget_product_categories">
                <ul class="product-categories category-single">
                  <li class="product_cat">
                    <ul class="show-all-cat">
                      <li class="product_cat">
                        <span class="">{{$product->category->title}}</span>
                        <ul>
                          @foreach($sames as $other)
                          <li class="cat-item">
                            <a href="{{route('view',['slug'=>$other->slug])}}">
                              <span class="no-child"></span>{{$other->title}}</a>
                            </li>
                            @endforeach
                          </ul>
                        </li>
                      </ul>
                      <ul>
                      </ul>
                    </li>
                  </ul>
                </div> -->

                <!-- </div> -->
              </div>
              <!-- .row -->
              <div class="woocommerce-tabs wc-tabs-wrapper">
                <div class="panel panel-info" style="position: relative;">
                    <!-- <div class="panel-heading woocommerce-tabs">
                        <ul class="tabs wc-tabs" role="tablist" style="padding-left: 0px">
                            <li class="reviews_tab active" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                <a style="font-size: 18px" href="">PART NUMBER</a>
                            </li>
                        </ul>
                      </div> -->
                      <div class="row">
                        <div class="col-md-3">
                          <div class="jumbotron">
                            <div class="container">
                              <h1>S&C tool</h1>
                              <p>Contents ...</p>
                              <p>
                                <a class="btn btn-primary btn-lg">Learn more</a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="panel-body">

                            
                            

                            <!-- //--- -->
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th class="verticalMid">Mã hàng</th>
                                  <!-- <th class="verticalMid">Giá thường</th> -->
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
                                            <img width="70px" class="media-object" src="{{url('uploads/product/')}}/@{{itemPartNumber['cover_image']}}" alt="Image">
                                          </a>
                                          <div class="media-body" style="padding-left: 15px">
                                            <!-- <h4 class="media-heading" style="font-size: 15px"><a href="{{route('view',[$product->slug])}}">@{{itemPartNumber['title']}}</a></h4> -->
                                            <h4 class="media-heading" style="font-size: 15px"><a href="{{url('')}}/products/@{{itemPartNumber['slug']}}">@{{itemPartNumber['title']}}</a></h4>
                                            <div class="star-rating" title="Rated 5 out of 5">
                                              <span style="width:100%"></span>
                                            </div>
                                            <div class="woocommerce-product-details__short-description">@{{itemPartNumber["short_description"]}}</div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="verticalMid">
                                      <span style="text-decoration: line-through;" ng-if="itemPartNumber['list_price'] > 0">
                                        @{{itemPartNumber['list_price']|number}}VNĐ
                                      </span>
                                      <span ng-if="itemPartNumber['list_price']==null">
                                        Liên hệ: 1900.6536
                                      </span>
                                    </td>
                                    <td class="verticalMid">
                                      
                                      <span class="woocommerce-Price-amount amount">
                                                        <!-- <span ng-if="itemPartNumber['price']>0">
                                                            @{{itemPartNumber['price']|number}}
                                                          </span> -->
                                                          <span>
                                                            @{{itemPartNumber['price']}}
                                                          </span>
                                                        </span>
                                                      </td>
                                                      <td class="verticalMid">
                                                        <p>Có sẵn: @{{itemPartNumber['in_stock'] > 0 ? itemPartNumber['in_stock'] : 0}}</p>
                                                        <p>Đặt hàng: Từ 2-4 tuần</p>
                                                      </td>
                                                      <td class="verticalMid">
                                                        <form action="" method="POST" role="form" style="margin: 0">
                                                          <div class="form-group" style="width: 56px;margin: 0">
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
                                      </div>
                                      <div class="wrapper-nav" id="main-menu-tto">
                                        <nav class="nav-main" style="margin-top: 51px;">
                                          <div class="wr" style="width: 100%;background: whitesmoke;">
                                            <ul class="nav tabs wc-tabs text-center" style="margin: 0 auto;width: 1024px">
                                              <li class="nav-item accessories_tab">
                                                <a class="nav-link active" href="#specifications">Thông số</a>
                                              </li>
                                              <li class="nav-item overview_tab">
                                                <a class="nav-link" href="#overview">Tổng quan</a>
                                              </li>
                                              <li class="nav-item dimension_tab">
                                                <a class="nav-link" href="#size">Kích thước</a>
                                              </li>
                                              <li class="nav-item dimension_tab">
                                                <a class="nav-link" href="#docs">Document & Download</a>
                                              </li>
                        <!-- <li class="nav-item dimension_tab">
                            <a class="nav-link" href="#partNumber">Part Numbers</a>
                          </li> -->
                          <li class="nav-item dimension_tab">
                            <a class="nav-link" href="#imagesPro">Ảnh thực tế</a>
                          </li>
                          <li class="nav-item dimension_tab">
                            <a class="nav-link" href="#vote">Đánh giá</a>
                          </li>
                          <li class="nav-item dimension_tab">
                            <a class="nav-link" href="#comment">Hỏi đáp</a>
                          </li>
                          
                        </ul>    
                      </div>
                    </nav>
                  </div>  
                </div>
                <!-- // PDP -->
                <div class="pdp row">
                  <div class="col-md-3">
                    <div class="list-group">
                      <a href="" class="list-group-item" style="font-weight: bold">Sản phẩm mới</a>
                      @foreach($new_products as $newProductItem)
                      <a href="{{route('view_category',['slug'=>$newProductItem->slug])}}" class="list-group-item">
                        <span class="col-md-4">
                          <img src="{{url('uploads/product')}}/{{$newProductItem->cover_image}}" class="attachment-shop_single size-shop_single" alt="{{$newProductItem->title}}">
                        </span>
                        <span class="col-md-8">
                          <span>{{$newProductItem->title}}</span>
                          <!-- price -->
                          <p>
                            <span class="woocommerce-Price-currencySymbol">
                              {{$cart->PriceProduct($newProductItem)}}
                            </span> 
                            
                            <!-- price -->
                          </p>
                        </span>
                      </a>
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="panel panel-info"  style="position: relative;">
                      <div class="panel-heading woocommerce-tabs">
                        <ul class="tabs wc-tabs" role="tablist" style="padding-left: 0px">
                          <li class="reviews_tab active" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                            <a style="font-size: 18px" href="">THÔNG SỐ KỸ THUẬT</a>
                          </li>
                        </ul>
                      </div>
                      <div class="panel-body hideDimension togDimension" style="overflow: hidden;">
                        {!!$product->feature!!}
                        @if($product->pdp == 1)
                        <?php 
                        $dataPro = json_decode(strip_tags($product->content));
                        ?>
                        <div>
                          <div class="panel panel-default">
                            <!-- Table -->
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
                      <div class="text-center">
                        <a href="" class="fa fa-plus tog" ng-click="showDimension()"></a>
                        <a href="" class="fa fa-minus tog hide" ng-click="hideDimension()"></a>
                      </div>
                      <div class="position_anchor" style="position: absolute;" id="overview"></div>
                    </div>

                    <div class="panel panel-info"  style="position: relative;">
                      <div class="panel-heading woocommerce-tabs">
                        <ul class="tabs wc-tabs" role="tablist" style="padding-left: 0px">
                          <li class="reviews_tab active" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                            <a style="font-size: 18px" href="">TỔNG QUAN</a>
                          </li>
                        </ul>
                      </div>
                      <div class="panel-body">
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
                      <div class="position_anchor" style="position: absolute;" id="size"></div>
                    </div>

                    <div class="panel panel-info" style="position: relative;">
                      <div class="panel-heading woocommerce-tabs">
                        <ul class="tabs wc-tabs" role="tablist" style="padding-left: 0px">
                          <li class="reviews_tab active" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                            <a style="font-size: 18px" href="">KÍCH THƯỚC</a>
                          </li>
                        </ul>
                      </div>
                      <div class="panel-body">
                        @if($product->dimension)
                          @if($product->pdp)
                          <!-- todo -->
                          
                          <div class="overViewImg">
                            <img src="{{url('uploads/product_new/dimension')}}/{{$product->dimension}}">
                          </div>
                          @else
                          <div style="width: 100%">{!!$product->dimension!!}</div>
                          @endif
                        @endif
                      </div>
                      <div class="position_anchor" style="position: absolute;" id="docs"></div>
                    </div>
                    <div class="panel panel-info" style="position: relative;">
                      <div class="panel-heading woocommerce-tabs">
                        <ul class="tabs wc-tabs" role="tablist" style="padding-left: 0px">
                          <li class="reviews_tab active" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                            <a style="font-size: 18px" href="">DOCUMENT & DOWNLOAD</a>
                          </li>
                        </ul>
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
                                <span>{{$product->taiLieu->file_download}}</span>
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
                        <!-- <div class="position_anchor" style="position: absolute;" id="partNumber"></div> -->
                        <div class="position_anchor" style="position: absolute;" id="imagesPro"></div>

                      </div>
                    </div>
                    
                    <div class="panel panel-info" style="position: relative;">
                      <div class="panel-heading woocommerce-tabs">
                        <ul class="tabs wc-tabs" role="tablist" style="padding-left: 0px">
                          <li class="reviews_tab active" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                            <a style="font-size: 18px" href="">ẢNH THỰC TẾ</a>
                          </li>
                        </ul>
                      </div>
                      <div class="panel-body">
                        <div class="row">
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
                      </div>
                      <div class="position_anchor" style="position: absolute;" id="vote"></div>
                    </div>
                    <div class="panel panel-info" style="position: relative;">
                      <div class="panel-heading woocommerce-tabs">
                        <ul class="tabs wc-tabs" role="tablist" style="padding-left: 0px">
                          <li class="reviews_tab active" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                            <a style="font-size: 18px" href="">Đánh giá</a>
                          </li>
                        </ul>
                      </div>
                      <div class="panel-body">
                        <div class="woocommerce-tabs wc-tabs-wrapper">
                          <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews" style="display: block;">
                            <div id="reviews" class="techmarket-advanced-reviews">
                              <div class="advanced-review row">
                                <div class="advanced-review-rating">
                                  <h2 class="based-title">Đánh giá {{$product->title}}</h2>
                                  <div class="avg-rating">
                                    <!-- <span class="avg-rating-number">{{$countRates > 0 ? number_format((5/100) * ($countRate5 > 0 ? 100/($countRates/$countRate5) : 0),1) : number_format(5,1)}}</span> -->
                                    <span class="avg-rating-number">{{number_format($percentRated,1)}}</span>
                                    <div class="star-rating" title="Rated 0.0 out of 5">
                                      <span style="width:{{$countRates > 0 ? (100/5 * $percentRated) : 100 }}%"></span>
                                    </div>
                                  </div>
                                  <div class="rating-histogram" style="width: 100%">
                                    <div class="rating-bar">
                                      <div class="star-rating" title="Rated 5 out of 5">
                                        <span style="width:100%"></span>
                                      </div>
                                      <div class="rating-count zero">{{$countRate5}}</div>
                                      <div class="rating-percentage-bar">
                                        <span style="width:{{$countRate5 > 0 ? 100/($countRates/$countRate5) : 0}}%" class="rating-percentage"></span>
                                      </div>
                                    </div>
                                    <div class="rating-bar">
                                      <div class="star-rating" title="Rated 4 out of 5">
                                        <span style="width:80%"></span>
                                      </div>
                                      <div class="rating-count zero">{{$countRate4}}</div>
                                      <div class="rating-percentage-bar">
                                        <span style="width:{{$countRate4 > 0 ? 100/($countRates/$countRate4) : 0}}%" class="rating-percentage"></span>
                                      </div>
                                    </div>
                                    <div class="rating-bar">
                                      <div class="star-rating" title="Rated 3 out of 5">
                                        <span style="width:60%"></span>
                                      </div>
                                      <div class="rating-count zero">{{$countRate3}}</div>
                                      <div class="rating-percentage-bar">
                                        <span style="width:{{$countRate3 > 0 ? 100/($countRates/$countRate3) : 0}}%" class="rating-percentage"></span>
                                      </div>
                                    </div>
                                    <div class="rating-bar">
                                      <div class="star-rating" title="Rated 2 out of 5">
                                        <span style="width:40%"></span>
                                      </div>
                                      <div class="rating-count zero">{{$countRate2}}</div>
                                      <div class="rating-percentage-bar">
                                        <span style="width:{{$countRate2 > 0 ? 100/($countRates/$countRate2) : 0}}%" class="rating-percentage"></span>
                                      </div>
                                    </div>
                                    <div class="rating-bar">
                                      <div class="star-rating" title="Rated 1 out of 5">
                                        <span style="width:20%"></span>
                                      </div>
                                      <div class="rating-count zero">{{$countRate1}}</div>
                                      <div class="rating-percentage-bar">
                                        <span style="width:{{$countRate1 > 0 ? 100/($countRates/$countRate1) : 0}}%" class="rating-percentage"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="advanced-review-comment">

                                  <div id="review_form_wrapper">
                                    <div id="review_form">
                                      <div id="respond" class="comment-respond">
                                        <h3 id="reply-title" class="comment-reply-title">Gửi đánh giá của bạn<small><a rel="nofollow" id="cancel-comment-reply-link" href="" style="display:none;">Cancel reply</a></small></h3>
                                        <form action="{{route('rateProduct')}}" method="POST" role="form" enctype="multipart/form-data">
                                          <div class="form-group">
                                            <label for="">Đánh giá sản phẩm</label>
                                            <div class="clearfix">  </div>
                                            <fieldset class="rating">
                                              <input type="radio" checked id="star5" name="rate" value="5" /><label class = "full" for="star5" title="Tuyệt vời - 5 sao"></label>
                                              <input type="radio" id="star4" name="rate" value="4" /><label class = "full" for="star4" title="Khá tốt - 4 sao"></label>
                                              <input type="radio" id="star3" name="rate" value="3" /><label class = "full" for="star3" title="Bình thường - 3 sao"></label>
                                              <input type="radio" id="star2" name="rate" value="2" /><label class = "full" for="star2" title="Hơi kém - 2 sao"></label>
                                              <input type="radio" id="star1" name="rate" value="1" /><label class = "full" for="star1" title="Kém - 1 sao"></label>
                                            </fieldset>
                                          </div>
                                          @csrf
                                          <input type="hidden" name="status" value="1">
                                          <input type="hidden" name="product_id" value="{{$product->id}}">
                                          <div class="clearfix"></div>
                                          
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="">Tên *</label>
                                                <input type="text" class="form-control" name="name" placeholder="Nhập họ tên" required>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="">Email *</label>
                                                <input type="email" class="form-control" name="email" placeholder="Nhập họ email" required>
                                              </div>    
                                            </div>
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="">Đánh giá sản phẩm *</label>
                                                <textarea name="content" id="input" class="form-control" rows="3" required="required" placeholder="Nội dung đánh giá của bạn về sản phẩm.."></textarea>
                                              </div>  
                                            </div>
                                          </div>
                                          <!-- <input type="file" name="upload_file" accept="image/*"> -->
                                          
                                          <button type="submit" class="btn btn-primary pull-right">Gửi</button>
                                        </form>
                                      </div>
                                      <!-- #respond -->
                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div id="comments">

                                <ol class="commentlist">
                                  <li dir-paginate="rate in getRateProduct | itemsPerPage: 4" pagination-id="comment_pagination" class="comment even thread-even depth-1" id="li-comment-653">

                                    <div id="comment-653" class="comment_container">

                                      <img alt="" src="https://secure.gravatar.com/avatar/1aedb8d9dc4751e229a335e371db8058?s=60&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/1aedb8d9dc4751e229a335e371db8058?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
                                      <div class="comment-text">

                                        <div class="star-rating"><span style="width:@{{(rate['rate']*2)*10}}%">Rated <strong class="rating">2</strong> out of 5</span></div>
                                        <p class="meta"><em class="woocommerce-review__awaiting-approval">@{{rate['name']}}</em></p>
                                        
                                        <div class="description">
                                          <p >@{{rate['content']}}

                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </li>

                                  
                                </ol>
                                <div class="pull-right">
                                  <dir-pagination-controls
                                  pagination-id="comment_pagination"
                                  max-size="1"
                                  direction-links="true"
                                  boundary-links="true" >
                                </dir-pagination-controls>
                              </div>
                              <!-- <div class="pull-right">{{$rates->links()}}</div> -->

                            </div>

                            <div class="clear"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="position_anchor" style="position: absolute;" id="comment"></div>
                  </div>
                  <div class="panel panel-info" style="position: relative;">
                    <div class="panel-heading woocommerce-tabs">
                      <ul class="tabs wc-tabs" role="tablist" style="padding-left: 0px">
                        <li class="reviews_tab active" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                          <a style="font-size: 18px" href="">hỏi đáp</a>
                        </li>
                      </ul>
                    </div>
                    <div class="panel-body">
                      <!-- Contenedor Principal -->
                      <div class="comments-container">
                        <form action="{{route('comment')}}" method="POST" role="form" enctype="multipart/form-data">
                          <legend class="titlePro">THẢO LUẬN VỀ: {{$product->title}}</legend>

                          <div class="form-group">
                            <textarea name="comment" id="desc" class="form-control" rows="3"  placeholder="Mời bạn để lại bình luận.."></textarea>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <input name="name" class="form-control" id="" placeholder="Họ và tên.." required>
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
                        <div>
                          <b>{{$product->countComment->count()}} Bình Luận</b>
                          <span style="margin-left: 15px">
                            <input type="checkbox" name=""> Xem Bình Luận Kỹ Thuật
                          </span>
                          <span>
                            <input style="position: relative;width: 40%" type="" class="pull-right" name="" placeholder="Tìm theo nội dung, người gửi...">
                            <i style="position: absolute;right:15px;font-size: 33px;color:#bcd5d5" class="fa fa-search pull-right"></i>
                          </span>
                        </div>
                        <ul id="comments-list" class="comments-list" style="margin-top: 65px;">

                          <li dir-paginate="commentItem in getCommentProduct | itemsPerPage: 3">
                            <div class="comment-main-level">
                              <!-- Avatar -->
                              <div class="comment-avatar"><img src="https://icon-library.net/images/windows-8-user-icon/windows-8-user-icon-10.jpg" alt=""></div>
                              <!-- Contenedor del Comentario -->
                              <div class="comment-box">
                                <div class="comment-head">
                                  <h6 class="comment-name by-author"><a href="">@{{commentItem['name']}}</a></h6>
                                  <!-- <span>@{{commentItem['created_at']}}</span> -->
                                  <i class="fa fa-reply" ng-click="replyComment(commentItem['id'])">      <!-- @{{commentItem['reply']}} thảo luận -->
                                  </i>
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
                                <div class="comment-avatar">
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

                            <script type="text/javascript">
                              $( document ).ready(function() {
                                $('.fa-reply').click(function(event){
                                  $('.reply-comment').addClass('hide');
                                  var togg = ($(this).parent().parent().parent().parent().find('.reply-comment').removeClass('hide').addClass('show'));
                                });

                              });
                            </script>





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
            </div>
            <input type="hidden" class="ng_product_id" value="{{$product->id}}">
            @if(Auth::guard('customer')->check())
            <input type="hidden" class="AuthCheck" value="true">
            <input type="hidden" class="Discount" value="{{$cart->DiscountAmount()}}">
            @endif
            <!-- // PDP -->
          </div>
          <!-- .col-full -->
        </div>
        <section class="brands-carousel">
          <h2 class="sr-only">Brands Carousel</h2>
          <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
            <div class="brands">
              @foreach($partners as $partner)
              <div class="item">
                <a href="#">
                  <figure>
                    <figcaption class="text-overlay">
                      <div class="info">
                        <span style="font-weight: bold;color: #fff !important">{{$partner->title}}</span>
                      </div>
                      <!-- /.info -->
                    </figcaption>
                    <a href="{{route('view_category',['slug'=>$partner->slug])}}"> <img width="145" height="50" class="img-responsive desaturate" alt="{{$partner->title}}" src="{{url('uploads/partner')}}/{{$partner->cover_image}}"></a>
                  </figure>
                </a>
              </div>
              @endforeach
              <!-- .item -->
            </div>
          </div>
          <!-- .col-full -->
        </section>

        <!-- //--- -->
        <!-- load js before load page -->
        <script type="text/javascript">
          $(document).ready(function() {
            document.getElementsByTagName("html")[0].style.visibility = "visible";
          });
        </script>
        <!-- load js before load page -->
        <script>
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
                // console.log(res.data);
            // angular.forEach(res.data, function (value) {

            //     if(value['price'] == '' || $.isNumeric(value['price']) == false){
            //         value['price'] = "Liên hệ 1900.6536";
            //     }
            //     if((currentTime <= value['time_discount'])){
            //         var productPrice = value['price'] - ((value['price'] * value['discount'])/100);
            //         value['price'] = (productPrice)+" VNĐ";
            //     }
                // if(Auth::guard('customer')->check()){
                //     $priceProduct = (value['price_when_login'] != null) ? (value['price_when_login']) : (value['price'] > 0 ? (value['price']) : value['price']);
                //      $showPrice = ($this->DiscountAmount() != null) ? (Math.round($priceProduct - (($priceProduct/100) * $this->DiscountAmount()))) : $priceProduct;
                //      value['price'] = ($showPrice)." VNĐ";
                // }
                // else{
                //     value['price'] = value['price'] > 0 ? (value['price']).'  VNĐ' : value['price'];
                // }
            // });
            // console.log(res.data);
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
 </script>
 <!-- //--- -->

 @stop()