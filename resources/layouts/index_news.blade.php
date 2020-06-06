    <!DOCTYPE html>
    <html lang="en-US" class="stm-site-preloader" class="no-js">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
     <!--  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
      <link type="text/css" media="only screen and (max-width: 768px)" href="{{url('public/home/home')}}/wp-content/cache/autoptimize/1/css/autoptimize_61c4e7278d6f0e3a9c27218c07ea9ab5.css" rel="stylesheet" />
      <link rel="stylesheet" href="{{url('public/tuyendung')}}/assets/css/style.css">
      <title>
          @if(isset($tintuc))
              {{$tintuc->meta_title}}
          @else
           Công ty cổ phẩn công nghệ hợp long
          @endif
      </title>
      <style type="text/css" media="screen">#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active:hover,body #booked-profile-page input[type=submit].button-primary:hover,body .booked-list-view button.button:hover, body .booked-list-view input[type=submit].button-primary:hover,body table.booked-calendar input[type=submit].button-primary:hover,body .booked-modal input[type=submit].button-primary:hover,body table.booked-calendar th,body table.booked-calendar thead,body table.booked-calendar thead th,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,body #booked-profile-page .booked-profile-header,body #booked-profile-page .booked-tabs li.active a,body #booked-profile-page .booked-tabs li.active a:hover,body #booked-profile-page .appt-block .google-cal-button > a:hover,#ui-datepicker-div.booked_custom_date_picker .ui-datepicker-header{ background:#002e5b !important; }body #booked-profile-page input[type=submit].button-primary:hover,body table.booked-calendar input[type=submit].button-primary:hover,body .booked-list-view button.button:hover, body .booked-list-view input[type=submit].button-primary:hover,body .booked-modal input[type=submit].button-primary:hover,body table.booked-calendar th,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,body #booked-profile-page .booked-profile-header,body #booked-profile-page .appt-block .google-cal-button > a:hover{ border-color:#002e5b !important; }body table.booked-calendar tr.days,body table.booked-calendar tr.days th,body .booked-calendarSwitcher.calendar,body #booked-profile-page .booked-tabs,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead th{ background:#6c98e1 !important; }body table.booked-calendar tr.days th,body #booked-profile-page .booked-tabs{ border-color:#6c98e1 !important; }#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover,body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block,body #booked-profile-page .appt-block .google-cal-button > a,body .booked-modal p.booked-title-bar,body table.booked-calendar td:hover .date span,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover,.booked-ms-modal .booked-book-appt /* Multi-Slot Booking */{ background:#6c98e1; }body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body #booked-profile-page .appt-block .google-cal-button > a,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover{ border-color:#6c98e1; }body .booked-modal .bm-window p i.fa,body .booked-modal .bm-window a,body .booked-appt-list .booked-public-appointment-title,body .booked-modal .bm-window p.appointment-title,.booked-ms-modal.visible:hover .booked-book-appt{ color:#6c98e1; }.booked-appt-list .timeslot.has-title .booked-public-appointment-title { color:inherit; }</style>
      <link rel='dns-prefetch' href='//fonts.googleapis.com' />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-43044974-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-43044974-10');
