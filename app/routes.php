<?php

Route::get('/', 'PagesController@getHome');
Route::controller('pages', 'PagesController');
