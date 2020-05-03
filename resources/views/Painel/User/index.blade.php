@extends('adminlte::page')

@section('title', 'GESTORISP')

@section('content_header')

<div class="right_col" role="main">

    <div class="breadcrumb">
        <a href="/painel" class="breadcrumb-item">Home  /</a>
        <a href="" class="breadcrumb-item"> Usuarios</a>
    </div>


    <div class="title-pg">
        <h1 class="title">
            <i class="fas fa-user-plus"></i> GESTÃO DE USUÁRIOS
        </h1>
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
                <a href="{{route('usuarios.create')}}" class="btn-insert">
                    <span class="glyphicon glyphicon-plus"></span>
                    Cadastrar
                </a>      
            </div>
            <div class="col-md-6">
                <div class="form-search">
                    {!! Form::open(['route' => 'usuarios.search', 'class' => 'form form-inline']) !!}
                    {!! Form::text('key-search', null, ['class' => 'form-control', 'placeholder' => 'Pesquisar por Certame:']) !!}
                    {!! Form::submit('Filtrar', ['class' => 'btn']) !!}
                    {!! Form::close() !!}
                </div>

            </div>                  
        </div>
    </div>
    <div class="box box-default">
        <div class="bloco-home box box-primary">
            <table class="tabela table table-striped">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th width="250">Ações</th>
        </tr>

        @forelse($user as $users)
        <tr>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>

            <td>
                <a href="{{route('usuarios.show', $users->id)}}" class="exibir_conteudo"><span class="glyphicon glyphicon-eye-open"></span> Exibir</a>
                <a href="{{route('usuarios.edit', $users->id)}}" class="editar_conteudo"><span class="glyphicon glyphicon-pencil"></span> Editar</a>              
            </td>
        </tr>   


        @empty

        <p>Nenhum Usuário Cadastrado</p>

        @endforelse

        @endcan
    </table>
            
        </div>
    </div>
    

    @if( isset($dataForm) )
    {!! $user->appends($dataForm)->links() !!}
    @else
    {!! $user->links() !!}
    @endif



</div>



@endsection

@push('scripts')

<script>

    $('#meuModal').on('shown.bs.modal', function () {
        $('#meuInput').trigger('focus')
    })

</script>


