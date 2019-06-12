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
Route::middleware(['stu'])->group(function(){
Route::get('/add_student','studentController@index');

});
Route::any('/add','studentController@add');
route::post('/do_add','studentController@do_add');
route::get('/update','studentController@update');
route::post('/do_update','studentController@do_update');
route::get('/del','studentController@del');