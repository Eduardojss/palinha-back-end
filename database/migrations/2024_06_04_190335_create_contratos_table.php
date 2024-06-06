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
        Schema::create('contratos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('contratante_id');
            $table->foreign('contratante_id')->references('id')->on('contratantes')->onDelete('cascade');
            $table->uuid('musico_id');
            $table->foreign('musico_id')->references('id')->on('musicos')->onDelete('cascade');
            $table->date('data_apresentação');
            $table->integer('valor_contrato');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
