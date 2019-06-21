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

Route::get('reg',function (){
    return view('user.reg');
});//注册页
Route::get('login',function (){
    return view('user.login');
});//登录页

Route::post('postLogin','Admin\UserController@postLogin');//登录接口
Route::get('logout','Admin\UserController@logout');//登出接口
Route::post('register','Admin\UserController@register');//注册接口

Route::get('lo','Admin\UserController@lo');//登录页
Route::get('main',function (){
    return view('main');
});

