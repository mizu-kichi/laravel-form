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

Route::get('/user/input', 'UserController@input')->name('user.input');
Route::post('/user/confirm', 'UserController@confirm')->name('user.confirm');
Route::post('/user/store', 'UserController@store')->name('user.store');
Route::get('/user/complete', 'UserController@complete')->name('user.complete');
Route::get('/user', 'UserController@list')->name('user.list');