</script>
      <link type="text/css" media="all" href="{{url('public/home/home')}}/wp-content/cache/autoptimize/1/css/autoptimize_3d12d8facd027ad75f305f5d1bd00a3d.css" rel="stylesheet" />
      <link type="text/css" media="screen" href="{{url('public/home/home')}}/wp-content/cache/autoptimize/1/css/autoptimize_aa70d04ac018ff6c48774c3cb5f049f0.css" rel="stylesheet" />
      <style id='rs-plugin-settings-inline-css' type='text/css'>
      #rs-demo-id {}
    </style>
    <style id='consulting-layout-inline-css' type='text/css'>
    .page_title{ background-repeat: repeat !important; }.mtc, .mtc_h:hover{
     color: #002e5b!important
     }.stc, .stc_h:hover{
       color: #6c98e1!important
       }.ttc, .ttc_h:hover{
         color: #fde428!important
         }.mbc, .mbc_h:hover, .stm-search .stm_widget_search button{
           background-color: #002e5b!important
           }.sbc, .sbc_h:hover{
             background-color: #6c98e1!important
             }.tbc, .tbc_h:hover{
               background-color: #fde428!important
               }.mbdc, .mbdc_h:hover{
                 border-color: #002e5b!important
                 }.sbdc, .sbdc_h:hover{
                   border-color: #6c98e1!important
                   }.tbdc, .tbdc_h:hover{
                     border-color: #fde428!important
                   }
                   h2{
                    text-align:center;
                    padding: 20px;
                  }
                  /* Slider */
                  .slick-slide {
                    margin: 0px 20px;
                    width: 125px !important;
                    height: 55px !important;
                  }
                  .slick-slide img {
                    height: 100%;
                    width: auto;
                  }
                  .slick-slider
                  {
                    position: relative;
                    display: block;
                    box-sizing: border-box;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                    -webkit-touch-callout: none;
                    -khtml-user-select: none;
                    -ms-touch-action: pan-y;
                    touch-action: pan-y;
                    -webkit-tap-highlight-color: transparent;
                  }
                  .slick-list
                  {
                    position: relative;
                    display: block;
                    overflow: hidden;
                    margin: 0;
                    padding: 0;
                  }
                  .slick-list:focus
                  {
                    outline: none;
                  }
                  .slick-list.dragging
                  {
                    cursor: pointer;
                    cursor: hand;
                  }
                  .slick-slider .slick-track,
                  .slick-slider .slick-list
                  {
                    -webkit-transform: translate3d(0, 0, 0);
                    -moz-transform: translate3d(0, 0, 0);
                    -ms-transform: translate3d(0, 0, 0);
                    -o-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                  }
                  .slick-track
                  {
                    position: relative;
                    top: 0;
                    left: 0;
                    display: block;
                  }
                  .slick-track:before,
                  .slick-track:after
                  {
                    display: table;
                    content: '';
                  }
                  .slick-track:after
                  {
                    clear: both;
                  }
                  .slick-loading .slick-track
                  {
                    visibility: hidden;
                  }

                  .slick-slide
                  {
                    display: none;
                    float: left;
                    height: 100%;
                    min-height: 1px;
                  }
                  [dir='rtl'] .slick-slide
                  {
                    float: right;
                  }
                  .slick-slide img
                  {
                    display: block;
                  }
                  .slick-slide.slick-loading img
                  {
                    display: none;
                  }
                  .slick-slide.dragging img
                  {
                    pointer-events: none;
                  }
                  .slick-initialized .slick-slide
                  {
                    height: 100px;
                    display: block;
                  }
                  .slick-loading .slick-slide
                  {
                    visibility: hidden;
                  }
                  .slick-vertical .slick-slide
                  {
                    display: block;
                    height: auto;
                    border: 1px solid transparent;
                  }
                  .slick-arrow.slick-hidden {
                    display: none;
                  }
                </style>
              <link rel='stylesheet' id='consulting-default-font-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%26subset%3Dlatin%2Cgreek%2Cgreek-ext%2Cvietnamese%2Ccyrillic-ext%2Clatin-ext%2Ccyrillic%7CPoppins%3A400%2C500%2C300%2C600%2C700%26subset%3Dlatin%2Clatin-ext%2Cdevanagari&#038;ver=4.0.9' type='text/css' media='all' />
              <link rel='stylesheet' id='stm-google-fonts-css'  href='//fonts.googleapis.com/css?family=Montserrat%7CMontserrat%3Aregular%2C700%2C500%2C600&#038;subset=latin&#038;ver=4.0.9' type='text/css' media='all' />
              <script type='text/javascript'>
               /* <![CDATA[ */
               var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/consulting.stylemixthemes.com\/shop\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
               /* ]]> */
             </script>
             <link rel='https://api.w.org/' href='wp-json/' />
             <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd" />
             <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
             <meta name="generator" content="WordPress 4.8.7" />
             <meta name="generator" content="WooCommerce 3.3.4" />
             <link rel="canonical" href="our-work-with-filter/" />
             <link rel='shortlink' href='?p=614' />
             <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed?url=http%3A%2F%2Fconsulting.stylemixthemes.com%2Four-work-with-filter%2F" />
             <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed?url=http%3A%2F%2Fconsulting.stylemixthemes.com%2Four-work-with-filter%2F&#038;format=xml" />
             <script data-cfasync="false">
               window.a2a_config=window.a2a_config||{};a2a_config.callbacks=[];a2a_config.overlays=[];a2a_config.templates={};
               (function(d,s,a,b){a=d.createElement(s);b=d.getElementsByTagName(s)[0];a.async=1;a.src="https://static.addtoany.com/menu/page.js";b.parentNode.insertBefore(a,b);})(document,"script");
             </script>
             <script type="text/javascript">
               var ajaxurl = '{{url("public/home/home")}}/wp-admin/admin-ajax.php';
             </script>
             <noscript>
               <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
             </noscript>
        
        <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
        <meta name="generator" content="Powered by Slider Revolution 5.4.8 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
        <link rel="icon" href="{{url('uploads/logo/Logo-hl.png')}}" sizes="32x32" />
        <link rel="apple-touch-icon-precomposed" href="{{url('public/home/home')}}/wp-content/uploads/2016/02/cropped-cropped-favicon-2-1-300x300.png" />
        <meta name="msapplication-TileImage" content="wp-content/uploads/2016/02/cropped-cropped-favicon-2-1-300x300.png" />
        <script type="text/javascript">function setREVStartSize(e){                                 
         try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
           if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})                  
         }catch(d){console.log("Failure at Presize of Slider:"+d)}                       
       };
     </script>
     <style type="text/css" title="dynamic-css" class="options-output">h1, .h1,
     h2, .h2,
     h3, .h3,
     h4, .h4,
     h5, .h5,
     h6, .h6,
     .top_nav .top_nav_wrapper > ul,
     .top_nav .icon_text strong,
     .stm_testimonials .item .testimonial-info .testimonial-text .name,
     .stats_counter .counter_title,
     .stm_contact .stm_contact_info .stm_contact_job,
     .vacancy_table_wr .vacancy_table thead th,
     .testimonials_carousel .testimonial .info .position,
     .testimonials_carousel .testimonial .info .company,
     .stm_gmap_wrapper .gmap_addresses .addresses .item .title,
     .company_history > ul > li .year,
     .stm_contacts_widget,
     .stm_works_wr.grid .stm_works .item .item_wr .title,
     .stm_works_wr.grid_with_filter .stm_works .item .info .title,
     body .vc_general.vc_btn3,
     .consulting-rev-title,
     .consulting-rev-title-2,
     .consulting-rev-title-3,
     .consulting-rev-text,
     body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
     strong, b,
     .button,
     .woocommerce a.button,
     .woocommerce button.button,
     .woocommerce input.button,
     .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
     .woocommerce input.button.alt,
     .request_callback p,
     ul.comment-list .comment .comment-author,
     .page-numbers .page-numbers,
     #footer .footer_widgets .widget.widget_recent_entries ul li a,
     .default_widgets .widget.widget_nav_menu ul li,
     .default_widgets .widget.widget_categories ul li,
     .default_widgets .widget.widget_product_categories ul li,
     .stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
     .stm_sidebar .widget.widget_product_categories ul li,
     .shop_widgets .widget.widget_nav_menu ul li,
     .shop_widgets .widget.widget_categories ul li,
     .shop_widgets .widget.widget_product_categories ul li,
     .default_widgets .widget.widget_recent_entries ul li a,
     .stm_sidebar .widget.widget_recent_entries ul li a,
     .shop_widgets .widget.widget_recent_entries ul li a,
     .staff_bottom_wr .staff_bottom .infos .info,
     .woocommerce .widget_price_filter .price_slider_amount .button,
     .woocommerce ul.product_list_widget li .product-title,
     .woocommerce ul.products li.product .price,
     .woocommerce a.added_to_cart,
     .woocommerce div.product .woocommerce-tabs ul.tabs li a,
     .woocommerce div.product form.cart .variations label,
     .woocommerce table.shop_table th,
     .woocommerce-cart table.cart th.product-name a,
     .woocommerce-cart table.cart td.product-name a,
     .woocommerce-cart table.cart th .amount,
     .woocommerce-cart table.cart td .amount,
     .stm_services .item .item_wr .content .read_more,
     .staff_list ul li .staff_info .staff_department,
     .stm_partner.style_2 .stm_partner_content .position,
     .staff_carousel_item .staff_department,
     body.header_style_5 .header_top .info-text strong,
     .stm_services_tabs .services_categories ul li a,
     .stm_services_tabs .service_tab_item .service_name,
     .stm_services_tabs .service_tab_item .service_cost,
     .stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
     .stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
     .stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
     .stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
     body.header_style_7 .side_nav .main_menu_nav > li > a,
     body.header_style_7 .side_nav .main_menu_nav > li ul li a,
     body.header_style_5 .header_top .info-text b{font-family:Montserrat;}
   </style>
   <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1453207105026{margin-bottom: 100px !important;}.vc_custom_1451889219674{margin-bottom: -60px !important;}.vc_custom_1495693142270{margin-bottom: 0px !important;}</style>
   <noscript>
     <style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style>
   </noscript>
   <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
     new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
   j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
   'gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
 })(window,document,'script','dataLayer','GTM-WXK4VRR');
