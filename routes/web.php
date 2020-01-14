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

Route::get('info', function () {
    phpinfo();
});
// 首页
Route::get('index','Index\IndexController@index');
//注册页面
Route::get('reg/index','Reg\IndexController@index');
Route::post('reg/insert','Reg\IndexController@insert');

//登录页mioan
Route::get('login/index','Login\IndexController@index');
 




