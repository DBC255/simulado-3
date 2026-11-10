<?php

namespace App\Livewire\Categorias;

use App\Models\Categorias;
use Livewire\Component;

class CategoriaCreate extends Component
{
    public $nome;

    public function create(){
        Categorias::create([
            'nome' => $this->nome,
        ]);
         return redirect()->route('categorias.index');
    }

    public function render()
    {
        return view('livewire.categorias.categoria-create');
    }
}
