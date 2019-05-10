<?php



Route::get('/', function () {
    return view('index');
});



Route::get('/registration','UserController@registration');
Route::get('/login','UserController@attemptedLogin');
Route::get('/logout','UserController@logout')->middleware('user');
Route::get('/user/home','UserController@userHome')->middleware('user');
Route::get('/user/review','UserController@userReview')->middleware('user');



Route::post('/registration','UserController@store');
Route::post('/login','UserController@login');
Route::post('/save/post','PostController@savePost');