/**
*  Module
*
* Description
*/
var app = angular.module('admin', ['angularUtils.directives.dirPagination']);
app.directive('fileModel', ['$parse', function ($parse) {
    return {
    restrict: 'A',
    link: function(scope, element, attrs) {
        var model = $parse(attrs.fileModel);
        var modelSetter = model.assign;

        element.bind('change', function(){
            scope.$apply(function(){
                modelSetter(scope, element[0].files[0]);
				console.log(element[0].files[0]);
            });
        });
    }
   };
}]);
app.service('fileUpload', ['$http', function ($http) {
// alert('aa');
    this.uploadFileToUrl = function(file, uploadUrl, name){
         console.log('dsa');
         var fd = new FormData();
         fd.append('file', file);
         fd.append('name', name);
         $http.post(uploadUrl, fd, {
             transformRequest: angular.identity,
             headers: {'Content-Type': undefined,'Process-Data': false}
         })
         .success(function(){
            console.log("Success");
         })
         .error(function(){
            console.log("Success");
         });
     }
 }]);

app.controller('AdminController', function(fileUpload,$scope,$http){
	alert('zxc');
		// dữ liệu created_by Json
		$http.get('http://madshop.top/api/createdby').then(function(res){
			// console.log(res.data);
			$scope.createdby = res.data;
		})
		// dữ liệu category Json
		$http.get('http://madshop.top/api/category').then(function(res){
			// console.log(res.data);
			$scope.category = res.data;
		})

	// $scope.name="dmmm";
	function get_prs(){
		$http.get('http://madshop.top/api/productj')
		.then(function(response){
			$scope.products=response.data.data;
			// console.log(response.data.data);
		});
	}
	get_prs();
	$scope.add_pro=[];
	$scope.add_pro = function(){
		// alert("dsahdas");
		// var data_form = $('#formAdd').serializeArray();
		var url = $('#formDemo').attr('action');

		// var file = $scope.myFile;
        var text = $scope.name;
        // fileUpload.uploadFileToUrl(file, url, text);
        // console.log(fileUpload);
		var title = $('#title').val();
		var slug = $('#slug').val();
		var short_description = $('#short_description').val();
		var contents = $('#contents').val();
		var capacity = $('#capacity').val();
		var feature = $('#feature').val();
		var specifications = $('#specifications').val();
		var dimension = $('#dimension').val();
		var catalog = $('#catalog').val();
		var created_by = $('#created_by').val();
		var created_at = $('#created_at').val();
		var updated_at = $('#updated_at').val();
		var modified_by = $('#modified_by').val();
		var modified_date = $('#modified_date').val();
		var sorder = $('#sorder').val();
		var file = $scope.myFile;
		// console.log(cover_image);
		var meta_title = $('#meta_title').val();
		var meta_description = $('#meta_description').val();
		var meta_keywords = $('#meta_keywords').val();
		var status = $('#status').val();
		var comment = $('#comment').val();
		var price = $('#price').val();
		var warranty = $('#warranty').val();
		var promotion = $('#promotion').val();
		var product_code = $('#product_code').val();
		var download_id = $('#download_id').val();
		var is_best_seller = $('#is_best_seller').val();
		var is_promotion = $('#is_promotion').val();
		var is_new_product = $('#is_new_product').val();
		var special_product = $('#special_product').val();
		var category_id = $('#category_id').val();
		// console.log($scope.title);
			console.log(created_by);
		$http.post(url,{
			title:$scope.title,
			slug:$scope.slug,
			short_description:$scope.short_description,
			contents:$scope.contents,
			capacity:$scope.capacity,
			feature:$scope.feature,
			specifications:$scope.specifications,
			dimension:$scope.dimension,
			catalog:$scope.catalog,
			created_by:created_by,
			created_at:$scope.created_at,
			updated_at:$scope.updated_at,
			modified_by:$scope.modified_by,
			modified_date:$scope.modified_date,
			sorder:$scope.sorder,
			cover_image:$scope.text,
			meta_title:$scope.meta_title,
			meta_description:$scope.meta_description,
			meta_keywords:$scope.meta_keywords,
			status:$scope.status,
			comment:$scope.comment,
			price:$scope.price,
			category_id:$scope.category_id,
			warranty:$scope.warranty,
			promotion:$scope.promotion,
			product_code:$scope.product_code,
			download_id:$scope.download_id,
			is_best_seller:$scope.is_best_seller,
			is_promotion:$scope.is_promotion,
			is_new_product:$scope.is_new_product,
			special_product:$scope.special_product
		}).then(function(res){
            console.log(res.data);
			if(res.data.errors){
				// console.log(res.data.errors);
            toastr.error('Validation error!', 'Error', {timeOut: 5000});
            for(var er in res.data.errors){
                $('.error_'+er).html(res.errors[er][0]);
                $('.error_'+er).removeClass('hidden');
            }
           }
           else
           	{
			get_prs();
			toastr.success('Tạo mới thành công!', 'OK', {timeOut: 5000});
			// console.log(res);
			}
		});
		
	}
	$scope.del_pro = function(pro_id){
		$http.get('http://madshop.top/admin/product-del/'+pro_id).then(function(res){
			get_prs();
			toastr.success('DElete ok!', 'ok', {timeOut: 5000});
		});
	}
	$scope.edit_pro = function(pro_id){
		// alert(pro_id);
		$http.get('http://madshop.top/admin/product-edit/'+pro_id).then(function(res){
			$scope.editpr = res.data;
			console.log($scope.editpr);
		});
	}
	$scope.update_pro = function(pro_id){
		// alert(pro_id);
		// $scope.editpr = res.data;
		console.log(pro_id);
		var data_form = $('#formEdit').serializeArray();
		var form_action = ('http://madshop.top/admin/product-update/'+pro_id);
		var title = $('#title').val();
		var slug = $('#slug').val();
		var category_id = $('#category_id').val();
		// console.log(data_form);
		$http.post(form_action,{
			title:$scope.editpr.title,
			slug:$scope.editpr.slug,
			category_id:$scope.editpr.category_id
		}).then(function(res){
			console.log(res);
			get_prs();
			$(".modal").modal('hide');
        	toastr.success('Updated Thành công.', 'Success Alert', {timeOut: 5000});
			// console.log(data_form);
			// console.log(res);
		})
		// $http({
		// 	method:'POST',
		// 	url:form_action,
		// 	data:data_form
		// }).then(function(res){
		// 	// console.log(data);
		// 	get_prs();
		// 	$(".modal").modal('hide');
  //       	toastr.success('Updated Thành công.', 'Success Alert', {timeOut: 5000});
		// 	// console.log(data_form);
		// })
		// console.log(data_form);
		// get_prs();
	}


	// $scope.datas=[];
	// if (localStorage.getItem('list-pros')) {
	// 	$scope.datas = angular.fromJson(localStorage.getItem('list-pros'));
	// }
	// $scope.add_pro=function(){
	// 	$scope.datas.push($scope.pros);
	// 	$scope.pros=null;
	// 	localStorage.setItem('list-pros',angular.toJson($scope.datas));
	// 	console.log($scope.datas);
	// }
});
