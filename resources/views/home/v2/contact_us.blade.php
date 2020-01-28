@extends('layouts.v2.index')
@section('mainContainer')
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="#">Liên hệ</a></li>         
        </ul>
        
        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="page-title">
                    <h2>Liên hệ</h2>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.0859130033346!2d105.8636623148688!3d20.989192994503984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac1a22f105eb%3A0x5105c4650ab0cba7!2zODcgTMSpbmggTmFtLCBNYWkgxJDhu5luZywgSG_DoG5nIE1haSwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1579017370229!5m2!1sen!2s" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                <div class="info-contact clearfix">
                    <div class="col-lg-4 col-sm-4 col-xs-12 info-store">
                        <div class="row">
                            <div class="name-store">
                                <h3>Thông tin</h3>
                            </div>
                            <address>
                                <div class="address clearfix form-group">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="text">Hà Nội, Tầng 3 HH01A 87 Lĩnh Nam</div>
                                </div>
                                <div class="phone form-group">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="text">Phone: 1900 6536</div>
                                </div>
                                <div class="phone form-group">  
                                    <div class="icon">
                                        <i class="fa fa-envelope"></i>
                                    </div> 
                                    <div class="text">Email: Dao@hoplongtech.com.vn</div>          
                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-8 col-xs-12 contact-form">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <fieldset>
                                <legend>Liên hệ</legend>
                                <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-name">Họ và tên</label>
                            <div class="col-sm-10">
                                <input name="first-name" required value="" id="input-name" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
                                <div class="col-sm-10">
                                    <input name="email" value="" id="input-email" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-enquiry">Nội dung</label>
                                    <div class="col-sm-10">
                                        <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="buttons">
                                <div class="pull-right">
                                    <button class="btn btn-default buttonGray" type="submit">
                                        <span>Gửi</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()