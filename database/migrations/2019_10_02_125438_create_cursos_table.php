<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imagem');
            $table->string('grau_id');
            $table->string('nome');
            $table->string('ciclo');
            $table->string('perfil_saida');
            $table->string('plano_curicular');
            $table->string('admissao');
            $table->string('regime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
