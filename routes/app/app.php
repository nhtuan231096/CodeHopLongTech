<?php
use Illuminate\Http\Request;

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
// danh sách sản phẩm bán chạy
Route::get('best-sellers/products','\App\Http\Controllers\Home\AppController@bestSellers');
// danh sách sản phẩm mới
Route::get('new/products','\App\Http\Controllers\Home\AppController@newProducts');
// danh sách sản phẩm đặc biệt
Route::get('promotion/products','\App\Http\Controllers\Home\AppController@promotionProducts');
// tìm sản phẩm theo tên
Route::get('products/search/{title}','\App\Http\Controllers\Home\AppController@getProductByTitle');
// tìm sản phẩm theo tên, category id
Route::get('search/products','\App\Http\Controllers\Home\AppController@getProductByKeyword');
// chi tiết sản phẩm theo id
Route::get('product/{product_id}','\App\Http\Controllers\Home\AppController@getProductById');
//link chi tiết sản phẩm theo id
Route::get('product/{product_id}/link','\App\Http\Controllers\Home\AppController@getLinkProductById');
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
// danh sách tin tức
Route::get('news/','\App\Http\Controllers\Home\AppController@getAllNews');
// danh sách danh mục tin tức
Route::get('news-category/','\App\Http\Controllers\Home\AppController@getNewsCategory');
// bình luận tin tức
Route::post('comment-news/','\App\Http\Controllers\Home\AppController@addCommentNews');
// sử dụng coupon code
Route::post('get-coupon-code/','\App\Http\Controllers\Home\AppController@useCouponCode');
//quen mat khau
Route::post('customer/forgot-password','\App\Http\Controllers\Home\AppController@forgotPassword');
// flash sales
Route::get('flash-sale/products','\App\Http\Controllers\Home\AppController@flashSale');
// filter product by price
Route::get('products','\App\Http\Controllers\Home\AppController@getFilterProductByPrice');
// slider
Route::get('slider','\App\Http\Controllers\Home\AppController@getSlider');
// san pham lien quan
//Route::get('products/related/{idProduct}','\App\Http\Controllers\Home\AppController@getProductRelated');

// danh mục tuyển dụng
Route::get('recruitment/category','\App\Http\Controllers\Home\AppController@getCategoryRecruitment');

// danh sách tin tuyển dụng
Route::get('recruitment','\App\Http\Controllers\Home\AppController@getRecruitment');

// tin tuyển dụng theo danh mục
Route::get('category/{category_id}/recruitment','\App\Http\Controllers\Home\AppController@getRecruitmentByCategoryId');

// chi tiết tuyển dụng theo id
Route::get('recruitment/{id}','\App\Http\Controllers\Home\AppController@getRecruitmentById');

// trọng lượng sản phẩm
Route::get('product-weight/{id}','\App\Http\Controllers\Home\AppController@getProductWeight');

// login
Route::post('login','\App\Http\Controllers\Home\AppController@loginCustomer');

Route::middleware('auth:api')->get('/customer', function(Request $request) {
    return $request->user();
});
