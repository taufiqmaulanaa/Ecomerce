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


route::get('/','FrontController@index')->name('home');
route::get('/books','FrontController@books')->name('books');
route::get('/book','FrontController@book')->name('book');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'admin','middleware'=>'Auth'], function(){
  Route::get('/', function(){
    return view ('admin.index');
  })->name('admin.index');
});