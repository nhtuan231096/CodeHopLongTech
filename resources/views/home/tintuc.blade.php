@extends('layouts.product')
@section('content')       
    <div class="container" style="margin-top:20px; ">
        <div class="row">  
             <nav class="woocommerce-breadcrumb">
                <a href="{{route('home')}}">Trang chủ</a>
                <span class="delimiter">
                    <i class="fa fa-angle-right"></i>
                </span>
                Tin tức
            </nav>
                  <img src="{{url('uploads/news')}}/{{$tintuc->image_cover}}"></br></br>
                  <i class="fa fa-calendar"></i><span>&nbsp;{{date('d-m-Y',strtotime($tintuc->created_at))}}</span>
                   &nbsp;&nbsp; 
                  <i class="fa fa-user"></i><span>&nbsp;{{$tintuc->created_by}}</span>

                 </br>
                <div style="font-family:'Open Sans', sans-serif; line-height: 36px; word-spacing: 1.5px;">  {!!$tintuc->content!!}    </div>  
        </div>
    </div>
     <div class="container">
                <div id="cases" class="vc_row wpb_row vc_row-fluid vc_custom_1494583815331">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_custom_heading vc_custom_1492755345270 text_align_center title_no_stripe">
                                    <h2 style="font-size: 28px;"><center>Tin tức liên quan</center></h2> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1492770675514">
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper"></div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-8">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element vc_custom_1492754994322">
                                    <div class="wpb_wrapper">
                                        <p style="text-align: center;"><span style="display: block; line-height: 30px; font-size: 18px; color: #777777;"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper"></div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1451043728133">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="stm_news ">
                                    <ul class="news_list posts_per_row_4"> 
                                      @foreach($related as $rel)
                                        <a href="{{route('hot-news',['slug'=>$rel->slug])}}">
                                            <li>
                                            <div class="post_inner">
                                                <div class="image">
                                                    <div class="hovereffect"> <img id="myImg" src="{{url('uploads/news')}}/{{$rel->image_cover}}" alt="" style="height: 200px;">
                                                       <!--  <div id="myModal" class="modal"> <span class="close">&times;</span> <img class="modal-content" id="img01">
                                                            <div>{{$rel->title}}</div>
                                                        </div> -->
                                                      </br>
                                                      </br>
                                                         <div style="font-size: 15px;">{{$rel->title}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        </a>
                                      @endforeach
                                       </ul>
                                      
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@stop()