@extends('adminlte::page')

@section('title', 'GESTORISP')

@section('content_header')
<div class="container">
    <div class="row col-md-12">
        <div class="breadcrumb">
        <a href="{{url('/painel')}}" class="breadcrumb-item">Home  /</a> 
            <a href="{{url('/caixas')}}" class="breadcrumb-item">Fluxo de Caixa</a>
        </div>

    </div>
</div>

<div class="container">
    <div class="row col-md-12">

        <div class="title-pg">            
            
            <h1 class="title-pg">CONTROLE DE SAÍDAS</h1>
            
        </div>

        <div class="form-entradas col-md-12">
            @if( isset($errors) && count($errors) > 0)

            <div class="alert alert-warning">
                @foreach($errors->all() as $error)

                <p>{{$error}}</p>
                @endforeach

            </div>

            @endif
            {!! Form::open(['route' => 'sair.store', 'class' => 'form-search form-ds', 'file' => true]) !!}
            {{ Form::hidden('TIPO', '2')}}

            <div class="form-group col-md-12 col-xl-12">

                <div class="form-group col-md-6 col-xl-6">

                    <label>Descrição</label>
                    {!! Form::text('DESCRICAO', null, ['placeholder' => 'Digite o nome do Associado:', 'class' => 'form-control'])!!}
                </div>
                <div class="form-group col-md-3 col-xl-3">

                    <label>Conta</label><br>
                    {!! Form::select('CONTA', ['placeholder' => 'Escolha a Conta', 'NENHUMA' => 'NENHUMA', 'DIVERSOS' => 'DIVERSOS',
                         'SANGRIA' => 'SANGRIA', 'REFEIÇÃO' => 'REFEIÇÃO', 'ABASTECIMENTO' => 'ABASTECIMENTO', 'OUTROS' => 'OUTROS'])!!}
                </div>
               <div class="form-group col-md-3 col-xl-3">

                   <label>Filial</label><br>
                    {!! Form::select('FILIAL', $filial, ['placeholder' => 'Escolha a Sua Filial:', 'class' => 'form-control'])!!}
                </div>
            </div>
            <div class="form-group col-md-12 col-xl-12">   
                <div class="form-group col-md-4 col-xl-4">

                    <label>Numero do Título</label>
                    {!! Form::text('N_TITULO', null, ['placeholder' => 'Digite o Numero do Titulo:', 'class' => 'form-control'])!!}
                </div>
                 <div class="form-group col-md-4 col-xl-4">

                    <label>Data do Lançamento</label>
                    {!! Form::date('DATA', null, ['placeholder' => 'Data do Lançamento:', 'class' => 'form-control'])!!}
                </div>
                <div class="form-group col-md-4 col-xl-4">

                    <label>Valor R$</label>
                    {!! Form::number('VALOR', '', ['placeholder'=> 'Valor', 'class' => 'form-control', 'required', 'step' => 0.01, 'id' => 'VALOR']) !!}
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

@push('scripts')

<script>

    $('#meuModal').on('shown.bs.modal', function () {
        $('#meuInput').trigger('focus')
    })

</script>


