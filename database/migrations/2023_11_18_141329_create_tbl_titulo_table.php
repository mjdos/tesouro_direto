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
            $table->integer('idExterno');
            $table->string('nome');
            $table->string('dataVencimento');
            $table->string('rentabilidadeAnual');
            $table->string('valorNominal');
            $table->string('aliquotaIR');
            $table->string('taxa_b3');
            $table->string('isentoIOF');
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
