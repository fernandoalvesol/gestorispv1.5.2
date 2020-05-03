<?php

namespace App\Http\Controllers\Painel;
use Illuminate\Http\Request;
use App\Models\Ressarcimento;
use App\Http\Requests\Painel\RessarcimentoFormRequest;
use App\Http\Controllers\Controller;

class RessarcimentoController extends Controller
{
    
    private $ressarcimento, $totalPage = 25;
    private $request;
    

    public function __construct(Request $request, Ressarcimento $ressarcimento){

    	$this->request = $request;
    	$this->ressarcimento = $ressarcimento;

    }

    public function index(){

    	$title = "Ressarcimento de Veiculos";
    	$ressarcimento = $this->ressarcimento->paginate($this->totalPage);

    	return view('Painel.Ressarcimento.index',compact('title', 'ressarcimento'));
    }

    public function create(){


    	$title = "Novo Cadastro";

    	return view('Painel.Ressarcimento.create-edit', compact('title'));

    }

    public function store(RessarcimentoFormRequest $request){

        $title = "Cadastrar Novo";

        $dataRessarcimento = $request->all();

        $insert = $this->ressarcimento->create($dataRessarcimento);

        if ($insert)
            return redirect()
                            ->route('ressarcimento.index')
                            ->with(['sucess' => 'Cadastro realizado com sucesso']);
        else
            return redirect()
                            ->route('ressarcimento.index')
                            ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                            ->withInput();
        

    }

    public function edit($id){

        $title = "Editar Ressarcimento";

        $ressarcimento = $this->ressarcimento->find($id);

        return view('Painel.Ressarcimento.create-edit', compact('title', 'ressarcimento'));


    }

    public function update(RessarcimentoFormRequest $request, $id){

        $dataRessarcimento = $request->all();

        $ressarcimento = $this->ressarcimento->find($id);
        
        $update = $ressarcimento->update($dataRessarcimento);

        if ($update)
            return redirect()
                            ->route('ressarcimento.index')
                            ->with(['sucess' => 'Cadastro realizado com sucesso']);
        else
            return redirect()
                            ->route('ressarcimento.index')
                            ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                            ->withInput();

    }

    public function show($id){

        $title = "Exibir Registro";

        $ressarcimento = $this->ressarcimento->find($id);


        return view('Painel.Ressarcimento.show', compact('title', 'ressarcimento'));

    }
    public function destroy($id){

        $ressarcimento = $this->ressarcimento->find($id);

        $delete = $ressarcimento->delete();

        if( $delete ){
            
            return redirect()
                    ->route('ressarcimento.index')
                    ->with(['sucess' => 'Cadastro Excluido com sucesso']);
                                
        } else{
            return redirect()
                    ->route('ressarcimento.index', ['id' => $id])
                                ->withErrors(['errors' => 'Falha ao deletar']);
        }

    }
    public function search(Request $request){

        $dataForm = $request->except('_token');
        
        $ressarcimento = $this->ressarcimento
                        ->where('placa', 'LIKE', "%{$dataForm['key-search']}%")
                        ->orWhere('status', $dataForm['key-search'])
                        ->paginate($this->totalPage);
        
         return view('Painel.Ressarcimento.index', compact('ressarcimento', 'dataForm'));


    }

}
