<?php 
	Route::get('/service2','Service2Controller@index')->name('service2');
	Route::post('/service2','Service2Controller@postService2')->name('addService2');
	Route::get('/service2/search','Service2Controller@search')->name('search');
	Route::get('/service2/delete/{id}','Service2Controller@deleteService2')->name('deleteService2');
	Route::get('/service2/edit/{id}','Service2Controller@editService2')->name('editService2');
	Route::post('/service2/edit/{id}','Service2Controller@postEditService2')->name('editService2');
?>