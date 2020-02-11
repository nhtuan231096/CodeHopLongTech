<?php  
// đăng ký tài khoản 
Route::post('create-account-customer/','\App\Http\Controllers\Home\AppController@createAccountCustomer');
// loại hình công ty 
Route::get('get-customer-type/','\App\Http\Controllers\Home\AppController@getCustomerType');
// thông tin tài khoản customer by email
// Route::get('get-customer-by-email/','\App\Http\Controllers\Home\AppController@getCustomerByEmail');
// danh mục sản phẩm
Route::get('categories/','\App\Http\Controllers\Home\AppController@getCategories');
// danh mục sản phẩm con
Route::get('category-child/{parent_id}','\App\Http\Controllers\Home\AppController@getCategoryByParentId');
// danh sách sản phẩm theo danh mục
Route::get('products/{category_id}','\App\Http\Controllers\Home\AppController@getProductByCategoryId');
// tìm sản phẩm theo tên
Route::get('products/search/{title}','\App\Http\Controllers\Home\AppController@getProductByTitle');
// chi tiết sản phẩm theo id
Route::get('product/{product_id}','\App\Http\Controllers\Home\AppController@getProductById');
// bình luận sản phẩm
Route::post('comment/','\App\Http\Controllers\Home\AppController@commentProduct');
// danh sách bình luận theo id sản phẩm
Route::get('comment/{product_id}','\App\Http\Controllers\Home\AppController@getCommentByIdProduct');
// order
Route::post('order/','\App\Http\Controllers\Home\AppController@createOrder');
//danh sach catalog
Route::get('document/catalog','\App\Http\Controllers\Home\AppController@getCatalog');
//danh sach manual
Route::get('document/manual','\App\Http\Controllers\Home\AppController@getManual');
//danh sach price list
Route::get('document/pricelist','\App\Http\Controllers\Home\AppController@getPricelist');
//lấy tài liệu theo id
Route::get('document/{download_id}','\App\Http\Controllers\Home\AppController@getDocumentById');
// tìm kiếm tài liệu theo tiêu đề
Route::get('document/search/{title}','\App\Http\Controllers\Home\AppController@getDocumentByTitle');
// chính sách đổi trả hàng 
Route::get('policy/return-exchange','\App\Http\Controllers\Home\AppController@getPolicyRetunExchange');
// chính sách bảo hành 
Route::get('policy/warranty','\App\Http\Controllers\Home\AppController@getWarrantyPolicy');
// chính sách thanh toán
Route::get('policy/payment','\App\Http\Controllers\Home\AppController@getPaymentPolicy');
// chính sách vận chuyển
Route::get('policy/shipping','\App\Http\Controllers\Home\AppController@getShippingPolicy');
// danh sách tài khoản admin
Route::get('admin/users','\App\Http\Controllers\Home\AppController@getAllUsers');
// danh sách nhóm tài khoản admin
Route::get('admin/user-group','\App\Http\Controllers\Home\AppController@getAllUsersGroup');
// tạo quy tắc mã khuyến mãi 
Route::post('coupon-rule/add','\App\Http\Controllers\Home\AppController@addCouponRule');
// tạo mã khuyến mãi 
Route::post('coupon-code/add','\App\Http\Controllers\Home\AppController@addCouponCode');
// cập nhật mã khuyến mại
Route::post('coupon-code/edit/{id}','\App\Http\Controllers\Home\AppController@editCouponCode');
// Xóa mã khuyến mại
Route::post('coupon-code/delete/','\App\Http\Controllers\Home\AppController@deleteCouponCode');