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
        Schema::create('tbl_titulos_emitidos', function (Blueprint $table){
            $table->increments('id');
            $table->string('idExterno');
            $table->string('carteira_destino');
            $table->integer('quantidade');
            $table->integer('carteira_remetente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_titulos_emitidos');
    }
};
