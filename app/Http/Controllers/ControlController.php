<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FrequenciaCodigo;
use App\Models\FrequenciaPergunta;
use App\Models\PerguntaResposta;
use Illuminate\Support\Facades\DB;

class ControlController extends Controller
{


  /**
   * Pesquisa onde existir, no inicio e no fim de cada pergunta.
   *
   * @param [type] $request
   * @return void
   */
    public function pesquisarPerguntaHome($request){
        $pergunta = trim(strtolower($request->pergunta));
        $response = DB::table('faq.perguntas')
        ->where('pergunta', 'LIKE', '%'.$pergunta.'%')
        ->orWhere('pergunta', 'LIKE', ucfirst($pergunta).'%')
        ->orWhere('pergunta', 'LIKE', '%'.ucfirst($pergunta))        
        ->join('faq.sistemas', 'perguntas.sistema_id' , '=', 'sistemas.id' )
        ->select('perguntas.id','sistema', 'sistema_id', 'pergunta', 'resposta')
        ->where('perguntas.dtexclusao', '=', null)
        ->get();
        return $response;
    }

    /**
     * Atualizar tabela do campo frequencia_pergunta
     *
     * @param [type] $id
     */
    public function atualizarFrequenciaPergunta($id){
        $response = PerguntaResposta::find($id)->frequenciaID;
        if($response->data_exclusao === null){
            $response->frequencia_pergunta = $response->frequencia_pergunta + 1;
            $response = $response->save();
            // return $response;           
        }
    }

    /**
     * Atualizar tabela do campo frequencia_codigo
     *
     * @param [type] $id
     */
    public function atualizarFrequenciaCodigo($id){
        $response = FrequenciaCodigo::find($id);
       if($response->data_exclusao === null){
            $response->frequencia_codigo = $response->frequencia_codigo + 1;
            $response = $response->save();
            // return $response;     
       }
    }

    /**
     * Lista todas os codigos recentes
     * 
     */
    public function listarFrequenciaCodigos(){
        $response = DB::table('faq.codigos')        
        ->join('faq.sistemas', 'codigos.sistema_id' , '=', 'sistemas.id' )
        ->join('faq.frequencia_codigos', 'codigos.id', '=', 'id_codigo')
        ->select('codigos.id','sistema', 'sistema_id', 'codigo', 'descricao', 'solucao')
        ->where('codigos.dtexclusao', '=', null)
        ->orderBy('frequencia_codigo', 'desc')
        ->limit(10)
        ->get();        
        return $response;
    }

    /**
     * Lista todas as perguntas recentes
     * 
     */
    public function listarFrequenciaPerguntas(){
        $response = DB::table('faq.perguntas')        
        ->join('faq.sistemas', 'perguntas.sistema_id' , '=', 'sistemas.id' )
        ->join('faq.frequencia_perguntas', 'perguntas.id', '=', 'id_pergunta')
        ->select('perguntas.id','sistema', 'sistema_id', 'pergunta', 'resposta')
        ->where('perguntas.dtexclusao', '=', null)
        ->orderBy('frequencia_pergunta', 'desc')
        ->limit(10)
        ->get();
        return $response;
    }

    /**
     * Cadastrar conforme a opcao enviada e uma array com os dados
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
     * Exclusão lógica conforme a opcao e o id
     */
    public function exclusaoLogica($opcao, $id){

    }
}
