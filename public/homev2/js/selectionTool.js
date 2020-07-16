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
    $scope.array_filter = [];

    $scope.partners_id = '';
    $scope.totalPages = 0;
    $scope.currentPage = 1;

    $scope.name_filter = '';
    $scope.value_filter = '';
    $scope.partner_id = '';

    $scope.getProductsFilterPartner = function (partner_id) {
        $scope.partners_id = partner_id;
        $scope.getProductsFilter('', '', partner_id);
    }

    $scope.getProductsFilter = function (name_filter, value_filter, partner_id = '', pageNumber, is_pagination = 0) {
        $scope.name_filter = name_filter;
        $scope.value_filter = value_filter;
        $scope.partner_id = partner_id;

        var data = {
            name_filter: name_filter,
            value_filter: value_filter,
            partner_id: partner_id
        }

        if(is_pagination == 0) {
            var checkExistFilter = $scope.checkExistFilter(array_filter, data);
        }
        // console.log('array_filter', array_filter);
        // console.log('data', data);
        if (checkExistFilter != true) {
            array_filter.push(data);
        }

        if (pageNumber === undefined) {
            pageNumber = '1';
        }

        var data_filter = {
            data: array_filter,
            partner_id: $scope.partners_id
        }
        $("#loader").addClass('loader');
        $http.post(url + '/api/selectionTool/getProductsFilter?page=' + pageNumber, data_filter).then(function (response) {
            $scope.products = response.data.data;
            $scope.totalPages = response.data.last_page;
            $scope.currentPage = response.data.current_page;
            // Pagination Range
            var pages = [];

            for (var i = 1; i <= response.data.last_page; i++) {
                if (i <= $scope.currentPage + 3 && i >= $scope.currentPage - 3) {
                    pages.push(i);
                }
            }
            $scope.range = pages;

            // console.log($scope.products);

            $("#loader").removeClass('loader');
            $(".filter-product").removeClass('hidden');
            $scope.array_filter = array_filter;
        });
    }

    $scope.checkExistFilter = function (array_filter, data) {
        // get add class filter active

        // var idValueFilter = data['name_filter'].replace(' ', '')+data['value_filter'].replace(' ', '');
        // var myEl = angular.element( document.querySelector( '#'+idValueFilter ) );
        // myEl.addClass('filter-active');

        for (var i = 0; i < array_filter.length; i++) {
            if (array_filter[i]['name_filter'] == data['name_filter'] && array_filter[i]['value_filter'] == data['value_filter'] && array_filter[i]['partner_id'] == data['partner_id']) {
                $scope.removeItemFilter(data['name_filter']);
                return true;
            }
            if (array_filter[i]['name_filter'] == data['name_filter']) {
                array_filter[i]['value_filter'] = data['value_filter'];
                return true;
            }
        }

        return false;
    }

    $scope.getFilterByCategoryId = function (category_id) {
        $scope.array_filter = [];
        array_filter = [];
        var data = {
            category_id: category_id
        }
        $("#loader").addClass('loader');
        $http.post(url + '/api/selectionTool/getDataFilterByCateId', data).then(function (response) {
            $scope.dataFilter = response.data;
            $("#loader").removeClass('loader');
            $(".filter-product").removeClass('hidden');
        });
    }

    $scope.removeItemFilter = function (nameItemArr) {
        for (var i = 0; i < array_filter.length; i++) {
            if (array_filter[i].name_filter == nameItemArr) {
                array_filter.splice(i, 1);
                break;
            }
        }
        $scope.array_filter = array_filter;
        $scope.loadProductsFilter(array_filter);
    }

    $scope.loadProductsFilter = function (array_filter, pageNumber) {
        if (pageNumber === undefined) {
            pageNumber = '1';
        }
        var data_filter = {
            data: array_filter,
            partner_id: $scope.partners_id
        }
        $("#loader").addClass('loader');
        $http.post(url + '/api/selectionTool/getProductsFilter?page=' + pageNumber, data_filter).then(function (response) {
            $scope.products = response.data.data;
            $scope.totalPages = response.data.last_page;
            $scope.currentPage = response.data.current_page;
            // Pagination Range
            var pages = [];

            for (var i = 1; i <= response.data.last_page; i++) {
                if (i <= $scope.currentPage + 3 && i >= $scope.currentPage - 3) {
                    pages.push(i);
                }
            }
            $scope.range = pages;
            $("#loader").removeClass('loader');
            $(".filter-product").removeClass('hidden');
        });
    }
})
