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
    return view('users');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/history', function () {
    return view('history');
});
Route::get('/reports', function () {
    return view('reports');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('/layouts/app', function () {
    return view('/layouts/app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
