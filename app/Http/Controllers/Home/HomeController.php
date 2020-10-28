<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\CRUD\ControlController;
use Illuminate\Http\Request;

class HomeController extends ControlController
{
    /**
     * Página Inicial do FAQ
     *
     */
    public function index(){
        $categorias = $this->listarRecentes();
        return view('home', ['categorias' =>$categorias]);
    }

    /**
     * Pesquisa conforme for digitado.
     * Traz tudo que existe com aquela palavra, frase e texto.
     */
    public function pesquiarPergunta(Request $request){
        
    }

}
