<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\ControlController;
use Illuminate\Http\Request;

class HomeController extends ControlController
{
    /**
     * Página Inicial do FAQ
     *
     */
    public function index(){
        return view('home');
    }

    public function listarRecentesHome(Request $request){
        $codigos = $this->listarFrequenciaCodigos();
        $perguntas = $this->listarFrequenciaPerguntas();
        return json_encode(['perguntas' => $perguntas, 'codigos'=> $codigos]);
    }

    /**
     * Pesquisa conforme for digitado.
     * Traz tudo que existir com aquela palavra, frase e texto.
     */
    public function pesquisarPergunta(Request $request){        
        return json_encode($this->pesquisarPerguntaHome($request));
    }

    /**
     * Atualizar frequencia pergunta
     *
     * @param [type] $id
     */
    public function frequenciaPergunta($id){        
        return json_encode($this->atualizarFrequenciaPergunta($id));
    }

       /**
     * Atualizar frequencia codigo
     *
     * @param [type] $id
     */
    public function frequenciaCodigo($id){        
        return json_encode($this->atualizarFrequenciaCodigo($id));
    }    

}
