<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manutencaos extends Model
{
    use HasFactory;

    // Defina explicitamente o nome da tabela no banco de dados
    protected $table = 'manutencaos';

    protected $fillable = ['equipamento_id', 'data_inicio', 'data_fim_prevista'];

    // Relacionamento com Equipamento
    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class, 'equipamento_id'); // Verifique o nome da chave estrangeira
    }
}
