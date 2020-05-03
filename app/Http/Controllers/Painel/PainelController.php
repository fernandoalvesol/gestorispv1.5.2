<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\User;
use App\Models\Caixa;
use App\Models\Ressarcimento;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{
    
    private $caixa, $request;
    
    public function __construct(Caixa $caixa, Request $request) {
        
        $this->caixa = $caixa;
        $this->request = $request;
                
    }
    
    public function index(){

        $title = "Painel GestorISP";
        
         $nameUser = auth()->user()->name;
         
         $caixas = $this->caixa->all();

         $rec = Ressarcimento::where('status', 'R')->count();

         $nrec = Ressarcimento::where('status', 'N')->count();

         return view('Painel.Home.index', compact('title', 'nameUser', 'caixas', 'rec', 'nrec'));
    }
}
