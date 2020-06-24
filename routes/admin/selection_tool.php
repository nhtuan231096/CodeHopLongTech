<?php 
Route::get('selection-tool/category','SelectionToolController@categoryIndex')->name('selectionToolCategory');
Route::post('selection-tool/category-add','SelectionToolController@cateAdd')->name('SelectionToolAddCate');
Route::get('selection-tool/category-del','SelectionToolController@cateDelete')->name('deleteCategoryTool');
Route::get('selection-tool/category-edit','SelectionToolController@cateEdit')->name('editCategoryTool');


Route::get('selection-tool/partners','SelectionToolController@partnersIndex')->name('selectionToolPartners');
Route::post('selection-tool/partners-add','SelectionToolController@partnersAdd')->name('SelectionToolAddPartners');
Route::get('selection-tool/partners-del','SelectionToolController@partnersDelete')->name('deletePartnersTool');
Route::get('selection-tool/partners-edit','SelectionToolController@partnersEdit')->name('editPartnersTool');

Route::get('selection-tool/product','SelectionToolController@productIndex')->name('selectionToolProduct');
Route::post('selection-tool/product-add','SelectionToolController@productAdd')->name('SelectionToolAddProduct');
Route::get('selection-tool/product-del','SelectionToolController@productDelete')->name('deleteProductTool');
Route::get('selection-tool/product-edit','SelectionToolController@productEdit')->name('editProductTool');

