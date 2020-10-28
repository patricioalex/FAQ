<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerguntaResposta extends Model
{
    /**
     * Definido a tabela e os campos a serem acessados.
     *
     * O importante é a tabela  do shema para o model saber qual acessar.
     * Porém, se tiver mais schemas no DB, é importante definir o nome do schema e a tabela separando por ponto.
     *
     *
     */

    protected $table = 'faq.perguntas';
    // protected $fillable = ['sistema_id', 'pergunta', 'resposta',];

    // public function frequenciaId(){
    //     return $this->hasOne(Frequencia::class, 'id_pergunta');
    // }

}
