<?php
use Illuminate\Http\Request;
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
    return view('home');
});

// Route::get('/customer', 'CustomerController@index')->name('index');
// Route::post('/customer/add', 'CustomerController@store')->name('add-customer');
// Route::get('/customer/{id}', 'CustomerController@show')->name('show-customer');
// Route::get('/customer/update/{id}', 'CustomerController@update')->name('update-customer');
// Route::delete('/customer/delete/{id}', 'CustomerController@destroy')->name('delete-customer');
