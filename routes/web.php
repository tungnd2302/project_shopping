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

	Route::get('/', 'HomeController@index')->name('home');
	Route::prefix('/categories')->group(function () {
	    Route::get('/','CategoriesController@index')->name('backend.category.index');
		Route::get('/create','CategoriesController@create')->name('backend.category.create');
		Route::post('/store','CategoryController@store')->name('backend.category.store');
		Route::get('/edit/{id}','CategoriesController@edit')->name('backend.category.edit');
		Route::put('/update/{id}','CategoryController@update')->name('backend.category.update');
		Route::get('/overview','CategoriesController@overview')->name('backend.category.overview');
		Route::delete('/destroy/{id}','CategoryController@destroy')->name('backend.category.destroy');
		Route::get('/{id}','CategoryController@show')->name('backend.category.show');
	});

	Route::prefix('/products')->group(function () {
	    Route::get('/','ProductsController@index')->name('backend.product.index');
		Route::get('/create','ProductsController@create')->name('backend.product.create');
		Route::post('/store', 'ProductController@store')->name('backend.product.store');
		Route::get('/edit/{id}','ProductsController@edit')->name('backend.product.edit');
		Route::put('/update/{id}', 'ProductController@update')->name('backend.product.update');
		Route::get('/overview','ProductsController@overview')->name('backend.product.overview');
		Route::get('/show/{id}','ProductsController@show')->name('backend.product.show');
		Route::get('/addmore/{id}','ProductsController@addmore')->name('backend.product.addmore');
		Route::delete('/destroy/{id}', 'ProductController@destroy')->name('backend.product.destroy');
	});

	Route::prefix('/providers')->group(function () {
	    Route::get('/','ProvidersController@index')->name('backend.provider.index');
		Route::get('/create','ProvidersController@create')->name('backend.provider.create');
		Route::post('/store', 'ProvidersController@store')->name('backend.provider.store');
		Route::get('/edit/{id}','ProvidersController@edit')->name('backend.provider.edit');
		Route::put('/update/{id}', 'ProvidersController@update')->name('backend.provider.update');
		Route::get('/overview','ProvidersController@overview')->name('backend.provider.overview');
	});

	Route::prefix('/bills')->group(function () {
	    Route::get('/','BillsController@index')->name('backend.bill.index');
		Route::get('/create','BillsController@create')->name('backend.bill.create');
		Route::post('/store', 'BillsController@store')->name('backend.bill.store');
		Route::get('/edit/{id}','BillsController@edit')->name('backend.bill.edit');
		Route::put('/update/{id}', 'BillsController@update')->name('backend.bill.update');
		Route::get('/overview','BillsController@overview')->name('backend.bill.overview');
		Route::get('/show/{id}','BillsController@show')->name('backend.bill.show');
	});

	Route::prefix('/customers')->group(function () {
	    Route::get('/','CustomersController@index')->name('backend.customers.index');
		Route::get('/create','CustomersController@create')->name('backend.customers.create');
		Route::get('/edit/{id}','CustomersController@edit')->name('backend.customers.edit');
		Route::get('/overview','CustomersController@overview')->name('backend.customers.overview');
		Route::get('/show/{id}','CustomersController@show')->name('backend.customers.show');
	});
	Route::prefix('/customer/types')->group(function () {
	    Route::get('/','CustomerTypesController@index')->name('backend.customerType.index');
		Route::get('/create','CustomerTypesController@create')->name('backend.customerType.create');
		Route::get('/edit/{id}','CustomerTypesController@edit')->name('backend.customerType.edit');
	});

	Route::prefix('user/roles')->group(function () {
		Route::get('/','RolesController@index')->name('backend.role.index');
		Route::get('/create','RolesController@create')->name('backend.role.create');
		Route::get('/edit/{id}','RolesController@edit')->name('backend.role.edit');
	});

	Route::prefix('user/roles')->group(function () {
	    Route::get('/','RolesController@index')->name('backend.role.index');
		Route::get('/create','RolesController@create')->name('backend.role.create');
		Route::get('/edit/{id}','RolesController@edit')->name('backend.role.edit');
		Route::get('/overview','RolesController@overview')->name('backend.role.overview');
		Route::get('/show/{id}','RolesController@show')->name('backend.role.show');
	});

	Route::prefix('/users')->group(function () {
	    Route::get('/','UsersController@index')->name('backend.user.index');
		Route::get('/create','UsersController@create')->name('backend.user.create');
		Route::get('/edit/{id}','UsersController@edit')->name('backend.user.edit');
		Route::get('/overview','UsersController@overview')->name('backend.user.overview');
		Route::get('/show/{id}','UsersController@show')->name('backend.user.show');
	});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
