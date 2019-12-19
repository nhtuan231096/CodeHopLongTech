<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="" />
<meta name="author" content="roussounelos nikos" />
<link rel="stylesheet" href="{{url('public/css')}}/404/main.css" type="text/css" media="screen, projection" /> <!-- main stylesheet -->
<link rel="stylesheet" type="text/css" media="all" href="{{url('public/css')}}/404//tipsy.css" /> <!-- Tipsy implementation -->
<script type="text/javascript" src="{{url('public/js')}}/404/jquery-1.7.2.min.js"></script> <!-- jQuery implementation -->
<script type="text/javascript" src="{{url('public/js')}}/404/custom-scripts.js"></script><!-- All of my custom scripts -->
<script type="text/javascript" src="{{url('public/js')}}/404/jquery.tipsy.js"></script> <!-- Tipsy -->

<script type="text/javascript">
$(window).load(function(){
  //remove Universal Preloader
  universalPreloaderRemove();
  rotate();
    dogRun();
  dogTalk();
  //Tipsy implementation
  $('.with-tooltip').tipsy({gravity: $.fn.tipsy.autoNS});
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>404 - Not found</title>
</head>
<body>
<!-- Universal preloader -->

<div id="wrapper">
<!-- 404 graphic -->
  <div class="graphic">
        <img src="{{url('public/css')}}/404/images/404.png" alt="404" />
    </div><div class="top-left">
    <!-- Not found text -->
      <div class="not-found-text">
          <h1 class="not-found-text">Sorry! Link not found</h1>
        </div>
    <div class="search">
      <form name="search" method="get" action="{{route('search_product')}}">
            <input id="search" type="text" name="search" value="Tìm sản phẩm khác" />
            <input class="with-tooltip" title="Search!" id="search-param" type="submit" name="post_type" value="" />
      </form>


      <!-- <form class="navbar-search " method="get" action="{{route('search_product')}}">
            <label class="sr-only screen-reader-text" for="search">Tìm kiếm:</label>
            <div class="input-group">
              <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" name="title" placeholder="Tìm theo tên sản phẩm..">
              <div class="input-group-addon search-categories">
                <select name="product_cat" id="product_cat" class="postform resizeselect" style="width: 157.453px;">
                  <option value="0" selected="selected">Tất cả danh mục</option>
                </select>
              </div>
              <div class="input-group-btn">
                <input type="hidden" id="search-param" name="post_type" value="product">
                <button type="submit" class="btn btn-primary">
                  <span class="search-btn" style="color: #fff">Search></span>
                </button>
              </div>
            </div>
          </form>
 -->


    </div>
    <div class="top-menu">
      <a href="https://hoplongtech.com" class="with-tooltip" title="Return to the home page">Home</a> | <a href="https://hoplongtech.com/product" class="with-tooltip" title="Return product page">Product</a> | <a href="#" class="with-tooltip" title="Contact us!">Contact</a> | <a href="#" class="with-tooltip" title="Request additional help">Help</a>
    </div>
    <!-- top menu -->
</div>
  <div class="planet">
        <div class="dog-wrapper">
        <!-- dog running -->
            <div class="dog"></div>
            <div class="dog-bubble">
            </div>
            
            <!-- The dog bubble rotates these -->
            <div class="bubble-options">
                <p class="dog-bubble">
                    Are you lost, bud? No worries, I'm an excellent guide!
                </p>
                <p class="dog-bubble">
                    <br />
                    Arf! Arf!
                </p>
                <p class="dog-bubble">
                    <br />
                    Don't worry! I'm on it!
                </p>
                <p class="dog-bubble">
                    I wish I had a cookie<br /><img style="margin-top:8px" src="{{url('public/css')}}/404/images/cookie.png" alt="cookie" />
                </p>
                <p class="dog-bubble">
                    <br />
                    Geez! This is pretty tiresome!
                </p>
                <p class="dog-bubble">
                    <br />
                    Am I getting close?
                </p>
                <p class="dog-bubble">
                    Or am I just going in circles? Nah...
                </p>
                <p class="dog-bubble">
                    <br />
                    OK, I'm officially lost now...
                </p>
                <p class="dog-bubble">
                    I think I saw a <br /><img style="margin-top:8px" src="{{url('public/css')}}/404/images/cat.png" alt="cat" />
                </p>
                <p class="dog-bubble">
                    What are we supposed to be looking for, anyway? @@
                </p>
            </div>
            <!-- The dog bubble rotates these -->
        <!-- dog bubble talking -->
        </div>

        <!-- planet image -->
        <img src="{{url('public/css')}}/404/images/planet.png" alt="planet" />
        <!-- planet image -->
    </div>
<!-- planet at the bottom -->
</div>

</body>
</html>
