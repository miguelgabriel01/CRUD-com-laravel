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

//Rota responsavel por redirecionar o usuario para o form de cadastro de novos usuarios
Route::get('/usuarios/new', [App\Http\Controllers\UsuariosController::class, 'new']);

//Rota responsavel por cadastrar os novos usuários no banco de dados
Route::post('/usuarios/add', [App\Http\Controllers\UsuariosController::class, 'add']);

//Rota responsavel por redirecionar ao form de edição de dados
Route::get('/usuarios/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit']);
