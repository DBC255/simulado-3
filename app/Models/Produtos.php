<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produtos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descricao',
        'id_categoria',
        'marca',
        'unidade_medida',
        'quantidade_disponivel',
        'estoque_minimo',
        'preco_custo',
        'preco_venda',
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categorias::class);
    }
    public function produto(): HasMany {
    return $this->hasMany(Movimentacao::class);
    }
}
