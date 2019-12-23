@extends('layouts.admin')
@section('title','Flash Sale Management')
@section('links','Sản phẩm')    
@section('main')
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="http://benalman.com/code/projects/jquery-throttle-debounce/jquery.ba-throttle-debounce.js"></script>
<script src="{{url('public/homev2/js/flashSaleCtrl.js')}}"></script>
<div class="wrapp"  ng-controller="flashSaleCtrl">

<form action="" method="POST" role="form">
	<legend>Chi tiết flash sale</legend>

	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
				<label for="">Tiêu đề</label>
				<input type="text" class="form-control" name="title" placeholder="Nhập tiêu đề" value="{{$datas->title}}">
			</div>

			<div class="form-group">
				<label for="">Ngày kết thúc</label>
				<input type="" class="form-control" name="end_time" value="{{$datas->end_time}}">
			</div>

			<div class="form-group">
				<label for="">Ảnh đại diện</label>
				<div class="clearfix"></div>
				<img src="{{url('uploads/flash_sale')}}/{{$datas->cover_image}}" width="100" alt="">
				<input type="file" class="form-control" name="file_upload" style="padding: 0">
			</div>
			
			<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
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
				<tbody ng-init="getEditProducts()">
					<input type="hidden" id='flash_sale_id' value="{{$datas->id}}">
					<tr ng-repeat="product in products">
						<input type="hidden" class="title" id="title@{{product['id']}}" value="@{{product['title']}}">
						<input type="hidden" class="slug" id="slug@{{product['id']}}" value="@{{product['slug']}}">
						<input type="hidden" class="price" id="price@{{product['id']}}" value="@{{product['price']}}">
						<input type="hidden" class="cover_image" id="cover_image@{{product['id']}}" value="@{{product['cover_image']}}">
						<input type="hidden" class="category_id" id="category_id@{{product['id']}}" value="@{{product['category_id']}}">
						<td class="cbx cbx@{{product['checked']}}">
							<input type="checkbox" class="checkbox" id="checkbox@{{product['id']}}" value="@{{product['id']}}">
						</td>
						<td>@{{product['id']}}</td>
						<td>@{{product['title']}}</td>
						<td>@{{product['price']}}</td>
						<td class="qty">
							<!-- <input type="number" name="quantity" class="quantity" id="quantity@{{product['id']}}" ng-keyup="quantityNumber(product['id'])" value="@{{product['quantity']}}"> -->
							<input type="number" id="quantity@{{product['id']}}" ng-keyup="quantityNumber(product['id'])" value="@{{product['quantity']}}">
						</td>
						<td class="w_discount">
							<!-- <input type="number" name="discount"  class="discount" value="@{{product['discount']}}"> -->
							<input type="number" id="discount@{{product['id']}}" name="editDiscount" value="@{{product['discount']}}">
						</td>
					</tr>
				</tbody>
			</table>
			<!-- {{$products->links()}} -->
			<div>
				<ul class="pagination">
			        <li ng-show="currentPage != 1"><a href="" ng-click="getEditProducts(1)">«</a></li>
			        <li ng-show="currentPage != 1"><a href="" ng-click="getEditProducts(currentPage-1)">‹ Prev</a></li>
			        <li ng-repeat="i in range" ng-class="{active : currentPage == i}">
			            <a href="" ng-click="getEditProducts(i)">@{{i}}</a>
			        </li>
			        <li ng-show="currentPage != totalPages"><a href="" ng-click="getEditProducts(currentPage+1)">Next ›</a></li>
			        <li ng-show="currentPage != totalPages"><a href="" ng-click="getEditProducts(totalPages)">»</a></li>
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

	var data_product_id = [];
	var data_quantity = [];
	var data_title = [];
	var data_slug = [];
	var data_price = [];
	var data_cover_image = [];
	var data_category_id = [];
	var data_discount = [];

	$('.quantity').val('');
	$('.discount').val('');
	$('.checkbox').prop('checked', false);
	$('.checkbox').attr('disabled', true);

	$('.checkbox').change(function(){

	    var product_id = $(this).val();
		var quantity = $(this).parent().parent().children('.qty').children('.quantity');
		var title = $(this).parent().parent().children('.title');
		var slug = $(this).parent().parent().children('.slug');
		var price = $(this).parent().parent().children('.price');
		var cover_image = $(this).parent().parent().children('.cover_image');
		var category_id = $(this).parent().parent().children('.category_id');
		var discount = $(this).parent().parent().children('.w_discount').children('.discount');

		if (this.checked) {

	        data_product_id.push(product_id);
	        data_quantity.push(quantity.val());
	        data_title.push(title.val());
	        data_slug.push(slug.val());
	        data_price.push(price.val());
	        data_cover_image.push(cover_image.val());
	        data_category_id.push(category_id.val());
	        data_discount.push(discount.val());

	        $('.data_product_id').val(data_product_id);
	        $('.data_quantity').val(data_quantity);
	        $('.data_title').val(data_title);
	        $('.data_slug').val(data_slug);
	        $('.data_price').val(data_price);
	        $('.data_cover_image').val(data_cover_image);
	        $('.data_category_id').val(data_category_id);
	        $('.data_discount').val(data_discount);
	    
	    } else {
	    	
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


	$('.quantity').keyup($.debounce(700, function(e){
		var checkbox = $(this).parent().parent().children('.cbx').children('.checkbox');
		if ($('.quantity').val() != '') {
			checkbox.attr('disabled', false);
		}
		else {
			checkbox.attr('disabled', true);
		}
	}));
</script>
@stop()
