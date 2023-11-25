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
        Schema::create('applicationns', function (Blueprint $table) {
            $table->id('id_campanha');
            $table->foreignId('id_cidadao')->constrained('citizens', 'id_cidadao');
            $table->foreignId('id_vacina')->constrained('vacines', 'id_vacina');
            $table->integer('dose');
            $table->date('data_aplicacao');
            $table->string('nome_aplicador', 50);
            $table->string('unidade_saude', 30);
            $table->string('lote', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicationns');
    }
};
