<?php

Route::get('/', ['as' => 'welcome', 'uses' => 'PagesController@welcome']);
Route::get('/welcome', ['as' => 'welcome', 'uses' => 'PagesController@welcome']);
Route::get('/game', ['as' => 'game', 'uses' => 'PagesController@game']);
Route::get('/admin',   ['as' => 'admin', 'uses' => 'PagesController@admin']);
Route::get('/ping-pong',   ['as' => 'pong', 'uses' => 'PagesController@pong']);
Route::get('/snake',   ['as' => 'snake', 'uses' => 'PagesController@snake']);
