@extends('adminlte::page')

@section('title', 'GESTORISP')

@section('content_header')

<div class="container">
    <div class="row col-md-12">
        <div class="breadcrumb">
            <a href="{{url('/painel')}}" class="breadcrumb-item">Home  /</a> 
            <a href="{{url('/usuarios')}}" class="breadcrumb-item">Usuarios</a>
        </div>

        <div class="title-pg">
            @if(isset($user))

            <h1 class="title-pg">
                <i class="fas fa-user-plus"></i>
                EDITAR USUÁRIO: {{$user->name}}
            </h1>

            <div class="voltar-lita">
                <i class="fas fa-arrow-circle-left"></i><a href="{{url('/usuarios')}}"> Voltar para a lista de Usuários</a> 
            </div>

            @else

            <h1 class="title-pg"><i class="fas fa-user-plus"></i>
            CADASTRAR NOVO USUARIO
            </h1>
            <div class="voltar-lita">
                <i class="fas fa-arrow-circle-left"></i><a href="{{url('/usuarios')}}"> Voltar para a lista de Usuários</a> 
            </div>

            @endif

        </div>
    </div>
</div>

<div class="container">
    <div class="row col-md-12">
        <div class="box box-default">
            <div class="bloco-home box box-primary">
                <table class="tabela table table-striped">
                     <div class="formulario-caduser">
                        @if( isset($errors) && count($errors) > 0)

                            <div class="alert alert-warning">
                                @foreach($errors->all() as $error)

                                <p>{{$error}}</p>
                                @endforeach

                            </div>

                                @endif

                                @if(isset($user))
                                {!! Form::model($user, ['route' => ['usuarios.update', $user->id], 'class' => 'form-search form-ds', 'file' => true, 'method' => 'PUT'])!!}

                                @else
                                {!! Form::open(['route' => 'usuarios.store', 'class' => 'form-search form-ds', 'file' => true])!!}

                                @endif

                            <div class="form-group col-md-10 col-xl-10">
                                <label>Nome do Usuario</label>
                                {!! Form::text('name', null, ['placeholder' => 'Usuarios:', 'class' => 'form-control'])!!}
                            </div>
                            <div class="form-group col-md-10 col-xl-10">
                                <label>Digite Seu Email</label>
                                {!! Form::text('email', null, ['placeholder' => 'Email:', 'class' => 'form-control'])!!}
                            </div>
                            <div class="form-group col-md-10 col-xl-10">
                                <label>Selecione o Perfil</label>
                                {!! Form::select('role', $roles, null, ['placeholder' => 'Selecione o Perfil:', 'class' => 'form-control'])!!}
                            </div>
                            <div class="form-group col-md-10 col-xl-10">
                                <label>Selecione a Filial</label>
                                {!! Form::select('filial', $filial, null, ['placeholder' => 'Selecione a Filial:', 'class' => 'form-control'])!!}
                            </div>
                            <div class="form-group col-md-10 col-xl-10">
                                <label>Digite uma Senha</label>
                                {!! Form::password('password', ['placeholder' => 'Password:', 'class' => 'form-control'])!!}
                            </div>

                            <div class="form-group col-md-10 col-xl-10">

                                <label>Confirmar Sua Senha</label>
                                {!! Form::password('password_confirmation', ['placeholder' => 'Password:', 'class' => 'form-control'])!!}
                            </div>
                        </div>
                    </table>                   
                        <div class="form-group">
                            <button class="btn btn-cad-user"> Enviar</button>

                        </div>

                              
                </div>
                        </div>     
        
    </div>
</div>

{!! Form::close()!!}

@endsection