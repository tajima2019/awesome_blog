<?php
Route::get('/',function() {
    return view('welcome');
});

Route::post('/blog/store','BlogController@store');
Route::post('/blog/delete/{id}' , 'BlogController@delete');

Route::get('/all','BlogController@all');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users','UserController@index');
Route::get('/home/{id}' , 'UserController@show');

Route::get('/user/{id}/follow' , 'UserController@follow');
Route::get('/user/{id}/unfollow' , 'UserController@unfollow');