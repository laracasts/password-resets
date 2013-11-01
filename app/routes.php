<?php

Route::get('/', function()
{
    // No home page for this project
    return Redirect::to('login');
});

// Sessions
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

// Password Resets
Route::get('password_resets/reset/{token}', 'PasswordResetsController@reset');
Route::post('password_resets/reset/{token}', 'PasswordResetsController@postReset');
Route::resource('password_resets', 'PasswordResetsController', ['only' => ['create', 'store']]);

// Sample Admin Page For Testing
Route::get('admin', function()
{
    return 'Admin Page. Welcome ' . Auth::user()->username;
})->before('auth');
