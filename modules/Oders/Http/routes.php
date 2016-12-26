<?php

Route::group(['middleware' => 'web', 'prefix' => 'oders', 'namespace' => 'Modules\Oders\Http\Controllers'], function()
{
	Route::get('/', 'OdersController@index');
});