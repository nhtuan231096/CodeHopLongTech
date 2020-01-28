<?php 
	Route::get('/news-work','NewsWorkController@index')->name('news-work');
	Route::post('/news-work','NewsWorkController@postNewsWork')->name('addNewsWork');
	Route::get('/news-work/search','NewsWorkController@search')->name('search');
	Route::get('/news-work/delete/{id}','NewsWorkController@deleteNewsWork')->name('deleteNewsWork');
	Route::get('/news-work/edit/{id}','NewsWorkController@editNewsWork')->name('editNewsWork');
	Route::post('/news-work/edit/{id}','NewsWorkController@postEditNewsWork')->name('editNewsWork');
?>