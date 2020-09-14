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
//Esta parte do codigo funciona para que toda vez que o usuario de um logout ou acesse a pagina, ele seja direcionado para a view de login
Route::group(['midleware' => 'web'], function(){


    Route::get('/',  [App\Http\Controllers\HomeController::class, 'index']);
    
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

//Rota responsavel por listar os usuario
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index']);

//Rota responsavel por cadastrar novo usuario
Route::get('/usuarios/new', [App\Http\Controllers\UsuariosController::class, 'new']);
