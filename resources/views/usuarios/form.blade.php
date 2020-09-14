@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{url('usuarios')}}">Listar usuário cadastrados</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                
                    @if( Request::is( '*/edit'))

                    <h1>Alterar dados</h1>

                    <form action="{{ url('usuarios/update' ) }}/{{ $usuario->id}}" method="POST">
                 @csrf
            
                    <div class="form-group">
                       <label for="exampleInputEmail1">Nome: </label>
                      <input type="text" class="form-control" name="name" value="{{ $usuario->name}}">
                    </div>

                    <div class="form-group">
                       <label for="exampleInputEmail1">E-mail: </label>
                      <input type="email" class="form-control" name="email" value="{{ $usuario->email}}">
                    </div>

              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>

              @else
              <h1>Cadastrar novo Usuário</h1>

                 <form action="{{ url('usuarios/add' )}}" method="POST">
                 @csrf

                    <div class="form-group">
                       <label for="exampleInputEmail1">Nome: </label>
                      <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                       <label for="exampleInputEmail1">E-mail: </label>
                      <input type="email" class="form-control" name="email">
                    </div>

              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
            @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection