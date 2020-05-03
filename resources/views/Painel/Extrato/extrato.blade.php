@extends('adminlte::page')

@section('title', 'GESTORISP')

@section('content_header')
<div class="container">
    <div class="row col-md-12">
        <div class="breadcrumb">
            <a href="{{url('/painel')}}" class="breadcrumb-item">Home  /</a> 
            <a href="{{url('/indicadores')}}" class="breadcrumb-item">Indicadores</a>
        </div>

    </div>
</div>

<div class="container">

    <div class="container">

        <div class="title-extrados">
            <h2>EXTRATO POR PERÍODO</h2>
        </div>
        @can('view_caixa')
        <div class="row col-md-12 formulario-extrato">
            {{Form::open(['url' => 'gerar', 'method' => 'GET'])}}
            <div class="row form-group col-md-12">
                <div class="form-group col-md-4">
                    {{Form::label('dataInic', 'De: ') }}
                    {{Form::date('dataInic', isset($_GET['dataInic']) ? $_GET['dataInic'] : date('Y-m-d'), ['class' => 'form-control', 'required']) }}

                </div>
                <div class="form-group col-md-4">
                    {{Form::label('dataFinal', 'Até: ') }}
                    {{Form::date('dataFinal', isset($_GET['dataFinal']) ? $_GET['dataFinal'] : date('Y-m-d'), ['class' => 'form-control', 'required']) }}
                </div>                 
            </div>
            <div class="form-group">
                <button class="btn btn-extrato"> Enviar</button>
            </div>            
            {{Form::close()}}

        </div>
        <hr>
        <div class="row col-md-12">
            <div class="col-md-4">
                @php
                $entrada = 0;
                $saida = 0;
                @endphp
                @foreach($caixas as $caixa)
                @if($caixa->TIPO == 1)
                @php
                $entrada += $caixa->VALOR;
                @endphp
                @endif
                @if($caixa->TIPO == 2)
                @php
                $saida += $caixa->VALOR;
                @endphp
                @endif
                @endforeach

                <div class="entrar">Total de Entradas
                    <h1> &nbsp; R$ {{$entrada}}</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sair"> Total de Saídas
                    <h1> &nbsp; R$ {{$saida}}</h1>
                </div>
            </div>

            <div class="col-md-4">
                <div class="totalsaldo">

                    @php

                    $saldo = $entrada - $saida;

                    @endphp
                    <div class="sal">
                        Total do Saldo: 
                        <h1> R$ &nbsp; {{$saldo}}</h1>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <hr>

    <div class="col-md-12">

    <div class="row">
        <div class="box box-default">
            <div class="bloco-home box box-primary">
                <table class="tabela table table-striped">
            <thead>
                <tr class="table-fluxo">
                    <th>Tipo</th>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Filial</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                @foreach($caixas as $caixa)                

                <tr>
                    @if($caixa->TIPO == 1)
                    <td>Entrada</td>
                    @else
                    <td>Saída</td>
                    @endif
                    <td> {{date('d/m/Y', strtotime($caixa->DATA))}} </td>
                    <td>{{$caixa->DESCRICAO}}</td>
                    <td>{{$caixa->FILIAL}}</td>
                    <td>R$ &nbsp;{{$caixa->VALOR}}</td>
                    <td>

                </tr>

                @endforeach

            </tbody>
        </table>

    </div>
    </div>
    </div>

    @endcan
</div>



@endsection

