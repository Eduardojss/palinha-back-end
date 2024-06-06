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
        Schema::create('musicos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome');
            $table->string('email')->unique();
            $table->boolean('ativo')->default(1);
            $table->boolean('perfil_completo')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musicos');
    }
};
