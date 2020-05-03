@extends('adminlte::page')

@section('title', 'GESTORISP')

@section('content_header')

<div class="container">
    <div class="row col-md-12">
        <div class="breadcrumb">
            <a href="{{url('/painel')}}" class="breadcrumb-item">Home  /</a> 
            <a href="{{url('/indicadores')}}" class="breadcrumb-item">Indicadores</a>
        </div>
        <div class="title-pg">
            <h1 class="title-pg">INDICADOR Nº  <b>{{$indicadores->id or 'Novo'}}</b></h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">  
        
        <div class="formulario">
            @if( isset($errors) && count($errors) > 0)

            <div class="alert alert-warning">
                @foreach($errors->all() as $error)

                <p>{{$error}}</p>
                @endforeach

            </div>

            @endif


            @if(isset($indicadores))
            {!! Form::model($indicadores, ['route' => ['indicador.update', $indicadores->id], 'class' => 'form-search form-ds', 'file' => true, 'method' => 'PUT'])!!}

            @else
            {!! Form::open(['route' => 'indicador.store', 'class' => 'form-search form-ds', 'file' => true])!!}

            @endif

            <div class="form-group col-md-12 col-xl-12">      

                <label>Nome do Indicador</label>
                {!! Form::text('name', null, ['placeholder' => 'Indicadores:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}

            </div>
            <div class="form-group col-md-12 col-xl-12">      

                <label>Descrição</label>
                {!! Form::textarea('descricao', null, ['placeholder' => 'Descrição:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}

            </div>  
        </div>    
    
    </div>
</div>
@endsection