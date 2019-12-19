@extends('layouts.admin')
@section('title','Danh sách sản phẩm')
@section('links','Danh mục')    
@section('main')
<script src="{{url('public/js/dirPagination.js')}}"></script>
<!-- <div class="col-md-3">
<div role="tabpanel">

	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
			<a href="#home" aria-controls="home" role="tab" data-toggle="tab">home</a>
		</li>
		<li role="presentation">
			<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">tab</a>
		</li>
	</ul>

	
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="home">
			<form action="{{ route('post.store') }}" id="formDemo" method="POST" role="form">
			
				<div class="form-group">
					<label for="">Tên sản phẩm</label>
					<input type="text" name="title" class="form-control" id="title" ng-model="title" placeholder="Nhập tên sản phẩm">
					<p class="error error_title hidden"></p>
				</div>
				<div class="form-group">
					<label for="">Đường dẫn tĩnh</label>
					<input type="text" name="slug" class="form-control" id="slug" ng-model="slug" placeholder="Nhập đường dẫn tĩnh">
					<p class="error error_slug hidden"></p>
				</div>
				<div class="form-group">
					<label for="">Danh mục</label>
					<input type="text" name="category_id" class="form-control" id="category_id" ng-model="category_id" placeholder="Nhập đường dẫn tĩnh">
					<p class="error error_category_id hidden"></p>
				</div>
			
				
			
				<button type="button" ng-click="add_pro()" class="btn btn-primary">Submit</button>
			</form>		
		</div>
		<div role="tabpanel" class="tab-pane" id="tab">...</div>
	</div>
