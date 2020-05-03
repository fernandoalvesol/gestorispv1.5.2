<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lancamentos;
use App\Models\Areas;
use App\Models\Indicadores;
use App\Http\Requests\Painel\LancamentosFormRequest;

class LancamentosController extends Controller
{
    
    private $lancamentos, $totalPage = 10;
    private $setores, $indicadores;
    private $request;


    public function __construct(Lancamentos $lancamentos, Areas $setores, Indicadores $indicadores, Request $request) {
        
        
        $this->lancamentos = $lancamentos;
        $this->request = $request;
        $this->setores = $setores;
        $this->indicadores = $indicadores;
    }

    public function index(Lancamentos $lances){
        
       $title = "Gestão de Lançamentos";
       
       $lancamentos = $this->lancamentos->paginate($this->totalPage);
                   
                    
       return view('Painel.Lancamentos.index', compact('title', 'lancamentos'));
        
        
    }
    
    public function create() {

        $title = 'Gestão de Lancamentos';
        
        $setores = Areas::get()->pluck('name', 'id');

        $indicadores = Indicadores::get()->pluck('name', 'id');


        return view('Painel.Lancamentos.create-edit', compact('title', 'setores', 'indicadores'));
        
    }

    public function store(LancamentosFormRequest $request){
        
        $dataLancamentos = $request->all();
        
        $insert = $this->lancamentos->create($dataLancamentos);
        
        if($insert)
            
            return redirect()
                ->route('lancamentos.index')
                ->with(['sucess' => 'Lançamento realizado com sucesso']);
        
        else
            
            return redirect()
                ->route('lancamentos.index')
                ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                ->withInput();
                
        
        
    }
    
    public function show($id){
        
        $lancamentos = $this->lancamentos->find($id);
        
        $title = 'Exbir Lançamentos';
        
        return view('Painel.Lancamentos.show', compact('lancamentos', 'title'));
              
    }
    
    
    public function edit($id){
        
        $lancamentos = $this->lancamentos->find($id);
        
        
        $setores = Areas::get()->pluck('name', 'id');

        $indicadores = Indicadores::get()->pluck('name', 'id');

        
        return view('Painel.Lancamentos.create-edit', compact('lancamentos', 'setores', 'indicadores'));
        
    }
    
    public function update(LancamentosFormRequest $request, $id){
        
        $dataLancamentos = $request->all();
        
        $lancamentos = $this->lancamentos->find($id);
        
        $update = $lancamentos->update($dataLancamentos);
        
        
        if($update)
            
            return redirect()
                ->route('lancamentos.index')
                ->with(['sucess' => 'Cadastro realizado com sucesso']);
        
        else
            
            return redirect()
                ->route('lancamentos.index')
                ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                ->withInput();
        
        
        
    }

    public function destroy($id){
        
        $lancamentos = $this->lancamentos->find($id);
        
        $delete = $lancamentos->delete();
        
        
        if( $delete ){
            
            return redirect()
                    ->route('lancamentos.index')
                    ->with(['sucess' => 'Cadastro Excluido com sucesso']);
                                
        } else{
            return redirect()
                    ->route('lancamentos.index', ['id' => $id])
                                ->withErrors(['errors' => 'Falha ao deletar']);
        }
        
    }
    
    public function search(Request $request){
        
        $dataForm = $request->except('_token');
        
        $lancamentos = $this->lancamentos
                        ->where('data', 'LIKE', "%{$dataForm['key-search']}%")
                        ->orWhere('competencia', $dataForm['key-search'])
                        ->paginate($this->totalPage);
        
         return view('Painel.Lancamentos.index', compact('lancamentos', 'dataForm'));
        
    }
}
