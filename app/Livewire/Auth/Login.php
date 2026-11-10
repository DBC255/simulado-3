<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login(){
        
            return redirect()->route('categorias.index');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
