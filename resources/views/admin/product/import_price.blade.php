@extends('layouts.admin')
@section('title','Import giá sản phẩm từ file .csv')
@section('links','Sản phẩm')    
@section('main')
<div class="panel panel-default">
    <div class="panel-heading">Import Giá sản phẩm</div>

    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if(Session::has('success'))
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{Session::get('success')}}</strong> 
                </div>
            @elseif(Session::has('error'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{Session::get('error')}}</strong> 
                </div>
            @endif
            <div class="form-group">
                <label for="csv_file" class="col-md-4 control-label">Import theo</label>

                <div class="col-md-6">
                    <select name="type" id="input" class="form-control" required="required">
                        <option value="title">Title</option>
                        <option value="id">Id</option>
                    </select>
                </div>
            </div>
            <div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">
                <label for="csv_file" class="col-md-4 control-label">CSV file to import</label>

                <div class="col-md-6">
                    <input id="csv_file" type="file" class="form-control" name="file">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="header" checked> File contains header row?
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Tải lên file .CSV
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop()