</script>
<script type="text/javascript" src="{{url('public/home/home')}}/wp-content/cache/autoptimize/1/js/autoptimize_f094c667fc4e187057102ea897a84833.js"></script>
<link rel="stylesheet" href="{{url('public/css')}}/mystyle.css">
</head>
<body class="page-template-default page page-id-614 site_layout_1  header_style_2 sticky_menu wpb-js-composer js-comp-ver-5.4.7 vc_responsive">
  <noscript><iframe src="ns.html?id=GTM-WXK4VRR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <script type="text/javascript">
   (function($){
     $(document).ready(function(){
       var preview = $('.pearl-envato-preview');
       if (preview.length) {
         if (window.top == window.self) {
           $('.pearl-envato-preview').slideDown();
           $('.pearl-envato-preview-holder').slideDown();
           $('body').addClass('envato-preview-visible');
         }
       }
       $('.preview__action--close').on('click', function () {
         $('.pearl-envato-preview').slideUp();
         $('.pearl-envato-preview-holder').slideUp();
         $('body').removeClass('envato-preview-visible');
         return false;
       });
       var api_url = 'https://stylemixthemes.scdn2.secure.raxcdn.com/api/prices.json';
       $.ajax({
         url: api_url,
         dataType: 'json',
         context: this,
         complete: function (data) {
           var r = data.responseJSON;
           $('#stm_price_api').text(r.themes.consulting.price);
         }
       });
     })
   })(jQuery);
 </script>
 <div id="wrapper">
   <div id="fullpage" class="content_wrapper">
    <header id="header">
     <div class="top_bar">
      <div class="container">
       <div id="lang_sel">
        <ul>
         <li>
          <a href="#" class="pull-left lang_sel_sel icl-en" style="font-family:'Open Sans', sans-serif"><img style="padding:0 8px 3px 0px" class="pull-left" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Vietnam.svg/2000px-Flag_of_Vietnam.svg.png" width="30px" height="20px" alt="">  Tiếng việt</a>
          <ul>
           <li class="icl-fr"><a href="#fr">vietnamese</a></li>
           <li class="icl-de"><a href="#de">English</a></li>
         </ul>
       </li>
     </ul>
   </div>
   <div class="top_bar_info_wr">
    <div class="top_bar_info_switcher">
     <div class="active">
       <div class="dropdown">
          <button class="dropbtn"><span>Hà Nội<i class="fa fa-caret-down" style="padding-left: 10px"></i></span></button>
          <div class="dropdown-content">
              @foreach($offices as $office)
                <a href="#{{$office->id}}">{{$office->title}}</a>
              @endforeach
          </div>
        </div>
    </div>
  </div>
  <ul class="top_bar_info" id="top_bar_info_1" style="display: block;">
   <li>
    <i class="stm-marker"></i>
    <span>{{$actoffice->title}}</span>
  </li>
  <li>
    <i class="fa fa-clock-o"></i>
    <span>Email - {{$actoffice->email}}</span>
  </li>
  <li>
    <i class="fa fa-phone"></i>
    <span>{{$actoffice->phone}}</span>
  </li>
