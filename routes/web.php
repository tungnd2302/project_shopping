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


Route::get('/', 'HomeController@view');

Route::prefix('/categories')->group(function () {
    Route::get('/','CategoriesController@index');
	Route::get('/create','CategoriesController@create');
	Route::get('/edit/{id}','CategoriesController@edit');
	Route::get('/overview','CategoriesController@overview');
});

Route::prefix('/products')->group(function () {
    Route::get('/','ProductsController@index');
	Route::get('/create','ProductsController@create');
	Route::get('/edit/{id}','ProductsController@edit');
	Route::get('/overview','ProductsController@overview');
	Route::get('/show/{id}','ProductsController@show');
	Route::get('/addmore/{id}','ProductsController@addmore');
});

Route::prefix('/providers')->group(function () {
    Route::get('/','ProvidersController@index');
	Route::get('/create','ProvidersController@create');
	Route::get('/edit/{id}','ProvidersController@edit');
	Route::get('/overview','ProvidersController@overview');
});

Route::prefix('/bills')->group(function () {
    Route::get('/','BillsController@index');
	Route::get('/create','BillsController@create');
	Route::get('/edit/{id}','BillsController@edit');
	Route::get('/overview','BillsController@overview');
	Route::get('/show/{id}','BillsController@show');
});

Route::prefix('/customers')->group(function () {
    Route::get('/','CustomersController@index');
	Route::get('/create','CustomersController@create');
	Route::get('/edit/{id}','CustomersController@edit');
	Route::get('/overview','CustomersController@overview');
	Route::get('/show/{id}','CustomersController@show');
});

Route::prefix('/customer/types')->group(function () {
    Route::get('/','CustomerTypesController@index');
	Route::get('/create','CustomerTypesController@create');
	Route::get('/edit/{id}','CustomerTypesController@edit');
});

Route::prefix('user/roles')->group(function () {
    Route::get('/','RolesController@index');
	Route::get('/create','RolesController@create');
	Route::get('/edit/{id}','RolesController@edit');
	Route::get('/overview','RolesController@overview');
	Route::get('/show/{id}','RolesController@show');
});

Route::prefix('/users')->group(function () {
    Route::get('/','UsersController@index');
	Route::get('/create','UsersController@create');
	Route::get('/edit/{id}','UsersController@edit');
	Route::get('/overview','UsersController@overview');
	Route::get('/show/{id}','UsersController@show');
});


