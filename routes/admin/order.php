<?php
Route::get('/order','OrderController@index')->name('order_admin');
Route::get('/order-detail/{id}','OrderController@detail')->name('order_detai_admin');
Route::get('/update-status/{id}/{stt}','OrderController@update_status')->name('update_order_status');

Route::get('/order_create','OrderController@createOrder')->name('order_create');
Route::post('/order_create','OrderController@createOrder')->name('order_create');
?>
