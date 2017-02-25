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

/*Event::listen('eloquent.created: App\Report', function () {
    var_dump('We are ready');
});*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/reports', 'ReportsController');

Route::get('/profile', 'ProfileController@index');