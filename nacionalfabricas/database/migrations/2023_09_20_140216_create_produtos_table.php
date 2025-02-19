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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('id_conta');
            $table->unsignedBigInteger('id_site');
            $table->string('produto_thumbnail')->nullable();
            $table->string('produto_nome');
            $table->text('descricao')->nullable();
            $table->text('info_add')->nullable();
            $table->integer('quantidade')->nullable();
            $table->string('ncm')->nullable();
            $table->string('gtin')->nullable();
            $table->string('ean')->nullable();
            $table->string('slug')->nullable();
            $table->string('sku')->nullable();
            $table->text('produto_album')->nullable();
            $table->string('peso')->nullable();
            $table->string('altura')->nullable();
            $table->string('largura')->nullable();
            $table->string('profundidade')->nullable();
            $table->enum('status', ['Pendente', 'Ativo', 'Inativo'])->default('Pendente');
            $table->integer('visualizacoes')->default(0);
            $table->string('categorias')->nullable();
            $table->string('destaque')->nullable();
            $table->string('preco_min')->nullable();
            $table->string('preco_max')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('segmento')->nullable();
            $table->timestamps();

            $table->foreign('id_site')->references('id')->on('sites')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
