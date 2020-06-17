<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'admin'],function(){
	include('admin/category.php');
	include('admin/partners.php');
	include('admin/product.php');
	include('admin/account.php');
	include('admin/news.php');
	include('admin/customer.php');
	// include('admin/newscate.php');
	include('admin/slider.php');
	include('admin/banner.php');
	include('admin/supporter.php');
	include('admin/webconfig.php');
	include('admin/service.php');
	include('admin/download.php');
	include('admin/comment.php');
	include('admin/cat-work.php');
	include('admin/address-work.php');
	include('admin/news-work.php');
	include('admin/service2.php');
	include('admin/order.php');
	include('admin/about-us.php');
	include('admin/agency.php');
	include('admin/agency_category.php');
	include('admin/terms.php');
	include('admin/reward_points.php');
	include('admin/coupon_code.php');
	include('admin/rate.php');
	include('admin/promotions.php');
	include('admin/popup.php');

});
// Route login admin

Route::get('admin/login.html','Admin\AdminController@login')->name('login');
Route::post('admin/login.html','Admin\AdminController@post_login')->name('login');

// Route logout admin
Route::get('admin/logout','Admin\AdminController@logout')->name('logout');

Route::group(['prefix'=>'','namespace'=>'Home','middleware'=>'customer'],function(){
	// rating
	Route::post('/rate-product','HomeController@rateProduct')->name('rateProduct');
	// rating

	// flash-sale
	Route::get('/flash-sale','HomeController@flashSale')->name('flash-sale');
	// flash-sale

	//import cart to csv
	Route::post('import-cart-csv','OrderController@importCartCsv')->name('import_cart_csv');

	Route::get('tracking-order','OrderController@trackingOrder')->name('trackingOrder');
	Route::post('tracking-order','OrderController@getTrackingOrder')->name('trackingOrder');

	// tra cứu bảo hành
	Route::get('kiem-tra-bao-hanh','OrderController@warranty')->name('warranty');
	Route::post('kiem-tra-bao-hanh','OrderController@getWarranty')->name('warranty');

	//update route customer
	Route::get('/dang-ky','HomeController@formRegister')->name('register_customer');
	Route::post('/dang-ky','HomeController@register')->name('register_customer');
	Route::get('/quen-mat-khau','HomeController@forgotPassword')->name('forgotPassword');
	Route::post('/quen-mat-khau','HomeController@postForgotPassword')->name('forgotPassword');
	Route::post('/dat-lai-mat-khau','HomeController@resetPassword')->name('customer-reset-password');
	Route::post('/dat-lai-password','HomeController@PostResetPassword')->name('reset-password');
	Route::post('/dang-nhap','HomeController@login')->name('login_customer');

	Route::get('customer/order/reward-point','OrderController@customer_reward_point')->name('customer_reward_point');
	Route::get('customer/order/history','OrderController@customer_order_history')->name('customer_order_history');
	Route::get('customer/order/order-information/{id}','OrderController@orderInformation')->name('orderInformation');
	Route::post('customer/my-account','OrderController@saveCustomer')->name('saveCustomer');

	Route::get('/dang-nhap','HomeController@loginCustomer')->name('loginCustomer');


	Route::get('/lich-su-phat-trien-cong-ty','HomeController@History')->name('lich-su-phat-trien-cong-ty');
	Route::get('/congratulations','HomeController@lucky')->name('congratulations');
	Route::get('/Quay-So-Trung-Thuong','HomeController@Game')->name('Quay-So-Trung-Thuong');
	Route::get('/Tet-Ky-Hoi','HomeController@TetKyHoi')->name('Tet-Ky-Hoi');

	Route::get('/contact','HomeController@contact')->name('contact');
	Route::get('/cv-send-mail/{id}','HomeController@cv_send_mail')->name('cv_send_mail');
	Route::get('/tuyendung/{id}','HomeController@recruitment2')->name('tuyen-dung2');
	Route::post('/tuyendung/{id}','HomeController@cv_mail')->name('tuyen-dung2');
	Route::get('/tuyendung','HomeController@recruitment')->name('tuyen-dung');
	Route::get('/downloads','HomeController@downloads')->name('downloads');
	Route::get('/','HomeController@downloads')->name('downloads');
	Route::get('/downloads/{slug}','HomeController@view_doc')->name('view_doc');
	Route::get('/pdf/{slug}','HomeController@view_pdf')->name('view_pdf');
	Route::get('/tailieu/{slug}','HomeController@document')->name('document');
	Route::get('/tai-lieu/{slug}/{lang}','HomeController@documents')->name('documents');
	Route::get('news/{slug}','HomeController@detail_news')->name('detail_news');
	Route::get('news-category/{slug}','HomeController@detail_catnews')->name('detail_catnews');

	// route tin tuc
	Route::get('tin-tuc','HomeController@news_page')->name('tin_tuc');
	Route::get('tin-tuc/{slug}','HomeController@detail_news_page')->name('tin_tuc_chi_tiet');
	Route::get('tin-tuc/danh-muc/{slug}','HomeController@cate_news_page')->name('danh_muc_tin_tuc');


	// module danh cho dai ly
	Route::get('agency','HomeController@agency_posts')->name('home_agency_posts');
	Route::get('danh-muc-bai-viet/{slug}/{id}','HomeController@agency_posts_by_category')->name('postsCategory');
	Route::get('bai-viet/{slug}/{id}','HomeController@agency_posts_detail')->name('detailPost');

	//route my account
	Route::get('my-account','OrderController@my_account')->name('my_account');
	Route::get('edit-account','OrderController@edit_acc_customer')->name('edit_acc_customer');

	Route::get('404.html','HomeController@error')->name('error');
	// route gio hang
	Route::get('cart/add-cart/{id}','HomeController@add_cart')->name('add_cart');
	Route::get('cart/add-cart-flash-sale/{id}','HomeController@add_cart_flash_sale')->name('add_cart_flash_sale');
	// cart api
	Route::get('cart/add-to-cart/{id}/{quantity}','HomeController@add_cart');
	Route::get('cart/shop-now/{id}/{quantity}','HomeController@shop_now');
	Route::post('cart/shopNow','HomeController@shopNow')->name('shopNow');
	// cart api
	Route::get('cart/view','HomeController@view_cart')->name('view_cart');
	Route::get('cart/delete/{id}','HomeController@delete_cart')->name('delete_cart');
	Route::post('cart/update/{id}','HomeController@update_cart')->name('update_cart');
	Route::get('cart/clear','HomeController@clear_cart')->name('clear_cart');

	Route::get('cart/export-quote-pdf','HomeController@export_quote_pdf')->name('export_quote_pdf');
	Route::get('cart/dieu-khoan-mua-hang','HomeController@terms_purc')->name('terms_purc');
	Route::get('view-terms/{type}','HomeController@view_terms')->name('view_terms');
	// end route cart

	// route order checkout
	Route::post('/uses-coupon','OrderController@usesCoupon')->name('usesCoupon');

	Route::post('/order/red-bill','OrderController@order')->name('red_bill');
	Route::get('/order/red-bill','OrderController@order')->name('red_bill');
	Route::post('/order/redeem-money','OrderController@order')->name('use_redeem_money');
	Route::get('/order','OrderController@order')->name('order');
	Route::post('/order','OrderController@post_order')->name('order');
	Route::get('/order_success','OrderController@order_success')->name('order_success');

	Route::get('order/history','OrderController@order_history')->name('order_history');
	Route::get('order/detail/{id}','OrderController@order_hostiry_detail')->name('order_detail');
	//end route order checkout


	// route dang xuat customer
	Route::get('/dang-xuat-customer','HomeController@logout_customer')->name('logout_customer');

	Route::get('/','HomeController@index')->name('home');
	Route::get('/about','HomeController@index');
	Route::get('/maker','HomeController@index');
	Route::get('/product','HomeController@index_product')->name('home_product');
	Route::get('/danh-sach-san-pham/','HomeController@search_product')->name('search_product');
	Route::get('/project','HomeController@project')->name('projects');
	Route::get('/product-category/{slug}','HomeController@viewCate')->name('view_category');
	// Route::get('/partners','HomeController@view')->name('categorys');
	Route::get('/products/{slug}','HomeController@view')->name('view');
    //page chi tiet san pham ko header
    Route::get('/product/{slug}','AppController@view');
	Route::post('/comment','HomeController@comment')->name('comment');
	Route::post('/send-mail','HomeController@send_mail')->name('send_mail');
	Route::get('/confirm/{id}','HomeController@confirm')->name('confirm');
	Route::get('/categorys','HomeController@categorys')->name('categorys');
	// Route::get('/product-category','HomeController@pro_cat')->name('product-category');
	// Route::get('/hot-news/{slug}.html','HomeController@get_news')->name('hot-news');
	Route::get('/project/{slug}','HomeController@detail_project')->name('detail_project');

	Route::get('/api/get-content-product/{slug}','AppController@viewProduct')->name('product.get.content');


	});
	//end update route customer





// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
