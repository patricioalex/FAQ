<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrequenciaPerguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequencia_perguntas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pergunta')->unsigned()->nullable();
            $table->foreign('id_pergunta')->references('id')->on('perguntas')->onDelete('cascade');
            $table->integer('frequencia_pergunta')->unsigned()->nullable();
            $table->timestamp('data_exclusao')->nullable();
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
        Schema::dropIfExists('frequencia_perguntas');
    }
}
