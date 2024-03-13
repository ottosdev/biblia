<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('favoritos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean("favorito");
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('capitulo_id');
            $table->unsignedBigInteger('livro_id');
            $table->unsignedBigInteger('versiculo_id');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('capitulo_id')->references('id')->on('capitulos');
            $table->foreign('livro_id')->references('id')->on('livros');
            $table->foreign('versiculo_id')->references('id')->on('versiculos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favoritos');
    }
};
