<?php

namespace App\Livewire\Produtos;

use App\Models\Categorias;
use App\Models\Produtos;
use Livewire\Component;
use PhpParser\Builder\Function_;

class ProdutoEdit extends Component
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
    public $produtoID;

    public function mount($id){
        $produto = Produtos::find($id);
        $this->produtoID = $produto->id;
        $this->nome = $produto->nome;
        $this->descricao = $produto->descricao;
        $this->id_categoria = $produto->id_categoria;
        $this->marca = $produto->marca;
        $this->unidade_medida = $produto->unidade_medida;
        $this->quantidade_disponivel = $produto->quantidade_disponivel;
        $this->estoque_minimo = $produto->estoque_minimo;
        $this->preco_custo = $produto->preco_custo;
        $this->preco_venda = $produto->preco_venda;
    }

    public Function update(){
        $produto = Produtos::find($this->produtoID);
        $produto->nome = $this->nome;
        $produto->descricao = $this->descricao;
        $produto->id_categoria = $this->id_categoria;
        $produto->marca = $this->marca;
        $produto->unidade_medida = $this->unidade_medida;
        $produto->quantidade_disponivel = $this->quantidade_disponivel;
        $produto->estoque_minimo = $this->estoque_minimo;
        $produto->preco_custo = $this->preco_custo;
        $produto->preco_venda = $this->preco_venda;

        $produto->update();

        return redirect()->route('produtos.index');
    }

    public function render()
    {
        $categoria = Categorias::all();
        return view('livewire.produtos.produto-edit', compact('categoria'));
    }
}
