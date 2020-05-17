<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Caixa;
use App\Models\Filial;
use App\User;
use DB;
use Barryvdh\DomPDF\PDF;
use App\Http\Requests\Painel\CaixaFormRequest;

class CaixaController extends Controller
{
    private $caixa, $totalPage = 15;
    private $request;
    
    
    public function __construct(Caixa $caixa, Request $request) {
        
        $this->caixa = $caixa;
        $this->request = $request;
    }
    
    public function index(Caixa $caixa){
        
        //$caixas = Caixa::where('DATA', date('Y-m-d'))->orderBy('DATA', 'ASC')->get();
        
        $caixas = Caixa::where('users_id', auth()->user()->id)->get();

        //$paginas = $this->caixa->paginate($this->totalPage);       
       
              
        return view('Painel.Caixa.caixa', compact('caixas'));
    }

    public function controlCaixa(){

        $title = "Controle de Caixa";

        $caixas = $this->caixa->get()->all();
        
        //$caixas = Caixa::where('DATA', date('Y-m-d'))->orderBy('DATA', 'ASC')->get();
        
        //$caixas = Caixa::where('users_id', auth()->user()->id)->get();

        //$paginas = $this->caixa->paginate($this->totalPage);       
       
              
        return view('Painel.Caixa.caixa', compact('caixas'));
    }

    public function edit($id){

        $caixas = $this->caixa->find($id);
        
        $filial = Filial::get()->pluck('name', 'name');
        
             
        return view('Painel.Caixa.edit', compact('caixas', 'filial'));  
    }


    public function show($id){


        $caixas = $this->caixa->find($id);

        return view('Painel.Caixa.show', compact('caixas'));


    }
    
    public function update(CaixaFormRequest $request, $id){
        
        $dataCaixa = $request->all();
        
        $caixa = $this->caixa->find($id);
        
        $update = $caixa->update($dataCaixa);
        
        if( $update )
            return redirect()
                        ->route('entrar.index');
                        
        else
            return redirect()->back();
        
        
    }
    
    public function search(Request $request){
        
        $dataForm = $request->except('_token');
        
        $caixas = $this->caixa
                        ->where('N_TITULO', 'LIKE', "%{$dataForm['key-search']}%")
                        ->orWhere('PLACA', $dataForm['key-search'])
                        ->orWhere('FILIAL', $dataForm['key-search'])
                        ->get()->all();
        
         return view('Painel.Caixa.caixa', compact('caixas', 'dataForm'));
    }
    
    
    public function destroy($id){
        
        $caixas = $this->caixa->find($id);
        
        $delete = $caixas->delete();
        
        
        if( $delete ){
            
            return redirect()
                    ->route('usuarios.index')
                    ->with(['sucess' => 'Cadastro Excluido com sucesso']);
                                
        } else{
            return redirect()
                    ->route('caixaedit.show', ['id' => $id])
                                ->withErrors(['errors' => 'Falha ao deletar']);
        }
        
    
    }
    
}
