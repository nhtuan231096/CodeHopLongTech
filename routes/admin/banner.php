<?php 
	Route::get('/banner','BannerController@index')->name('banner');
	Route::post('/banner','BannerController@add')->name('banner');
	Route::get('/del-banner/{id}','BannerController@delBanner')->name('delBanner');
	Route::get('/edit-banner/{id}','BannerController@editBanner')->name('editBanner');
	Route::post('/edit-banner/{id}','BannerController@PeditBanner')->name('editBanner');
	Route::post('/banner/update-banner/{id}','BannerController@updateBanner')->name('update-banner');
?>