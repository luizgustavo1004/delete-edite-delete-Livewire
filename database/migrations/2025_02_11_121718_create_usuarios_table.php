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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 80)->nullable(false);
            $table->string('email', 100)->nullable(false)->unique();
            $table->string('celular', 20)->nullable(false);
            $table->string('estado_civil', 20)->nullable(false);
            $table->date('data_nascimento')->nullable(false);
            $table->string('cidade', 100)->nullable(false);
            $table->string('estado', 80)->nullable(false);
            $table->string('endereco', 100)->nullable(false);
            $table->string('cep', 100)->nullable(false);
            $table->string('password', 100)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
