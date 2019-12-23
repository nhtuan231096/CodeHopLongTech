var admin = angular.module("admin",[]);
admin.controller("flashSaleCtrl",function($scope,$http){
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
    $http.get(url + '/CodeHopLongTech/api/getProductFlashSale/?page='+pageNumber+'?title='+title).then(function(response) {
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
		$http.get(url + '/CodeHopLongTech/api/getProductFlashSale?title='+title).then(function(res){
			$scope.products = res.data.data;
		});
		// var pageNumber = 1;
		// $scope.getProducts(pageNumber,title);
	}

	// $http.get(url + '/CodeHopLongTech/api/getProductFlashSale/').then(function(res){
	// 	$scope.products = res.data.data;
	// 	console.log($scope.getProductFlashSale);
	// });

	// edit flash sale
	$scope.getEditProducts = function(pageNumber,title=''){

    if(pageNumber===undefined){
      pageNumber = '1';
    }
    $http.get(url + '/CodeHopLongTech/api/getProductFlashSale/?page='+pageNumber+'?title='+title).then(function(response) {
	      $scope.products        = response.data.data;
	      $scope.totalPages   = response.data.last_page;
	      $scope.currentPage  = response.data.current_page;

	      // get current product flash sale
	      var flash_sale_id = $('#flash_sale_id').val();
	      $http.get(url + '/CodeHopLongTech/api/getEditProductFlashSale/?flash_sale_id='+flash_sale_id).then(function(res){
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
