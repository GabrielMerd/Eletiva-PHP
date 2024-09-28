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
        Schema::table('equipamentos', function (Blueprint $table) {
            $table->unsignedBigInteger('marca_id')->nullable(); // Caso a marca não seja obrigatória
            $table->foreign('marca_id')->references('id')->on('marcas');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('equipamentos', function (Blueprint $table) {
            //
        });
    }
};
