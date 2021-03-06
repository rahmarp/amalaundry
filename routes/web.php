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



Auth::routes();

Route::group(['middleware' => ['auth']], function()
{
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('member', 'MemberController');
    Route::resource('outlet', 'OutletController');
    Route::resource('paket', 'PaketController');
    Route::resource('user','UsersController');
    Route::resource('transaction','TransactionController');

    Route::get('/home', 'HomeController@index')->name('home');

    // Route::get('/transaction','TransactionController@index')->name('addtransaction');   
    // Route::post('/transaction/store','TransactionController@store')->name('transaction.store'); 
    Route::get('/cari', 'Select2Controller@loadData');
    Route::get('/cart/add/{id}', 'CartController@store')->name('cart.store');
});
