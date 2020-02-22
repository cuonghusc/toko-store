<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('{username}/profile',function($username){
    echo $username;
});

Route::prefix('user')->group(function(){
    Route::get('',function(){
        return view('user');
    });
    Route::get('{id}', function ($id) {
        echo $id;
    })->where('id', '[0-9]+');
});
//validate parameter only number

Route::get('search/{search}', function ($search) {
    echo $search;
})->where('search', '.*');
