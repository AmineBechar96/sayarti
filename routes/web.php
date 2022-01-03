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
//Route::post('add','App\Http\Controllers\HomeController@store');
Route::resource('/','App\Http\Controllers\HomeController');
Route::resource('home','App\Http\Controllers\HomeController');
Route::get('estimation','App\Http\Controllers\EstimationController@index')->name('estimation');
//Route::resource('compare','App\Http\Controllers\CompareController');
Route::resource('check','App\Http\Controllers\StateController');
Route::resource('budget','App\Http\Controllers\BudgetController');
Route::resource('best','App\Http\Controllers\Stati1Controller');
Route::resource('features','App\Http\Controllers\Stati2Controller');
Route::resource('market','App\Http\Controllers\Stati3Controller');
//Route::resource('additional-features','App\Http\Controllers\addiFeatController');
//Route::resource('rent-agencies','App\Http\Controllers\rentAgenController');
Route::resource('advanced','App\Http\Controllers\AdvancedController');
Route::resource('news','App\Http\Controllers\newsContoller');
Route::resource('recovery-truck','App\Http\Controllers\RecoveryTruckContoller');
//Route::resource('liked-services','App\Http\Controllers\likedServicesContoller');
//Route::resource('my-services','App\Http\Controllers\savedServicesContoller');
Route::resource('weekly-markets','App\Http\Controllers\weeklyMarketContoller');
Route::resource('general-mechanic','App\Http\Controllers\generalMechanicContoller');
Route::resource('detached-pieces-stores','App\Http\Controllers\detachedPiecesContoller');
Route::resource('sell-points','App\Http\Controllers\sellpointsContoller');
//Route::resource('transport-operators','App\Http\Controllers\transportContoller');

Route::get('{type}/agency-details/{id}','App\Http\Controllers\AgencyDetailsController@index');
Route::get('/model/{id}','App\Http\Controllers\HomeController@getmodel');
Route::get('/model_2/{id}','App\Http\Controllers\CompareController@getmodel');
Route::get('/model_3/{id}','App\Http\Controllers\AdvancedController@getmodel');
Route::get('/serie/{id}','App\Http\Controllers\HomeController@getserie');
Route::get('/serie_2/{id}','App\Http\Controllers\AdvancedController@getserie');
Route::get('/commune/{id}','App\\Http\Livewire\Counter@getCommune');
Route::get('/engine/{id}','App\Http\Controllers\HomeController@getengine');
Route::get('/power/{id}','App\Http\Controllers\HomeController@getpower');
Route::get('/type/{id}','App\Http\Controllers\HomeController@gettype');
Route::get('/tdi/{id}','App\Http\Controllers\HomeController@getTdi');

Route::get('/location/{id}','App\Http\Controllers\HomeController@getLocation');
//Route::get('/{page}', 'App\Http\Controllers\AdminController@index');


Route::resource('add-rating','App\Http\Controllers\RatingController');

