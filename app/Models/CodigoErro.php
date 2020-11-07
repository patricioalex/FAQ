<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodigoErro extends Model
{
    use HasFactory;

    protected $table = 'faq.codigos';

    /**
     * Um para um
     *
     * @return void
     */
    public function frequenciaID(){
        return $this->hasOne(FrequenciaCodigo::class, 'id_codigo');
    }
}
