<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    event(new App\Events\StatusLiked('Someone'));

    return "Event has been sent!";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('message', 'App\Http\Controllers\HomeController@sendMessage');  // 
Route::get('/message/{id}', 'App\Http\Controllers\HomeController@getMessage')->name('message'); 
Route::get('/ShowMassage/{id}', 'App\Http\Controllers\HomeController@ShowMassage'); 
Route::get('/messag/{id}', 'App\Http\Controllers\HomeController@getMessag')->name('message'); 
Route::get('/subscribe', 'App\Http\Controllers\HomeController@subscribe');
Route::delete('/unFollow/{id}', 'App\Http\Controllers\HomeController@remove_user'); 
/////////////////////  
Route::get('/group/create', 'App\Http\Controllers\GroupController@create_form');
Route::post('/group/create', 'App\Http\Controllers\GroupController@create');
Route::get('/group/join', 'App\Http\Controllers\GroupController@join_form');
Route::post('/group/join', 'App\Http\Controllers\GroupController@join');

Route::get('/group/edit/{id}', 'App\Http\Controllers\GroupController@edit');

Route::post('/group/update/{id}', 'App\Http\Controllers\GroupController@update');

Route::delete('/group/delete/{id}', 'App\Http\Controllers\GroupController@deleteGroup');

Route::get('/group/members_list/{id}', 'App\Http\Controllers\GroupController@members_list');

Route::get('/remove_user/{id}/{user_id}', 'App\Http\Controllers\GroupController@remove_user');