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




//*purchasee-------------------------------------------------

Route::get('/purchase','PurchaseController@index');
Route::get('/purchase/create','PurchaseController@create');
Route::post('/purchase/submit','PurchaseController@store')->name('purchase.store');
Route::get('/purchasereport','PurchaseController@reportcreate');
Route::post('/submitreport','PurchaseController@reportstore')->name('report.store');

//*customer-------------------------------------------------

Route::get('/customer','CustomerController@index')->name('customer.index');
Route::get('/customer/create','CustomerController@create');
Route::post('/customer/submit','CustomerController@store')->name('customer.store');
Route::get('/customerreport','CustomerController@reportcreate');
Route::post('customersubmitreport','CustomerController@reportstore')->name('customerreport.store');




//*Test----------------------------------------------------------------
Route::get('/test','PurchaseController@test');
Route::get('/test2','PurchaseController@test2');
Route::get('test3','CustomerController@test3');
Route::get('test4','SellController@test4');


//----------------stock-------------------------

Route::get('/stock','StockController@index');


//*sell------------------------------------------------------------------

Route::get('/sell','SellController@index')->name('sell.index');
Route::get('/sell/create','SellController@create');
Route::post('/sell/submit','SellController@store')->name('sell.store');
Route::get('/sellreport','SellController@reportcreate');
Route::post('sellsubmitreport','SellController@sellreportstore')->name('sellreport.store');
//*-----------------------------------------------------




