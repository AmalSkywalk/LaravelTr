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

Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('/main', 'MainController@index')->name('main');
Route::post('/main/checklogin', 'MainController@checklogin')->name('checklogin');
Route::get('/main/successlogin','MainController@successlogin')->name('successlogin');
Route::get('/main/logout','MainController@logout')->name('logout');
Route::get('/main/create','MainController@create')->name('create');
Route::post('store','MainController@store')->name('store');
Route::get('show','MainController@show')->name('show');

Route::delete('destroy/{id?}','MainController@destroy')->name('destroy');
Route::get('edit/{id?}','MainController@edit')->name('edit');
Route::post('update/{id?}','MainController@update')->name('update');
