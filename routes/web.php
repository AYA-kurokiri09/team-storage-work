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
    return view('welcome');
});

Auth::routes();
Route::get('service', 'ServiceController@index') ->name('service.index');
Route::get('service_admin', 'ServiceController@index_admin') ->name('service.index_admin');

Route::get('service/auth_login', 'ServiceController@getAuth');
Route::post('service/auth_login', 'ServiceController@postAuth');

Route::get('service_loginafter', 'ServiceController@loginafter') ->name('service.loginafter');

Route::get('service_main', 'ServiceController@main') ->name('service.main');

Route::get('service_infile', 'ServiceController@infile') ->name('service.infile');
Route::post('service_infile', 'ServiceController@store');

Route::get('/home', 'HomeController@index')->name('home');