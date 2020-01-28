@extends('layouts.v2.index')
@section('mainContainer')
<!-- Theme CSS
============================================ -->
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<link id="color_scheme" href="{{'public/homev2'}}/css/home2.css" rel="stylesheet"> 
<link href="{{'public/homev2'}}/css/responsive.css" rel="stylesheet">
<style type="text/css">
    .typeheader-1{
        margin-bottom:0!important;
    }
</style>
<!-- Main Container  -->
<div class="main-container">
    <div id="content">
        <div class="container">
            <div class="row box-content1">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-left">
                    <div class="module sohomepage-slider ">
                        <div class="yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                            @foreach($slider_homes as $slider)
                            <div class="yt-content-slide">
                                <a href="#"><img src="{{url('uploads/slider')}}/{{$slider->cover_image}}" alt="{{$slider->title}}" class="img-responsive"></a>
                            </div>
                            @endforeach
                        </div>
                        
                        <div class="loadeding"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 col_fwgr col-right">
                  <div class="bannerstop banners">
                    <div class="row">
                      <div class="item1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/cat1.jpg" alt="image"></a>
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/cat2.jpg" alt="image"></a>
                      </div>
                      <div class="item2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/cat3.jpg" alt="image"></a>
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/cat4.jpg" alt="image"></a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="block-policy1">
              <ul>
                <li class="item-1">
                  <a href="#" class="item-inner">       
                    <div class="content">
                      <b>Miễn phí</b>
                      <span>Giao hàng nội thành</span>
                    </div>
                  </a>
                </li>
                <li class="item-2">
                  <a href="#" class="item-inner">       
                      <div class="content">
                        <b>An toàn</b>
                        <span>Giao dịch tài chính</span>
                      </div> 
                    </a>
                </li>
                <li class="item-3">
                  <a href="#" class="item-inner">       
                    <div class="content">
                      <b>Thanh toán</b>
                      <span>Tiện lợi</span>
                    </div>
                  </a>
                </li>
                <li class="item-4">
                  <a href="#" class="item-inner">       
                    <div class="content">
                      <b>Hỗ trợ trực tuyến</b>
                      <span>24 hours on day</span>
                    </div>
                  </a>
                </li>
                <li class="item-5">
                  <a href="#" class="item-inner">        
                    <div class="content">
                      <b>365+ ngày</b>
                      <span>Bảo hành sản phẩm</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>

            <div id="so_categories_16425506561529398732" class="so-categories module custom-slidercates">
                <h3 class="modtitle"><span>Sản phẩm & dịch vụ</span></h3>            
                <div class="form-group">
                  <a class="viewall" href="#">View All</a>                               
                </div>
            
                <div class="modcontent">
                    <div class="yt-content-slider cat-wrap" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="5" data-items_column0="5" data-items_column1="4" data-items_column2="3"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                        <div class="content-box">
                            <div class="image-cat">
                              <a href="#" title="Electronics">
                                <img src="{{url('public/homev2')}}/image/catalog/demo/category/cate1.jpg" alt="img">
                              </a>
                            </div>
                            <div class="cat-title">
                              <a href="#" title="Electronics">
                                Automation
                              </a>
                            </div>      
                        </div>
                        <div class="content-box">
                            <div class="image-cat"><a href="#" title="Iwatch & Accessories"><img src="{{url('public/homev2')}}/image/catalog/demo/category/cate2.jpg" alt="img"></a></div>
                            <div class="cat-title"><a href="#" title="Iwatch & Accessories">Robot công nghiệp</a></div>      
                        </div>
                        <div class="content-box">
                            <div class="image-cat"><a href="#" title="Furnicoms"><img src="{{url('public/homev2')}}/image/catalog/demo/category/cate3.jpg" alt="img"></a></div>
                            <div class="cat-title"><a href="#" title="Furnicoms">Chế tạo tủ điện</a></div>      
                        </div>
                        <div class="content-box">
                            <div class="image-cat"><a href="#" title="Fashion"><img src="{{url('public/homev2')}}/image/catalog/demo/category/cate4.jpg" alt="img"></a></div>
                            <div class="cat-title"><a href="#" title="Fashion">Điện dân dụng</a></div>      
                        </div>
                        <div class="content-box">
                            <div class="image-cat"><a href="#" title="Health & Beauty"><img src="{{url('public/homev2')}}/image/catalog/demo/category/cate5.jpg" alt="img"></a></div>
                            <div class="cat-title"><a href="#" title="Health & Beauty">IoT</a></div>      
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-container container">   
        <div class="row" style="margin-top:30px;">
            <div id="content" class="col-sm-12">
                <div class="about-us about-demo-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 about-us-content">
                            <div class="content-about">
                                <h2 class="about-title">Lịch sử phát triển</h2> <img src="{{url('public/homev2')}}/image/demo/about/about-us-demo4.jpg" alt="About Us">
                                <p class="description-about"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                    <br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec vulputate </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 faq-about-us">
                            <h2 class="about-title">Về Hoplong</h2>
                            <div class="content-faq">
                                <div id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel">
                                        <div class="panel-head" role="tab" id="headingOne">
                                            <h4 class="panel-title">                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">                         <span>Giới thiệu chung</span>                       </a>                      </h4> </div>
                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-head" role="tab" id="headingTwo">
                                            <h4 class="panel-title">                        
                                                <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">                       
                                                    <span>Tầm nhìn</span>                      
                                                </a>                      
                                            </h4> 
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="true">
                                            <div class="panel-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-head" role="tab" id="headingThree">
                                            <h4 class="panel-title">                        
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">                         
                                                    <span>Sứ mệnh</span>                      
                                                </a>                      
                                            </h4> 
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-head" role="tab" id="headingFour">
                                            <h4 class="panel-title">                        
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">                       
                                                <span>Giá trị cốt lõi</span>                      
                                            </a>                      
                                            </h4> 
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-head" role="tab" id="headingFive">
                                            <h4 class="panel-title">                        
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">                       
                                                    <span>Quisque posuere dolor in malesuada?</span>                      
                                                </a>                      
                                            </h4> 
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-head" role="tab" id="headingSix">
                                            <h4 class="panel-title">                        
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">                         
                                                    <span>Lorem ipsum dolor sit amet?</span>                      
                                                </a>                      
                                            </h4> 
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
            <div class="banner-text banners">
              <div>
                <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/id2-banner-text.png" alt="image"></a>
              </div>
            </div>

            <div class="row box-content2">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                    <!-- Technology -->
                    <div id="so_category_slider_189" class="so-category-slider container-slider module cate-slider2">
                        <div class="modcontent">
                            <div class="page-top">
                                <div class="page-title-categoryslider">Nhà phân phối chính thức</div>
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
                                                    <img height="100" src="{{url('uploads/category')}}/{{$shn->cover_image}}" class="img-1 img-responsive" alt="{{$shn->title}}">
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
                     <!-- Health & Beauty -->
                    <div id="so_category_slider_191" class="so-category-slider container-slider module cate-slider2">
                        <div class="modcontent">
                            <div class="page-top">
                                <div class="page-title-categoryslider">Health & Beauty</div>
                            </div>
                        </div>
                        <div class="col-md-12 our-member">
                        
                        <div class="short-des">Consectetur adipiscing elit. Donec pellentesque venenatis elit, quis aliquet mauris malesuada vel. Donec vitae libero dolor, eget dapibus justo.
                            <br>Aenean facilisis aliquet feugiat. Suspendisse lacinia congue est ac semper. Nulla ut elit magna, vitae volutpat magna.</div>
                        <div class="overflow-owl-slider1">
                            <div class="wrapper-owl-slider1">
                                <div class="row slider-ourmember">
                                    <div class="item-about col-lg-6 col-md-6 col-sm-6">
                                        <div class="item respl-item">
                                            <div class="item-inner">
                                                <div class="w-image-box">
                                                    <div class="item-image">
                                                        <a title="Jennifer lawrence" href="#">
                                                            <img src="{{url('public/homev2')}}/image/catalog/about/cl-image-1.jpg" alt="Image Client">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="info-member">
                                                    <h2 class="cl-name"><a title="Jennifer lawrence" href="#">Jennifer lawrence</a></h2>
                                                    <p class="cl-job">Art Director</p>
                                                    <p class="cl-des">Donec dignissim, enim ac semper tempus, ligula neque pulvinar mi, sed facilisis arcu placerat consequat</p>
                                                    <ul>
                                                        <li>
                                                            <a class="fa fa-f" title="Facebook" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-t" title="Twitter" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-g" title="google" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-s" title="skyper" href="#"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-about col-lg-6 col-md-6 col-sm-6">
                                        <div class="item respl-item">
                                            <div class="item-inner">
                                                <div class="w-image-box">
                                                    <div class="item-image">
                                                        <a title="Jennifer lawrence" href="#">
                                                            <img src="{{url('public/homev2')}}/image/catalog/about/cl-image-2.jpg" alt="Image Client">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="info-member">
                                                    <h2 class="cl-name"><a title="Jennifer lawrence" href="#">Jennifer lawrence</a></h2>
                                                    <p class="cl-job">Design Leader</p>
                                                    <p class="cl-des">Donec dignissim, enim ac semper tempus, ligula neque pulvinar mi, sed facilisis arcu placerat consequat</p>
                                                    <ul>
                                                        <li>
                                                            <a class="fa fa-f" title="Facebook" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-t" title="Twitter" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-g" title="google" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-s" title="skyper" href="#"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-about col-lg-6 col-md-6 col-sm-6">
                                        <div class="item respl-item">
                                            <div class="item-inner">
                                                <div class="w-image-box">
                                                    <div class="item-image">
                                                        <a title="Jennifer lawrence" href="#">
                                                            <img src="{{url('public/homev2')}}/image/catalog/about/cl-image-3.jpg" alt="Image Client">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="info-member">
                                                    <h2 class="cl-name"><a title="Jennifer lawrence" href="#">Jennifer lawrence</a></h2>
                                                    <p class="cl-job">Tech Leader</p>
                                                    <p class="cl-des">Donec dignissim, enim ac semper tempus, ligula neque pulvinar mi, sed facilisis arcu placerat consequat</p>
                                                    <ul>
                                                        <li>
                                                            <a class="fa fa-f" title="Facebook" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-t" title="Twitter" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-g" title="google" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-s" title="skyper" href="#"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-about col-lg-6 col-md-6 col-sm-6">
                                        <div class="item respl-item">
                                            <div class="item-inner">
                                                <div class="w-image-box">
                                                    <div class="item-image">
                                                        <a title="Jennifer lawrence" href="#">
                                                            <img src="{{url('public/homev2')}}/image/catalog/about/cl-image-4.jpg" alt="Image Client">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="info-member">
                                                    <h2 class="cl-name"><a title="Jennifer lawrence" href="#">Jennifer lawrence</a></h2>
                                                    <p class="cl-job">Manager</p>
                                                    <p class="cl-des">Donec dignissim, enim ac semper tempus, ligula neque pulvinar mi, sed facilisis arcu placerat consequat</p>
                                                    <ul>
                                                        <li>
                                                            <a class="fa fa-f" title="Facebook" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-t" title="Twitter" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-g" title="google" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="fa fa-s" title="skyper" href="#"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                    <div class="banners1 banner-t banners">
                      <div>
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/id2-banner1.jpg" alt="image"></a>
                      </div>
                    </div>
                    <div class="banners1 banners">
                      <div>
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/id2-banner2.jpg" alt="image"></a>
                      </div>
                    </div>
                    <div class="banners1 banners">
                      <div>
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/id2-banner3.jpg" alt="image"></a>
                      </div>
                    </div>
                </div>
            </div>

            <div class="banners bannersb">
                <div class="banner">
                  <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/id2-banner-b.jpg" alt="image"></a>
                </div>
            </div>
            <div class="slider-brands col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="yt-content-slider contentslider" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="7" data-items_column0="7" data-items_column1="5" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes"
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
        </div>
    </div>
</div>
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
@stop