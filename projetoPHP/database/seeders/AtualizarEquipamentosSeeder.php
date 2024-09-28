<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipamento;

class AtualizarEquipamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Atualiza todos os equipamentos que não possuem categoria_id e atribui a categoria com ID 4
        Equipamento::whereNull('categoria_id')->update(['categoria_id' => 4]);  // Substitua 4 por um ID de categoria existente
    }
}
