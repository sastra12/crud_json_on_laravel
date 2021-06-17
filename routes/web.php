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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','BlogController@index')->name('index');
Route::post('/create','BlogController@index');
Route::get('/createdata','BlogController@create');
Route::post('/createform','BlogController@store');
Route::get('/edit/{id}','BlogController@edit')->name('edit');
Route::post('/editdata/{id}','BlogController@update')->name('editform');
Route::get('/delete/{item}','BlogController@destroy')->name('delete');
Route::get('/show/{id}','BlogController@show')->name('show');
Route::get('/back','BlogController@back')->name('back');
