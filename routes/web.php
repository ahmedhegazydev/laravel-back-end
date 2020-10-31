<?php

use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
}) -> middleware("auth");


Route::namespace("Front")->group(function (){
    Route::get("show", "TestController@showAdminName");
    Route::put("put_user", "TestController@showAdminName");
    Route::delete("delete_all", "TestController@showAdminName");
    Route::post("post_user", "TestController@showAdminName");
    Route::patch("patch_user", "TestController@showAdminName");
    Route::options("users", "TestController@showAdminName");
});


