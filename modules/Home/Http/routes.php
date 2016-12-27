<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Home\Http\Controllers\Admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home_admin');
});