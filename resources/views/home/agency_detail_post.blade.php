@extends('layouts.agency')
@section('main_agency')
<style type="text/css">
  .links-top ul li{
    display: inline-block;
  }
</style>
<!-- <div class="links-top">
  <ul>
    <li>
      <a href="">Trang chủ</a> <span>/</span>
    </li>
    <li>
      <a href="">a</a>
    </li>
  </ul>
</div> -->
<div class="post-wrapper">
  <img src="{{url('uploads/posts')}}/{{$post_detail->cover_image}}" style="width: 100%;margin-top: 30px" alt="{{$post_detail->cover_image}}">
  <h2>{{$post_detail->title}}</h2>
  <span>{{$post_detail->created_at}}</span> by <span>{{$post_detail->created_by}}</span>
  <p><i>{{strip_tags($post_detail->description)}}</i></p>
  <p>
    {!!$post_detail->content!!}
  </p>
</div>
@stop()