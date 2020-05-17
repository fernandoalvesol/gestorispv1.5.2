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

        //$caixas = Caixa::where('users_id', auth()->user()->id)->get();

        $filial = Filial::get()->pluck('name', 'name');

        $caixas = Caixa::where('DATA', '>=', date('Y-m-d'))
                ->where('DATA', '<=', date('Y-m-d'))
                ->orderBy('DATA', 'ASC')
                ->get();

        return view('Painel.Extrato.extrato', compact('caixas', 'filial'));
    }

    public function gerar(Request $request) {

      
        session([
            'inicio' => $request->dataInic,
            'fim' => $request->dataFinal,
            'filial' => $request->FILIAL,
        ]); 

       // dd($request->FILIAL);
       //pega o caixa por período e por filial

        $caixas = Caixa::where('DATA', '>=', $request->dataInic)
                ->where('DATA', '<=', $request->dataFinal)
                ->where('FILIAL', '=', $request->FILIAL)
                ->orderBy('DATA', 'ASC' )
                ->get();                

                $filial = Filial::get()->pluck('name', 'name');

        return view('Painel.Extrato.extrato', compact('caixas', 'filial'));
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
