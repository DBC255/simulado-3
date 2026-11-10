<?php

namespace App\Livewire\Movimentacao;

use App\Models\Fornecedor;
use App\Models\Produtos;
use App\Models\User;
use Livewire\Component;

class MovimentacaoCreate extends Component
{
    public function render()
    {
        $produto = Produtos::all();
        $fornecedores = Fornecedor::all();
        $funcionarios = User::all();
        return view('livewire.movimentacao.movimentacao-create', compact('produto', 'fornecedores', 'funcionarios'));
    }
}
