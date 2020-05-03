<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Models\Filial;
use App\User;
use App\Http\Requests\Painel\FilialFormRequest;
use App\Http\Controllers\Controller;

class FilialController extends Controller
{
    private $filial, $totalPage = 10;
    private $request;
    
    
    public function __construct(Filial $filial, Request $request) {
        
        $this->filial = $filial;
        $this->request = $request;
    }
    
    
    public function index(){
        
        $titulo = "Gestão de Filiais";
        
        $filial = $this->filial->paginate($this->totalPage);
        
        return view('Painel.Filial.index', compact('titulo', 'filial'));
    }
    
    public function create(){
        
        $titulo = "New Filial";
        
        return view('Painel.Filial.create-edit', compact('titulo'));
        
    }
    
    public function store(FilialFormRequest $request){
        
        $dataFilial = $request->all();

        $insert = $this->filial->create($dataFilial);

        if ($insert)
            return redirect()
                            ->route('filial.index')
                            ->with(['sucess' => 'Cadastro realizado com sucesso']);
        else
            return redirect()
                            ->route('filial.index')
                            ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                            ->withInput();
        
    }
    
    public function edit($id){
        
        $title = "Editar Filial";
        
        $filial = $this->filial->find($id);
        
        return view('Painel.Filial.create-edit', compact('title', 'filial' ));
    }
    
    public function update(FilialFormRequest $request, $id) {
        
        $dataFilial = $request->all();

        $filial = $this->filial->find($id);
        
        $update = $filial->update($dataFilial);

        if ($update)
            return redirect()
                            ->route('filial.index')
                            ->with(['sucess' => 'Cadastro realizado com sucesso']);
        else
            return redirect()
                            ->route('filial.index')
                            ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                            ->withInput();
    }
    
    public function show($id){
        
        $titulo = "Exibir Filial";
        
        $filial = $this->filial->find($id);
        
        return view('Painel.Filial.show', compact('titulo', 'filial'));
        
    }
    
    public function destroy($id){
        
        $filial = $this->filial->find($id);
        
        $delete = $filial->delete();
        
        
        if( $delete ){
            
            return redirect()
                    ->route('filial.index')
                    ->with(['sucess' => 'Cadastro Excluido com sucesso']);
                                
        } else{
            return redirect()
                    ->route('filial.index', ['id' => $id])
                                ->withErrors(['errors' => 'Falha ao deletar']);
        }
        
        
    }
    
    public function search(Request $request){
        
        $dataForm = $request->except('_token');
        
        $filial = $this->filial
                        ->where('name', 'LIKE', "%{$dataForm['key-search']}%")
                        ->orWhere('cidade', $dataForm['key-search'])
                        ->paginate($this->totalPage);
        
         return view('Painel.Filial.index', compact('filial', 'dataForm'));
        
    }
}
