<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Caixa;
use App\Models\Filial;

class ExtratoController extends Controller {
    
    private $filial, $request;
    private $totalPage = 10;
    
    public function __construct(Request $request, Filial $filial) {
        
        $this->filial = $filial;
        $this->request = $request;
        
    }

    public function index() {

        $caixas = Caixa::where('DATA', '>=', date('Y-m-d'))
                ->where('DATA', '<=', date('Y-m-d'))
                ->orderBy('DATA', 'ASC')
                ->get();



        return view('Painel.Extrato.extrato', compact('caixas'));
    }

    public function gerar(Request $request) {

        session([
            'inicio' => $request->dataInic,
            'fim' => $request->dataFinal
        ]);


        $caixas = Caixa::where('DATA', '>=', $request->dataInic)
                ->where('DATA', '<=', $request->dataFinal)
                ->orderBy('DATA', 'ASC')
                ->get();

        return view('Painel.Extrato.extrato', compact('caixas', 'caixaData'));
    }
    
    
    public function search(Request $request) {
        
        $caixas = Caixa::get()->all();
        
        $dataForm = $request->except('_token');
        
        $filial = $this->filial
                        ->where('name', 'LIKE', "%{$dataForm['key-search']}%")
                        ->orWhere('name', $dataForm['key-search'])
                        ->paginate($this->totalPage);
        
         return view('Painel.Extrato.extrato', compact('filial', 'dataForm', 'caixas'));
        
    }
    

}
