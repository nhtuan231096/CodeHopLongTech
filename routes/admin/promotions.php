<?php 
Route::get('/promotions','NewsController@promotions')->name('promotions');
Route::post('/promotions','NewsController@savePromotions')->name('promotions');
Route::get('/delPromotion','NewsController@delPromotion')->name('delPromotion');
