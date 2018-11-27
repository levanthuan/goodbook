<?php

Route::group(['prefix'=>'admin', 'module'=>'Backend'], function(){

	Route::group([
	        'module' => 'Backend',
	        'namespace'=>'App\Modules\Backend\Controllers',
	        'middleware' => ['web']
	    ],
	    function(){
	 
	        Route::get('/login', ['as' => 'admin.login', 'uses' => 'AuthController@getLogin']);

	        Route::get('/', 'IndexController@index')->name('admin.index');
	    
	    }
	);

});