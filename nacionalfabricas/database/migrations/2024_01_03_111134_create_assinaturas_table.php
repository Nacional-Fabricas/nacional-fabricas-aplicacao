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
            $table->unsignedBigInteger('customer_id')->unique();
            $table->string('asaas_id')->unique();
            $table->string('billingType');
            $table->string('valor');
            $table->string('status');
            $table->string('recorrencia');
            $table->date('inicio')->nullable();
            $table->date('fim')->nullable();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

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
