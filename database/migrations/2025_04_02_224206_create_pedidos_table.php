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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id_pedido');
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->timestamp('fecha_pedido')->useCurrent();
            $table->decimal('total', 10, 2);
            $table->enum('estado', ['Pendiente', 'En Proceso', 'Enviado', 'Entregado'])->default('Pendiente');
    
            // Clave foránea
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
