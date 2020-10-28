<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateRequest;
use Illuminate\Http\Request;

class CrudController extends Controller
{
     /**
     * ##############################################################################################################
     * index(): Rota de Acesso.
     *
     * cadastrar(): Novo cadastro que vem do botão novo cadastro persistindo no banco de dados conforme enviado.
     *
     * Atualizar(): Atualizar/Alterar dados cadastro, conforme enviado.
     *
     * Deletar(): Deletar/apagar dados cadastrados, conforme enviado. 
     * O campo dtexclusao ganha uma data e não será mais visualizado(Exclusão lógica).
     *
     * * Métodos de listagem com paginação * *
     * listarPerguntaResposta()
     * listarCodigoErros()
     * listarSistemas()
     *
     * sistemasListar(): Lista de sistema para o campo select do cadastro carregado no momento que a página é carregada ou atualizada
     *
     * PesquisarId(): Pesquisar apenas um item, confome a tabela
     *
     * ###############################################################################################################
     */

     /**
      * Rota index
      */
      public function index(){
        if(UserSession::validateSession()){
            return redirect()->route('login');
        }
        return view('cadastro.pagina_cadastro');
    }

    /**
     * Cadastrar novos dados
     * Verificamos se o que chega para cadastrar é uma pergunta, código de erro ou sistema.
     * conforme o que for enviado. Se o if for verdadeiro o modelo tenta persistir no banco de dados
     *
     * @param  App\Http\Requests\CadastroCadastrarRequest $request
     * @return Response
     */
    public function cadastrar(ValidateRequest $request){

            // $response = '';

            // if($request->sistema && $request->pergunta && $request->resposta){
            //     $PerguntaResposta = new PerguntaResposta;
            //     $PerguntaResposta->sistema_id = $request->sistema;
            //     $PerguntaResposta->pergunta = $request->pergunta;
            //     $PerguntaResposta->resposta = $request->resposta;
            //     $PerguntaResposta->frequencia = 0;
            //     $PerguntaResposta->usuario = Session::get('data.user');
            //     $response =  $PerguntaResposta->save();

                // Quando é criado uma nova pergunta e resposta automaticamente já é adicionado na tabela Frequencia, caso não existir
            //     if($response){
            //         $pergunta_id = PerguntaResposta::orderBy('id', 'desc')->first();
            //         $novo = new Frequencia;
            //         $novo->id_pergunta = $pergunta_id->id;
            //         $novo->frequencia = 1;
            //         $novo->save();
            //     }
            // }else
            //     if($request->sistema && $request->codigo && $request->descricao && $request->solucao){
            //         $CodigoErro = new CodigoErro;
            //         $CodigoErro->sistema_id = $request->sistema;
            //         $CodigoErro->codigo = $request->codigo;
            //         $CodigoErro->descricao = $request->descricao;
            //         $CodigoErro->solucao = $request->solucao;
            //         $CodigoErro->usuario = Session::get('data.user');
            //         $response = $CodigoErro->save();
            //     }else
            //         if($request->novoSistema){
            //             $novoSistema = new Sistema;
            //             $novoSistema->sistema = $request->novoSistema;
            //             $novoSistema->usuario = Session::get('data.user');
            //             $response = $novoSistema->save();
            //         }else{
            //             $response = [
            //                 'Erro de Campo' => 'Algum campo do Request não está de acordo com o Controller, o qual foi configurado para receber'
            //             ];
            //         }
            // return json_encode($response);
    }


     /**
     * Atualizar dados de um id enviado.
     * Verificamos se o que chega para cadastrar é uma pergunta, código de erro ou sistema.
     * conforme o que for enviado. Se o if for verdadeiro o modelo tenta persistir no banco de dados
     *
     * @param  App\Http\Requests\CadastroCadastrarRequest $request
     *
     * @return Response
     */
    public function atualizar(ValidateRequest $request, $id){
            // $response = '';

            // if($request->sistema && $request->pergunta && $request->resposta){
            //     $usuario = $request->session()->get('data');
            //     $atualizar = PerguntaResposta::find($id);
            //     $atualizar->sistema_id = $request->sistema;
            //     $atualizar->pergunta = $request->pergunta;
            //     $atualizar->resposta = $request->resposta;
            //     $atualizar->usuario = $usuario['user'];
            //     $response =  $atualizar->save();
            // }
            // else
            //     if($request->sistema && $request->codigo && $request->descricao && $request->solucao){
            //         $usuario = $request->session()->get('data');
            //         $atualizar = CodigoErro::find($id);
            //         $atualizar->sistema_id = $request->sistema;
            //         $atualizar->codigo = $request->codigo;
            //         $atualizar->descricao = $request->descricao;
            //         $atualizar->solucao = $request->solucao;
            //         $atualizar->usuario = $usuario['user'];
            //         $response = $atualizar->save();
            //     }else
            //         if($request->novoSistema){
            //             $usuario = $request->session()->get('data');
            //             $atualizar = Sistema::find($id);
            //             $atualizar->sistema = $request->novoSistema;
            //             $atualizar->usuario = $usuario['user'];
            //             $response = $atualizar->save();
            //         }else{
            //             $response = [
            //                 'Erro de Campo' => 'Algum campo do Request não está de acordo com o Controller, o qual foi configurado para receber'
            //             ];
            //         }
            // return json_encode($response);
    }

