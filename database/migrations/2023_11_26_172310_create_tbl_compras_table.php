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
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('titulo_id');
            $table->foreign('titulo_id')->references('id')->on('tbl_titulo')->onDelete('cascade');
            $table->enum('status', ['Iniciado', 'Finalizado', 'Cancelado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_compras');
    }
};
