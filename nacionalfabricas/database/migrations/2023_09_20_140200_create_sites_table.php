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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_conta');
            $table->enum('nivel', ['Sem classificação', 'Bronze', 'Prata','Ouro', 'Platina'])->nullable()->default('Sem classificação');
            $table->string('banner')->nullable();
            $table->string('logo')->nullable();
            $table->string('primeiro_destaque')->nullable();
            $table->string('segundo_destaque')->nullable();
            $table->string('terceiro_destaque')->nullable();
            $table->string('nome_industria')->nullable();
            $table->text('descricao_industria')->nullable();
            $table->string('segmento')->nullable();
            $table->string('produtos_tipo')->nullable();
            $table->string('tributacao')->nullable();
            $table->string('tempo_resposta')->nullable();
            $table->string('atendimento')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('local_atuacao')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();

            $table->foreign('id_conta')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
