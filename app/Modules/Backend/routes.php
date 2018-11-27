<?php

Route::group(['prefix'=>'admin', 'module'=>'Backend'], function(){

    Route::get('/test-user', function(){

//        $user = new \App\Models\User();
//
//        $user->name = 'levanthuan';
//        $user->email = 'levanthuankmhd@gmail.com';
//        $user->password = bcrypt('123456');
//        $user->name_display = 'le van thuan';
//        $user->birthday = '2018-11-27';
//        $user->address = 'Hai Duong';
//        $user->phone_number = '928592523';
//        $user->role = 0;
//
//        $user->save();

        $list = \App\Models\User::all();

        dd($list->toArray());

    });

});