<?php 
Route::get('popup','WebConfigController@popup')->name('popup');
Route::post('popup','WebConfigController@savePopup')->name('popup');
