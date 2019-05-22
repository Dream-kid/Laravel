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






Route::get('/','pagescontroller@products')->name('products');
Route::get('/details','pagescontroller@details')->name('details');
Route::get('/leaderboard','pagescontroller@leaderboard')->name('leaderboard');
Route::get('/contact','pagescontroller@contact')->name('contact');
Route::get('/about','pagescontroller@about')->name('about');
Route::get('/insert','pagescontroller@insert')->name('insert');
Route::get('/insertthem','pagescontroller@insertthem')->name('insertthem');
Route::get('/update','pagescontroller@update')->name('update');
Route::get('/delete','pagescontroller@delete')->name('delete');
Route::get('/update_name','pagescontroller@update_name')->name('update_name');
Route::get('/update_email','pagescontroller@update_email')->name('update_email');
Route::get('/deletethem','pagescontroller@deletethem')->name('deletethem');
