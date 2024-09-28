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
        Schema::disableForeignKeyConstraints();
    
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });
    
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
    
        Schema::dropIfExists('marcas');
    
        Schema::enableForeignKeyConstraints();
    }
};
