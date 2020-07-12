@extends('layouts.admin')
@section('title','Selection Tool: quản lý tiêu chí lọc phẩm')
@section('links','selection tool')
@section('main')
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
    <script>
        var app = angular.module('admin', ['admin']);
    </script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="col-md-5">
	<form action="{{route('SelectionToolAddFilter')}}" method="POST" class="" role="form" enctype="multipart/form-data">
		@if(isset($edit->id))
		<legend class="text-center">
			<span>
				Cập nhật
			</span>
            <div class="clearfix"></div>
        </legend>
		@else
		<legend>Thêm mới tiêu chí lọc</legend>
		@endif
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label class="" for="">Tiêu đề</label>
					<input type="" name="title" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->title}}" @endif placeholder="Nhập tiêu đề" required>
					@if($errors->has('title'))
					<div class="help-block error">
						{{$errors->first('title')}}
					</div>
					@endif
				</div>
			</div>
		</div>

		<div class="form-group">
			<label class="" for="">Chọn danh mục</label>
			<select name="category_id" class="form-control" required>
				@foreach($category as $item)
				<?php
					$selected = '';
					if (isset($edit->item)) {
					$selected = $item->id == $edit->category_id ? "selected" : '';
					}
				?>
                    <option value="{{$item->id}}">{{$item->title}}</option>
				@endforeach
			</select>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="">Sorder</label>
					<input type="number" name="sorder" class="form-control" @if(isset($edit->id)) value="{{$edit->sorder}}" @else value="0" @endif placeholder="Sorder" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="">Status</label>
                    <select name="status" class="form-control">
                        <option value="1">Enable</option>
                        <option value="0">Disable</option>
                    </select>
				</div>
			</div>
		</div>
		@csrf
		@if(isset($edit->id))
		<input type="hidden" name="id" value="{{$edit->id}}">
		@endif
		<button type="submit" class="btn btn-primary pull-right">Save</button>
        <a href="{{route('selectionToolFilter')}}" class="btn btn-md btn-info pull-left">Trở lại</a>
    </form>
</div>
<div class="col-md-7">
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title pull-left panel-title-cus">{{isset($edit->id) ? 'Danh sách giá trị lọc của thuộc tính "'.$edit->title.'"' : 'Danh sách tiêu chí lọc sản phẩm'}}</h3>
        <a class="btn btn-md btn-info pull-right" data-toggle="modal" href='#modal-import'>Import</a>
        <div class="clearfix"></div>
	</div>
	<div class="panel-body">
		@if(Session::has('success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('success')}}</strong>
		</div>
		@endif
		@if(Session::has('error'))
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('error')}}</strong>
		</div>
		@endif
		<div class="row">
			<div class="col-md-6">
                @if(isset($edit->id))
                    <form action="{{route('searchFilterDetail')}}" method="GET" class="form-inline" role="form" style="margin-bottom:15px">
                            <a data-toggle="modal" href='#modal-add-attr' class="btn btnb-xs btn-primary fa fa-plus" title="Thêm giá trị cho thuộc tính"></a>
                        <div class="form-group">
                            <label class="sr-only" for="">label</label>
                            <input class="form-control" name="value" placeholder="Nhập giá trị thuộc tính" value="{{request()->value}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                        <input type="hidden" name="id" value="{{$edit->id}}">
                        @csrf
                    </form>
                @else
                    <form action="" method="GET" class="form-inline" role="form" style="margin-bottom:15px">
                        <a data-toggle="modal" href='#modal-add-attr' class="btn btnb-xs btn-primary fa fa-plus" title="Thêm giá trị cho thuộc tính"></a>
                        <div class="form-group">
                            <label class="sr-only" for="">label</label>
                            <input class="form-control" name="title" placeholder="Nhập tên danh mục" value="{{request()->title}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                @endif
            </div>
		</div>
        @if(!isset($edit->id))
        <table class="table table-hover">
			<thead>
				<tr>
                    <td>
                        <button class="btn btn-danger btn-xs delete-all" data-url="">Delete All</button>
                    </td>
					<th>ID</th>
					<th>Tiêu đề</th>
					<th>Danh mục</th>
					<th>Status</th>
					<th>Sorder</th>
					<th>Created at</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
            @foreach($filter as $itemFilter)
				<tr>
                    <td>
                        <input type="checkbox" name="check" class="checkbox" value="{{$itemFilter->id}}" data-id="{{$itemFilter->id}}">
                    </td>
					<td>{{$itemFilter->id}}</td>
					<td>{{$itemFilter->title}}</td>
					<td>{{$itemFilter->category()->title}}</td>
					<td>{{$itemFilter->status == 1 ? 'enable' : 'disable'}}</td>
					<td>{{$itemFilter->sorder}}</td>
					<td>
						<a href="{{route('selectionToolFilterEdit',['id'=>$itemFilter->id])}}" class="btn btn-xs btn-primary fa fa-edit"></a>
						<a href="{{route('selectionToolFilterDel',['id'=>$itemFilter->id])}}" onclick="return confirm('Bạn có muốn xóa mục này không?')" class="btn btn-xs btn-danger fa fa-trash"></a>
					</td>
				</tr>
            @endforeach
			</tbody>
		</table>
        @else
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Giá trị</th>
                <th>Status</th>
                <th>Sorder</th>
                <th>Created at</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($filter as $itemFilter)
                <tr>
                    <td>{{$itemFilter->id}}</td>
                    <td>{{$itemFilter->value}}</td>
                    <td>{{$itemFilter->status == 1 ? 'enable' : 'disable'}}</td>
                    <td>{{$itemFilter->sorder}}</td>
                    <td>{{$itemFilter->created_at}}</td>
                    <td>
                        <a data-toggle="modal" href='#modal-edit-filter{{$itemFilter->id}}' class="btn btn-xs btn-primary fa fa-edit"></a>
                        <a href="{{route('selectionToolFilterDetailDel',['id'=>$itemFilter->id])}}" onclick="return confirm('Bạn có muốn xóa mục này không?')" class="btn btn-xs btn-danger fa fa-trash"></a>
                    </td>
                </tr>
{{--                modal--}}
                <div class="modal fade" id="modal-edit-filter{{$itemFilter->id}}">
                    <div class="modal-dialog">
                        <form action="{{route('selectionToolFilterDetailUpdate')}}" method="POST" role="form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Cập nhật</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Giá trị</label>
                                        <input type="text" name="value" class="form-control" value="{{$itemFilter->value}}" required>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">sorder</label>
                                        <input type="number" name="sorder" class="form-control" value="{{$itemFilter->sorder}}" required>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="status" class="form-control">
                                            @if($itemFilter->status ==1)
                                                <option value="1">enable</option>
                                                <option value="0">disable</option>
                                            @else
                                                <option value="0">disable</option>
                                                <option value="1">enable</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id" value="{{$itemFilter->id}}">
                                    @csrf
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
            </tbody>
        </table>
        @endif
	</div>
