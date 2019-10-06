<?php 
	Route::get('','AdminController@index')->name('HomeAdmin');
	Route::get('/category','CategoryController@index')->name('category');
	Route::post('/category','CategoryController@postCategory')->name('addCategory');
	Route::get('/category/search','CategoryController@search')->name('search');
	Route::get('/category/delete/{id}','CategoryController@deleteCategory')->name('deleteCategory');
	Route::get('/category/edit/{id}','CategoryController@editCategory')->name('editCategory');
	Route::post('/category/edit/{id}','CategoryController@postedit')->name('editCategory');
	Route::post('/category/update-cate/{id}','CategoryController@updateCate')->name('update-cate');

	Route::get('/list-cat-1','CategoryController@get_ListCat1')->name('list-cat-1');
	Route::get('/list-cat/{id}','CategoryController@del_ListCat1')->name('del-list-cat');
	Route::get('/list-cat-1/{id}','CategoryController@ListCat1')->name('list_cat_1');
	Route::post('/order-list-cat/{id}','CategoryController@orderListCat1')->name('order-list-cat');
	Route::post('sorder-list-cat/{id}','CategoryController@SorderListCat1')->name('sorder-list-cat');

	Route::get('/list-cat-1/edit/{id}','CategoryController@edit_ListCat1')->name('edit-list-cat-1');
	Route::post('/list-cat-1/edit/{id}','CategoryController@post_ListCat1')->name('edit-list-cat-1');
?>