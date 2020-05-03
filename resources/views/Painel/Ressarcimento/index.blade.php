@extends('adminlte::page')

@section('title', 'GESTORISP')

@section('content_header')

<div class="right_col" role="main">

    <div class="breadcrumb">
        <a href="/painel" class="breadcrumb-item"><i class="fas fa-tachometer-alt"></i>  Home </a>  >  Ressarcimento
    </div>

    <div class="title-pg">
        <h1 class="title">
            <i class="fas fa-car"></i>RESSARCIMENTO DE VEÍCULOS
        </h1>
    </div>

    @if( Session::has('sucess') )
    <div class="alert alert-success hide-msg" style="float: left; width: 100%; margin: 10px 0px;">
        {{Session::get('sucess')}}
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">               
                <a href="{{route('ressarcimento.create')}}" class="btn-insert">
                    <span class="glyphicon glyphicon-plus"></span>
                    Cadastrar
                </a>      
            </div>
            <div class="col-md-4">               
                <a href="{{url('pdfressarcimento')}}" class="btn-insert">
                    <span class="glyphicon glyphicon-file"></span>
                    Relatório
                </a>      
            </div>
            <div class="col-md-4">

                <div class="form-search">
                    {!! Form::open(['route' => 'ressarcimento.search', 'class' => 'form form-inline']) !!}
                    {!! Form::text('key-search', null, ['class' => 'form-control', 'placeholder' => 'Pesquisar por Veículo:']) !!}
                    {!! Form::submit('Filtrar', ['class' => 'btn']) !!}
                    {!! Form::close() !!}
                    <span>Digite a placa ou o status</span>
                </div>


            </div>                  
        </div>
    </div>
    <div class="box box-default">
        <div class="bloco-home box box-primary">
            <table class="tabela table table-striped">
                <tr class="menu-table">
                    <th>Associado</th>
                    <th>Placa</th>
                    <th>Tipo</th>
                    <th>Chassi</th>
                    <th>Data Sinistro</th>
                    <th>Data Ressarcimento</th>            
                    <th>Status</th>
                    <th>Data Recuperação</th>
                    <th width="250">Ações</th>
                </tr>

                @forelse($ressarcimento as $ressarcimentos)
                <tr>
                    <td>{{$ressarcimentos->name}}</td>
                    <td>{{$ressarcimentos->placa}}</td>
                    <td>{{$ressarcimentos->tipo}}</td>
                    <td>{{$ressarcimentos->chassi}}</td>
                    <td>{{$ressarcimentos->dtsinistro}}</td>
                    <td>{{$ressarcimentos->dtressarcimento}}</td>            
                    <td>{{$ressarcimentos->status}}</td>                      
                    <td>{{$ressarcimentos->dtrecuperado}}</td>

                    <td>

                        <a href="{{route('ressarcimento.show', $ressarcimentos->id)}}" class="exibir_conteudo"><span class="glyphicon glyphicon-eye-open"></span> EXIBIR</a>
                        <a href="{{route('ressarcimento.edit', $ressarcimentos->id)}}" class="editar_conteudo"><span class="glyphicon glyphicon-pencil"></span> EDITAR</a>
                        <!-- Botão para acionar modal -->


                    </td>
                </tr>

                @empty

                <p>Nenhum Veiculo Cadastrado</p>


                @endforelse
            </table>

        </div>
    </div>  

    @if( isset($dataForm) )
    {!! $ressarcimento->appends($dataForm)->links() !!}
    @else
    {!! $ressarcimento->links() !!}
    @endif

</div>
@endsection

@push('scripts')

<script>

    $('#meuModal').on('shown.bs.modal', function () {
        $('#meuInput').trigger('focus')
    })

</script>

