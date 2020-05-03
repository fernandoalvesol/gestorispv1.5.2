@extends('adminlte::page')

@section('title', 'GESTORISP')

@section('content_header')
<div class="col-md-12 col-xl-12">
    <div class="col-md-4 col-xl-4">
        <div class="estilo-logo">
            <img src="{{url('img/setta_logomarca.png')}}" width="30%" height="30%">
        </div>
    </div>
    <div class="col-md-4 col-xl-4">
        <div class="titulo-home">
            <p>GESTORWEB V.1.4.2</p>
        </div>
    </div>
    <div class="col-md-4 col-xl-4">
        <div  class="sub-titulo-user">
            Seja Bem vindo: {{ auth()->user()->name }}
        </div>

    </div>

</div>


<!-- Apply any bg-* class to to the info-box to color it -->
@can('view_caixa')
<div class="topo-dashboard col-md-12 col-xl-12">
    <div class="col-md-3 col-xl-3">
        <div class="info-box bg-green">
            <span class="info-box-icon">
                <a href="{{url('/entradas')}}"><i class="fas fa-money-check-alt"></i></a>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">ENTRADAS R$</span>
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
                <span class="info-box-number">&nbsp; R$ {{$entrada}}</span>
                <!-- The progress section is optional -->
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>
    <div class="col-md-3 col-xl-3">
        <div class="info-box bg-red">
            <span class="info-box-icon">
                <a href="{{url('/saidas')}}"><i class="fas fa-dollar-sign"></i></a>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">SAIDAS R$</span>
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
                <span class="info-box-number">&nbsp; R$ {{$saida}}</span>
                <!-- The progress section is optional -->
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>
    <div class="col-md-3 col-xl-3">
        <div class="info-box bg-blue">
            <span class="info-box-icon">
                <a href="{{url('/extratos')}}"><i class="glyphicon glyphicon-calendar"></i></a>
            </span>
            <div class="info-box-content">
                @php

                $saldo = $entrada - $saida;

                @endphp
                <span class="info-box-text">EXTRATOS</span>
                <span class="info-box-number">&nbsp; R$ {{$saldo}}</span>
                <!-- The progress section is optional -->
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>

    <div class="col-md-3 col-xl-3">
        <div class="info-box bg-yellow">
            <span class="info-box-icon">
                <a href="{{url('/ressarcimento')}}"><i class="fas fa-car"></i></a>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">RECUPERADOS:</span>
                <p>{{$rec}}</p>
                <!-- The progress section is optional -->
                

            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>

    <div class="row col-md-12 col-xl-12">
        <div class="col-md-6 col-xl-6">
            <div class="box box-default">
                <div class="bloco-home box box-primary">

                    <p>Para gerenciar as informações de fluxo de caixa,
                        Ressarcimento de Veículo entre outros, use o painel lateral.</p>

                </div>

            </div>
        </div>
        <div class="col-md-6 col-xl-6">
            <div class="box box-default">
                <div class="bloco-home box box-info">

                    <p>O GESTORWEB, é um sistema voltado ao gerenciamento e gestão
                        de Associações e Provedores de Internet.</p>
                </div>

            </div>
        </div>
    </div>

</div>
@endcan

@stop