</ul>
@foreach($offices as $office)
<ul class="top_bar_info" id="{{$office->id}}">
 <li>
  <i class="stm-marker"></i>
  <span>{{$office->address}}</span>
</li>
<li>
  <i class="fa fa-clock-o"></i>
  <span>Email - {{$office->email}}</span>
</li>
<li>
  <i class="fa fa-phone"></i>
  <span>{{$office->phone}}</span>
</li>
</ul>
@endforeach
</div>
</div>
</div>
<div class="header_top clearfix">
  <div class="row">
    <div class="col-md-2">
      <div class="logo-home text-center">
        <a href="{{route('home')}}"><img class="" src="{{url('uploads/logo/Logo-hl.png')}}" alt=""></a>
      </div>
    </div>
    <div class="col-md-10">
      <div class="col-md-12">
        <div class="menu-top">
          <ul>
            <li>
              <a href="{{route('home')}}">Trang chủ</a>
            </li>
            <li>
              <a href="{{route('home_product')}}">Sản phẩm</a> 
            </li>                    
            <li>
              <a href="{{route('tuyen-dung')}}">Tuyển dụng</a> 
            </li>
            <li>
              <a href="{{route('home_agency_posts')}}">Dành cho đại lý</a> 
            </li> 
            <li>
              <a href="{{route('downloads')}}">Download</a> 
            </li>  
            <li>
              <a href="{{route('projects')}}">Dự án</a> 
            </li>                   
            <li>
              <a href="{{route('contact')}}">Liên hệ</a> 
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-12">
   
        <div class="col-md-9">
          <form class="navbar-search ng-pristine ng-valid" method="get">
            <label class="sr-only screen-reader-text" for="search">Search for:</label>
            <div class="input-group">
              <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Search for products">
              <div class="input-group-addon search-categories">
                <select name="product_cat" id="product_cat" class="postform resizeselect" style="width: 154.609px;">
                  <option value="0" selected="selected">All Categories</option>
                </select>
              </div>
              <div class="input-group-btn">
                <input type="hidden" id="search-param" name="post_type" value="product" autocomplete="off">
                <button type="submit" class="btn btn-s">
                  <span class="search-btn fa fa-search"></span>
                </button>
              </div>
            </div>
          </form>
        </div>

        
        <div class="col-md-3">
          <div class="hotline"><i class="fa fa-phone"></i>     Hotline: <span>     19006536</span></div>
          <div class="email"><i class="fa fa-envelope"></i>     Email: <span>     info@hoplongtech.com.vn</span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="top_nav media-body media-middle">
  </div>
