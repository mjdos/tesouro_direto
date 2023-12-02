<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tbl_titulo', function (Blueprint $table) {
            $table->id();
            $table->integer('idExterno')->nullable();
            $table->string('sigla')->nullable();
            $table->string('nome')->nullable();
            $table->string('dataVencimento')->nullable();
            $table->string('rentabilidadeAnual')->nullable();
            $table->string('valorNominal')->nullable();
            $table->string('aliquotaIR')->nullable();
            $table->string('taxa_b3')->nullable();
            $table->string('isentoIOF')->nullable();
            $table->string('hora')->nullable();
            $table->string('hora_status')->nullable();
            $table->string('dia')->nullable();
            $table->string('dia_status')->nullable();
            $table->string('semana')->nullable();
            $table->string('semana_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_titulo');
    }
};
