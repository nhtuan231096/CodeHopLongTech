<?php 
Route::get('reward-points','RewardPointsController@index')->name('reward_points');
Route::post('reward-points','RewardPointsController@save')->name('reward_points');
