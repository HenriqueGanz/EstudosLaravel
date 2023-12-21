<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Contato;

class ContatoController extends Controller


{
    public function index()
    {
        $contatos = [
            (object)["nome" => "Maria", "tel" => "1234567"],
            (object)["nome" => "Pedro", "tel" => "1234567"],
            (object)["nome" => "Talita", "tel" => "1234567"]
        ];

        $contato = new Contato();
        dd($contato->lista());

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req)
    {
        dd($req->all());
        return "Criar do contato Controller";
    }

    public function editar()
    {
        return "Editar do contato Controller";
    }


}
