<?php

Route::get('/', ['as' => 'welcome', 'uses' => 'PagesController@welcome']);
Route::get('/welcome', ['as' => 'welcome', 'uses' => 'PagesController@welcome']);
Route::get('/admin',   ['as' => 'admin', 'uses' => 'PagesController@admin']);
