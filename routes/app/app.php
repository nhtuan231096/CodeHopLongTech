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
