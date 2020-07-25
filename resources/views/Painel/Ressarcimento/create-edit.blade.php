@extends('adminlte::page')

@section('title', 'GESTORISP')

@section('content_header')

<div class="container">
    <div class="row col-md-12">
        <div class="breadcrumb">
            <a href="{{url('/painel')}}" class="breadcrumb-item"><i class="fas fa-tachometer-alt"></i>  Home  </a> > 
            <a href="{{url('/ressarcimento')}}" class="breadcrumb-item"> Ressarcimento</a>
        </div>
        <div class="title-pg">
            @if(isset($ressarcimento))

            <h1 class="title-pg">EDITAR: {{$ressarcimento->name}}</h1>
            
             <div class="voltar-lita">
                <i class="fas fa-arrow-circle-left"></i><a href="{{url('/ressarcimento')}}"> Voltar para a lista de Ressarcimentos</a> 
            </div>
            @else

            <h1 class="title-pg"><i class="fas fa-car"></i>
                CADASTRAR RESSARCIMENTO
            </h1>
            <div class="voltar-lita">
                <i class="fas fa-arrow-circle-left"></i><a href="{{url('/ressarcimento')}}"> Voltar para a lista de Ressarcimentos</a> 
            </div>
            
            @endif

        </div>
    </div>
</div>

<div class="container">
    <div class="row col-md-10">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="formulario">
                    @if( isset($errors) && count($errors) > 0)

                    <div class="alert alert-warning">
                        @foreach($errors->all() as $error)

                        <p>{{$error}}</p>
                        @endforeach

                    </div>

                    @endif

                    @if(isset($ressarcimento))
                    {!! Form::model($ressarcimento, ['route' => ['ressarcimento.update', $ressarcimento->id], 'class' => 'form-search form-ds', 'file' => true, 'method' => 'PUT'])!!}

                    @else
                    {!! Form::open(['route' => 'ressarcimento.store', 'class' => 'form-search form-ds', 'file' => true])!!}

                    @endif

                    <div class="form-group col-md-10 col-xl-10">
                        
                            <label>Nome do Associado</label>
                            {!! Form::text('name', null, ['placeholder' => 'Nome do Associado:', 'class' => 'form-control'])!!}
                        
                    </div>
                    <div class="form-group col-md-5 col-xl-5">  
                            <label>Tipo do Veículo</label>
                            {!! Form::text('tipo', null, ['placeholder' => 'Tipo do Veículo', 'class' => 'form-control'])!!}
                    </div>
                    <div class="form-group col-md-5 col-xl-5">  
                            <label>Cor do Veículo</label>
                            {!! Form::text('cor', null, ['placeholder' => 'Cor do Veículo', 'class' => 'form-control'])!!}
                    </div>
                    
                        <div class="form-group col-md-5 col-xl-5">  

                            <label>Placa do Veículo</label>
                            {!! Form::text('placa', null, ['placeholder' => 'Digite a Placa do Veículo:', 'class' => 'form-control'])!!}

                        </div>
                        <div class="form-group col-md-5 col-xl-5"> 

                            <label>Chassi do Veículo</label><br>
                            {!! Form::text('chassi', null, ['placeholder' => 'Digite o Chassi do Veículo:', 'class' => 'form-control'])!!}

                        </div>
                    
                        <div class="form-group col-md-5 col-xl-5"> 

                            <label>Data do Sinistro</label><br>
                            {!! Form::date('dtsinistro', null, ['placeholder' => 'Qual data do Sinistro:', 'class' => 'form-control'])!!}

                        </div>

                        <div class="form-group col-md-5 col-xl-5">  

                            <label>Data do Ressarcimento</label><br>
                            {!! Form::date('dtressarcimento', null, ['placeholder' => 'Qual a Data do Ressarcimento:', 'class' => 'form-control'])!!}

                        </div>
                     
                        <div class="form-group col-md-5 col-xl-5"> 

                            <label>Status</label>
                            {!! Form::select('status', ['S' => 'Escolha o Status', 'R' => 'Recuperado', 'N' => 'Não recuperado' ], null, ['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group col-md-5 col-xl-5"> 

                            <label>Data da Recuperação</label>
                            {!! Form::date('dtrecuperado', null, ['placeholder' => 'Qual a Data da Recuperação:', 'class' => 'form-control'])!!}

                        </div>
                        <div class="form-group col-md-10 col-xl-10">

                            <button class="btn btn-enviar"> Enviar</button>

                        </div>

                    {!! Form::close()!!}

                </div><!--Content Dinâmico-->


            </div>
        </div>

    </div>
</div>
@endsection