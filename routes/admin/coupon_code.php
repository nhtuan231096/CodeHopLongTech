<?php 
Route::get('couppon-rule','CouponCodeController@index_rule')->name('couppon_rule');
Route::get('couppon-rule-add','CouponCodeController@couppon_rule_add')->name('couppon_rule_add');
Route::post('couppon-rule-add','CouponCodeController@save_couppon_rule')->name('couppon_rule_add');
Route::get('couppon-rule-del','CouponCodeController@delRule')->name('delRule');


Route::get('couppon-code','CouponCodeController@index_couppon_code')->name('couppon_code');
Route::post('couppon-code','CouponCodeController@couppon_code_add')->name('couppon_code');
Route::get('couppon-code-del','CouponCodeController@delCoupon')->name('delCoupon');

Route::get('apply-couppon-code/{id}','CouponCodeController@applyCoupon')->name('applyCoupon');


Route::get('couppon-code-log','CouponCodeController@couppon_code_log')->name('couppon_code_log');
