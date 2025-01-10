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
        Schema::create('cotacaos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_receptor');
            $table->integer('id_remetente');
            $table->string('subtotal')->nullable()->default('0');
            $table->string('valor')->nullable()->default('0');
            $table->string('valor_entrega')->nullable()->default('0');
            $table->string('desconto')->nullable()->default('0');
            $table->string('forma_pagamento')->nullable();
            $table->string('condicoes')->nullable();
            $table->string('prazo_entrega')->nullable()->default('0');
            $table->string('tipo_frete')->nullable();
            $table->enum('leitura_remetente', ['lido', 'naolido'])->nullable();
            $table->enum('leitura_receptor', ['lido', 'naolido'])->nullable();
            $table->enum('status_remetente', ['Aprovado', 'Aguardando', 'Cancelado','Nova Proposta', 'Finalizado', 'Atualizado'])->nullable();
            $table->enum('status_receptor', ['Aprovado', 'Aguardando', 'Cancelado','Nova Proposta', 'Finalizado', 'Atualizado'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotacaos');
    }
};
