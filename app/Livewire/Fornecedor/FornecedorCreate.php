<?php

namespace App\Livewire\Fornecedor;

use App\Models\Fornecedor;
use Livewire\Component;

class FornecedorCreate extends Component
{
    public $nome_razao_social;
    public $CPF_CNPJ;
    public $telefone;
    public $endereco;
    public $email;

    public function create(){
        Fornecedor::create([
        'nome_razao_social' => $this->nome_razao_social,
        'CPF_CNPJ' => $this->CPF_CNPJ,
        'telefone' => $this->telefone,
        'endereco' => $this->endereco,
        'email' => $this->email,
        ]);
        return redirect()->route('fornecedor.index');
    }
    public function render()
    {
        return view('livewire.fornecedor.fornecedor-create');
    }
}
