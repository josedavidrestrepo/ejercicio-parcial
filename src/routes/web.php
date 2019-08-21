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

use Illuminate\Support\Facades\Route;

Route::get('/inicio/{codigo}', 'InicioController@inicio')->name('inicio');
Route::get('/vehiculos', 'VehiculosController@index')->name('listarVehiculos');
Route::get('/vehiculos/stats', 'VehiculosController@stats')->name('estadisticasVehiculos');
Route::get('/vehiculos/create', 'VehiculosController@create')->name('registrarVehiculos');
Route::post('/vehiculos/store', 'VehiculosController@create')->name('almacenarVehiculo');


Route::get('/', function () {
    return view('welcome');
})->name('home');