</div>
<div class="mobile_header">
  <div class="logo_wrapper clearfix">
    <div class="logo">
      <a href=""><img src="{{url('uploads/logo/w-logo.png')}}" style="width:110px; height: px;" alt="Consulting WP – New York"></a>
    </div>
    <div id="menu_toggle" class="">
      <button></button>
    </div>
  </div>
  <div class="header_info">
    <div class="top_nav_mobile" style="display: none;">
      <ul id="menu-main-menu-1" class="main_menu_nav"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-13"><a href="{{route('home')}}">Trang chủ</a></li>

        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-560"><a href="{{route('product')}}">Sản phẩm</a><span class="arrow"><i></i></span>
            <!-- <ul class="sub-menu">
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-813 stm_col_width_default stm_mega_cols_inside_default"><a href="services-grid/">Services Grid</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1295 stm_col_width_default stm_mega_cols_inside_default"><a href="services-with-tabs/">Services with Tabs</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-stm_service menu-item-586 stm_col_width_default stm_mega_cols_inside_default"><a href="services/turnaround-consulting/">Service Layout 1</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-stm_service menu-item-587 stm_col_width_default stm_mega_cols_inside_default"><a href="services/bonds-commodities/">Service Layout  2</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-stm_service menu-item-588 stm_col_width_default stm_mega_cols_inside_default"><a href="services/audit-assurance/">Service Layout 3</a></li>
          </ul> -->
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1528"><a href="{{route('tuyen-dung')}}">Tuyển dụng </a><span class="arrow"><i></i></span>
          <ul class="sub-menu">
           <!--  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-603 stm_col_width_default stm_mega_cols_inside_default"><a href="our-work-grid/">cases grid</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-617 stm_col_width_default stm_mega_cols_inside_default"><a href="our-work-with-filter/">cases with filter</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-stm_works menu-item-633 stm_col_width_default stm_mega_cols_inside_default"><a href="works/applying-commercial-excellence-in-chemicals/">single case layout 1</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-stm_works menu-item-634 stm_col_width_default stm_mega_cols_inside_default"><a href="works/constructing-a-best-in-class-global/">single case layout 2</a></li> -->
          </ul>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-524"><a href="{{route('downloads')}}">Downloads</a><span class="arrow"><i></i></span>
         <!--  <ul class="sub-menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-525 stm_col_width_default stm_mega_cols_inside_default"><a href="blog/">list view</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-526 stm_col_width_default stm_mega_cols_inside_default"><a href="blog/?layout=grid&amp;sidebar_id=none">grid view</a></li>
          </ul> -->
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1368"><a href="{{route('contact')}}">Liên hệ</a><span class="arrow"><i></i></span>
          <!-- <ul class="sub-menu">
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2012 stm_col_width_default stm_mega_cols_inside_default"><a href="portfolio-grid/">Portfolio Grid</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-stm_portfolio menu-item-1369 stm_col_width_default stm_mega_cols_inside_default"><a href="portfolio/beff-baffer-construction/">Portfolio Single One</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-stm_portfolio menu-item-1370 stm_col_width_default stm_mega_cols_inside_default"><a href="portfolio/focus-on-core-delivers-growth-for-retailer/">Portfolio Single Two</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-stm_portfolio menu-item-1371 stm_col_width_default stm_mega_cols_inside_default"><a href="portfolio/construction-of-railways/">Portfolio Single Three</a></li>
          </ul> -->
        </li>

      </ul>                            </div>
      <div class="icon_texts" style="padding: 5px 40px;">
        <div class="icon_text clearfix">
          <div class="icon"><i class="fa stm-phone"></i></div>
          <div class="text">
            <span>Hotline</span><strong> {{$actoffice->phone}}</strong>                                         
          </div>
        </div>
        <div class="icon_text clearfix">
          <div class="icon"><i class="fa fa fa-clock-o"></i></div>
          <div class="text">
            <span>Email     </span><strong>{{$actoffice->email}}</strong>                                        
          </div>
        </div>
       <!--  <div class="icon_text clearfix">
          <div class="icon"><i class="fa stm-marker"></i></div>
          <div class="text">
            <strong>{{$actoffice->address}}<br></strong><br>                                         
          </div>
        </div> -->
      </div>
    </div>
  </div>
