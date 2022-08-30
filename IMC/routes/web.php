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

Route::get('/', 'App\Http\Controllers\CombustivelController@index');

Route::get('/gasto', 'App\Http\Controllers\CombustivelController@gasto');

// Route::get('/', function () {
//     return view('welcome');
// });
