@extends('layouts.admin')
@section('title','Flash Sale Management')
@section('links','Sản phẩm')    
@section('main')
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="http://benalman.com/code/projects/jquery-throttle-debounce/jquery.ba-throttle-debounce.js"></script>
<!-- <script src="{{url('public/homev2/js/flashSaleCtrl.js')}}"></script> -->
<div class="wrapp"  ng-controller="flashSaleCtrl">
	<form method="GET" class="form-inline" role="form" style="position: absolute;right: 5%;top: 150px">
			      
		<div class="form-group">
		    <input type="title" class="form-control" name="title" id="title" placeholder="Tên sản phẩm">
		</div>
		 <!-- <div class="form-group">
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
		</div> -->

		<button type="button" class="btn btn-primary fa fa-search" ng-click="search()"></button>
		</form>
	<form action="" method="POST" role="form" enctype="multipart/form-data">
		<legend>Tạo sự kiện flash sale</legend>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Tiêu đề</label>
					<input type="text" class="form-control" name="title" placeholder="Nhập tiêu đề">
				</div>

				<div class="form-group">
					<label for="">Ảnh đại diện</label>
					<input type="file" class="form-control" name="file_upload" style="padding: 0">
				</div>

				<div class="form-group">
					<label for="">Ngày kết thúc</label>
					<input type="date" class="form-control" name="end_time">
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
			<div class="col-md-9" style="margin-top: 38px">
			
				<table class="table table-hover">
					<thead>
						<tr>
							<th></th>
							<th>ID</th>
							<th>Sản phẩm</th>
							<th>Giá</th>
							<th>Số lượng</th>
							<th>Giảm giá(%)</th>
						</tr>
					</thead>
					<tbody ng-init="getProducts()">
						<!-- @foreach($products as $product)
						<tr>
							<input type="hidden" class="title" value="{{$product->title}}">
							<input type="hidden" class="slug" value="{{$product->slug}}">
							<input type="hidden" class="price" value="{{$product->price}}">
							<input type="hidden" class="cover_image" value="{{$product->cover_image}}">
							<input type="hidden" class="category_id" value="{{$product->category_id}}">
							<td class="cbx">
								<input type="checkbox" class="checkbox" value="{{$product->id}}">
							</td>
							<td>{{$product->id}}</td>
							<td>{{$product->title}}</td>
							<td>{{$product->price}}</td>
							<td class="qty">
								<input type="number" name="quantity" class="quantity">
							</td>
							<td class="w_discount">
								<input type="number" name="discount" class="discount">
							</td>
						</tr>
						@endforeach -->
						<tr ng-repeat="product in products">
							<input type="hidden" class="title" id="title@{{product['id']}}" value="@{{product['title']}}">
							<input type="hidden" class="slug" id="slug@{{product['id']}}" value="@{{product['slug']}}">
							<input type="hidden" class="price" id="price@{{product['id']}}" value="@{{product['price']}}">
							<input type="hidden" class="cover_image" id="cover_image@{{product['id']}}" value="@{{product['cover_image']}}">
							<input type="hidden" class="category_id" id="category_id@{{product['id']}}" value="@{{product['category_id']}}">
							<td class="cbx">
								<input type="checkbox" class="checkbox" id="checkbox@{{product['id']}}" value="@{{product['id']}}">
							</td>
							<td>@{{product['id']}}</td>
							<td>@{{product['title']}}</td>
							<td>@{{product['price']}}</td>
							<td class="qty">
								<input type="number" name="quantity" class="quantity" id="quantity@{{product['id']}}" ng-keyup="quantityNumber(product['id'])">
							</td>
							<td class="w_discount">
								<input type="number" name="discount" id="discount@{{product['id']}}" class="discount">
							</td>
						</tr>
					</tbody>
				</table>
				<!-- {{$products->links()}} -->
				<div>
					<ul class="pagination">
				        <li ng-show="currentPage != 1"><a href="" ng-click="getProducts(1)">«</a></li>
				        <li ng-show="currentPage != 1"><a href="" ng-click="getProducts(currentPage-1)">‹ Prev</a></li>
				        <li ng-repeat="i in range" ng-class="{active : currentPage == i}">
				            <a href="" ng-click="getProducts(i)">@{{i}}</a>
				        </li>
				        <li ng-show="currentPage != totalPages"><a href="" ng-click="getProducts(currentPage+1)">Next ›</a></li>
				        <li ng-show="currentPage != totalPages"><a href="" ng-click="getProducts(totalPages)">»</a></li>
				    </ul>
			        <!-- <posts-pagination></posts-pagination> -->
			     </div>
			</div>
			<input type="hidden" name="data_product_id[]" class="data_product_id" value="">
			<input type="hidden" name="data_quantity[]" class="data_quantity" value="">

			<input type="hidden" name="data_title[]" class="data_title" value="">
			<input type="hidden" name="data_slug[]" class="data_slug" value="">
			<input type="hidden" name="data_price[]" class="data_price" value="">
			<input type="hidden" name="data_cover_image[]" class="data_cover_image" value="">
			<input type="hidden" name="data_category_id[]" class="data_category_id" value="">
			<input type="hidden" name="data_discount[]" class="data_discount" value="">
		</div>
		@csrf
	</form>
