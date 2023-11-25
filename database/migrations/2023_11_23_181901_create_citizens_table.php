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
        Schema::create('citizens', function (Blueprint $table) {
            $table->id('id_cidadao');
            $table->string('cpf', 11)->unique();
            $table->string('nome', 50);
            $table->date('data_nascimento');
            $table->string('nome_mae', 50);
            $table->string('nome_pai', 50);
            $table->string('sexo', 1);
            $table->string('estado_civil', 10);
            $table->string('escolaridade', 30);
            $table->string('etnia', 15);
            $table->string('cns', 15);
            $table->string('telefone', 15);
            $table->string('logradouro', 60);
            $table->integer('numero');
            $table->string('bairro', 30);
            $table->string('cidade', 50);
            $table->string('cep', 8);
            $table->string('uf', 2);
            $table->string('plano_saude', 3);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->boolean('funcionario')->default(false);
            $table->string('comorbidade',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citizens');
    }
};
