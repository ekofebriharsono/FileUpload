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
Auth::routes();

Route::get('file/upload', 'FileController@form')->name('file.form');
Route::get('file/index', 'FileController@index')->name('file.index');
Route::post('file/upload', 'FileController@upload')->name('file.upload');
Route::get('/home', 'HomeController@index')->name('home');
