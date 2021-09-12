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

Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::get('/behavior', 'App\Http\Controllers\PagesController@behavior')->name('behavior');

Route::get('/grade', 'App\Http\Controllers\PagesController@grade')->name('grade');

Route::get('/schedule', 'App\Http\Controllers\PagesController@schedule')->name('schedule');

Route::get('/home', 'App\Http\Controllers\PagesController@home')->name('home');

Route::get('/profile/{id}', function ($id) {
    return 'AMSAI Student ' . $id;
});
