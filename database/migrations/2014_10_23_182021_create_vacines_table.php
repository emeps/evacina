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
        Schema::create('vacines', function (Blueprint $table) {
            $table->id('id_vacina');
            $table->string('nome', 50);
            $table->string('fabricante', 50);
            $table->string('lote', 20);
            $table->date('data_validade');
            $table->integer('doses');
            $table->string('doenca', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacines');
    }
};
