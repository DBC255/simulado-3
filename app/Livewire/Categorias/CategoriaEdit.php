<?php

namespace App\Livewire\Categorias;

use App\Models\Categorias;
use Livewire\Component;

class CategoriaEdit extends Component
{
    public $nome;
    public $categoriaID;

    public function mount($id){
        $this->nome = Categorias::find($id)->nome;
        $this->categoriaID = Categorias::find($id)->id;
    }

    public function update(){
        $categoria = Categorias::find($this->categoriaID);

        $categoria->nome = $this->nome;
        $categoria->update();
        return redirect()->route('categorias.index');
    }

    public function render()
    {
        return view('livewire.categorias.categoria-edit');
    }
}
