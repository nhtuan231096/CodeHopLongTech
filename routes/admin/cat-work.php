<?php 
	Route::get('/cat-work','CatWorkController@index')->name('cat-work');
	Route::post('/cat-work','CatWorkController@postCatWork')->name('addCatWork');
	Route::get('/cat-work/search','CatWorkController@search')->name('search');
	Route::get('/cat-work/delete/{id}','CatWorkController@deleteCatWork')->name('deleteCatWork');
	Route::get('/cat-work/edit/{id}','CatWorkController@editCatWork')->name('editCatWork');
	Route::post('/cat-work/edit/{id}','CatWorkController@postEditCatWork')->name('editCatWork');
?>