<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\PerguntaResposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControlController extends Controller
{
    public function list(){

    }

    public function listPaginate(){

    }


    /**
     * Cadastrar conforme a opcao enviada e uam array com os dados
     */
    public function cadastrar($opcao, array $data){

    }

    /**
     * Atualizar conforme a opcao enviada e id
     */
    public function atualizar($opcao, $id){

    }

    /**
     * Pesquisar conforme a opcao e o id
     */
    public function pesquisarID($opcao, $id){

    }

    /**
     * Listar com Paginacação conforme a opcao
     */
    public function listarComPaginacao($opcao){

    }
    /**
     * Exclusão lógica conforme a opcao e o id
     */
    public function exclusaoLogica($opcao, $id){

    }


    /**
     * Lista todas as perguntas recentes
     * 
     */
    public function listarRecentes(){
        $categorias = DB::table('faq.perguntas')        
        ->join('faq.sistemas', 'perguntas.sistema_id' , '=', 'sistemas.id' )
        ->join('faq.frequencias', 'perguntas.id', '=', 'id_pergunta')
        ->select('perguntas.id','sistema', 'sistema_id', 'pergunta', 'resposta')
        ->where('perguntas.dtexclusao', '=', null)
        ->orderBy('frequencia', 'desc')
        ->limit(10)
        ->get();
        return $categorias;
    }
}
