<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('planos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('slug');
            $table->string('trial')->default('14 Dias');
            $table->string('recorrencia');
            $table->integer('max_usuarios');
            $table->integer('max_produtos');
            $table->decimal('preco', 10, 2);
            $table->text('descricao');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planos');
    }
};
