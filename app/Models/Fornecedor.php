<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fornecedor extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_razao_social',
        'CPF_CNPJ',
        'telefone',
        'endereco',
        'email',
    ];
    public function movimentacao(): HasMany {
    return $this->hasMany(Movimentacao::class);
    }
}
