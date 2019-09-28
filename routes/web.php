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

Route::get('/','ini_control@on');
Route::get('/create','ini_control@cr');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/p', 'ini_control@n');
Route::get('/g/{codesur}' ,'ini_control@h')->name('g');
Route::post('createlist','ini_control@createlist');

Route::get('apis', function () {
    return view('api');
});

Route::get('g/del____s/{id}/{code}', 'ini_control@deletelist');
route::get('g/delcode/{id}/{code}','ini_control@deletcode');
Route::get('g/sysprint______________d/{codesur}','ini_control@printsw');