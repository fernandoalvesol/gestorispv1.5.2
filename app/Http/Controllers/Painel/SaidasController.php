<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Caixa;
use App\Models\Filial;
use App\Http\Requests\Painel\CaixaFormRequest;


class SaidasController extends Controller
{
    private $caixa;
    private $request;
    
    
    public function __construct(Caixa $caixa){
        
        $this->caixa = $caixa;
        
    }
    
    public function index(){
        
        $title = "Saída de Valores";
        
        $filial = Filial::get()->pluck('name', 'name');
        
        
        return view('Painel.Saida.saida', compact('title', 'filial'));
        
    }

     public function store(Request $request)
  	{
   		
        
        $dataCaixa = $request->all();
        
        $dataCaixa['users_id'] = auth()->user()->id;

        $insert = $this->caixa->create($dataCaixa);


        if ($insert)
            return redirect()
                            ->route('sair.index')
                            ->with(['sucess' => 'Cadastro realizado com sucesso']);
        else
            return redirect()
                            ->route('sair.index')
                            ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                            ->withInput();
  	}
}
