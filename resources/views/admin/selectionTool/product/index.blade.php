@extends('layouts.admin')
@section('title','Selection Tool: quản lý sản phẩm')
@section('links','selection tool')
@section('main')
    <div class="col-md-5">
        <form action="{{route('SelectionToolAddProduct')}}" method="POST" class="" role="form"
              enctype="multipart/form-data">
            @if(isset($edit->id))
                <legend class="text-center">
                    <a href="{{route('selectionToolProduct')}}" class="btn btn-md btn-primary pull-left">Trở lại</a>
                    <span>
				Cập nhật sản phẩm
			</span>
                </legend>
            @else
                <legend>Thêm mới</legend>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Tiêu đề</label>
                        <input type="" name="title" class="form-control" id=""
                               @if(isset($edit->id)) value="{{$edit->title}}" @endif placeholder="Nhập tiêu đề"
                               required>
                        @if($errors->has('title'))
                            <div class="help-block error">
                                {{$errors->first('title')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Slug</label>
                        <input type="" name="slug" class="form-control" id=""
                               @if(isset($edit->id)) value="{{$edit->slug}}" @endif placeholder="Nhập slug" required>
                        @if($errors->has('slug'))
                            <div class="help-block error">
                                {{$errors->first('slug')}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="" for="">Chọn hãng</label>
                <select name="partner_id" class="form-control">
                    @foreach($partners as $item)
                        <?php
                        $selected = '';
                        if (isset($edit->item)) {
                            $selected = $item->id == $edit->partners_id ? "selected" : '';
                        }
                        ?>
                        <option {{$selected}} value="{{$item->id}}">{{$item->title}}
                            / {{!empty($item->category()) ? $item->category()->title : ''}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="" name="description" class="form-control" id=""
                       @if(isset($edit->id)) value="{{$edit->description}}" @endif placeholder="description">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Sorder</label>
                        <input type="number" name="sorder" class="form-control"
                               @if(isset($edit->id)) value="{{$edit->sorder}}" @else value="0"
                               @endif placeholder="Sorder">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" name="price" class="form-control" id=""
                               @if(isset($edit->id)) value="{{$edit->price}}" @endif placeholder="price" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Thuộc tính</label>
                <input type="" name="attribute" class="form-control" id=""
                       @if(isset($edit->id)) value="{{$edit->attributes}}"
                       @endif placeholder='VD: "kích thước" : "120x50", "cân nặng" : "500g"'>
            </div>
            <div class="form-group">
                <label for="">Catalog</label>
                <input type="" name="catalog" class="form-control" id=""
                       @if(isset($edit->id)) value="{{$edit->catalog}}" @endif>
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea class="form-control" name="content" id="" cols="70" rows="20" placeholder="Content">
				@if(isset($edit->id)) {{$edit->description}} @endif
			</textarea>
            </div>
            @csrf
            @if(isset($edit->id))
                <input type="hidden" name="id" value="{{$edit->id}}">
            @endif
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <div class="col-md-7">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title pull-left panel-title-cus">Danh sách sản phẩm</h3>
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
                                <input class="form-control" name="title" placeholder="Nhập tên danh mục">
                            </div>


                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Slug</th>
                        <th>Sorder</th>
                        <th>Danh mục</th>
                        <th>Hãng</th>
                        <th>Status</th>
                        <th>Created by</th>
                        <th>Created at</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $itemProduct)
                        <tr>
                            <td>{{$itemProduct->id}}</td>
                            <td>{{$itemProduct->title}}</td>
                            <td>{{$itemProduct->slug}}</td>
                            <td>{{$itemProduct->sorder}}</td>
                            <td>{{$itemProduct->partners()->category()->title}}</td>
                            <td>{{$itemProduct->partners()->title}}</td>
                            <td>{{$itemProduct->status == 1 ? "enable" : "disable"}}</td>
                            <td>{{$itemProduct->created_by}}</td>
                            <td>{{$itemProduct->created_at}}</td>
                            <td>
                                <a href="{{route('editProductTool',['id'=>$itemProduct->id])}}"
                                   class="btn btn-xs btn-primary fa fa-edit"></a>
                                <a href="{{route('deleteProductTool',['id'=>$itemProduct->id])}}"
                                   class="btn btn-xs btn-danger fa fa-trash"></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$products->links()}}
            </div>
        </div>
    </div>
    {{--    modal--}}
    <div class="modal fade" id="modal-import">
        <div class="modal-dialog">
            <form action="{{route('selectionToolImportProduct')}}" method="POST" role="form" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title pull-left">Selection tool: Import Sản phẩm</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Tải file import mẫu</label>
                            <a href="{{url('public/admin/sample_import/selection_tool_product.csv')}}" download class="form-control fa fa-download text-center" style="width: 10%;"></a>
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
@stop()
