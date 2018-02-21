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
    return view('welcome');

});
Route::get('/region', function () {
    return view('maintenance.region');
});

Route::get('/coc', function () {
    return view('maintenance.center_of_compitance');
    });
Route::post('/cocs','CenterOfCompitanceController@store');