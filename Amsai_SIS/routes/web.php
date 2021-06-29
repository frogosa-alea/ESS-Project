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

Route::get('/', function () {
    return view('landing');
});

Route::get('/loginStudent', function () {
    return view('login-student');
});
Route::get('/loginFaculty', function () {
    return view('login-faculty');
});

Route::get('/admin', function () {
    return view('admin-homepage');
});

Route::get('/admin-student', function () {
    return view('admin-student');
});

