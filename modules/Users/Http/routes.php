<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Users\Http\Controllers\Admin'], function () {
    Route::get('/', 'LoginController@index')->name('admin_login');
    Route::post('/', 'LoginController@login');
    Route::get('/users', 'UsersController@index')->name('list_user');
    Route::post('/user/create', 'UsersController@postCreate')->name('create_user');
    Route::get('/user/{id}', 'UsersController@detail')->name('detail_user');
    Route::get('/user/edit/{id}', 'UsersController@postEdit')->name('edit_user');
    Route::post('/user/edit/{id}', 'UsersController@postEdit');
});
Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Users\Http\Controllers'], function () {
    Route::get('/', 'LoginController@index')->name('login');
});