var selectionTool = angular.module("selectionTool",[]);
selectionTool.controller("selectionToolCtrl",function($scope,$http){
	var url = window.location.protocol + "//" + window.location.hostname + '/CodeHopLongTech';
	// var url = window.location.protocol + "//" + window.location.hostname;
	$scope.getSubCategory = function(category_id){
		$http.get(url + '/api/selectionTool/getSubCategory/' + category_id).then(function(response) {
	      	$scope.subCategory = response.data;
	    });
	}

	$scope.partners_id = '';

	$scope.getProductsByPartners = function(partners_id, keyword_filter = '', type = ''){
		var data = {
			partners_id : partners_id,
			keyword_filter : keyword_filter,
			type : type,
		}
        $("#loader").addClass('loader');
		$http.post(url + '/api/selectionTool/getProductsByPartnersId', data).then(function(response) {
			console.log(response.data);
	      	$scope.products = response.data.data;
	      	$scope.partners_id = partners_id;
	      	$("#loader").removeClass('loader');
	      	$(".filter-product").removeClass('hidden');
	    });
	}
})
