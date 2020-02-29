@extends('layouts.admin')
@section('title','Danh sách sản phẩm')
@section('links','Danh mục')    
@section('main')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
<div class="col-md-6" >
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
                <select name="created_by" id="" class="form-control">
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
           
            <select name="tool_check_product" id="input" class="form-control tool_check_product">
                <option value="">Tool Heath Product Check</option>
                <option value="seo">Tiêu chí SEO</option>
                <option value="pdp">Tiêu chí PDP</option>
                <option value="price">Tiêu chí giá sản phẩm</option>
            </select>



        <button type="submit" class="btn btn-primary fa fa-search"></button>
    </form>
</div>
@if(Session::has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{Session::get('success')}}
</div>
@elseif(Session::has('error'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{Session::get('error')}}
</div>
@endif
<div class="panel-body">
 <table class="table table-hover">
  <thead>
   <tr>
        <td>
            <button class="btn btn-danger btn-xs delete-all" data-url="">Delete All</button>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            
        </td>
   </tr>
   <tr>
    <td>
        <input type="checkbox" id="check_all">
    </td>
    <th>Tên sản phẩm</th>
    <!-- <th>Danh mục</th> -->
    <th>Người tạo</th>
    <th>Trạng thái</th>
    <th>Thêm</th>
    <th>Thêm Flash sales</th>
    <th>Tùy chỉnh</th>
</tr>
</thead>
<tbody>
    @foreach($products as $product)
    <tr>
        <td><input type="checkbox" name="check" class="checkbox" value="{{$product->id}}" data-id="{{$product->id}}"></td>
        <td>{{$product->title}}</td>
        <!-- <td>{{$product->category}}</td> -->
        <td>{{$product->created_by}}</td>
        <td>{{$product->status}}</td>
      
         <td>
            <a href="{{route('list_1',['id'=>$product->id])}}"  onclick="return confirm('Bạn có chắn chắn muốn thêm mới sản phẩm???')" class="btn btn-xs btn-success fa fa-plus"></a>
        </td>
        <td>
            <form style="width: 123px" action="{{route('addProductFlashSale')}}" method="POST" class="form-inline" role="form">
                <div class="form-group">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="hidden" name="category_id" value="{{$product->category_id}}">
                    <input type="hidden" name="cover_image" value="{{$product->cover_image}}">
                    <input type="hidden" name="list_price" value="{{$product->list_price}}">
                    <input type="hidden" name="title" value="{{$product->title}}">
                    <input type="hidden" name="slug" value="{{$product->slug}}">
                    <input style="width: 43px;font-size: 10px" name="quantity" class="form-control" placeholder="qty" required>
                    <input style="width: 50px;font-size: 10px;padding: 3.4px" name="price" class="form-control" placeholder="price" required>
                </div>
                @csrf
                <button type="submit" class="btn btn-xs btn-primary" onclick="return confirm('Xác nhận thêm sản phẩm {{$product->title}} vào danh sách flash sale')"><b style="font-size: 15px">+</b></button>
            </form>
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
                console.log(idsArr); 
                if(confirm("Bạn có chắc chắn muốn xóa các sản phẩm đã chọn không?")){  
                    var strIds = idsArr.join(","); 
                    $.ajax({
                        url: "{{ route('massDelete') }}",
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



            // tool_check_product
            // var checkPro = $(".tool_check_product");
            // checkPro.val('');
            // checkPro.change(function(){
            //     if(checkPro.val() != '') {
            //         $.ajax({
            //             url: "",
            //             type: 'GET',
            //             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            //             data: 'data='+checkPro,
            //             success: function (data) {
            //                 if (data['status']==true) {
            //                     console.log();
            //                     location.reload();
            //                 } else {
            //                     alert('Có lỗi vui lòng thử lại!!');
            //                 }
            //             },
            //             error: function (data) {
            //                 alert(data.responseText);
            //             }
            //         });
            //     }
            // });
            // tool_check_product
        });
    </script>
    <!-- todo -->
<!--end mass delete -->

</div>

</div>
</div>
@stop()
