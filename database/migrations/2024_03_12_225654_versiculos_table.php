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
        Schema::create('versiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('capitulo_id');
            $table->integer('numero');
            $table->text('texto');
            $table->timestamps();

            $table->foreign('capitulo_id')->references('id')->on('capitulos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versiculos');
    }
};
