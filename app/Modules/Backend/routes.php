<?php

Route::group(['module'=>'Frontend'], function(){

    Route::get('/admin', function(){
        echo "Welcome admin";
    });

});