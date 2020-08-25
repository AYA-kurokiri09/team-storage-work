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
Route::post('service', 'ServiceController@postIndex');
Route::get('service_admin', 'ServiceController@index_admin') ->name('service.index_admin');

Route::get('service_newperson', 'ServiceController@newperson') ->name('service.newperson');
Route::post('service_newperson', 'ServiceController@personAdd') ->name('service.personAdd');

Route::get('service_loginafter', 'ServiceController@loginafter') ->middleware('auth') ->name('service.loginafter');
Route::get('service_main', 'ServiceController@main')  ->middleware('auth') ->name('service.main');
Route::get('service_sales_main', 'ServiceController@sales_main')  ->middleware('auth') ->name('service.sales_main');
Route::get('service_general_main', 'ServiceController@ganeral_main')  ->middleware('auth') ->name('service.general_main');

//研究開発部　回覧資料
Route::get('service_infile', 'ServiceController@infile')  ->middleware('auth') ->name('service.infile');
Route::post('service_infile', 'ServiceController@store');
Route::delete('/{showFile}', 'ServiceController@deleteFile');
//研究開発部　研修資料
Route::get('service_rd_files_ojt', 'ServiceController@rd_files_ojt')  ->middleware('auth') ->name('service.rd_files_ojt');
Route::post('service_rd_files_ojt', 'ServiceController@rd_files_ojt_store');

//営業部　回覧資料
Route::get('service_sales_files_circulate', 'ServiceController@sales_files_circulate')  ->middleware('auth') ->name('service.sales_files_circulate');
Route::post('service_sales_files_circulate', 'ServiceController@sales_files_circulate_store');
//Route::delete('/{showFile}', 'ServiceController@sales_files_circulate_deleteFile');等は無効。'/{showFile}'も変えて各ページ独自のdeleteメソッドを作るか？
//営業部　研修資料
Route::get('service_sales_files_ojt', 'ServiceController@sales_files_ojt')  ->middleware('auth') ->name('service.sales_files_ojt');
Route::post('service_sales_files_ojt', 'ServiceController@sales_files_ojt_store');

//総務部　回覧資料
Route::get('service_general_files_circulate', 'ServiceController@general_files_circulate')  ->middleware('auth') ->name('service.general_files_circulate');
Route::post('service_general_files_circulate', 'ServiceController@general_files_circulate_store');
//総務部　研修資料
Route::get('service_general_files_ojt', 'ServiceController@general_files_ojt')  ->middleware('auth') ->name('service.general_files_ojt');
Route::post('service_general_files_ojt', 'ServiceController@general_files_ojt_store');



Route::get('/logout', 'ServiceController@logOut') ->name('backToIndex');

Route::get('/home', 'HomeController@index')->name('home');