</header>
<div id="main" >
 @if(request()->is('/'))
 <div id="carousel-id" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
   <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
   @foreach($slider_homes as $dot)
   <li data-target="#carousel-id" data-slide-to="1" class=""></li>
   @endforeach
 </ol>
 <div class="carousel-inner">
   <div class="item active">
    <img src="{{url('uploads/slider')}}/{{$active->cover_image}}">
    <div class="container">
     <div class="carousel-caption">
      <h2>{{$active->caption1}}</h2>
      <p>{{$active->caption2}}</p>
      <br>
      <p>Vỏ kim loại Series PRF</p>
      <p><a class="btn btn-lg btn-default" href="#" role="button">Xem thêm</a></p>
    </div>
  </div>
</div>
@foreach($slider_homes as $slider)
<div class="item">
  <img src="{{url('uploads/slider')}}/{{$slider->cover_image}}">
  <div class="container">
   <div class="carousel-caption">
    <h2>Cảm biến có vỏ kim loại - Phù hợp với nhiều ứng dụng</h2>
    <p>Cảm biến tiệm cận loại cảm ứng từ</p>
    <br>
    <p>Vỏ kim loại Series PRF</p>
    <p><a class="btn btn-lg btn-default" href="#" role="button">Xem thêm</a></p>
  </div>
