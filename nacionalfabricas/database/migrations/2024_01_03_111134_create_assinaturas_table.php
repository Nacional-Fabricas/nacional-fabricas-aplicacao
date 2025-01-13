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
        Schema::create('assinaturas', function (Blueprint $table) {

            $table->id();
            $table->string('id_conta');
            $table->string('id_plano');
            $table->unsignedBigInteger('customer_id')->unique();// Identificador do cliente no Asaas
            $table->string('asaas_id')->unique(); // Identificador único da assinatura no Asaas
            $table->string('tipo_cobranca'); // Tipo de cobrança (UNDEFINED, CREDIT_CARD, BOLETO, etc.)
            $table->decimal('valor', 10, 2); // Valor da assinatura
            $table->date('vencimento_primeira_cobranca'); // Data de vencimento da primeira cobrança
            $table->string('ciclo'); // Ciclo de cobrança (WEEKLY, MONTHLY, etc.)
            $table->string('descricao')->nullable(); // Descrição da assinatura
            $table->date('inicio')->nullable();// Data Inicio para a assinatura
            $table->date('fim')->nullable();// Data final para a assinatura
            $table->integer('maximo_cobrancas')->nullable(); // Número máximo de cobranças a serem geradas
            $table->string('identificador_cobranca')->nullable(); // Identificador da assinatura no seu sistema
            $table->json('desconto')->nullable(); // Descontos aplicados (campo JSON)
            $table->json('juros_vencimento')->nullable(); // Juros após o vencimento (campo JSON)
            $table->json('multa_vencimento')->nullable(); // Multa após o vencimento (campo JSON)
            $table->json('divisao_vencimento')->nullable(); // Informações sobre divisão de pagamento (campo JSON)
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

            /** $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->id();
            $table->string('id_conta');
            $table->string('id_plano');
            $table->unsignedBigInteger('customer_id')->unique();
            $table->string('asaas_id')->unique();
            $table->string('tipo_cobranca');
            $table->string('valor');
            $table->string('status');
            $table->string('recorrencia');
            $table->date('inicio')->nullable();
            $table->date('fim')->nullable();
            $table->timestamps();

             */


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assinaturas');
    }
};
