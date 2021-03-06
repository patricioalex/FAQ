<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frequencia extends Model
{
    /**
     * Definido a tabela e os campos a serem acessados.
     *
     * O importante é a tabela  do shema para o model saber qual acessar.
     * Porém, se tiver mais schemas no banco de dados, é importante definir o nome do schema e a tabela separando por ponto.
     *
     *
     */
    protected $table = "faq.frequencias";

    // protected $fillable = ['id_pergunta', 'frequencia'];
    // protected $primaryKey = 'id_pergunta';

}
