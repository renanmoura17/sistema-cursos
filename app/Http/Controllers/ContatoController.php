<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index () {

    	$contatos = [
    		(object) ["nome" => "Maria", "tel"=>"22222222"],
    		(object) ["nome" => "João", "tel"=>"11111111"],
    	];

        $contato = new Contato();
        dd( $contato->lista() );

    	return view('contato.index', compact('contatos') );
    }

    public function criar (Request $req) {
    	dd($req->all());
    	return "Este é o Criar do ContatoController";
    }

    public function editar () {
    	return "Este é o Editar do ContatoController";
    }
}
