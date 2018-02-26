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

Route::get('/', ['as'=>'aust_home', 'uses'=>'AustmetalController@index']);
Route::get('/About', ['as'=>'aust_about', 'uses'=>'AustmetalController@company']);
Route::get('/Products & Services', ['as'=>'aust_services', 'uses'=>'AustmetalController@services']);
Route::get('/Contact', ['as'=>'aust_contact', 'uses'=>'AustmetalController@contact']);
Route::get('/Gallery', ['as'=>'aust_gallery', 'uses'=>'AustmetalController@gallery']);
Route::get('/Gallery Fencerails', ['as'=>'aust_fencerails', 'uses'=>'AustmetalController@fencerails']);
Route::get('/Gallery Gates', ['as'=>'aust_gates', 'uses'=>'AustmetalController@gates']);
Route::get('/Gallery Handrails', ['as'=>'aust_handrails', 'uses'=>'AustmetalController@handrails']);
Route::get('/Gallery Iron Door', ['as'=>'aust_irondoor', 'uses'=>'AustmetalController@irondoor']);
Route::get('/Gallery Staircase', ['as'=>'aust_staircase', 'uses'=>'AustmetalController@staircase']);
Route::get('/Gallery Window Burglary', ['as'=>'aust_window', 'uses'=>'AustmetalController@window']);

/* Middleware for Admin */
Route::group(['middleware'=>'authuser'], function() {
  Route::get('Dashboard', ['as'=>'aust_dashboard', 'uses'=>'DashboardController@index']);
  Route::resource('fencerail', 'FencerailController');
  Route::resource('gate', 'GateController');
  Route::resource('handrail', 'HandrailController');
  Route::resource('irondoor', 'IronDoorController');
  Route::resource('staircase', 'StaircaseController');
  Route::resource('window', 'WindowController');
});
Auth::routes();
