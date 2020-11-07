<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrequenciaCodigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequencia_codigos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_codigo')->unsigned()->nullable();
            $table->foreign('id_codigo')->references('id')->on('perguntas')->onDelete('cascade');
            $table->integer('frequencia_codigo')->unsigned()->nullable();
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
        Schema::dropIfExists('frequencia_codigos');
    }
}
