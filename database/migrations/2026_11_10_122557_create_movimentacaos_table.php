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
        Schema::create('movimentacaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_fornecedor');
            $table->foreign('id_fornecedor')->references('id')->on('fornecedors');
            $table->unsignedBigInteger('funcionario_id');
            $table->foreign('funcionario_id')->references('id')->on('users');
            $table->unsignedBigInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->boolean('tipo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimentacaos');
    }
};
