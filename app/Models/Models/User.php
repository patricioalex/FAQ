<?php

// namespace App;
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * Definido a tabela e os campos a serem acessados.
     *
     * Os campos não são obrigatorios definir.
     * O importante é a tabela  para o sistema saber qual acessar.
     * Porém, se tiver mais schemas no DB, é importante definir o nome do schema e a tabela separando por ponto.
     * Se o id da tabela tiver um nome diferente, precisa informar a $primaryKey
     *
     */

    // protected $table = 'faqhelp.users';
    protected $table = 'portal.gsis_usuario';
    protected $primaryKey = 'idgsis_usuario';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'usu_nome', 'usu_email', 'usu_senha',
        //  'name', 'email', 'password',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'usu_senha' //, 'remember_token',
        // 'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
