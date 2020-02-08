<?php 
Route::get('/product/rate-product','RateController@indexRate')->name('rate_product');
Route::get('/product/delete-rate-product','RateController@delRate')->name('delRate');
Route::post('/product/update-rate-product','RateController@updateRate')->name('updateRate');


Route::get('/product/comment-product','RateController@indexComment')->name('comment_product');
Route::get('/product/delete-comment-product','RateController@delComment')->name('delComment');
Route::post('/product/update-comment-product','RateController@updateComment')->name('updateComment');
Route::get('/product/reply-comment-product','RateController@replyComment')->name('replyComment');
Route::post('/product/reply-comment-product','RateController@adminReplyComment')->name('adminReplyComment');
 ?>