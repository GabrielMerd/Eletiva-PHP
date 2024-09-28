<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManutencaosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('manutencaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipamento_id'); // Chave estrangeira
            $table->date('data_inicio'); // Coluna data_inicio
            $table->date('data_fim_prevista'); // Coluna data_fim_prevista
            $table->timestamps();
    
            $table->foreign('equipamento_id')->references('id')->on('equipamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('manutencaos');
    }
}
