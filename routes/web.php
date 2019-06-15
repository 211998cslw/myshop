<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
  | routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // return view('welcome');
//     return view('');
// });
Route::get('/','IndexController@index');
Route::middleware(['stu'])->group(function(){
Route::get('/add_student','studentControl,ler@index');

});
Route::any('/add','studentController@add');
route::post('/do_add','studentController@do_add');
route::get('/update','studentController@update');
route::post('/do_update','studentController@do_update');
route::get('/del','studentController@del');

// 登录、注册
Route::prefix('/user')->group(function(){
    Route::get('add','UserController@add')->middleware('login');
    Route::any('addHandel','UserController@addHandel');
    Route::any('list','UserController@list');
    Route::any('del/{id}','UserController@del');
    Route::any('edit/{id}','UserController@edit');
    Route::any('update/{id}','UserController@update');
    Route::any('loginAdd','UserController@loginAdd');
    Route::any('loginHandel','UserController@loginHandel');
    Route::any('loginSave','UserController@loginSave');
    Route::any('saveAdd','UserController@saveAdd');
});
            /*微商城*/
// 文件上传
Route::get('/add','admin\GoodsController@add');
route::post('/do_add_good','admin\GoodsController@do_add_good');