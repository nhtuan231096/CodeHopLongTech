@extends('layouts.admin')
@section('title','Danh sách sản phẩm')
@section('links','Danh mục')    
@section('main')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
<div class="col-md-6">
    <div class="">

        <div class="" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

            <div class="" role="document">

                <div class="">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>

                        <h4 class="modal-title" id="myModalLabel">Tạo mới sản phẩm</h4>

                    </div>

                    <div class="modal-body">
                        <form data-toggle="validator" action="" id="formDemo" method="POST" enctype="multipart/form-data">
                            <ul class="nav nav-tabs" style="font-style:20px">
                              <li class="active "><a data-toggle="tab" href="#home">Thông tin cơ bản</a></li>
                              <li class=""><a data-toggle="tab" href="#menu1">Chi tiết</a></li>
                          </ul>

                          <div class="tab-content">
                              <div id="home" class="tab-pane fade in active">
                                  <br>
                                  <div class="form-group">

                                    <label class="control-label" for="title">Tên sản phẩm:</label>

                                    <input type="text" name="title" id="name" class="form-control" placeholder="Tên sản phẩm" @if(isset($pro->id)) value="{{$pro->title}}" @endif value="{{old('title')}}">
                                    @if($errors->has('title'))
                                    <p class="error error_title">{{$errors->first('title')}}</p>
                                    @endif
                                </div>

                                <div class="form-group">

                                    <label class="control-label" for="slug">Đường dẫn tĩnh:</label>

                                    <input type="text" name="slug" id="slug" class="form-control" placeholder="Đường dẫn tĩnh"  @if(isset($pro->id)) value="{{$pro->slug}}" @endif value="{{old('slug')}}"  >

                                    @if($errors->has('slug'))
                                    <p class="error error_title">{{$errors->first('slug')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="short_description">Mô tả ngắn:</label>
                                    <!-- <input type="text" name="short_description" id="short_description" placeholder="Mô tả ngắn" class="form-control" @if(isset($pro->id)) value="{{$pro->short_description}}" @endif value="{{old('short_description')}}"> -->
                                    <textarea type="text" id="short_description" name="short_description" class="editor_short form-control" style="height: 600px;">@if(isset($pro->id)) {{$pro->short_description}} @endif {{old('short_description')}}</textarea>

                                    @if($errors->has('short_description'))
                                    <p class="error error_title">{{$errors->first('short_description')}}</p>
                                    @endif
                                </div>
                                  <div class="form-group">
                                    <label class="control-label" for="content">Thông số kỹ thuật</label>
                                    <textarea type="text" id="content" name="content" class="editor_short form-control" style="height: 800px;">@if(isset($pro->id)) {{$pro->content}} @endif {{old('content')}}</textarea>

                                    <div class="help-block with-errors"></div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="specifications">Tổng quan:</label>
                                    <textarea type="text" id="content" name="specifications" class="form-control">@if(isset($pro->id)) {{$pro->specifications}} @endif {{old('specifications')}}</textarea>
                                    @if($errors->has('specifications'))
                                    <p class="error error_title">{{$errors->first('specifications')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">

                                    <label class="control-label" for="feature">Đặc tính:</label>

                                    <textarea type="text" id="content" name="feature" class="editor_short form-control">@if(isset($pro->id)) {{$pro->feature}} @endif {{old('feature')}}</textarea>


                                </div>
                              
                                <div class="form-group">

                                    <label class="control-label" for="catalog">catalog:</label>

                                    <textarea name="catalog" id="content" class="form-control">@if(isset($pro->id)) {{$pro->catalog}} @endif {{old('catalog')}}</textarea>

                                    <div class="help-block with-errors"></div>
                                    <input type="hidden" name="created_by" id="created_by" value="{{Auth::Guard('admin')->user()->username}}" @if(isset($pro->id)) value="{{$pro->created_by}}" @endif {{old('created_by')}}>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="upload_file">Ảnh</label>
                                    <div class="clearfix"></div>
                                    @if(isset($pro->id)) 
                                    <img width="150px" src="{{url('uploads/product')}}/{{$pro->cover_image}}" alt="{{$pro->cover_image}}">
                                    @endif
                                    <input type="file" name="upload_file" id="files" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="product_code">Đường dẫn ảnh 360°</label>
                                    <input type="text" name="image_360" id="product_code" placeholder="Nhập đường dẫn ảnh" class="form-control" @if(isset($pro->id)) value="{{$pro->image_360}}" @endif value="{{old('image_360')}}" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="product_code">Đường dẫn video</label>
                                    <input type="text" name="video" id="video" placeholder="Nhập đường dẫn video" class="form-control" @if(isset($pro->id)) value="{{$pro->video}}" @endif value="{{old('video')}}" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="product_code">Mã sản phẩm</label>
                                    <input type="text" name="product_code" id="product_code" placeholder="Mã sản phẩm" class="form-control" @if(isset($pro->id)) value="{{$pro->product_code}}" @endif value="{{old('product_code')}}" >
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="product_code">Số lượng hàng có sẵn</label>
                                            <input type="text" name="in_stock" id="in_stock" placeholder="Số lượng hàng có sẵn" class="form-control" @if(isset($pro->id)) value="{{$pro->in_stock}}" @endif value="{{old('in_stock')}}" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="product_code">Giá list</label>
                                            <input type="text" name="list_price" id="in_stock" placeholder="Giá list" class="form-control" @if(isset($pro->list_price)) value="{{$pro->list_price}}" @endif value="{{old('list_price')}}" >
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="status" value="enable">
                                
                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group">

                                            <label class="control-label" for="price">Giá:</label>

                                            <input name="price" class="form-control" @if(isset($pro->id)) value="{{$pro->price}}" @endif value="Liên hệ: 1900.6536">

                                            <div class="help-block with-errors"></div>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-group">

                                            <label class="control-label" for="price">Giá khi đăng nhập:</label>

                                            <input name="price_when_login" class="form-control" placeholder="Giá khi khách hàng đăng nhập" @if(isset($pro->id)) value="{{$pro->price_when_login}}" @endif">

                                            <div class="help-block with-errors"></div>
                                        </div>
                                   </div>    
                               </div>
                    
                                <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group">

                                            <label class="control-label" for="price">Khuyến mãi(%):</label>
                        
                                            <input name="discount" type="number" class="form-control" min="0" max="100" placeholder="Nhập mức % khuyến mãi" @if(isset($pro->discount)) value="{{$pro->discount}}" @endif>

                                            <div class="help-block with-errors"></div>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-group">

                                            <label class="control-label" for="price">Thời gian khuyến mãi:</label>

                                            <input type="date" name="time_discount" class="form-control" @if(isset($pro->time_discount)) value="{{$pro->time_discount}}" @endif">

                                            <div class="help-block with-errors"></div>
                                        </div>
                                   </div>
                                   
                               </div>

                                <div class="form-group">

                                    <label class="control-label" for="warranty">Bảo hành:</label>

                                    <input name="warranty" class="form-control" placeholder="Bảo hành" @if(isset($pro->id)) value="{{$pro->warranty}}" @endif value="{{old('warranty')}}">

                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="promotion">Khuyến mãi</label>
                                    <input type="text" name="promotion" id="promotion" placeholder="Khuyến mãi" class="form-control" @if(isset($pro->id)) value="{{$pro->promotion}}" @endif value="{{old('promotion')}}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="category_id">Danh mục:</label>
                                    <select name="category_id" id="" class="form-control" data-error="Bạn chưa chọn danh mục.">
                                        <option value="">Chọn danh mục</option>
                                        @foreach($categorys as $category)
                                            @if(isset($pro->id)) 
                                            <?php $selected=$category->id==$pro->category_id?'selected':''?> 
                                            <option {{$selected}} value="{{$category->id}}">{{$category->title}}</option>
                                            @else
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('category_id'))
                                    <p class="error error_title">{{$errors->first('category_id')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="download_id">ID tải xuống</label>
                                    <input type="text" name="download_id" id="promotion" placeholder="ID tải xuống" class="form-control" @if(isset($pro->id)) value="{{$pro->download_id}}" @endif value="{{old('download_id')}}">
                                </div>
                                @if(isset($pro->id))
                                <div class="form-group">
                                    <label class="control-label" for="">Trạng thái</label>
                                    <select name="status" id="inputStatus" class="form-control">
                                    @if($pro->status=='enable')
                                        <option selected value="enable">Enable</option>
                                        <option value="disable">Disable</option>
                                    @elseif($pro->status=='disable')
                                        <option value="enable">Enable</option>
                                        <option selected value="disable">Disable</option>
                                    @else
                                        <option value="enable">Enable</option>
                                        <option value="disable">Disable</option>
                                    @endif
                                    </select>
                                </div>
                                @endif
                                <div class="form-group">
                                    <label class="control-label" for="download_id">Sản phẩm bán chạy</label>

                                    <div class="clearfix"></div>
                                    @if(isset($pro->id))
                                        @if($pro->is_best_seller=="enable")
                                        <input type="radio" checked name="is_best_seller" value="enable">Enable
                                        <input type="radio" name="is_best_seller" value="disable">Disable
                                        @else
                                        <input type="radio" name="is_best_seller" value="enable">Enable
                                        <input type="radio" checked name="is_best_seller" value="disable">Disable
                                        @endif
                                    @else
                                    <input type="radio" name="is_best_seller" value="enable">Enable
                                    <input type="radio" name="is_best_seller" value="disable">Disable
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="download_id" >Sản phẩm khuyến mại</label>

                                    <div class="clearfix"></div>
                                    @if(isset($pro->id))
                                        @if($pro->is_promotion=="enable")
                                        <input type="radio" checked name="is_promotion" value="enable">Enable
                                        <input type="radio" name="is_promotion" value="disable">Disable
                                        @else
                                        <input type="radio" name="is_promotion" value="enable">Enable
                                        <input type="radio" checked name="is_promotion" value="disable">Disable
                                        @endif
                                    @else
                                    <input type="radio" name="is_promotion" value="enable">Enable
                                    <input type="radio" name="is_promotion" value="disable">Disable
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="download_id">Sản phẩm mới</label>

                                    <div class="clearfix"></div>
                                    @if(isset($pro->id))
                                        @if($pro->is_new_product=="enable")
                                        <input type="radio" checked name="is_new_product" value="enable">Enable
                                        <input type="radio" name="is_new_product" value="disable">Disable
                                        @else
                                        <input type="radio" name="is_new_product" value="enable">Enable
                                        <input type="radio" checked name="is_new_product" value="disable">Disable
                                        @endif
                                    @else
                                    <input type="radio" name="is_new_product" value="enable">Enable
                                    <input type="radio" name="is_new_product" value="disable">Disable
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="download_id">Sản phẩm đặc biệt</label>

                                    <div class="clearfix"></div>
                                    @if(isset($pro->id))
                                        @if($pro->special_product=="enable")
                                        <input type="radio" checked name="special_product" value="enable">Enable
                                        <input type="radio" name="special_product" value="disable">Disable
                                        @else
                                        <input type="radio" name="special_product" value="enable">Enable
                                        <input type="radio" checked name="special_product" value="disable">Disable
                                        @endif
                                    @else
                                    <input type="radio" name="special_product" value="enable">Enable
                                    <input type="radio" name="special_product" value="disable">Disable
                                    @endif
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <br>

                                <div class="form-group">
                                    <label class="control-label" for="dimension">Kích thước</label>
                                    <!-- <input type="" name="dimension" placeholder="Kích thước" class="form-control" @if(isset($pro->id)) value="{{$pro->dimension}}" @endif {{old('dimension')}}> -->

                                    <textarea type="text" id="content" name="dimension" class="editor_short form-control" style="height: 800px;">@if(isset($pro->id)) {{$pro->dimension}} @endif {{old('dimension')}}</textarea>

                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="dimension">Lineup</label>
                                    <input type="" name="lineup" placeholder="Lineup" class="form-control" @if(isset($pro->id)) value="{{$pro->lineup}}" @endif {{old('lineup')}}>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="dimension">Công suất</label>
                                    <input type="" name="cacapacity" placeholder="Công suất" class="form-control" @if(isset($pro->id)) value="{{$pro->capacity}}" @endif {{old('capacity')}}>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="sorder">Sorder</label>
                                            <input type="number" name="sorder" id="sorder" placeholder="Sorder" class="form-control" @if(isset($pro->id)) value="{{$pro->sorder}}" @endif {{old('sorder')}}>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="sorder">Lượt xem</label>
                                            <input type="number" name="view" id="view" placeholder="Số lượt xem sản phẩm" class="form-control" @if(isset($pro->view)) value="{{$pro->view}}" @endif {{old('view')}}>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="sorder">PDP</label>
                                            <!-- <input type="number" name="pdp" id="pdp" placeholder="pdp" class="form-control" @if(isset($pro->pdp)) value="{{$pro->pdp}}" @endif {{old('pdp')}}> -->

                                            <select name="pdp" id="pdp" class="form-control">
                                                @if(isset($pro->pdp) ? $pro->pdp == 0 : false)
                                                <option value="0">disable</option>
                                                <option value="1">enable</option>
                                                @elseif(isset($pro->pdp) ? $pro->pdp == 1 : false)
                                                <option value="1">enable</option>
                                                <option value="0">disable</option>
                                                @endif
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="meta_title">Meta Title</label>
                                    <input type="" name="meta_title" placeholder="Meta Title" class="form-control" @if(isset($pro->id)) value="{{$pro->meta_title}}" @endif {{old('mate_title')}}>
                                    @if($errors->has('meta_title'))
                                    <p class="error error_title">{{$errors->first('meta_title')}}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="meta_description">Meta Des</label>
                                    <input type="" name="meta_description" placeholder="Meta Description" style="height: 100px;" class="form-control" @if(isset($pro->id)) value="{{$pro->meta_description}}" @endif {{old('meta_description')}}>
                                    @if($errors->has('meta_description'))
                                    <p class="error error_title">{{$errors->first('meta_description')}}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="meta_keywords">Meta Keywords</label>
                                    <input type="" name="meta_keywords" placeholder="Meta Keywords" class="form-control" @if(isset($pro->id)) value="{{$pro->meta_keywords}}" @endif {{old('meta_keywords')}}>
                                    @if($errors->has('meta_keywords'))
                                    <p class="error error_title">{{$errors->first('meta_keywords')}}</p>
                                    @endif
                                </div>

                            </div>
                        </div>


                        @csrf
                        <div class="form-group">
                        @if(isset($pro->id))
                            <button type="submit" class="btn btn-success">Cập nhật</button>
                        @else
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                        @endif
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
</div>   
</div>
<div class="col-md-6">
    <div class="panel panel-info">
     <div class="panel-heading">
      <h3 class="panel-info">Danh sách sản phẩm</h3>
      <form action="" method="GET" class="form-inline" role="form">
      
            <div class="form-group">
                <input type="title" class="form-control" name="title" id="" placeholder="Tên sản phẩm">
            </div>
            <!-- <div class="form-group">
                <select name="category_id" id="inputCategory_id" class="form-control">
                    <option value="">Danh mục</option>
                    @foreach($categorys as $cate)
                    <option value="{{$cate->id}}">{{$cate->title}}</option>
                    @endforeach
                </select>
            </div> -->


             <div class="form-group">
                    <style>
                        .chosen-container-single .chosen-single {
                            height: 34px;
                            width: 150px;
                        }
                        .chosen-container.chosen-with-drop .chosen-drop {
                            width: 150px;
                        }
                        .chosen-container-single .chosen-search input[type=text] {
                            width: 140px;
                        }
                        .chosen-container .chosen-results li.active-result {
                            width: 150px !important;
                        }
                        .chosen-container-single .chosen-single span {
                            padding: 5px;
                        }
                        .chosen-container .chosen-results {
                            overflow-y: hidden;
                        }
                        .chosen-container-single .chosen-single div b {
                            width: 86%;
                        }
                        .chosen-container-active.chosen-with-drop .chosen-single {
                            background: #fff;
                        }
                    </style>
                    <div class="form-group">
                        <div style="width:150px;margin:0px auto;">
                          <select name="category_id" id="inputCategory_id"  class="chosen form-control form-control" style="width:100px;">
                                <option value="">Chọn danh mục</option>
                                @foreach($categorys as $cate)
                                <option value="{{$cate->id}}">{{$cate->title}}</option>
                                @endforeach
                          </select>
                        </div>
                        <script type="text/javascript">
                          $(".chosen").chosen();
                        </script>
                    </div>
            </div>


                     
            <div class="form-group">
                <select name="created_by" id="" class="form-control" ng-model="screated_by">
                    <option value="">Người tạo</option>
                    @foreach($users as $user)
                    <option value="{{$user->username}}">{{$user->username}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select name="status" id="inputCategory_id" class="form-control">
                    <option value="">Trạng thái</option>
                    <option value="enable">Enable</option>
                    <option value="disable">Disable</option>
                </select>
            </div>
         



        <button type="submit" class="btn btn-primary fa fa-search"></button>
    </form>
</div>
@if(Session::has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Success </strong> {{Session::get('success')}}
</div>
@elseif(Session::has('error'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>error </strong> {{Session::get('error')}}
</div>
@endif
<div class="panel-body">
 <table class="table table-hover">
  <thead>
   <tr>
    <th>Tên sản phẩm</th>
    <!-- <th>Danh mục</th> -->
    <th>Người tạo</th>
    <th>Trạng thái</th>
    <th>Thêm</th>
    <th>Tùy chỉnh</th>
</tr>
</thead>
<tbody>
    @foreach($products as $product)
    <tr>
        <td>{{$product->title}}</td>
        <!-- <td>{{$product->category}}</td> -->
        <td>{{$product->created_by}}</td>
        <td>{{$product->status}}</td>
      
         <td>
            <a href="{{route('list_1',['id'=>$product->id])}}"  onclick="return confirm('Bạn có chắn chắn muốn thêm mới sản phẩm???')" class="btn btn-xs btn-success fa fa-plus"></a>
        </td>
        <td>
         <a href="{{route('editPro',['id'=>$product->id])}}" class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal"></a>
         <a href="{{route('delPro',['id'=>$product->id])}}" onclick="return confirm('Bạn có muốn xóa không??')" class="btn btn-xs btn-danger fa fa-trash"></a>
     </td>
 </tr>
 @endforeach
</tbody>
</table>
{{$products->appends(request()->only('title','category_id','created_by','status'))->links()}}
</div>
<!-- edit sản phẩm  -->
<!-- <div class="modal fade" id="modal-id">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Cập nhật sản phẩm</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form" id="formEdit">
                    <ul class="nav nav-tabs" style="font-style:20px">
                      <li class="active "><a data-toggle="tab" href="#editpro">Thông tin cơ bản</a></li>
                      <li class=""><a data-toggle="tab" href="#editpr">Chi tiết</a></li>
                  </ul>

                  <div class="tab-content">
                      <div id="editpro" class="tab-pane fade in active">
                          <br>
                          <div class="form-group">

                            <label class="control-label" for="title">Tên sản phẩm:</label>

                            <input type="text" name="title" id="title" class="form-control" placeholder="Tên sản phẩm"

                            <p class="error error_title hidden"></p>

                        </div>

                        <div class="form-group">

                            <label class="control-label" for="slug">Đường dẫn tĩnh:</label>

                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Đường dẫn tĩnh">

                            <p class="error error_slug hidden"></p>

                        </div>
                        <div class="form-group">
                            <label class="control-label" for="short_description">Mô tả ngắn:</label>
                            <input type="text" name="short_description" id="short_description" placeholder="Mô tả ngắn" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="content">Tổng quan:</label>
                            <textarea type="text" id="content" name="contents" class="editor_short form-control"></textarea>

                            <div class="help-block with-errors"></div>

                        </div>

                        <div class="form-group">
                            <label class="control-label" for="upload_file">Ảnh</label>
                            <input type="file" name="upload_file" class="form-control" id="upload_file" data-error="Please enter details.">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="product_code">Mã sản phẩm</label>
                            <input type="text" name="product_code" id="product_code" placeholder="Mã sản phẩm" class="form-control" >
                        </div>

                        <input type="hidden" name="status" value="enable">
                        <div class="form-group">

                            <label class="control-label" for="price">Giá:</label>

                            <input name="price" class="form-control" value="Liên hệ: 1900.6536">

                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="dimension">Kích thước</label>
                            <input type="" name="dimension" placeholder="Kích thước" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="dimension">Lineup</label>
                            <input type="" name="Lineup" placeholder="Lineup" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="meta_title">Meta Title</label>
                            <input type="" name="meta_title" placeholder="Meta Title" class="form-control">
                            <p class="error error_meta_title hidden"></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="meta_description">Meta Description</label>
                            <input type="" name="meta_description" placeholder="Meta Description" class="form-control">
                            <p class="error error_meta_description hidden"></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="meta_keywords">Meta Keywords</label>
                            <input type="" name="meta_keywords" placeholder="Meta Keywords" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>


                    </div>
                    <div id="editpr" class="tab-pane fade">
                        <br>
                        <div class="form-group">
                            <label class="control-label" for="specifications">Thông số kỹ thuật:</label>
                            <textarea type="text" id="content" name="specifications" class="form-control"></textarea>

                            <div class="help-block with-errors"></div>

                        </div>
                        <div class="form-group">

                            <label class="control-label" for="feature">Đặc tính:</label>

                            <textarea type="text" id="content" name="feature" class="editor_short form-control"></textarea>

                            <div class="help-block with-errors"></div>

                        </div>
     
                        <div class="form-group">
                            <label class="control-label" for="download_id">ID tải xuống</label>
                            <input type="text" name="download_id" id="promotion" placeholder="ID tải xuống" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="promotion">Khuyến mãi</label>
                            <input type="text" name="promotion" id="promotion" placeholder="Khuyến mãi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="sorder">Sorder</label>
                            <input type="" name="sorder" id="sorder" placeholder="Sorder" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div> 
                        <div class="form-group">

                            <label class="control-label" for="warranty">Bảo hành:</label>

                            <input name="warranty" class="form-control" placeholder="Bảo hành" value="12 tháng">

                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="category_id">Danh mục:</label>
                            <select name="category_id" id="" class="form-control" data-error="Bạn chưa chọn danh mục.">
                                <option value="">Chọn danh mục</option>
                                <option value="@{{cate.id}}" ng-repeat="cate in category" ng-model="editpr.category_id">@{{cate.title}}</option>

                            </select>
                            <div class="error error_category_id help-block with-errors hidden"></div>
                        </div>  
                        <div class="form-group">
                            <label class="control-label" for="status">Trạng thái</label>
                            <select name="status" id="status" class="form-control">
                                <option value="enable">Enable</option>
                                <option value="disable">Disable</option>

                            </select>
                            <div class="error error_category_id help-block with-errors hidden"></div>
                        </div>  
                        <div class="form-group">
                            <label class="control-label" for="status">Loại sản phẩm</label>
                            <div class="checkbox">
                                <label>
                                    <div class="clearfix">Sản phẩm bán chạy</div>
                                    <input type="radio" name="is_best_seller" value="enable">Enable
                                    <input type="radio" name="is_best_seller" value="disable">Disable
                                </label>
                                <label style="margin-left: 40px">
                                    <div class="clearfix">Sản phẩm nổi bật</div>
                                    <input type="radio" name="is_promotion" value="enable">Enable
                                    <input type="radio" name="is_promotion" value="disable">Disable
                                </label>
                                <label style="margin-left: 40px">
                                    <div class="clearfix">Sản phẩm mới</div>
                                    <input type="radio" name="is_new_product" value="enable">Enable
                                    <input type="radio" name="is_new_product" value="disable">Disable
                                </label>
                                <label style="margin-left: 40px">
                                    <div class="clearfix">Sản phẩm đặc biệt</div>
                                    <input type="radio" name="special_product" value="enable">Enable
                                    <input type="radio" name="special_product" value="disable">Disable
                                </label>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>             
                    </div>
                </div>
                <button type="button" class="btn btn-primary" ng-click="update_pro(product.id)">Cập nhật</button>
                @csrf
            </form>
        </div>
    </div>
</div> -->
</div>

</div>
</div>
@stop()
