<?php
Route::apiResource('/pub', 'PubController');
Route::apiResource('/question', 'QuestionController');
// Route::apiResource('/question/{question}/pub/{pub}', 'QuestionController');
Route::apiResource('/category', 'CategoryController');
Route::apiResource('/pub/{pub}/question', 'QuestionController');
Route::apiResource('/pub/{pub}/question/{question}/reply', 'ReplyController');
Route::post('/like/{reply}', 'LikeController@likeIt');
Route::delete('/like/{reply}', 'LikeController@unLikeIt');
Route::post('/pub/like/{pub}', 'LikePubController@likePub');
Route::delete('/pub/like/{pub}', 'LikePubController@unLikePub');

Route::post('notifications', 'NotificationController@index');
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});