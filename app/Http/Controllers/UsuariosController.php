<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //metodo para listar os usuario
    public function index(){
        $usuarios = Usuario::get();

        return view('usuarios.list', ['usuarios' => $usuarios]);//retorna a view que esta dentro da pasta usuarios e tem por nome list e envia a variavel para ela 
    }

    //Metodo responsavel por cadastrar novo usuario
    public function new(){
        return view('usuarios.form');
    }
}
