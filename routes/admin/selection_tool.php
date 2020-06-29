<?php
Route::get('selection-tool/category','SelectionToolController@categoryIndex')->name('selectionToolCategory');
Route::post('selection-tool/category-add','SelectionToolController@cateAdd')->name('SelectionToolAddCate');
Route::get('selection-tool/category-del','SelectionToolController@cateDelete')->name('deleteCategoryTool');
Route::get('selection-tool/category-edit','SelectionToolController@cateEdit')->name('editCategoryTool');
Route::post('selection-tool/category-import','SelectionToolController@cateImport')->name('selectionToolImportCate');


Route::get('selection-tool/partners','SelectionToolController@partnersIndex')->name('selectionToolPartners');
Route::post('selection-tool/partners-add','SelectionToolController@partnersAdd')->name('SelectionToolAddPartners');
Route::get('selection-tool/partners-del','SelectionToolController@partnersDelete')->name('deletePartnersTool');
Route::get('selection-tool/partners-edit','SelectionToolController@partnersEdit')->name('editPartnersTool');
Route::post('selection-tool/partners-import','SelectionToolController@partnersImport')->name('selectionToolImportPartners');

Route::get('selection-tool/product','SelectionToolController@productIndex')->name('selectionToolProduct');
Route::post('selection-tool/product-add','SelectionToolController@productAdd')->name('SelectionToolAddProduct');
Route::get('selection-tool/product-del','SelectionToolController@productDelete')->name('deleteProductTool');
Route::get('selection-tool/product-edit','SelectionToolController@productEdit')->name('editProductTool');
Route::post('selection-tool/product-import','SelectionToolController@productImport')->name('selectionToolImportProduct');

Route::get('selection-tool/filter','SelectionToolController@selectionToolFilter')->name('selectionToolFilter');
Route::post('selection-tool/filter/add','SelectionToolController@SelectionToolAddFilter')->name('SelectionToolAddFilter');
Route::get('selection-tool/filter/delete','SelectionToolController@selectionToolFilterDel')->name('selectionToolFilterDel');
Route::get('selection-tool/filter/edit','SelectionToolController@selectionToolFilterEdit')->name('selectionToolFilterEdit');
Route::post('selection-tool/filter-import','SelectionToolController@filterImport')->name('selectionToolImportFilter');

Route::post('selection-tool/filter/detail/add','SelectionToolController@selectionToolFilterDetailAdd')->name('selectionToolFilterDetailAdd');
Route::get('selection-tool/filter/detail/delete','SelectionToolController@selectionToolFilterDetailDel')->name('selectionToolFilterDetailDel');
Route::get('selection-tool/filter/Edit','SelectionToolController@selectionToolFilterEdit')->name('searchFilterDetail');
Route::post('selection-tool/filter/update','SelectionToolController@selectionToolFilterDetailUpdate')->name('selectionToolFilterDetailUpdate');

