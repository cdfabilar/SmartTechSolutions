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
        Schema::create('repartidores', function (Blueprint $table) {
            $table->id('id_repartidor');
            $table->foreignId('id_usuario')->constrained('users')->onDelete('cascade');
            $table->string('telefono');
            $table->string('direccion');
            $table->timestamp('fecha_ingreso');
            $table->integer('entregas_totales');
            $table->timestamps(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repartidores');
    }
};
