<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('productj','\App\Http\Controllers\Admin\ProductController@proJson');
Route::get('createdby','\App\Http\Controllers\Admin\ProductController@createdby');
Route::get('category','\App\Http\Controllers\Admin\ProductController@category');
Route::get('filter','\App\Http\Controllers\Home\HomeController@productJson');
Route::get('filter/{filter}','\App\Http\Controllers\Home\HomeController@filter');

Route::get('yeucaubaogia','\App\Http\Controllers\Home\HomeController@send_mail');

// route order detail
Route::get('getOrderDetail/{order_id}','\App\Http\Controllers\Home\OrderController@orderDetail');
Route::get('getOrder/{order_id}','\App\Http\Controllers\Home\OrderController@getOrder');


// route rate
Route::get('getRateProduct/{product_id}','\App\Http\Controllers\Home\HomeController@getRateProduct');
Route::get('getCommentProduct/{product_id}','\App\Http\Controllers\Home\HomeController@getCommentProduct');
Route::get('getReplyCommentProduct/{comment_id}','\App\Http\Controllers\Home\HomeController@getReplyCommentProduct');
// route rate

// route part number
Route::get('getPartNumber/{product_id}','\App\Http\Controllers\Home\HomeController@getPartNumber');

// route part number

// route masdelete product
Route::get('product-mass-delete','\App\Http\Controllers\Admin\ProductController@mass_delete');
// route masdelete product

// route search product
Route::get('autoSearch/{product_search}','\App\Http\Controllers\Home\HomeController@autoSearch');
// route search product

Route::get('getProductFlashSale/','\App\Http\Controllers\Admin\ProductController@getAllProduct');
Route::get('getEditProductFlashSale/','\App\Http\Controllers\Admin\ProductController@getEditProduct');