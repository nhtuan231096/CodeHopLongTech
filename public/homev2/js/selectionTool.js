var selectionTool = angular.module("selectionTool", []);
selectionTool.controller("selectionToolCtrl", function ($scope, $http) {
    var url = window.location.protocol + "//" + window.location.hostname + '/CodeHopLongTech';
    // var url = window.location.protocol + "//" + window.location.hostname;
    $scope.getSubCategory = function (category_id) {
        $http.get(url + '/api/selectionTool/getSubCategory/' + category_id).then(function (response) {
            $scope.subCategory = response.data;
        });
    }
    var array_filter = [];
    $scope.partners_id = '';

    $scope.getProductsFilterPartner = function (partner_id) {
        $scope.partners_id = partner_id;
        $scope.getProductsFilter('', '', partner_id);
    }

    $scope.getProductsFilter = function (name_filter, value_filter, partner_id = '') {
        var data = {
            name_filter: name_filter,
            value_filter: value_filter
        }

        var checkExistFilter = $scope.checkExistFilter(array_filter, data);

        if (checkExistFilter != true) {
            array_filter.push(data);
        }

        // console.log(array_filter);

        var data_filter = {
            data: array_filter,
            partner_id: $scope.partners_id
        }
        $("#loader").addClass('loader');
        $http.post(url + '/api/selectionTool/getProductsFilter', data_filter).then(function (response) {
            $scope.products = response.data;
            console.log($scope.products);
            $("#loader").removeClass('loader');
            $(".filter-product").removeClass('hidden');
        });
    }

    $scope.checkExistFilter = function (array_filter, data) {
        for (var i = 0; i < array_filter.length; i++) {
            if (array_filter[i]['name_filter'] == data['name_filter']) {
                array_filter[i]['value_filter'] = data['value_filter'];
                return true;
            }
        }
        return false;
    }

    $scope.getFilterByCategoryId = function (category_id) {
        var data = {
            category_id: category_id
        }
        $("#loader").addClass('loader');
        $http.post(url + '/api/selectionTool/getDataFilterByCateId', data).then(function (response) {
            $scope.dataFilter = response.data;
            console.log($scope.dataFilter);
            $("#loader").removeClass('loader');
            $(".filter-product").removeClass('hidden');
        });
    }

})
