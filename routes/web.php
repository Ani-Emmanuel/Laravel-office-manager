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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/staff/index','StaffController@index');
Route::get('/staff/create','StaffController@create');
Route::get('/staff/show/{id}','StaffController@show');
Route::get('/staff/edit/{id}','StaffController@edit');
Route::put('/staff/edit', 'StaffController@update');
Route::post('/staff/store','StaffController@store');
Route::delete('/staff/delete/{id}','StaffController@destroy');