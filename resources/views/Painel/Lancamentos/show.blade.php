@extends('adminlte::page')

@section('title', 'GESTORISP')

@section('content_header')

<div class="container">
    <div class="row col-md-12">
        <div class="breadcrumb">
            <a href="{{url('/painel')}}" class="breadcrumb-item">Home  /</a> 
            <a href="{{url('/lancamentos')}}" class="breadcrumb-item">Lançamentos</a>
        </div>
        <div class="title-pg">
            <h1 class="title-pg">LANÇAMENTO Nº  <b>{{$lancamentos->id or 'Novo'}}</b></h1>
        </div>
    </div>
</div>


@endsection