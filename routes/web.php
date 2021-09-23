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

use App\Comuna;
use App\Region;

Route::get('/regiones', function () {
    $regiones = Region::all();
    return view('welcome', compact('regiones'));
});
Route::get('/comunas', function (){
    $comunas = Comuna::all()->sort();
    return view('welcome2', compact('comunas'));
});
