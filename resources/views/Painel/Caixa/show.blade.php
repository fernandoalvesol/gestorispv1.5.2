@extends('adminlte::page')

@section('title', 'GESTORISP')

@section('content_header')

<div class="container">
    <div class="row col-md-12">
        <div class="breadcrumb">
            <a href="{{url('/painel')}}" class="breadcrumb-item">Home  /</a> 
            <a href="{{url('/caixa')}}" class="breadcrumb-item">Fluxo de Caixa</a>
        </div>
        <div class="title-pg">
            @if(isset($caixas))

            <h1 class="title-pg">
            <i class="fas fa-file-invoice-dollar"></i>
                Exibir Entrada de Caixa: {{$caixas->DESCRICAO}}
            </h1>
            @else

            
            @endif

            <div class="voltar-lita">
                <i class="fas fa-arrow-circle-left"></i><a href="{{url('/caixas')}}"> Voltar para ao Fluxo de Caixa</a> 
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row col-md-12">
        <div class="box box-default">
            <div class="bloco-home box box-primary">

    <table class="tabela table table-striped">

        <div class="formulario">
            @if( isset($errors) && count($errors) > 0)

            <div class="alert alert-warning">
                @foreach($errors->all() as $error)

                <p>{{$error}}</p>
                @endforeach

            </div>

            @endif
            
            <!-- Formulario de Exibir-->

            <div class="form-group col-md-12 col-xl-12">

                <div class="form-group col-md-6 col-xl-6">
                @csrf
                    <label>Descrição</label>
                    <input type="text" name="descricao" class="form-control" placeholder="{{$caixas->DESCRICAO}}" disable="disable">
                </div>

                <div class="form-group col-md-2 col-xl-2">
                    <label>Título</label>
                    <input type="text" name="titulo" class="form-control" placeholder="{{$caixas->N_TITULO}}" disable="disable">
                </div>
                <div class="form-group col-md-2 col-xl-2">
                    <label>Placa do Veículo</label>
                    <input type="text" name="placa" class="form-control" placeholder="{{$caixas->PLACA}}" disable="disable">
                </div>
                <div class="form-group col-md-2 col-xl-2">
                    <label>Placa do Veículo</label>
                    <input type="text" name="valor" class="form-control" placeholder="R$ {{$caixas->VALOR}}" disable="disable">
                </div>
                                              
            </div>
                </table>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                Excluir Despesa
            </button>
            </div>
        </div>

        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="icone-alerta">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="del-modal">
                        Deseja Realmente Excluir o titulo: {{$caixas->N_TITULO}}                       
                    </div>
                        
                    <div class="modal-footer">
                        
                        {!! Form::open(['route' => ['caixaedit.destroy', $caixas->id], 'class' => 'form-search form-ds', 'method' => 'DELETE'])!!}

                        <div class="form-group">

                            {!! Form::submit("Sim", ['class' => 'btn btn-danger'])!!}

                        </div>

                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
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