    /**
     *  Exclusão lógica
     */
    public function deletar(Request $request, $list){

    //     $response = false;
    //     if($request->perguntaResposta){
    //         foreach ($request->list as $key => $value){
    //             $atualizar_dt = PerguntaResposta::find($value);
    //             $atualizar_dt->dtexclusao = now();
    //             $response = $atualizar_dt->save();

    //             // Exclusao lógica na tabela frequencias
    //             $frequencia_id = PerguntaResposta::find($value)->frequenciaId;
    //             $frequencia_id->data_exclusao = now();
    //             $frequencia_id->save();
    //         }
    //     }else
    //         if($request->codigoErro){
    //             foreach ($request->list as $key => $value){
    //                 $atualizar_dt = CodigoErro::find($value);
    //                 $atualizar_dt->dtexclusao = now();
    //                 $response = $atualizar_dt->save();
    //             }
    //         }else
    //             if($request->sistema){
    //                 foreach ($request->list as $key => $value){
    //                     $atualizar_dt = Sistema::find($value);
    //                     $atualizar_dt->dtexclusao = now();
    //                     $response = $atualizar_dt->save();
    //                 }
    //             }
    //     return json_encode($response);
    }

    /**
     *  listar por paginação Pergunta e Respostas
    */
    public function listarPerguntaResposta(Request $request){
        // $data = DB::table('faqhelp.sistemas')
        // ->join('faqhelp.perguntas', 'sistemas.id', '=', 'perguntas.sistema_id' )
        // ->select('sistema', 'perguntas.id', 'sistema_id', 'pergunta', 'resposta')
        // ->where('perguntas.dtexclusao', '=', null)
        // ->orderBy('pergunta', 'asc')
        // ->paginate(15);
        // return response()->json($data);
    }
    /**
     * listar por paginação Códigos de Erros
     */
    public function listarCodigoErros(Request $request){
        // $data = DB::table('faqhelp.sistemas')
        // ->join('faqhelp.codigos', 'sistemas.id', '=', 'codigos.sistema_id' )
        // ->select('sistema', 'codigos.id', 'sistema_id', 'codigo', 'descricao', 'solucao')
        // ->where('codigos.dtexclusao', '=', null)
        // ->orderBy('codigo', 'asc')
        // ->paginate(15);
        // return response()->json($data);
    }

    /**
     * listar por paginação sistemas
     */
    public function listarSistemas(Request $request){
        // $data = Sistema::select('id', 'sistema')
        // ->where('dtexclusao', '=', null)
        // ->orderBy('sistema', 'asc')
        // ->paginate(15);
        // return json_encode($data);
    }

    /**
     * listar sistemas no select de cadastrar
    */
    public function sistemasListar(Request $request){
        // $sistemas = Sistema::select('id', 'sistema')
        // ->where('dtexclusao', '=', null)
        // ->orderBy('sistema', 'asc')
        // ->get();
        // return json_encode(compact('sistemas'));
    }

    /**
     * pesquisar Pergunta e Respsota, Código de erro ou sistem
     */
    public function pesquisarId( $id, $pesquisar, $opcao){

    //     $response = '';
    //     $pesquisa = ltrim(strtolower($pesquisar));
    //     $pesquisaInicio = ltrim(ucfirst($pesquisar));

    //         if($opcao === 'perguntaResposta'){
    //             // $response = DB::table('perguntas')
    //             // ->where('id', '=', $id)
    //             // ->get();
    //             if(is_numeric($id)){
    //                 $response = PerguntaResposta::find($id);
    //             }else{
    //                 $response =  PerguntaResposta::where('pergunta', 'LIKE', "$pesquisaInicio%")
    //                 // ->orWhere('pergunta', 'LIKE', "%$pesquisa")
    //                 // ->orWhere('pergunta', 'LIKE', "%$pesquisa%")
    //                 ->whereNull('dtexclusao')
    //                 ->orderBy('pergunta', 'asc')
    //                 ->paginate(10);
    //             }

    //         }else
    //             if($opcao === 'codigoErro'){
    //                 // $response = DB::table('erros')
    //                 // ->where('id', '=', $id)
    //                 // ->get();
    //                 if(is_numeric($id)){
    //                     $response = CodigoErro::find($id);
    //                 }else{
    //                     $response =  CodigoErro::where('codigo', 'LIKE', "%$pesquisa%")
    //                     // ->orWhere('descricao', 'LIKE', "%$pesquisar%")
    //                     // ->orWhere('solucao', 'LIKE', "%$pesquisar%")
    //                     ->whereNull('dtexclusao')
    //                     ->orderBy('codigo', 'asc')
    //                     ->paginate(10);
    //                 }
    //         }else
    //             if($opcao === 'sistema'){
    //                 // $response = DB::table('sistemas')
    //                 // ->where('id', '=', $id)
    //                 // ->get();
    //                 if(is_numeric($id)){
    //                     $response = Sistema::find($id);
    //                 }else{
    //                     $response =  Sistema::where('sistema', 'LIKE', "%$pesquisaInicio%")
    //                     // ->orWhere('sistema', 'LIKE', "%$pesquisa")
    //                     // ->orWhere('sistema', 'LIKE', "%$pesquisa%")
    //                     ->whereNull('dtexclusao')
    //                     ->orderBy('sistema', 'asc')
    //                     ->paginate(10);
    //                 }
    //         }
    //         return json_encode($response);
    }

}
