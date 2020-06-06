@extends('layouts.agency')
@section('main_agency')
<h1 class="my-4">
  <small>Bài viết mới</small>
</h1>

<!-- Blog Post -->
@foreach($post_by_category as $item)
<div class="card mb-4" style="margin-bottom: 15px">
  <img class="card-img-top" style="max-width: 100%;" src="{{url('uploads/posts')}}/{{$item->cover_image}}" alt="Card image cap">
  <div class="card-body">
    <h2 class="card-title" style="font-weight: 400;margin-bottom: 0px">{{$item->title}}</h2>
    <p class="card-text">{{strip_tags($item->description)}}</p>
    <a href="{{route('detailPost',['slug'=>$item->slug,'id'=>$item->id])}}" class="btn btn-primary">Xem thêm &rarr;</a>
  </div>
  <div class="card-footer text-muted" style="margin-top: 10px">
    {{date('d-m-Y', strtotime($item->created_at))}} by
    <a href="#">{{$item->created_by}}</a>
  </div>
</div>
@endforeach


<!-- Pagination -->
<ul class="pagination justify-content-center mb-4">
  {{$post_by_category->links()}}
  <!-- <li class="page-item">
    <a class="page-link" href="#">&larr; Older</a>
  </li>
  <li class="page-item disabled">
    <a class="page-link" href="#">Newer &rarr;</a>
  </li> -->
</ul>
@stop()