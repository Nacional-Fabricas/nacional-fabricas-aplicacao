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
        Schema::create('cotacao_produtos', function (Blueprint $table) {
            $table->id();
            $table->integer('cotacao_id');
            $table->integer('id_produto');
            $table->integer('quantidade')->nullable()->default(0);
            $table->decimal('preco', 10, 2)->nullable()->default(0);
            $table->string('icms_st')->nullable()->default(0);
            $table->string('icms')->nullable()->default(0);
            $table->string('ipi')->nullable()->default(0);
            $table->string('total', 10, 2)->nullable()->default(0);
            $table->string('total_imp', 10, 2)->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotacao_produtos');
    }
};
