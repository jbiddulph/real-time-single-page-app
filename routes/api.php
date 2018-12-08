<?php
Route::apiResource('/pub', 'PubController');
Route::apiResource('/question', 'QuestionController');
// Route::apiResource('/question/{question}/pub/{pub}', 'QuestionController');
Route::apiResource('/category', 'CategoryController');
Route::apiResource('/pub/{pub}/question', 'QuestionController');
Route::apiResource('/pub/{pub}/question/{question}/reply', 'ReplyController');