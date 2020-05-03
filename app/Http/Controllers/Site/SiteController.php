<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){

        $title = 'GestorAPOIO';

        return view('Site.Home.index', compact('title'));

}

public function documentos(){

	$title = "Documentos do Associado";

	return view('Site.Documentos.index', compact('title'));
}

public function associados(){

	$title = "Área do Associado";


	return view('Site.Home.associado', compact('title'));

}

}
