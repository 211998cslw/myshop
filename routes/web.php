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
            
// 商品添加

// Route::prefix('/Goods1')->group(function(){
//     Route::any('index','Goods1Controller@index');
//     Route::any('add','Goods1Controller@add');
//     Route::any('gadd','Goods1Controller@gadd');
//     Route::get('del','Goods1Controller@del');
// });

Route::middleware('Goods1')->group(function(){
    Route::get('Goods1/update','Goods1Controller@update');
    Route::post('Goods1/do_update','Goods1Controller@do_update');
});


            /*微商城*/
// 商品添加
// Route::prefix('/Goods')->group(function(){
//     Route::any('goods_add','admin\GoodsController@goods_add');
//     Route::any('sdo_add','admin\GoodsController@sdo_add');
    
// });
Route::get('/Goods/goods_add','admin\Goods@goods_add');
Route::post('/Goods/do_add','admin\Goods@do_add');
Route::get('/Goods/goods_index','admin\Goods@goods_index');
Route::get('/Goods/goods_del','admin\Goods@goods_del');
Route::get('/Goods/goods_update','admin\Goods@goods_update');
Route::post('/Goods/do1_update','admin\Goods@do1_update');




