var app = angular.module('app',[]);
app.controller('BaoGiaCtrl',function($scope,$http){
	$scope.abc=function(){
		
		var SAN_PHAM=$('#SAN_PHAM').val();
		var MA_SAN_PHAM=$('#MA_SAN_PHAM').val();
		var dataKH={
			KHACH_HANG:$scope.KHACH_HANG,
			EMAIL:$scope.EMAIL,
			SAN_PHAM:SAN_PHAM,
			SO_DIEN_THOAI:$scope.SO_DIEN_THOAI,
			NOI_DUNG:$scope.NOI_DUNG,
			MA_SAN_PHAM:MA_SAN_PHAM
		}
		if($scope.KHACH_HANG!='' && $scope.KHACH_HANG!=null && $scope.EMAIL!='' && $scope.EMAIL!=null && $scope.SO_DIEN_THOAI!='' && $scope.SO_DIEN_THOAI!=null){
			alert('Bạn đã yêu cầu báo giá sản phẩm '+SAN_PHAM);
		}
		$http.post('https://hoplongtech.com/api/yeucaubaogia',dataKH).then(function(res){

		});
	}
	$scope.language=true;
});
