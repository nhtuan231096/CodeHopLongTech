
<!DOCTYPE html>
<html lang="en" ng-app="myApp" ng-controller="myCtrl">
<head>
    <!-- Basic page needs
       ============================================ -->
    <h1 style="margin:0;">
        <title>@if(isset($product)){{$product->meta_title}} @elseif(isset($category)){{$category->meta_title}} @elseif(isset($download)) {{$download->title}} @elseif(isset($news_project)) {{$news_project->title}} @elseif(isset($img_company)) {{$img_company->title}} @elseif(isset($data)) {{$data->title}} @else
                Công ty cổ phẩn công nghệ Hợp Long @endif
        </title>
    </h1>
    <meta charset="utf-8">
    <!-- <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" /> -->
    <meta name="description"
          content="@if(isset($product)){{$product->meta_description}}@elseif(isset($category)){{$category->meta_description}}@elseif(isset($download))
          {{$download->content}}@elseif(isset($data)) {{$data->title}}@else Công ty cổ phẩn công nghệ Hợp Long - Nhà phân phối chính thức Schneider Electric, Autonics, Omron, LS, Delta, Hanyoung, Patlite tại Việt Nam @endif">
    <meta name="author" content="Hoplongtech.com">
    <meta name="robots" content="index, follow"/>
    <!-- Mobile specific metas
       ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon
       ============================================ -->
    <link rel="icon" href="{{url('uploads/logo/Logo-hl.png')}}" sizes="25x32"/>
    <!-- Libs CSS
       ============================================ -->
    <link rel="stylesheet" href="{{url('public/homev2')}}/css/bootstrap/css/bootstrap.min.css">
    <link href="{{url('public/homev2')}}/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/themecss/lib.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/js/minicolors/miniColors.css" rel="stylesheet">
    <!-- Theme CSS
       ============================================ -->
    <link href="{{url('public/homev2')}}/css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/themecss/so-categories.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/themecss/so-category-slider.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/themecss/so-newletter-popup.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/footer/footer1.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="{{url('public/homev2')}}/css/theme.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/responsive.css" rel="stylesheet">
    <link href="{{url('public/homev2')}}/css/my_style.css" rel="stylesheet">
    <script src="{{url('public/js')}}/angular.min.js"></script>
    <script src="{{url('public/js')}}/dirPagination.js"></script>
    <!-- Google web fonts
       ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <script type="text/javascript" src="{{url('public/homev2')}}/js/jquery-2.2.4.min.js"></script>
    <style type="text/css">
        /*body{font-family:'Open Sans', sans-serif;}*/
        .common-home .typefooter-1 {
            margin-top: 0px;
        }
        .typefooter-1 .footer-top {
            padding: 30px 15px;
        }
        .display_none {
            display: none;
        }
        .display_block {
            display: block;
        }
        /*#myList .item-vertical{ display:none;}*/
    </style>
    <script type="text/javascript">
        $('#show-verticalmenu').click(function () {
            $('.item-vertical').addClass('display_block');
            $('.item-vertical').removeClass('display_none');
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-43044974-10"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-43044974-10');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 974233552 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-974233552"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'AW-974233552');
    </script>
    <style type="text/css">
        .search-loader {
            border: 6px solid #f3f3f3;
            border-radius: 50%;
            border-top: 6px solid #3498db;
            width: 70px;
            height: 70px;
            position: absolute;
            top: 15%;
            right: 50%;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
        }
        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        .header-middle {
            margin-bottom: 0px !important;
        }
        .header-top .container {
            height: 38px !important;
        }
        .content-popup h2, .content-popup span {
            color: #fff;
        }
        @media only screen and (max-width: 480px) {
            #myList {
                display: block !important;
            }
        }
    </style>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KB52Z3Q');
    </script>
    <link rel="stylesheet" href="{{url('public/homev2/css')}}/swc.css">
</head>
<body class="common-home res layout-1">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        if ($.cookie('pop') == null) {
            $('#myModal').modal('show');
            $.cookie('pop', '1');
        }
        document.body.addEventListener('keypress', function (e) {
            if (e.key == "Escape") {
                $('#boxes').hide(200);
            }
        });
    });
