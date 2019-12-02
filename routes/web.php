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
    return redirect(route('login'));
});

Route::get('dashboard', 'AdminController@dashboard')->name('dashboard')->middleware('admin');
Route::get('user', 'AdminController@user')->name('user')->middleware('admin');
Route::get('add-user', 'AdminController@adduser')->name('add-user')->middleware('admin');
Route::get('addNewUser','AdminController@addNewUser')->name('admin.addnewuser');
Route::post('addNewUser','AdminController@addNewUser')->name('admin.addnewuser');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
