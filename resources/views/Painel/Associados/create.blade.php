@extends('adminlte::page')

@section('title', 'GESTORISP')

@section('content_header')

<div class="container">
    <div class="row col-md-12">
        <div class="breadcrumb">
            <a href="{{url('/painel')}}" class="breadcrumb-item">Home  /</a> 
            <a href="{{url('/adesao')}}" class="breadcrumb-item">Associado</a>
        </div>
        <div class="title-pg">
          
            <h1 class="title-pg"><i class="fas fa-user-tie" aria-hidden="true"></i>CADASTRAR NOVO ASSOCIADO</h1>           

        </div>        
    </div>
    <div class="voltar-lista-adesao">
        <i class="fas fa-arrow-circle-left"></i><a href="{{url('/adesao')}}"> Voltar para a lista de Usuários</a> 
    </div>

</div>

<div class="container">
    <div class="row col-md-12">
        <div class="box box-default">
            <div class="bloco-home box box-primary">
                <table class="tabela table table-striped">
                     <div class="formulario">

                        {!! Form::open(['route' => 'adesao.store', 'class' => 'form form-school', 'files' => true]) !!}

                            @include('Painel.Associados.form')

                        {{Form::close()}}
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection