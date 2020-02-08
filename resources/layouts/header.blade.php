<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage" ng-app="myApp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <h1>
    <title>@if(isset($category)){{$category->meta_title}} @elseif(isset($download)) {{$download->title}} @elseif(isset($news_project)) {{$news_project->title}} @elseif(isset($img_company)) {{$img_company->title}} @else Công ty cổ phẩn công nghệ Hợp Long @endif
    </title>
  </h1>
  <meta name="description" content="@if(isset($category)){{$category->meta_description}}@elseif(isset($download))
  {{$download->content}}@else Công ty cổ phẩn công nghệ Hợp Long - Nhà phân phối chính thức Schneider Electric, Autonics, Omron, LS, Delta, Hanyoung, Patlite tại Việt Nam @endif">
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/font-awesome.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap-grid.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap-reboot.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/font-techmarket.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/slick.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/techmarket-font-awesome.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/slick-style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/animate.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/css')}}/style.css" media="all" />
  <style type="text/css">
    .sub-menu-parent
    {
      position: relative; 
      width: 100%;
      font-weight: bold;
      padding:2px 2px;
    }
    .sub-menu { 
      font-weight: normal;
      padding-top: 15px;
      visibility: hidden; 
      opacity: 0;
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      transform: translateY(-2em);
      z-index: -1;
      transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
    }
    .sub-menu-parent:focus .sub-menu,
    .sub-menu-parent:focus-within .sub-menu,
    .sub-menu-parent:hover .sub-menu {
      visibility: visible; 
      opacity: 1;
      z-index: 1;
      transform: translateY(0%);
      transition-delay: 0s, 0s, 0.1s; 
      padding-left:20px !important;
    }
    nav a:hover { color: #3498db !important; }
    .sub-menu {
      background: #fff;
      line-height: 50px !important; 
    }
  </style>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-43044974-10"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-43044974-10');
  </script>
  <link rel="stylesheet" href="{{url('public/home')}}/assets/css/config.css">
  <link rel="stylesheet" href="{{url('public/css')}}/mystyle.css">
  <link rel='dns-prefetch' href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
  <link rel="icon" href="{{url('uploads/logo/Logo-hl.png')}}" sizes="32x32" />
  <style>
    a, p, ul, li {
      font-family: sans-serif;
    }
  </style>
</head>
</html>