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
