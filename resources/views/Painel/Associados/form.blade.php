<div class="form-grupo col-md-12 col-xl-12">
    <div class="form-group col-md-8 col-xl-8">
        <label>Nome do Associado</label>
        {!! Form::text('name', null, ['placeholder' => 'Nome do Associado:', 'class' => 'form-control'])!!}
    </div>
    <div class="form-group col-md-3 col-xl-3"> 
        <label>Data de Nascimento</label>
        {!! Form::date('dtnascimento', null, ['placeholder' => 'Data de Nascimento:', 'class' => 'form-control'])!!}
    </div>
</div>
<div class="form-grupo col-md-12 col-xl-12">
    <div class="form-group col-md-4 col-xl-4">
        <label>CPF</label>
        {!! Form::text('cpf', null, ['placeholder' => 'CPF do Associado:', 'class' => 'form-control'])!!}
    </div>
    <div class="form-group col-md-4 col-xl-4">
        <label>RG</label>
        {!! Form::text('rg', null, ['placeholder' => 'RG de Nascimento:', 'class' => 'form-control'])!!}
    </div>
    <div class="form-group col-md-3 col-xl-3"> 
        <label>Data da Adesão</label>
        {!! Form::date('dtadesao', null, ['placeholder' => 'Data da Adesão:', 'class' => 'form-control'])!!}
    </div>
</div>
<div class="form-grupo col-md-12 col-xl-12">
    <div class="form-group col-md-4 col-xl-4">
        <label>Logradouro</label>
        {!! Form::text('logradouro', null, ['placeholder' => 'Logradouro:', 'class' => 'form-control'])!!}
    </div>
    <div class="form-group col-md-1 col-xl-1">
        <label>Numero</label>
        {!! Form::text('numero', null, ['placeholder' => 'Nº:', 'class' => 'form-control'])!!}
    </div>
    <div class="form-group col-md-3 col-xl-3"> 
        <label>Cidade</label>
        {!! Form::text('cidade', null, ['placeholder' => 'Cidade:', 'class' => 'form-control'])!!}
    </div>
    <div class="form-group col-md-3 col-xl-3"> 
        <label>Estado</label>
        {!! Form::text('uf', null, ['placeholder' => 'Estado:', 'class' => 'form-control'])!!}
    </div>
</div>
<div class="form-grupo col-md-12 col-xl-12">
    <div class="form-group col-md-4 col-xl-4">
        <label>CEP</label>
        {!! Form::text('cep', null, ['placeholder' => 'CEP:', 'class' => 'form-control'])!!}
    </div>
    <div class="form-group col-md-4 col-xl-4">
        <label>Telefone</label>
        {!! Form::text('fone', null, ['placeholder' => 'Telefone:', 'class' => 'form-control'])!!}
    </div>
    <div class="form-group col-md-3 col-xl-3"> 
        <label>Celular</label>
        {!! Form::text('celular', null, ['placeholder' => 'Celular:', 'class' => 'form-control'])!!}
    </div>
</div>

<div class="form-grupo col-md-12 col-xl-12">
    <div class="form-grupo col-md-11 col-xl-11">
        <button class="btn btn-enviar"> Enviar</button>
    </div>
</div>
