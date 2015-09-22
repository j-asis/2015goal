<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', ['as' => 'welcome', 'uses' => 'PagesController@welcome']);
Route::get('/admin',   ['as' => 'admin', 'uses' => 'PagesController@admin']);
