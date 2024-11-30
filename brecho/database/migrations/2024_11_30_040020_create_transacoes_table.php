<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('transacoes', function (Blueprint $table) {
            $table->id(); // ID único
            $table->unsignedBigInteger('cliente_id'); // Relacionamento com clientes
            $table->unsignedBigInteger('roupa_id'); // Relacionamento com roupas
            $table->string('tipo'); // Tipo da transação (troca ou venda)
            $table->date('data_operacao'); // Data da operação
            $table->timestamps();
    
            // Chaves estrangeiras
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('roupa_id')->references('id')->on('roupas')->onDelete('cascade');
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacoes');
    }
};
