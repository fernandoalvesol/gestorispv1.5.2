<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Relatório Gerencial</title>
    </head>
    <body>

    <div class="container">
        <div class="row col-md-12">

        <div class="col-md-6">
            <h1>SETTA PROTEÇÃO VEICULAR</h1>
            <p>Relatório Gerancial Financeiro - Escritórios Setta</p>
            <p>Escritório / Operador: {{ auth()->user()->name}}</p>
            
        </div>
    </div>

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

        <div class="row">
            <table class="tabela table table-striped" style="margin-left: 5px">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Placa</th>
                        <th>Tipo</th>
                        <th>Data</th>
                        <th>Associado</th>
                        <th>Filial</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($caixas as $caixa)


                    <tr>
                        <td>{{$caixa->N_TITULO}}</td>
                        <td>{{$caixa->PLACA}}</td>
                        @if($caixa->TIPO == 1)
                        <td>Entrada</td>
                        @else
                        <td>Saída</td>
                        @endif                   
                        <td> {{date('d/m/Y', strtotime($caixa->DATA))}} </td>
                        <td>{{$caixa->DESCRICAO}}</td>
                        <td>{{$caixa->FILIAL}}</td>                    
                        <td>R$ &nbsp;{{$caixa->VALOR}}</td>
                        @can('view_caixa')
                        <td>

                        </td>
                        @endcan
                    </tr>
                    @empty
                <div style="text-align: center;">
                    <h3><b>CAIXA NÃO TEM MOVIMENTO</b></h3>
                </div>
                @endforelse
                </tbody>

            </table>
        </div>
</div>
    </body>
</html>