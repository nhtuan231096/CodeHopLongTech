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
    @media only screen and (max-width: 460px){
      .block-policy1 {
            display: none;
        }
    }
</style>
<!-- Main Container  -->
<div class="main-container">
    <div id="content">
        <div class="container">
            <div class="row box-content1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                </div><!-- 
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
                </div> -->
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
                              <a href="https://hoplongtech.com/product" title="Thiết bị tự động hóa">
                                <img src="{{url('public/homev2')}}/image/catalog/demo/category/cate1.jpg" alt="img">
                              </a>
                            </div>
                            <div class="cat-title">
                              <a href="https://hoplongtech.com/product" title="Thiết bị tự động hóa">
                                Thiết bị tự động hóa
                              </a>
                            </div>      
                        </div>
                        <div class="content-box">
                            <div class="image-cat"><a href="https://hoplongtech.com/product" title="Robot công nghiệp"><img src="{{url('public/homev2')}}/image/catalog/demo/category/cate2.jpg" alt="Robot công nghiệp"></a></div>
                            <div class="cat-title"><a href="https://hoplongtech.com/product" title="Robot công nghiệp">Robot công nghiệp</a></div>      
                        </div>
                        <div class="content-box">
                            <div class="image-cat"><a href="https://hoplongtech.com/product" title="Chế tạo tủ điện"><img src="{{url('public/homev2')}}/image/catalog/demo/category/cate3.jpg" alt="Chế tạo tủ điện"></a></div>
                            <div class="cat-title"><a href="https://hoplongtech.com/product" title="Chế tạo tủ điện">Chế tạo tủ điện</a></div>      
                        </div>
                        <div class="content-box">
                            <div class="image-cat"><a href="https://hoplongtech.com/product" title="Điện dân dụng"><img src="{{url('public/homev2')}}/image/catalog/demo/category/cate4.jpg" alt="Điện dân dụng"></a></div>
                            <div class="cat-title"><a href="https://hoplongtech.com/product" title="Điện dân dụng">Điện dân dụng</a></div>      
                        </div>
                        <div class="content-box">
                            <div class="image-cat"><a href="https://hoplongtech.com/product" title="IoT - Smart Factory"><img src="{{url('public/homev2')}}/image/catalog/demo/category/cate5.jpg" alt="IoT - Smart Factory"></a></div>
                            <div class="cat-title"><a href="https://hoplongtech.com/product" title="IoT - Smart Factory">IoT - Smart Factory</a></div>      
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
                                <h2 class="about-title">Lịch sử phát triển</h2> <img src="{{url('public/homev2')}}/image/history/history.jpg" alt="About Us">
                                <p class="description-about"> Thành lập năm 2010 với mô hình kinh doanh là nhà cung cấp thiết bị tự động hóa và giải pháp tích hợp robot công nghiệp cho các nhà máy sản xuất tại Việt Nam..... <a href="#">Xem thêm ></a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 faq-about-us">
                            <h2 class="about-title">Về Hoplong</h2>
                            <div class="content-faq">
                                <div id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel">
                                        <div class="panel-head" role="tab" id="headingOne">
                                            <h4 class="panel-title">                        
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">                         
                                                    <span>Giới thiệu chung</span>                       
                                                </a>                      
                                            </h4> 
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body"> Hợp Long là nhà cung cấp thiết bị, giải pháp tự động hóa và tích hợp robot công nghiệp hàng đầu tại Việt Nam. 
                                            </br>Hiện tại chúng tôi có hơn 200.000 ngàn sản phẩm được chỉ định là nhà phân phối của các thương hiệu: Schneider, Autonics, Omron, Hanyoung, Patlite, LS, Delta, Siemens, Idec,... . </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-head" role="tab" id="headingTwo">
                                            <h4 class="panel-title">                        
                                                <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">                       
                                                    <span>Năng lực công nghệ</span>                      
                                                </a>                      
                                            </h4> 
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="true">
                                            <div class="panel-body"> Dựa trên những đầu tư nghiên cứu phát triển công nghệ bài bản trong nhiều năm qua và sự nhanh nhạy trong việc nắm bắt những xu hướng công nghệ mới, Hợp Long đã tập trung xây dựng các công nghệ lõi, nâng cao năng lực công nghệ và năng lực cạnh tranh cho công ty...
                                                <p>1. Trí tuệ nhân tạo - công nghệ mũi nhọn</p>
                                                Đội ngũ lập trình viên tại Hợp Long đã dành hàng ngàn giờ phát triển những ứng dụng trong lĩnh vực bán hàng và quản lý sản xuất nhằm tăng trải nghiệm của khách hàng khi mua hàng hoặc sử dụng dịch vụ tại Hợp Long</p>
                                                <p>2. Khai thác nền tảng công nghệ IoT</p>
                                                Hợp Long đang là đối tác quan trọng và tin cậy của các tập đoàn hàng đầu: Schneider, Patlite,... trong việc triển khai các dự án ToT tại các nhà máy. </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-head" role="tab" id="headingThree">
                                            <h4 class="panel-title">                        
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">                         
                                                    <span>Tại sao nên chọn Hợp Long là đối tác.</span>                      
                                                </a>                      
                                            </h4> 
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body"> Bằng những nỗ lực không ngừng nghỉ trong hoạt động kinh doanh, cho đến thời điểm hiện tại chúng tôi đã có mặt tại 4 thành phố lớn nhất cả nước: Hà Nội, Hải Phòng, Đà Nẵng và thành phố Hồ Chí Minh.
                                                </br>Đến với Hợp Long, Quý khách hàng sẽ được cam kết tuyệt đối về
                                                </br>1. Hàng chính hãng, giá tốt, đầy đủ CO/CQ
                                                </br>2. Đội ngũ nhân viên tư vấn nhiệt tình, chuyên môn cao.
                                                </br>3. Hàng có sẵn tại kho số lượng lớn
                                                </br>4. Giao hàng nhanh, miễn phí
                                                </br>5. Hỗ trợ kỹ thuật 24/7, lắp đặt, bảo hành miễn phí.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-head" role="tab" id="headingFour">
                                            <h4 class="panel-title">                        
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">                       
                                                <span>Tầm nhìn - Sứ mệnh - Giá trị cốt lõi</span>                      
                                            </a>                      
                                            </h4> 
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body"> Hợp Long định hướng trở thành một tập đoàn Công nghiệp - Công nghệ - Thương mại Dịch vụ hàng đầu tại Việt Nam và khu vực, không ngừng đổi mới, sáng tạo để kiến tạo nền công nghiệp đẳng cấp, góp phần nâng cao năng lực sản suất và cạnh tranh, đưa quá trình sản xuất tự động đến gần hơn với nền công nghiệp non trẻ chủ yếu sử dụng nhân công lao động năng suất thấp tại Việt Nam.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-head" role="tab" id="headingFive">
                                            <h4 class="panel-title">                        
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">                       
                                                    <span>Các thương hiệu</span>                      
                                                </a>                      
                                            </h4> 
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body"> Với mong muốn đem đến cho thị trường tự động hóa công nghiệp những sản phẩm - dịch vụ theo tiêu chuẩn quốc tế và những trải nghiệm hoàn toàn mới về việc vận hành, sử dụng các hệ thống tự động hóa trong sản xuất, Hợp Long không ngừng nỗ lực xây dựng và hoàn thiện hệ thống phân phối hàng hàng đáp ứng nhu cầu thiết bị tự động hóa khắp cả nước. </div>
                                            <div class="panel-body">
                                                <img style="padding: 15px;" src="{{url('public/homev2')}}/image/theme/logo-120.png" alt="Hoplongtech">
                                                <img style="padding: 15px;" src="{{url('public/homev2')}}/image/theme/truong-an-hp.png" alt="Trường An Hải Phòng">
                                                <img style="padding: 15px;" src="{{url('public/homev2')}}/image/theme/truong-an-dn.png" alt="Trường An Đà Nẵng">
                                                <img style="padding: 15px; "src="{{url('public/homev2')}}/image/theme/truong-an-hcm.png" alt="Trường An Hồ Chí Minh">
                                            </div>
                                            <div class="panel-body">
                                                <img style="padding: 15px; "src="{{url('public/homev2')}}/image/theme/tmarketvn.png" alt="Tmaketvn.com">
                                                <img style="padding: 15px; "src="{{url('public/homev2')}}/image/theme/minh-an.png" alt="Minh An">
                                                <img style="padding: 15px; "src="{{url('public/homev2')}}/image/theme/phuc-an.png" alt="Phúc An">
                                                <img style="padding: 15px; "src="{{url('public/homev2')}}/image/theme/bao-nam.png" alt="Bảo Nam">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-head" role="tab" id="headingSix">
                                            <h4 class="panel-title">                        
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">                         
                                                    <span>Giải thưởng</span>                     
                                                </a>                      
                                            </h4> 
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">  </div>
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
                <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/id2-banner-text.jpg" alt="image"></a>
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
                                                    <img style="width: 258px" width="256" height="100" src="{{url('uploads/category')}}/{{$shn->cover_image}}" class="img-1 img-responsive" alt="{{$shn->title}}">
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
                    <!-- <div id="so_category_slider_191" class="so-category-slider container-slider module cate-slider2">
                        <div class="modcontent">
                            <div class="page-top">
                                <div class="page-title-categoryslider">Tin tức</div>
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
                    </div> -->
                    <!-- du an -->
                    <div id="so_category_slider_191" class="so-category-slider container-slider module cate-slider2">
                        <div class="modcontent">
                            <div class="page-top">
                                <div class="page-title-categoryslider">Flash Sale</div>
                            </div>
                        </div>
                        <div class="col-md-12 our-member">
                        <div class="products-list row nopadding-xs so-filter-gird grid infinite-scroll">
                            @foreach($flash_sale_products as $itemFlashSale)
                            <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item-container">
                                    <div class="left-block left-b">
                                        
                                        <div class="product-image-container second_img">
                                            <a href="product.html" target="_self" title="Lastrami bacon">
                                                <img src="image/catalog/demo/product/270/e1.jpg" class="img-1 img-responsive" alt="image1">
                                                <img src="image/catalog/demo/product/270/e10.jpg" class="img-2 img-responsive" alt="image2">
                                            </a>
                                        </div>
                                        <!--quickview--> 
                                        <div class="so-quickview">
                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                        </div>                                                     
                                        <!--end quickview-->

                                        
                                    </div>
                                    <div class="right-block">
                                        <div class="button-group so-quickview cartinfo--left">
                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                <span>Add to cart </span>   
                                            </button>
                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                            </button>
                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                            </button>
                                            
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
                                            <h4><a href="product.html" title="Pastrami bacon" target="_self">Lastrami bacon</a></h4>
                                            
                                        </div>
                                        <p class="price">
                                          <span class="price-new">$80.00</span>
                                          
                                        </p>
                                        <div class="description item-desc hidden">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                        <div class="list-block hidden">
                                            <button class="addToCart btn-button" type="button" title="Add to Cart" onclick="cart.add('101', '1');"><i class="fa fa-shopping-basket"></i>
                                            </button>
                                            <button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i>
                                            </button>
                                            <button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('101');"><i class="fa fa-refresh"></i>
                                            </button>
                                            <!--quickview-->                                                      
                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>                                                        
                                            <!--end quickview-->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                            {{ $flash_sale_products->links() }}
                        </div>
                    </div>
                    </div>
                    <!-- du an -->
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                    <div class="banners1 banner-t banners">
                      <div>
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/banner1.jpg" alt="image"></a>
                      </div>
                    </div>
                    <div class="banners1 banners">
                      <div>
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/banner2.jpg" alt="image"></a>
                      </div>
                    </div><!-- 
                    <div class="banners1 banners">
                      <div>
                        <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/banner3.jpg" alt="image"></a>
                      </div>
                    </div> -->
                </div>
            </div>

            <!-- <div class="banners bannersb">
                <div class="banner">
                  <a href="#"><img src="{{url('public/homev2')}}/image/catalog/banners/id2-banner-b.jpg" alt="image"></a>
                </div>
            </div> -->
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
<script type="text/javascript" style="{{url('public/homev2/js')}}/jquery.jscroll.min.js"></script>
<!-- <script type="text/javascript">
    $('ul.pagination').hide();
    $(function() {
        $('.infinite-scroll').jscroll({
            autoTrigger: true,
            loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.infinite-scroll',
            callback: function() {
                $('ul.pagination').remove();
            }
        });
    });
</script> -->
@stop