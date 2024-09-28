<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'marca_id', 'categoria_id'];

    // Relacionamento com a marca
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    // Relacionamento com a categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
