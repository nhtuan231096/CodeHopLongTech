@extends('layouts.home')
@section('content')
<style type="text/css">
   body{margin:0;padding:0;color:rgb(50,50,50);font-family:'Open Sans',sans-serif;font-size:112.5%;line-height:1.6em}.timeline{position:relative;width:660px;margin:0 auto;margin-top:20px;padding:1em 0;list-style-type:none}.timeline:before{position:absolute;left:50%;top:0;content:' ';display:block;width:6px;height:100%;margin-left:-3px;background:rgb(80,80,80);background:-moz-linear-gradient(top,rgba(80,80,80,0) 0%,rgb(80,80,80) 8%,rgb(80,80,80) 92%,rgba(80,80,80,0) 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,rgba(30,87,153,1)),color-stop(100%,rgba(125,185,232,1)));background:-webkit-linear-gradient(top,rgba(80,80,80,0) 0%,rgb(80,80,80) 8%,rgb(80,80,80) 92%,rgba(80,80,80,0) 100%);background:-o-linear-gradient(top,rgba(80,80,80,0) 0%,rgb(80,80,80) 8%,rgb(80,80,80) 92%,rgba(80,80,80,0) 100%);background:-ms-linear-gradient(top,rgba(80,80,80,0) 0%,rgb(80,80,80) 8%,rgb(80,80,80) 92%,rgba(80,80,80,0) 100%);background:linear-gradient(to bottom,rgba(80,80,80,0) 0%,rgb(80,80,80) 8%,rgb(80,80,80) 92%,rgba(80,80,80,0) 100%);z-index:5}.timeline li{padding:1em 0}.timeline li:after{content:"";display:block;height:0;clear:both;visibility:hidden}.direction-l{position:relative;width:300px;float:left;text-align:right}.direction-r{position:relative;width:300px;float:right}.flag-wrapper{position:relative;display:inline-block;text-align:center}.flag{position:relative;display:inline;background:rgb(248,248,248);padding:6px 10px;border-radius:5px;font-weight:600;text-align:left}.direction-l .flag{-webkit-box-shadow:-1px 1px 1px rgba(0,0,0,.15),0 0 1px rgba(0,0,0,.15);-moz-box-shadow:-1px 1px 1px rgba(0,0,0,.15),0 0 1px rgba(0,0,0,.15);box-shadow:-1px 1px 1px rgba(0,0,0,.15),0 0 1px rgba(0,0,0,.15)}.direction-r .flag{-webkit-box-shadow:1px 1px 1px rgba(0,0,0,.15),0 0 1px rgba(0,0,0,.15);-moz-box-shadow:1px 1px 1px rgba(0,0,0,.15),0 0 1px rgba(0,0,0,.15);box-shadow:1px 1px 1px rgba(0,0,0,.15),0 0 1px rgba(0,0,0,.15)}.direction-l .flag:before,.direction-r .flag:before{position:absolute;top:50%;right:-38px;content:' ';display:block;width:15px;height:15px;margin-top:-10px;background:#fff;border-radius:10px;border:4px solid rgb(255,80,80);z-index:10}.direction-r .flag:before{left:-38px}.direction-l .flag:after{content:"";position:absolute;left:100%;top:50%;height:0;width:0;margin-top:-8px;border:solid transparent;border-left-color:rgb(248,248,248);border-width:8px;pointer-events:none}.direction-r .flag:after{content:"";position:absolute;right:100%;top:50%;height:0;width:0;margin-top:-8px;border:solid transparent;border-right-color:rgb(248,248,248);border-width:8px;pointer-events:none}.time-wrapper{display:inline;line-height:1em;font-size:.66666em;color:rgb(250,80,80);vertical-align:middle}.direction-l .time-wrapper{float:left}.direction-r .time-wrapper{float:right}.time{display:inline-block;padding:4px 6px;background:rgb(248,248,248)}.desc{margin:1em .75em 0 0;font-size:.77777em;font-style:italic;line-height:30px}.desc1{margin:1em .75em 0 0;text-align:left;font-size:.77777em;font-style:italic;line-height:30px}.direction-r .desc{margin:1em 0 0 .75em}@media screen and (max-width:660px){.timeline{width:100%;padding:4em 0 1em 0}.timeline li{padding:2em 0}.direction-l,.direction-r{float:none;width:100%;text-align:center}.flag-wrapper{text-align:center}.flag{background:rgb(255,255,255);z-index:15}.direction-l .flag:before,.direction-r .flag:before{position:absolute;top:-30px;left:55%;content:' ';display:block;width:12px;height:12px;margin-left:-9px;background:#fff;border-radius:10px;border:4px solid rgb(255,80,80);z-index:10}.direction-l .flag:after,.direction-r .flag:after{content:"";position:absolute;left:50%;top:-8px;height:0;width:0;margin-left:-8px;border:solid transparent;border-bottom-color:rgb(255,255,255);border-width:8px;pointer-events:none}.time-wrapper{display:block;position:relative;margin:4px 0 0 0;z-index:14}.direction-l .time-wrapper{float:none}.direction-r .time-wrapper{float:none}.desc{position:relative;margin:1em 0 0 0;padding:1em;background:rgb(245,245,245);-webkit-box-shadow:0 0 1px rgba(0,0,0,.2);-moz-box-shadow:0 0 1px rgba(0,0,0,.2);box-shadow:0 0 1px rgba(0,0,0,.2);z-index:15}.direction-l .desc,.direction-r .desc{position:relative;margin:1em 1em 0 1em;padding:1em;z-index:15}}@media screen and (min-width:400px ?? max-width:660px){.direction-l .desc,.direction-r .desc{margin:1em 4em 0 4em}}
</style>
<div id="content" class="site-content">
    <div class="col-full">     
        <div class="row" >
            <div class="container">
                <nav class="woocommerce-breadcrumb">
                    <h5>Chặng đường phát triển công ty</h5>
                </nav>
            </div>
            <ul class="timeline">
            <!-- Item 1 -->
            <li>
                <div class="direction-r">
                    <div class="flag-wrapper">
                        <span class="flag">2019</span>
                    </div>
                    <div class="desc">
                        <img src="{{url('uploads/about')}}/lich-su-2019.jpg" alt="" width="300px">Trở thành nhà phân phối sản phẩm của Patlite, Hanyoung và Delta
                    </div>
                </div>
            </li>
            <!-- Item 2 -->
            <li>
                <div class="direction-l">
                    <div class="flag-wrapper">
                        <span class="flag">2018</span>
                    </div>
                    <div class="desc">
                        <img src="{{url('uploads/about')}}/lich-su-2018.jpg" alt="" width="300px">
                        <p style="text-align: left;">Ký kết hợp tác thương mại với COGNEX.</br>Trở thành đối tác phân phối sản phẩm đóng cắt và tự động hóa của SIEMENS VN.</p>
                    </div>
                </div>
            </li>
            <!-- Item 3 -->
            <li>
                <div class="direction-r">
                    <div class="flag-wrapper">
                        <span class="flag">2017</span>
                    </div>
                    <div class="desc">
                        <img src="{{url('uploads/about')}}/lich-su-2017.jpg" alt="" width="300px">Trở thành nhà phân phối sản phẩm của PROFACE & TEND</br>Hợp tác thương mại với CHINT & SELEC.
                    </div>
                </div>
            </li>
            <li>
                <div class="direction-l">
                    <div class="flag-wrapper">
                        <span class="flag">2016</span>
                    </div>
                    <div class="desc">
                    <img src="{{url('uploads/about')}}/lich-su-2016.jpg" alt="" width="300px"> <p style="text-align: left;">Trở thành nhà phân phối sản phẩm SCHNEIDER. </br>Hợp tác thương mại với SMC PNEUMATICS.</p></div>
                </div>
            </li>   
            <li>
        <div class="direction-r">
            <div class="flag-wrapper">
                <span class="flag">2015</span>
                <!-- <span class="time-wrapper"><span class="time">2008 - 2011</span></span> -->
            </div>
            <div class="desc">
            <img src="{{url('uploads/about')}}/lich-su-2015.jpg" alt="" width="300px">Ký kết hợp tác thương mại với AUTONICS.</div>
        </div>
    </li>

    <li>
        <div class="direction-l">
            <div class="flag-wrapper">
                <span class="flag">2014</span>
                <!-- <span class="time-wrapper"><span class="time">2011 - 2013</span></span> -->
            </div>
            <div class="desc">
            <img src="{{url('uploads/about')}}/lich-su-2014.jpg" alt="" width="300px"> <p style="text-align: left;">Trở thành nhà phân phối sản phẩm của OMRON & MITSUBISHI.</p></div>
        </div>
    </li>   <li>
        <div class="direction-r">
            <div class="flag-wrapper">
                <span class="flag">2012</span>
                <!-- <span class="time-wrapper"><span class="time">2008 - 2011</span></span> -->
            </div>
            <div class="desc">
            <img src="{{url('uploads/about')}}/lich-su-2012.jpg" alt="" width="300px">Ký kết hợp tác thương mại với hãng IDEC.</div>
        </div>
    </li>

    <li>
        <div class="direction-l">
            <div class="flag-wrapper">
                <span class="flag">2010</span>
                <!-- <span class="time-wrapper"><span class="time">2011 - 2013</span></span> -->
            </div>
            <div class="desc">
            <!-- <span class="time-wrapper"><span class="time">2011 - 2013</span></span> -->
                    <img src="{{url('uploads/about')}}/lich-su-2010.jpg" alt="" width="300px">
         <p style="text-align: left;">
            Công ty Cổ phần Công nghệ Hợp Long chính thức ra đời và đi vào hoạt động từ 03/2010.</p></div>
        </div>
    </li>
</ul>

                </div>
                <!-- .col-full -->
            </div>
            </div>
@stop()