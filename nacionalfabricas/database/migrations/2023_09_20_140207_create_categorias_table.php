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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_site');
            $table->string('id_conta')->nullable();
            $table->string('nome')->nullable();
            $table->string('slug')->nullable();
            $table->string('nivel')->nullable();
            $table->string('categoria_pai')->nullable();
            $table->string('ativo')->nullable();
            $table->text('descricao')->nullable();
            $table->timestamps();

            $table->foreign('id_site')->references('id')->on('sites')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
