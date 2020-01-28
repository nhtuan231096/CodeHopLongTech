@extends('layouts.admin')
@section('title','Cập nhật sản phẩm từ file .csv')
@section('links','Sản phẩm')    
@section('main')
<!-- Latest compiled and minified CSS & JS -->
<div class="panel panel-default">
    <div class="panel-heading">
        <select name="import-type" id="import-type">
            <option value="0">Import giá sản phẩm</option>
            <option value="1">Import ảnh thực tế</option>
        </select>
    </div>
    <!-- check form import -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#form-import-image").hide(0);
            var check_type = $('#import-type');
            $("#import-type").val("0");
            check_type.change(function() {
                if(check_type.val() == 0) {
                    $("#form-import-price").show(0);
                    $("#form-import-image").hide(0);
                }
                if(check_type.val() == 1) {
                    $("#form-import-image").show(0);
                    $("#form-import-price").hide(0);
                }
            });
        });
    </script>
    <!-- end check form import -->
    
    <div class="panel-body">
        <!-- form import price -->
        <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data" id="form-import-price">
            <legend style="text-align: center;">Cập nhật giá sản phẩm</legend>
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
                    <button type="submit" name="import_price" value="1" class="btn btn-primary">
                        Tải lên file .CSV
                    </button>
                </div>
            </div>
        </form>
        <!-- form import price -->

        <!-- form import image  -->
        <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data" id="form-import-image" style="display: none;">
            <legend style="text-align: center;">Cập nhật ảnh thực tế</legend>
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
                    <button type="submit" name="import_image" value="1" class="btn btn-primary">
                        Tải lên file .CSV
                    </button>
                </div>
            </div>
        </form>
        <!-- form import image  -->
    </div>
</div>

@stop()
