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
        Schema::create('visualizacaos', function (Blueprint $table) {
            $table->id();
            $table->integer('visualizacoes');
            $table->string('id_conta');
            $table->unsignedBigInteger('id_produto');
            $table->timestamps();

            $table->foreign('id_produto')->references('id')->on('produtos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visualizacaos');
    }
};