</div>
</div> -->
        <div class="col-md-4">
            <div class="">
 
                <div class="" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                    <div class="" role="document">

                        <div class="">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>

                                <h4 class="modal-title" id="myModalLabel">Tạo mới sản phẩm</h4>

                            </div>

                            <div class="modal-body">
                                <form data-toggle="validator" action="{{ route('post.store') }}" id="formDemo" method="POST" enctype="multipart/form-data">
                                    <ul class="nav nav-tabs" style="font-style:20px">
                                      <li class="active "><a data-toggle="tab" href="#home">Thông tin cơ bản</a></li>
                                      <li class=""><a data-toggle="tab" href="#menu1">Chi tiết</a></li>
                                  </ul>

                                  <div class="tab-content">
                                      <div id="home" class="tab-pane fade in active">
                                          <br>
                                          <div class="form-group">

                                            <label class="control-label" for="title">Tên sản phẩm:</label>

                                            <input type="text" name="title" id="title" ng-model="title" class="form-control" placeholder="Tên sản phẩm">
                                            
                                            <p class="error error_title hidden"></p>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label" for="slug">Đường dẫn tĩnh:</label>

                                            <input type="text" name="slug" id="slug" ng-model="slug" class="form-control" placeholder="Đường dẫn tĩnh">

                                            <p class="error error_slug hidden"></p>

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="short_description">Mô tả ngắn:</label>
                                            <input type="text" name="short_description" id="short_description" placeholder="Mô tả ngắn" class="form-control" ng-model="short_description">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="specifications">Thông số kỹ thuật:</label>
                                            <textarea type="text" id="content" name="specifications" class="form-control" ng-model="specifications"></textarea>
                                        
                                            <div class="help-block with-errors"></div>

                                        </div>
                                        <div class="form-group">

                                            <label class="control-label" for="feature">Đặc tính:</label>

                                            <textarea type="text" id="content" name="feature" class="editor_short form-control" ng-model="feature"></textarea>

                                            <div class="help-block with-errors"></div>

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="content">Tổng quan:</label>
                                            <textarea type="text" id="content" name="contents" class="editor_short form-control" ng-model="contents"></textarea>
                                        
                                            <div class="help-block with-errors"></div>

                                        </div>
                                        <div class="form-group">

                                            <label class="control-label" for="catalog">catalog:</label>

                                            <textarea name="catalog" id="content" class="form-control" ng-model="catalog"></textarea>

                                            <div class="help-block with-errors"></div>
                                            <input type="hidden" name="created_by" id="created_by" ng-model="{{Auth::user()->username}}" value="{{Auth::user()->username}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="upload_file">Ảnh</label>
                                            <input type="file" name="files" id="files" class="form-control" ng-model="file" file-model="myFile">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="product_code">Mã sản phẩm</label>
                                            <input type="text" name="product_code" id="product_code" placeholder="Mã sản phẩm" class="form-control" ng-model="product_code">
                                        </div>

                                        <input type="hidden" name="status" value="enable">
                                        <div class="form-group">

                                            <label class="control-label" for="price">Giá:</label>

                                            <input name="price" class="form-control" ng-model="price" value="Liên hệ: 1900.6536">

                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">

                                            <label class="control-label" for="warranty">Bảo hành:</label>

                                            <input name="warranty" class="form-control" placeholder="Bảo hành" ng-model="warranty" value="12 tháng">

                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="promotion">Khuyến mãi</label>
                                            <input type="text" name="promotion" id="promotion" placeholder="Khuyến mãi" class="form-control" ng-model="promotion">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="category_id">Danh mục:</label>
                                            <select name="category_id" id="" class="form-control" ng-model="category_id" data-error="Bạn chưa chọn danh mục.">
                                                <option value="">Chọn danh mục</option>
                                                <option value="@{{cate.id}}" ng-repeat="cate in category">@{{cate.title}}</option>
                      
                                            </select>
                                            <div class="error error_category_id help-block with-errors hidden"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="download_id">ID tải xuống</label>
                                            <input type="text" name="download_id" id="promotion" placeholder="ID tải xuống" class="form-control" ng-model="download_id">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="download_id">Sản phẩm bán chạy</label>
               
                                            <div class="clearfix"></div>
                                            <input type="radio" name="is_best_seller" ng-model="is_best_seller" value="enable">Enable
                                            <input type="radio" name="is_best_seller" ng-model="is_best_seller" value="disable">Disable
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="download_id">Sản phẩm nổi bật</label>

                                            <div class="clearfix"></div>
                                            <input type="radio" name="is_promotion" ng-model="is_promotion" value="enable">Enable
                                            <input type="radio" name="is_promotion" ng-model="is_promotion" value="disable">Disable
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="download_id">Sản phẩm mới</label>
    
                                            <div class="clearfix"></div>
                                            <input type="radio" name="is_new_product" ng-model="is_new_product" value="enable">Enable
                                            <input type="radio" name="is_new_product" ng-model="is_new_product" value="disable">Disable
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="download_id">Sản phẩm đặc biệt</label>
                       
                                            <div class="clearfix"></div>
                                            <input type="radio" name="special_product" ng-model="special_product" value="enable">Enable
                                            <input type="radio" name="special_product" ng-model="special_product" value="disable">Disable
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <br>

                                        <div class="form-group">
                                            <label class="control-label" for="dimension">Kích thước</label>
                                            <input type="" name="dimension" placeholder="Kích thước" class="form-control" ng-model="dimension">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="dimension">Lineup</label>
                                            <input type="" name="Lineup" placeholder="Lineup" class="form-control" ng-model="Lineup">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="sorder">Sorder</label>
                                            <input type="" name="sorder" id="sorder" placeholder="Sorder" class="form-control" ng-model="sorder">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="meta_title">Meta Title</label>
                                            <input type="" name="meta_title" placeholder="Meta Title" class="form-control" ng-model="meta_title">
                                            <p class="error error_meta_title hidden"></p>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="meta_description">Meta Description</label>
                                            <input type="" name="meta_description" placeholder="Meta Description" class="form-control" ng-model="meta_description">
                                            <p class="error error_meta_description hidden"></p>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="meta_keywords">Meta Keywords</label>
                                            <input type="" name="meta_keywords" placeholder="Meta Keywords" class="form-control" ng-model="meta_keywords">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        
                                    </div>
                                </div>

                                
                                @csrf
                                <div class="form-group">
                                    <button type="button" class="btn btn-success" ng-click="add_pro()">Thêm mới</button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>
        </div>   
    </div>
