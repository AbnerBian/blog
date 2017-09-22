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
Route::get('/help',function(){
    return "HELP PAGE";
});
Route::get('age/{age?}',function($age=null){
    return 'I`am '.',my age is '.$age;
});
Route::get('user/{name}','UserController@name')->middleware('name');
