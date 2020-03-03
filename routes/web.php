<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/hello1',function(){
    return("Hello");
});
Route::get('/hello','HelloController@index');
Route::get('/hello2',function(){
    $someData='helo from hello2';
    return view('hello.hello2',[
        'someData'=>$someData,
    ]);

});
Route::get('/hello3',function(){

    $variable='hello from hello3';
    return view('hello3',compact('variable'));
});