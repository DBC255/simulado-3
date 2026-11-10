<?php

namespace App\Livewire\Categorias;

use App\Models\Categorias;
use Livewire\Component;

class CategoriaIndex extends Component
{
    public function delete($id){
        $categoria = Categorias::find($id);
        $categoria->delete();
    }

    public function render()
    {
        $categorias = Categorias::all();
        return view('livewire.categorias.categoria-index', compact('categorias'));
    }
}
