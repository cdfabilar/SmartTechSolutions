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
        Schema::create('detalles_pedido', function (Blueprint $table) {
            $table->id('id_detalle');
            $table->unsignedBigInteger('id_pedido')->nullable();
            $table->unsignedBigInteger('id_producto')->nullable();
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 10, 2);
            $table->decimal('subtotal', 10, 2);
    
            // Claves foráneas
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos')->onDelete('set null');
            $table->foreign('id_producto')->references('id_producto')->on('productos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_pedido');
    }
};
