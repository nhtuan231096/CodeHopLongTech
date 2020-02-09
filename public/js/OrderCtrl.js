(function(){                                                                     
   var myapp = angular.module("myApp",[]);
	myapp.controller("CtrlOrder",function($scope,$http){
		$scope.detaiOrder = function($order_id){
			// $url = window.location.protocol + "//" + window.location.hostname;
			$url = window.location.protocol + "//" + window.location.hostname + "/CodeHopLongTech";

			// $http.get($url + '/CodeHopLongTech/api/getOrderDetail/' + $order_id).then(function(res){
			// 	$scope.detail_order = res.data;
			// });	
			// $http.get($url + '/CodeHopLongTech/api/getOrder/' + $order_id).then(function(res){
			// 	$scope.orders = res.data;
			// });
			$http.get($url + '/api/getOrderDetail/' + $order_id).then(function(res){
				$scope.detail_order = res.data;
			});	
			$http.get($url + '/api/getOrder/' + $order_id).then(function(res){
				$scope.orders = res.data;
			});
		}

	})
})();
