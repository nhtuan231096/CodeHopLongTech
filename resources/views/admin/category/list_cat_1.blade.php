@extends('layouts.admin')
@section('title','Danh sách danh muc')
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
  <form action="" method="GET" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="" name="search" class="form-control" id="" placeholder="Tìm theo số chỉ mục..">
      </div>
      <button type="submit" class="btn btn-primary fa fa-search"></button>
    </form> 
  <!--  <form action="" method="GET" class="form-inline" role="form">

          <div class="form-group">
            <input type="" class="form-control" name="search" id="" placeholder="Tên danh mục cần tìm..">
          </div>
         
          <div class="form-group">
            <select name="created_by" id="inputCreared_by" class="form-control">
              <option value="">Người tạo</option>
              @foreach($users as $user)
              <option value="{{$user->username}}">{{$user->username}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <select name="status" id="inputStatus" class="form-control">
              <option value="">Trạng thái</option>
              <option value="enable">Enable</option>
              <option value="disable">Disable</option>
            </select>
          </div>
          @csrf

          <button type="submit" class="btn btn-info">Tìm kiếm</button>
        </form> -->
      </br>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Stt</th>
          <th>Tên danh mục</th> 
          <th>Ảnh </th>
          <th>Loại</th>
          <th>Sorder</th>
          <th>Ngày tạo</th>
          <th>Tùy chỉnh</th>
        </tr>
      </thead>
      <tbody>
       @foreach($cat_copy as $key=>$cat)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$cat->title}}</td>
           <td><img width="150px" height="80px" src="{{url('uploads/category')}}/{{$cat->cover_image}}" alt=""></td>
       
            <td>
              <form action="{{route('order-list-cat',['id'=>$cat->id])}}" method="POST" class="form-inline" role="form">
              
                <div class="form-group">
                  <input style="width: 50px" name="sorder" type="" class="form-control" value="{{$cat->sorder}}" id="" placeholder="">
                </div>
              
                @csrf()
              
                <button type="submit" class="btn btn-primary fa fa-save"></button>
              </form>
            </td>

            <td>
              <form action="{{route('sorder-list-cat',['id'=>$cat->id])}}" method="POST" class="form-inline" role="form">
              
                <div class="form-group">
                  <input style="width: 50px" name="sorder_2" type="" class="form-control" value="{{$cat->sorder_2}}" id="" placeholder="">
                </div>
              
                @csrf()
              
                <button type="submit" class="btn btn-info fa fa-save"></button>
              </form>
            </td>
          <td>{{$cat->created_at}}</td>
          <td>
              <a class="btn btn-md btn-success fa fa-edit" href="{{route('edit-list-cat-1',['id'=>$cat->id])}}"></a> 
                <a class="btn btn-md btn-danger fa fa-trash" onclick="return confirm('Bạn chắc chắn chứ?')" href="{{route('del-list-cat',['id'=>$cat->id])}}"></a>
          </td>
        </tr>
       @endforeach
      </tbody>
    </table>

   {{$cat_copy->appends(request()->only('search'))->links()}}

  </div>
</div>

@stop()
