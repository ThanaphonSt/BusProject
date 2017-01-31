<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]
);

Route::get('/oei', 'HomeController@test');
Route::get('/current', 'BusController@index');
Route::get('/routeofpotong', 'BusController@potongRouteDetail');
Route::get('/routeofsongteaw', 'BusController@songteawRouteDetail');
Route::get('/routeofairportbus', 'BusController@airportBusRouteDetail');
Route::get('/potongstop', 'BusController@potongStop');
Route::get('/songteawstop', 'BusController@songteawStop');
Route::get('/airportstop', 'BusController@airportStop');
Route::get('/map', 'BusController@map');
Route::get('/routeofpotong1', 'BusController@map1');
Route::get('/routeofpotong2', 'BusController@map2');
Route::get('/routeofpotong3', 'BusController@map3');
Route::get('/potongstopshopping', 'BusController@potongShopping');
Route::get('/potongstophotel', 'BusController@potongHotel');
Route::get('/potongstoprestaurant', 'BusController@potongRestaurant');