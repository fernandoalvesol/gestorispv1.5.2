@extends('adminlte::page')

@section('title', 'GESTORISP')

@section('content_header')

<div class="right_col" role="main">

    <div class="breadcrumb">
        <a href="/painel" class="breadcrumb-item">Home  /</a>
        <a href="" class="breadcrumb-item"> Indicadores</a>
    </div>

    <div class="title-pg">
        <h1 class="title">GESTÃO DOS INDICADORES</h1>
    </div>
    @can('view_caixa')
    @if( Session::has('sucess') )
    <div class="alert alert-success hide-msg" style="float: left; width: 100%; margin: 10px 0px;">
        {{Session::get('sucess')}}
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">               
                <a href="{{route('indicador.create')}}" class="btn-insert">
                    <span class="glyphicon glyphicon-plus"></span>
                    Cadastrar
                </a>      
            </div>
            <div class="col-md-6">
                <div class="form-search">
                    {!! Form::open(['route' => 'indicador.search', 'class' => 'form form-inline']) !!}
                    {!! Form::text('key-search', null, ['class' => 'form-control', 'placeholder' => 'Pesquisar por Certame:']) !!}
                    {!! Form::submit('Filtrar', ['class' => 'btn']) !!}
                    {!! Form::close() !!}
                </div>

            </div>                  
        </div>
    </div>
    <table class="tabela table table-striped">
        <tr>
            <th>Indicadores</th>
            <th>Descrição do Indicador</th>
            <th width="250">Ações</th>
        </tr>

        @forelse($indicadores as $indicador)
        <tr>
            <td>{{$indicador->name}}</td>
            <td>{{$indicador->descricao}}</td>

            <td>
                <a href="{{route('indicador.show', $indicador->id)}}" class="exibir_conteudo"><span class="glyphicon glyphicon-eye-open"></span> Exibir</a>
                <a href="{{route('indicador.edit', $indicador->id)}}" class="editar_conteudo"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                <!-- Botão para acionar modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                    Excluir
                </button>
                <!-- Modal -->
                <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">DESEJA REALMENTE EXCLUIR O INDICADOR?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-footer">

                                {!! Form::open(['route' => ['indicador.destroy', $indicador->id], 'class' => 'form-search form-ds', 'method' => 'DELETE'])!!}

                                <div class="form-group">

                                    {!! Form::submit("SIM", ['class' => 'btn btn-danger'])!!}

                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        @empty

        <p>Nenhum Indicador Cadastrado</p>

        @endcan
        @endforelse
    </table>

    @if( isset($dataForm) )
    {!! $indicadores->appends($dataForm)->links() !!}
    @else
    {!! $indicadores->links() !!}
    @endif


</div>



@endsection

@push('scripts')

<script>

    $('#meuModal').on('shown.bs.modal', function () {
        $('#meuInput').trigger('focus')
    })

</script>


