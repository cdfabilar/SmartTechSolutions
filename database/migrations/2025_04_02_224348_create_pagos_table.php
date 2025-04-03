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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('id_pago');
            $table->unsignedBigInteger('id_pedido')->nullable();
            $table->enum('metodo_pago', ['Tarjeta de Crédito', 'Tarjeta de Débito', 'PayPal']);
            $table->decimal('monto', 10, 2);
            $table->timestamp('fecha_pago')->useCurrent();
    
            // Clave foránea
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
