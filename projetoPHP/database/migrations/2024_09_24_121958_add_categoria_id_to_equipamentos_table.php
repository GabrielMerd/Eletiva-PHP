<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoriaIdToEquipamentosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('equipamentos', function (Blueprint $table) {
            if (!Schema::hasColumn('equipamentos', 'categoria_id')) {
                $table->unsignedBigInteger('categoria_id')->nullable()->after('id');
                $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            }
        });
    }    
    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('equipamentos', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
            $table->dropColumn('categoria_id');
        });
    }
}
