<?php 
	Route::get('web-config','WebConfigController@index')->name('webConfig');
	Route::post('web-config','WebConfigController@save')->name('saveConfig');
	
	Route::get('config','WebConfigController@config')->name('coreConfig');
	Route::post('config','WebConfigController@configSave')->name('coreConfig');
?>