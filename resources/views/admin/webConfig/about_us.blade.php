@extends('layouts.admin')
@section('main')
@section('title','Quản lý trang giới thiệu')
@section('links','Quản lý trang giới thiệu')
@if(Session::has('success'))
<div class="alert alert-info">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{Session::get('success')}}</strong>
</div>
@endif
<!DOCTYPE html>
<html lang="en-US" class="stm-site-preloader" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Công ty cổ phần công nghệ Hợp Long - Hoplongtech Automation</title>
	<meta name="title" content="Công ty cổ phần công nghệ Hợp Long - Hoplongtech Automation">
	<meta name="description" content="Hoplongtech.com - Nhà phân phối chính thức Schneider, Omron, Autonics, Hanyoung, Siemens, Patlite, Idec, LS, Mitsubishi, Delta, Proface tại Việt Nam. Ngoài ra Hoplong còn cung cấp các giải pháp tích hợp hệ thống robot đáp ứng mọi ứng dụng của khách hàng.">
	<meta name="keyword" content="Schneider, Omron, Autonics, Idec Việt Nam, biến tầm Schneider">
	<meta name='robots' content='index,follow' />
	<!-- <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap.min.css" media="all" /> -->
	<link type="text/css" media="all" href="{{url('public')}}/css/autoptimize.css" rel="stylesheet" />
	<link type="text/css" media="all" href="{{url('public/home/home')}}/css/slick.css" rel="stylesheet" id='consulting-layout-inline-css'/>
	<link rel='stylesheet' id='consulting-default-font-css' href="{{url('public/home/home')}}/css/fonts.css" type='text/css' media='all' />
	<link rel='stylesheet' id='stm-google-fonts-css' href="{{url('public/home/home')}}/css/fonts.css" type='text/css' media='all' />
	<link rel="canonical" href="http://localhost/hoplongtech" />
	<link rel="icon" href="{{url('uploads/logo/Logo-hl.png')}}" sizes="32x32" />
	<link rel="stylesheet" href="{{url('public')}}/css/newstyle.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-43044974-10"></script>
	<!-- //--- -->
	<script src="https://code.jquery.com/jquery.js"></script>
	<!-- //--- -->
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-43044974-10');
	</script>
	<style type="text/css">
		.conf_about_us_edit input{
			padding: 8px;
		}
		.tox-tinymce {
			height: 474px!important;
		}
	</style>
	<script type="text/javascript">
		var ajaxurl = '{{url("public/home/home")}}/wp-admin/admin-ajax.php';
	</script>
	<link rel="stylesheet" href="{{url('public/css')}}/mystyle.css"> </head>
	<body class="page-template-default page page-id-614 site_layout_1 header_style_2 sticky_menu wpb-js-composer js-comp-ver-5.4.7 vc_responsive">
		<div id="wrapper">
			<div id="fullpage" class="content_wrapper">
				<!-- form -->
				<form action="{{route('save_config_home_page')}}" method="POST" enctype="multipart/form-data"> 
					<div id="main">
						<div id="carousel-id" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-id" data-slide-to="0" class="active"></li>@foreach($slider_homes as $dot)
								<li data-target="#carousel-id" data-slide-to="1" class=""></li>@endforeach </ol>
								<div class="carousel-inner">
									<div class="item active"> <img src="{{url('uploads/slider')}}/{{$active->cover_image}}" alt="{{$active->title}}">
										<div class="container">
											<div class="carousel-caption">
												<h2>{{$active->caption1}}</h2>
												<p>{{$active->caption2}}</p>
												<br>
												<p>{{$active->caption3}}</p>
												<p><a class="btn btn-lg btn-default" href="#" role="button">Xem thêm</a></p>
											</div>
										</div>
									</div>@foreach($slider_homes as $slider)
									<div class="item"> <img src="{{url('uploads/slider')}}/{{$slider->cover_image}}" alt="{{$slider->title}}">
										<div class="container">
											<div class="carousel-caption">
												<h2>{{$active->caption1}}</h2>
												<p>{{$active->caption2}}</p>
												<br>
												<p>{{$active->caption3}}</p>
												<p><a class="btn btn-lg btn-default" href="#" role="button">Xem thêm</a></p>
											</div>
										</div>
									</div>@endforeach</div><a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a></div>
									
									<div class="container">
										<div id="about" class="vc_row wpb_row vc_row-fluid vc_custom_1494583722976">
											<div class="wpb_column vc_column_container vc_col-sm-12">
												<div class="vc_column-inner ">
													<div class="wpb_wrapper">
														<div class="vc_custom_heading vc_custom_1492673710092 text_align_center title_no_stripe">
															<h2 id="h_about">
																<center>
																	<p class="size_mobile conf_about_us">{{isset($conf->title_page) ? $conf->title_page : ''}}<i style="margin-left: 15px" class="fa fa-edit edit-title"></i>
																	</p>
																	<p class="hidden size_mobile conf_about_us_edit">
																		<input type="text" name="title_page" placeholder="Nhập tiêu đề trang.." value="{{isset($conf->title_page) ? $conf->title_page : ''}}">
																		<input style="padding: 18px;margin-bottom: 9px;height: 68px;font-size: 23px" type="submit" class="btn btn-info" value="Lưu">
																	</p>
																</center>
															</h2> 
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="vc_row wpb_row vc_row-fluid vc_custom_1493900844016">
											<div class="wpb_column vc_column_container vc_col-sm-6">
												<div class="vc_column-inner vc_custom_1493900832539">
													<div class="wpb_wrapper">
														<div class="wpb_video_widget wpb_content_element">
															<div class="wpb_wrapper">
																<div class="wpb_video_wrapper"> 
																	<img width="1060" height="640" src="{{url('uploads/about')}}/{{isset($conf->image_page_des) ? $conf->image_page_des : ''}}" class="attachment-full" alt="hoplongtech">
																	<div class="hidden conf_about_us_edit">
																		<input type="file" name="image_page_des_upload">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="wpb_column vc_column_container vc_col-sm-6">
												<div class="vc_column-inner vc_custom_1493900837357">
													<div class="wpb_wrapper">
														<div class="wpb_text_column wpb_content_element vc_custom_1492669774993">
															<div class="wpb_wrapper about">
																<p>
																	<span class="conf_about_us">{{isset($conf->title_page_des) ? $conf->title_page_des : ''}}</span>
																	<span class="conf_about_us_edit hidden">
																		<input style="width: 100%" type="text" name="title_page_des" placeholder="Nhập tiêu đề mô tả.." value="{{isset($conf->title_page_des) ? $conf->title_page_des : ''}}">
																	</span>
																</p>
															</div>
														</div>
														<div class="wpb_text_column wpb_content_element ">
															<div class="wpb_wrapper">
																<p class="content_home">
																	<span class="conf_about_us" style="display: block; font-size: 16px; line-height: 26px;">{{isset($conf->page_des) ? strip_tags($conf->page_des) : ''}}
																	</span>
																	<span class="conf_about_us_edit hidden" style="display: block; font-size: 16px; line-height: 26px;">
																		<style type="text/css">
																			.tox .tox-toolbar,.tox .tox-statusbar__wordcount,.tox-statusbar__branding,.tox .tox-menubar{
																				display: none;
																			}

																		</style>
																		<textarea name="page_des" id="desc" cols="30" rows="10" placeholder="Nhập nội dung..">
																			{{isset($conf->page_des) ? $conf->page_des : ''}}
																		</textarea>
																	</span>
																</p>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="panel-heading">
											<h3 class="panel-title">
												<a class="conf_about_us">{{isset($conf->title_time_line) ? $conf->title_time_line : ''}}</a>
												<a class="conf_about_us_edit hidden">
													<input style="width: 100%" name="title_time_line" type="text" placeholder="Nhập tiêu đề time line" value="{{isset($conf->title_time_line) ? $conf->title_time_line : ''}}">
												</a>
											</h3>
										</div>
										<div class="his_hidden"> 
											<div class="vc_row wpb_row vc_row-fluid vc_custom_1494583924882" style="margin:0 auto 30px auto;">

												<div class="wpb_column vc_column_container vc_col-sm-3" style="padding-top: 20px;">
													<div class="vc_column-inner vc_custom_1493899401245">
														<div class="wpb_wrapper">
															<div class="wpb_single_image wpb_content_element vc_align_left certificate about-img">
																<figure class="wpb_wrapper vc_figure">
																	<a data-rel="prettyPhoto[rel-1071-634409447]" href="https://hoplongtech.com/lich-su-phat-trien-cong-ty" target="_self" class="vc_single_image-wrapper" style="border: 1px solid #3498db;">
																		<img src="{{url('uploads/about')}}/{{isset($conf->img_time_line_1) ? $conf->img_time_line_1 : ''}}" class="vc_single_image-img attachment-full" alt="{{isset($conf->img_time_line_1) ? $conf->img_time_line_1 : 'no image'}}"></a>
																	</figure>
																	<input type="file" name="upload_img_time_line_1" class="hidden conf_about_us_edit">	
																</br>

															</br>
															<figure class="wpb_wrapper vc_figure">
																<a data-rel="prettyPhoto[rel-1071-634409447]" href="https://hoplongtech.com/lich-su-phat-trien-cong-ty" target="_self" class="vc_single_image-wrapper" style="border: 1px solid #3498db;">
																	<img src="{{url('uploads/about')}}/{{isset($conf->img_time_line_5) ? $conf->img_time_line_5 : ''}}" class="vc_single_image-img attachment-full" alt="{{isset($conf->img_time_line_5) ? $conf->img_time_line_5 : 'no image'}}">
																</a>
																<input type="file" name="upload_img_time_line_5" class="hidden conf_about_us_edit">	
															</figure>
														</div>
													</div>
												</div>
											</div>
											<div class="wpb_column vc_column_container vc_col-sm-3"  style="padding-top: 20px;">
												<div class="vc_column-inner vc_custom_1493899401245">
													<div class="wpb_wrapper">
														<div class="wpb_single_image wpb_content_element vc_align_left certificate about-img">
															<figure class="wpb_wrapper vc_figure">
																<a data-rel="prettyPhoto[rel-1071-634409447]" href="https://hoplongtech.com/lich-su-phat-trien-cong-ty" target="_self" class="vc_single_image-wrapper" style="border: 1px solid #3498db;">
																	<img src="{{url('uploads/about')}}/{{isset($conf->img_time_line_2) ? $conf->img_time_line_2 : ''}}" class="vc_single_image-img attachment-full" alt="{{isset($conf->img_time_line_2) ? $conf->img_time_line_2 : 'no image'}}">
																</a>
																<input type="file" name="upload_img_time_line_2" class="hidden conf_about_us_edit">	
															</figure>
														</br>

													</br>
													<figure class="wpb_wrapper vc_figure">
														<a data-rel="prettyPhoto[rel-1071-634409447]" href="https://hoplongtech.com/lich-su-phat-trien-cong-ty" target="_self" class="vc_single_image-wrapper" style="border: 1px solid #3498db;">
															<img src="{{url('uploads/about')}}/{{isset($conf->img_time_line_6) ? $conf->img_time_line_6 : ''}}" class="vc_single_image-img attachment-full" alt="{{isset($conf->img_time_line_6) ? $conf->img_time_line_6 : 'no image'}}">
														</a>
														<input type="file" name="upload_img_time_line_6" class="hidden conf_about_us_edit">	
													</figure>
												</div>
											</div>
										</div>
									</div>
									@csrf
									<div class="wpb_column vc_column_container vc_col-sm-3"  style="padding-top: 20px;">
										<div class="vc_column-inner vc_custom_1493899401245">
											<div class="wpb_wrapper">
												<div class="wpb_single_image wpb_content_element vc_align_left certificate about-img">
													<figure class="wpb_wrapper vc_figure">
														<a data-rel="prettyPhoto[rel-1071-634409447]" href="https://hoplongtech.com/lich-su-phat-trien-cong-ty" target="_self" class="vc_single_image-wrapper" style="border: 1px solid #3498db;">
															<img src="{{url('uploads/about')}}/{{isset($conf->img_time_line_3) ? $conf->img_time_line_3 : ''}}" class="vc_single_image-img attachment-full" alt="{{isset($conf->img_time_line_3) ? $conf->img_time_line_3 : 'no image'}}">
														</a>
														<input name="upload_img_time_line_3" type="file" class="hidden conf_about_us_edit">	
													</figure>
												</br>

											</br>
											<figure class="wpb_wrapper vc_figure">
												<a data-rel="prettyPhoto[rel-1071-634409447]" href="https://hoplongtech.com/lich-su-phat-trien-cong-ty" target="_self" class="vc_single_image-wrapper" style="border: 1px solid #3498db;">
													<img src="{{url('uploads/about')}}/{{isset($conf->img_time_line_7) ? $conf->img_time_line_7 : ''}}" class="vc_single_image-img attachment-full" alt="{{isset($conf->img_time_line_7) ? $conf->img_time_line_7 : 'no image'}}">
												</a>
												<input name="upload_img_time_line_7" type="file" class="hidden conf_about_us_edit">	
											</figure>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-3"  style="padding-top: 20px;">
								<div class="vc_column-inner vc_custom_1493899401245">
									<div class="wpb_wrapper">
										<div class="wpb_single_image wpb_content_element vc_align_left certificate about-img">
											<figure class="wpb_wrapper vc_figure">
												<a data-rel="prettyPhoto[rel-1071-634409447]" href="https://hoplongtech.com/lich-su-phat-trien-cong-ty" target="_self" class="vc_single_image-wrapper" style="border: 1px solid #3498db;">
													<img src="{{url('uploads/about')}}/{{isset($conf->img_time_line_4) ? $conf->img_time_line_4 : ''}}" class="vc_single_image-img attachment-full" alt="{{isset($conf->img_time_line_4) ? $conf->img_time_line_4 : 'no image'}}">
												</a>
												<input name="upload_img_time_line_4" type="file" class="hidden conf_about_us_edit">	
											</figure>
										</br>

									</br>
									<figure class="wpb_wrapper vc_figure"> 
										<a data-rel="prettyPhoto[rel-1071-634409447]" href="https://hoplongtech.com/lich-su-phat-trien-cong-ty" target="_self" class="vc_single_image-wrapper" style="border: 1px solid #3498db; ">
											<img src="{{url('uploads/about')}}/{{isset($conf->img_time_line_8) ? $conf->img_time_line_8 : ''}}" class="vc_single_image-img attachment-full" alt="{{isset($conf->img_time_line_8) ? $conf->img_time_line_8 : 'no image'}}">
										</a>
										<input name="upload_img_time_line_8" type="file" class="hidden conf_about_us_edit">
									</figure> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(".edit-title").click(function(){
				$(".conf_about_us").addClass("hidden");
				$(".conf_about_us_edit").removeClass("hidden");
			});
		</script>
		
	</div>
	<div class="dmap "> 
		<img src="{{url('uploads/about')}}/{{isset($conf->img_banner) ? $conf->img_banner : ''}}" class="img-responsive " style="opacity: 1 " alt="{{isset($conf->img_banner) ? $conf->img_banner : 'no image'}}">
		<input type="file" name="upload_img_banner" class="hidden conf_about_us_edit">
	</div>
	<input type="hidden" name="updated_by" value="{{Auth::Guard('admin')->user()->username}}">
	
	<div class="container "> 
		<h2 class="panel-title text-center ">
			<span>
				<p class="size_mobile conf_about_us">{{isset($conf->block_title_1) ? $conf->block_title_1 : ''}}</p>
				<p class="size_mobile conf_about_us_edit hidden"><input type="text" name="block_title_1" value="{{isset($conf->block_title_1) ? $conf->block_title_1 : ''}}" placeholder="Nhập thông tin.."></p>
			</span>
		</h2> 
		@foreach($news_service as $new_ser) 
		<div class="wpb_column vc_column_container vc_col-sm-4 ">
			<div class="vc_column-inner "> 
				<div class="wpb_wrapper ">
					<div class="stm_animation stm_viewport " style="opacity:1;-webkit-transition-delay: 0s; -moz-transition-delay: 0s; transition-delay: 0s; " data-animate="fadeInUp " data-animation-delay="0 " data-animation-duration="1 " data-viewport_position="90 "> 
						<div class="info_box style_3 animated fadeInUp " style="opacity:1;-webkit-animation-delay:0s;-webkit-animation-duration:1s; -moz-animation-delay:0s;-moz-animation-duration:1s; animation-delay:0s; "> 
							<div class="info_box_wrapper "> 
								<div class="info_box_image "> 
									<img height="300px " src="{{url( 'uploads/service2/')}}/{{$new_ser->cover_image}}" class="attachment-consulting-image-350x250-croped size-consulting-image-350x250-croped" alt="{{$new_ser->title}}"> 
								</div>
								<div class="info_box_text">
									<div class="title">
										<div class="icon"> <i class="stm-chart-monitor"></i> </div>
										<h6 class="no_stripe"><span>{{$new_ser->title}}</span></h6> 
									</div>
									<p>{!! \Illuminate\Support\Str::words($new_ser->content, 13,'...') !!}</p><a class="read_more" target="_self" href="{!!$new_ser->links!!}"><span>Xem ngay</span><i class=" fa fa-chevron-right stm_icon"></i></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>@endforeach 
		</div>
		<div class="competed">
			<div class="container">
				<div id="cases" class="vc_row wpb_row vc_row-fluid vc_custom_1494583815331">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner ">
							<div class="wpb_wrapper">
								<div class="vc_custom_heading vc_custom_1492755345270 text_align_center title_no_stripe">
									<h2><center>
										<p class="size_mobile conf_about_us">{{isset($conf->block_title_2) ? $conf->block_title_2 : ''}}</p>
										<p class="size_mobile conf_about_us_edit hidden"><input type="text" name="block_title_2" value="{{isset($conf->block_title_2) ? $conf->block_title_2 : ''}}" placeholder="Nhập dữ liệu.."></p>
									</center></h2> </div>
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
											@foreach($img_companys as $img_company)
											<a href="{{route('detail_project',['slug'=>$img_company->slug])}}">  
												<li >
													<div class="post_inner">
														<div class="image" >
															<div class="hovereffect"> <img id="myImg" src="{{url('uploads/news')}}/{{$img_company->image_cover}}" alt="{{$img_company->title}}" style="width: 245px !important;height: 175px !important;">
																<div id="myModal" class="modal"> <span class="close">&times;</span> <img class="modal-content" id="img01">
																	<div id="caption"></div>
																</div>
															</div>

															<div style="font-size: 15px;color:#002e5b;"><center>{{$img_company->title}}</center></div>
														</div>
													</div>
												</li>
											</a>

										@endforeach </ul>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="wraper_event" style="background: #f7f5f5;">
				<div class="container">
					<div class="wpb_column vc_col-sm-12">
						<div class="vc_column-inner ">
							<div class="wpb_wrapper">
								<div class="vc_custom_heading vc_custom_1492771464343 text_align_center title_no_stripe">
									<h2><center>
										<p class="size_mobile conf_about_us">{{isset($conf->block_title_3) ? $conf->block_title_3 : ''}}</p>
										<p class="size_mobile conf_about_us_edit hidden">
											<input type="text" name="block_title_3" value="{{isset($conf->block_title_3) ? $conf->block_title_3 : ''}}" placeholder="Nhập dữ liệu..">
										</p>
									</center></h2> </div>
									<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1494246872112">
										<div class="wpb_column vc_column_container vc_col-sm-2">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper"></div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-8">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element vc_custom_1492771481256">
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
									<div class="stm_events_grid cols_3"> @foreach($company_news as $company_new)
										<div class="item">
											<div class="item_wr">
												<div class="item_thumbnail"> <a href="{{route('detail_project',['slug'=>$company_new->slug])}}"> <img class="" src="{{url('uploads/news')}}/{{$company_new->image_cover}}" width="700" height="300" alt="{{$company_new->title}}" title="{{$company_new->title}}"> </a></div>
												<div class="content">
													<h6><a href="{{route('detail_project',['slug'=>$company_new->slug])}}">{{$company_new->title}}</a></h6>
													<ul class="stm-event__meta"> </ul>
												</div>
											</div>
										</div>@endforeach </div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="vc_row-full-width vc_clearfix"></div>
			</div>
		</form>
		<!-- end form -->
		<footer id="footer" class="footer style_1">

			<div class="widgets_row">
				<div class="container">
					<div class="footer_widgets">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="footer_logo text-center">
									<a href="{{route('home')}}"> <img src="{{url('uploads/logo/w-logo.png')}}" width="200px" alt="Hoplongtech-logo" /> </a>
								</div>
								<div class="footer_text text-center">
									<p><span style="font-weight: bold; font-size: 16px;">INDUSTRIAL AUTOMATION</span> </p>
									<p><span style="font-weight: bold; font-size: 16px;">HOTLINE: 1900.6536</span> </p>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<section id="nav_menu-2" class="widget widget_nav_menu">
									<h4 class="widget_title no_stripe">Sản phẩm</h4>
									<div class="menu-extra-links-container">
										<ul id="menu-extra-links" class="menu">
											<li id="menu-item-163" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-163"><a href="https://hoplongtech.com/product-category/schneider">Schneider</a></li>
											<li id="menu-item-164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164"><a href="https://hoplongtech.com/product-category/omron">Omron</a></li>
											<li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a href="https://hoplongtech.com/product-category/autonics">Autonics</a></li>
											<li id="menu-item-927" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-927"><a href="https://hoplongtech.com/product-category/idec">Idec</a></li>
											<li id="menu-item-928" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-928"><a href="https://hoplongtech.com/product-category/ls">LS</a></li>
											<li id="menu-item-929" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-929"><a href="https://hoplongtech.com/product-category/mitsubishi">Mitsubishi</a></li>
											<li id="menu-item-930" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-930"><a href="https://hoplongtech.com/product-category/patlite">Patlite</a></li>
											<li id="menu-item-931" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-931"><a href="https://hoplongtech.com/product-category/proface">Proface</a></li>
											<li id="menu-item-933" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-933"><a href="https://hoplongtech.com/product-category/fuji">Fuji</a></li>
											<li id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a href="https://hoplongtech.com/product-category/siemens">Siemens</a></li>
										</ul>
									</div>
								</section>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<section id="recent-posts-4" class="widget widget_recent_entries">      
									<h4 class="widget_title no_stripe">Bài viết mới nhất</h4>     
									<ul>
										@foreach($company_news as $company_new)
										<li>
											<a href="{{route('detail_project',['slug'=>$company_new->slug])}}">{{$company_new->title}}</a>
										</li>
										@endforeach
									</ul>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<section id="nav_menu-2" class="widget widget_nav_menu">
										<h4 class="widget_title no_stripe">Dịch vụ</h4>
										<div class="menu-extra-links-container">
											<ul id="menu-extra-links" class="menu">
												<li id="menu-item-163" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-163"><a href="#">Chính sách bảo hành</a></li>
												<li id="menu-item-164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-164"><a href="#">Chính sách vận chuyển</a></li>
											</br>
											<li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a href="#">Bảo hành sản phẩm</a></li>
										</ul>
									</div>
									<div class="footer_n"> 
										<img src="{{url('uploads/logo/logo-da-thong-bao-voi-bo-cong-thuong.png')}}" alt="logo-da-thong-bao-voi-bo-cong-thuong"> 
									</div>
								</section>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<section id="mc4wp_form_widget-2" class="widget widget_mc4wp_form_widget">
									<script>
										window.fbMessengerPlugins = window.fbMessengerPlugins || {
											init: function() {
												FB.init({
													appId: '1678638095724206',
													autoLogAppEvents: true,
													xfbml: true,
													version: 'v3.0'
												});
											},
											callable: []
										};
										window.fbAsyncInit = window.fbAsyncInit || function() {
											window.fbMessengerPlugins.callable.forEach(function(item) {
												item();
											});
											window.fbMessengerPlugins.init();
										};
										setTimeout(function() {
											(function(d, s, id) {
												var js, fjs = d.getElementsByTagName(s)[0];
												if (d.getElementById(id)) {
													return;
												}
												js = d.createElement(s);
												js.id = id;
												js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
												fjs.parentNode.insertBefore(js, fjs);
											}(document, 'script', 'facebook-jssdk'));
										}, 0);
									</script>
									<div class="fb-customerchat" page_id="673301269359074" ref=""></div>
								</section>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="copyright_row">
				<div class="container">
					<div class="copyright_row_wr">
						<div class="copyright"> Copyright &copy; <a href="{{route('home')}}">Hoplongtech 2019</a>.  All rights reserved.</div>
						<div class="socials">

							<ul>
								<li>
									<a href="http://facebook.com/hoplongtech" rel="nofollow" target="_blank" class="social-facebook" >
										<i class="fa fa-facebook"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</footer>

	</body>

	<script data-cfasync="false" type="text/javascript" src="{{url('public/home/home')}}/js/startsize.js"></script>
	<script type="text/javascript" src="{{url('public')}}/js/autoptimize.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

	<script type="text/javascript">
		window.onload = function() {
			$('.slider').slick({
				autoplay: true,
				autoplaySpeed: 1500,
				arrows: true,
				prevArrow: '',
				nextArrow: '',
				centerMode: true,
				slidesToShow: 5,
				slidesToScroll: 1
			});
		};
	</script>
	</html>
	@stop()
