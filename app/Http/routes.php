<?php

Route::get('/welcome', ['as' => 'welcome', 'uses' => 'PagesController@welcome']);
Route::get('/',   ['as' => 'admin', 'uses' => 'PagesController@admin']);
