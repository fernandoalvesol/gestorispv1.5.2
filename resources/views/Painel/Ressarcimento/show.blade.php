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

            <h1 class="title-pg">Gestão de Ressarcimento: {{$ressarcimento->name}}</h1>


            <div class="voltar-lita">
                <i class="fas fa-arrow-circle-left"></i><a href="{{url('/ressarcimento')}}"> Voltar para a lista de Ressarcimentos</a> 
            </div>
            @else

            <h1 class="title-pg">EXIBIR RESSARCIMENTO</h1>

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

                        <div class="form-group col-md-10 col-xl-10">
                            <label>Nome do Associado</label>
                            {!! Form::text('name', null, ['placeholder' => 'Nome do Associado:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}
                        </div>
                    </div>
                    <div class="form-group col-md-10 col-xl-10">

                        <div class="form-group col-md-10 col-xl-10">
                            <label>Tipo do Veículo</label>
                            {!! Form::text('tipo', null, ['placeholder' => 'Tipo do Veículo', 'class' => 'form-control', 'disabled' => 'disabled'])!!}
                        </div>
                    </div>
                    <div class="form-group col-md-10 col-xl-10">
                        <div class="form-group col-md-5 col-xl-5">  

                            <label>Placa do Veículo</label>
                            {!! Form::text('placa', null, ['placeholder' => 'Digite a Placa do Veículo:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}

                        </div>
                        <div class="form-group col-md-5 col-xl-5"> 

                            <label>Chassi do Veículo</label><br>
                            {!! Form::text('chassi', null, ['placeholder' => 'Digite o Chassi do Veículo:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}

                        </div>
                    </div>
                    <div class="form-group col-md-10 col-xl-10"> 
                        <div class="form-group col-md-5 col-xl-5"> 

                            <label>Data do Sinistro</label><br>
                            {!! Form::date('dtsinistro', null, ['placeholder' => 'Qual data do Sinistro:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}

                        </div>

                        <div class="form-group col-md-5 col-xl-5">  

                            <label>Data do Ressarcimento</label><br>
                            {!! Form::date('dtressarcimento', null, ['placeholder' => 'Qual a Data do Ressarcimento:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}

                        </div>
                    </div>

                    <div class="form-group col-md-10 col-xl-10">  
                        <div class="form-group col-md-5 col-xl-5"> 

                            <label>Status</label>
                            {!! Form::text('status', null, ['placeholder' => 'Digite o Status:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}
                        </div>


                        <div class="form-group col-md-5 col-xl-5"> 

                            <label>Data da Recuperação</label>
                            {!! Form::date('dtrecuperado', null, ['placeholder' => 'Qual a Data da Recuperação:', 'class' => 'form-control', 'disabled' => 'disabled'])!!}

                        </div>
                    </div>

                    {!! Form::close()!!}

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                        Excluir Ressarcimento
                    </button>
                    
                    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header del-icones">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <div class="del-modal">
                                    Você tem Certeza?                       
                                </div>

                                <div class="del-modal">
                                    Você não poderá recuperar mais o registro.

                                </div>

                                <div class="modal-footer">

                                    {!! Form::open(['route' => ['ressarcimento.destroy', $ressarcimento->id], 'class' => 'form-search form-ds', 'method' => 'DELETE'])!!}

                                    <div class="form-group">

                                        {!! Form::submit("Sim", ['class' => 'btn btn-danger'])!!}

                                    </div>

                                    {!! Form::close()!!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!--Content Dinâmico-->
            </div>
        </div>
    </div>
    @endsection


    @push('scripts')

    <script>

        $('#meuModal').on('shown.bs.modal', function () {
            $('#meuInput').trigger('focus')
        })

    </script>