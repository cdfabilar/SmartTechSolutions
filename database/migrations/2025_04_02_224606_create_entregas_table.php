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
        Schema::create('entregas', function (Blueprint $table) {
            $table->id('id_entrega');
            $table->unsignedBigInteger('id_pedido')->nullable();
            $table->date('fecha_entrega_estimada');
            $table->date('fecha_entrega_real')->nullable();
            $table->enum('estado', ['Pendiente', 'En Ruta', 'Entregado'])->default('Pendiente');
    
            // Clave foránea
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entregas');
    }
};