</div>
<script type="text/javascript">
var admin = angular.module("admin",[]);
admin.controller("flashSaleCtrl",function($scope,$http){
	// var url = window.location.protocol + "//" + window.location.hostname + '/CodeHopLongTech';
	var url = window.location.protocol + "//" + window.location.hostname;

	var data_product_id = [];
	var data_quantity = [];
	var data_title = [];
	var data_slug = [];
	var data_price = [];
	var data_cover_image = [];
	var data_category_id = [];
	var data_discount = [];

	$('.quantity').val('');
	// $('.discount').val('');
	$('.checkbox').prop('checked', false);
	$('.checkbox').attr('disabled', true);

	$scope.posts = [];
	$scope.totalPages = 0;
	$scope.currentPage = 1;
	$scope.range = [];
		
	$scope.getProducts = function(pageNumber,title=''){

    if(pageNumber===undefined){
      pageNumber = '1';
    }
    $http.get(url + '/api/getProductFlashSale/?page='+pageNumber+'?title='+title).then(function(response) {
	      $scope.products        = response.data.data;
	      $scope.totalPages   = response.data.last_page;
	      $scope.currentPage  = response.data.current_page;
	      // Pagination Range
	      var pages = [];

	      for(var i=1;i<=response.data.last_page;i++) {
	      	if(i <= $scope.currentPage + 3 && i>= $scope.currentPage -3){
	        	pages.push(i);
	      	}
	      }

	      $scope.range = pages; 
	    });

	};



	$scope.quantityNumber = function(productId){

		var product_id = $('#checkbox'+productId).val();
		var quantity = $('#quantity'+productId);
		var title = $('#title'+productId);
		var slug = $('#slug'+productId);
		var price = $('#price'+productId);
		var cover_image = $('#cover_image'+productId);
		var category_id = $('#category_id'+productId);
		var discount = $('#discount'+productId);

		if ($('#quantity'+productId).val() != '') {
			($('#checkbox'+productId).removeAttr('disabled'));
			// checkbox.attr('disabled', false);
		}
		else {
			($('#checkbox'+productId).attr('disabled','disabled'));
			// checkbox.attr('disabled', true);
		}
		// todo
		$('#checkbox'+productId).click(function(){
			if($('#checkbox'+productId).is(':checked')){
				data_product_id.push(product_id);
		        data_quantity.push(quantity.val());
		        data_title.push(title.val());
		        data_slug.push(slug.val());
		        data_price.push(price.val());
		        data_cover_image.push(cover_image.val());
		        data_category_id.push(category_id.val());
		        data_discount.push(discount.val());
		        console.log(discount.val());
		        $('.data_product_id').val(data_product_id);
		        $('.data_quantity').val(data_quantity);
		        $('.data_title').val(data_title);
		        $('.data_slug').val(data_slug);
		        $('.data_price').val(data_price);
		        $('.data_cover_image').val(data_cover_image);
		        $('.data_category_id').val(data_category_id);
		        $('.data_discount').val(data_discount);
			}
			else{
				data_product_id.splice($.inArray(product_id, data_product_id),1);
		    	data_quantity.splice($.inArray(quantity.val(), data_quantity),1);
		    	data_title.splice($.inArray(title.val(), data_title),1);
		    	data_slug.splice($.inArray(slug.val(), data_slug),1);
		    	data_price.splice($.inArray(price.val(), data_price),1);
		    	data_cover_image.splice($.inArray(cover_image.val(), data_cover_image),1);
		    	data_category_id.splice($.inArray(category_id.val(), data_category_id),1);
		    	data_discount.splice($.inArray(discount.val(), data_discount),1);

		    	$('.data_product_id').val(data_product_id);
		    	$('.data_quantity').val(data_quantity);
		    	$('.data_title').val(data_title);
		    	$('.data_slug').val(data_slug);
		    	$('.data_price').val(data_price);
		    	$('.data_cover_image').val(data_cover_image);
		    	$('.data_category_id').val(data_category_id);
		    	$('.data_discount').val(data_discount);
			}
		});
			
		
	}

	$scope.search = function(){
		var title = $("#title").val();
		$http.get(url + '/api/getProductFlashSale?title='+title).then(function(res){
			$scope.products = res.data.data;
		});
		// var pageNumber = 1;
		// $scope.getProducts(pageNumber,title);
	}

	// $http.get(url + '/api/getProductFlashSale/').then(function(res){
	// 	$scope.products = res.data.data;
	// 	console.log($scope.getProductFlashSale);
	// });

	// edit flash sale
	$scope.getEditProducts = function(pageNumber,title=''){

    if(pageNumber===undefined){
      pageNumber = '1';
    }
    $http.get(url + '/api/getProductFlashSale/?page='+pageNumber+'?title='+title).then(function(response) {
	      $scope.products        = response.data.data;
	      $scope.totalPages   = response.data.last_page;
	      $scope.currentPage  = response.data.current_page;

	      // get current product flash sale
	      var flash_sale_id = $('#flash_sale_id').val();
	      $http.get(url + '/api/getEditProductFlashSale/?flash_sale_id='+flash_sale_id).then(function(res){
				$scope.currentProducts = res.data;
				for(var i = 0; i < $scope.products.length; i++) { 
					if ($scope.products[i]) {
				      	for(var j = 0; j < $scope.currentProducts.length; j++) {
				      		if($scope.currentProducts[j]){
				      			// console.log($scope.currentProducts[j].id);
				      			if($scope.products[i].id == $scope.currentProducts[j].product_id) {
				      				$scope.products[i].quantity = $scope.currentProducts[j].quantity > 0 ? $scope.currentProducts[j].quantity : 0;
				      				$scope.products[i].discount = $scope.currentProducts[j].discount > 0 ? $scope.currentProducts[j].discount : '';
				      				$scope.products[i].checked = $scope.currentProducts[j].quantity > 0 ? 1 : 0;
					      			// todo
					      		}
				      		}
				      	}
					}
			      }

		   });
	      // console.log($scope.products);

	      // Pagination Range
	      var pages = [];

	      for(var i=1;i<=response.data.last_page;i++) {
	      	if(i <= $scope.currentPage + 3 && i>= $scope.currentPage -3){
	        	pages.push(i);
	      	}
	      }

	      $scope.range = pages; 
	    });
		// console.log($(".cbx1").children('.checked').prop('checked', true));
		// ($(".cbx1").children('.checked').prop('checked', true));
	};
	// edit flash sale
})

</script>
@stop()
