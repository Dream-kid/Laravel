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






Route::get('/products','pagescontroller@products')->name('products');
Route::get('/details','pagescontroller@details')->name('details');
Route::get('/','pagescontroller@index')->name('index');
Route::get('/contact','pagescontroller@contact')->name('contact');


Route::group(['prefix'=>'admin'],function(){
Route::get('/','AdminPagesController@index')->name('admin.index');
Route::get('/product/create','AdminPagesController@product_create')->name('admin.product.create');
Route::get('/product/create','AdminPagesController@product_store')->name('admin.product.store');
});
