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
        Schema::create('tbl_mercado', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('titulo_id');
            $table->foreign('titulo_id')->references('id')->on('tbl_titulo')->onDelete('cascade');
            $table->string('carteira_vendedora');
            $table->string('carteira_compradora');
            $table->dateTime('data_hora');
            $table->decimal('valor_operacao', 10, 2);
            $table->integer('quantidade');
            $table->decimal('valor_unitario', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_mercado');
    }
};
