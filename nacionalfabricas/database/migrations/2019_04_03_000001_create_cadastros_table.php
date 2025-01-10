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
        Schema::create('cadastros', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('id_conta')->unique();
            $table->string('id_plano')->nullable();
            $table->string('id_assinatura')->nullable();
            $table->string('id_time')->nullable();
            $table->string('id_site')->nullable();
            $table->string('estado')->nullable();
            $table->string('cidade')->nullable();
            $table->string('cep')->nullable();
            $table->string('bairro')->nullable();
            $table->string('endereco')->nullable();
            $table->string('num')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('nome_empresa')->nullable();
            $table->string('fabricante')->nullable();
            $table->string('ativo')->nullable();
            $table->string('isento_re')->nullable();
            $table->string('registro_estadual')->nullable();
            $table->string('complemento')->nullable();
            $table->string('email_contato')->nullable();
            $table->string('nome_contato')->nullable();
            $table->string('celular_contato')->nullable();
            $table->string('telefone_contato')->nullable();
            $table->timestamps();

            $table->foreign('id_conta')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastros');
    }
};
