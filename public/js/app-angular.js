// var app = angular.module('app',[]);
// alert('dsadsa');
// app.controller('AdminController', function($scope,$http){
// 	$scope.name='dsadas';
// 	function get_prs(){
// 		$http.get('http://localhost/codehoplongtech_1/api/productj').then(function(res){
// 			$scope.prs = res.data;
// 			console.log($scope.prs);
// 		})
// 	}
// 	get_prs();

// })
var myapp = angular.module("myApp",['angularUtils.directives.dirPagination']);
myapp.controller("checkboxCtrl",function($scope,$http){
	$scope.name="heloo";
	function get_prs(){
		$http.get('https://hoplongtech.com/api/filter').then(function(res){
			$scope.pros = res.data.data;
			// console.log($scope.pros);
		})
	}

	get_prs();
	$scope.selection = function(ffff){
		$http.get('https://hoplongtech.com/api/filter/' + ffff).then(function(res){
			$scope.pros = res.data;
			// console.log($scope.pros);
		})
	}

})