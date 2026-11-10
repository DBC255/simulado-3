<?php

namespace App\Livewire\Produtos;

use App\Models\Categorias;
use App\Models\Produtos;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $descricao;
    public $id_categoria;
    public $marca;
    public $unidade_medida;
    public $quantidade_disponivel;
    public $estoque_minimo;
    public $preco_custo;
    public $preco_venda;

    public function create(){
        Produtos::create([
        'nome' => $this->nome,
        'descricao' => $this->descricao,
        'id_categoria' => $this->id_categoria,
        'marca' => $this->marca,
        'unidade_medida' => $this->unidade_medida,
        'quantidade_disponivel' => $this->quantidade_disponivel,
        'estoque_minimo' => $this->estoque_minimo,
        'preco_custo' => $this->preco_custo,
        'preco_venda' => $this->preco_venda,
        ]);
        return redirect()->route('produtos.index');
    }
    public function render()
    {
        $categoria = Categorias::all();
        return view('livewire.produtos.produto-create', compact('categoria'));
    }
}
