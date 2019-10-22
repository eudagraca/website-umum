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
            $table->text('ciclo')->nullable();
            $table->text('perfil_saida')->nullable();
            $table->text('plano_curicular')->nullable();
            $table->text('admissao')->nullable();
            $table->text('variante')->nullable();
            $table->string('regime')->nullable();
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
