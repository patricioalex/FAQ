<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perguntas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sistema_id')->unsigned();
            $table->foreign('sistema_id')->references('id')->on('sistemas')->onDelete('cascade');
            $table->string('pergunta');
            $table->text('resposta');
            // $table->string('imagem')->nullable();
            $table->string('usuario')->nullable();
            $table->timestamp('dtexclusao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perguntas');
    }
}
