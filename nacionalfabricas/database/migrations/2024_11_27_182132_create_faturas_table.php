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
        Schema::create('faturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subscription_id');
            $table->string('stripe_invoice_id')->unique(); // ID da fatura no Stripe
            $table->string('payment_intent_id')->nullable(); // ID do PaymentIntent vinculado
            $table->string('status'); // Ex.: 'Pendente', 'Pago', 'Falhou'
            $table->decimal('amount_due', 10, 2); // Valor a ser pago
            $table->decimal('amount_paid', 10, 2)->default(0); // Valor efetivamente pago
            $table->timestamp('due_date')->nullable(); // Data de vencimento
            $table->string('payment_method_type')->nullable(); // Ex.: "boleto", "card"
            $table->timestamp('next_payment_attempt')->nullable();
            $table->index('stripe_invoice_id');
            $table->timestamps();

            $table->foreign('subscription_id')->references('id')->on('assinaturas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faturas');
    }
};
