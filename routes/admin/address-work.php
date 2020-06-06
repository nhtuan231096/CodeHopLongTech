<?php 
	Route::get('/address-work','AddressWorkController@index')->name('address-work');
	Route::post('/address-work','AddressWorkController@postAddressWork')->name('addAddressWork');
	Route::get('/address-work/search','AddressWorkController@search')->name('search');
	Route::get('/address-work/delete/{id}','AddressWorkController@deleteAddressWork')->name('deleteAddressWork');
	Route::get('/address-work/edit/{id}','AddressWorkController@editAddressWork')->name('editAddressWork');
	Route::post('/address-work/edit/{id}','AddressWorkController@postEditAddressWork')->name('editAddressWork');
?>