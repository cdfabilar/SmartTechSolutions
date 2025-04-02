<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Crear la tabla 'users'
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('role')->default('user'); // Columna de rol con valor predeterminado 'user'
            $table->timestamps();
        });

        // Crear la tabla 'password_reset_tokens'
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // Crear la tabla 'sessions'
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        // Insertar el usuario administrador si no existe
        $adminUser = DB::table('users')->where('email', 'admin@example.com')->first();

        if (!$adminUser) {
            // Crear el usuario administrador solo si no existe
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin123'), // Encriptar la contraseña
                'role' => 'admin', // Asignar el rol 'admin'
                'email_verified_at' => now(), // Marcar como verificado
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            // Si el usuario ya existe, actualizar su rol a 'admin'
            DB::table('users')->where('email', 'admin@example.com')->update(['role' => 'admin']);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminar las tablas en el reverso de la migración
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
