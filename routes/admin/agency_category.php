<?php  
Route::get('agency-post-categories','AgencyController@index_categories')->name('agency_post_categories');
Route::post('agency-post-categories','AgencyController@add_category')->name('addCategoryAgency');
Route::get('delete-agency-post-categories/{id}','AgencyController@delete_category')->name('deleteAgencyCategory');
Route::get('edit-agency-post-categories/{id}','AgencyController@edit_category')->name('editAgencyCategory');
Route::post('edit-agency-post-categories','AgencyController@save_category')->name('saveCategoryAgency');

//quan ly bai viet
Route::get('agency-posts','AgencyController@index')->name('agency_posts');
Route::get('agency-add-posts','AgencyController@add_post')->name('agency_add_posts');
Route::post('agency-add-posts','AgencyController@add_post_data')->name('agency_add_posts');
Route::get('agency-delete-posts/{id}','AgencyController@delete_post_data')->name('agency_delete_post');
Route::get('agency-edit-posts/{id}','AgencyController@edit_post_data')->name('agency_edit_post');
Route::post('agency-edit-posts/{id}','AgencyController@edit_save_data')->name('agency_edit_post');
