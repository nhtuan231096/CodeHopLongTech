<?php 
	Route::get('/quan-ly-dieu-khoan','TermsController@index')->name('terms');
	Route::post('/quan-ly-dieu-khoan','TermsController@save')->name('terms');
	Route::get('/quan-ly-dieu-khoan/del','TermsController@delete')->name('terms_del');
?>