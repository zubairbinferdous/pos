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
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'HomeController@Logout')->name('logout');
Route::get('/allproduct', 'HomeController@allProduct')->name('allProduct');
Route::get('/addproduct', 'HomeController@addProduct')->name('addProduct');
