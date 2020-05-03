<?php

Route::group(['middleware' => 'auth', 'namespace' => 'Painel'], function () {

    Route::get('/', 'PainelController@index');

    Route::get('/painel', 'PainelController@index')->name('painel');
    Route::get('/indicadores', 'IndicadoresController@index')->name('indicadores');
    Route::get('/setores', 'SetoresController@index')->name('setores');
    Route::get('/lancamentos', 'LancamentosController@index')->name('lancamentos');
    
     //Rota Indicadores
    Route::resource('indicador', 'IndicadoresController');
    Route::any('indicador/pesquisar', 'IndicadoresController@search')->name('indicador.search');
    
      //Rota Setores
    Route::resource('setores', 'SetoresController');
    Route::any('setores/pesquisar', 'SetoresController@search')->name('setores.search');
    
    //Rota Lançamentos
    Route::resource('lancamentos', 'LancamentosController');
    Route::any('lancamentos/pesquisar', 'LancamentosController@search')->name('lancamentos.search');
    
     //Rotas de Usuarios
    Route::get('/usuarios', 'UserController@index')->name('usuarios');
    Route::any('usuarios/pesquisar', 'UserController@search')->name('usuarios.search');
    Route::get('{id}/delete', 'UserController@destroy');
    Route::resource('usuarios', 'UserController');  
        
     //Rotas de Filiais
    Route::get('/filial', 'FilialController@index')->name('filial');
    Route::any('filial/pesquisar', 'FilialController@search')->name('filial.search');
    Route::get('{id}/delete', 'FilialController@destroy');
    Route::resource('filial', 'FilialController'); 
    
    //Rotas de Ressarcimento de Veiculos
    Route::get('/ressarcimento', 'RessarcimentoController@index')->name('ressarcimento');
    Route::any('ressarcimento/pesquisar', 'RessarcimentoController@search')->name('ressarcimento.search');
    Route::get('{id}/delete', 'RessarcimentoController@destroy');
    Route::resource('ressarcimento', 'RessarcimentoController'); 


    //Rotas do Fluxo de Caixa
    Route::get('/caixas', 'CaixaController@index')->name('caixas');
    Route::any('caixas/pesquisar', 'CaixaController@search')->name('caixas.search');
    Route::get('buscar', 'CaixaController@buscar');
    Route::resource('caixaedit', 'CaixaController');
    
    //Rotas Relatorios
    Route::get('pdfcaixa', 'RelatorioController@relcaixa')->name('pdfcaixa');
    Route::get('pdfgeral', 'RelatorioController@relgeral')->name('pdfgeral');
    Route::get('pdfressarcimento', 'RelatorioController@relres')->name('pdfressarcimento');

    //Rotas dos Extratos do Caixa            
    Route::get('/extratos', 'ExtratoController@index');
    Route::get('gerar', 'ExtratoController@gerar');
    Route::get('{id}/delete', 'ExtratoController@destroy');
    Route::get('{id}/edit', 'ExtratoController@edit');
        
    //Rotas das Entradas do Caixa
    Route::get('/entradas', 'EntradasController@index');
    Route::resource('entrar', 'EntradasController');

    //Rotas das Saídas do Caixa            
    Route::get('/saidas', 'SaidasController@index');
    Route::resource('sair', 'SaidasController');
    
    //Debug
    Route::get('/debug', 'UserController@debug');
    
});

//Route::get('/', 'Site\SiteController@index');

Route::get('/documentos', 'Site\SiteController@documentos' );
Route::get('/associados', 'Site\SiteController@associados')->name('associados');

Auth::routes();
