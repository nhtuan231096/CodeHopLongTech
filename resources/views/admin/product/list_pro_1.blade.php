@extends('layouts.admin')
@section('title','Danh sách sản phẩm 1')
@section('links','Danh mục')    
@section('main')

<div class="panel panel-info">

  <div class="panel-body">
    @if(Session::has('success'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{Session::get('success')}}</strong>
  </div>
  @endif  
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Stt</th>
          <th>Tên sản phẩm</th> 
          <th>Ảnh </th>
          <th>Sorder</th>
          <th>Ngày tạo</th>
          <th>Tùy chỉnh</th>
        </tr>
      </thead>
      <tbody>
       @foreach($pro_copy as $key=>$pro)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$pro->title}}</td>
           <td><img width="150px" height="80px" src="{{url('uploads/product')}}/{{$pro->cover_image}}" alt=""></td>
       
            <td>
              <form action="{{route('order-list-pro',['id'=>$pro->id])}}" method="POST" class="form-inline" role="form">
              
                <div class="form-group">
                  <input style="width: 50px" name="sorder" type="" class="form-control" value="{{$pro->sorder}}" id="" placeholder="">
                </div>
              
                @csrf()
              
                <button type="submit" class="btn btn-primary fa fa-save"></button>
              </form>
            </td>

          <td>{{$pro->created_at}}</td>
          <td>
              <a class="btn btn-md btn-danger fa fa-trash" onclick="return confirm('Bạn chắc chắn chứ?')" href="{{route('del-list-pro-1',['id'=>$pro->id])}}"></a>
          </td>
        </tr>
       @endforeach
      </tbody>
    </table>
    {{$pro_copy->links()}}
  </div>
</div>

@stop()
