<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrequenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pergunta')->unsigned()->nullable();
            $table->foreign('id_pergunta')->references('id')->on('perguntas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('frequencia')->unsigned()->nullable();
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
        Schema::dropIfExists('frequencias');
    }
}
