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
    Schema::create('clientes', function (Blueprint $table) {
        $table->id(); // ID único
        $table->string('nome'); // Nome do cliente
        $table->string('email')->unique(); // Email único
        $table->string('telefone')->nullable(); // Telefone opcional
        $table->timestamps(); // Created_at e Updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
