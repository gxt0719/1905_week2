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
Route::get('/test/pay','TestController@alipay');        //去支付
Route::get('/test/alipay/return','Alipay\PayController@aliReturn');
Route::post('/test/alipay/notify','Alipay\PayController@notify');
Route::any('/text/text','Api\TextController@text');
Route::post('/login/login','Api\LoginController@login');
Route::post('/login/logon','Api\LoginController@logon');
Route::any('/login/list','Api\LoginController@list');
Route::any('/login/test','Api\LoginController@test');