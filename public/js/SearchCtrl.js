var myapp = angular.module("my_app",[]);

$url = window.location.protocol + "//" + window.location.hostname;
myapp.controller("SearchCtrl",function($scope,$http){
	$(".search-tab").hide();
	$scope.close_tab = function(){
		$(".search-tab").hide();
	}

    $scope.productSearch = function(product_search){
    	// console.log(product_search);
    	$(".search-tab").show();
    	if(product_search != ''){
    		// $http.get($url + '/CodeHopLongTech/api/autoSearch/' + product_search).then(function(res){
    		$http.get($url + '/api/autoSearch/' + product_search).then(function(res){
	    		$scope.res_product_search = res.data.data;
			});	
    	}
    	if(product_search == ''){
    		$scope.res_product_search = [];
    	}
	    	
    };
})


