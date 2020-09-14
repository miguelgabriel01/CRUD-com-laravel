<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

use Redirect;//Responsavel por redirecionar o usuario

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //metodo para listar os usuario
    public function index(){
        $usuarios = Usuario::get();

        return view('usuarios.list', ['usuarios' => $usuarios]);//retorna a view que esta dentro da pasta usuarios e tem por nome list e envia a variavel para ela 
    }

    //Metodo responsavel por credirecionar para o form de novos usuario
    public function new(){
        return view('usuarios.form');
    }

    //Metodo responsavel por cadastrar os novos usuários no banco de dados
    public function add( Request $request){
      
        $usuario = new Usuario;
        $usuario = $usuario->create( $request->all());

        //depois de cadastrar, o usuario é redirecionado
        return Redirect::to('/usuarios');//neste caso é redirecionado para a view que lista os usuarios cadastrados
    }

    //Metodo que redireciona para o form de edição dos dados do usuario
    public function edit( $id ){
        $usuario = findOrFail( $id );

        return view('usuarios.form', ['usuario' => $usuario]);//view que contem o form de edição de dados
    }
}
