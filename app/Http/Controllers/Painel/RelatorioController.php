<?php

namespace App\Http\Controllers\Painel;

use App\Models\Caixa;
use App\Models\Ressarcimento;
use DB;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelatorioController extends Controller
{
    
    public function relcaixa(Caixa $caixa){
        
        $caixas = Caixa::where('users_id', auth()->user()->id)->get();
        
        return \PDF::loadView('Painel.Pdf.pdf', compact('caixas'))
                ->download('relatorio.pdf');
    }

    public function relres(){

    	$Ressarcimento = Ressarcimento::all();

    	return \PDF::loadView('Painel.Ressarcimento.ressarcimento', compact('Ressarcimento'))
    		->download('ressarcimento.pdf');


    }

    public function relgeral(){

        $caixas = Caixa::all();
        
        return \PDF::loadView('Painel.Pdf.relgeral', compact('caixas'))
                ->download('relatorio.pdf');


    }
}
