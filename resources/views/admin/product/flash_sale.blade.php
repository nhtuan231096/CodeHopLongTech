@extends('layouts.admin')
@section('title','Flash Sale Management')
@section('links','Sản phẩm')    
@section('main')
<a href="{{route('addFlashSale')}}" class="btn btn-md btn-info">Tạo Flash Sale</a>
@if(Session::has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{Session::get('success')}}</strong>
</div>
@endif  
<div class="panel panel-primary" style="margin-top: 15px">
    <div class="panel-heading">
        <h3 class="panel-title">Danh sách sự kiện flash sale đã được tạo</h3>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Ảnh</th>
                    <th>Ngày tạo</th>
                    <th>Thời gian kết thúc</th>
                    <th>
                        
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->title}}</td>
                    <td>
                        <img src="{{url('uploads/flash_sale')}}/{{$data->cover_image}}" width="100px" alt="">
                    </td>
                    <td>{{$data->created_at}}</td>
                    <td>{{$data->end_time}}</td>
                    <td>
                        <a href="{{route('editFlashSale',['id'=>$data->id])}}" class="btn btn-xs btn-info fa fa-search"></a>
                        <a href="{{route('delFlashSale',['id'=>$data->id])}}" class="btn btn-xs btn-danger fa fa-trash"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$datas->links()}}
    </div>
</div>
@stop()
