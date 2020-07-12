@extends('layouts.admin')
@section('title','Selection Tool: quản lý hãng')
@section('links','selection tool')
@section('main')
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
    <script>
        var app = angular.module('admin', ['admin']);
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="col-md-3">
        <form action="{{route('SelectionToolAddPartners')}}" method="POST" class="" role="form"
              enctype="multipart/form-data">
            <legend>Thêm mới</legend>
            <div class="form-group">
                <label class="" for="">Tiêu đề</label>
                <input type="" name="title" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->title}}"
                       @endif placeholder="Nhập tiêu đề" required>
                @if($errors->has('title'))
                    <div class="help-block error">
                        {{$errors->first('title')}}
                    </div>
                @endif
            </div>
{{--            <div class="form-group">--}}
{{--                <label class="" for="">Slug</label>--}}
{{--                <input type="" name="slug" class="form-control" id="" @if(isset($edit->id)) value="{{$edit->slug}}"--}}
{{--                       @endif placeholder="Nhập slug" required>--}}
{{--                @if($errors->has('slug'))--}}
{{--                    <div class="help-block error">--}}
{{--                        {{$errors->first('slug')}}--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            </div>--}}
            <div class="form-group">
                <label class="" for="">Chọn danh mục</label>
                <select name="category_id" class="form-control" required>
                    <option value="">Chọn danh mục</option>
                    @foreach($category as $itemCate)
                        <?php
                        $selected = '';
                        if (isset($edit->category_id)) {
                            $selected = $itemCate->id == $edit->category_id ? "selected" : '';
                        }
                        ?>
                        <option {{$selected}} value="{{$itemCate->id}}">{{$itemCate->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Sorder</label>
                <input type="number" name="sorder" class="form-control" id=""
                       @if(isset($edit->id)) value="{{$edit->sorder}}" @endif placeholder="Sorder">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="" name="description" class="form-control" id=""
                       @if(isset($edit->id)) value="{{$edit->description}}" @endif placeholder="description">
            </div>
            @csrf
            @if(isset($edit->id))
                <input type="hidden" name="id" value="{{$edit->id}}">
            @endif
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <div class="col-md-9">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title pull-left panel-title-cus">Danh sách hãng</h3>
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
                        <form action="" method="GET" class="form-inline" role="form" style="margin-bottom:15px">

                            <div class="form-group">
                                <label class="sr-only" for="">label</label>
                                <input class="form-control" name="title" placeholder="Nhập tên hãng">
                            </div>


                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <td>
                            <button class="btn btn-danger btn-xs delete-all" data-url="">Delete All</button>
                        </td>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Sorder</th>
                        <th>Category id</th>
                        <th>Status</th>
                        <th>Created by</th>
                        <th>Created at</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($partners as $item)
                        <tr>
                            <td>
                                <input type="checkbox" name="check" class="checkbox" value="{{$item->id}}" data-id="{{$item->id}}">
                            </td>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->sorder}}</td>
                            <td>{{$item->category_id}}</td>
                            <td>{{$item->status == 1 ? "enable" : "disable"}}</td>
                            <td>{{$item->created_by}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>
                                <a href="{{route('editPartnersTool',['id'=>$item->id])}}"
                                   class="btn btn-xs btn-primary fa fa-edit"></a>
                                <a href="{{route('deletePartnersTool',['id'=>$item->id])}}"
                                   class="btn btn-xs btn-danger fa fa-trash"></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$partners->links()}}
            </div>
        </div>
    </div>
    {{--    modal--}}
    <div class="modal fade" id="modal-import">
        <div class="modal-dialog">
            <form action="{{route('selectionToolImportPartners')}}" method="POST" role="form" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title pull-left">Selection tool: Import hãng</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Tải file import mẫu</label>
                            <a href="{{url('public/admin/sample_import/selection_tool_partners.csv')}}" download class="form-control fa fa-download text-center" style="width: 10%;"></a>
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
                            url: "{{ route('selectionToolMassDeletePartners') }}",
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
