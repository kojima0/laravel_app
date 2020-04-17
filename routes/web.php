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

Route::resource('todo', 'TodoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gizumo_lv1','HomeController@gizumo_lv1');

Route::get('/gizumo_lv2','HomeController@showNameForm')->name('gizumo_lv2');

Route::post('/gizumo_lv2','HomeController@gizumo_lv2');

Route::get('/gizumo_lv4','PrefectureController@index');