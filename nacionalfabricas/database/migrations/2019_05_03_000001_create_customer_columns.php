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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cadastro_id'); // Chave estrangeira para a tabela 'cadastros'
            $table->string('asaas_id')->unique(); // ID do customer no Asaas
            $table->string('nome');
            $table->string('email');
            $table->string('tipo_pessoa')->nullable();
            $table->string('cpf_cnpj')->nullable(); // CPF ou CNPJ
            $table->string('telefone')->nullable(); // Telefone
            $table->string('celular')->nullable(); // Celular
            $table->string('cep')->nullable(); // CEP
            $table->string('endereco')->nullable(); // Endereço
            $table->string('numero')->nullable(); // Número
            $table->string('complemento')->nullable(); // Complemento
            $table->string('bairro')->nullable(); // Bairro
            $table->string('cidade')->nullable(); // Cidade
            $table->string('estado')->nullable(); // Estado
            $table->timestamps();

            $table->foreign('cadastro_id')->references('id')->on('cadastros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('customers');
    }
};
