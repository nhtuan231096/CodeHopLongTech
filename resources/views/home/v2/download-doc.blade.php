@extends('layouts.v2.index')
@section('mainContainer')
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/tether.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/bootstrap.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery-migrate.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery-ui.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/hidemaxlistitem.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery.easing.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/scrollup.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery.waypoints.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/waypoints-sticky.min.js"></script> -->
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/pace.min.js"></script> -->
<script type="text/javascript" src="{{url('public/home')}}/assets/js/slick.min.js"></script>
<script type="text/javascript" src="{{url('public/home')}}/assets/js/scripts.js"></script>
<!-- <script type="text/javascript" src="{{url('public/home')}}/assets/js/switchstylesheet.js"></script> -->
<!-- <script src="{{url('public/js')}}/angular.min.js"></script> -->
<!-- <script src="{{url('public/js')}}/app-angular.js"></script> -->
<!-- <script src="{{url('public/js')}}/dirPagination.js"></script> -->
<script>
window.fbMessengerPlugins = window.fbMessengerPlugins || {
  init: function () {
    FB.init({
      appId            : '1678638095724206',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.0'
    });
  }, callable: []
};
window.fbAsyncInit = window.fbAsyncInit || function () {
  window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
  window.fbMessengerPlugins.init();
};
setTimeout(function () {
  (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) { return; }
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
}, 0);
</script>
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/slick.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/slick-style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/animate.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="{{url('public/css')}}/style.css" media="all" />
  <link rel="stylesheet" href="{{url('public/home')}}/assets/css/config.css">
  <link rel="stylesheet" href="{{url('public/css')}}/mystyle.css">
  <link rel="stylesheet" href="{{url('public/css')}}/newstyle.css">
<style type="text/css">
	.section-products-carousel-tabs .nav-link.active::after{
		border-color:#fff;
	}
	/*.vertical-wrapper{
		display: none;
	}*/
</style>


<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<div class="clraefix"></div>
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-7" style="margin-top: 50px;"> 
            <div class="row text-center" style="border: 1px solid #ccc;">
                <div style="padding: 10px 15px ">
                    <h1 style="color: #0832A9;text-align: left;font-size: 35px; " >{{$download->title}}</h1>
                    <h2 style="color: #0832A9;font-size: 20px;">Tài liệu: {{$download->title}}</h2>
                    <iframe src="{{url('pdf',['slug'=>$download->slug])}}" style="width: 1000px;height: 1100px;border: none;"></iframe>

                  <p>Click <b><a href="{{url('pdf',['slug'=>$download->slug])}}" style="  font-size:15px; color: #2D55AC;text-align: center; padding-top: 20px;">{{$download->title}}</a></b> để Download Full bộ tài liệu về máy!</p> 
                </div>
                <div>           
                </div>
            </div>          
          </div>
          <div class="col-md-2"></div>                             
            <!-- #primary -->
            <div id="secondary" class="widget-area" role="complementary">
           
                <!-- .widget_techmarket_features_widget -->
             
                <!-- .widget_techmarket_poster_widget -->
              
                <!-- .widget_techmarket_products_carousel_widget -->
            </div>
            <!-- #secondary -->
        </div>
        <!-- .row -->
    </div>
    <!-- .col-full -->
</div>
@stop()


