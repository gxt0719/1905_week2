<?php
// Route::get('info', function () {
//     phpinfo();
// });
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
Route::get('/','Ec\IndexController@index');
Route::get('/index/login','Ec\IndexController@login');
Route::get('/index/doLogin','Ec\IndexController@doLogin');
Route::get('/index/setting','Ec\IndexController@setting');
Route::get('/index/about','Ec\IndexController@about');
Route::get('/index/contact','Ec\IndexController@contact');
Route::get('/index/register','Ec\IndexController@register');