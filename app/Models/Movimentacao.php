<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movimentacao extends Model
{
    use HasFactory;
    protected $fillable = [
        'produto_id',
        'fornecedor_id',
        'quantidade_movimentada',
        'funcionario_id',
        'tipo'
    ];

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produtos::class);
    }

    public function fornecedor(): BelongsTo
    {
        return $this->belongsTo(Fornecedor::class);
    }
}
