@extends('layouts.admin')
@section('title','Flash Sale Management')
@section('links','Sản phẩm')    
@section('main')
<a href="{{route('addFlashSale')}}" class="btn btn-md btn-info">Tạo Flash Sale</a>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Danh sách sự kiện flash sale đã được tạo</h3>
    </div>
    <div class="panel-body">
        Panel content
    </div>
</div>
@stop()
