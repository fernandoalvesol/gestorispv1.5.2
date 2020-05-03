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
            @if(isset($indicadores))

            <h1 class="title-pg">INDICADOR Nº {{$indicadores->id}}</h1>
            @else

            <h1 class="title-pg">CADASTRAR NOVO INDICADOR</h1>

            @endif

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


            @if(isset($indicadores))
            {!! Form::model($indicadores, ['route' => ['indicador.update', $indicadores->id], 'class' => 'form-search form-ds', 'file' => true, 'method' => 'PUT'])!!}

            @else
            {!! Form::open(['route' => 'indicador.store', 'class' => 'form-search form-ds', 'file' => true])!!}

            @endif

            <div class="form-group col-md-12 col-xl-12">

                <div class="form-group col-md-12 col-xl-12">

                    <label>Nome do Indicador</label>
                    {!! Form::text('name', null, ['placeholder' => 'Indicadores:', 'class' => 'form-control'])!!}
                </div>
            </div>
            <div class="form-group col-md-12 col-xl-12">   
                <div class="form-group col-md-12 col-xl-12">  

                    <label>Descrição</label>
                    {!! Form::textarea('descricao', null, ['placeholder' => 'Descrição:', 'class' => 'form-control'])!!}
                </div>
            </div> 
            <div class="form-group col-md-12 col-xl-12">
                <div class="form-group col-md-12 col-xl-12">
                    <button class="btn btn-enviar"> Enviar</button>
                </div>
            </div>
        </div> 
    </div>       


    {!! Form::close()!!}

</div><!--Content Dinâmico-->
@endsection