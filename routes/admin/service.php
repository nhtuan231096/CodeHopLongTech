<?php 
	Route::get('service','ServiceController@index')->name('service');
	Route::get('office','ServiceController@office')->name('office');
	Route::post('office','ServiceController@add')->name('add_office');
	Route::get('del-office/{id}','ServiceController@delOff')->name('delOff');
	Route::get('edit-office/{id}','ServiceController@editOff')->name('editOff');
	Route::post('edit-office/{id}','ServiceController@PostEditOff')->name('editOff');
	Route::post('update-office/{id}','ServiceController@updateOffice')->name('update-office');
	// Route::post('web-config','WebConfigController@save')->name('saveConfig');
?>