</script>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KB52Z3Q"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="wrapper" class="wrapper-fluid banners-effect-3">
    <!-- Main Container  -->
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
        .producttab .tabsslider.horizontal-tabs .nav-tabs li a {
            font-size: 13px;
        }
        .outstock::before {
            content: "\f057" !important;
            font-family: FontAwesome;
            display: inline-block;
            color: red !important;
            margin-right: 5px;
            margin-left: 10px;
        }
    </style>
    <script src="https://360player.io/static/dist/scripts/embed.js" async></script>
    <link rel="stylesheet" href="{{url('public/css')}}/styleProduct.css">
    <link rel="stylesheet" href="{{url('public/homev2')}}/css/mystyle.css">
    <script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(window).load(function () {
                if ($('.wrapper-nav').length > 0) {
                    var _top = $('.wrapper-nav').offset().top;
                    $(window).scroll(function (evt) {
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
        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-md-9 col-sm-8">
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
                                             <button style="color: #fff;background: #849be9;" class="w3-bar-item w3-button"
                                                     onclick="openCity('vn')">Tiếng Việt</button>
                                             <button style="color: #fff;background: #849be9;" class="w3-bar-item w3-button"
                                                     onclick="openCity('en')">English</button>
                                             <button style="color: #fff;background: #849be9;" class="w3-bar-item w3-button"
                                                     onclick="openCity('jp')">Japan</button>
                                             <button style="color: #fff;background: #849be9;" class="w3-bar-item w3-button"
                                                     onclick="openCity('cn')">China</button>
                                          </div>
                                                  <div id="vn" class="city">
                                             <h2>
                                                <a href="{{route('document',['slug'=>$product->slug,'lang'=>'vn'])}}">
                                                <img src="{{url('uploads/download')}}/icon-download-9.png"
                                                     title="{{$product->taiLieu->title}}" style="display: inline">
                                                <span>Catalog: {{$product->taiLieu->title}}</span>
                                                </a>
                                             </h2>
                                             <p>{!!$product->taiLieu->content!!}</p>
                                          </div>
                                                  <div id="en" class="city" style="display:none">
                                             <h2>
                                                <a href="{{route('document',['slug'=>$product->slug,'lang'=>'en'])}}">
                                                <img src="{{url('uploads/download')}}/icon-download-9.png"
                                                     title="{{$product->taiLieu->title}}" style="display: inline">
                                                <span>{{$product->taiLieu->file_download_en}}</span>
                                                </a>
                                             </h2>
                                             <p>{!!$product->taiLieu->content!!}</p>
                                          </div>
                                                  <div id="jp" class="city" style="display:none">
                                             <h2>
                                                <a href="{{route('document',['slug'=>$product->slug,'lang'=>'jp'])}}">
                                                <img src="{{url('uploads/download')}}/icon-download-9.png" title="{{$product->taiLieu->title}}"
                                                     style="display: inline">
                                                <span>{{$product->taiLieu->file_download_jp}}</span>
                                                </a>
                                             </h2>
                                             <p>{!!$product->taiLieu->content!!}</p>
                                          </div>
                                                  <div id="cn" class="city" style="display:none">
                                             <h2>
                                                <a href="{{route('document',['slug'=>$product->slug,'lang'=>'cn'])}}">
                                                <img src="{{url('uploads/download')}}/icon-download-9.png" title="{{$product->taiLieu->title}}"
                                                     style="display: inline">
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
                                                <img src="{{url('uploads/product_new/actual_photo')}}/{{$actual_photo}}"
                                                     class="attachment-shop_single size-shop_single"
                                                     alt="{{$product->title}}">
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-md-4">
                                            <img src="{{url('uploads/product')}}/{{$product->cover_image}}"
                                                 class="attachment-shop_single size-shop_single"
                                                 alt="{{$product->title}}">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{url('uploads/product')}}/{{$product->cover_image}}"
                                                 class="attachment-shop_single size-shop_single"
                                                 alt="{{$product->title}}">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{url('uploads/product')}}/{{$product->cover_image}}"
                                                 class="attachment-shop_single size-shop_single"
                                                 alt="{{$product->title}}">
                                        </div>
                                    @endif
                                </div>
                                <div class="clearfix"></div>
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
              <div class="row">
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
          </div>
    </form>
 </div>
<div class="clearfix" style="margin-bottom: 15px"></div>
<div class="row">
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
</div>
<div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- //Product Tabs -->
                    <input type="hidden" class="ng_product_id" value="{{$product->id}}">
                </div>
            </div>
        </div>
        <!--Middle Part End-->
    </div>
    <!-- //--- -->
    <script type="text/javascript">
        $('.product_quantity_up').click(function () {
            $("#quantity-input").val(parseInt($("#quantity-input").val()) - 1);
        });
        $('.product_quantity_down').click(function () {
            $("#quantity-input").val(parseInt($("#quantity-input").val()) + 1);
        });
    </script>
    <!-- //--- -->
    <!-- //--- -->
    <!-- load js before load page -->
    <script type="text/javascript">
        $(document).ready(function () {
            document.getElementsByTagName("html")[0].style.visibility = "visible";
        });
    </script>
</div>
<!-- End Color Scheme
   ============================================ -->
<!-- Include Libs & Plugins
   ============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script type="text/javascript" src="{{url('public/homev2')}}/js/jquery-2.2.4.min.js"></script> -->
<script type="text/javascript" src="{{url('public/homev2')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/slick-slider/slick.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/libs.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/datetimepicker/moment.js"></script>
<script type="text/javascript"
        src="{{url('public/homev2')}}/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/modernizr/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/minicolors/jquery.miniColors.min.js"></script>
<!-- Theme files
   ============================================ -->
<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/application.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/homepage.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/toppanel.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/addtocart.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/themejs/application.js"></script>
<script type="text/javascript" src="{{url('public/homev2')}}/js/my_js.js"></script>
<script src="{{url('public/homev2')}}/js/swc.js"></script>
<script type="text/javascript">
    var myapp = angular.module("myApp", ['angularUtils.directives.dirPagination']);
    $url = window.location.protocol + "//" + window.location.hostname;
    myapp.controller("myCtrl", function ($scope, $http) {
        // show hide dimension
        $scope.showDimension = function () {
            $(".fa-plus").addClass('hide');
            $(".fa-plus").removeClass('show');
            $(".fa-minus").addClass('show');
            $(".fa-minus").removeClass('hide');
            $(".togDimension").addClass('showDimension');
            $(".togDimension").removeClass('hideDimension');
        }
        $scope.hideDimension = function () {
            $(".fa-minus").addClass('hide');
            $(".fa-minus").removeClass('show');
            $(".fa-plus").addClass('show');
            $(".fa-plus").removeClass('hide');

            $(".togDimension").addClass('hideDimension');
            $(".togDimension").removeClass('showDimension');
        }
        // show hide dimension
    });
</script>
</body>
</html>
