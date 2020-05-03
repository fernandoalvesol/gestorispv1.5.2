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
                Gestão Usuário: {{$user->name}}
            </h1>
            @else

            
            @endif

            <div class="voltar-lita">
                <i class="fas fa-arrow-circle-left"></i><a href="{{url('/usuarios')}}"> Voltar para a lista de Usuários</a> 
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row col-md-12">
        <div class="box box-default">
            <div class="bloco-home box box-primary">
    <table class="tabela table table-striped">

        <div class="formulario">
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

            <div class="form-group col-md-12 col-xl-12">

                <div class="form-group col-md-6 col-xl-6">

                    <label>Nome do Usuario</label>
                    {!! Form::text('name', null, ['placeholder' => 'Usuarios:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}
                </div>
                <div class="form-group col-md-6 col-xl-6">
                    <label>Digite Seu Email</label>
                    {!! Form::text('email', null, ['placeholder' => 'Email:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}
                </div>
            </div>

            <div class="form-group col-md-12 col-xl-12">   
                <div class="form-group col-md-6 col-xl-6">

                    <label>Digite uma Senha</label>
                    {!! Form::password('password', ['placeholder' => 'Password:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}
                </div>

                <div class="form-group col-md-6 col-xl-6">

                    <label>Confirmar Sua Senha</label>
                    {!! Form::password('password_confirmation', ['placeholder' => 'Password:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}
                </div>
            </div>
            
        </div>
                </table>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                Excluir Usuário
            </button>
            </div>
        </div>

        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="icone-alerta">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>                  
                    <div class="del-modal">
                        Deseja Realmente Excluir o Usuário                       
                    </div>
                        
                    <div class="modal-footer">
                        
                        {!! Form::open(['route' => ['usuarios.destroy', $user->id], 'class' => 'form-search form-ds', 'method' => 'DELETE'])!!}

                        <div class="form-group">

                            {!! Form::submit("Sim", ['class' => 'btn btn-danger'])!!}

                        </div>

                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>       


{!! Form::close()!!}

@endsection

@push('scripts')

<script>

    $('#meuModal').on('shown.bs.modal', function () {
        $('#meuInput').trigger('focus')
    })

</script>