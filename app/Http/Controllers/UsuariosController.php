<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //metodo para listar os usuario
    public function index(){
        return view('usuarios.list');//retorna a view que esta dentro da pasta usuarios e tem por nome list
    }
}
