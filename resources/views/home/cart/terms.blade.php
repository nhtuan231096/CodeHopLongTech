@extends('layouts.product1')
@section('content')
<div class="container">
  <nav class="woocommerce-breadcrumb"><a href="{{route('home_product')}}">Trang chủ</a><span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>Điều khoản</nav>
</div>
<div class="jumbotron">
  <div class="container">
    <h2 style="margin-top: 15px">{{isset($terms->name) ? $terms->name : ''}}</h2>
    <p>{!!isset($terms->content) ? $terms->content : ''!!}</p>
  </div>
</div>
@stop()
