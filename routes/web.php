<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard','HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');



Route::get('try',function(){
   return view('purchase.create');
});

Route::get('/purchase','PurchaseController@index');
Route::get('/purchase/create','PurchaseController@create');
Route::post('/purchase/submit','PurchaseController@store')->name('purchase.store');


Route::get('/customer','CustomerController@index');
Route::get('/customer/create','CustomerController@create');
Route::post('/customer/submit','CustomerController@store')->name('customer.store');

Route::get('/test','PurchaseController@test');




