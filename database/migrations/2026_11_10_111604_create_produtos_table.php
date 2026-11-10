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
            $table->string('nome');
            $table->text('descricao');
            $table->unsignedBigInteger('id_categoria')->nullable(false);
            $table->string('marca');
            $table->string('unidade_medida', 4);
            $table->bigInteger('quantidade_disponivel')->default(0);
            $table->bigInteger('estoque_minimo')->nullable(false);
            $table->decimal('preco_custo', 10, 2);
            $table->decimal('preco_venda', 10, 2);
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->timestamps();
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
