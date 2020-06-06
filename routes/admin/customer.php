<?php 

Route::get('/customer-group-export-data','CustomerController@export')->name('exportDataCustomer');

// route account group
Route::get('/customer-group','CustomerController@customerGroup')->name('customer_group');
Route::post('/customer-group','CustomerController@saveCustomerGroup')->name('customer_group');
Route::get('/delete-customer-group','CustomerController@deleteCustomerGroup')->name('delete_customer_group');

// route customer
Route::get('/customers','CustomerController@customer')->name('customer_adm');
Route::post('/customers','CustomerController@saveCustomer')->name('customer_adm');
Route::get('/delete_cus','CustomerController@delete_cus')->name('delete_cus');

// route customer_type
Route::get('/customer_type','CustomerController@customer_type')->name('customer_type');
Route::post('/customer_type','CustomerController@save_customer_type')->name('customer_type');
Route::get('/del_customer_type','CustomerController@del_customer_type')->name('del_customer_type');

 ?>