<div class="col-md-8">
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-info">Danh sách sản phẩm</h3>
        <form action="" method="POST" class="form-inline" role="form">
        
            <div class="form-group">
                <input type="title" class="form-control" id="" ng-model="sname" placeholder="Tên sản phẩm">
            </div>
            <div class="form-group">
                <select name="category_id" id="inputCategory_id" ng-model="scategory" class="form-control">
                    <option value="">Danh mục</option>
                    <option value="@{{cate.id}}" ng-repeat="cate in category">@{{cate.title}}</option>
                </select>
            </div>
            <div class="form-group">
                <select name="created_by" id="" class="form-control" ng-model="screated_by">
                    <option value="">Người tạo</option>
                    <option value="@{{crb.username}}" ng-repeat="crb in createdby">@{{crb.username}}</option>
                </select>
            </div>
            <div class="form-group">
                <select name="category_id" id="inputCategory_id" ng-model="sstatus" class="form-control">
                    <option value="">Trạng thái</option>
                    <option value="enable">Enable</option>
                    <option value="active">Active</option>
                </select>
            </div>
        
            
        
            <!-- <button type="submit" class="btn btn-primary fa fa-search"></button> -->
        </form>
	</div>
	<div class="panel-body">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Tên sản phẩm</th>
				<th>Danh mục</th>
				<th>Người tạo</th>
				<th>Trạng thái</th>
				<th>Ngày tạo</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr dir-paginate="product in products | itemsPerPage: 12 | filter:{title:sname,status:sstatus,created_by:screated_by,category_id:scategory}">
				<td>@{{product.title}}</td>
                <td>@{{product.category_id}}</td>
				<td>@{{product.created_by}}</td>
				<td>@{{product.status}}</td>
				<td>@{{product.created_at}}</td>
				<td>
					<a class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal" href='#modal-id' ng-click="edit_pro(product.id)"></a>
					<a href="" class="btn btn-xs btn-danger fa fa-trash" ng-click="del_pro(product.id)"></a>
					<div class="modal fade" id="modal-id">
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

                                            <input type="text" name="title" id="title" ng-model="editpr.title" class="form-control" placeholder="Tên sản phẩm">
                                            
                                            <p class="error error_title hidden"></p>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label" for="slug">Đường dẫn tĩnh:</label>

                                            <input type="text" name="slug" id="slug" ng-model="editpr.slug" class="form-control" placeholder="Đường dẫn tĩnh">

                                            <p class="error error_slug hidden"></p>

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="short_description">Mô tả ngắn:</label>
                                            <input type="text" name="short_description" id="short_description" placeholder="Mô tả ngắn" class="form-control" ng-model="editpr.short_description">
                                        </div>
                                 
                                        <div class="form-group">
                                            <label class="control-label" for="content">Tổng quan:</label>
                                            <textarea type="text" id="content" name="contents" class="editor_short form-control" ng-model="editpr.contents"></textarea>
                                        
                                            <div class="help-block with-errors"></div>

                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="upload_file">Ảnh</label>
                                            <input type="file" name="upload_file" class="form-control" id="upload_file" data-error="Please enter details.">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="product_code">Mã sản phẩm</label>
                                            <input type="text" name="product_code" id="product_code" placeholder="Mã sản phẩm" class="form-control" ng-model="editpr.product_code">
                                        </div>

                                        <input type="hidden" name="status" value="enable">
                                        <div class="form-group">

                                            <label class="control-label" for="price">Giá:</label>

                                            <input name="price" class="form-control" ng-model="editpr.price" value="Liên hệ: 1900.6536">

                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="dimension">Kích thước</label>
                                            <input type="" name="dimension" placeholder="Kích thước" class="form-control" ng-model="editpr.dimension">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="dimension">Lineup</label>
                                            <input type="" name="Lineup" placeholder="Lineup" class="form-control" ng-model="editpr.Lineup">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="meta_title">Meta Title</label>
                                            <input type="" name="meta_title" placeholder="Meta Title" class="form-control" ng-model="editpr.meta_title">
                                            <p class="error error_meta_title hidden"></p>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="meta_description">Meta Description</label>
                                            <input type="" name="meta_description" placeholder="Meta Description" class="form-control" ng-model="editpr.meta_description">
                                            <p class="error error_meta_description hidden"></p>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="meta_keywords">Meta Keywords</label>
                                            <input type="" name="meta_keywords" placeholder="Meta Keywords" class="form-control" ng-model="editpr.meta_keywords">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        
                                    </div>
                                    <div id="editpr" class="tab-pane fade">
                                        <br>
										<div class="form-group">
                                            <label class="control-label" for="specifications">Thông số kỹ thuật:</label>
                                            <textarea type="text" id="content" name="specifications" class="form-control" ng-model="editpr.specifications"></textarea>
                                        
                                            <div class="help-block with-errors"></div>

                                        </div>
                                        <div class="form-group">

                                            <label class="control-label" for="feature">Đặc tính:</label>

                                            <textarea type="text" id="content" name="feature" class="editor_short form-control" ng-model="editpr.feature"></textarea>

                                            <div class="help-block with-errors"></div>

                                        </div>
                                        <div class="form-group">

                                            <label class="control-label" for="catalog">catalog:</label>

                                            <textarea name="catalog" id="content" class="form-control" ng-model="editpr.catalog"></textarea>

                                            <div class="help-block with-errors"></div>
                                            <input type="hidden" name="created_by" value="{{Auth::user()->username}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="download_id">ID tải xuống</label>
                                            <input type="text" name="download_id" id="promotion" placeholder="ID tải xuống" class="form-control" ng-model="editpr.download_id">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="promotion">Khuyến mãi</label>
                                            <input type="text" name="promotion" id="promotion" placeholder="Khuyến mãi" class="form-control" ng-model="editpr.promotion">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="sorder">Sorder</label>
                                            <input type="" name="sorder" id="sorder" placeholder="Sorder" class="form-control" ng-model="editpr.sorder">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                        <div class="form-group">

                                            <label class="control-label" for="warranty">Bảo hành:</label>

                                            <input name="warranty" class="form-control" placeholder="Bảo hành" ng-model="editpr.warranty" value="12 tháng">

                                            <div class="help-block with-errors"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="category_id">Danh mục:</label>
                                            <select name="category_id" id="" class="form-control" ng-model="editpr.category_id" data-error="Bạn chưa chọn danh mục.">
                                                <option value="">Chọn danh mục</option>
                                                <option value="@{{cate.id}}" ng-repeat="cate in category" ng-model="editpr.category_id">@{{cate.title}}</option>
                      
                                            </select>
                                            <div class="error error_category_id help-block with-errors hidden"></div>
                                        </div>  
                                        <div class="form-group">
                                            <label class="control-label" for="status">Trạng thái</label>
                                            <select name="status" id="status" class="form-control" ng-model="editpr.status">
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
				                                    <input type="radio" name="is_best_seller" ng-model="editpr.is_best_seller" value="enable">Enable
				                                    <input type="radio" name="is_best_seller" ng-model="editpr.is_best_seller" value="disable">Disable
				                                </label>
				                                <label style="margin-left: 40px">
				                                    <div class="clearfix">Sản phẩm nổi bật</div>
				                                        <input type="radio" name="is_promotion" ng-model="editpr.is_promotion" value="enable">Enable
				                                        <input type="radio" name="is_promotion" ng-model="editpr.is_promotion" value="disable">Disable
				                                </label>
				                                <label style="margin-left: 40px">
				                                    <div class="clearfix">Sản phẩm mới</div>
				                                        <input type="radio" name="is_new_product" ng-model="editpr.is_new_product" value="enable">Enable
				                                        <input type="radio" name="is_new_product" ng-model="editpr.is_new_product" value="disable">Disable
				                                </label>
				                                <label style="margin-left: 40px">
				                                    <div class="clearfix">Sản phẩm đặc biệt</div>
				                                        <input type="radio" name="special_product" ng-model="editpr.special_product" value="enable">Enable
				                                        <input type="radio" name="special_product" ng-model="editpr.special_product" value="disable">Disable
				                                </label>
				                            </div>
				                            <div class="help-block with-errors"></div>
				                        </div>             
                                    </div>
                                </div>
								<button type="button" class="btn btn-primary" ng-click="update_pro(product.id)">Cập nhật</button>
                                @csrf
                            </form>
									<!-- <form action="" method="POST" role="form" id="formEdit">
										<div class="form-group">
											<label for="">Tên sản phẩm</label>
											<input type="text" name="title" class="form-control" id="title" ng-model="editpr.title" placeholder="Nhập tên sản phẩm">
											<p class="error error_title hidden"></p>
										</div>
										<div class="form-group">
											<label for="">Đường dẫn tĩnh</label>
											<input type="text" name="slug" class="form-control" id="slug" ng-model="editpr.slug" placeholder="Nhập đường dẫn tĩnh">
											<p class="error error_slug hidden"></p>
										</div>
										@csrf()
										<div class="form-group">
											<label for="">Danh mục</label>
											<input type="text" name="category_id" class="form-control" id="category_id" ng-model="editpr.category_id" placeholder="Nhập đường dẫn tĩnh">
											<p class="error error_category_id hidden"></p>
										</div>																
									</form> -->
										<!-- <button type="button" class="btn btn-primary" ng-click="update_pro(product.id)">Cập nhật</button> -->
								</div>
							</div>
						</div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
			<dir-pagination-controls
                max-size="8"
                direction-links="true"
                boundary-links="true" >
			</dir-pagination-controls>
	</div>
</div>
</div>
@stop()
