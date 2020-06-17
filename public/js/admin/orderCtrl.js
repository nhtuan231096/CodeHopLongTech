var admin = angular.module('admin',[]);
admin.controller('orderCtrl',function($scope,$http){

	// select type customer
	$('#select-customer').hide();
	$('#customer_type').change(function(){
		var type = $(this).val()
		if (type == 1) {
			$('#select-customer').show();
		}
		if (type == 0) {
			$('#select-customer').hide();
		}
	})
	// select type customer

	// var url = window.location.protocol + "//" + window.location.hostname;
	var url = window.location.protocol + "//" + window.location.hostname + "/CodeHopLongTech";

	$scope.posts = [];
	$scope.totalPages = 0;
	$scope.currentPage = 1;
	$scope.range = [];
	// item product to cart
	var products = [];

	$("#btn-update-item").css('display','none');

	$scope.getProducts = function(pageNumber,title){
	    if(pageNumber===undefined){
	      pageNumber = '1';
	    }
	    $http.get(url + '/api/getProducts?page='+pageNumber+'&title='+title).then(function(response) {
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

	$scope.addItem = function(product) {
		// thêm và ẩn product khi thêm vào giỏ 
		var id_product = '#' + product.id;
		$(id_product).css('display','none');

		products.push(product);
		$scope.itemProducts = products;
		
		//ẩn thông báo giỏ hàng trống
		$("#alert-warning").css('display','none');
		$("#btn-update-item").css('display','inline-block');
	}
	$scope.removeItem = function(product_id){
		removeItem(products, product_id);
		if (products.length == 0) {
			$("#alert-warning").css('display','inline-block');
			$("#btn-update-item").css('display','none');
		}

		// function remove item cart
		function removeItem(array, item){
		    for(var i in array){
				console.log(array[i]['id']);
		        if(array[i]['id']==item){
		            array.splice(i,1);
		            break;
		        }
		    }
		}
	}

	$scope.updateCart = function(price, quantity, product){
		if (price) {
			product.price = price;
		}
		if (quantity) {
			product.quantity = quantity;
		}
		$scope.updateTotalPrice();
	}

	$scope.updateTotalPrice = function(){
		var base_total = 0;
		var total = 0;
		angular.forEach(products, function(value, key){
			if(value.price > 0 && value.quantity > 0){
				total = parseInt(total) + ( parseInt(value.price) * parseInt(value.quantity) );
				$scope.total = total;
				$scope.base_total = total;
			}
	    });
	    
	    // shipping_fee
	    if(total >= 5000000){
	      $scope.shipping_fee = 0;
	      total = parseInt(total) + parseInt($scope.shipping_fee);
	    }
	    else {
	      if($scope.city == 0){
	      	$scope.shipping_fee = 30000;
	      	total = parseInt(total) + parseInt($scope.shipping_fee);
	      }
	      else {
	        $scope.shipping_fee = 20000;
	        total = parseInt(total) + parseInt($scope.shipping_fee);
	      }
	    }
	    // ship_cod
	    if($scope.input_payment_method == 'Thanh toán tiền mặt khi nhận hàng')
	    {
	        $scope.ship_cod = 15000;
	        total = parseInt(total) + parseInt($scope.ship_cod);
		} else {
		    $scope.ship_cod = 0;
		    total = parseInt(total) + parseInt($scope.ship_cod);
		}

		$scope.total_price = total;
	}

	$scope.createOrder = function(){
		var data = {
			products : products,
			user_id : $("#user_id").val(),
			name : $("#name").val(),
			email : $("#email").val(),
			phone : $("#phone").val(),
			address : $("#address").val(),
			base_total : $scope.base_total,
			total_price : $scope.total_price,
			ship_cod : $scope.ship_cod,
			shipping_fee : $scope.shipping_fee,
			shipping_method : $scope.shipping_method,
			payment_method : $scope.input_payment_method,
		};

		// validate form required 
		var form = document.getElementById('form-order');
        for(var i=0; i < form.elements.length; i++){
            if(form.elements[i].value === '' && form.elements[i].hasAttribute('required') || products == ''){
                    alert('Vui lòng nhập đủ thông tin!');
                    return false;
                }
            }

		var base_url = window.location.origin + '/CodeHopLongTech/';
		$http.post(base_url + 'api/createOrderApi' ,data).then(function(res){
			document.location.href = base_url + 'order_create';
		});
	}
});

