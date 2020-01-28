<?php 
Route::get('product-lrv','ProductController@product_lrv')->name('product_lrv');
Route::post('product-lrv','ProductController@add_product_lrv')->name('product_lrv');
Route::get('product-detele/{id}','ProductController@delPro')->name('delPro');
Route::get('product-edit/{id}','ProductController@editPro')->name('editPro');
Route::post('product-edit/{id}','ProductController@updatePro')->name('editPro');


Route::get('product-ng', 'ProductController@product_ng')->name('product_ng');

Route::get('product', 'ProductController@myPost')->name('product');
Route::get('product/edit/{id}', 'ProductController@edit')->name('product_edit');
Route::get('product/trash', 'ProductController@trash')->name('trash');
Route::get('product/undo/{id}', 'ProductController@undo')->name('undo');
Route::get('product/delete-pro/{id}', 'ProductController@deletePro')->name('deletePro');
Route::resource('post','ProductController');

// route import file csv
Route::get('product/import-product', 'ProductController@importProduct')->name('importProduct');
Route::post('/import-parse', 'ProductController@parseImport')->name('import_parse');
Route::post('/import-process', 'ProductController@processImport')->name('import_process');

// route insert thông tin sản phẩm
Route::get('insert-product','ProductController@insertProduct')->name('insertProduct');
Route::post('insert-product','ProductController@postInsertProduct')->name('insertProduct');


// Route::get('/','ProductController@myPost');
Route::get('/search','ProductController@search')->name('search');


Route::get('/live-search/action', 'ProductController@action')->name('live_search.action');

// route yêu cầu báo giá
Route::get('product/quotes-product', 'ProductController@quotesProduct')->name('quotesProduct');

Route::get('product-del/{id}','ProductController@del_pro');
Route::get('product-edit.{id}','ProductController@edit_pro');
Route::post('product-update/{id}','ProductController@product_update');

//sao chép sản phẩm
Route::get('list-pro-1','ProductController@get_ListPro1')->name('list-pro-1');
Route::get('list-pro-1/{id}','ProductController@del_ListPro1')->name('del-list-pro-1');
Route::get('list-1/{id}','ProductController@ListPro1')->name('list_1');

Route::post('order-list-pro/{id}','ProductController@orderListPro1')->name('order-list-pro');

// import product price
Route::get('import_price','ProductController@import_price')->name('import_price');
Route::post('import_price','ProductController@post_import_price')->name('import_price');

// route mass delete product
Route::delete('massDelete','ProductController@mass_delete')->name('massDelete');
// route mass delete product
Route::get('tool-product-check','ProductController@tool_product_check')->name('tool_product_check');
// flash_sale
Route::get('flash-sale','ProductController@flash_sale_index')->name('flash_sale');
Route::get('flash-sale-add','ProductController@addFlashSale')->name('addFlashSale');
Route::post('flash-sale-add','ProductController@saveFlashSale')->name('addFlashSale');
Route::get('flash-sale-del/{id}','ProductController@delFlashSale')->name('delFlashSale');
Route::get('flash-sale-edit/{id}','ProductController@editFlashSale')->name('editFlashSale');
// flash_sale
 ?>