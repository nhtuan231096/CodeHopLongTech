<?php 
Route::get('about_us','AboutUsController@index')->name('about_us');
Route::post('save-config-home-page','AboutUsController@save')->name('save_config_home_page');
