<!DOCTYPE html>
<html lang="en" ng-app="myApp" ng-controller="myCtrl">
<head>
    <!-- Basic page needs
    ============================================ -->
    <h1 style="margin:0;"><title>@if(isset($product)){{$product->meta_title}} @elseif(isset($category)){{$category->meta_title}} @elseif(isset($download)) {{$download->title}} @elseif(isset($news_project)) {{$news_project->title}} @elseif(isset($img_company)) {{$img_company->title}} @elseif(isset($data)) {{$data->title}} @else Công ty cổ phẩn công nghệ Hợp Long @endif</title></h1>
    <meta charset="utf-8">
    <!-- <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" /> -->
    <meta name="description" content="@if(isset($product)){{$product->meta_description}}@elseif(isset($category)){{$category->meta_description}}@elseif(isset($download))
    {{$download->content}}@elseif(isset($data)) {{$data->title}}@else Công ty cổ phẩn công nghệ Hợp Long - Nhà phân phối chính thức Schneider Electric, Autonics, Omron, LS, Delta, Hanyoung, Patlite tại Việt Nam @endif">
    <meta name="author" content="Hoplongtech.com">
    <meta name="robots" content="index, follow" />
    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon
    ============================================ -->
    <link rel="icon" href="{{url('uploads/logo/Logo-hl.png')}}" sizes="25x32" />
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
         .common-home .typefooter-1 {margin-top: 0px;}
         .typefooter-1 .footer-top {padding: 30px 15px;}
         .display_none {
            display:none;
         }
         .display_block {
            display:block;
         }
         /*#myList .item-vertical{ display:none;}*/
    </style>
    <script type="text/javascript">
        $('#show-verticalmenu').click(function(){
            $('.item-vertical').addClass('display_block');
            $('.item-vertical').removeClass('display_none');
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
       <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-43044974-10"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-43044974-10');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 974233552 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-974233552"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-974233552');
    </script>
    <script id='autoAdsMaxLead-widget-script' src='https://cdn.autoads.asia/scripts/autoads-maxlead-widget.js?business_id=807e8c7d5f9e40898e3ff4e83c794894' type='text/javascript' charset='UTF-8' async></script>
    <style type="text/css">
        .search-loader {
          border: 6px solid #f3f3f3;
          border-radius: 50%;
          border-top: 6px solid #3498db;
          width: 70px;
          height: 70px;
          position: absolute;
          top:15%;
          right: 50%;
          -webkit-animation: spin 2s linear infinite; /* Safari */
          animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
        .header-middle{
            margin-bottom:0px!important; 
        }
        .header-top .container{
            height: 38px!important;
        }
        .content-popup h2, .content-popup span{
            color:#fff;
        }
        @media only screen and (max-width: 480px){
            #myList{
                display: block!important;
            }
        }
    </style>
        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KB52Z3Q');</script>
    <!-- End Google Tag Manager <-->    </-->
    <link rel="stylesheet" href="{{url('public/homev2/css')}}/swc.css">
</head>

<body class="common-home res layout-1">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js">
</script>
<script type="text/javascript">
 $(document).ready(function() {
    if ($.cookie('pop') == null) {
        $('#myModal').modal('show');
        $.cookie('pop', '1');
    }
    document.body.addEventListener('keypress', function(e) {
        if(e.key == "Escape"){
            $('#boxes').hide(200);
        }
    });
 });
</script>
    <!-- popup -->
    @if(isset($popup))
    <div id="boxes">
        <div style="top: 234px!important; left: 50%; top: 20%;display: none;position: relative;padding:1px!important;" id="dialog" class="window"> 
            <div id="san">
                <a href="#" class="close agree"><img src="http://img.freepik.com/free-icon/cancel-button_318-122842.jpg?size=338&ext=jpg" width="25" style="width: 48px;
height: 20px;float:right; margin-right: -25px; margin-top: -20px;"></a>
                <a href="{{$popup->link}}">
                    <img src="{{url('uploads/file_service/popup')}}/{{$popup->cover_image}}" width="{{$popup->width}}" height="{{$popup->height}}">
                </a>
                <div class="content-popup" style="position: absolute;z-index: 100;top: 10%;left: 40%">
                    <!-- <h2>tiêu đề</h2> -->
                    <!-- <span class="text-1" style="font-size: 13px">nd 1</span> -->
                    <!-- <span class="text-2">nd 2</span> -->
                </div>
            </div>
        </div>
        <div style="width: 2478px; font-size: 32pt; color:white; height: 1202px; display: none; opacity: 0.4;" id="mask"></div>
    </div>
    @endif
    <!-- popup -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KB52Z3Q"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <div id="wrapper" class="wrapper-fluid banners-effect-3">

    <!-- Header Container  -->
    <header id="header" class=" typeheader-1">
        
        <!-- Header Top -->
        <div class="header-top hidden-compact">
            <div class="container">
                <div class="row">
                    <div class="header-top-left col-lg-7 col-md-8 col-sm-6 col-xs-4">
                        <div class="hidden-md hidden-sm hidden-xs welcome-msg">Công ty cổ phần công nghệ Hợp Long /
                            <span>Chúc mừng năm mới</span> 
                        </div>
                        <ul class="top-link list-inline hidden-lg ">
                            <li class="account" id="my_account">
                                <a href="#" title="My Account " class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs">My Account </span>  <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="dropdown-menu ">
                                    <li><a href=""><i class="fa fa-user"></i> Đăng ký</a></li>
                                    <li><a href="{{route('loginCustomer')}}"><i class="fa fa-pencil-square-o"></i> Đăng nhập</a></li>
                                </ul>
                            </li>
                        </ul>            
                    </div>
                    <div class="header-top-right collapsed-block col-lg-5 col-md-4 col-sm-6 col-xs-8">
                        <ul class="top-link list-inline lang-curr">
                            <li class="language">
                                <div class="btn-group languages-block ">
                                    <form action="#" method="post" enctype="multipart/form-data" id="bt-language">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <img src="{{url('public/homev2')}}/image/catalog/flags/vn.png" width="16px";height="10px" alt="Tiếng Việt" title="Tiếng Việt">
                                            <span class="">Tiếng Việt</span>
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li> <a href="#"> <img class="image_flag" src="{{url('public/homev2')}}/image/catalog/flags/vn.png" width="16px";height="10px" alt="Tiếng Việt" title="Tiếng Việt" /> Tiếng Việt </a> </li>
                                            <!-- <li><a href="#"><img class="image_flag" src="{{url('public/homev2')}}/image/catalog/flags/gb.png" alt="English" title="English" /> English </a></li> -->
                                        </ul>
                                    </form>
                                </div>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Header Top -->
        <!-- Header center -->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="navbar-logo col-lg-2 col-md-3 col-sm-4 col-xs-12">
                        <div class="logo"><a href="{{route('home')}}"><img src="{{url('public/homev2')}}/image/catalog/logo.png" height="46px" title="Your Store" alt="hoplongtech" /></a></div>
                    </div>
                    <!-- //end Logo -->
                    <!-- Search -->
                    <div class="col-lg-7 col-md-6 col-sm-5">
                        <div class="search-header-w">
                            <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i></div>
                            <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                <form method="GET" action="{{route('search_product')}}">
                                    <div id="search0" class="search input-group form-group">
                                        <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" name="title" placeholder="Tìm theo tên sản phẩm" ng-change="productSearch(product_search)" ng-model="product_search" ng-model-options="{debounce: 1000}" >
                                        <input type="hidden" id="search-param" name="post_type" value="product" />
                                        <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                                    </div>
                                    <!-- <input type="hidden" name="route" value="product/search" /> -->
                                    <div class="search-tab" style="position: absolute;width: 97%;z-index: 999; display: none">
                                        <div class="col-md-12 search-tab-items" style="border: 1px solid #3498db;background: #fff;border: 2px solid #e7e7e7;
                    border-right-color: rgb(231, 231, 231);border-radius: 5px !important;">
                                            <div class="media" ng-repeat="search_item in res_product_search ">
                                              <span ng-click="close_tab()" style="position: absolute;top: 10px;right: 15px;font-size: 16px;z-index: 50;font-weight: bold;cursor: pointer;">x</span>
                                                <a class="pull-left" href="{{url('')}}/products/@{{search_item['slug']}}" target="_blank">
                                                    <img width="80" class="media-object" src="{{url('uploads/product')}}/@{{search_item['cover_image']}}" alt="Image">
                                                </a>
                                                <div class="media-body">
                                                    <a class="" href="{{url('')}}/products/@{{search_item['slug']}}" target="_blank" style="font-size: 15px;font-weight: 700;margin-bottom: 0px;letter-spacing: -.04em;line-height: 1;padding: 10px 0 0;">@{{search_item['title']}}</a>
                                                    <p>@{{search_item['price_product']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="search-loader"></div>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>
                    <!-- //end Search -->
                    <div class="middle-right col-lg-3 col-md-3 col-sm-3">                  
                        <!--cart-->
                        <div class="shopping_cart">
                            <div id="cart" class="btn-shopping-cart pull-right">                       
                                <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <div class="shopcart">
                                        <span class="icon-c"><i class="fa fa-shopping-bag"></i></span>
                                        <div class="shopcart-inner">
                                            <p class="text-shopping-cart">Giỏ hàng</p>
                                            <span class="total-shopping-cart cart-total-full">
                                   <span class="items_cart">{{$cart->total_quantity}}</span><span class="items_cart2"> sản phẩm</span><span class="items_carts">( {{number_format($cart->total_amount)}} )</span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                @if($cart->total_quantity)
                                <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                    <li>
                                        <table class="table table-striped">
                                            <tbody>
                                                
                                                    @foreach($cart->items as $item)
                                                    <tr>
                                                        <td class="text-center" style="width:70px">
                                                            <a href="product.html">
                                                                <img src="{{url('uploads/product')}}/{{$item['image']}}" alt="{{$item['image']}}" style="width:70px" title="{{$item['image']}}" class="preview">
                                                            </a>
                                                        </td>
                                                        <td class="text-left"> <a class="cart_product_name" href="">{{$item['title']}}</a> 
                                                        </td>
                                                        <td class="text-center">x {{$item['quantity']}}</td>
                                                        <td class="text-center">{{number_format($item['price'])}}đ</td>
                                                        <td class="text-right">
                                                            <!-- <a href="product.html" class="fa fa-edit"></a> -->
                                                        </td>
                                                        <td class="text-right">
                                                            <a href="{{route('delete_cart',['id'=>$item['id']])}}" class="fa fa-times fa-delete"></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"><strong>Tổng tiền</strong>
                                                        </td>
                                                        <td class="text-right">{{number_format($cart->total_amount)}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="text-right"> <a class="btn view-cart" href="{{route('view_cart')}}"><i class="fa fa-shopping-cart"></i>Xem giỏ hàng</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="{{route('order')}}"><i class="fa fa-share"></i>Đặt hàng</a> 
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                @endif
                            </div>
                            <!-- //import order -->
                            <div id="cart" class="btn-shopping-cart pull-left">                       
                                <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <div class="shopcart">
                                        <span class="icon-c"><i class="fa fa-shopping-cart"></i></span>
                                        <div class="shopcart-inner">
                                            <p class="text-shopping-cart"></p>
                                            <span class="total-shopping-cart cart-total-full">
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                    <li>
                                        <table class="table table-striped">
                                            <tbody>
                                                
                                                    <tr>
                                                        <td class="text-center"> <a class="cart_product_name" href="" style="font-size: 14px">Đặt hàng bằng file .csv</a> 
                                                        </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <p class="text-center"> 
                                                <a class="btn view-cart" href="{{url('/uploads/1.0.1/sampleImport.csv')}}">
                                                    <i class="fa fa-download" style="margin-right: 5px"></i>Tải file mẫu
                                                </a>
                                                <a class="btn view-cart" data-toggle="modal" href='#modal-id'>
                                                    <i class="fa fa-upload" style="margin-right: 5px"></i>Nhập file csv
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- //import order -->

                        </div>
                        <!-- //modal import file csv -->
                        <div class="modal fade" id="modal-id">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('import_cart_csv')}}" method="POST" role="form" enctype="multipart/form-data">
                                            <legend>Tải lên file csv để đặt hàng</legend>
                                        
                                            <div class="form-group">
                                                <label for="">File csv</label>
                                                <input style="padding: 0" type="file" class="form-control" name="file">
                                            </div>
                                        
                                            @csrf                                        
                                            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Hủy</button>
                                            <button type="submit" class="btn btn-primary pull-right">Tải</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //end modal import file csv -->
                    </div>
                </div>
            </div>
        </div>
        <!-- //Header center -->
        <!-- Header Bottom -->
        <div class="header-bottom hidden-compact">
            <div class="container">
                <div class="row">
                    
                    <div class="bottom1 menu-vertical col-lg-2 col-md-3 col-sm-3">
                        <div class="responsive so-megamenu megamenu-style-dev ">
                            <div class="so-vertical-menu ">
                                <nav class="navbar-default">    
                                    
                                    <div class="container-megamenu vertical">
                                        <div id="menuHeading">
                                            <div class="megamenuToogle-wrapper">
                                                <div class="megamenuToogle-pattern">
                                                    <div class="container">
                                                        <div>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                        Danh mục                          
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="navbar-header">
                                            <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">      
                                                <i class="fa fa-bars"></i>
                                                <span>  Danh mục     </span>
                                            </button>
                                        </div>
                                        <!-- //--- -->
                                        <div class="vertical-wrapper" >
                                            <span id="remove-verticalmenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu megamenu-left" id="myList" style="position: relative;">
                                                        @foreach($categorys as $itemCategory)
                                                        <li class="item-vertical  with-sub-menu hovere display_none">
                                                            <p class="close-menu"></p>
                                                            <a href="{{route('view_category',[$itemCategory->slug])}}" class="clearfix">
                                                                <img src="{{url('public/homev2')}}/image/catalog/menu/icons/ico10.png" alt="icon">
                                                                <span>{{$itemCategory->title}}</span>
                                                                <b class="fa-angle-right"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="60"  >
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                @foreach($itemCategory->childs as $child)
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="{{route('view_category',['slug'=>$child->slug])}}"  class="main-menu">{{$child->title}}</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>   
                                                        @endforeach
                                                        <li class="loadmore" id="loadMore">
                                                            <i class="fa fa-plus-square-o"></i>
                                                            <span class="more-view">Xem thêm</span>
                                                        </li>

                                                        <li class="loadmore" id="lessMore" style="display: none;">
                                                            <i class="fa fa-plus-square-o"></i>
                                                            <span class="more-view">Rút gọn</span>
                                                        </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- //--- -->
                                        <!-- menu -->
                                        <div class="vertical-wrapper">
                                            <span id="remove-verticalmenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu megamenu-left" id="myList">
                                                        @foreach($categorys as $itemCategory)
                                                        <li class="item-vertical  with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="{{route('view_category',[$itemCategory->slug])}}" class="clearfix">
                                                                <img src="{{url('public/homev2')}}/image/catalog/menu/icons/ico10.png" alt="icon">
                                                                <span>{{$itemCategory->title}}</span>
                                                                <b class="fa-angle-right"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="60" style="width: 729.6px; display: none; right: 0px;">
                                                                <div class="content" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                @foreach($itemCategory->childs as $child)
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                               <a href="{{route('view_category',['slug'=>$child->slug])}}"  class="main-menu">{{$child->title}}</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                        <!-- <li class="loadmore" id="loadMore">
                                                            <i class="fa fa-plus-square-o"></i>
                                                            <span class="more-view">Xem thêm</span>
                                                        </li>

                                                        <li class="loadmore" id="lessMore" style="display: none;">
                                                            <i class="fa fa-plus-square-o"></i>
                                                            <span class="more-view">Rút gọn</span>
                                                        </li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- menu -->
                                    </nav>
                            </div>
                        </div>

                    </div>
                    
                    <!-- Main menu -->
                    <div class="main-menu-w col-lg-10 col-md-9">
                        <div class="responsive so-megamenu megamenu-style-dev">
                            <nav class="navbar-default">
                                <div class=" container-megamenu  horizontal open ">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    
                                    <div class="megamenu-wrapper">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container-mega">
                                                <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="{{route('home_product')}}" class="clearfix">
                                                            <strong>SẢN PHẨM</strong>
                                                            <img class="label-hot" src="{{url('public/homev2')}}/image/catalog/menu/hot-icon.png" alt="icon items">
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="{{route('tuyen-dung')}}" class="clearfix">
                                                            <strong>Tuyển dụng</strong>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="{{route('downloads')}}" class="clearfix">
                                                            <strong>Tài liệu</strong>
                                                        </a>
                                                    </li>
                                                    <!-- 
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>Flash Sale</strong>
                                                            <img class="label-hot" src="{{url('public/homev2')}}/image/catalog/menu/hot-icon.png" alt="icon items">
                                                        </a>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>Voucher</strong>
                                                            <img class="label-hot" src="{{url('public/homev2')}}/image/catalog/menu/new-icon.png" alt="icon items">
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="{{route('downloads')}}" class="clearfix">
                                                            <strong>Khuyến mại</strong>
                                                        </a>
                                                    </li> -->
                                                    <li class="with-sub-menu hover">
                                                        <a href="{{route('home')}}">Về Hoplong</a>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- //end Main menu -->
                                      
                    <div class="bottom3">                        
                        <div class="telephone hidden-xs hidden-sm hidden-md">
                            <ul class="blank"> 
                                <li><a href="#"><i class="fa fa-truck"></i>Theo dõi đơn hàng của bạn</a></li> 
                                <li><a href="#"><i class="fa fa-phone-square"></i>Hotline 1900.6536</a></li> 
                            </ul>
                        </div>  
                        <div class="signin-w hidden-md hidden-sm hidden-xs">
                            <ul class="signin-link blank"> 
                                @if(Auth::guard('customer')->check())                           
                                <li class="log login"><i class="fa fa-lock"></i> <a class="link-lg" href="{{route('my_account')}}">Hi {{Auth::guard('customer')->user()->name}}</a> </li> 
                                @else
                                <li class="log login"><i class="fa fa-lock"></i> <a class="link-lg" href="{{route('loginCustomer')}}">Đăng nhập </a> / <a href="{{route('register_customer')}}">Đăng ký</a></li> 
                                @endif                               
                            </ul>                       
                        </div>                  
                    </div>
                    
                </div>
            </div>

        </div>
    </header>
    <!-- //Header Container  -->
<!-- Main Container  -->
@yield('mainContainer')
<!-- //Main Container -->
    <!-- Footer Container -->
    <footer class="footer-container typefooter-1">
        <!-- Footer Top Container -->
 
            <div class="container">
                <div class="row footer-top">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="socials-w">
                          <h2>Follow socials</h2>
                          <ul class="socials">
                            <li class="facebook"><a href="https://www.facebook.com/hoplongtech/" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                            <li class="youtube"><a href="https://www.youtube.com/channel/UCVAAwrppS45yC10KcpjKsqg/videos" target="_blank"><i class="fa fa-youtube-play" rel="nofollow"></i><span>Youtube</span></a></li>
                            <li class="twitter"><a href="#" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                            <li class="google_plus"><a href="#" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i><span>Google Plus</span></a></li>
                            <li class="pinterest"><a href="#" target="_blank" rel="nofollow"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                            <li class="linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin" rel="nofollow"></i><span>linkedin</span></a></li>
                          </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="module newsletter-footer1">
                            <div class="newsletter">

                                <div class="title-block">
                                    <div class="page-heading font-title">
                                        Đăng ký để nhận khuyến mãi
                                    </div>
                                    
                                </div>

                                <div class="block_content">
                                    <form method="post" id="signup" name="signup" class="form-group form-inline signup send-mail">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" placeholder="Nhập email của bạn..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
                                            </div>
                                            <div class="subcribe">
                                                <button class="btn btn-primary btn-default font-title" type="submit" onclick="return subscribe_newsletter();" name="submit">
                                            Gửi
                                        </button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                                <!--/.modcontent-->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
      
        <!-- /Footer Top Container -->
        
        <div class="footer-middle ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-infos">
                        <div class="infos-footer">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="{{url('public/homev2')}}/image/catalog/logo-footer.png" height="46px" alt="image"></a>
                            </div>
                            <ul class="menu">
                                <li class="adres">
                                    87 Lĩnh Nam - Hoàng Mai - Hà Nội
                                </li>
                                <li class="phone">
                                    1900.6536
                                </li>
                                <li class="mail">
                                    <a href="mailto:info@hoplongtech.com.vn">info@hoplongtech.com.vn</a>
                                </li>
                                <li class="time">
                                    Open time: 8:00AM - 6:00PM
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-information box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Hệ thống chi nhánh:</h3>
                                <div class="modcontent">
                                  <ul class="menu">
                                    <li><a href="#">Hà Nội</a></li>
                                    <li><a href="#">Hải phòng</a></li>
                                    <li><a href="#">Đà Nẵng</a></li>
                                    <li><a href="#">Hồ Chí Minh</a></li>
                                  </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-clear">
                        <div class="box-service box-footer">
                          <div class="module clearfix">
                            <h3 class="modtitle">Về Hoplong</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a style="color: red;">Hotline: 1900.6536</a></li>
                                        <li><a href="{{route('home')}}">Giới thiệu</a></li>
                                        <li><a href="#">Lịch sử phát triển</a></li>
                                        <li><a href="#">Tuyển dụng</a></li>
                                        <li><a href="#">Liên hệ</a></li>
                                    </ul>
                                </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-account box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Chăm sóc khách hàng</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="{{route('home_agency_posts')}}">Dành cho đại lý</a></li>
                                        <li><a href="">Hướng dẫn mua hàng</a></li>
                                        <li><a href="https://hoplongtech.com/tin-tuc/hinh-thuc-thanh-toan">Hình thức thanh toán</a></li>
                                        <li><a href="">Đổi điểm thưởng</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-service box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Chính sách/ Điều khoản</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="https://hoplongtech.com/tin-tuc/chinh-sach-bao-mat">Chính sách bảo mật</a></li>
                                        <li><a href="https://hoplongtech.com/tin-tuc/chinh-sach-bao-hanh">Chính sách bảo hành</a></li>
                                        <li><a href="https://hoplongtech.com/tin-tuc/chinh-sach-van-chuyen-giao-nhan-lap-dat">Chính sách Vận chuyển / Lắp đặt</a></li>
                                        <li><a href="https://hoplongtech.com/tin-tuc/chinh-sach-doi-tra-hang-va-hoan-tien">Chính sách đổi trả / Hoàn tiền</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-service box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Tải ứng dụng ngay</h3>
                                <div class="modcontent col-md-6">
                                    <img src="{{url('public/homev2')}}/image/catalog/qr-code.png" alt="iOS/Android">
                                </div>
                                <div class="col-md-6">
                                    <img src="{{url('public/homev2')}}/image/catalog/appstore.png" alt="Aps Store"></br></br>
                                    <img src="{{url('public/homev2')}}/image/catalog/googleplay.png" alt="CH Play">
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                        <div class="footer-b">
                            <div class="bottom-cont">
                                <a href="http://online.gov.vn/Home/WebDetails/29393"><img src="{{url('public/homev2')}}/image/catalog/dathongbao.png" alt="Đã thông báo Bộ Công Thương"></a>
                                <ul class="footer-links">
                                    <li><a href="#">Giới thiệu</a></li>
                                    <li><a href="#">Voucher</a></li>
                                    <li><a href="#">Chăm sóc khách hàng</a></li>
                                    <li><a href="#">Tin tức</a></li>
                                    <li><a href="#">Liên hệ</a></li>
                                </ul>  
                                <p>Quà tặng trị giá 200.000đ (Áp dụng sản phẩm tự động hóa công nghiệp SCHNEIDER ELECTRIC)</br> Nhập mã HOPLONG giảm thêm 1% dành cho toàn bộ đơn hàng từ 01/01 đến 28/02/2020. Tặng voucher 20.000đ khi đánh giá 5* </br>(Áp dụng cho đơn hàng từ 200.000đ)</p>
                            </div>
                        </div>
            </div>
        </div>
        <!-- Footer Bottom Container -->
        <div class="footer-bottom">
            <div class="container">
                <div class="col-lg-12 col-xs-12 payment-w">
                    <img src="{{url('public/homev2')}}/image/catalog/demo/payment/payment.png" alt="imgpayment">
                </div>
            </div>
            <div class="copyright-w">
                <div class="container">
                    <div class="copyright">
                    Copyright © 2020 <a href="https://hoplongtech.com/" target="_blank">hoplongtech.com</a> All rights reserved. 
                    </div>
                </div>
            </div>            
        </div>
        <!-- /Footer Bottom Container -->
            <!--Back To Top-->
        <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
    </footer>
    <!-- //end Footer Container -->

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
<script type="text/javascript" src="{{url('public/homev2')}}/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
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
var myapp = angular.module("myApp",['angularUtils.directives.dirPagination']);
    $url = window.location.protocol + "//" + window.location.hostname;
    myapp.controller("myCtrl",function($scope,$http){
        $(".search-tab").hide();
        $scope.close_tab = function(){
            $(".search-tab").hide();
        }

        $scope.productSearch = function(product_search){
            // console.log(product_search);
            $(".search-tab-items").css('min-height',100);
            $("#search-loader").addClass('search-loader');
            $(".search-tab").show();
            if(product_search != ''){
                // $http.get($url + '/CodeHopLongTech/api/autoSearch/' + product_search).then(function(res){
                $http.get($url + '/api/autoSearch/' + product_search).then(function(res){
                    $scope.res_product_search = res.data.data;
                    $("#search-loader").removeClass('search-loader');
                }); 
            }
            if(product_search == ''){
                $scope.res_product_search = [];
            }
                
        };

    // partnumber
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
    // partnumber
    })
</script>
</body>
</html>