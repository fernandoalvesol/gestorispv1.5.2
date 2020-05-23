<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Associados;

class AssociadosController extends Controller
{
    private $associados;


    public function __construct(Associados $associados){

        $this->associados = $associados;

    }

    public function index(){

        $title = "Gestão de Associados";

        $associados = $this->associados->get()->all();

        return view('Painel.Associados.index', compact('title', 'associados'));

    }

    public function create(){

        $title = "Cadastrar Novo Associado";


        return view('Painel.Associados.create', compact('title'));
    }

    public function store(Request $request){

        $dataAssociados = $request->all();

        $insert = $this->associados->create($dataAssociados);

        if ($insert)
            return redirect()
                            ->route('adesao.index')
                            ->with(['sucess' => 'Cadastro realizado com sucesso']);
        else
            return redirect()
                            ->route('adesao.index')
                            ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                            ->withInput();
        
    }
}
