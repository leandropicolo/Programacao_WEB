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
Route::get('/', 'App\Http\Controllers\PrimeiroController@hello');

Route::prefix('usuario')->group(function(){
    Route::get('', function(){
        return 'usuario';
    });
    Route::get('/{id}', function($id){
        return 'Mostrar detalhes usuario'.$id;
    });
    Route::get('/{id}/tags', function($id){
        return 'Tags do usuario'.$id;
    });
});

Route::get('/users/{id}', function($id=null){
    return 'Id do Usuário: '.$id;
});


Route::get('/users/{paramA}/{paramB}', function($paramA, $paramB){
    return 'Parametros: '.$paramA.' - '.$paramB;
});
// Route::get('/', function () {
//     return view('welcome');
// });
