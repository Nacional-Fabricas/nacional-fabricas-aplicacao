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
        Schema::create('observacaos', function (Blueprint $table) {
            $table->id();
            $table -> text('observacao')->nullable();
            $table -> string('status')->default('Pedido Atualizado');
            $table -> string('cotacao_id')->nullable();
            $table -> string('id_remetente')->nullable();
            $table -> string('id_receptor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observacaos');
    }
};
