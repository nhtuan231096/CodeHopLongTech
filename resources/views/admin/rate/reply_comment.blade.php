@extends('layouts.admin')
@section('title','Quản lý đánh giá sản phẩm')
@section('links','review')
@section('main')
<style type="text/css">
	/** ====================
 * Lista de Comentarios
 =======================*/
.comments-container {
	margin: 60px auto 15px;
	width: 768px;
}

.comments-container h1 {
	font-size: 36px;
	color: #283035;
	font-weight: 400;
}

.comments-container h1 a {
	font-size: 18px;
	font-weight: 700;
}

.comments-list {
	margin-top: 30px;
	position: relative;
}

/**
 * Lineas / Detalles
 -----------------------*/
.comments-list:before {
	content: '';
	width: 2px;
	height: 100%;
	background: #c7cacb;
	position: absolute;
	left: 32px;
	top: 0;
}

.comments-list:after {
	content: '';
	position: absolute;
	background: #c7cacb;
	bottom: 0;
	left: 27px;
	width: 7px;
	height: 7px;
	border: 3px solid #dee1e3;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
}

.reply-list:before, .reply-list:after {display: none;}
.reply-list li:before {
	content: '';
	width: 60px;
	height: 2px;
	background: #c7cacb;
	position: absolute;
	top: 25px;
	left: -55px;
}


.comments-list li {
	margin-bottom: 15px;
	display: block;
	position: relative;
}

.comments-list li:after {
	content: '';
	display: block;
	clear: both;
	height: 0;
	width: 0;
}

.reply-list {
	padding-left: 88px;
	clear: both;
	margin-top: 15px;
}
/**
 * Avatar
 ---------------------------*/
.comments-list .comment-avatar {
	width: 65px;
	height: 65px;
	position: relative;
	z-index: 99;
	float: left;
	border: 3px solid #FFF;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	overflow: hidden;
}

.comments-list .comment-avatar img {
	width: 100%;
	height: 100%;
}

.reply-list .comment-avatar {
	width: 50px;
	height: 50px;
}

.comment-main-level:after {
	content: '';
	width: 0;
	height: 0;
	display: block;
	clear: both;
}
/**
 * Caja del Comentario
 ---------------------------*/
.comments-list .comment-box {
	width: 680px;
	float: right;
	position: relative;
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
	-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
	box-shadow: 0 1px 1px rgba(0,0,0,0.15);
}

.comments-list .comment-box:before, .comments-list .comment-box:after {
	content: '';
	height: 0;
	width: 0;
	position: absolute;
	display: block;
	border-width: 10px 12px 10px 0;
	border-style: solid;
	border-color: transparent #FCFCFC;
	top: 8px;
	left: -11px;
}

.comments-list .comment-box:before {
	border-width: 11px 13px 11px 0;
	border-color: transparent rgba(0,0,0,0.05);
	left: -12px;
}

.reply-list .comment-box {
	width: 610px;
}
.comment-box .comment-head {
	background: #FCFCFC;
	padding: 10px 12px;
	border-bottom: 1px solid #E5E5E5;
	overflow: hidden;
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
}

.comment-box .comment-head i {
	float: right;
	margin-left: 14px;
	position: relative;
	top: 2px;
	color: #A6A6A6;
	cursor: pointer;
	-webkit-transition: color 0.3s ease;
	-o-transition: color 0.3s ease;
	transition: color 0.3s ease;
}

.comment-box .comment-head i:hover {
	color: #03658c;
}

.comment-box .comment-name {
	color: #283035;
	font-size: 14px;
	font-weight: 700;
	float: left;
	margin-right: 10px;
}

.comment-box .comment-name a {
	color: #283035;
}

.comment-box .comment-head span {
	float: left;
	color: #999;
	font-size: 13px;
	position: relative;
	top: 1px;
}

.comment-box .comment-content {
	background: #FFF;
	padding: 12px;
	font-size: 15px;
	color: #595959;
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}

.comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #03658c;}
.comment-box .comment-name.by-author:after {
	content: 'autor';
	background: #03658c;
	color: #FFF;
	font-size: 12px;
	padding: 3px 5px;
	font-weight: 700;
	margin-left: 10px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

/** =====================
 * Responsive
 ========================*/
@media only screen and (max-width: 766px) {
	.comments-container {
		width: 480px;
	}

	.comments-list .comment-box {
		width: 390px;
	}

	.reply-list .comment-box {
		width: 320px;
	}
}
.tox-menubar{
	display: none!important;
}
.tox-toolbar{
	display: none!important;
}
</style>
<div class="">
	<div class="panel panel-info">
		<div class="panel-heading" style="position: relative;">
			<h3 class="panel-title">Trả lời bình luận sản phẩm: {{$commentProduct->product->title}}</h3>
			<a href="{{route('comment_product')}}" class="btn btn-md btn-info pull-right" style="position: absolute;right: 5px;top:2px">Trở lại</a>
		</div>
		<div class="panel-body">
			@if(Session::has('success'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>{{Session::get('success')}}</strong>
				</div>
			@endif
			<!-- Contenedor Principal -->
	<div class="comments-container">
		<h2> Sản phẩm: <a href="{{route('view',['slug'=>$commentProduct->product->slug])}}">{{$commentProduct->product->title}}</a></h2>

		<ul id="comments-list" class="comments-list" style="min-width: 800px">
			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="https://icon-library.net/images/windows-8-user-icon/windows-8-user-icon-10.jpg" alt=""></div>
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name by-author"><a href="http://creaticode.com/blog">{{$commentProduct->name}}</a></h6>
							<span>{{date_format($commentProduct->created_at,'d/m/Y H:i:s')}}</span>
							
						</div>
						<div class="comment-content">
							{{$commentProduct->comment}}
						</div>
					</div>
				</div>
				<!-- Respuestas de los comentarios -->
				<ul class="comments-list reply-list">
					@foreach($replyComment as $itemReply)
					<li>
						<div class="comment-avatar"><img src="https://icon-library.net/images/windows-8-user-icon/windows-8-user-icon-10.jpg" alt=""></div>
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name"><a href="http://creaticode.com/blog">Quản trị viên</a></h6>
								<span>{{date_format($itemReply->created_at,'d/m/Y : H:i:s')}}</span>
								
							</div>
							<div class="comment-content">
								{{$itemReply->comment}}
							</div>
						</div>
					</li>
					@endforeach
					<li>
						
						<div class="comment-box">
							<div class="comment-head">
								
								
							</div>
							<div class="comment-content">
								<form action="{{route('adminReplyComment')}}" method="POST" role="form">
									<legend>Trả lời</legend>
								
									<div class="form-group">
										<textarea name="comment" id="" cols="30" rows="10" placeholder="Nhập câu trả lời..">
											
										</textarea>
										<!-- <input type="text" name="comment" class="form-control" id="" placeholder="Nhập câu trả lời.." required> -->
									</div>
									<input type="hidden" name="status" value="1">
									<input type="hidden" name="id_comment_reply" value="{{$commentProduct->id}}">
									@csrf
								
									
								
									<button type="submit" class="btn btn-primary">Gửi</button>
								</form>
							</div>
						</div>
					</li>
				</ul>
			</li>

			
		</ul>
	</div>
		</div>
	</div>
</div>
@stop()