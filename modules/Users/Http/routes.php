<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Users\Http\Controllers\Admin'], function()
{
	Route::get('/', 'LoginController@index')->name('admin_login');
	Route::post('/', 'LoginController@login');
});
Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Users\Http\Controllers'], function()
{
    Route::get('/', 'LoginController@index')->name('login');
});