</div>
</div>
{{--    modal--}}
    @if(isset($edit->id))
    <div class="modal fade" id="modal-add-attr">
        <div class="modal-dialog">
            <form action="{{route('selectionToolFilterDetailAdd')}}" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Thêm giá trị lọc cho thuộc tính "{{$edit->title}}"</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Giá trị</label>
                            <input type="text" class="form-control" name="value" placeholder="VD: 250x30" required>
                        </div>
                        <div class="form-group">
                            <label for="">sorder</label>
                            <input type="number" class="form-control" name="sorder" value="0" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                        @csrf
                        <input type="hidden" name="filter_criteria_id" value="{{$edit->id}}">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif
{{--import--}}
    <div class="modal fade" id="modal-import">
        <div class="modal-dialog">
            <form action="{{route('selectionToolImportFilter')}}" method="POST" role="form" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title pull-left">Selection tool: Import tiêu chí lọc sản phẩm</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Tải file import mẫu</label>
                            <a href="{{url('public/admin/sample_import/selection_tool_filter_criteria.csv')}}" download class="form-control fa fa-download text-center" style="width: 10%;"></a>
                        </div>
                        <div class="form-group">
                            <label for="">Chọn file import</label>
                            <input type="file" name="file" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        @csrf
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<!-- mass delete -->
<script type="text/javascript">
    $(document).ready(function(){
        $(".checkbox").prop('checked', false);
        $("#check_all").prop('checked', false);

        $('#check_all').on('click', function(e) {
            if($(this).is(':checked',true))
            {
                $(".checkbox").prop('checked', true);
            } else {
                $(".checkbox").prop('checked',false);
            }

        });
        $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#check_all').prop('checked',true);
            }else{
                $('#check_all').prop('checked',false);
            }
        });
        $('.delete-all').on('click', function(e) {

            var idsArr = [];
            $(".checkbox:checked").each(function() {
                idsArr.push($(this).attr('data-id'));
            });
            if(idsArr.length <=0)
            {
                alert("Vui lòng chọn sản phẩm cần xóa.");
            }  else {
                if(confirm("Bạn có chắc chắn muốn xóa các mục đã chọn không?")){
                    var strIds = idsArr.join(",");
                    $.ajax({
                        url: "{{ route('selectionToolMassDeleteFilter') }}",
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+strIds,
                        success: function (data) {
                            if (data['status']==true) {
                                $(".checkbox:checked").each(function() {
                                    $(this).parents("tr").remove();
                                });
                                alert(data['message']);
                                location.reload();
                            } else {
                                alert('Có lỗi vui lòng thử lại!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });
                }
            }
        });
    });
</script>
<!--end mass delete -->
@stop()
