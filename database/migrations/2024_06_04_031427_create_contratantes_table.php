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
        Schema::create('contratantes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome');
            $table->string('email')->unique();
            $table->enum('tipo', ['contratante_fisico', 'contratante_juridico']);
            $table->string('cpf_cnpj')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratantes');
    }
};
