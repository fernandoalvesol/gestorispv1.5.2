<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Indicadores;
use App\Http\Requests\Painel\IndicadoresFormRequest;


class IndicadoresController extends Controller
{
    
    private $indicadores, $totalPage = 10;
    private $request;


    public function __construct(Indicadores $indicadores, Request $request) {
        
        
        $this->indicadores = $indicadores;
        $this->request = $request;
    }

    public function index(){
        
        $title = "Gestão de Indicadores";
        $indicadores = $this->indicadores->paginate($this->totalPage);
        
        
        return view('Painel.Indicadores.index', compact('title', 'indicadores'));
        
        
    }
    
    public function create() {

        $title = 'Gestão de Conformidades';

        return view('Painel.Indicadores.create-edit', compact('title'));
        
    }

    public function store(IndicadoresFormRequest $request){
        
        $dataIndicador = $request->all();
        
        $insert = $this->indicadores->create($dataIndicador);
        
        if($insert)
            
            return redirect()
                ->route('indicador.index')
                ->with(['sucess' => 'Cadastro realizado com sucesso']);
        
        else
            
            return redirect()
                ->route('indicador.index')
                ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                ->withInput();
                
        
        
    }
    
    public function show($id){
        
        $indicadores = $this->indicadores->find($id);
        
        $title = 'Exbir Indicadores';
        
        return view('Painel.Indicadores.show', compact('indicadores', 'title'));
              
    }
    
    
    public function edit($id){
        
        $indicadores = $this->indicadores->find($id);
        
        return view('Painel.Indicadores.create-edit', compact('indicadores'));
        
    }
    
    public function update(IndicadoresFormRequest $request, $id){
        
        $dataIndicador = $request->all();
        
        $indicadores = $this->indicadores->find($id);
        
        $update = $indicadores->update($dataIndicador);
        
        
        if($update)
            
            return redirect()
                ->route('indicador.index')
                ->with(['sucess' => 'Cadastro realizado com sucesso']);
        
        else
            
            return redirect()
                ->route('indicador.index')
                ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                ->withInput();
        
        
        
    }

    public function destroy($id){
        
        $indicadores = $this->indicadores->find($id);
        
        $delete = $indicadores->delete();
        
        
        if( $delete ){
            
            return redirect()
                    ->route('indicador.index')
                    ->with(['sucess' => 'Cadastro Excluido com sucesso']);
                                
        } else{
            return redirect()
                    ->route('indicador.index', ['id' => $id])
                                ->withErrors(['errors' => 'Falha ao deletar']);
        }
        
    }
    
    public function search(Request $request){
        
        $dataForm = $request->except('_token');
        
        $indicadores = $this->indicadores
                        ->where('name', 'LIKE', "%{$dataForm['key-search']}%")
                        ->orWhere('descricao', $dataForm['key-search'])
                        ->paginate($this->totalPage);
        
         return view('Painel.Indicadores.index', compact('indicadores', 'dataForm'));
        
    }
}
