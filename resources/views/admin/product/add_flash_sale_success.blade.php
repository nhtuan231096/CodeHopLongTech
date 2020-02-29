@extends('layouts.admin')
@section('title','Flash Sale Management')
@section('links','Sản phẩm')    
@section('main')
@if($success)
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{$success}}</strong>
</div>
@endif  
<div class="jumbotron text-center">
	<div class="container">
		<h3><a href="{{route('product_lrv')}}" style="font-style: italic;text-decoration: underline;">Thêm sản phẩm vào chương trình flash sale</a></h3>
	</div>
</div>
@stop()
