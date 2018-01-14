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
    if (auth()->check())
    {
        return redirect('dashboard');
    }
    else
    {
        return view('auth.login');
    }
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/dashboard/companies.json', 'CompanyController@getCompaniesData');

Route::get('/order/new/companies.json', 'CompanyController@getCompaniesSelect');

Route::get('/company/new', 'CompanyController@create');

Route::get('/company/{company}/orders', 'CompanyController@showOrders')->name('orders');

Route::post('/dashboard', 'CompanyController@store');

Route::get('/profile', 'ProfileController@show');

Route::post('/profile', 'ProfileController@update');

Route::get('/order/new', 'OrderController@create');

Route::post('/order/new', 'OrderController@store');

Route::delete('/order/delete/{order}', 'OrderController@destroy');