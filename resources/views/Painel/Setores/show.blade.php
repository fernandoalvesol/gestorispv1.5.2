@extends('adminlte::page')

@section('title', 'GESTORISP')

@section('content_header')

<div class="container">
    <div class="row col-md-12">
        <div class="breadcrumb">
            <a href="{{url('/painel')}}" class="breadcrumb-item">Home  /</a> 
            <a href="{{url('/setores')}}" class="breadcrumb-item">Setores</a>
        </div>
        <div class="title-pg">
            <h1 class="title-pg">SETOR Nº  <b>{{$setores->id or 'Novo'}}</b></h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row col-md-12">

        <div class="formulario">
            @if( isset($errors) && count($errors) > 0)

            <div class="alert alert-warning">
                @foreach($errors->all() as $error)

                <p>{{$error}}</p>
                @endforeach

            </div>

            @endif


            @if(isset($setores))
            {!! Form::model($setores, ['route' => ['setores.update', $setores->id], 'class' => 'form-search form-ds', 'file' => true, 'method' => 'PUT'])!!}

            @else
            {!! Form::open(['route' => 'setores.store', 'class' => 'form-search form-ds', 'file' => true])!!}

            @endif

            <div class="form-group col-md-12 col-xl-12">

                <div class="form-group col-md-3 col-xl-3">
                    <label>Nome do Setor</label>
                    {!! Form::text('name', null, ['placeholder' => 'Indicadores:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}
                </div>
                <div class="form-group col-md-6 col-xl-6">    

                    <label>Localização</label>
                    {!! Form::text('localizacao', null, ['placeholder' => 'Localização:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}

                </div>
                <div class="form-group col-md-3 col-xl-3">    

                    <label>Nível do Risco</label><br>
                    {!! Form::select('risco', ['Nenhum' => 'Nenhum', 'Baixo' => 'Baixo', 'Medio' => 'Médio', 'Alto' => 'Alto', 'disabled' => 'disabled'])!!}

                </div>
            </div>
            <div class="form-group col-md-12 col-xl-12">
                <div class="form-group col-md-12 col-xl-12">      

                    <label>Descrição</label>
                    {!! Form::textarea('descricao', null, ['placeholder' => 'Descrição:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}

                </div>
                
            </div>  


            {!! Form::close()!!}

        </div><!--Content Dinâmico-->

    </div>
</div>
@endsection