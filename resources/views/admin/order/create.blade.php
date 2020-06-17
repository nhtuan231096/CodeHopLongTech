@extends('layouts.admin')
@section('main')
@section('title','Tạo đơn hàng')
@section('links','order')
<style type="text/css">
    .pagination li {
        padding: 0px 5px;
        border-right: none;
    }
</style>
<div class="panel panel-info" ng-controller="orderCtrl">
    <div class="panel-heading">
        <h3 class="panel-title">
            @if(!isset($dataCustomer->id))
            <form action="" method="POST" role="form">
                <legend>Khách hàng</legend>
                <div class="form-group">
                    <select class="form-control" id="customer_type">
                        <option value="0">Chưa có tài khoản</option>
                        <option value="1">Đã có tài khoản</option>
                    </select>
                </div>
                @csrf

                <div id="select-customer">
                    <legend>Chọn khách hàng</legend>
                    <div class="form-group">
                        <select name="customer" id="input" class="form-control" required="required">
                            @foreach($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->email}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">Tiếp tục</button>
            </form>
            @endif

            @if(isset($dataCustomer->id))
            <div class="clearfix"></div>
            <a style="color: #fff;margin-bottom: 10px" class="btn btn-primary" data-toggle="modal" href='#modal-id' ng-click="getProducts()">Thêm sản phẩm vào giỏ hàng</a>
            <div class="panel panel-info">
                
                <legend style="margin: 15px">Sản phẩm được chọn</legend>

                <div class="panel-body">
                    <div class="alert alert-warning" id="alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Không có sản phẩm trong giỏ hàng, hãy thêm sản phẩm</strong>
                    </div>
                    <table class="table table-hover" style="margin-top: 15px;" ng-if="itemProducts != null">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="product in itemProducts">
                                <td id="cart-id-product@{{product['id']}}">@{{product['id']}}</td>
                                <td>@{{product['title']}}</td>
                                <td>
                                    <input type="number" name="price" ng-change="updateCart(price,quantity,product)" ng-model-options='{ debounce: 800 }' ng-model="price" required placeholder="@{{product['price'] > 0 ? product['price'] : 'Liên hệ'}}" value="@{{product['price'] > 0 ? product['price'] : 'Liên hệ'}}">
                                </td>
                                <td>
                                    <input type="number" name="quantity" required ng-change="updateCart(price,quantity,product)" ng-model-options='{ debounce: 800 }' ng-model="quantity" value="1">
                                </td>
                                <td>
                                    <a href="" class="fa fa-remove btn" ng-click="removeItem(product['id'])"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>       
                    <!-- <a href="" ng-click="updateCart()" class="btn btn-md btn-primary pull-right" id="btn-update-item">Cập nhật giỏ hàng</a> -->
                </div>
            </div>
            
            <div class="modal fade" id="modal-id">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin:10px">&times;</button>
                        <legend style="margin: 15px; padding-bottom: 10px">Thêm sản phẩm vào giỏ hàng</legend>
                        <div class="modal-body">
                            <form action="" method="POST" class="form-inline" role="form">

                                <div class="form-group">
                                    <label class="sr-only" for="">label</label>
                                    <input name="title" ng-model="title" class="form-control" placeholder="Nhập tên sản phẩm">
                                </div>



                                <button type="button" ng-click="getProducts(currentPage,title)" class="btn btn-primary">Tìm kiếm</button>
                            </form>
                            <table class="table table-hover" style="margin-top: 15px;">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
                                        <th>Sản phẩm</th>
                                        <th>Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="product in products" id="@{{product['id']}}">
                                        <td>
                                            <i title="Thêm sản phẩm vào giỏ hàng" class="fa fa-plus btn" ng-click="addItem(product)"></i>
                                        </td>
                                        <td>@{{product['id']}}</td>
                                        <td>@{{product['title']}}</td>
                                        <td>@{{product['price'] > 0 ? product['price'] : 'Liên hệ'}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div>
                                <ul class="pagination">
                                    <li ng-show="currentPage != 1"><a href="" ng-click="getProducts(1)">«</a></li>
                                    <li ng-show="currentPage != 1"><a href="" ng-click="getProducts(currentPage-1)">‹ Prev</a></li>
                                    <li ng-repeat="i in range" ng-class="{active : currentPage == i}">
                                        <a href="" ng-click="getProducts(i)">@{{i}}</a>
                                    </li>
                                    <li ng-show="currentPage != totalPages"><a href="" ng-click="getProducts(currentPage+1)">Next ›</a></li>
                                    <li ng-show="currentPage != totalPages"><a href="" ng-click="getProducts(totalPages)">»</a></li>
                                </ul>
                                <posts-pagination></posts-pagination>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-info" style="margin-top: 15px">
                <div class="panel-body">
                    <form id="form-order" action="" method="POST" role="form">
                        <legend>Thông tin đơn hàng</legend>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Khách hàng:</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{isset($dataCustomer->name) ? $dataCustomer->name : ''}}" placeholder="" required>
                                    <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{isset($dataCustomer->id) ? $dataCustomer->id : ''}}" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{isset($dataCustomer->email) ? $dataCustomer->email : ''}}" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Số điện thoại:</label>
                                    <input type="number" name="phone" id="phone" class="form-control" value="{{isset($dataCustomer->phone) ? $dataCustomer->phone : ''}}" placeholder="" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Địa chỉ nhận hàng:</label>
                                    <input type="text" name="address" id="address" class="form-control" value="{{isset($dataCustomer->address) ? $dataCustomer->address : ''}}" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Thành phố:</label>
                                    <select ng-change="updateTotalPrice()" ng-model="city" id="city" class="form-control" required>
                                        <option value="">Chọn thành phố</option>
                                        @foreach($cart->city() as $k=>$itemCity)
                                        <option value="{{$k}}">{{$itemCity}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <legend>Vận chuyển và thanh toán</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group required">
                                    <label>Hình thức giao hàng</label>
                                    <select name="shipping_method" id="input" ng-model="shipping_method" class="form-control class_shipping_method" required>
                                        <option value="">Hình thức giao hàng</option>
                                        @foreach($cart->shipping_method() as $key => $item)
                                        <option value="{{$item}}">{{$item}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group required">
                                    <label>Hình thức thanh toán</label>
                                    <select name="payment_method" ng-change="updateTotalPrice()" ng-model="input_payment_method" id="input_payment_method" class="form-control" required>
                                        <option value="">Hình thức thanh toán</option>
                                        @foreach($cart->payment_method() as $key => $item)
                                        <option value="{{$item}}">{{$item}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>Tiền hàng: 
                                                <span ng-bind="total">0</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Phí vận chuyển: 
                                                <span ng-bind="shipping_fee">0</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Phí ship COD:
                                                <span ng-bind="ship_cod">0</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tổng tiền:
                                                <span ng-bind="total_price">0</span>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <input type="hidden" id="base_total" name="base_total" ng-model="base_total">
                        <a href="" ng-click="createOrder()" class="btn btn-md btn-primary pull-right">Tạo đơn hàng</a>
                    </form>
                </div>
            </div>
            @endif
        </h3>
    </div>
</div>
<script type="text/javascript" src="{{url('public/js/admin/orderCtrl.js')}}"></script>
@stop()