</div>
</div>
@endforeach
</div>
<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
@endif
@yield('content')
<footer id="footer" class="footer style_1">

<div class="widgets_row">
 <div class="container">
  <div class="footer_widgets">
   <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
       <div class="footer_logo text-center">
        <a href="{{route('home')}}">
          <img src="{{url('uploads/logo/w-logo.png')}}" width="100px" alt="Consulting WP - New York" />
        </a>
      </div>
      <div class="footer_text text-center">
        <p><span style="font-weight: bold; font-size: 16px; color: #fff;">HOPLONGTECH - AUTOMATION</span>
        </p>
      </div>
    
    </div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
 <section id="nav_menu-2" class="widget widget_nav_menu">
  <h4 class="widget_title no_stripe">Sản phẩm</h4>
  <div class="menu-extra-links-container">
   <ul id="menu-extra-links" class="menu">
    <li id="menu-item-163" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-163"><a href="#">Biến tần</a></li>
    <li id="menu-item-164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164"><a href="#">Cảm biến</a></li>
    <li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a href="#">Bộ điều khiển</a></li>
    <li id="menu-item-927" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-927"><a href="#">Thiết bị chuyển động</a></li>
    <li id="menu-item-928" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-928"><a href="#">Thiết bị kết nối</a></li>
    <li id="menu-item-929" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-929"><a href="#">Đèn báo</a></li>
    <li id="menu-item-930" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-930"><a href="#">Công tắc điều khiển</a></li>
    <li id="menu-item-931" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-931"><a href="#">Máy cắt</a></li>
    <li id="menu-item-933" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-933"><a href="#">Phần mềm</a></li>
    <li id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a href="#">Biến áp</a></li>
  </ul>
</div>
</section>
</div>   
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
 <section id="nav_menu-2" class="widget widget_nav_menu">
  <h4 class="widget_title no_stripe">Dịch vụ</h4>
  <div class="menu-extra-links-container">
   <ul id="menu-extra-links" class="menu">
      <li id="menu-item-163" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-163"><a href="#">Chăm sóc khách hàng</a></li>
      <li id="menu-item-164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164"><a href="#">Hỗ trợ kỹ thuật</a></li>
    </br>
      <li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a href="#">Bảo hành sản phẩm</a></li> 
    </ul>
</div>
  <div class="footer_n">
        <img src="{{url('uploads/logo/logo-da-thong-bao-voi-bo-cong-thuong.png')}}" alt="">
      </div>
</section>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
 <section id="mc4wp_form_widget-2" class="widget widget_mc4wp_form_widget">
</section>
</div>
</div>
</div>
</div>
</div>
<div class="copyright_row">
 <div class="container">
  <div class="copyright_row_wr">
     <div class="copyright"> Copyright &copy; <a href="">Hoplongtech 2018</a>.  All rights reserved.</div>
   <div class="socials">

    <ul>
     <li>
      <a href="#" target="_blank" class="social-facebook" rel="nofollow">
        <i class="fa fa-facebook"></i>
      </a>
    </li>
    <li>
      <a href="#" target="_blank" class="social-twitter" rel="nofollow">
        <i class="fa fa-twitter"></i>
      </a>
    </li>
    <li>
      <a href="#" target="_blank" class="social-google-plus" rel="nofollow">
        <i class="fa fa-google-plus"></i>
      </a>
    </li>
    <li>
      <a href="#" target="_blank" class="social-linkedin" rel="nofollow">
        <i class="fa fa-linkedin"></i>
      </a>
    </li>
  </ul>
