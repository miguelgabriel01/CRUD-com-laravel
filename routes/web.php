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
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->middleware('auth');

//Rota responsavel por redirecionar o usuario para o form de cadastro de novos usuarios
Route::get('/usuarios/new', [App\Http\Controllers\UsuariosController::class, 'new'])->middleware('auth');

//Rota responsavel por cadastrar os novos usuários no banco de dados
Route::post('/usuarios/add', [App\Http\Controllers\UsuariosController::class, 'add'])->middleware('auth');

//Rota responsavel por redirecionar ao form de edição de dados
Route::get('/usuarios/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit'])->middleware('auth');

//Rota responsavel por receber os dados editados e salvar no banco
Route::post('/usuarios/update/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])->middleware('auth');

//Rota responsavel por deletar um usuario
Route::delete('/usuarios/delete/{id}', [App\Http\Controllers\UsuariosController::class, 'delete'])->middleware('auth');
