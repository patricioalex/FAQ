<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerguntaResposta extends Model
{
    use HasFactory;

    protected $table = 'faq.perguntas';

    /**
     * Um para um
     *
     * @return void
     */
    public function frequenciaID(){
        return $this->hasOne(FrequenciaPergunta::class, 'id_pergunta');
    }
}
