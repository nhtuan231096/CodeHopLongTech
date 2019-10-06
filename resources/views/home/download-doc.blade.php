@extends('layouts.home')
@section('content')
  </br>
            <div id="content" class="site-content" tabindex="-1">
                <div class="col-full">
                    <div class="row">
                      <div class="col-md-3"></div>
                      <div class="col-md-7"> 
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
                        <section class="brands-carousel">
                            <span class="sr-only">Brands Carousel</span>
                            <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                <div class="brands">
                                @foreach($partners as $partner)
                                    <div class="item">
                                        <a href="#">
                                            <figure>
                                                <figcaption class="text-overlay">
                                                    <div class="info">
                                                        <p>{{$partner->title}}</p>
                                                    </div>
                                                    <!-- /.info -->
                                                </figcaption>
                                                <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="{{url('uploads/partner')}}/{{$partner->cover_image}}">
                                            </figure>
                                        </a>
                                    </div>
                                @endforeach
                                    <!-- .item -->
                                </div>
                            </div>
                            <!-- .col-full -->
                        </section>
                        <!-- .brands-carousel -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>
@stop()