<?php

Route::group(['prefix'=>'admin', 'module'=>'Backend', 'namespace'=>'App\Modules\Backend\Controllers', 'middleware' => ['web']], function(){
    Route::get('/login', 'AuthController@login')->name('admin.auth.login');
    Route::post('/login', 'AuthController@authenticate')->name('admin.auth.authenticate');
    Route::get('/logout', 'AuthController@logout')->name('admin.auth.logout');

	Route::group(['middleware' => 'auth.admin'], function () {
	    Route::get('/', 'IndexController@index')->name('admin.site.index');

	    Route::get('/user', 'UserController@index')->name('admin.user.index');

	});
});