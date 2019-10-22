<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('texto')->nullable();
            // $table->text('subtitulo_texto')->nullable();
            // $table->text('subtitulo_destaque')->nullable();
            $table->text('destaque')->nullable();
            $table->string('imagem_destaque')->nullable();
            $table->string('imagem_texto')->nullable();
            $table->bigInteger('page_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('text_pages');
    }
}
