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
//初始化
Route::get('/', function () {
    return view('welcome');
});

/*回傳字串
Route::get('/', function () {
    return 'welcome';
});
*/
/*跳轉頁面
Route::get('/', function () {
    return redirect('welcome');
});
*/
Route::get('hello/{name}',function($name){
    return'Hello,'.$name;
});
Route::get('hello/{name?}',function($name='Everybody'){
    return'Hello,'.$name;
});
