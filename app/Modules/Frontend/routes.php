<?php

Route::group(['module'=>'Frontend'], function(){

    Route::get('/', function(){
        echo "Welcome frontend";
    });

});