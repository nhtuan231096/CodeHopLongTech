@extends('layouts.admin')
@section('title','Cấu hình')
@section('links','cấu hình')    
@section('main')
@if(Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>{{Session::get('success')}}</strong>
    </div>
@endif
<form action="" method="POST" role="form">
    <legend>Phương thức vận chuyển</legend>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Free ship</label> 
                <select name="free_ship" id="input" class="form-control">
                    @if($dataConfig['free_ship'] == 1)
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                    @else 
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                    @endif
                </select>
            </div>
        </div>    
    </div>
    @csrf
    <div class="clearfix"></div>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@stop()
