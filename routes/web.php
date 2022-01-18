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
// all-product 
Route::get('/allproduct', 'HomeController@allProduct')->name('allProduct');
Route::get('/addproduct', 'HomeController@addProduct')->name('addProduct');

//all-employee
Route::get('/allemployee', 'HomeController@allEmployee')->name('allEmployee');
Route::post('/insert-employee','HomeController@store');
Route::get('/addemployee', 'HomeController@addEmployee')->name('addEmployee');

//all-category
Route::get('/allcategory', 'HomeController@allCategory')->name('allCategory');
Route::post('/insert-category','HomeController@category');
Route::get('/addcategory', 'HomeController@addCategory')->name('addCategory');



