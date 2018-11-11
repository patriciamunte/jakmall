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
Auth::routes();
Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/prepaid-balance', function () {

    return view('prepaid-balance');
})->middleware('auth');

Route::resource('prepaid', 'PrepaidBalanceController');

Route::get('/product', function(){
	return view ('product');
})->middleware('auth');

Route::resource('products', 'ProductController');

Route::get('/payment', function(){
	return view ('payment');

})->middleware('auth');

Route::resource('payments', 'PaymentController');

Route::get('/order','OrderController@index', function(){
	})->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