</div>
</div>
</div>
</div>
</footer>
</div>
<script type="text/javascript">
 jQuery(document).ready(function () {
   var $ = jQuery;
         var api_url = 'https://stylemixthemes.scdn2.secure.raxcdn.com/api/prices.json';
         $.ajax({
           url: api_url,
           dataType: 'json',
           context: this,
           complete: function (data) {
             var r = data.responseJSON;
             $('.stm_price_api').text(r.themes.consulting.price);
           }
         });
         $('#consulting-demos').on('click', function(){
           $('.stm_theme_demos__popup').addClass('opened');
           $('body').addClass('fancy-lock');

           $('.demos-list a').each(function() {
             var thisDataSrc = $(this).find('img').attr('data-src');
             var thisSrc = $(this).find('img');

             $(thisSrc).attr('src',thisDataSrc);
           });
         });
         $('#consulting-settings').on('click', function(){
           $('.stm_theme_demos__settings').addClass('opened');
         }); $('.customizer_button').on('click', function(){
           $('.stm_theme_demos__settings').removeClass('opened');
         });

         $('.stm_theme_demos__close').on('click', function(){
           $('.stm_theme_demos__popup').removeClass('opened');
           $('body').removeClass('fancy-lock');
         })
       });
 </script><script>(function() {function addEventListener(element,event,handler) {
   if(element.addEventListener) {
     element.addEventListener(event,handler, false);
   } else if(element.attachEvent){
     element.attachEvent('on'+event,handler);
   }
 }function maybePrefixUrlField() {
   if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
     this.value = "http://" + this.value;
   }
 }
 var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
 if( urlFields && urlFields.length > 0 ) {
   for( var j=0; j < urlFields.length; j++ ) {
     addEventListener(urlFields[j],'blur',maybePrefixUrlField);
   }
 }
 var testInput = document.createElement('input');
 testInput.setAttribute('type', 'date');
 if( testInput.type !== 'date') {
   var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
   for(var i=0; i<dateFields.length; i++) {
     if(!dateFields[i].placeholder) {
       dateFields[i].placeholder = 'YYYY-MM-DD';
     }
     if(!dateFields[i].pattern) {
       dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
     }
   }
 }
})();
</script>
<link rel='stylesheet' id='vc_google_fonts_abril_fatfaceregular-css'  href='//fonts.googleapis.com/css?family=Abril+Fatface%3Aregular&#038;ver=4.8.7' type='text/css' media='all' />
<script type='text/javascript'>
 jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript'>
 var booked_js_vars = {"ajax_url":"http:\/\/consulting.stylemixthemes.com\/wp-admin\/admin-ajax.php","profilePage":"","publicAppointments":"","i18n_confirm_appt_delete":"Are you sure you want to cancel this appointment?","i18n_please_wait":"Please wait ...","i18n_wrong_username_pass":"Wrong username\/password combination.","i18n_fill_out_required_fields":"Please fill out all required fields.","i18n_guest_appt_required_fields":"Please enter your name to book an appointment.","i18n_appt_required_fields":"Please enter your name, your email address and choose a password to book an appointment.","i18n_appt_required_fields_guest":"Please fill in all \"Information\" fields.","i18n_password_reset":"Please check your email for instructions on resetting your password.","i18n_password_reset_error":"That username or email is not recognized."};
</script>
<script type='text/javascript'>
 var wpcf7 = {"apiSettings":{"root":"http:\/\/consulting.stylemixthemes.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
</script>
<script type='text/javascript'>
 var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
</script>
<script type='text/javascript'>
 var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_b4cec779d62ae4868215a22610fbba17","fragment_name":"wc_fragments_b4cec779d62ae4868215a22610fbba17"};
</script>
<script type='text/javascript' src='{{url("public/home/home")}}/wp-content/themes/consulting/assets/js/particles.min.js?ver=4.0.9'></script>
<script type='text/javascript'>
 var mc4wp_forms_config = [];
</script>
      </body>
      <script>
       $(document).ready(function(){
        $('.customer-logos').slick({
          slidesToShow: 12,
          slidesToScroll: 1,
          autoplay: true,
          speed:2000,
          autoplaySpeed: 1500,
          arrows: false,
          dots: false,
          infinite: true,
          swipeToSlide: true,
          centerMode: true,
          focusOnSelect: true,
          pauseOnHover: true,
          responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 4
            }
          }, {
            breakpoint: 520,
            settings: {
              slidesToShow: 3
            }
          }]
        });
      });
    </script>
    </html>