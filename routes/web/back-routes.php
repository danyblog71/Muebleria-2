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

///categories
Route::get('/admin/categorias', 'AdminControllers\CategoryController@index')->name('admin.category_index');

Route::get('/admin/categoria/crear', 'AdminControllers\CategoryController@create')->name('admin.category_create');

Route::post('/admin/categorias/guardar', 'AdminControllers\CategoryController@store')->name('admin.category_store');

Route::delete('/admin/categorias/{id}','AdminControllers\CategoryController@destroy')->name('admin.category_delete');

Route::get('/admin/categorias/{id}/edit', 'AdminControllers\CategoryController@edit')->name('admin.category_edit');

Route::put('/admin/categorias/{id}/update', 'AdminControllers\CategoryController@update')->name('admin.category_update');

//products
Route::get('/admin', 'AdminControllers\ProductController@index')->name('admin.products_index');

Route::get('/admin/products/create', 'AdminControllers\ProductController@create')->name('admin.products_create');

Route::post('/admin/products/save', 'AdminControllers\ProductController@store')->name('admin.products_store');

Route::delete('/admin/products/{id}','AdminControllers\ProductController@destroy')->name('admin.products_delete');

Route::get('/admin/products/{product}/edit', 'AdminControllers\ProductController@edit')->name('admin.products_edit');

Route::put('/admin/products/{product}/update', 'AdminControllers\ProductController@update')->name('admin.products_update');